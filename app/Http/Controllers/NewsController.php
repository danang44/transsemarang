<?php

namespace App\Http\Controllers;
use App\article;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function portal()
    {
        $article = article::all();
        return view('portal', ['article' => $article]);
    }

    public function index()
    {
        $article = article::all();
        return view('news', ['article' => $article]);
    }



    public function detailarticle(Request $request, $id)
    {
        $article = article::where('id', $id)->first();
        DB::table('article')->where('id', $request->id)->increment('view');

            return view('detailarticle', ['article' => $article]);
    }


}
