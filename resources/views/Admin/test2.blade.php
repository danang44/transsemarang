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
?

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

    var latlngs = [[[110.46310000000001,-6.952920000000001],[110.46286,-6.95603],[110.46557000000001,-6.95577],[110.46560000000001,-6.956160000000001],[110.46587000000001,-6.95896],[110.4659,-6.960350000000001],[110.46591000000001,-6.96541],[110.46606000000001,-6.965400000000001],[110.46591000000001,-6.96541],[110.46365000000002,-6.965560000000001],[110.46365000000002,-6.965560000000001],[110.46287000000001,-6.965140000000001],[110.46182,-6.965120000000001],[110.46162000000001,-6.965140000000001],[110.46151,-6.964370000000001],[110.46141000000001,-6.96377],[110.46140000000001,-6.9633400000000005],[110.46148000000001,-6.96309],[110.46143000000001,-6.96267],[110.46066,-6.962320000000001],[110.46051000000001,-6.962470000000001],[110.46020000000001,-6.96332],[110.46015000000001,-6.963800000000001],[110.45993000000001,-6.96438],[110.45996000000001,-6.964440000000001],[110.45981,-6.96459],[110.45902000000001,-6.964410000000001],[110.45630000000001,-6.964810000000001],[110.45614,-6.965890000000001],[110.45523000000001,-6.96597],[110.45416000000002,-6.96499],[110.45327,-6.9638100000000005],[110.45072,-6.96278],[110.45001,-6.959910000000001],[110.45012000000001,-6.958830000000001],[110.44989000000001,-6.95863],[110.44948000000001,-6.958360000000001],[110.44963000000001,-6.95788],[110.44972000000001,-6.95767],[110.44975000000001,-6.95746],[110.44978,-6.957350000000001],[110.44982,-6.95727],[110.44991,-6.95713],[110.45003000000001,-6.95685],[110.45009,-6.956290000000001],[110.45012000000001,-6.955970000000001],[110.45003000000001,-6.9556700000000005],[110.45002000000001,-6.95563],[110.44998000000001,-6.95589],[110.44991,-6.95617],[110.44985000000001,-6.956410000000001],[110.44977000000002,-6.95664],[110.44966000000001,-6.9569600000000005],[110.44959000000001,-6.957230000000001],[110.44944000000001,-6.957380000000001],[110.44928000000002,-6.95748],[110.44895000000001,-6.957750000000001],[110.44845000000001,-6.9582500000000005],[110.44816000000002,-6.95854],[110.44806000000001,-6.9587],[110.44802000000001,-6.9588600000000005],[110.44805000000001,-6.959040000000001],[110.44824000000001,-6.95959],[110.44831,-6.9598700000000004],[110.44833000000001,-6.960160000000001],[110.44828000000001,-6.960540000000001],[110.44822,-6.9609700000000005],[110.44815000000001,-6.96149],[110.44805000000001,-6.962180000000001],[110.44795,-6.962560000000001],[110.44776,-6.96295],[110.44754,-6.96335],[110.44740000000002,-6.963760000000001],[110.44728,-6.964150000000001],[110.44692,-6.964830000000001],[110.44689000000001,-6.96511],[110.44688000000001,-6.965370000000001],[110.44692,-6.965650000000001],[110.44691,-6.965920000000001],[110.44688000000001,-6.9665300000000006],[110.44683,-6.9670700000000005],[110.44681000000001,-6.9676100000000005],[110.44689000000001,-6.96816],[110.44691,-6.968430000000001],[110.44694000000001,-6.9686900000000005],[110.44694000000001,-6.96921],[110.44687,-6.969710000000001],[110.44680000000001,-6.970280000000001],[110.44677000000001,-6.970860000000001],[110.44651,-6.9708000000000006],[110.44625,-6.970720000000001],[110.44574000000001,-6.970510000000001],[110.44482,-6.970350000000001],[110.44456000000001,-6.970320000000001],[110.44430000000001,-6.97024],[110.44387,-6.9701200000000005],[110.44350000000001,-6.970040000000001],[110.44312000000001,-6.9699800000000005],[110.44257,-6.969900000000001],[110.44213,-6.9698400000000005],[110.44169000000001,-6.969740000000001],[110.44130000000001,-6.969570000000001],[110.44091,-6.969410000000001],[110.44050000000001,-6.96926],[110.44028000000002,-6.96921],[110.43996000000001,-6.969180000000001],[110.43965000000001,-6.969130000000001],[110.43954000000001,-6.969130000000001],[110.43950000000001,-6.9691600000000005],[110.43956000000001,-6.969360000000001],[110.43961000000002,-6.969500000000001],[110.43961000000002,-6.96963],[110.43962,-6.9697700000000005],[110.43949,-6.97024],[110.4394,-6.970470000000001],[110.43931,-6.9706600000000005],[110.43926,-6.970940000000001],[110.43926,-6.971030000000001],[110.43932000000001,-6.971120000000001],[110.43942000000001,-6.971220000000001],[110.43945000000001,-6.97128],[110.43947000000001,-6.9719500000000005],[110.43945000000001,-6.973540000000001],[110.43935,-6.974060000000001],[110.43962,-6.974430000000001],[110.44014000000001,-6.975020000000001],[110.44204,-6.97733],[110.44289,-6.978440000000001],[110.44329,-6.978890000000001],[110.44435000000001,-6.98012],[110.44535,-6.981240000000001],[110.44584,-6.98176],[110.44621000000001,-6.982190000000001],[110.44634,-6.982380000000001],[110.44636000000001,-6.982480000000001],[110.44636000000001,-6.9825800000000005],[110.44592000000002,-6.9840800000000005],[110.44565000000001,-6.985150000000001],[110.44657000000001,-6.985410000000001],[110.44597,-6.987260000000001],[110.44588,-6.9876700000000005],[110.44581000000001,-6.988130000000001],[110.44578000000001,-6.988220000000001],[110.44576,-6.988760000000001],[110.44579,-6.98955],[110.44578000000001,-6.98979],[110.44582000000001,-6.99007],[110.44588,-6.99026],[110.44594000000001,-6.9905800000000005],[110.44592000000002,-6.990780000000001],[110.44589,-6.99091],[110.44568000000001,-6.991680000000001],[110.44553,-6.992100000000001],[110.44546000000001,-6.99225],[110.44492000000001,-6.992280000000001],[110.44423,-6.99267],[110.44379,-6.993080000000001],[110.44311,-6.99328],[110.44286000000001,-6.993480000000001],[110.44238000000001,-6.993530000000001],[110.44220000000001,-6.993720000000001],[110.44213,-6.99382],[110.44196000000001,-6.993880000000001],[110.44181,-6.994110000000001],[110.44158000000002,-6.994260000000001],[110.44149000000002,-6.99434],[110.44145,-6.994400000000001],[110.44133000000001,-6.9946],[110.44098000000001,-6.995340000000001],[110.44066000000001,-6.995900000000001],[110.44050000000001,-6.996220000000001],[110.44012000000001,-6.99758],[110.43996000000001,-6.997940000000001],[110.43937000000001,-6.99774],[110.43845,-6.997470000000001],[110.43789000000001,-6.99725],[110.43717000000001,-6.99685],[110.43623000000001,-6.996270000000001],[110.43648,-6.9957400000000005],[110.43722000000001,-6.99429],[110.43652000000002,-6.9939100000000005],[110.43646000000001,-6.993900000000001],[110.43684,-6.99321],[110.43689,-6.99314],[110.43699000000001,-6.993040000000001],[110.43735000000001,-6.992890000000001],[110.43724,-6.99253],[110.43765,-6.992400000000001],[110.43750000000001,-6.992000000000001],[110.43788,-6.9921500000000005],[110.43876,-6.9920100000000005],[110.43924000000001,-6.991560000000001],[110.43947000000001,-6.99157],[110.43991000000001,-6.99155],[110.44010000000002,-6.9914700000000005],[110.44048000000001,-6.9914000000000005],[110.44062000000001,-6.991180000000001],[110.44084000000001,-6.9911200000000004],[110.44123,-6.991070000000001],[110.44135000000001,-6.990920000000001],[110.44293,-6.990850000000001],[110.44306,-6.992020000000001],[110.44418,-6.991930000000001],[110.44514000000001,-6.99157],[110.44606,-6.991060000000001],[110.44702000000001,-6.990640000000001],[110.44931000000001,-6.9903],[110.44952,-6.997980000000001],[110.44952,-6.9987200000000005]]];

    var polyline = L.polyline(latlngs, {color: 'blue'}).addTo(map);

    map.fitBounds(polyline.getBounds());
</script>
@endsection
