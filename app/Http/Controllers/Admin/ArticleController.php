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

<<<<<<< Updated upstream
    public function store(Request $request)
    {
        //dd($request);
        $this->validate($request, [
            'created_by' => 'required',
            // 'delete_by' => 'required',
            'date' => 'required',
            'title' => 'required',
            'intro' => 'required',
            'content' => 'required',
            'aer_seo' => 'required',
            'iduser' => 'required',
            'thumb' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',

        ]);

        // menyimpan data file yang diupload ke variabel $file
        $article = $request->file('image');

        $nama_file = time() . "_" . $article->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_article';
        $article->move($tujuan_upload, $nama_file);

        article::create([
            'created_by' => $request->created_by,
            // 'delete_by' => $request->delete_by,
            'date' => $request->date,
            'title' => $request->title,
            'intro' => $request->intro,
            'intro' => $request->intro,
            'content' => $request->content,
            'art_seo' => $request->art_seo,
            'iduder' => $request->isuder,
            'thumb' => $nama_file,
            
        ]);

        return redirect('/article');
    }
=======
>>>>>>> Stashed changes
 

    public function destroy(Request $request)
    {
        $id = $request->input('delete_id');
        $article = article::find($id);
        $article->delete();
        return redirect()->back()->with('status', 'Data berhasil dihapus');
        
    }

}