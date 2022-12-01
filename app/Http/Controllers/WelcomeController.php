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
        $RNarticles = article::take(9)->orderBy('id', 'desc')->get();
        $PNarticles = article::take(3)->orderBy('view', 'desc')->get();
        $sliderTop  = slider::all();
        $Cpayment   = card::all();


// ------------------------------------------------------------ GET ROUTE & CORIDOR
        $curl = curl_init();
        // $origin = $this->input->post($origin);
        $kor = '1';
        $origin = 'Mangkang';
        $toward = 'Penggaron';

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://gps.brtnusantara.com/dev/trans_semarang/api_v1/getRoutes',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array('kor' => $kor,'origin' => $origin,'toward' => $toward),
        //   CURLOPT_POSTFIELDS => array('kor' => '3B','origin' => 'Pelabuhan','toward' => 'Elisabeth'),
          CURLOPT_HTTPHEADER => array(
            'Authorization: Basic czNtNHI0bmc6czNtNHI0bmdOZGVz',
            'cache: ci_session=a%3A5%3A%7Bs%3A10%3A%22session_id%22%3Bs%3A32%3A%22d272ff1926c229266992aeb34d34aa75%22%3Bs%3A10%3A%22ip_address%22%3Bs%3A13%3A%22103.17.244.13%22%3Bs%3A10%3A%22user_agent%22%3Bs%3A21%3A%22PostmanRuntime%2F7.29.2%22%3Bs%3A13%3A%22last_activity%22%3Bi%3A1666948544%3Bs%3A9%3A%22user_data%22%3Bs%3A0%3A%22%22%3B%7Ddda011cfd7756535990f45662d686113; csrf_cookie_name=6c0e4dcdd5af57b37caa1fa3e754b262',
            'Cookie: ci_session=a%3A5%3A%7Bs%3A10%3A%22session_id%22%3Bs%3A32%3A%225fc6ae2d43cdb1a315d8a00cf7c9ff94%22%3Bs%3A10%3A%22ip_address%22%3Bs%3A12%3A%22103.125.48.7%22%3Bs%3A10%3A%22user_agent%22%3Bs%3A21%3A%22PostmanRuntime%2F7.29.2%22%3Bs%3A13%3A%22last_activity%22%3Bi%3A1669633851%3Bs%3A9%3A%22user_data%22%3Bs%3A0%3A%22%22%3B%7D55a771dd7094f3a9fb10374cc9e2e7e4'
          ),
        ));
        $response = curl_exec($curl);
        $data = json_decode($response, true);
        $route = $data['data']['route'];
        foreach ($route as $row) {
               $result[] = array(
                    'name' => $row['sh_name'],
                    'kor' => $row['kor'],
                    'origin' => $row['origin'],
                    'toward' => $row['toward'],
                    'coordinate' => $row['sh_lat'] . '|' . $row['sh_lng'],
                    'points' => $row['points'],
               );
           }
        $kor = '2';
        $origin = 'Terboyo';
        $toward = 'Ungaran';
        curl_setopt_array($curl, array(
          CURLOPT_POSTFIELDS => array('kor' => $kor,'origin' => $origin,'toward' => $toward),
        ));
        $response = curl_exec($curl);
        $data = json_decode($response, true);
        $route = $data['data']['route'];
        foreach ($route as $row) {
               $result[] = array(
                    'name' => $row['sh_name'],'kor' => $row['kor'],'origin' => $row['origin'],'toward' => $row['toward'],'coordinate' => $row['sh_lat'] . '|' . $row['sh_lng'],'points' => $row['points'],
               );
            }
        $kor = '3A';
        $origin = 'Pelabuhan';
        $toward = 'Elisabeth via Dr Cipto';
        curl_setopt_array($curl, array(
          CURLOPT_POSTFIELDS => array('kor' => $kor,'origin' => $origin,'toward' => $toward),
        ));
        $response = curl_exec($curl);
        $data = json_decode($response, true);
        $route = $data['data']['route'];
        foreach ($route as $row) {
               $result[] = array(
                    'name' => $row['sh_name'],'kor' => $row['kor'],'origin' => $row['origin'],'toward' => $row['toward'],'coordinate' => $row['sh_lat'] . '|' . $row['sh_lng'],'points' => $row['points'],
               );
            }
        $kor = '3B';
        $origin = 'Pelabuhan';
        $toward = 'Elisabeth';
        curl_setopt_array($curl, array(
          CURLOPT_POSTFIELDS => array('kor' => $kor,'origin' => $origin,'toward' => $toward),
        ));
        $response = curl_exec($curl);
        $data = json_decode($response, true);
        $route = $data['data']['route'];
        foreach ($route as $row) {
               $result[] = array(
                    'name' => $row['sh_name'],'kor' => $row['kor'],'origin' => $row['origin'],'toward' => $row['toward'],'coordinate' => $row['sh_lat'] . '|' . $row['sh_lng'],'points' => $row['points'],
               );
            }
        $kor = '4';
        $origin = 'Tawang';
        $toward = 'Cangkiran';
        curl_setopt_array($curl, array(
          CURLOPT_POSTFIELDS => array('kor' => $kor,'origin' => $origin,'toward' => $toward),
        ));
        $response = curl_exec($curl);
        $data = json_decode($response, true);
        $route = $data['data']['route'];
        foreach ($route as $row) {
               $result[] = array(
                    'name' => $row['sh_name'],'kor' => $row['kor'],'origin' => $row['origin'],'toward' => $row['toward'],'coordinate' => $row['sh_lat'] . '|' . $row['sh_lng'],'points' => $row['points'],
               );
            }
        $kor = 'F2A';
        $origin = 'Terboyo';
        $toward = 'ADA Majapahit';
        curl_setopt_array($curl, array(
          CURLOPT_POSTFIELDS => array('kor' => $kor,'origin' => $origin,'toward' => $toward),
        ));
        $response = curl_exec($curl);
        $data = json_decode($response, true);
        $route = $data['data']['route'];
        foreach ($route as $row) {
               $result[] = array(
                    'name' => $row['sh_name'],'kor' => $row['kor'],'origin' => $row['origin'],'toward' => $row['toward'],'coordinate' => $row['sh_lat'] . '|' . $row['sh_lng'],'points' => $row['points'],
               );
            }
        $kor = 'F2B';
        $origin = 'Terboyo';
        $toward = 'ADA Majapahit B';
        curl_setopt_array($curl, array(
          CURLOPT_POSTFIELDS => array('kor' => $kor,'origin' => $origin,'toward' => $toward),
        ));
        $response = curl_exec($curl);
        $data = json_decode($response, true);
        $route = $data['data']['route'];
        foreach ($route as $row) {
               $result[] = array(
                    'name' => $row['sh_name'],'kor' => $row['kor'],'origin' => $row['origin'],'toward' => $row['toward'],'coordinate' => $row['sh_lat'] . '|' . $row['sh_lng'],'points' => $row['points'],
               );
            }
        $kor = '5';
        $origin = 'PRPP';
        $toward = 'Meteseh';
        curl_setopt_array($curl, array(
          CURLOPT_POSTFIELDS => array('kor' => $kor,'origin' => $origin,'toward' => $toward),
        ));
        $response = curl_exec($curl);
        $data = json_decode($response, true);
        $route = $data['data']['route'];
        foreach ($route as $row) {
               $result[] = array(
                    'name' => $row['sh_name'],'kor' => $row['kor'],'origin' => $row['origin'],'toward' => $row['toward'],'coordinate' => $row['sh_lat'] . '|' . $row['sh_lng'],'points' => $row['points'],
               );
            }
        $kor = 'F4B';
        $origin = 'Gunung Pati';
        $toward = 'BSB';
        curl_setopt_array($curl, array(
          CURLOPT_POSTFIELDS => array('kor' => $kor,'origin' => $origin,'toward' => $toward),
        ));
        $response = curl_exec($curl);
        $data = json_decode($response, true);
        $route = $data['data']['route'];
        foreach ($route as $row) {
               $result[] = array(
                    'name' => $row['sh_name'],'kor' => $row['kor'],'origin' => $row['origin'],'toward' => $row['toward'],'coordinate' => $row['sh_lat'] . '|' . $row['sh_lng'],'points' => $row['points'],
               );
            }
        $kor = 'F4A';
        $origin = 'Gunung Pati';
        $toward = 'Unnes';
        curl_setopt_array($curl, array(
          CURLOPT_POSTFIELDS => array('kor' => $kor,'origin' => $origin,'toward' => $toward),
        ));
        $response = curl_exec($curl);
        $data = json_decode($response, true);
        $route = $data['data']['route'];
        foreach ($route as $row) {
               $result[] = array(
                    'name' => $row['sh_name'],'kor' => $row['kor'],'origin' => $row['origin'],'toward' => $row['toward'],'coordinate' => $row['sh_lat'] . '|' . $row['sh_lng'],'points' => $row['points'],
               );
            }
        $kor = 'F3';
        $origin = 'Penggaron';
        $toward = 'Terminal Banyumanik';
        curl_setopt_array($curl, array(
          CURLOPT_POSTFIELDS => array('kor' => $kor,'origin' => $origin,'toward' => $toward),
        ));
        $response = curl_exec($curl);
        $data = json_decode($response, true);
        $route = $data['data']['route'];
        foreach ($route as $row) {
               $result[] = array(
                    'name' => $row['sh_name'],'kor' => $row['kor'],'origin' => $row['origin'],'toward' => $row['toward'],'coordinate' => $row['sh_lat'] . '|' . $row['sh_lng'],'points' => $row['points'],
               );
            }
        $kor = '6';
        $origin = 'Undip';
        $toward = 'Unnes';
        curl_setopt_array($curl, array(
          CURLOPT_POSTFIELDS => array('kor' => $kor,'origin' => $origin,'toward' => $toward),
        ));
        $response = curl_exec($curl);
        $data = json_decode($response, true);
        $route = $data['data']['route'];
        foreach ($route as $row) {
               $result[] = array(
                    'name' => $row['sh_name'],'kor' => $row['kor'],'origin' => $row['origin'],'toward' => $row['toward'],'coordinate' => $row['sh_lat'] . '|' . $row['sh_lng'],'points' => $row['points'],
               );
            }
        $kor = 'LM';
        $origin = 'Mangkang (Malam)';
        $toward = 'Simpang Lima (Malam)';
        curl_setopt_array($curl, array(
          CURLOPT_POSTFIELDS => array('kor' => $kor,'origin' => $origin,'toward' => $toward),
        ));
        $response = curl_exec($curl);
        $data = json_decode($response, true);
        $route = $data['data']['route'];
        foreach ($route as $row) {
               $result[] = array(
                    'name' => $row['sh_name'],'kor' => $row['kor'],'origin' => $row['origin'],'toward' => $row['toward'],'coordinate' => $row['sh_lat'] . '|' . $row['sh_lng'],'points' => $row['points'],
               );
            }
        $kor = '7';
        $origin = 'Genuk';
        $toward = 'Balaikota';
        curl_setopt_array($curl, array(
          CURLOPT_POSTFIELDS => array('kor' => $kor,'origin' => $origin,'toward' => $toward),
        ));
        $response = curl_exec($curl);
        $data = json_decode($response, true);
        $route = $data['data']['route'];
        foreach ($route as $row) {
               $result[] = array(
                    'name' => $row['sh_name'],'kor' => $row['kor'],'origin' => $row['origin'],'toward' => $row['toward'],'coordinate' => $row['sh_lat'] . '|' . $row['sh_lng'],'points' => $row['points'],
               );
            }
        $kor = '8';
        $origin = 'Simpang Lima';
        $toward = 'Gunung Pati - Cangkiran';
        curl_setopt_array($curl, array(
          CURLOPT_POSTFIELDS => array('kor' => $kor,'origin' => $origin,'toward' => $toward),
        ));
        $response = curl_exec($curl);
        $data = json_decode($response, true);
        $route = $data['data']['route'];
        foreach ($route as $row) {
               $result[] = array(
                    'name' => $row['sh_name'],'kor' => $row['kor'],'origin' => $row['origin'],'toward' => $row['toward'],'coordinate' => $row['sh_lat'] . '|' . $row['sh_lng'],'points' => $row['points'],
               );
            }
        $kor = 'F1A';
        $origin = 'Ngaliyan';
        $toward = 'Kp Gondoriyo';
        curl_setopt_array($curl, array(
          CURLOPT_POSTFIELDS => array('kor' => $kor,'origin' => $origin,'toward' => $toward),
        ));
        $response = curl_exec($curl);
        $data = json_decode($response, true);
        $route = $data['data']['route'];
        foreach ($route as $row) {
               $result[] = array(
                    'name' => $row['sh_name'],'kor' => $row['kor'],'origin' => $row['origin'],'toward' => $row['toward'],'coordinate' => $row['sh_lat'] . '|' . $row['sh_lng'],'points' => $row['points'],
               );
            }
        $kor = 'F1B';
        $origin = 'ngaliyan';
        $toward = 'Madukoro Raya';
        curl_setopt_array($curl, array(
          CURLOPT_POSTFIELDS => array('kor' => $kor,'origin' => $origin,'toward' => $toward),
        ));
        $response = curl_exec($curl);
        $data = json_decode($response, true);
        $route = $data['data']['route'];
        foreach ($route as $row) {
               $result[] = array(
                    'name' => $row['sh_name'],'kor' => $row['kor'],'origin' => $row['origin'],'toward' => $row['toward'],'coordinate' => $row['sh_lat'] . '|' . $row['sh_lng'],'points' => $row['points'],
               );
            }
       
