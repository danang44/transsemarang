<?php

namespace App\Http\Controllers;
use App\article;
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

    public function detailarticle(Request $request, $title)
    {
        $article = article::where('title', $title)->first();
            return view('detailarticle', ['article' => $article]);
    }


}
