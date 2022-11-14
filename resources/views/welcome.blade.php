@include('sweetalert::alert')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <title>Trans Semarang | Home</title>
    {{-- <base href="http://192.168.18.14:8000"> --}}

    <meta name="twitter:description" content="Twitter Resmi BLU UPTD Trans Semarang  Jl. Tambak Aji Raya No. 5 Kode Pos 50185  CS : 1-5000-94  IG: transsemarang  FB: TRANS Semarang">
    <meta property="og:image" content="assets/img/Trans_Semarang_icon.svg">
    <meta property="og:type" content="website">
    <meta name="description" content="Trans Semarang adalah sistem transportasi angkutan massal berbasis jalan di Jawa Tengah yang beroperasi di Kota dan Kabupaten Semarang. Layanan ini dioperasikan guna mengurai kemacetan di Kota Semarang serta untuk mengakomodasi para pelaju menuju pusat kota dan destinasi wisata yang ada di Kota Semarang.">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:image" content="assets/img/tsmgLogo32px-01.png">
    <meta name="twitter:title" content="Trans Semarang | @transsemarang">
    <meta name="google-signin-client_id"content="662068769407-1qc1taetjo897853c5lkl755p2c5csvi.apps.googleusercontent.com">

    <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="assets/img/tsmgLogo-01-01%20(180x180).png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/tsmgLogo-01-01%20(16x16).png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/tsmgLogo32px-01.png">
    <link rel="icon" type="image/png" sizes="180x180" href="assets/img/tsmgLogo-01-01%20(180x180).png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/tsmgLogo-01-01%20(192x192).png">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://kit.fontawesome.com/1e94ef36ed.js" type="text/javascript" crossorigin="anonymous"></script>
    {{-- <script src="assets/bootstrap/js/live.js" type="text/javascript"></script> --}}
    <script src="js/polyline.js" type="text/javascript" ></script>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Plus+Jakarta+Sans:200,300,400,500,600,700,800'>
    <link rel="stylesheet" href="assets/css/Footer-Multi-Column-icons.css">
    <link rel="stylesheet" href="assets/css/Hero-Clean-Reverse-images.css">
    <link rel="stylesheet" href="assets/css/logo-slider.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.38/dist/sweetalert2.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css"integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="assets/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="assets/slick/slick-theme.css"/>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> --}}
</head>

<style>
    .stepper .line {
        width: 2px;
        background-color: lightgrey !important;
    }
    .stepper .lead {
        font-weight: 400;
        font-size: 20px;
        line-height: 28px;
        letter-spacing: -0.006em;
    }

    /* .swiper {
        width: 100%;
        height: 568px;
    } */

    body {
        font-family: 'Plus Jakarta Sans', sans-serif !important;
        font-style: normal;
        font-size: 16px;
        font-weight: 400;
        line-height: 1.5;
        text-align: left;
        /* overflow-x:hidden !important; */
        -webkit-overflow-scrolling: auto;
    }
</style>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="72">
{{-- Start Navbar --}}
    <nav id="mainNav" class="navbar navbar-expand-lg shadow fixed-top bg-darkngi sticky-top" style="/*height: 100px;*/">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="#home">
                <span class="d-flex justify-content-center align-items-center me-2">
                    <img class="border rounded" src="assets/img/tsmgLogo32px-01.png" width="36" height="36">
                </span>
                <img src="assets/img/textLogo.png" width="198.87" height="44">
            </a>
            <button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler text-white bg-primary navbar-toggler-right text-uppercase rounded">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarResponsive" class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto rounded">
                    <li class="nav-item mx-3 mx-lg-1 rounded">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="http://karir.transsemarang.semarangkota.go.id" target="_blank">CAREER</a>
                    </li>
                    <li class="nav-item mx-3 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded"
                            href="https://ppid.semarangkota.go.id/kb/jalur-rute-brt-trans-semarang-dan-feeder-di-kota-semarang"
                            target="_blank">BUS & RUTE</a>
                    </li>
                    <li class="nav-item mx-3 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#hotlineCenter" onclick="sweet();">HOTLINE CENTER</a>
                    </li>
                    <!-- Authentication Links -->

                    @guest
                    <li class="nav-item mx-3 mx-lg-1" hidden>
                        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item mx-3 mx-lg-1" hidden>
                        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item mx-3 mx-lg-1 dropdown">
                        <a id="navbarDropdown" class="nav-link py-3 px-0 px-lg-3 rounded dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="background-color:#262b2f">

                            {{-- <a class="dropdown-item" href="/user" style="color:white"> My Profile </a> --}}
                            <a style="color:white" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
                <ul class="navbar-nav ml-auto mr-3">

                </ul>
            </div>
        </div>
    </nav>
{{-- End Navbar --}}

{{-- Start Slider --}}
    <div class="slicktsm single-item">
        <div class="slickitem">
            <div class="slickbg">
                <div class="slickbody">
                    <div class="headerbanner" style="max-width: 100%;">
                        <p class="fssldier1">NGINOVASI X Trans Semarang</p>
                        <p class="fssldier2">Download aplikasi<br>
                            <strong>Trans Semarang</strong>, dapatkan<br>
                            info lokasi bus terkini<br> serta lainnya.</span></p>
                        <p class="fssldier3" class="my-1">
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At senectus ut tortor auctor
                                bibendum volutpat ante volutpat. Molestie id purus adipiscing.</span>
                        </p>
                        <a class="btnggl btn me-2" role="button"
                            href="https://play.google.com/store/apps/details?id=ngi.brtsemarang.apppublic"
                            target="_blank"></a>
                        <a class="btnapple btn" role="button"
                            href="https://apps.apple.com/id/app/trans-semarang/id1460565652" target="_blank"></a>
                    </div>
                </div>
            </div>
        </div>
        @foreach ($sliderTop as $slider)
        <div class="slickitem">
            <img src="data_slider/{{$slider->gambar}}" class="d-block w-100" alt="{{$slider->gambar}}">
        </div>
        @endforeach
    </div>
{{-- End Slider --}}

{{-- Start News --}}
    <div class="ngi-div1">
        <div class="ngi-row1">
            <div class="ngi-row1-col1">
                <div class="headdiv">
                    <p><strong>Popular</strong>
                        <span style="font-weight: lighter; color: black;"> News</span>
                    </p>
                </div>
                @foreach ($PNarticles as $PNart)
                <div class="row row-cols-1 headcont">
                    <a class="titlenews" href="/detailarticle/{{$PNart->title}}">
                        <p><strong>{{ $PNart->title }}</strong></p>
                    </a>
                    <p class="text-justify text-black-50 bodycont">
                        <?php echo $PNart->intro ?></p>
                    <p class="text-justify text-black-50 contdate">
                        <?php $phpdate = strtotime( $PNart->date );
                            $mysqldate = date( 'l, d F Y', $phpdate );
                            echo $mysqldate;
                        ?>
                    </p>
                </div>
                @endforeach
            </div>
            <div class="ngi-row1-col2">
                <div class="headdiv">
                    <p><strong>Recent</strong>
                        <span style="font-weight: lighter; color: black;"> News</span>
                    </p>
                </div>
                <div class="nginsta">
                    <div class="gallery">
                        @foreach ($RNarticles as $RNart)
                        <div class="gallery-item" tabindex="0">
                            <img src="{{ $RNart->gambar }}" class="gallery-image" alt="{{ $RNart->gambar }}" />
                            <div class="gallery-item-info">
                                <a class="gallery-item-type" href="/detailarticle/{{$RNart->title}}">
                                    <p class="fw-semibold text-white">{{ $RNart->title }}</p>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="loader"></div>
                </div>
            </div>
        </div>
    </div>
{{-- End News --}}

{{-- Start Maps & Route --}}
    <div class="mapsandrute" id="mapsandrute" name="mapsandrute">
        <div class="headinfomaps">
            <div class="infotext">
                <div class="headinfo">
                    <p class="headinfo1">TS.MAPS</p>
                    <p class="headinfo2">Route & Corridor Info</p>
                </div>
                <p style="font-weight: 300;font-size: 24px;line-height: 32px;margin-block-start: 0em;margin-block-end: 0em;margin-bottom: 0em;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit orci condimentum natoque elit amet mauris augue sed nunc. Consequat tincidunt risus nulla viverra. Massa sollicitudin dui adipiscing massa. </p>
            </div>
        </div>
        <div title="headmaps" style="display: flex;flex-direction: column;align-items: center;padding: 0px 120px;width: 1440px;height: 758px;background: #AF2330;">
            <div title="maps" style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;gap: 2px;width: 1200px;height: 758px;/*background: #F9FAFB;*/border: 1px solid #98A2B3;box-shadow: 0px 4px 12px rgba(29, 41, 57, 0.12);backdrop-filter: blur(10px);border-radius: 20px;margin-top: -156px;">
                <div title="actionmaps" style="display: flex;flex-direction: row;justify-content: space-between;align-items: center;padding: 40px;width: 100%;height: 156px;background: #1D2939;border-top-left-radius: 20px;border-top-right-radius: 20px">
                    <div title="headeraction" style="display: flex;flex-direction: column;justify-content: center;align-items: flex-start;padding: 0px;gap: 4px;width: 295px;height: 76px;color: #FFFFFF;">
                        <p style="font-weight: 300;font-size: 24px;line-height: 32px;margin-block-start: 0em;margin-block-end: 0em;margin-bottom: 0em;">Select your preference of</p>
                        <p style="font-weight: 600;font-size: 32px;line-height: 40px;margin-block-start: 0em;margin-block-end: 0em;margin-bottom: 0em;">Route Corridor Info</p>
                    </div>
                    <div class="btn-group" onclick="toggleItems()" style="display: flex;flex-direction: row;align-items: center;width: 490px;height: 76px;background: #AF2330;border-radius: 8px;">
                        <button class="btn btn-tsm btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false" style="height: 100%">Pilih Koridor BRT</button>
                        <ul class="dropdown-menu dropdown-menu-lg-end"  style="width: 100%">
                            {{-- @foreach($result as $datas)
                            <li><a class="dropdown-item {{$datas['kor']}} hidden">Koridor {{$datas['kor']}} {{$datas['origin']}} - {{$datas['toward']}}</a></li>

                          @endforeach --}}
                          <select class="container type" name="type" id="type" onchange>
                            <option value="1">-- PILIH RUTE BRT --</option>
                            <option value="2">Koridor 1  MANGKANG - PENGGARON</option>
                            <option value="3">Koridor 1  PENGGARON - MANGKANG</option>
                            <option value="4">Koridor 2  TERBOYO - UNGARAN</option>
                            <option value="5">Koridor 2  UNGARAN - TERBOYO</option>
                            <option value="6">Koridor 3A PELABUHAN - ELISABETH via DR CIPTO</option>
                            <option value="7">Koridor 3A ELISABETH via DR CIPTO - PELABUHAN</option>
                            <option value="8">Koridor 3B PELABUHAN - ELISABETH</option>
                            <option value="9">Koridor 4 TAWANG - CANGKIRAN</option>
                            <option value="10">Koridor 4 CANGKIRAN - TAWANG</option>
                            <option value="11">Koridor F2A TERBOYO - ADA MAJAPAHIT</option>
                            <option value="12">Koridor F2A ADA MAJAPAHIT - TERBOYO</option>
                            <option value="13">Koridor F2B TERBOYO - ADA MAJAPAHIT B</option>
                            <option value="14">Koridor F2B ADA MAJAPAHIT B - TERBOYO</option>
                            <option value="15">Koridor 5 PRPP - METESEH</option>
                            <option value="16">Koridor 5 METESEH - PRPP</option>
                            <option value="17">Koridor F4B GUNUNG PATI - BSB</option>
                            <option value="18">Koridor F4B BSB - GUNUNG PATI</option>
                            <option value="19">Koridor F4A GUNUNG PATI - UNNES</option>
                            <option value="20">Koridor F4A UNNES - GUNUNG PATI</option>
                            <option value="21">Koridor F3 PENGGARON - TERMINAL BANYUMANIK</option>
                            <option value="22">Koridor F3 TERMINAL BANYUMANIK - PENGGARON</option>
                            <option value="23">Koridor 6 UNDIP - UNNES</option>
                            <option value="24">Koridor 6 UNNES - UNDIP</option>
                            <option value="25">Koridor LM MANGKANG - SIMPANG LIMA (MALAM) </option>
                            <option value="26">Koridor LM SIMPANG LIMA - MANGKANG (MALAM)</option>
                            <option value="27">Koridor 7 GENUK - BALAIKOTA</option>
                            <option value="28">Koridor 7 BALAIKOTA - GENUK</option>
                            <option value="29">Koridor 8 SIMPANG LIMA - GUNUNG PATI - CANGKIRAN</option>
                            <option value="30">Koridor 8 GUNUNG PATI - CANGKIRAN - SIMPANG LIMA</option>
                            <option value="31">Koridor F1A NGALIYAN - KP GONDORIYO</option>
                            <option value="32">Koridor F1A KP GONDORIYO - NGALIYAN</option>
                            <option value="33">Koridor F1B NGALIYAN - MADUKORO RAYA</option>
                            <option value="34">Koridor F1B MADUKORO RAYA - NGALIYAN</option>
                            {{-- <option value="2">Pembelian Total Harga</option>
                            <option value="3">Login</option> --}}
                        </select>

                        
                        </ul>
                        
                    </div>
                    
                </div>
                
                <div title="leaflet" style="display: flex;flex-direction: row;justify-content: space-between;align-items: center;width: 100%;height: 600px;background: #98A2B3;border-bottom-left-radius: 20px;border-bottom-right-radius: 20px">
                    <div style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;gap: 4px;width: 400px;height: 100%;left: 0px;background: #F9FAFB;border-bottom-left-radius: 20px;">

                    </div>
                    {{-- <div class="container bg-dark" id="mapz" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div> --}}
               
<div id="default" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
<div id="map" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
<div id="maps" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
<div id="mapss" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
<div id="kor2" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
<div id="kor22" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
<div id="kor3a" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
<div id="kor3aa" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
<div id="kor3b" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
<div id="kor4" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
<div id="kor44" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
<div id="korf2a" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
<div id="korf2aa" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
<div id="korf2b" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
<div id="korf2bb" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
<div id="kor5" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
<div id="kor55" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
<div id="korf4b" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
<div id="korf4bb" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
<div id="korf4a" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
<div id="korf4aa" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
<div id="korf3" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
<div id="korf33" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
<div id="kor6" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
<div id="kor66" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
<div id="korlm" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
<div id="korlmm" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
<div id="kor7" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
<div id="kor77" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
<div id="kor8" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
<div id="kor88" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
<div id="korf1a" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
<div id="korf1aa" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
<div id="korf1b" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
<div id="korf1bb" class="container bg-dark" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
                </div>
            </div>
        </div>
    </div>
{{-- End Maps & Route --}}

{{-- Start Mobile Maps View --}}
    <div class="mapsmobile" id="mapsmobile" name="mapsmobile">
        <div class="container bg-dark" id="mapmobile"></div>
    </div>
    <div class="infoop" id="infoop" name="infoop">
        <div class="infobus">
            <div class="infotime col-sm-6">
                <i class="fa-solid fa-clock"></i>
                <p class="textinfo">Operate until 23:00 WIB today</p>
            </div>
            <div class="bus col-sm-6">
                <i class="fa-solid fa-bus-simple"></i>
                <p class="textinfo">10 Bus - 24 Shelter</p>
            </div>
        </div>
    </div>
    <div class="inforute" id="inforute" name="inforute">
        <div class="fliprute">
            <div class="listrute">
                <div class="startfinal">
                    <p>Starting point from </p>
                    <hr class="grute">
                    <p>Final destination to </p>
                </div>
                <ul id="rute" class="listr list-group list-group-flush">
                    <li class="list-group-item"><strong>Mangkang</strong></li>
                    <li class="list-group-item"><strong>Penggaron</strong></li>
                </ul>
            </div>
            <a class="btnflip" href="javascript:btnrute();">
                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 9C3 9.55228 3.44771 10 4 10C4.55228 10 5 9.55228 5 9L5 3.41421L6.29289 4.70711C6.68342 5.09763 7.31658 5.09763 7.70711 4.70711C8.09763 4.31658 8.09763 3.68342 7.70711 3.29289L4.70711 0.292893C4.51957 0.105357 4.26522 0 4 0C3.73478 0 3.48043 0.105357 3.29289 0.292893L0.292893 3.29289C-0.0976311 3.68342 -0.0976311 4.31658 0.292893 4.70711C0.683417 5.09763 1.31658 5.09763 1.70711 4.70711L3 3.41421L3 9Z" fill="#AF2330"/>
                    <path d="M13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5L11 10.5858L9.70711 9.29289C9.31658 8.90237 8.68342 8.90237 8.29289 9.29289C7.90237 9.68342 7.90237 10.3166 8.29289 10.7071L11.2929 13.7071C11.4804 13.8946 11.7348 14 12 14C12.2652 14 12.5196 13.8946 12.7071 13.7071L15.7071 10.7071C16.0976 10.3166 16.0976 9.68342 15.7071 9.29289C15.3166 8.90237 14.6834 8.90237 14.2929 9.29289L13 10.5858L13 5Z" fill="#AF2330"/>
                </svg>
            </a>
        </div>
        <p class="h1halte">Route Bus</p>
        <div class="listhalte">
            <div class="stepper d-flex flex-column mt-0 ml-0">
                @foreach($result as $datas)
                <div class="d-flex kor">
                    <div class="d-flex flex-column pr-4 pt-1 align-items-center">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="6" cy="6" r="4" fill="white" stroke="#FFB020" stroke-width="4"/>
                        </svg>
                        <div class="linee h-100"></div>
                    </div>
                    <div>
                        {{-- <p class="texthalte">Halte Koridor {{$datas['kor']}}</p> --}}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
{{-- End Mobile Maps View --}}

