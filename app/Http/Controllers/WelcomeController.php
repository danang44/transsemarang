<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\article;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {
        $RNarticles = article::take(9)->orderBy('id','desc')->get();
        $PNarticles = article::take(3)->orderBy('id','desc')->get();

        return view('welcome', compact('RNarticles', 'PNarticles'));
    }


}
