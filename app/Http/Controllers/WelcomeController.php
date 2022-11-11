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


        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => "https://gps.brtnusantara.com/dev/trans_semarang/api_v1/getAllRoutes",// your preferred link
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
            'Authorization:Basic czNtNHI0bmc6czNtNHI0bmdOZGVz',
            'Cookie: ci_session=a%3A5%3A%7Bs%3A10%3A%22session_id%22%3Bs%3A32%3A%22d272ff1926c229266992aeb34d34aa75%22%3Bs%3A10%3A%22ip_address%22%3Bs%3A13%3A%22103.17.244.13%22%3Bs%3A10%3A%22user_agent%22%3Bs%3A21%3A%22PostmanRuntime%2F7.29.2%22%3Bs%3A13%3A%22last_activity%22%3Bi%3A1666948544%3Bs%3A9%3A%22user_data%22%3Bs%3A0%3A%22%22%3B%7Ddda011cfd7756535990f45662d686113; csrf_cookie_name=6c0e4dcdd5af57b37caa1fa3e754b262',
            'Content-Type: application/json',
            ),
        ));
        $response = curl_exec($ch);

        $data=json_decode($response,true);
        
        $datas=$data['data'];
        foreach ($data['data'] as $row) {
            $result[] = array( 
                // 'sh_id' => $row['sh_id'],
                'name' => $row['sh_name'],
                'koridor' => $row['kor'],
                // 'origin' => $row['origin'],
                // 'toward' => $row['toward'],
                'coordinate'=> $row['sh_lat'].'|'.$row['sh_lng'],
                // 'sh_lat' => $row['sh_lat'],
                // 'sh_lng' => $row['sh_lng'],
            );
        }
        // $p = $result['sh_lat'];
    
        // return response()->json([
        //     'status' => 200,
        //     'data' => $result,
        // ]);
        // return view('Admin.test4');

        // dd($data);
        return view('welcome', compact('RNarticles','PNarticles','sliderTop','Cpayment','result'));
    }


}