{{-- Start Card Payment --}}
    <div class="cardpayment">
        <div class="row cardhead">
            <div class="col-1 cardheadh1">
                <p class="cardheadh1-title">TS.PAYMENT</p>
                <p class="cardheadh1-text">Bayar Pakai Kartu</p>
            </div>
            <div class="col text-justify cardheadh1-ket">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
        </div>
        <div class="swiper">
            <div class="swiper-wrapper">
                @foreach ($Cpayment as $dataCard)
                <div class="swiper-slide">
                    <a class="swiperlink" href="#">
                        <div class="news_img" >
                            <img src="/data_card/{{$dataCard->image}}" alt="{{$dataCard->image}}"/>
                        </div>
                        <div class="news_title text-justify">{{$dataCard->name}}</div>
                        <p class="news_txt text-justify">{{$dataCard->desc}}</p>
                    </a>
                </div>
                @endforeach
            </div>
            {{-- <div class="swiper-pagination"></div> --}}
            {{-- <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div> --}}
            <div class="swiper-scrollbar"></div>
        </div>
    </div>
{{-- End Card Payment --}}

{{-- Start Report Complaint --}}
    <div class="reportcomplaint">
        <div class="col rcwrapper">
            <div class="rcleft">
                <div class="rclefttitle">
                    <p class="tsaduan">TS.ADUAN</p>
                    <p class="tslayanan">Layanan<strong style=" font-weight: 800;color: #AF2330;">Aduan<br>& Bantuan</strong></p>
                </div>
                <div class="tslistwrap">
                    <div class="tslist">
                        <p class="tsnumblist">01</p>
                        <div class="tsnumlistwrap">
                            <p class="listtitle">Jelaskan dengan jelas</p>
                            <p class="listcont">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                    </div>
                    <div class="tslist">
                        <p class="tsnumblist">02</p>
                        <div class="tsnumlistwrap">
                            <p class="listtitle">Gunakan kata yang sopan</p>
                            <p class="listcont">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed est lorem massa. Risus in faucibus amet laoreet diam. </p>
                        </div>
                    </div>
                    <div class="tslist">
                        <p class="tsnumblist">03</p>
                        <div class="tsnumlistwrap">
                            <p class="listtitle">Sed iaculis morbi non.</p>
                            <p class="listcont"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="freport">
                <div class="freicon">
                    <svg width="4" height="25" viewBox="0 0 4 25" fill="none" xmlns="http://www.w3.org/2000/svg"><rect y="0.996826" width="4" height="24" rx="2" fill="#AF2330" /></svg>
                </div>
                @if(Auth::check())
                <div class="row freporthead">
                    <form action="/pengaduan.php" method="post" class="row freportform" id="formlapor">
                        <div class="mb-3 reportform1">
                            <div class="formjudul">
                                <p class="formjudulh1">Layanan Aduan</p>
                            </div>
                            <div class="mb-3 insideformwrap">
                                <div class="form-group">
                                    <label class="lgnd1">Your email</label>
                                    <script>
                                        if ('{{Auth::user()->email}}' == '') {
                                            document.write('<input type="email" class="form-control disabled" id="email" name="email" placeholder="Your email"  required>');
                                        } else {
                                            document.write('<input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}" readonly required>');
                                        }
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label class="lgnd2"> Subjek Pengaduan </label>
                                    <select class="form-select" aria-label="Default select example" required>
                                        <option selected disabled value="">Materi Pengaduan...</option>
                                        <option value="1">1.Pelanggaran terhadap kode etik dan/atau pedoman perilaku aparat</option>
                                        <option value="2">2.Penyalahgunaan wewenang/jabatan</option>
                                        <option value="3">3.Pelanggaran sumpah jabatan</option>
                                        <option value="4">4.Pelanggaran terhadap peraturan disiplin Pegawai Negeri Sipil</option>
                                        <option value="5">5.Perbuatan tercela, yaitu perbuatan amoral, asusila, atau perbuatan yang tidak selayaknya dilakukan oleh seorang aparat maupun selaku anggota masyarakat</option>
                                        <option value="6">6.Pelanggaran hukum, baik dilakukan dengan sengaja, maupun karena kelalaian dan ketidakpahaman</option>
                                        <option value="7">7.Mal administrasi, yaitu terjadinya kesalahan, kekeliruan atau kelalaian yang bersifat administratif</option>
                                        <option value="8">8.Pelayanan publik yang tidak memuaskan yang dapat merugikan pihak-pihak yang berkepentingan serta masyarakat secara umum</option>
                                    </select>
                                    <div class="invalid-feedback"> Silahkan pilih materi pengaduan.</div>
                                </div>
                                <div class="form-group">
                                    <label class="lgnd3"> Deskripsi Kejadian </label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Sebutkan peristiwa, waktu terjadinya, dan lokasi kejadian atas pengaduan anda" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="lgnd4">Foto Pendukung
                                    <input class="form-control" type="file" id="formFile" accept=".jpg,.jpeg,.png" onchange="Filevalidation()" />
                                </div>
                                <p id="fileResult"></p>
                            </div>
                        </div>
                        <div class="reportformbtn">
                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                            <button id="submitReport" type="submit" class="btn btn-danger text-white" disabled>Submit Report</button>
                        </div>
                    </form>
                    @else
                    <div class="row lgnfirst">
                        <div class="mb-3 lgnfirstwrap1">
                            <div class="lgnfirsth1">
                                <p class="lgnfirsth1text">Layanan Aduan</p>
                            </div>
                            <div class="mb-3 lgnfirstwrap2">
                                <img class="lgnfirstwrap2img" src="assets/img/IlustrationCS.png"/>
                                <div class="lgnfirsth1text2">
                                    <div class="lgnfirsth2text">
                                        <p class="lgnfirsth2text1">Anda harus masuk dengan Google untuk melanjutkan</p>
                                        <p class="lgnfirsth2text2">Setelah Anda mengajukan keluhan, kami akan mengirimkan informasi penanganan ke email yang Anda gunakan untuk login.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 GPlusSignIn">
                            <a href="/auth/google" class="btn GPlusSignIn" role="button" type="button">
                                <img src="https://cdn.cdnlogo.com/logos/g/35/google-icon.svg" style="width: 32px;height: 32px;">
                                <span id="name" >Lanjutkan dengan Google</span>
                            </a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
{{-- End Report Complaint --}}

{{-- Start Report Tracking  --}}
    <div class="reporttracking">
        <div class="col reporttrackingwrap">
            <div class="row reporttrackingwrap1">
                <div class="col reporttrackingwrap1left">
                    <p class="reporttrackingwrap1leftspan1">Apakah Anda pernah melaporkan keluhan?</p>
                    <p class="reporttrackingwrap1leftspan2">Lacak laporan keluhan Anda</p>
                </div>
                <div class="reporttrackingwrap1right">
                    <a href="#modalPengaduan" data-bs-toggle="modal" class="btn reporttrackingwrap1rightbtn" role="button">
                        <img src="https://cdn.cdnlogo.com/logos/g/35/google-icon.svg">
                        <p id="name">Lanjutkan dengan Google</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal modal-xl fade" id="modalPengaduan" aria-hidden="true" aria-labelledby="modalPengaduanLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable" style="filter: drop-shadow(0px 4px 12px rgba(29, 41, 57, 0.12));">
            <div class="modal-content">
                <div class="modal-header">
                    <label class="modal-title fs-5 trck" id="modalPengaduanLabel" style="">Detail Complaint</label>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col modalwrap">
                        <div class="row modalwrapleft">
                            <div class="stepper d-flex flex-column mt-0 ml-0">
                                <div class="d-flex mb-1">
                                    <div class="d-flex flex-column pr-4 align-items-center">
                                        <div class="rounded-circle py-2 px-3 bg-primary text-white mb-1">1</div>
                                        <div class="line h-100"></div>
                                    </div>
                                    <div>
                                        <h5 class="text-dark">Sudah ditangani</h5>
                                        <p>Sunday, May 29th 2022 | 10:00 WIB</p>
                                        <q class="lead text-muted pb-3">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque sed erat leo ullamcorper est. Nibh eget.
                                        </q>
                                    </div>
                                </div>
                                <div class="d-flex mb-1">
                                    <div class="d-flex flex-column pr-4 align-items-center">
                                        <div class="rounded-circle py-2 px-3 bg-primary text-white mb-1">2</div>
                                        <div class="line h-100"></div>
                                    </div>
                                    <div>
                                        <h5 class="text-dark">Proses Penanganan</h5>
                                        <p>Sunday, May 29th 2022 | 10:00 WIB</p>
                                        <p class="lead text-muted pb-3">
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex mb-1">
                                    <div class="d-flex flex-column pr-4 align-items-center">
                                        <div class="rounded-circle py-2 px-3 bg-primary text-white mb-1">3</div>
                                        <div class="line h-100"></div>
                                    </div>
                                    <div>
                                        <h5 class="text-dark">Laporan ditindak lanjuti</h5>
                                        <p>Sunday, May 29th 2022 | 10:00 WIB</p>
                                        <p class="lead text-muted pb-3">
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex mb-1">
                                    <div class="d-flex flex-column pr-4 align-items-center">
                                        <div class="rounded-circle py-2 px-3 bg-primary text-white mb-1">4</div>
                                        <div class="line h-100 d-none"></div>
                                    </div>
                                    <div>
                                        <h5 class="text-dark">Laporan diterima</h5>
                                        <p>Sunday, May 29th 2022 | 10:00 WIB</p>
                                        <p class="lead text-muted pb-3"></p>
                                    </div>
                                </div>
                                <div class="d-flex mb-1">
                                    <div class="d-flex flex-column pr-4 align-items-center">
                                        <div class="rounded-circle py-2 px-3 bg-primary text-white mb-1">4</div>
                                        <div class="line h-100 d-none"></div>
                                    </div>
                                    <div>
                                        <h5 class="text-dark">Laporan diterima</h5>
                                        <p>Sunday, May 29th 2022 | 10:00 WIB</p>
                                        <p class="lead text-muted pb-3"></p>
                                    </div>
                                </div>
                                <div class="d-flex mb-1">
                                    <div class="d-flex flex-column pr-4 align-items-center">
                                        <div class="rounded-circle py-2 px-3 bg-primary text-white mb-1">4</div>
                                        <div class="line h-100 d-none"></div>
                                    </div>
                                    <div>
                                        <h5 class="text-dark">Laporan diterima</h5>
                                        <p>Sunday, May 29th 2022 | 10:00 WIB</p>
                                        <p class="lead text-muted pb-3"></p>
                                    </div>
                                </div>
                                <div class="d-flex mb-1">
                                    <div class="d-flex flex-column pr-4 align-items-center">
                                        <div class="rounded-circle py-2 px-3 bg-primary text-white mb-1">4</div>
                                        <div class="line h-100 d-none"></div>
                                    </div>
                                    <div>
                                        <h5 class="text-dark">Laporan diterima</h5>
                                        <p>Sunday, May 29th 2022 | 10:00 WIB</p>
                                        <p class="lead text-muted pb-3"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row modalwrapright">
                            <div class="card border-secondary mb-5 modalwrapright1">
                                <div class="card-header modalwraprightch">
                                    <div class="modalwraprightch1">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16C12.4183 16 16 12.4183 16 8C16 3.58172 12.4183 0 8 0C3.58172 0 0 3.58172 0 8C0 12.4183 3.58172 16 8 16ZM11.7071 6.70711C12.0976 6.31658 12.0976 5.68342 11.7071 5.29289C11.3166 4.90237 10.6834 4.90237 10.2929 5.29289L7 8.58579L5.70711 7.29289C5.31658 6.90237 4.68342 6.90237 4.29289 7.29289C3.90237 7.68342 3.90237 8.31658 4.29289 8.70711L6.29289 10.7071C6.68342 11.0976 7.31658 11.0976 7.70711 10.7071L11.7071 6.70711Z" fill="#114CD6"/>
                                        </svg>
                                        <p>Laporan Diterima</p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title" hidden>Secondary card title</h5>
                                    <p class="card-text text-muted cbt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dictumst dolor arcu eleifend in. Enim enim fringilla.</p>
                                </div>
                                <a href="#" class="btn btn1">Check Aduan Laporan</a>
                                <hr style="margin-top: 10px; margin-bottom: 0px; border-top: 1px none;">
                                <a href="#" class="btn btn2">Batalkan Aduan</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="modal-footer">
                    <button type="reset" class="btn btn-outline-secondary" data-bs-toggle="modal" style="display: flex;flex-direction: row;justify-content: center;align-items: center;padding: 12px 24px;gap: 4px;width: 102px;height: 48px;border: 2px solid #E4E7EC;border-radius: 8px;">Cancel</button>
                    <button id="submitReport" type="submit" class="btn btn-danger text-white" style="display: flex;flex-direction: row;justify-content: center;align-items: center;width: 159px;height: 48px;background: #AF2330;border-radius: 8px;" disabled>Submit Report</button>
                </div> --}}
            </div>
        </div>
    </div>
    </div>
{{-- End Report Tracking  --}}

{{-- Start Related Link  --}}
    <div class="relatedlink">
        <div class="h-100 relatedlinkwrap">
            <div class="row align-items-center h-100">
                <div class="container rounded">
                    <div class="slider slider-wrap">
                        <div class="logos">
                            <img class="fab fa-4x" src="assets/img/LAPOR-02.png">
                            <img class="fab fa-4x" src="assets/img/PEMKOT-03.png">
                            <img class="fab fa-4x" src="assets/img/DISHUB-01.png">
                            <img class="fab fa-4x" src="assets/img/wndrl-07.png">
                            <img class="fab fa-4x" src="assets/img/ATCS-04.png">
                        </div>
                        <div class="logos">
                            <img class="fab fa-4x" src="assets/img/prwst-05.png">
                            <img class="fab fa-4x" src="assets/img/RESTABES-06.png">
                            <img class="fab fa-4x" src="assets/img/JATENG-08.png">
                            <img class="fab fa-4x" src="assets/img/wndrl-07.png">
                            <img class="fab fa-4x" src="assets/img/ATCS-04.png">
                        </div>
                        <div class="logos">
                            <img class="fab fa-4x" src="assets/img/prwst-05.png">
                            <img class="fab fa-4x" src="assets/img/RESTABES-06.png">
                            <img class="fab fa-4x" src="assets/img/JATENG-08.png">
                            <img class="fab fa-4x" src="assets/img/wndrl-07.png">
                            <img class="fab fa-4x" src="assets/img/ATCS-04.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- End Related Link  --}}

