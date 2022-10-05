<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
Use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\link;

class LinkController extends Controller
{
    public function index()
    {
        $link = link::all();
        return view('Admin.link',['link' => $link]);
    }

    public function store(Request $request)
    {
        //dd($request);
        $this->validate($request, [
            'created_by' => 'required',
            // 'delete_by' => 'required',
            'title' => 'required',
            'link' => 'required',
            'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',

        ]);

        // menyimpan data file yang diupload ke variabel $file
        $link = $request->file('image');

        $nama_file = time() . "_" . $link->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_link';
        $link->move($tujuan_upload, $nama_file);

        link::create([
            'created_by' => $request->created_by,
            // 'delete_by' => $request->delete_by,
            'title' => $request->title,
            'link' => $request->link,
            'image' => $nama_file,
            
        ]);

        return redirect('/link');
    }

    public function destroy(Request $request)
    {
        $id = $request->input('delete_id');
        $link = link::find($id);
        $link->delete();

        $user =Auth::user()->id;
        $link->delete_by= $user;
        $link->update();

        return redirect()->back()->with('status', 'Data berhasil dihapus');
        
    }

}