// ------------------------------------------------------------ GET ALL INFO 
           $headers = [
            'Authorization:Basic czNtNHI0bmc6czNtNHI0bmdOZGVz',
            'Cookie: ci_session=a%3A5%3A%7Bs%3A10%3A%22session_id%22%3Bs%3A32%3A%22cc4bc374b026709fd18f1cb6cd7c92f5%22%3Bs%3A10%3A%22ip_address%22%3Bs%3A13%3A%22112.78.39.189%22%3Bs%3A10%3A%22user_agent%22%3Bs%3A21%3A%22PostmanRuntime%2F7.29.2%22%3Bs%3A13%3A%22last_activity%22%3Bi%3A1665562390%3Bs%3A9%3A%22user_data%22%3Bs%3A0%3A%22%22%3B%7D6fe9ee344dc6bc317b3c063dce14dbda; csrf_cookie_name=ba0325b1bb49557a555522e06d3d2565',
            'Content-Type: application/json',
        ];
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => "https://gps.brtnusantara.com/dev/trans_semarang/api_v1/getCorridor", // your preferred link
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
        $data = json_decode($response, true);
        // $datas=$data['data'];
        foreach ($data['data'] as $rowall) {
            $resultall[] = array(
                'urut' => $rowall['urut'],
                'rute' => $rowall['points_a'] . '|||' . $rowall['points_b'],
                'origin' => $rowall['origin'],
                'toward' => $rowall['toward'],
                'jam_operasional' => $rowall['jam_operasional'],
                'jumlah_bis' => $rowall['jumlah_bis'],
                'jumlah_halte' => $rowall['jumlah_halte'],
                'kor' => $rowall['kor'],
            );
        }


        return view('welcome', compact('RNarticles', 'PNarticles', 'sliderTop', 'Cpayment', 'result', 'resultall'));
    }
}