{{-- Start Footer --}}
    <div class="footer">
        <footer class="text-white">
            <div class="col footerc1">
                <div class="row text-lg-start d-flex flex-column item">
                    <img src="assets/img/Logobar.png" alt="Trans-Semarang-Logo">
                </div>
            </div>
            <div class="row footerr1">
                <div class="col-auto footerr1c1">
                    <p class="ftrtext1">TRANS SEMARANG</p>
                    <p class="ftrtext2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et malesuada lobortis quis.</p>
                    <div class="ftrlogodn">
                        <a href="https://play.google.com/store/apps/details?id=ngi.brtsemarang.apppublic" target="_blank"><img src="assets/img/Google_Play.png"></a>
                        <a href="https://apps.apple.com/id/app/trans-semarang/id1460565652" target="_blank"><img src="assets/img/App_Store.png"></a>
                    </div>
                </div>
                <div class="col-auto footerr1c2">
                    <div class="col-auto">
                        <p>About</p>
                        <div class="col-auto footerr1c2ex1">
                            <span class="row"><a class="text-white" href="http://karir.transsemarang.semarangkota.go.id/portal/page/tentang">Profil</a></span>
                            <span class="row"><a class="text-white" href="http://karir.transsemarang.semarangkota.go.id/portal/page/tentang">Team</a></span>
                            <span class="row"><a class="text-white" href="http://karir.transsemarang.semarangkota.go.id/portal/page/tentang">Visi & Misi</a></span>
                            <span class="row"><a class="text-white" href="http://karir.transsemarang.semarangkota.go.id/portal/page/tentang">Tugas Pokok</a></span>
                        </div>
                    </div>
                    <div class="col-auto">
                        <p>Supported by</p>
                        <div class="col-auto footerr1c2ex2">
                            <span class="row"><a class="text-white" href="https://www.semarangkota.go.id/">Pemerintah Kota Semarang 2022</a></span>
                            <span class="row"><a class="text-white" href="https://ppid.semarangkota.go.id/">Walikota Semarang</a></span>
                            <span class="row"><a class="text-white" href="https://dinkes.semarangkota.go.id/">Dinas Kesehatan Kota Semarang</a></span>
                            <span class="row"><a class="text-white" href="https://nginovasi.com/v2/">Nusantara Global Inovasi</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <hr style="margin-top: 10px; margin-bottom: 0px">
            <div class="d-flex justify-content-between align-items-center pt-3 btmlogo">
                <p class="text-white mb-0 btmcpyrght">&#169; NGINOVASI 2022-V.1.1 All rights reserved.</p>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/bus.trans.semarang/" target="_blank" style="color: #ffffff">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://twitter.com/transsemarang" target="_blank" style="color: #ffffff">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.instagram.com/transsemarang" target="_blank" style="color: #ffffff">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.youtube.com/channel/UCeaDUObnYHFxrdsea9zIP3w" target="_blank" style="color: #ffffff">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
{{-- End Footer --}}

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.38/dist/sweetalert2.all.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
    <script type="text/javascript" src="assets/slick/slick.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.slicktsm').slick({
                adaptiveHeight: false,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 3000,
                cssEase: 'linear',
                centerMode: true,
                centerPadding: '0px',
                dots: true,
                fade: true,
                infinite: true,
                speed: 400,
                slidesToShow: 1,
                slidesToScroll: 1,
                touchMove: true,
                mobileFirst: true,
                responsive: [
                    {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                    },
                    {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                    },
                    {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });

            $('.form-select').select2();
        });

    </script>
    <script>
        let formFile = document.getElementById('formFile');
        let fileResult = document.getElementById('fileResult');
        let submitReport = document.getElementById('submitReport');
        formFile.addEventListener('change', function() {
            if (formFile.files.length > 0) {
                const fileSize = formFile.files.item(0).size;
                const fileMb = fileSize / 1024 ** 2;
                if (fileMb >= 2) {
                    fileResult.innerHTML = "Maksimal ukuran foto 2MB.";
                    submitReport.disabled = true;
                } else {
                    fileResult.innerHTML = "Ukuran foto anda " + fileMb.toFixed(1) + "MB";
                    submitReport.disabled = false;
                }
            }
        });

        // const swiper = new Swiper('.swiper', {
        // // Optional parameters
        // direction: 'horizontal',
        // effect: 'coverflow',
        // grabCursor: true,
        // loop: true,
        // centeredSlides: true,
        // slidesPerView: 'auto',
        // speed: 300,
        // simulateTouch: true,
        // slidesPerView: 4,
        // spaceBetween: 100,

        // coverflowEffect: {
        //     rotate: 0,
        //     stretch: 0,
        //     depth: 0,
        //     modifier: 3,
        //     slideShadows: false
        // },
        // // Navigation arrows
        // navigation: {
        //     nextEl: '.swiper-button-next',
        //     prevEl: '.swiper-button-prev',
        // },
        // // And if we need scrollbar
        // scrollbar: {
        //     el: '.swiper-scrollbar',
        // },
        // breakpoints: {
        //     // when window width is >= 320px
        //     320: {
        //     slidesPerView: 2,
        //     spaceBetween: 20
        //     },
        //     // when window width is >= 480px
        //     480: {
        //     slidesPerView: 3,
        //     spaceBetween: 30,
        //     centeredSlides: true
        //     },
        //     // when window width is >= 640px
        //     640: {
        //     slidesPerView: 4,
        //     spaceBetween: 40,
        //     centeredSlides: true
        //     },
        //     1440: {
        //     slidesPerView: 4,
        //     spaceBetween: 350,
        //     centeredSlides: true
        //     },
        //     2559: {
        //     slidesPerView: 5,
        //     spaceBetween: 0,
        //     centeredSlides: true
        //     }
        // }

        // });
    </script>
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            effect: 'coverflow',
            grabCursor: true,
            loop: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            speed: 300,
            simulateTouch: true,
            slidesPerView: 4,
            spaceBetween: 100,

            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 0,
                modifier: 3,
                slideShadows: false
            },
            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
            breakpoints: {
                // when window width is >= 320px
                320: {
                slidesPerView: 1,
                spaceBetween: 0
                },
                // when window width is >= 480px
                480: {
                slidesPerView: 2,
                spaceBetween: 50,
                centeredSlides: true
                },
                // when window width is >= 640px
                640: {
                slidesPerView: 4,
                spaceBetween: 40,
                centeredSlides: true
                },
                768: {
                slidesPerView: 4,
                spaceBetween: 10,
                centeredSlides: true
                },
                1024: {
                slidesPerView: 4,
                spaceBetween: 100,
                centeredSlides: true
                },
                1440: {
                slidesPerView: 4,
                spaceBetween: 350,
                centeredSlides: true
                },
                2559: {
                slidesPerView: 5,
                spaceBetween: 0,
                centeredSlides: true
                }
            }
        });
    </script>
    <script>
        function toggleItems() {
            $('.dropdown-menu').toggleClass('open');
        }

        $('.dropdown-menu li').click(function() {
            var text = $(this).text(); // get text of the clicked item
            $(".dropdown-toggle").text(text); // set text text to the button (dropdown)
        });
    </script>
    <script>
        function sweet() {
            Swal.fire({
                title: 'Contact',
                html: 'CS: ' + '<a href="tel:1500094" target="_blank">1-5000-94</a>' + '<br>Whatsapp/SMS: ' +
                    '<a href="https://wa.me/+628112884447" target="_blank">0811-2884-447</a> ',
                imageUrl: 'assets/img/tsmgLogo32px-01.png',
                imageWidth: 100,
                imageHeight: 100,
                imageAlt: 'Custom image',
            })
        }
    </script>
     <script src="/js/Polyline.encoded.js"></script>
     

{{-- <script>
    var result = {!! json_encode($result) !!};;
    console.log(result);

    let map = L.map('mapz', {zoomControl:false}).setView([-6.997226, 110.393395], 12);
    L.control.zoom({position:'bottomright'}).addTo(map);
    L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        zoomControl: true,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
        attribution: '&copy; Trans Semarang | <a href="https://www.google.com/intl/id/permissions/geoguidelines/">Google Maps</a>'
    }).addTo(map);



    var coridorIcon = L.icon({
        iconUrl: 'assets/icon/busstop.png',
        iconSize: [30, 35], // size of the icon
        iconAnchor: [16, 35], // point of the icon which will correspond to marker's location
    });

    for (let i = 0; i < result.length; i++) {
      var koridor = result[i].koridor;
      switch(koridor){
        case '1':
          var iconNya = 'assets/icon/kor1.png';
          break;
        case '2':
          var iconNya = 'assets/icon/kor2.png';
          break;
          case '3A':
            var iconNya = 'assets/icon/kor3a.png';
            break;
          case '3B':
            var iconNya = 'assets/icon/kor3b.png';
            break;
          case '4':
            var iconNya = 'assets/icon/kor4.png';
            break;
          case 'F2A':
            var iconNya = 'assets/icon/korf2a.png';
            break;
          case 'F2B':
            var iconNya = 'assets/icon/korf2b.png';
            break;
          case '5':
            var iconNya = 'assets/icon/kor5.png';
            break;
          case 'F4B':
            var iconNya = 'assets/icon/korf4b.png';
            break;
          case 'F4A':
            var iconNya = 'assets/icon/korf4a.png';
            break;
          case 'F3':
            var iconNya = 'assets/icon/korf3.png';
            break;
          case '6':
            var iconNya = 'assets/icon/kor6.png';
            break;
          case 'LM':
            var iconNya = 'assets/icon/korlm.png';
            break;
          case '7':
            var iconNya = 'assets/icon/kor7.png';
            break;
          case '8':
            var iconNya = 'assets/icon/kor8.png';
            break;
          case 'F1A':
            var iconNya = 'assets/icon/korf1a.png';
            break;
          case 'F1B':
            var iconNya = 'assets/icon/korf1b.png';
            break;
        default:
          var iconNya = 'assets/icon/tsmg.png';
      }
      var coridorIcon = L.icon({
        iconUrl: iconNya,
        iconSize: [25, 35], 
        iconAnchor: [16, 35],
      });
        var data = result[i].coordinate.split("|")
        var lat = parseFloat(data[0])
        var lng = parseFloat(data[1])
        var dataname = result[i].name;
        var name = (dataname)
        var datakor = result[i].koridor;
        var kor = (datakor)

        console.log(lat + " -> " + lng )
        console.log(koridor + " - " + name)
L.marker([lat, lng], { icon: coridorIcon}).addTo(map)
        .bindPopup( 'koridor ' + kor +' '+ name);
    }
   
</script> --}}


