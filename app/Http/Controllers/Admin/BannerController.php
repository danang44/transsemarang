<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\banner;
Use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class bannerController extends Controller
{
    public function index()
    {
        $banner = banner::all();
        return view('Admin.banner',['banner' => $banner]);
    }

    public function add()
    {
        $banner = banner::all();
         
        return view('admin.banner_add', ['banner' => $banner]);
    }

    public function store(Request $request)
    {
        //dd($request);
        $this->validate($request, [
            'user_id' => 'required',
            'created_by' => 'required',
            'deskripsi' => 'required',
           
        ]);

        banner::create([
            'user_id' => $request->user_id,
            'created_by' => $request->created_by,
            'deskripsi' => $request->deskripsi,
            
        ]);


        return redirect('/banner');
    }
   
    public function edit($id)
    {
        $banner = DB::table('banners')->where('id', $id)->get();
     
        return view('admin.banner_edit', ['banner' => $banner]);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        DB::table('banners')->where('id', $request->id)->update([

            'id' => $request->id,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect('/banner');
    }

    public function destroy(Request $request)
    {
        
                $id = $request->input('delete_id');
                $banner = banner::find($id);
                $banner->delete();
       
        $user =Auth::user()->id;
        $banner->deleted_by= $user;
        $banner->update();

        return redirect()->back()->with('status', 'Data berhasil dihapus');
        
    }

}