<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\test;
use App\article;

class AdminController extends Controller
{

    public function home()
    {
        return view('Admin.home');
    }

    public function test()
    {
        $article = article::all();
        return view('Admin.test', ['article' => $article]);
    }

    public function store(Request $request)
    {
       
       // dd($request);
        $this->validate($request, [
            // 'created_by' => 'required',
            // 'delete_by' => 'required',
            'date' => 'required',
            'title' => 'required',
            'intro' => 'required',
            'content' => 'required',
            'iduser' => 'required',
            'flag' => 'required',
            'aer_seo' => 'required',
            'thumb' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',

        ]);

        // menyimpan data file yang diupload ke variabel $file
        $test = $request->file('thumb');

        $nama_file = time() . "_" . $test->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_test';
        $test->move($tujuan_upload, $nama_file);
       
       test::create([
            // 'created_by' => $request->created_by,
            // 'delete_by' => $request->delete_by,
            'date' => $request->date,
            'title' => $request->title,
            'intro' => $request->intro,
            'content' => $request->content,
            'iduder' => $request->isuder,
            'flag' => $request->flag,
            'art_seo' => $request->art_seo,
            'thumb' => $nama_file,
            
        ]);

        return redirect('/test');
    }

    public function test2()
    {
      
        return view('Admin.test2');
        // $data = $response -> json();
        // dd($data);
    }


}