<script src="../../../../js/Polyline.encoded.js"></script>
<script>
	$(document).ready(function() {
		$(document).on('change', '.type', function(event) {
			var type = $(this).val();
			// alert(type);
			if (type === "1") {
                $("#default").show();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();

			    var result = {!! json_encode($result) !!};;
    console.log(result);

    let map = L.map('default', {zoomControl:false}).setView([-6.997226, 110.393395], 12);
    L.control.zoom({position:'bottomright'}).addTo(map);
    L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        zoomControl: true,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
        attribution: '&copy; Trans Semarang | <a href="https://www.google.com/intl/id/permissions/geoguidelines/">Google Maps</a>'
    }).addTo(map);



    var coridorIcon = L.icon({
        iconUrl: 'assets/icon/busstop.png',
        iconSize: [30, 35], // size of the icon
        iconAnchor: [16, 35], // point of the icon which will correspond to marker's location
    });

    for (let i = 0; i < result.length; i++) {
      var koridor = result[i].koridor;
      switch(koridor){
        case '1':
          var iconNya = 'assets/icon/kor1.png';
          break;
        case '2':
          var iconNya = 'assets/icon/kor2.png';
          break;
          case '3A':
            var iconNya = 'assets/icon/kor3a.png';
            break;
          case '3B':
            var iconNya = 'assets/icon/kor3b.png';
            break;
          case '4':
            var iconNya = 'assets/icon/kor4.png';
            break;
          case 'F2A':
            var iconNya = 'assets/icon/korf2a.png';
            break;
          case 'F2B':
            var iconNya = 'assets/icon/korf2b.png';
            break;
          case '5':
            var iconNya = 'assets/icon/kor5.png';
            break;
          case 'F4B':
            var iconNya = 'assets/icon/korf4b.png';
            break;
          case 'F4A':
            var iconNya = 'assets/icon/korf4a.png';
            break;
          case 'F3':
            var iconNya = 'assets/icon/korf3.png';
            break;
          case '6':
            var iconNya = 'assets/icon/kor6.png';
            break;
          case 'LM':
            var iconNya = 'assets/icon/korlm.png';
            break;
          case '7':
            var iconNya = 'assets/icon/kor7.png';
            break;
          case '8':
            var iconNya = 'assets/icon/kor8.png';
            break;
          case 'F1A':
            var iconNya = 'assets/icon/korf1a.png';
            break;
          case 'F1B':
            var iconNya = 'assets/icon/korf1b.png';
            break;
        default:
          var iconNya = 'assets/icon/tsmg.png';
      }
      var coridorIcon = L.icon({
        iconUrl: iconNya,
        iconSize: [25, 35], 
        iconAnchor: [16, 35],
      });
        var data = result[i].coordinate.split("|")
        var lat = parseFloat(data[0])
        var lng = parseFloat(data[1])
        var dataname = result[i].name;
        var name = (dataname)
        var datakor = result[i].koridor;
        var kor = (datakor)

        console.log(lat + " -> " + lng )
        console.log(koridor + " - " + name)
L.marker([lat, lng], { icon: coridorIcon}).addTo(map)
        .bindPopup( 'koridor ' + kor +' '+ name);
    
  }
            } else if (type === "2") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").show();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("maps");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                // var encoded = 'pdpi@gcd`TKbA~@f@TEFHPJz@kBPQPEPYdBiDxCyFvAgDp@qBrB}IfAqEn@sDT{BNwDIuGOmDUwBOsAWkDe@aHiAuRIiCIuFGuBW_G@yBZ_BZu@`@o@pAmA`BkAn@g@l@q@|@aBv@eC`AmDj@uDPqBXsENkEt@gJFgADiEG{JRuJN}ETaDT{BNu@d@cAl@y@fFsF^]t@u@dAoAnDcDrG}EbH{FhEiDbAy@jAoAtAwB\\aA|ByIdBoIJiA@{@AeAqA}Wc@kCOk@Qe@}@iB]g@i@i@oI}Ei@e@[a@O_@Mi@Iu@CoAVaCr@uDb@oBjA_EhAeDxAaDZi@|@gAt@o@bAi@dBy@XSXURYXo@TiAXqBNqBDu@TuCFaCLmCXiDPmAhCuKNu@b@gD@m@AWq@mHOuDg@aHCaAOsAE_AI]UqCkBgLy@yHw@mGiAaJ{BmPi@aD_@qBSKMOISAU@ODOHKTOUoAiBwL{AyIMFGWFVLG_B{IoAoGkCkLm@kDeC_U_@wDGcBUsBCiA@ADe@Xo@H[f@mD?SAQWe@E[@[^Ub@?n@ApAoDtDqKtDqKt@_CmAuCoKwD}QkGo@aI]kCo@iHCe@VO\\FpCzBpXzYjBxB`AVl@Cf@@j@Ch@Q~H}T~EkVx@aDpEmLRo@??xCeIBYCSqAe@SUEQAWzA}DTK`@EPDn@TVHVBNWNa@`@_A~@aCbCcG`@kAnEyKfAuCDAtCyHd@mD^oB^uArA{DtHkVLm@X_A`FyNp@wBfEiM~@aCdAgCtDcHnFuJlA_C|GwLpG{Kf@cAnAsDn@cCtCwOrBuK|Gy]p@{CtDcSfAoFvCyPlAyHT}@`Ka[~EoOrD{KhC}HbCaHpAcDzAeFv@uClBgI\\uAj@qC|AwGWIqE_A@lAy@xCKHMBMC';
                var encoded =
                    "pdpi@gcd`TKbA~@f@TEFHPJz@kBPQPEPYdBiDxCyFvAgDp@qBrB}IfAqEn@sDT{BNwDIuGOmDUwBOsAWkDe@aHiAuRIiCIuFGuBW_G@yBZ_BZu@`@o@pAmA`BkAn@g@l@q@|@aBv@eC`AmDj@uDPqBXsENkEt@gJFgADiEG{JRuJN}ETaDT{BNu@d@cAl@y@fFsF^]t@u@dAoAnDcDrG}EbH{FhEiDbAy@jAoAtAwB\\aA|ByIdBoIJiA@{@AeAqA}Wc@kCOk@Qe@}@iB]g@i@i@oI}Ei@e@[a@O_@Mi@Iu@CoAVaCr@uDb@oBjA_EhAeDxAaDZi@|@gAt@o@bAi@dBy@XSXURYXo@TiAXqBNqBDu@TuCFaCLmCXiDPmAhCuKNu@b@gD@m@AWq@mHOuDg@aHCaAOsAE_AI]UqCkBgLy@yHw@mGiAaJ{BmPi@aD_@qBSKMOISAU@ODOHKTOUoAiBwL{AyIMFGWFVLG_B{IoAoGkCkLm@kDeC_U_@wDGcBUsBCiA@_ADe@Xo@H[f@mD?SAQWe@E[@[^Ub@?n@ApAoDtDqKtDqKt@_CmAuCoKwD}QkGo@aI]kCo@iHCe@VO\\FpCzBpXzYjBxB`AVl@Cf@@j@Ch@Q~H}T~EkVx@aDpEmLRo@??xCeIBYCSqAe@SUEQAWzA}DTK`@EPDn@TVHVBNWNa@`@_A~@aCbCcG`@kAnEyKfAuCDAtCyHd@mD^oB^uArA{DtHkVLm@X_A`FyNp@wBfEiM~@aCdAgCtDcHnFuJlA_C|GwLpG{Kf@cAnAsDn@cCtCwOrBuK|Gy]p@{CtDcSfAoFvCyPlAyHT}@`Ka[~EoOrD{KhC}HbCaHpAcDzAeFv@uClBgI\\uAj@qC|AwGWIqE_A_@lAy@xCKHMBMC";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

				L.marker([-7.012321, 110.418670,12],[-7.002550, 110.402296,12]).addTo(map);
				
				

                map.fitBounds(polyline.getBounds());
            } else if (type === "3") {
                $("#default").hide();
                $("#map").show();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("map");

                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);

                var encoded =
                    "jqyi@etkaT}A]b@{BTyA\\GXWFW|@ZlIhBwCjMaC~Jy@~CiBtFwAtDuB~Fo@vBuGvRmCtIiG~Q_EfMSt@UtAi@bEeAlF_@|BeAtFgCzM_Mho@uBvKU`BcChMe@`B{@tCSf@m@nAgDtFoIrOaA|AeApBkFjJeCxE{@fBiAhCo@fBcM`_@s@nBYh@uHjVsAzD_@tA_@nBe@lDuCxHAFcArCi@lAcDlI_EpKyAfE~DhBHVAh@{AtDQHSAwDqAoCeASUEQAWzA}DTK`@EPDvBv@~DhBHVAh@{AtDQHSAyDiAg@Ta@z@u@nBuBxFmA`DsAzDg@`B]|Ai@rCw@hDc@vBa@zBsBjHe@tAc@pAq@|Aa@tAsAhDU|@I|@[bAs@rAcAFo@Sg@a@a@i@wAe@mNsE_KoDY_BOsBy@{He@}FDc@ZGbBnAlKjKpDbE|JvKz@x@t@Eh@DfAVP`@@h@WnAq@hAqFbO}DbLsCbHe@tBY|Bl@z@Pb@Cb@{@rBc@hBFpAr@lGnAtLp@jGrA~FpC~LjBpKfFh\\zB~P^dBPfBnBvOlBlPn@rDx@tFZtCz@~KZlFL~@FtA`@tE?`Aa@dEe@|B}A`Gm@dDSrBa@lJeA`JSfAQh@]j@[Vi@\\yCvAi@d@mA|AWb@eAbC[n@m@dBeApDiBhIKtAN@OAGzAFdAJn@Vl@d@j@dAt@~CfBv@ZrA`A^^\\l@jAfCb@rBPxADp@jA~V@j@G|AKv@m@xCgB|H}@pDm@|AS`@eA|AeAdAyDbDaDlC{KnI_BvAqD|CsCbDuCvCi@`@oAbBc@hAs@dII|BQzHElHHvEIrEu@pL]pG_@pF}@bFm@lCiA~C[t@q@|@u@r@gBhAoAhAe@v@Wn@]tAGx@?l@LjCJlDN`KXpEDdBh@tJb@|Gh@lGV~BPbDFfGMxDW`Dg@tCkAjFyBxIc@vAkAvCeAtBsFlKaBrDgDlL[`BQATeCVuBMAHk@Le@`DkGQKGIAEJU";
                // var encoded = 'jqyi@etkaT}A]b@{BTyA\\GXWFW|@ZlIhBwCjMaC~Jy@CiBtFwAtDuB~Fo@vBuGvRmCtIiG~Q_EfMSt@UtAi@bEeAlF_@|BeAtFgCzM_Mho@uBvKU`BcChMe@`B{@tCSf@m@nAgDtFoIrOaA|AeApBkFjJeCxE{@fBiAhCo@fBcM`@s@nBYh@uHjVsAzD@tA_@nBe@lDuCxHAFcArCi@lAcDlI_EpKyAfE~DhBHVAh@{AtDQHSAwDqAoCeASUEQAWzA}DTK`@EPDvBv@~DhBHVAh@{AtDQHSAyDiAg@Ta@z@u@nBuBxFmA`DsAzDg@`B]|Ai@rCw@hDc@vBa@zBsBjHe@tAc@pAq@|Aa@tAsAhDU|@I|@[bAs@rAcAFo@Sg@a@a@i@wAe@mNsE_KoDY_BOsBy@{He@}FDc@ZGbBnAlKjKpDbE|JvKz@x@t@Eh@DfAVP`@@h@WnAq@hAqFbO}DbLsCbHe@tBY|Bl@z@Pb@Cb@{@rBc@hBFpAr@lGnAtLp@jGrA~FpC~LjBpKfFh\\zB~P^dBPfBnBvOlBlPn@rDx@tFZtCz@~KZlFL@FtA`@tE?`Aa@dEe@|B}A`Gm@dDSrBa@lJeA`JSfAQh@]j@[Vi@\\yCvAi@d@mA|AWb@eAbC[n@m@dBeApDiBhIKtAN@OAGzAFdAJn@Vl@d@j@dAt@~CfBv@ZrA`A^^\\l@jAfCb@rBPxADp@jA~V@j@G|AKv@m@xCgB|H}@pDm@|AS`@eA|AeAdAyDbDaDlC{KnI_BvAqD|CsCbDuCvCi@`@oAbBc@hAs@dII|BQzHElHHvEIrEu@pL]pG_@pF}@bFm@lCiA~C[t@q@|@u@r@gBhAoAhAe@v@Wn@]tAGx@?l@LjCJlDN`KXpEDdBh@tJb@|Gh@lGV~BPbDFfGMxDW`Dg@tCkAjFyBxIc@vAkAvCeAtBsFlKaBrDgDlL[`BQATeCVuBMAHk@Le@`DkGQKGIAEJU';

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "4") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").show();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("kor2");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "d}li@_weaTd@mA|BFdGThCHjAF^?PPpA|XnBxf@LhGR|Cp@|DnDjOpBbIdBvFbApDbD~NZx@PT\\PXBtAB`@Hp@l@pP~[|AxCjAvBd@z@Rf@HJLDbC}@xB}@nC{@`AWr@GxGIvC@bDKzEm@tL}AnHaA`Hk@xTj@~Ld@lIb@^bIL~GwILcMLwl@|@sUZcADi@JQVzElVfAbGApDQzGMbBUr@lDpD`OtNpOhOf@R`@@ZK^@d@fARrAn@p@z@dAdAlApCpCzCfDtD|DfF`GjEhEt@Dr@Ax@Rp@d@zFfCtEtBpAj@pCt@rBz@fG|CdCjA|@b@\\Lb@?vDe@~Ec@fD[n@_@l@o@j@o@d@w@z@eAh@Mr@?p@NdAlAVf@lAvBLdAIp@QzA?RF\\R\\RPPFb@HN?ZGLEbAaA`Am@fBq@nAQtA?j@KtAg@bAa@vDo@|ASv@a@`@Wz@e@RQ`@MtB[z@W\\[DKXyAHs@Ja@Z}BDo@d@sDf@qDr@uFl@kDfA}AhGeG|@{@TsA}AaE?GBMZOb@HDDpB~DlAb@^@jACnB\\tCv@Z@\\Dv@?^C\\IvAw@A]@\\l@YfAq@RWL[Ts@JSlAcBtAk@rHyAxIqAvP_DtC[bDo@tHsA\\En@GpAWpA_@^j@r@t@p@l@fAt@fD|AvBf@bDb@tDZx@C~CL?U`FTjAd@r@JxBJpCV|G~@`B\\x@@x@Ef@M\\S~@y@v@uBhAeBzBiBnB{A~CgBfB}@|AWtBOj@I`@MN?h@[vAcBf@UpAc@jA?fDNxAXzBt@~@d@bA\\hBTnCXbCh@vAf@hEnBRBpBz@tEhCDJrBhAlG~EjBfAbFhCjChAdDjAhFxAnNdDtCl@LC`H`BzBx@fGhBjA\\xD|@lBZdHz@zUxBdBJh@HjFd@|BLrA?`FKxNOt@@xESxCOlDDtCVhCVzC^tEb@h@JfB`@`Ab@dB|@rBrAjEbCrAd@bBZv@Dr@@hN]zGAbCSfLgC`AY`Bi@fAQbBEbBBxAHdEb@zB^fG`AxEh@tBLvBBhEIZCjB_@v@WzAu@bAa@hFeCbDmAbAi@rAy@~BmBtB}AfAe@ZIdASb@Gt@EpBBz@HfATxA`@`ALtBFzAMvBi@bCq@`Eu@~AMrBEdBPbBb@hCx@bDlA|AhAzCrDdAjArCbCX`@x@~AlAxCd@z@|A|B\\^|AxAx@h@lAf@d@Lr@NdEh@l@Nr@^fAt@nAfA`CnB|@f@n@Vd@HOzAIvAiBBiKc@oLLqGOyCKEg@IScA?";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "5") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").show();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("kor22");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "xtmj@giz`Te@AYdAeAE]WMQcAyBoB}E_@q@a@Yu@UMGSY_@iBEa@IWMMSKgEmAeAWkFyAaDw@mDc@wBS_C]gB[i@]M_@O{@GeAOs@]u@}@qAQc@Ks@Ek@Kg@]_@yD}@y@M[AcAd@kBrAwDvCqBdAyD~AyAr@mCdBu@\\{Bl@cCX{CJgA@{BCsBMsD_@gFw@yEy@kD_@mBGcA?_BFkALu@P{Bv@aAXyCl@]JiDl@eCPaADwBCiHJsCFsCNiBI}AYmAc@[OuHmEyAs@kAg@k@Sw@Si@IeFg@aKgAq@EaDCwCPwENwD?aEDuCD?n@iACOe@mDHyAAoFc@sNoAeDWiJ_AgGu@aBWmG}A_K_DqEkAsAYIKgJqB}GaBiFyAeDkAKZJ[kCiAcFiCkBgA}EyDo@e@s@a@_Ag@QAiAq@yAs@aDyAISiEoBwAg@cCi@oCYiBU}@EAJ@KkAMcBGo@DgAb@uBhBs@v@sAvBu@\\_Ap@eAl@oDbBuMvFwBlAy@Tg@?sAOWIgFu@[@wHkAsE_@wEO_FWcCSgBKYKuDa@oCe@iCm@{FkCWKkB_AcAUqAGo@F]DuHrAcDn@uCZwP~CyIpAsHxAuAj@mAbBKRUr@MZSVgAp@qBdASJ]H_@Bw@?]E[AuCw@oB]kAB_@AUDgBJMLSJSFMR}@z@iGdGgA|Am@jDs@tFg@pDe@rDEn@[|BK`@Ir@YxAEJMLOL{@VuBZa@LSP{@d@a@Vw@`@}ARwDn@cA`@uAf@k@JuA?oAPgBp@aAl@cA`AMD[FO?c@IQGSQS]G]?SP{ABk@Mi@S{@i@w@k@iAw@kAy@Oq@@o@Ve@d@k@bAsAbB{@d@yCZuLjAcAWeAa@kBiAwBy@gBgAiB{@cBi@yC}@}CsAgDwAmAe@cAQm@REXUXg@Vk@Bi@Qg@[a@g@iBq@_HyBoIiC}FeCeAqLw@aJ^]dEbDbCpCnHxHdGtGbCfCjAzAMz@SVi@HoBo@sFiBwHcCaFoBk@YSwAcB_QUsCi@cBgLaLmDiDiDgDaJ_J{DcEUTsE`AqBj@}ARqAFo@y@MyA?o@Dc@d@oBtAoEMOe@{@{AHyEGsBGKMGMe@aD}@aBmB{Ca@sA_BkCM[?KX_@pAw@B[EQqCmFI}@WgA_BgDkBeEiQm_@U_ABm@Xk@|@iATc@FYAWES]{@sC_NgAgEkAyDcCcJ_@eBaDaN_@yB_@oEGc@IYQO[O{GKgDDkBVsBn@oAp@y@r@QBM?EMB[LOrBsAdA_@|A]dCc@bAE|DCxB@\\GJKDGF]E_Hi@}Ni@iOwAaY{GQwCCmBEs@K";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "6") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").show();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("kor3a");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "tgoi@sm~`TDt@bF[XDdBHKMGMe@aD}@aBmB{Ca@sAkB}CAUX_@~AcAWy@aCuEM]C[wIBgFHiWNmJNiC@iC?c@LeBAqKpIwM`Lw@l@_DtBwB`BU]bI}FPUd@c@dLoJhHuFhCgBv@Hj@?`@HnF?nKKhWQhFItIEWcAu@aBc@gA{GqNm@{Ae@y@iA_CaDkHoBiEES@]DORe@~@iAFGLC|As@j@Kh@BTBVLJHVZxMlWzDhHj@nAr@nAv@rAdFnJrHGjAGv@Jv@WZq@IgBKuHFu@DKHKb@ShA@lBCzCOxAOlEq@bCUtImAjFo@jDUjBA~EJvLd@nDDhJXzBBlBJvNd@fI`@bDDjBFjDNzKn@v]hA`FVbJj@hCXdB^PHtEnAnBv@bBf@hAH`BBdBA`@EdKcBv@El@@NDVJPPBL`@Zx@t@^Pz@LrAFb@?bCOdEOp@BnFtBbBf@^FlAJjCDd@JPNR`@Jn@HbBR`CHLX|@h@~@BJfBlCr@|@hBdBl@p@dB`CHGD?VZB?C?W[E?IFt@fAxBdCz@fAdBnBpIfI`FbF^b@LDf@j@bC|Cx@n@`CtA`Bv@j@PpCf@zDf@r@?~AHtCHJ_@NZ\\?~CL`APJLnBLj@@vDZ~C^|AXLFBHGVKBuAQqA[e@G{@IARmAOlAN@S_CUqBEyHi@wCMcDYqC_@gCa@cCk@cDyAkAq@m@Uw@g@e@U]KqCUaALuHnAiFdAuAR_KfBsDr@oFv@uI~A}A^{@b@c@`@]b@S\\c@jAU`@YVu@b@oAh@ORh@r@WIUO}@Z";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "7") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").show();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("kor3aa");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "rjxi@ep|`Tg@LDc@O@cAAg@IiCs@mB]iC?{@Li@N]UGS{@oBm@_BSUk@Kw@EO@wA\\yCf@oIx@gBb@s@R_BdAMD]FW@WAc@OOMS[GMqBeLA[@Wd@yAF[CUOc@[g@e@_@s@a@}@Wq@Ek@ByAXo@Xy@j@uBfBUHSBc@?u@CuAfMs@|D_@vAsBhEy@zAk@RgAViALqBN{DDEWWuCImBF}AlAaLCgBMyAWgAkAk@qBu@cCmA@k@XI^QpBmAn@s@JSZcAM[OO_G}Bs@Ki@pAQHSAwDqAoCeASUEQAWzA}DTK`@EPDvBv@~DhBHVAh@{AtDQHSAwDqAmEcBYI]C]AuNzAiIbA_E`@kEl@qHv@DVEW{@De@AsFl@eJfAqD\\mOhBlAtAfCfCxBpB`IzHRFx@b@f@O\\B\\n@\\`BrBdCFRpEvEdEpEh@p@^ZrB|BdJzJJV@TOXSTQBy@AsUwHsD{AeH_CmBy@{G_C_@KG?QEaBm@m@]g@y@gAcD_CsG?CqA_D{CeIuAiDkFkNc@qAwBd@_Df@MCe@o@GQSuA?s@D[f@uBtAoEMOe@{@{AHyFI?X?YyDOYEcFZEu@";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "8") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").show();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("kor3b");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "tgoi@sm~`TDt@bF[XDdBHKMGMe@aD}@aBmB{Ca@sAkB}CAUX_@~AcAWy@aCuEM]C_@wIFgFHiWNmJNiCCqCD_CV}B`BuGbFwM`Lw@l@_DtBwB`BU]bI}F|MiLhHuFhCgBv@Hj@?`@HrFEjKAhWOfFIvIGWgAu@aBc@gA{GqNm@{Ae@y@iA_CaDkHoBiEES@]DORe@fAqALC|As@j@Kh@BTBVLJHVZ`CtEXOYNvIvPzDhHj@nAr@nAl@lAdAdBxApChA`CvDIlC@dACf@FXIRCTQVYSqLFu@DKHKb@ShA@lBCzCOxAOlEq@bCUjNmBtAOjDUjBA~EJvLd@nDDhJXzBBlBJThGHdCJbFJdIRzF?z@RrJTbKTzLc@pPErCUpFlAEzAHjAR|Bh@c@~BmApF_@|By@bEmArDgA~Cu@fBiAdD{@|BSjB@HFNk@^GPMPMJQHQDS@Q?SCOGOKMMMSMKg@YaAa@iUsHsD{AA_Ai@{F]kCo@iHBc@BKFGLELB^XjAfAVPhEpEdEpEh@p@^ZrB|BdJzJd@R^@TEV?`@FpAUJO`AgCr@{BlDqJf@kBt@qDf@qCvBqKn@gCpEmLRo@CMBLxCeIBYCSqAe@SUEQAWzA}DTK`@EPDvBv@~DhBHVAh@OX`@j@tFlCl@Np@oAlCeGZNcB`EwAtCDPtN|Gn@VhEfAdA\\pANVEjA[lAeAx@k@n@YxAYj@Cp@D|@Vr@`@d@^Zf@Nb@BTGZe@xAAV@ZpBdLFLRZNLb@NV@VA\\GLE~AeAr@SfBc@nIy@xCg@vA]NAv@Dj@Jl@BJCN@RJn@jA";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "9") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").show();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("kor4");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "~loi@ox~`Te@u@a@sAkB}CAI?KX_@~AcAWy@aCuEM]C_@WgAu@aBc@gA{GqNm@{Ae@y@iA_CaDkHoBiEES@]DORe@fAqALC|As@j@Kh@BTBVLJHVZxMlWzDhHj@nAr@nAr@xA|F{B|E}A^ExA@fCGfCBlBCzCOxAOlEq@bCUjNmBtAOjDUjBA~EJvLd@nDDhDJdL\\JbDNnDTzGwNPeGFsC?iAFwDFoBJ{IBiFL_CHqJ?i@A{FLgBAiCB}@BgBRe@JOb@LThBdJ|@fEjAlGZnBLdACzA]hLGVADc@\\QDa@P}AXu@PANb@|ABN?NpEvLtAhDzCdIpA~CB?jBhFFNC@rA~DZf@pAp@~@^jVpI@eASsBo@qFm@_GG}A`@]j@^nBrAxPnQvGrH~AbBh@R`ACh@Fd@b@Nr@Ef@Yn@u@bBsA~CoM`_@i@vAOn@WpB@VDJZVLRDZCd@IZy@`CKv@BjBfArJ`AnJn@fFZ~A~B|J^nBdAxETv@XnBxAxIBd@~BnO`ArHzAvK^dBPfBnBvOlBlPn@rDx@tFZtCz@~KZlFL~@FtA`@tE?`Aa@dEe@|B}A`Gm@dDSrBSdE^fAXZVPz@t@d@n@x@vAx@bBXhAx@vETr@d@nAn@lA`BhB~@x@`BlAxGrERRRj@DXR~CN|@r@zB`@pBLT\\Tl@NfAj@f@b@\\`@p@n@p@jAxAfE~@rBPRZRjAj@^`@vAdCzA`BTZx@|@|@jAlAlB^z@z@bCj@bB^vAV~AJlANx@Lb@NPb@^nB~@t@b@zCxBr@`@lBl@|@\\vAp@fC|At@TjBNjERbAFjARrBf@v@V~Ap@h@ZpAbAv@f@\\Hl@FdB@rACfAI`AEzG@h@At@GzHeBfAQvCI~I?tBFhALbCd@f@TzAv@jA|@b@X^R~C~@vCnAtBv@xBz@|FzBbAXd@HjA@t@Ch@I`@A`AJ~@XjIj@nMrAxGx@x@B\\ETKREV@RDRJLNj@b@xHxAfLnDbOvFjJrDrAx@`E|C~B|BzQbSpIzJrBxBlJjJtA~AbAzADVDDv@zAd@pB`AzGb@p@h@d@XPf@R`B\\v@TDOENf@NZJlD`BtPvJlCbAtBbAhM`HbD~AdBZ^@tEh@v@Df@?v@GrC[vE[lEc@vBQ~@DnA\\lFrBfA^zIhBrBXxBNbEDlD?`FJnAFn@HzA`@vF`BlCr@~@PfFr@f@?lCe@hDe@xB_@~@_@fCwAp@YfAYp@EZAd@BjAPxCVhDn@p@Pn@Zh@d@RRlB~Af@b@@Dn@@t@H";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "10") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").show();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("kor44");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "pmgj@yqg`TiBYCGuCcCSSi@e@o@[q@QiDo@yCW}ASo@?q@DgAXq@XgCvA_A^yB^iDd@mCd@g@?gFs@_AQmCs@wFaB{Aa@o@IoAGaFKmD@cEGyBOsBY{IiBgA_@mFsBoA]_AEmCReFh@iDRsCZw@Fg@?w@EuEi@_@AeB[oCsA_DeBqGkDaD_BmCcAuG{D_E{B_B_AaBw@gBu@_Be@aB]g@Sk@a@_@_@[g@aA{Ge@qBi@gA]WsAcBwCwCq@a@g@Uy@Kw@Bm@H_@Ng@TqAhAc@Vq@Ru@Fk@Cg@Ik@Uk@a@wOoRwFgHqFiGc@q@[u@C}@Bs@Xw@hBkEB[AYM]Q[iAm@}Am@gBo@wKkEsGcCqKwC_IqAUBq@VOB_@EOEWUKWSOYMUGeNaBsBS_C]{RoAkASuFgBwEmBiH{CgAYgAa@c@WcBmAq@a@gAe@qCk@aAGuEEgIDmAHeAPcIdBk@DqC@gEA{AHkBFwBEs@MOGcCkBgAi@cA_@aCq@uAWgCQcBGaDY_@Ia@QaAo@_B{@eDmA_A[gAu@[[wAcAiAm@gBy@[S]a@Ui@UqAUsBQu@cAiDeAyCUe@iCsDkDgEg@y@i@cAi@e@_Ac@_@Ug@{@uAsEWi@qAeBeAkAa@]m@[wAm@WSOY]_Ba@qAY}A]_EKi@Wa@kBsAmFqD_BwAwA{AkAoB_@aA[oAc@cDYoAwAuCq@mAm@s@uAo@a@MQALiERaETwBvCeMVeCHyA?WWkEW{Cs@_L{@}JuAwIUoAA[w@}Gy@_HgEm[e@oC_@sBSKMOISAU@ODOHKTOUoAiBwLkDsR}AkIkCeL]kBk@eEkBeQ_@wDGoBUgBCiA@_ADe@\\q@t@yEAQ_@g@EOB]JOVEt@I\\KTi@h@yAdBiF`CaHtCoHj@wBFQK_@KUQWe@{@cAo@}IoC_IkCqGiCCw@k@}F]gC]_EMcB@a@H[XGLH^XxJnJbI~IzDbEpAxAxAjAZNv@E\\Dt@@t@_@vHoT~EsVnB{FrAmD?I`AiCJItCsHRcAB[ESqAe@OSESAUBSn@aBTi@d@q@v@HnBx@~Al@p@\\n@VN`@kAnDe@j@e@C}FwBkC}@w@K_AJaMpAiIbA_E`@kEl@qHv@y@DaMvAeGl@wR~BoJgJ{DcEUTsE`AqBj@}ARqAFo@y@MyA?o@Dc@d@oBtAoEMOe@{@{AHW?aEGsBGKMGMe@aD}@aB}@yA";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "11") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").show();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("korf2a");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "x~li@iyeaT|Qn@h@?h@~JhApVfAl[Ch@NfHT~Cn@zD|DrPpBzHvAvEbApDr@MhAq@~B}@tB_@dDy@hFiAxBg@dAMfBK~AEpEX`^bDnE\\d@kKVaEj@eEPu@Za@PKTCl@?`@I\\M\\StAcANIdB_@hAC~A@vDRZAbBg@nGSvCEfG@hDn@jAPrNlAnE\\I|AIPQ`Ba@`CCl@?hABjAnAzR?lBsAhSHTWlEOlF[xGvNd@fI`@bDDjBFjDNzKn@v]hA`FV~EZViDFwBDa@Po@NWXYn@e@v@c@DGJe@Hq@DKLKnAQhFYHCxAcAZKVCzCEvB\\xBmN|Gr@lCZ|BRrBXvD}R}CIe@?]IcAQ_HeAsHmAoHcBwHcB}IwB}Du@eBk@a@Ls@WeCu@}D{AkCu@u@QmB_@}@EoBCkA@s@G{A[oA]w@Q}@CoJaDqASiCYmDSPkC@i@E{FDsDPuFLkAlAgDHgA@q@GcD@gE`@eCt@yDFg@@YoDjC{BfBmBhAw@ZGIv@]|@e@rJmHV@v@FlCZrCd@tRlDxDf@`KfAjDj@fATxOpCrIbAjG~@j@uBpEkV";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "12") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").show();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("korf2aa");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "zpwi@m~daTtI{c@p@{CpBsKdB`@hD`A`C~@lD`BlFjAXPzHiFVLlA\\j@HZJjAj@d@LvANl@B~AAnDxAjAZh@OpBkE~CtApDvBc@dA`HrCzAj@hDwGZw@h@kBTqASEMl@Lm@RD~@}Eq@W{A[{Cg@CHBIWG_A_@oB_Ao@UGLFMcBo@s@_@OQ]m@a@m@MKc@S_Be@q@IgCg@wAg@iCqAkBmAMEsA]yCi@YEg@C_AJe@JYD]@o@A}CDkBCSBkAKaBSkCi@{Aa@{Be@y@dEwDs@g@OaFaAiASO?[FsFtEq@r@aCnBmFvE{NpKeIvGcBvAcAF{@G{FIcDB{@Cy@f@e@CaAO_A_@wAQ_AHc@J[@HcCJ_ARw@n@}Bd@_BNqABg@Bg@HaAHcAHaALaA`@}BJmALkADa@F_@X{@j@kCyDI{DSoERkAJmAC_FSaCBgBA_AYw@i@uBg@}CmA_Bg@sBScBKyBUkAGeAGy@N_Bb@i@Ji@Ag@Qa@[}@aA{BeCo@}A_@_BMw@Iy@Ky@?y@B[F[DHAv@F~@LjAj@tC`@bAj@z@kAxA{AnBBNLTmCvE}N|PqDlEuEjFuDbE_@O_PwE}CoA]b@KDsBk@_BIiD}@yC]G~@J`ADv@In@YjBeAnHkA?_C@yC?gCA}E@sC?qF@yBAmD@kB@iBAaB?_CBgEAwERaH\\eDLD~An@fMwQ]CBi@tDeEj@Qu@@YVs@HWl@y@`@_@NS~AF";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "13") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").show();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("korf2b");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "v~li@kyeaTlRn@s@}OlAEnPu@tGEr^AA]@\\bM??sAzCCpEBf@yCTwBRuA@q@OsAHeAxC\\hD|@~AHrBj@JE\\c@|CnA~OvE^NtDcEtEkFpDmE|N}PlCwEUg@l@u@pA_B]i@Qi@EUEOG[Qw@WoBK_AE{@PG@r@Fv@Ln@Jl@N~@Tt@L\\R^t@`AbBbBx@x@^R^Fb@ElBe@v@Mx@CjAHtAJfBLhCRjARlAd@nAj@pAZlAVfCfAv@Dr@@v@Gt@@xBDjBHjBBlBOt@Cr@EfB?bBLpBLrBDKr@Or@i@dB_@vDEr@Or@WtAOhAKjAOlBKvASvAa@lA_@lA]pAIj@E~@I|@?TDFf@KZIX?ZA|AXl@Pd@Pv@HP?PKRSJEdCC|HBfBRhAu@tBgBlM{J|EiDxAoAtFsE~EgEfBaBtAiAd@YRCR?jHvAtEt@r@wDpJvBpAPzALPDjBB|CEn@@v@Gd@K~@Kf@BXDxCh@rA\\LDjBlAhCpAvAf@fCf@p@H~Ad@b@RLJ`@l@\\l@NPJFf@VrCdAnB~@~@^nGjAfA^g@tBu@vDk@nBoAnCsBzDiBq@aHsCkAjCAJiCkAMISS]gAgATYqAoA\\kA[oDyA_B@m@CwAOe@MkAk@[Kk@ImA]WM{HhFYQ_FgA_EeBwDsA_EcAiM~n@i@rC";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "14") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").show();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("korf2bb");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "pqwi@i_eaTeArFU`BcChMi@nBoJuAaHy@iVmE{@M{BQkCYkDa@{AUwTaE{@MsDc@c@AcIfGmBhAw@ZGIv@]|@e@dJ_HCl@Gf@u@xDa@dCAfEFbDAp@IfAmAfDMjAQtFErDDzFAh@QjClDRhCXpARnJ`D|@Bv@PnA\\zAZr@FjAAnBB|@DlB^t@PjCt@|DzAdCt@l@\\T_@vBv@|Dt@|IvBrB`@vCp@z_@xGfBBlAANV?VaExRwSiBcAzE}@jFgCe@cCDgAZy@p@g@Nu@F{BF}B^[lAK`@mBlAm@dAOxAIrCa@pBeBnA}Av@sE|AsD\\oHPmEIoENiGO}PLsDRyDLcJCeF`@a@mIO_HRwGhAeQp@cJZwGk@mHq@gLTkE`@gCR}BcF[_Io@}BUaCc@uAYwAKcD?gILyCD}Ar@iBEwDS{A@uAT}@`@u@r@s@Xy@X_AAq@h@kA`Im@lOwVwBoLgAyE[wEPkN|CkFfAyElBhDbOe@FaH}Y}FiTgB_Jq@yH{BSiGM_CJ_C\\m@RmB`Ay@r@QBKCIQDSLOrBsAdA_@|A]dCc@bAE|DCxB@\\GJKDGF]NsGk@yMm@wPwAaYiQ]CBi@tDeEj@Qu@@YVs@HWl@y@`@_@NSzAF";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "15") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").show();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("kor5");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "txni@yuw`TD@FQHIm@aKkOz@}H^kTnAIRQJIBM?WGQUCYHWHIXIRBRJJPxDQ~DMrHa@nN{@rIm@CYl@E^pG\\jDDDTATFj@d@TFfLHdM?FMJKNEN?NBLFHL\\LdJ?xOHhACt@K`@ApIBNFvHUzHe@zDOxAKpC]nBc@TIhFgA\\e@uBiJm@kDeC_U_@wDGcBUsBCiA@_ADe@Xo@H[f@mD?SAQWe@E[BKHMLGPET@LNDR?LCPUz@BLOr@WpB@VDJZVLRDZCd@IZy@`CKv@BjBfArJ`AnJn@fFZ~A~B|J^nBdAxETv@XnBxAxIj@tCvBvMLN|@b@\\?b@S|FcEPWNWlA{CX}AJkAVqJBsEJsEPqAPu@Vs@`@}@tIkQhDuGjBoCrDaFp@u@XMl@?l@FxFfAl@?VMb@e@HOJe@BaAPwDHw@\\sCb@y@fBoCZs@H]Fi@EcAKcBA}CE_AG[IUS]wDmCe@k@i@aBQDqIx@eD`@uAL{@Wy@_@eHeDmC}AsC}@mC_AcDqAyD}AoAg@k@D]TYp@q@Vm@?e@Qw@_AwAg@mFgBuBq@}Bu@sK{DW_@Iq@KmBc@_Eg@iF]oD`@Yt@X|GlGtKnLlJ`Kx@Rx@?r@@p@QbB{EpFcOrAgHxAqHxAeHhCiG|FePCSqAe@SUEQAWzA}DTK`@EPDvBv@~DhBHVAh@OX`@j@tFlC^J\\BFDFJDP~FnC|E`CfAb@rEjAv@ANETO|AaGj@_BHQPQlEkChCqCvAqAdAgAzD{CpBwArBeBjEeEd@iAVu@^wBL_Aj@wGZqCDeBEg@i@eCI]By@DWx@VhAH`BBdBA`@E`Dg@bF{@d@_AtAiDV_BOsHVyClB{LpB}J@Yb@mBfAmGVgBFuCBa@b@{AfAkCr@uB~@kBf@_Bt@sCXcBTiCXmBx@wDLcAXeDB{@Hc@FKpA}A|@{@xLsIvAgAxA}@dAi@hF}Bz@YlEgAxBo@LGtAaAv@s@dF{EtByB`B}AHEJ?bAc@z@WZe@X}AFq@@_@CSGKYSmHyEiCkBMUAUDYx@_BnCaFxBiEZw@^oA^mBSEMl@Lm@RD~@}ETFpAB~BN~@BdCTlBFXAlEu@~@MRAp@D`C`@|G`AhA@`CPbBHd@@zJEfDBFWJ_ARo@JUj@BdALV?^Eh@Ab@@x@ClC?~@Ml@AzAJPBhA\\`CdArE`BTBrA?NBVLbAt@hA[^Uf@c@nAw@j@Yj@_@bCoAzBmAhBoAtDaChF_D`EyBpBaAxBw@`@Eb@CbDBbBHn@JfCt@j@HlBGhDYhBG~@IbD?b@H`Bv@vAZBMCL~@JHH@HfDRb@Lf@^Td@NJxBr@j@VLLDDl@~ExAtLJ\\NXRNf@JxBJ~EHKxDQpFQtJf@Hb@D`BHjOZM`BrBFnCPFFY~JJHFN?NIPQHGb@KlCOALoDQKGSiGWF_BwBG@{@cEQ@q@LaDwAKSES?oDUy@QJq@?]@Q";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "16") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").show();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("kor55");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "blbj@oqeaTJK|@wXwEIyBKg@KSOOYK]yAuLm@_FEEMMk@WyBs@OKUe@g@_@c@MgDSEMIB}@KwAYYKiAo@s@QoC?_AHiBFiDXmBFk@IgCu@o@KcBIcDCc@Ba@DyBv@qB`AaExBiF~CuD`CiBnA{BlAcCnAk@^k@XoAv@g@b@_@TiAZcAu@WMOCsA?UCsEaBaCeAiA]QC{AKm@@_ALmC?y@Bc@Ai@@_@DW?eAMk@CKTSn@K~@GVgDC{JDe@AcBIaCQiAA}GaAaCa@q@ES@_ALmEt@Y@mBGeCU_AC_COqACg@tBu@vDk@nBoAnC_GxKQb@ATJN|MbJFTCj@[~BIRKRo@Tg@NcAb@EHGF_Az@qHnHyBnBy@p@g@TmA`@_FpAcBh@kF~BeB~@[PeD|B_ChBaGbEaA~@mAzAQh@KfCQxAMbAi@zBi@hD]bDWxAq@bCk@bB{@jBs@nBgAnC_@lACREl@?xAEl@U`BgAjGc@lBMXqB|JmBzLWxCNrHW~Ai@tAk@rAe@~@GVuHnAeAP[BkABqCEaAKi@KIpAh@dCDf@EdB[pCk@vGM~@_@vBWt@e@hAkEdEsBdBqBvA{DzCeAfAwApAiCpCmEjCQPIPk@~AuAdF_@fBcDu@aCo@q@UcNoG]ASHQVg@fB?LLt@z@`DEJGF_@JqBu@cCmA@k@XI^QpBmAn@s@JSZcAM[OO_G}Bo@Gm@pASDg@KiAe@wAe@kCgAWOEQAWzA}DTM`@CPDvBv@~DhBHVCf@aBtD_@Ns@Um@UaBi@iD{Ay@YcA@uARwD`@cJdA{JdAcEj@aBP_E`@cE`@mHz@_J|@{Gt@wCZyB`@lDvDpEdEjGhGr@b@`@AXIZJZbARxAx@~@tF~FfNbOhCjCfClCd@f@n@@t@E~@Ph@Z~DpBzDnBvDnA`ElApDpBbJhEj@H~AM|Es@hE_@z@Ef@LXt@N^j@l@lDhCT^Nh@XABb@WBFlFHtA?`@El@Mb@Yr@eBtCa@v@]jCYlFA|@Kj@Ub@a@^e@Pg@?aAOCb@Bc@cE{@e@Gm@ASNe@h@uBpCqC`EiDtGSZcAxBsGtMy@nB[vAIl@IrEGpESjJEh@a@jCoAbDYh@ONaC|A{CtBg@`@BZGXKPOJQFS@SCSKMOISAU@ODOHKTOUoAiBwL{AyIMFGWFVLG_B{IoAoGs@MeFbAY?oBb@qC\\yAJ{DN{Hd@wHTMDU@EPEDiDAAWgC@_@@s@L_DBqDG}CCiF?kEAFLFDGEGMo@BUJIJMFOBO?MGKIGMm@GqFEcD@sDCeHIu@KIJdBtYlA|QfAdQRbGd@rJRrCxCMF|A~AG@~@A_ANG@GAoAqGV@RCPMVs@`AW?KGIMBSj@cB@{@w@oNqAwWyB}]UgF]eFKGIIEMAUFQ?G";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "17") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").show();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("korf4b");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "thfj@wzq`TuHr@oIl@gD`@yADqCTmAAo@BkB`@aBRcAH{FPKpC[lBOzAExAAxAEpAk@hG_@fB@|FCtAGnAC^I`@}@lCeAfB}DpHc@x@}AbCq@hAgA|AWp@Of@WbBk@`FGvA?pAF^JZn@dA`@h@h@f@NLTHjAVLFHJZx@Hp@A\\UjAGrAFb@b@r@BN?\\ILQHcAVKF[\\]v@Gl@HjCKZs@z@]lFCRGTKFs@FGJiBlH]BKPW`Ba@pDeFS{DW}EAkEJiA?aG_A{Ei@}DQ_MaAiFkA}@c@oA{@iB{@WGu@GyBCkG?{FYwERwJpAoEd@{AV}HhBq@Jw@?yBGeB_@{KoCmA|GIV[h@i@dBS`@u@lAmAtCoBdFYh@Wv@wAnDYd@oBs@wKkEsGcCqKwC_IqAUBa@P[FS?_@IWUKWSOYMUGeNaBsBSCN";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "18") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").show();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("korf4bb");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "ts{i@{tl`TBO_C]uOaAQIEI?QJIh@I`@A`AJ~@XjIj@nMrAxGx@x@B\\ETKREV@RDRJLNj@b@xHxAfLnD|VpJtAqDVa@TIXi@nBeFlAuCt@mARa@h@eBZi@HWlA}GzKnCdB^xBFv@?p@K|HiBzAWnEe@vJqAvESzFXjG?xBBt@FVFhBz@nAz@|@b@hFjA~L`A|DPzEh@`G~@hA?jEK|E@zDVdFR`@qDVaBJQ\\ChBmHFKr@GJGFUBS\\mFr@{@J[IkCFm@\\w@Z]JGbAWPIHM?]COc@s@Gc@FsATkA@]Iq@[y@IKMGkAWUIOMi@g@a@i@o@eAK[G_@?qAFwAj@aFVcBNg@Vq@fA}Ap@iA|AcCb@y@|DqHdAgB|@mCHa@B_@FoABuAA}F^gBj@iGDqA@yA[EZDDyADk@Ho@ZmBJqCzFQbAI`BSjBa@n@ClA@pCUxAEfDa@nIm@tHs@";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "19") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").show();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("korf4a");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "thfj@wzq`TuHr@oIl@gD`@yADqCTmAAo@BkB`@aBRcAH{FPEoD@yAIiC?m@Dy@`@iCPiBN}@\\{Br@kDHm@Ru@\\s@n@mCdByGpB\\LCdBuCxA{ApAaAl@eAVs@LkA@]AQKk@AoAHuABOHOr@SNMLi@TmACGEGe@WKQIUEyCHmBGuCDaANe@BUCaAD}ABEHCh@Gd@K~Am@KgAI]KQ]UaAi@a@_@s@g@WE_A{@eA{@}@kAe@u@m@oAQq@Ac@DmBAu@Ei@Mg@qCiCk@a@OESCaADOAo@S_AOSIk@e@_@c@We@EQ@q@X_GH{@j@yCeD@sGc@}CYuEi@uABmATyDx@YBa@?sFMoJ]uCMiBU}@Ow@WuAs@aDyBe@c@Yc@s@q@YQgB}@s@a@w@{@e@o@eCuEUYiAeAo@s@[m@_@mA]sBi@yBKKQA_AEk@OMT]`@iAx@[Ja@TmBTm@LWTcAbA_ErBqAb@o@Hu@@OC]OoAs@WEOBi@r@YRSJa@JgALcB?i@DIBEHgB|DSPo@XcGGs@IiDeAmB[y@[iBc@aGaBpA{E|@mCxBcJJOfAy@XILAnC?^CdAWrAS^IDEr@UWmCLCNdA";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "20") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").show();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("korf4aa");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "xv_j@{sx`TNdA`A?v@PfAh@lAJD?LGd@q@Ve@RAtCh@vA`@f@HhBHzCAfJRnCR~CZxBkK^qATk@FGHCp@?hCTtBVb@?pAWj@E|@Ah@DpAN|B`@lDbAbGrAbGF\\CPIp@g@~@i@rEcC`Bs@d@EtAA^@THbCbBf@XvEhA~A`AfClB`Ax@bBdBt@~@vAzAVf@P`@p@nCxBbKRlAR|A@d@IdA_@jChEzAyAhG}@pDy@hEIz@Y~FAp@DPVd@^b@j@d@RH~@Nn@RN@`AERBNDj@`@pChCLf@Dh@@t@ElB@b@Pp@l@nAd@t@|@jAdAz@~@z@VDr@f@`@^`Ah@\\TJPH\\JfA_Bl@e@Ji@FIBCDE|AB`ALAM@CTOd@E`AFtCIlBDxCHTJPd@VDFBFUlAMh@OLs@RINCNItA@nAJj@@PA\\MjAWr@m@dAqA`AyAzAeBtCMBqB]eBxGo@lC]r@St@Il@s@jD]zBO|@QhBa@hCEx@?l@HhCAxADnDzFQbAI`BSjBa@n@ClA@pCUxAEfDa@nIm@tHs@";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "21") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").show();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("korf3");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "pryi@yskaTLBLCJIx@yC^mAsCm@FW|@ZzHbBV{@nBwIrAsFbBgHvDjA|AXbDZlEf@rAPd@JpEd@AHkEc@m@OsAQiEg@kD]yAWgDgA}A|GyCdMyEpSaC~Jp@`@lEpBtDnB|CnBNFbAHfC?n@G\\GnBo@zD_@vDg@j@EV@z@JpCf@hCp@|A^t@DbA?|AGjBHJAr@@^AhB]XA|@?`AFr@LVHpBfAp@VnAV^D|@BNCh@WR?`I`BFDtAXfCV|B\\hB^\\HnAr@`Ct@_@bCi@dCOfACt@@VN|@BbAc@tF[~J`L\\zCHN?zJVzOf@@LcAAuDMeAGaRk@[CiCEqEMmEM_@tKMjG]rJWrKEp@GLSP[BeDDEHGFIDGZW`E[zDk@jEs@hFsIDmAAsCMqAMiAA}GaAaCa@q@ES@_ALmEt@Y@mBGeCU_AC_COqACg@tBu@vDk@nBoAnC_GxKQb@ATJN|MbJFTCj@[~BIRdAJlCl@rAPrH`@xFp@nC@^DZH|Bx@pB`@bBRFDj@DdBXnAl@n@`@tBt@\\ATEtBa@|AWpBAtDc@v@GjBDh@Dp@@TC\\Ib@_@d@m@dAiAjAi@ZWRUvAyBTQ~DyBrAm@n@KvEG|@?hADjGd@BWCVXBV?XETMPQv@qCdAmENg@RQ~@a@j@Or@[lBY~@S|@[RQR_@j@aBVa@ZSXK|COZOb@c@TKpAEvCm@\\Cj@Bd@NtAp@HJHX@^F\\PVbCvAh@Lb@DdBAlBNxCh@ZBnBDl@?j@Gt@Ud@vAdBWVAf@DjDp@hBbBn@|@wCTwAy@y@[_Dg@RdETdDd@bDNxELlCDf@bArD`@rCD~@Gr@cAjF_AjI]jCa@hCBVPZzBpAdEj@z@t@d@l@xAj@n@b@X\\L\\B^EnFTdJBvBLzBC|EMvAcAhFa@nC_@vFi@fGMbAs@~Dg@~CE|@WfI{@Rw@PaC]iDg@{B_AsAq@cBg@aArELD_BvGWx@OCcA`EQz@Cf@n@M`Bg@h@U`BaA`GeCrD_CbAiAfAyAVe@|@Wp@Sh@K|BKpFi@t@E|CG|@Id@Md@Y\\[Pa@Vq@f@mBb@_CRs@VWjD?~@GR?|BLjAxA|Ah@lATlEZBYCXjCP?~@[lDYtEYjHKnAc@zCEHsBdBOHOTA@oAnD]r@eBt@a@Ta@\\s@~@_@l@gBlDc@`CWlCYtBoB~Ju@`D]tAy@dCqBdFk@dBMj@cArFq@dFJHBHEv@WEUrBtQ~C`EbA~A_Hd@eCBC`BNpDRpK^f@}KHmBFsDTcH~@}Fb@TnFbEvB~@n@PvEbBFWGV`F`Bx@^b@Pf@ZnBjAeAhEc@zBe@`DUbAIfA?VJ|@BhBEbACNeAtDg@pBQVE^cA|Ca@z@Qn@{ArGe@bD|@CvDEBPwC@Ah@IDK?";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "22") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").show();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("korf33");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "xpdj@is{`Te@AMOIq@NwAP_AxAuGRo@Zw@fA_DXy@j@qB~@qDDSDcACgBG_AEg@Jw@RcAd@aDb@{BfAeEsCkB}Aq@aFaBwEcBo@QwB_AoFcEc@U_A|FUbHGrDIlBg@|KqK_@qDSaBOCBe@dC_B~GaEcAuQ_DVeC|@yGbAsFLk@j@eBpBeFx@eC\\uAt@aDnB_KXuBVmCb@aCfBmD^m@r@_A`@]`@UdBu@\\s@nAoD@ANUNIrBeBDIb@{CJoAXkHXuE_Al@m@h@l@i@~@m@ZmD?_AyIm@mAU}Ai@kAyA}BMS?_AFkD?WVSr@c@~Bg@lBWp@Q`@]Ze@Xe@L}@H}CFu@DqFh@}BJe@F{@Vw@NqCa@{Ck@{B_AsAq@cBg@aArE}DtOQz@Cf@n@M`Bg@h@U`BaA`GeCrD_CjAoAUITH~@sAVm@v@Oz@WTmID}@\\}B|@aFLcAh@gG^wF`@oCbAiFLwA@_EO?N?@]M{BCwBIgCMCLBK}EDoFC_@M]Y]o@c@yAk@e@m@{@u@eEk@{BqAQ[CW`@iC\\kC~@kIbAkFFs@E_Aa@sCcAsDEg@MmCOyEe@cDUeDSeEa@wAdBWVAf@DjDp@hBbBn@|@wCTwAy@y@[_Dg@a@wAe@wAu@Tk@Fm@?oBE[CyCi@mBOeB@c@Ei@McCwAQWG]A_@IYIKuAq@e@Ok@C]BwCl@qADUJc@b@[N}CNYJ[RW`@k@`BS^SP}@Z_ARmBXs@Zk@N_A`@SPOf@eAlEw@pCQPULYDW?eHi@iAE}@?wEFo@JsAl@_ExBUPwAxBST[VkAh@eAhAe@l@c@^]HUBgEMw@FuDb@qB@}AVuB`@UD]@uBu@o@a@oAm@eBY[EO?_@DMAiCa@wAa@w@WSI{@Q]C{@@kAEiCYuAK}DSoBQaBUaCi@yAKKGJOX}AHqACSGKYSmHyEwB}AQMMUAUDYx@_BnCaFxBiEZw@h@kBtAoHTFpAB~BN~@BdCTlBFXAlEu@~@Mh@?ZB`C`@|G`AhA@pALrCLlA@bIEdByLp@yJC]IGEICI@KBKFGHEJAH@JDDHDHdEBLMFMDq@VsK\\sJLkG\\}K`L^|CDNAjLZ@WAV|BH?LqPi@GG}CEaL_@\\cKb@uFCcAO}@AWBu@NgAhAiGaCu@oAs@]IiB[eGy@uAYSAcDo@qCo@S@_@RWFaAA_@EqAWwBiAcAa@o@KcBKg@BqB\\c@@u@CKCkBI}AFcA?u@E}A_@iCq@_Cc@mAOWAk@DwDf@{D^oBn@]Fo@FgC?cAIOG}CoBuDoBmEqB_Ai@hByH\\uAj@qCxBcJnBwIrAsF~A_HzDbAzA\\dDXlEd@rAP`@JdFp@`APGf@Fg@aAQeFq@a@KsAQmEe@eDY{A]kD_A}A|GaFzSg@OqE_A_@lAy@xCKHMBs@O";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "23") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").show();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("kor6");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "hj_j@wbbaTvA{Bv@aAfAw@hCiAb@GDP^XrEdDr@`@pCtBrBtAj@d@fAt@\\A|@TtBMx@b@\\VPBHE|A[~@Wh@OWw@mC}GPKrAvDLGIWHVhA]Pf@wAf@`AdC|@vC`BpEpAbDHz@c@fD@F_@bDEj@]tC}@|EaArELDuBxISGuAzFEhCAlCAd@a@r@k@p@OCgAlA_@z@uClIwBpG{A~EgA`DcAfCcCvHmBpF_DtGqCoAIS}As@kB{@wAg@cCi@qAO}@IiBU}@EAJ@KkAMcBGo@DgAb@uBhBs@v@sAvBu@\\_Ap@eAl@oDbBuMvFwBlAy@Tg@?sAOWIgFu@[@wHkAsE_@wEO_FWcCSgBKYKuDa@oCe@iCm@{FkCWKkB_AcAUqAGo@F]DuHrAcDn@uCZwP~CyIpAsHxAuAj@mAbBKRUr@MZSVgAp@qBdASJ]H_@Bw@?]E[AuCw@oB]kAB_@AUDgBJSCQMeBmE?GBMZOb@HvBdElAb@^@jACnB\\tCv@Z@\\Dv@?^C\\IvAw@A]@\\l@YfAq@RWL[Ts@JSlAcBtAk@rHyAjBYG_BCwEBgDHeDV}I\\yI`@FOzCMvDW|IIdDAnEHdGjEo@vP_DtC[rAbGRbBCZ_@xBIdAKhC_ApEUnDU~CGxArBhAvBjAlAd@dBLxA@jA?|@HdAFjAyDdBsGnAd@hAXJJ@XiAxE@FvB~DF@`@AXHzBnBhDn@hCSdB[l@Bf@HXT|@PoAfCDHv@f@XNDJEf@q@pEg@vB[t@a@h@eApB_Ad@{@\\uAz@}BjAq@l@k@`@SRiBvAeB`Ba@dAc@z@Mb@}@|@MXoArDe@z@{@~BmAbBe@\\ORQr@@XH^ERQ^_@Ze@TWVk@t@eEpGONc@v@]d@mBdCy@d@iBvBGTEVB\\NAO@TbCCXFhDf@hDV|BLtBFl@b@dAMp@Wr@c@xAOv@?R|AV`Cd@v@TdBV~APdAFz@EnASdCBl@Eh@]hAe@hAOb@CnB|@nAJ~@?t@M|@]nAu@l@Ur@ApDHnC@v@R\\^b@ZhAl@b@Aj@QfFyDvAoA|A}AbAw@t@WdAUhACrABlADlA@~Ej@nBZR@rB@XCnCo@~B_@lGy@x@U~@e@h@K`AMlAFRDhAVbEjApHjB|A}Fb@eA`@wAb@iB`AeEZa@v@g@f@MxB@p@GzAa@`AGzAa@g@}ESiCl@q@hEmCrBaCv@kATYhBkCb@u@Hq@?c@CEAMBK";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "24") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").show();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("kor66");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "fg`j@ksy`TNED@D@FJ@FEJEBB\\Mr@M^sB~Cs@tAm@p@yBnBgElC[TIX?d@NhBf@dErABh@J~@d@tANRGd@q@Vi@LAXHrB^dBd@bAJlAFpAAlB@zDLzBBbADvFf@ObBRlCdAp@\\POTc@l@oBhAi@Jo@Fa@H}@PcA`AQZ}DjB{An@yA?o@SoAs@WEOBs@z@c@V}@R{@BuA@g@DOL_BnD_@d@k@RqDGgABe@GWAoBu@kIoBaGaBqHkBcEkA}A]mAGaALi@J_Ad@y@TmGx@_C^oCn@YBsBASAoB[_Fk@mAAyA@gC@oAJu@VcAv@}A|AwAnAgFxDk@Pc@@iAm@c@[]_@w@SoCAcDIaA@m@ToAt@}@\\u@L_A?oAKoB}@c@BiANiAd@i@\\m@DeCCoAR{@DeAG_BQeBWw@UaCe@}AW?SNw@b@yAVs@Lq@c@eAGm@MuBW}Bg@iDGiDBYUcCC]DWFUnA}AXYx@e@lBeC\\e@b@w@NOdEqGj@u@VWd@U^[P_@DSI_@AYPs@NSd@]lAcBz@_Cd@{@nAsDLY|@}@Lc@b@{@`@eAdBaBhBwARSj@a@p@m@|BkAtA{@z@]~@e@dAqB`@i@Zu@f@wBp@qEDg@EKYOw@g@EIjA{BUKa@O}@Uq@GmK@gEaDgAqAkAaBzAyF}CaAsBzHcAxC}BW_BH}CImCcAsBuAkAs@?uAX_GrAeIr@mIq@oFa@}A_DNwP~CyIpAsHxAuAj@mAbBKRUr@MZSVgAp@qBdASJ]H_@Bw@?]E[AuCw@oB]kAB_@AUDgBJSCQMeBmE?GBMZOb@HvBdElAb@^@jACnB\\tCv@Z@\\Dv@?^C\\IvAw@A]@\\l@YfAq@RWL[Ts@JSlAcBtAk@rHyAjBYG_BCwEBgD`@cOxAaX`@B{@jMOzCMvDW|IIdDAnEHdGjEo@vP_DnWeEpA_@^j@r@t@p@l@fAt@fD|AvBf@bDb@tDZx@C~CL?U`FTjAd@r@JxBJpCVtFt@f@H`B\\x@@x@Ef@M\\S~@y@v@uBhAeBzBiBnB{A~CgBfB}@|AWtBOj@I`@MN?h@[vAcBf@UpAc@jA?fDNxAXzBt@~@d@bA\\hBTnCXbCh@vAf@hEnBRBpClAtCcGlBqFbCwHbAgCfAaDzA_FvBqGtCmI^{@zBaC\\u@@]BmCAoAAWaAKeEaAkEsAwBkAcAgAqB{@eIwBuCa@sAu@o@c@Au@r@g@nAo@`Ac@b@i@T_@UI[YoBgCc@_@u@e@_@e@Me@Fw@l@kD}CkJqAkDC[@MP{@h@gBRi@bBmCVw@";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "25") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").show();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("korlm");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "dgpi@}`d`TKT@DFHPJz@kBPQPEvBcEdBeDGCFBr@sAvAgDp@qBrB}IfAqEn@sDT{BNwDIuGOmDUwBOsAKoAM?L?q@}JiAuRIiCIuFGuBW_G@yBZ_BZu@`@o@pAmA`BkAn@g@l@q@|@aBv@eC`AmDj@uDPqBXsENkEt@gJFgADiEG{JRuJN}ETaDT{BNu@d@cAl@y@fFsF^]t@u@dAoAnDcDrG}EbH{FhEiDbAy@jAoAtAwB\\aA|ByIdBoIJiA@{@AeAqA}Wc@kCOk@Qe@}@iB]g@i@i@oI}Ei@e@[a@O_@Mi@Iu@CoAVaCr@uDb@oBjA_EhAeDxAaDZi@|@gAt@o@bAi@dBy@XSXURYXo@TiAXqBNqBDu@TuCFaCLmCXiDPmAhCuKNu@b@gD@m@s@eIOuDg@aHCaAOsAE_AI]UqCkBgLy@yHw@mGiAaJ{BmPi@aD_@qBSKMOISAU@ODOHKTOUoAiBwL{AyIMFGWFVLG_B{IoAoGkCkLm@kD}AeNgAqKGcBUsBCiA@_ADe@Xo@H[f@mD?SAQWe@E[BKHMLGPET@PAREPQpNu`@@IAKmAcCGa@?YF[LUHKJITITEV?`@FpAUJO`AgCr@{BlDqJf@kBt@qDf@qCvBqKn@gCpEmLRo@GYFXxCeIBYCSqAe@SUEQAW|@}B";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "26") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").show();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("korlmm");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "~bti@gb~`T\\_ATK`@EPDvBv@~DhBHVAh@{AtDQHSAwDqASDMHo@lAc@lAy@rBgA|Cw@nB_CfGKZ_@lBm@`DmApF_@|By@bEmArDgA~Cu@fBiAdD{@|BSjB@HFNk@^GPk@~@sEfM{H`Um@nAi@vAOn@WpB@VDJZVLRDZCd@IZy@`CKv@BjBfArJ`AnJn@fFZ~A~B|J^nBdAxETv@XnBxAxIBd@~BnO`ArHzAvK^dBPfBnBvOlBlPn@rDx@tF^rDv@`KZlFL~@FtA`@tE?`Aa@dEe@|B}A`Gm@dDSrBa@lJeA`JSfAQh@]j@[Vi@\\yCvAi@d@mA|AWb@eAbC[n@m@dBeApDiBhIKtAN@OAGzAFdAJn@Vl@d@j@dAt@~CfBv@ZrA`A^^\\l@jAfCb@rBPxADp@jA~V@j@G|AKv@cA`FoCfLm@|AS`@eA|AeAdAyDbDaDlC{KnI_BvAqD|CsCbDuCvCi@`@oAbBc@hAs@dII|BQzHElHHvEIrEu@pL]pG_@pF}@bFm@lCiA~C[t@q@|@u@r@gBhAoAhAe@v@Wn@]tAGx@?l@LjCJlDN`KXpEDdBh@tJb@|Gh@lGV~BPbDFfGMxDW`Dg@tCqAxFsBjIc@vAg@nAc@fAeAtBsFlKaBrD_BvF]VIDK?a@EHk@Le@`DkGQKGIAEJU";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "27") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").show();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("kor7");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "r~li@oyeaT`Rn@SoDo@{QAe@Be@W}FIaAOoAeAkHaCqMe@eBgIoX_DuKo@}BW_AEc@?YHId@Iz@FnI`AxIh@fCTvDt@rDv@~L~BtCXjEXzDJlCAhDg@tDs@bAYxBkA|BiAzAu@pAq@lDmBf@a@x@aAh@c@f@A~@PxEhAr@Ll@BXDXATCRMr@c@LKh@Kt@Et@@tACpCLb@FfAVn@?n@Gv@Ch@N`@RZThB`APBV?bCGhAL|@^vAx@^HNCVIx@YVEV@x@\\\\X`@RnALtAFhAJhAHf@TNl@?z@BTHPrApAj@j@`@b@H\\BTIn@CRENEVAj@Bh@LfAd@fCXhAN\\V`@z@~@fChCNJh@PP@XA|Ae@z@S`@ArCNtGf@f@Fx@NzDxA|AXt@RnAr@v@NtAA`AC~A@fEPxAAxDYpA@p@@tCPdELhCL|BZnBb@`AHrDK`BFn@Nb@NhGdD`H`Dh@NfARvABlB?~AAp@CXD?NaKhImE|CeLxIiDnCkAn@c`@l^UNWLwBp@UJ[T}A~Ak@h@cHfFcIfGmBhAaC~@eBv@{SzH}Bv@aJlDeDjA{C|A[RaC`Ca@d@sQpYaClDjALtAHjEd@tCT`D^zHj@C`@uBOuJ_A??mDYuI{@}DzFa@r@e@j@uNlMuAfBe@z@}@nCuCnNe@tC]zEMlCA|F`HEfCOvB]fLyArHcApHu@pLTzQp@vNh@f@jRe[XiM\\iMJsCN{C?gIBkINgDF{AHo@DQXbFhW|@xFAnDUtGGzAOZIPjDtD~^h^RFz@f@ZEX?HBXZTr@Db@H\\ZZp@r@^l@pGxG";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "28") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").show();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();
                var map = new L.Map("kor77");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "f~li@}veaTdAm@hHRzCJlBHPk@?y@{@{QO}Fa@aGmAoJ{AmIkBiIePgj@~KrArKh@hYvFfLjAfEDbBBbBWzIyA`KsF`EsBdDeDxIrBpBHdCiAxHEjDp@zBSxElBtE?t@VbDzAtBi@~@Fz@z@t@L|CRtBTr@TCfA\\nAv@x@jAv@ZbAQpCJnChAhEdCnDvAlAl@d@f@@hBUrC_@vHd@pD`@fElB|Bh@bCdAnFGnFXtH[nLZbCN|BVpBd@fAJpDM|ADp@LXLjGdDbH`Dl@RfANrAFpB?z@EXToBtBgEhDsE~CaLxIyDxCkDdC{CzCmGdGuOxN_EzA}CtC{GbFgIjG}AbAkBh@aCdAsSnHaCbAcJdDgDvAqCxAm@\\{BxBe@r@kAbBmAhBqC`FsCpEqC|D}@~A[b@aB`CqApBJPlAeBn@{@`ALzLpAdHl@dHh@Ja@ya@sD_BdC}A|Bg@v@_@d@wNjMwAlBi@~@c@nAi@`BiCfNk@pDY`EKnC?zFBfDD~CN~CIh@[\\c@Ha@ZKb@Rn@v@Nr@MRVt@pClAbGnApGdAtGSvGK~DEVUDi@@gJcJUX_@Ca@`AeAbDa@|BJzA`@lAd@ZvGkAnFxNpJbW`EnKz@~@bNbF`^`MlHrBl@@RENMLW?SESqIyJ_JiJ";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "29") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").show();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();

                var map = new L.Map("kor8");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "~bti@gb~`T\\_ATK`@EPDvBv@~DhBHVm@~BaAhBwDkAs@JYXeCvGyC~H{A~D}@bEq@dEaA~DmAjGkBzFmFpNEpAYl@eArB{@`Cw@bCaFtN}F`O]hBSrBDJZVLRDZCd@IZy@`CKv@BjBfArJ`AnJn@fFZ~A~B|J^nBdAxETv@XnBxAxIj@tC~BvNNZPDNHJLFNBZGXh@VvGrBbC|@hBZfCV`H^nA`@fAn@x@p@jAvAfAdAjCjBbBr@NBhFDbAF~AZbABrE_@bCBvBLTDJFPVHvAH\\LZ~@hAFDNDb@BN?x@W|@_@x@a@fAuAJUH]NyAZo@VM\\BlCZh@?VAlBk@^S\\Wl@o@^qBLMNIL?f@NNJ`@p@r@dBXTd@RdDx@nA`@^PlHtIx@z@z@b@t@HfAFrBe@jBs@zDaCnC}@rB[LAEnFHfACLHf@n@|AdA`B|B`D|ElAjExAx@TzCv@`Cj@nC`@lALZA^Qj@]^e@z@uAh@}@p@u@l@Sn@AVB~@^lExBvJpF`An@f@`@JNBLD\\Eb@Sv@Gd@ATFVLJ^Tn@ThA\\xAZd@FlAH~GFvA{DRe@Xg@TSx@e@NGd@GbABXD\\HZNl@j@TNRHZBxBJ\\FtAf@RTFNHrAFVTd@VVrALTFp@b@hCbAZRl@h@XP^H~Ed@n@Nl@Th@VpAv@rB`A`BfArAjAdChBDLFpBHhAj@`A\\^bBrArBjAn@r@JPZz@lA|DR~ADv@Jv@\\`BP\\r@p@PTNd@b@nBV`@RNfA\\|@TzA[fAK~@FRDj@TXFVBjGFv@Id@Sp@s@RIPAX@NFRPx@jA`@Td@N`B\\z@LdA?^FPNRV`@ZvAP^Hr@?`BQ~@FlATb@L`A^TDV?d@E\\Ir@IRA~ANj@CZEVGl@a@v@q@j@[dAe@|A{Ap@w@`Aa@`@Id@?rBLf@?vBW`Gr@bD|@Ro@v@NpBPYzAtExCtGdAbAT~Ch@|B\\vAXz@FfCg@`@Qj@{ANGxJFnCLnFDbBDf@Cf@G`@KhBw@bBiALE`@ElAEbGGzFQbAI`BSjBa@n@ClA@pCU\\Az@CfDa@nIm@~KgAdEm@tAOhEYp@Gf@KvCiArA[b@ApCDJj@N\\TPZLx@Hd@@~AVxCfC|AdBt@`Bv@nCFtBAhARpBB|@Iz@UvACf@GhD@fCFnATnCHf@J^dAnB^`At@`CBPI~@BLPb@FZA`@QbACt@@PRz@LxANXTDL?pASfCC`BQJ@\\PfAn@l@h@FHFRJ^DXTdCX~Bb@vAb@dANVHHp@^hA`Az@ZZP\\d@Ph@@XAJIViFtCwA~@}ElCUTOVSd@Cb@Bb@LPJHLDH?fAa@h@Kd@Ah@Df@Lb@TPXp@z@fAx@FFHXARILON_@RaCRWFQF[XOXKd@HnCJhAlAfFHvAj@tAFZ?VIp@INMH{@Rg@XURY\\g@|@a@bAo@pAiA`BmDpGcAzBOv@MbAGPKL}@n@e@h@SZOb@?Nr@dD?\\CJMR{@l@IJGX@b@Fn@DVHRZn@rB`CLTLb@l@pCpCfKvA~BPj@D\\?Lq@~HMZIHkAb@cAb@e@ZON}AlBsA|B{@x@]n@iAjEA\\NpBXnCG\\GLa@d@k@f@u@z@]h@m@~Aw@lBkBvB_ApAyA`Cm@r@_B`ByCdCg@\\}Az@i@^[Zm@t@IPy@bChDn@p@Pn@Zh@d@RRlB~Af@b@@Dn@@t@H";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "30") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").show();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();

                var map = new L.Map("kor88");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "pmgj@yqg`TiBYCGuCcCSSi@e@o@[q@QiDo@d@kAZaAr@gA|@u@t@[rA_AxBcBzC_Dv@iA|@yAvAmBp@q@f@{@^{@v@oB`@q@h@m@|@y@\\g@DW?UWaCMkB?a@F[Z_AVoAXy@d@m@p@o@hAoBhAwAr@u@pAq@jA[POHUFm@l@}GEm@Ma@{AaCOo@Sm@ScAiA_Ey@wDISKWi@q@iAoAm@oAGYGo@Ac@FYV[l@]R]BQy@sD@[`@s@d@k@hAy@FSLaANy@Zs@rAiCvAgCt@wA~@qAfAgCj@kAh@i@p@a@\\M\\ELIHODy@Ce@o@{A?W@]oAeGSgCIgBZo@XWj@QfBMXE`@QPOFO@UQ]m@e@e@c@w@eAc@Ug@Mi@Ee@@i@JgA`@I?MEKIMQCc@Bc@Re@NWTU~EmCtA_A|BsA`B{@PODWEo@Yg@o@e@w@[mA_Aq@a@Ya@[q@k@kBIe@MmAWqCEYY}@m@i@gBaAUAwAPqB@i@D}@NM?UEOYMyAS{@AQ?[T}A?c@EYSk@DoAw@iC_@_AeAqBK_@Ig@KaAK{AEaACaFDmALaAN_AH{@C}@U_CB{@EcBE_@s@aCs@_B{BcC}BkBwAUm@Cy@I[MUQO]Ki@sCEi@DkATwClAw@JqBJ{CVq@L_Fl@J^QFPGK_@gKbAoIl@gD`@yADqCTuB?_@D}@V_AN{@J_AF{FPcGFmADa@DYLm@b@YNOLiBv@s@P}@DcBEoFEoCMwADqCIsAAkADk@zAa@Pk@J{AZ{@Gg@O}HkAOEgCi@iC_@sAYgAu@oD{ByF}ASC_@KcBUQ?_CYoBZ{CSe@?a@H{@Z{@|@Qj@gAn@eAd@k@Zc@`@aAp@WF[Dk@B_BOS@s@H]He@DW?UEa@M_@Qc@MyAYs@Ce@Bc@Hi@Da@AsAU[?SMYUY_@g@MeA?{@Mo@MwA_@a@Uo@_A[]YIg@?OJ[^a@X_@Nq@FsB?wCGq@K_A[_AGgAJ{AZWEg@IeAc@SOW]m@iCmAwAOY]eBKw@Ew@S{AYeAKUcAaDWa@c@c@{@c@A@@AsD}BQUa@gAGkAIyBiAi@gAw@yAuAqA}@{BkAqAw@}Am@a@EaAEa@G{B[g@Mw@_@w@e@w@_@wBoAa@Ga@Cc@IYa@Sa@KoBGQQUi@UuAa@oBGw@Qk@k@e@Y_B[o@@q@XkAx@cAhC{@bCaHIsBQ_Ba@aCw@]WIWBe@ZsABe@I_@S[kA{@wDuBQOaAi@cAg@QZq@Ww@Ov@Np@VP[wCcB{@a@gC_A{@As@Tg@l@oB`D[`@k@Zw@PkAIoCa@sCq@iD{@eFeB}EmAi@k@yCwEo@}ASq@AkBBgEyBTmAVsAn@iDvBkBr@sBd@_AE}@Is@[aAeAmHuI_@QoAa@eDy@i@SW[q@_Bm@}@a@Qg@DMR_@fBq@t@aA^s@^q@ZaA@mC[]CWL[n@OxAUr@oAzAyB`Ao@Ps@COEGESUIPHQk@s@[eAEkACEYYUEwBMcCCsE^cACcDc@iFEe@Go@_@]OiA{@eAm@cAaAkA}AaCaBoAa@aH_@gCWiB[cC}@mCy@GNFOiCy@i@WKPOJQFS@SCSKMOISAU@ODOHKTOUoAiBwLkDsR}AkIkCeL]kBk@eEkBeQ_@wDGoBUgBCiA@_ADe@\\q@BM\\aCPu@@SAQkA_BgB}BsBaDs@mBeBeFa@{Cw@oH_@uF?cBBgATwBHk@ZeADu@i@cGe@mCUwDYaB@a@DMTWf@ZtHzGvCdDlEvE`CbCpA`BlCzCr@h@b@Lb@A`@C^J\\@j@WpHgTdAsDp@kExB}Jt@wCt@sBrAoDd@kAfD}Ih@kAGeAqAg@S}@x@eC";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "31") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").show();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").hide();

                var map = new L.Map("korf1a");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "~rui@uio`TbC}AoB{FkLfETd@PRZRjAj@^`@vAdCzA`BTZx@|@|@jAlAlB^z@fBfF^vAV~AJlANx@Lb@NPb@^nB~@t@b@zCxBr@`@lBl@|@\\vAp@fC|At@TjBNhAFARsD[_@Ia@Qm@a@sBiAeDmA_A[gAu@[[[WmAw@w@a@gBy@[S]a@Sc@WwAmDIKrBq@fGO|@c@|B[`EQpEe@lE]lAWhAEAD@S|AGvCBRqB@eABCBCrISfEUbCCd@If@WfAoBxEcAZiBb@MHU`@ENMbESfAa@rB_@~@a@v@KL_@\\AFCFhLxDRZBAC@vCjEfClDh@~@z@nBRXTPpCrA|DnD\\VlAr@LPP^Lf@DHZJ~CTpFv@|A\\|AR";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "32") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").show();
                $("#korf1b").hide();
                $("#korf1bb").hide();

                var map = new L.Map("korf1aa");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "tuvi@mui`T|@DlHb@}@~C_A|EwAtIEz@]jCyAlFy@rDk@hDiAlJGhBs@jHIVG^ItBYhCW`By@hE}@|CeB`ESb@uApBIXQfCMbA@r@N`Dr@hK?hB~BPl@J^NxF`Cx@`@`Al@n@Vn@PXLb@ZjAp@`@X`A\\zBnAh@b@hA~Aj@p@^XTFtBCxBMjC@XAp@@dCTjB\\RArAe@`AUlC}@~AS`CKdBBf@Hd@DRC~@Or@O\\Et@?tAFLBrAd@jANrHXvAAh@BlBXn@Xt@N|E^|BJr@GRGjHyCNOPaD@cBDi@Fe@Tw@BGHC`@?jK\\p@CdDuBVIjBYhFa@b@IXIt@YdAs@ZM^EpAGj@GbEcAnNcAp@If@C^?VBTHdAx@VJhA^t@PhH`A|AZ^Lv@Ll@F|@?ZD|Ad@JaAJaBRiAZqATqAJkFLsCXuBLs@Lg@n@cB`@}@h@{Ax@mC\\uAz@eFL]jBmDj@mA\\m@TUdAy@zCwBlCqBNSpBmEnByCtA{Bz@mAn@{@`@WzAo@Ia@dAOD`@j@GRGLQPm@t@sBHEFAlBJ\\AtCk@z@YpAi@GSFRTK~BiAtBkAlBcANKJYQeI@m@g@SYQi@e@c@q@aA{Ge@qBw@{A[QOOw@eAoCwCk@g@g@]YMa@MaBGg@Bm@H{AxAo@b@m@P]Fe@Bm@Ae@Mk@UuFaGoH_JwFgHqFiGc@q@[u@C}@?q@Hk@J_@~AaELc@C[EOOWiAm@eBq@_Bk@wKkEsGcCqKwC_IqAUBa@P[FS?_@IWUKWSOYMUGeNaBsBS_C]{RoAkASsAa@mE{AuMsFgAYyAi@uB}Aq@a@gAe@qCk@aAGuEEoF@eDLw@LH`BFbC?nBExBOnBYnBc@tBEtESbAuA|E[dA_CjD}@~AwAdEkA|Eu@`E_@nAa@f@_A|@_@d@q@fA}@dBy@lAgAp@i@LgAf@qAxAoAnAUd@_BlCy@hBUtAKhASnASj@{@|@u@RmAr@g@lA]rAmHc@cAEwASqDa@mDi@oC_@[KEIMg@Q_@MQmAs@]W}DoDqCsAUQSY{@oBi@_AgCmDkDgFiLyDG@IEAEBKJAHF^]JM`@w@^_A`@sBRgALcEDOTa@LIhBc@bA[lAuC`@cAVgAHg@Be@TcCRgEbA?DUFaGXABaAC?rAACSFwCR}AViA\\mAd@mEPqEZaEb@}BN}@p@gGMCE\\D]LBJsBlDHUsBk@wBi@gB[F]@e@wBh@EOg@Uc@gBkCmA}A_CqCcBoCOOy@]o@c@g@m@Q[yAaEUy@o@oAFKp@jAxAfE~@rBPRZRjAj@^`@fAnBnBuAn@c@";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "33") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").show();
                $("#korf1bb").hide();

                var map = new L.Map("korf1b");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "~rui@uio`TbC}AoB{F}LnEKQyAaEUy@o@oAl@aBlBkGp@sANc@`@oBfAaEjAyDdBgFzAeFt@}CtBoHLW^YpAo@^KVOtAwBl@m@nAkBFq@CU@sAEu@_@aAQ]SeA@q@WgCQg@KGy@EgAN{@^QLW@a@E}DqAsAi@b@qAt@}AYIgE}@{Bo@eBm@q@[c@_@k@}@oAmAiAEiAPuE^wBTcBZsA^_Bl@_Dt@gATe@FsCTs@eIOuDg@aHCaAOsAE_AI]UqCkBgLy@yHw@mGiAaJ{BmPi@aD_@qBSKMOISAU@ODOHKTOUoAiBwL{AyIMFGWFVLG_B{IoAoGkCkLm@kD}AeNgAqKGcBUsBCiA@_ADe@MSMKKAwBL}L^uMf@oTvAmBHwLx@_MfAgDTmFNs@DmIP{BH";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
            } else if (type === "34") {
                $("#default").hide();
                $("#map").hide();
                $("#maps").hide();
                $("#mapss").hide();
                $("#kor2").hide();
                $("#kor22").hide();
                $("#kor3a").hide();
                $("#kor3aa").hide();
                $("#kor3b").hide();
                $("#kor4").hide();
                $("#kor44").hide();
                $("#korf2a").hide();
                $("#korf2aa").hide();
                $("#korf2b").hide();
                $("#korf2bb").hide();
                $("#kor5").hide();
                $("#kor55").hide();
                $("#korf4b").hide();
                $("#korf4bb").hide();
                $("#korf4a").hide();
                $("#korf4aa").hide();
                $("#korf3").hide();
                $("#korf33").hide();
                $("#kor6").hide();
                $("#kor66").hide();
                $("#korlm").hide();
                $("#korlmm").hide();
                $("#kor7").hide();
                $("#kor77").hide();
                $("#kor8").hide();
                $("#kor88").hide();
                $("#korf1a").hide();
                $("#korf1aa").hide();
                $("#korf1b").hide();
                $("#korf1bb").show();

                var map = new L.Map("korf1bb");
                L.tileLayer(
                    "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}",
                    {
                        maxZoom: 20,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }
                ).addTo(map);
                var encoded =
                    "|yni@ojy`T{CJRbDB@CA\\tGs@Ds@uL?GBCn@EFIf[_AlQwAtWgBtN{@l^qA\\EVOf@mD?SAQWe@E[BKHMLGPET@LNDR?LCPQhAOr@QfBHNLHVHRC^SNCnMg@pDIpEQhRk@~CAjDBL@HDNNRHj@F~FAXDNHZd@JXBVAj@KvA]fCq@tD]f@a@l@sBlCkCfEiDtGSZcAxBsGtMy@nB[vAIl@IrEGpESjJEh@a@jCoAbDKPlIJxRAl@IhCm@h@Wh@_@lBeCfBgC`BqBzEgGNIdB_BbAc@f@IjBSrAC^D|Ab@n@TvA|@FCL@FD@HCHKFMfIStAkBhJ}BdMkB`IU`BOvEcCCsE^KnBQH_At@mDvBaNdG}Ad@[Fg@DoE`@sARsBNsGDgBDgBN|@pHn@rDx@tFZtCz@~KZlFL~@FtA`@tEx@InBU~D{@dBk@bCo@pBYfIaA`A@n@Tp@b@\\h@j@|@b@^p@ZdBl@zBn@fEjAJBTCHFCNMHKZWl@_@|@BLLHj@R|DpAb@JTGPMz@_@fAOx@DJFPf@VfCFp@@h@FZP\\^`ADt@ArABTGp@oAjBe@z@}A|Bq@RwAb@_@XMVuBnHu@|C{AdFeBfFkAxDgA`Ea@nBOb@q@rAmBjGYh@OVBRp@jAxAfE^x@jLiE|BpGgC|A";

                var polyline = L.Polyline.fromEncoded(encoded, {
                    color: "#AF2330",
                    stroke: true,
                    opacity: 1,
                    weight: 8,
                }).addTo(map);

                map.fitBounds(polyline.getBounds());
			} else if (type === '') {

				$('#default').hide();
				$('#map').show();
				$('#maps').hide();
				$('#mapss').hide();
				$('#kor2').hide();
				$('#kor22').hide();
				$('#kor3a').hide();
				$('#kor3aa').hide();
				$('#kor3b').hide();
				$('#kor4').hide();
				$('#kor44').hide();
				$('#korf2a').hide();
				$('#korf2aa').hide();
				$('#korf2b').hide();
				$('#korf2bb').hide();
				$('#kor5').hide();
				$('#kor55').hide();
				$('#korf4b').hide();
				$('#korf4bb').hide();
				$('#korf4a').hide();
				$('#korf4aa').hide();
				$('#korf3').hide();
				$('#korf33').hide();
				$('#kor6').hide();
				$('#kor66').hide();
				$('#korlm').hide();
				$('#korlmm').hide();
				$('#kor7').hide();
				$('#kor77').hide();
				$('#kor8').hide();
				$('#kor88').hide();
				$('#korf1a').hide();
				$('#korf1aa').hide();
				$('#korf1b').hide();
				$('#korf1bb').hide();
				var map = L.map('map').setView([-6.996667, 110.416664], 13);
	var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 20,
		zoomControl: true,
		attribution: '&copy; Trans Semarang | <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);
	map.fitBounds(polyline.getBounds());
}
			})
		});
	</script>

 
    <script>
        var mapmobile = L.map("mapmobile", {zoomControl:false}).fitWorld();
        L.control.zoom({position:'bottomright'}).addTo(mapmobile);
        var tiles = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
            maxZoom: 19,
            attribution:'&copy; Trans Semarang',
            zoomControl: false,
            enableHighAccuracy: true,
            subdomains:['mt0','mt1','mt2','mt3']
        }).addTo(mapmobile);

        var greenIcon = L.icon({
            iconUrl: 'assets/img/Home/Route/Departure.png',
            iconSize:     [42, 60], // size of the icon
            iconAnchor:   [21, 53], // point of the icon which will correspond to marker's location
            popupAnchor:  [0, -50] // point from which the popup should open relative to the iconAnchor
        });

        // function getloc() {
        //     var marker;
        //     map.on('locationfound', function(ev){
        //         if (!marker) {
        //             marker = L.marker(ev.latlng);
        //         } else {
        //             marker.setLatLng(ev.latlng);
        //         }
        //     });
        // }
        function onLocationFound(e) {
            var radius = Math.round(e.accuracy / 2);
            // console.log(e.accuracy);
            var locationMarker = L.marker(e.latlng, {icon: greenIcon}).addTo(mapmobile)
                .bindPopup(`Anda berada ${radius} meter dari titik ini`)
                .openPopup();
            var locationCircle = L.circle(e.latlng, radius).addTo(mapmobile);
        }
        function onLocationError(e) {
            alert(e.message);
        }
        mapmobile.on("locationfound", onLocationFound);
        mapmobile.on("locationerror", onLocationError);
        mapmobile.locate({ setView: true, maxZoom: 16 });
    </script>
    <script>
        if (screen.width >= 1024) {
            $('#mapsmobile').hide().css('visibility', 'hidden');
            $('#inforute').hide().css('visibility', 'hidden');
            $('#infoop').hide().css('visibility', 'hidden');
            $('#mapsandrute').show().css('visibility', 'visible');
        } else {
            $('#mapsmobile').show().css('visibility', 'visible');
            $('#inforute').show().css('visibility', 'visible');
            $('#infoop').show().css('visibility', 'visible');
            $('#mapsandrute').hide().css('visibility', 'hidden');
        }
    </script>
    <script>
        var rute = document.getElementById("rute");
        var ruteList = rute.getElementsByTagName("li");
        function btnrute() {
            for (var i = ruteList.length - 1; i >= 0; i--) {
                rute.appendChild(ruteList[i]);
            };
        };
    </script>
</body>

</html>
