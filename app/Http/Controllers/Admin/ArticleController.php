<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;
use App\article;

class ArticleController extends Controller
{
    public function index()
    {

        // $article = article::latest()->get();
        $article = article::all();

        return view('Admin.article',['article' => $article]);
    }

    public function add()
    {
        $article = article::all();

        return view('admin.article_add', ['article' => $article]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // dd($request);
        // $validator = $this->validate($request, [
       $this->validate($request, [
           
            // 'delete_by' => 'required',
            'date' => 'required',
            'title' => 'required',
            'intro' => 'required',
            'content' => 'required',
            'flag' => 'required',
            'art_seo' => 'nullable',
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
// dd($validator);
        // menyimpan data file yang diupload ke variabel $file
        $article = $request->file('gambar');

        $nama_file = time() . "_" . $article->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_tes';
        $article->move($tujuan_upload, $nama_file);

        // $status = article::create([
        article::create([
            
            // 'delete_by' => $request->delete_by,
            'date' => $request->date,
            'title' => $request->title,
            // 'intro' => $request->intro,
            'intro' => $request->intro,
            'content' => $request->content,
            'flag' => $request->flag,
            'art_seo' => $request->art_seo,
            'iduser' => Auth::user()->id,
            'gambar' => $nama_file

        ]);

        // dd($status);

        return redirect('/article');
    }


    public function destroy(Request $request)
    {
        $id = $request->input('delete_id');
        $article = article::find($id);
        $article->delete();
        return redirect()->back()->with('status', 'Data berhasil dihapus');

    }

}
