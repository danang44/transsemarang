@extends('master.admin_layout')

@section('content')
    <style>
        #map { height: 500px; }

        label {
            color: white !important;
        }

        option {
            color: black;
        }

        .dataTables_info {
            color: white !important;
        }
    </style>

    <head>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css"
        integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14="
        crossorigin=""/>
        
                               <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"
                               integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg="
                               crossorigin=""></script>

                               <script src="https://unpkg.com/esri-leaflet@3.0.8/dist/esri-leaflet.js"
    integrity="sha512-E0DKVahIg0p1UHR2Kf9NX7x7TUewJb30mxkxEm2qOYTVJObgsAGpEol9F6iK6oefCbkJiA4/i6fnTHzM6H1kEA=="
    crossorigin=""></script>
    </head>

    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card mb-5 ">
                    <div class="page-header-content header-elements-md-inline " style="background-color:#011126">
                        <div class="page-title d-flex " style="padding-top:1% !important;padding-bottom:1% !important">
                            <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Data
                                MAPS</h4>
                            <a href="#" class="header-elements-toggle text-default d-md-none"><i
                                    class="icon-more"></i></a>
                        </div>

                        <div class="header-elements d-none py-0 mb-3 mb-md-0">
                            <div class="breadcrumb">
                                <a href="/dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                                <span class="breadcrumb-item active">DATA MAPS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>


    <div>

        <div id="map"></div>
    </div>

    <?php
$data = file_get_contents("https://gps.brtnusantara.com/dev/trans_semarang/api_v1/getCorridor");
$json = json_decode($data, TRUE);
echo $json[0]['username'];
?>

<?php

$curl_handle=curl_init();
curl_setopt($curl_handle, CURLOPT_URL,'https://gps.brtnusantara.com/dev/trans_semarang/api_v1/getCorridor format=flv');
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
$query = curl_exec($curl_handle);
curl_close($curl_handle);

?>

    {{-- <script>
        var map = L.map('map').setView([-7.0327276, 110.4159552],18);

        
//         L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
//     maxZoom: 19,
//     attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
// }).addTo(map);

// googleStreets
// L.tileLayer('http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}',{
//     maxZoom: 20,
//     subdomains:['mt0','mt1','mt2','mt3']
// }).addTo(map);


L.tileLayer('http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}',{
    maxZoom: 20,
    subdomains:['mt0','mt1','mt2','mt3']
}).addTo(map);

// googleHybrid
// L.tileLayer('http://{s}.google.com/vt?lyrs=s,h&x={x}&y={y}&z={z}',{
//     maxZoom: 20,
//     subdomains:['mt0','mt1','mt2','mt3']
// }).addTo(map);

// googleSat
// L.tileLayer('http://{s}.google.com/vt?lyrs=s&x={x}&y={y}&z={z}',{
//     maxZoom: 20,
//     subdomains:['mt0','mt1','mt2','mt3']
// }).addTo(map);

// googleTerrain
// L.tileLayer('http://{s}.google.com/vt?lyrs=p&x={x}&y={y}&z={z}',{
//     maxZoom: 20,
//     subdomains:['mt0','mt1','mt2','mt3']
// }).addTo(map);

    </script> --}}

<script>
    var map = L.map('map').setView([-6.996667, 110.416664], 13);
    var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 20,
        zoomControl: true,
        attribution: '&copy; Trans Semarang | <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
</script>
@endsection
