<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
Use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\card;

class CardController extends Controller
{
    public function index()
    {
        $card = card::all();
        return view('Admin.card',['card' => $card]);
    }

    public function store(Request $request)
    {
        //dd($request);
        $this->validate($request, [
            'created_by' => 'required',
            // 'delete_by' => 'required',
            'name' => 'required',
            'desc' => 'required',
            'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',

        ]);

        // menyimpan data file yang diupload ke variabel $file
        $card = $request->file('image');

        $nama_file = time() . "_" . $card->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_card';
        $card->move($tujuan_upload, $nama_file);

        card::create([
            'created_by' => $request->created_by,
            // 'delete_by' => $request->delete_by,
            'name' => $request->name,
            'desc' => $request->desc,
            'image' => $nama_file,
            
        ]);

        return redirect('/card');
    }

    public function destroy(Request $request)
    {
        $id = $request->input('delete_id');
        $card = card::find($id);
        $card->delete();

        $user =Auth::user()->id;
        $card->delete_by= $user;
        $card->update();

        return redirect()->back()->with('status', 'Data berhasil dihapus');
        
    }

}