<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\article;
use App\card;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use App\slider;

class WelcomeController extends Controller
{
    public function index()
    {
        $RNarticles = article::take(9)->orderBy('id','desc')->get();
        $PNarticles = article::take(3)->orderBy('view','desc')->get();
        $sliderTop  = slider::all();

        $Cpayment   = card::all();



        $headers = [
            'Authorization:Basic czNtNHI0bmc6czNtNHI0bmdOZGVz',
            'Cookie: ci_session=a%3A5%3A%7Bs%3A10%3A%22session_id%22%3Bs%3A32%3A%22cc4bc374b026709fd18f1cb6cd7c92f5%22%3Bs%3A10%3A%22ip_address%22%3Bs%3A13%3A%22112.78.39.189%22%3Bs%3A10%3A%22user_agent%22%3Bs%3A21%3A%22PostmanRuntime%2F7.29.2%22%3Bs%3A13%3A%22last_activity%22%3Bi%3A1665562390%3Bs%3A9%3A%22user_data%22%3Bs%3A0%3A%22%22%3B%7D6fe9ee344dc6bc317b3c063dce14dbda; csrf_cookie_name=ba0325b1bb49557a555522e06d3d2565',
            'Content-Type: application/json',
        ];

        $ch = curl_init();

        curl_setopt_array($ch, array(
            CURLOPT_URL => "https://gps.brtnusantara.com/dev/trans_semarang/api_v1/getCorridor",// your preferred link
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                'Authorization:Basic czNtNHI0bmc6czNtNHI0bmdOZGVz',
            'Cookie: ci_session=a%3A5%3A%7Bs%3A10%3A%22session_id%22%3Bs%3A32%3A%22cc4bc374b026709fd18f1cb6cd7c92f5%22%3Bs%3A10%3A%22ip_address%22%3Bs%3A13%3A%22112.78.39.189%22%3Bs%3A10%3A%22user_agent%22%3Bs%3A21%3A%22PostmanRuntime%2F7.29.2%22%3Bs%3A13%3A%22last_activity%22%3Bi%3A1665562390%3Bs%3A9%3A%22user_data%22%3Bs%3A0%3A%22%22%3B%7D6fe9ee344dc6bc317b3c063dce14dbda; csrf_cookie_name=ba0325b1bb49557a555522e06d3d2565',
            'Content-Type: application/json',
            ),
        ));
        $response = curl_exec($ch);
        $data=json_decode($response,true);
        // $datas=$data['data'];
        foreach ($data['data'] as $row) {
            $result[] = array(
                'urut' => $row['urut'],
                'origin' => $row['origin'],
                'toward' => $row['toward'],
                'jam_operasional' => $row['jam_operasional'],
                'jumlah_bis' => $row['jumlah_bis'],
                'jumlah_halte' => $row['jumlah_halte'],
                'kor' => $row['kor'],


            );
        }
        // dd($data);
        return view('welcome', compact('RNarticles','PNarticles','sliderTop','Cpayment','result'));
    }


}
