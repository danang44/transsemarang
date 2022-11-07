<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Track;
use App\article;

class AdminController extends Controller
{

    public function home()
    {
        return view('Admin.home');
    }

    public function test()
    {
        $headers = [
            'Authorization:Basic czNtNHI0bmc6czNtNHI0bmdOZGVz',
            'Cookie: ci_session=a%3A5%3A%7Bs%3A10%3A%22session_id%22%3Bs%3A32%3A%22d272ff1926c229266992aeb34d34aa75%22%3Bs%3A10%3A%22ip_address%22%3Bs%3A13%3A%22103.17.244.13%22%3Bs%3A10%3A%22user_agent%22%3Bs%3A21%3A%22PostmanRuntime%2F7.29.2%22%3Bs%3A13%3A%22last_activity%22%3Bi%3A1666948544%3Bs%3A9%3A%22user_data%22%3Bs%3A0%3A%22%22%3B%7Ddda011cfd7756535990f45662d686113; csrf_cookie_name=6c0e4dcdd5af57b37caa1fa3e754b262',
            'Content-Type: application/json',
        ];

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
        // $datas=$data['data'];
        foreach ($data['data'] as $row) {
            $result[] = array( 
                'sh_id' => $row['sh_id'],
                'sh_name' => $row['sh_name'],
                'kor' => $row['kor'],
                'origin' => $row['origin'],
                'toward' => $row['toward'],
                'sh_lat' => $row['sh_lat'],
                'sh_lng' => $row['sh_lng'],
            );
        }
        // dd($data);
        return view('Admin.test', compact('result'));
    }

    // public function store(Request $request)
    // {
       
    //    // dd($request);
    //     $this->validate($request, [
    //         // 'created_by' => 'required',
    //         // 'delete_by' => 'required',
    //         'date' => 'required',
    //         'title' => 'required',
    //         'intro' => 'required',
    //         'content' => 'required',
    //         'iduser' => 'required',
    //         'flag' => 'required',
    //         'aer_seo' => 'required',
    //         'thumb' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',

    //     ]);

    //     // menyimpan data file yang diupload ke variabel $file
    //     $test = $request->file('thumb');

    //     $nama_file = time() . "_" . $test->getClientOriginalName();

    //     // isi dengan nama folder tempat kemana file diupload
    //     $tujuan_upload = 'data_test';
    //     $test->move($tujuan_upload, $nama_file);
       
    //    test::create([
    //         // 'created_by' => $request->created_by,
    //         // 'delete_by' => $request->delete_by,
    //         'date' => $request->date,
    //         'title' => $request->title,
    //         'intro' => $request->intro,
    //         'content' => $request->content,
    //         'iduder' => $request->isuder,
    //         'flag' => $request->flag,
    //         'art_seo' => $request->art_seo,
    //         'thumb' => $nama_file,
            
    //     ]);

    //     return redirect('/test');
    // }

    public function test2()
    {
        $headers = [
            'Authorization:Basic czNtNHI0bmc6czNtNHI0bmdOZGVz',
            'Cookie: ci_session=a%3A5%3A%7Bs%3A10%3A%22session_id%22%3Bs%3A32%3A%22d272ff1926c229266992aeb34d34aa75%22%3Bs%3A10%3A%22ip_address%22%3Bs%3A13%3A%22103.17.244.13%22%3Bs%3A10%3A%22user_agent%22%3Bs%3A21%3A%22PostmanRuntime%2F7.29.2%22%3Bs%3A13%3A%22last_activity%22%3Bi%3A1666948544%3Bs%3A9%3A%22user_data%22%3Bs%3A0%3A%22%22%3B%7Ddda011cfd7756535990f45662d686113; csrf_cookie_name=6c0e4dcdd5af57b37caa1fa3e754b262',
            'Content-Type: application/json',
        ];

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
        // $datas=$data['data'];
        foreach ($data['data'] as $row) {
            $result[] = array( 
                'sh_id' => $row['sh_id'],
                'sh_name' => $row['sh_name'],
                'kor' => $row['kor'],
                'origin' => $row['origin'],
                'toward' => $row['toward'],
                'sh_lat' => $row['sh_lat'],
                'sh_lng' => $row['sh_lng'],
            );
        }
        // dd($data);
        return view('Admin.test2', compact('result'));
    }

    public function test3($id)
    {

        $result = Track::find($id);
    

        return response()->json([
            'status' => 200,
            
            'data' => $result,
        ]);
    
    }

    public function test4()
    {
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
                // 'sh_name' => $row['sh_name'],
                // 'kor' => $row['kor'],
                // 'origin' => $row['origin'],
                // 'toward' => $row['toward'],
                'coordinate'=> [$row['sh_lat'].','.$row['sh_lng']],
                // 'sh_lat' => $row['sh_lat'],
                // 'sh_lng' => $row['sh_lng'],
            );
        }
        // $p = $result['sh_lat'];
        return view('Admin.test4', compact('result'));
        // return response()->json([
        //     'status' => 200,
        //     'data' => $result,
        // ]);
        // return view('Admin.test4');
    }
  


}

