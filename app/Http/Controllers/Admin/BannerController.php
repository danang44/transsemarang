<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\banner;

class bannerController extends Controller
{
    public function index()
    {
        $banner = banner::all();
        return view('Admin.banner',['banner' => $banner]);
    }

    public function store(Request $request)
    {
        //dd($request);
        $this->validate($request, [
            'user_id' => 'required',
            'deskripsi' => 'required',
           
        ]);

        banner::create([
            'user_id'  => $request -> user_id,
            'deskripsi' => $request->deskripsi,
            
        ]);


        return redirect('/banner');
    }

    public function destroy(Request $request)
    {
        $id = $request->input('delete_id');
        $banner = banner::find($id);
        $banner->delete();
        return redirect()->back()->with('status', 'Data berhasil dihapus');
        
    }

}