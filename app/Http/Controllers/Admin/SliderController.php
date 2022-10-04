<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\slider;

class SliderController extends Controller
{
    public function index()
    {
        $slider = slider::all();
        return view('Admin.slider',['slider' => $slider]);
    }

    public function store(Request $request)
    {
        //dd($request);
        $this->validate($request, [

            'judul' => 'required',
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',

        ]);

        // menyimpan data file yang diupload ke variabel $file
        $slider = $request->file('gambar');

        $nama_file = time() . "_" . $slider->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_slider';
        $slider->move($tujuan_upload, $nama_file);

        slider::create([
            'gambar' => $nama_file,
            'judul' => $request->judul,
            
        ]);


        return redirect('/slider');
    }

    public function destroy(Request $request)
    {
        $id = $request->input('delete_id');
        $slider = slider::find($id);
        $slider->delete();
        return redirect()->back()->with('status', 'Data berhasil dihapus');
        
    }

}