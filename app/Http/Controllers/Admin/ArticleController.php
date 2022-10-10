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

 

    public function destroy(Request $request)
    {
        $id = $request->input('delete_id');
        $article = article::find($id);
        $article->delete();
        return redirect()->back()->with('status', 'Data berhasil dihapus');
        
    }

}