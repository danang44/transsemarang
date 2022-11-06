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
                    <a class="titlenews" href="/detailarticle/{{$PNart->id}}">
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
                            @foreach($result as $datas)
                            <li><a class="dropdown-item {{$datas['kor']}} hidden">Koridor {{$datas['kor']}} {{$datas['origin']}} - {{$datas['toward']}}</a></li>

                          @endforeach
                        </ul>
                    </div>
                </div>
                <div title="leaflet" style="display: flex;flex-direction: row;justify-content: space-between;align-items: center;width: 100%;height: 600px;background: #98A2B3;border-bottom-left-radius: 20px;border-bottom-right-radius: 20px">
                    <div style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;gap: 4px;width: 400px;height: 100%;left: 0px;background: #F9FAFB;border-bottom-left-radius: 20px;">

                    </div>
                    <div class="container bg-dark" id="map" style="width: 800px; height: 100%;right: 0%;border-bottom-right-radius: 20px;"></div>
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
                        <p class="texthalte">Halte Koridor {{$datas['kor']}}</p>
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
    <script>
      	var map = new L.Map('map').setView([-6.996667, 110.416664], 13);
		var tiles = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
            maxZoom: 19,
            zoomControl: true,
            subdomains:['mt0','mt1','mt2','mt3'],
            attribution: '&copy; Trans Semarang | <a href="https://www.google.com/intl/id/permissions/geoguidelines/">Google Maps</a>'
            }).addTo(map);

        // map.setView(new L.LatLng([[110.49299,-7.017340000000001],[110.49314000000001,-7.016870000000001],[110.49376000000001,-7.01705],[110.49421000000001,-7.0171600000000005],[110.49425000000001,-7.01731],[110.49437,-7.017440000000001],[110.49449000000001,-7.017480000000001],[110.49435000000001,-7.017790000000001],[110.49382000000001,-7.0194600000000005],[110.49152000000001,-7.018700000000001],[110.48960000000001,-7.018050000000001],[110.48880000000001,-7.017760000000001],[110.48757,-7.0172300000000005],[110.48666000000001,-7.01679],[110.48538,-7.0162],[110.48478000000001,-7.015960000000001],[110.48162,-7.014570000000001],[110.47991,-7.01386],[110.47687,-7.012530000000001],[110.47459,-7.011570000000001],[110.47432,-7.011470000000001],[110.47389000000001,-7.011360000000001],[110.47291000000001,-7.011150000000001],[110.47172,-7.010800000000001],[110.47109,-7.01064],[110.46986000000001,-7.01029],[110.46748000000001,-7.00961],[110.45975000000001,-7.007370000000001],[110.45771,-7.006780000000001],[110.45722,-7.006670000000001],[110.45493,-7.006010000000001],[110.45444,-7.005820000000001],[110.45369000000001,-7.005520000000001],[110.45349,-7.005420000000001],[110.45309,-7.005190000000001],[110.45186000000001,-7.0043500000000005],[110.4492,-7.00267],[110.44873000000001,-7.00234],[110.44816000000002,-7.00199],[110.44634,-7.00081],[110.44525000000002,-7.000140000000001],[110.44473,-6.999840000000001],[110.44404000000002,-6.9994700000000005],[110.44352,-6.999230000000001],[110.43839000000001,-6.99697],[110.43783,-6.99671],[110.43762000000001,-6.996580000000001],[110.43388,-6.995030000000001],[110.43294,-6.994610000000001],[110.43251000000001,-6.9944500000000005],[110.43195000000001,-6.99429],[110.43108000000001,-6.9941],[110.42951000000001,-6.99335],[110.42947000000001,-6.993340000000001],[110.42873000000002,-6.993],[110.42834,-6.99279],[110.42667000000002,-6.99197],[110.42466,-6.99101],[110.42366000000001,-6.99056],[110.42313000000001,-6.99152],[110.42301,-6.99157],[110.42280000000001,-6.991560000000001],[110.42189,-6.9911],[110.42184,-6.99101],[110.42185,-6.99091],[110.42226000000001,-6.989990000000001],[110.42261,-6.98927],[110.42272000000001,-6.9891700000000005],[110.42281000000001,-6.989140000000001],[110.42293000000001,-6.98913],[110.42388000000001,-6.989590000000001],[110.42394000000002,-6.989700000000001],[110.42397000000001,-6.989870000000001],[110.42394000000002,-6.989960000000001],[110.42366000000001,-6.99056],[110.42313000000001,-6.99152],[110.42301,-6.99157],[110.42280000000001,-6.991560000000001],[110.42189,-6.9911],[110.42184,-6.99101],[110.42185,-6.99091],[110.42222000000001,-6.989980000000001],[110.42211,-6.9897800000000005],[110.42181000000001,-6.989610000000001],[110.42125000000001,-6.98934],[110.42000000000002,-6.9887500000000005],[110.41919000000001,-6.988360000000001],[110.41825000000001,-6.987940000000001],[110.41776000000002,-6.9877400000000005],[110.41729000000001,-6.987590000000001],[110.41655000000002,-6.987380000000001],[110.41570000000002,-6.987100000000001],[110.41510000000001,-6.9869200000000005],[110.41448000000001,-6.986750000000001],[110.41298,-6.98617],[110.41255000000001,-6.9859800000000005],[110.41214000000001,-6.9858],[110.41167000000002,-6.985550000000001],[110.41124,-6.98538],[110.41039,-6.984960000000001],[110.41008000000001,-6.984850000000001],[110.40977000000001,-6.984800000000001],[110.40943000000001,-6.984660000000001],[110.40901000000001,-6.984400000000001],[110.40897000000001,-6.98406],[110.40907000000001,-6.983820000000001],[110.40924000000001,-6.98362],[110.40945,-6.98345],[110.40964000000001,-6.98301],[110.4107,-6.98054],[110.41158000000001,-6.97862],[110.41206000000001,-6.978490000000001],[110.41264000000001,-6.97841],[110.41422000000001,-6.9781200000000005],[110.41549,-6.977930000000001],[110.41567,-6.97796],[110.41571,-6.9781],[110.41531,-6.9786],[110.41333,-6.98059],[110.41235,-6.98148],[110.41031000000001,-6.983390000000001],[110.41002,-6.98369],[110.41005000000001,-6.983960000000001],[110.41002,-6.984170000000001],[110.40990000000001,-6.98453],[110.40973000000001,-6.9846200000000005],[110.40952000000001,-6.984630000000001],[110.40912000000002,-6.98451],[110.40875000000001,-6.984260000000001],[110.40617,-6.98305],[110.40407,-6.982100000000001],[110.40261000000001,-6.9813600000000005],[110.40202000000001,-6.9811700000000005],[110.40139,-6.98104],[110.40109000000001,-6.98127],[110.40091000000001,-6.9813600000000005],[110.40073000000001,-6.98134],[110.40015000000001,-6.98104],[110.39962000000001,-6.980860000000001],[110.39921000000001,-6.980900000000001],[110.39786000000001,-6.981160000000001],[110.39567000000001,-6.981560000000001],[110.39433000000001,-6.98181],[110.39305,-6.98223],[110.39081000000002,-6.98296],[110.3888,-6.9835],[110.38411,-6.984660000000001],[110.38123,-6.98528],[110.38072000000001,-6.9854400000000005],[110.3802,-6.985530000000001],[110.37752,-6.986090000000001],[110.37473000000001,-6.98664],[110.37383000000001,-6.98688],[110.3726,-6.987170000000001],[110.37185000000001,-6.987310000000001],[110.36977,-6.987610000000001],[110.36858000000001,-6.98775],[110.36826,-6.98782],[110.36783000000001,-6.98786],[110.36676000000001,-6.98803],[110.36643000000001,-6.98803],[110.36544,-6.98786],[110.36481,-6.9876700000000005],[110.36352000000001,-6.9872000000000005],[110.36269000000001,-6.98697],[110.36211000000002,-6.986870000000001],[110.36028,-6.986700000000001],[110.35851000000001,-6.986350000000001],[110.35815000000001,-6.986250000000001],[110.35794000000001,-6.986160000000001],[110.35772000000001,-6.98601],[110.3576,-6.98587],[110.35745000000001,-6.98566],[110.35701,-6.984890000000001],[110.35682000000001,-6.984680000000001],[110.35635,-6.9842900000000006],[110.35617,-6.984170000000001],[110.35551000000001,-6.983820000000001],[110.35527,-6.9836800000000006],[110.35476000000001,-6.98345],[110.35387000000001,-6.9831],[110.35222,-6.982570000000001],[110.35179000000001,-6.98251],[110.35178,-6.982590000000001],[110.35179000000001,-6.98251],[110.35133,-6.98247],[110.35098,-6.98251],[110.35074000000002,-6.982570000000001],[110.35051000000001,-6.982690000000001],[110.35029000000002,-6.982880000000001],[110.35002000000001,-6.983230000000001],[110.3495,-6.984030000000001],[110.34936,-6.984310000000001],[110.34903000000001,-6.984730000000001],[110.34887,-6.984890000000001],[110.34864,-6.985040000000001],[110.34796000000001,-6.98542],[110.34738000000002,-6.985600000000001],[110.34693000000001,-6.985690000000001],[110.34668,-6.985720000000001],[110.34284000000001,-6.9861],[110.34262000000001,-6.986110000000001],[110.34215,-6.986070000000001],[110.34187000000001,-6.98601],[110.34110000000001,-6.985780000000001],[110.33951,-6.98526],[110.33862,-6.98495],[110.33815000000001,-6.98472],[110.33798000000002,-6.9846200000000005],[110.33751000000001,-6.98427],[110.33716000000001,-6.98392],[110.33634,-6.982990000000001],[110.33563000000001,-6.9821800000000005],[110.33395000000002,-6.98012],[110.33351,-6.979640000000001],[110.33272000000001,-6.978750000000001],[110.3319,-6.97801],[110.33114,-6.97726],[110.33097000000001,-6.97705],[110.33047,-6.97665],[110.33010000000002,-6.976470000000001],[110.32847000000001,-6.976210000000001],[110.32784000000001,-6.97616],[110.32626,-6.976070000000001],[110.32475000000001,-6.97604],[110.32367,-6.976090000000001],[110.32261000000001,-6.97604],[110.32044,-6.975770000000001],[110.31907000000001,-6.97562],[110.31786000000001,-6.975460000000001],[110.31672,-6.97515],[110.31601,-6.974920000000001],[110.31521000000001,-6.974550000000001],[110.31494,-6.974410000000001],[110.31463000000001,-6.97416],[110.31437000000001,-6.973890000000001],[110.31400000000001,-6.973370000000001],[110.31363,-6.972970000000001],[110.31335000000001,-6.97278],[110.31311000000001,-6.97266],[110.31268000000001,-6.972510000000001],[110.31239000000001,-6.97247],[110.31216,-6.97247],[110.31146000000001,-6.97254],[110.31059,-6.972600000000001],[110.30866,-6.97268],[110.30761000000001,-6.972810000000001],[110.3071,-6.972840000000001],[110.30523000000001,-6.973050000000001],[110.30380000000001,-6.973230000000001],[110.30245000000001,-6.973440000000001],[110.30181,-6.973560000000001],[110.30099000000001,-6.97365],[110.29967,-6.97369],[110.29874000000001,-6.97362],[110.29793000000001,-6.9735000000000005],[110.29718000000001,-6.973300000000001],[110.296,-6.97292],[110.29427000000001,-6.97231],[110.29383000000001,-6.972130000000001],[110.29307000000001,-6.971750000000001],[110.29248000000001,-6.971400000000001],[110.29049,-6.970180000000001],[110.28959,-6.969690000000001],[110.28744,-6.968850000000001],[110.28695,-6.968710000000001],[110.28696000000001,-6.9686200000000005],[110.28763000000001,-6.968730000000001],[110.28822000000001,-6.968850000000001],[110.28823000000001,-6.968780000000001],[110.28845000000001,-6.9688300000000005],[110.28864000000002,-6.9689000000000005],[110.28998000000001,-6.969710000000001],[110.29004,-6.969620000000001],[110.29009,-6.9695800000000006],[110.29012000000002,-6.969570000000001],[110.29023000000001,-6.96963]]), 8);

		// var encoded = 'pdpi@gcd`TKbA~@f@TEFHPJz@kBPQPEPYdBiDxCyFvAgDp@qBrB}IfAqEn@sDT{BNwDIuGOmDUwBOsAWkDe@aHiAuRIiCIuFGuBW_G@yBZ_BZu@`@o@pAmA`BkAn@g@l@q@|@aBv@eC`AmDj@uDPqBXsENkEt@gJFgADiEG{JRuJN}ETaDT{BNu@d@cAl@y@fFsF^]t@u@dAoAnDcDrG}EbH{FhEiDbAy@jAoAtAwB\\aA|ByIdBoIJiA@{@AeAqA}Wc@kCOk@Qe@}@iB]g@i@i@oI}Ei@e@[a@O_@Mi@Iu@CoAVaCr@uDb@oBjA_EhAeDxAaDZi@|@gAt@o@bAi@dBy@XSXURYXo@TiAXqBNqBDu@TuCFaCLmCXiDPmAhCuKNu@b@gD@m@AWq@mHOuDg@aHCaAOsAE_AI]UqCkBgLy@yHw@mGiAaJ{BmPi@aD_@qBSKMOISAU@ODOHKTOUoAiBwL{AyIMFGWFVLG_B{IoAoGkCkLm@kDeC_U_@wDGcBUsBCiA@_ADe@Xo@H[f@mD?SAQWe@E[@[^Ub@?n@ApAoDtDqKtDqKt@_CmAuCoKwD}QkGo@aI]kCo@iHCe@VO\\FpCzBpXzYjBxB`AVl@Cf@@j@Ch@Q~H}T~EkVx@aDpEmLRo@??xCeIBYCSqAe@SUEQAWzA}DTK`@EPDn@TVHVBNWNa@`@_A~@aCbCcG`@kAnEyKfAuCDAtCyHd@mD^oB^uArA{DtHkVLm@X_A`FyNp@wBfEiM~@aCdAgCtDcHnFuJlA_C|GwLpG{Kf@cAnAsDn@cCtCwOrBuK|Gy]p@{CtDcSfAoFvCyPlAyHT}@`Ka[~EoOrD{KhC}HbCaHpAcDzAeFv@uClBgI\\uAj@qC|AwGWIqE_A_@lAy@xCKHMBMC';
		// var encoded = "jqyi@etkaT}A]b@{BTyA\\GXWFW|@ZlIhBwCjMaC~Jy@~CiBtFwAtDuB~Fo@vBuGvRmCtIiG~Q_EfMSt@UtAi@bEeAlF_@|BeAtFgCzM_Mho@uBvKU`BcChMe@`B{@tCSf@m@nAgDtFoIrOaA|AeApBkFjJeCxE{@fBiAhCo@fBcM`_@s@nBYh@uHjVsAzD_@tA_@nBe@lDuCxHAFcArCi@lAcDlI_EpKyAfE~DhBHVAh@{AtDQHSAwDqAoCeASUEQAWzA}DTK`@EPDvBv@~DhBHVAh@{AtDQHSAyDiAg@Ta@z@u@nBuBxFmA`DsAzDg@`B]|Ai@rCw@hDc@vBa@zBsBjHe@tAc@pAq@|Aa@tAsAhDU|@I|@[bAs@rAcAFo@Sg@a@a@i@wAe@mNsE_KoDY_BOsBy@{He@}FDc@ZGbBnAlKjKpDbE|JvKz@x@t@Eh@DfAVP`@@h@WnAq@hAqFbO}DbLsCbHe@tBY|Bl@z@Pb@Cb@{@rBc@hBFpAr@lGnAtLp@jGrA~FpC~LjBpKfFh\\zB~P^dBPfBnBvOlBlPn@rDx@tFZtCz@~KZlFL~@FtA`@tE?`Aa@dEe@|B}A`Gm@dDSrBa@lJeA`JSfAQh@]j@[Vi@\\yCvAi@d@mA|AWb@eAbC[n@m@dBeApDiBhIKtAN@OAGzAFdAJn@Vl@d@j@dAt@~CfBv@ZrA`A^^\\l@jAfCb@rBPxADp@jA~V@j@G|AKv@m@xCgB|H}@pDm@|AS`@eA|AeAdAyDbDaDlC{KnI_BvAqD|CsCbDuCvCi@`@oAbBc@hAs@dII|BQzHElHHvEIrEu@pL]pG_@pF}@bFm@lCiA~C[t@q@|@u@r@gBhAoAhAe@v@Wn@]tAGx@?l@LjCJlDN`KXpEDdBh@tJb@|Gh@lGV~BPbDFfGMxDW`Dg@tCkAjFyBxIc@vAkAvCeAtBsFlKaBrDgDlL[`BQATeCVuBMAHk@Le@`DkGQKGIAEJU";
		// var encoded = 'jqyi@etkaT}A]b@{BTyA\GXWFW|@ZlIhBwCjMaC~Jy@~CiBtFwAtDuB~Fo@vBuGvRmCtIiG~Q_EfMSt@UtAi@bEeAlF_@|BeAtFgCzM_Mho@uBvKU`BcChMe@`B{@tCSf@m@nAgDtFoIrOaA|AeApBkFjJeCxE{@fBiAhCo@fBcM`_@s@nBYh@uHjVsAzD_@tA_@nBe@lDuCxHAFcArCi@lAcDlI_EpKyAfE~DhBHVAh@{AtDQHSAwDqAoCeASUEQAWzA}DTK`@EPDvBv@~DhBHVAh@{AtDQHSAyDiAg@Ta@z@u@nBuBxFmA`DsAzDg@`B]|Ai@rCw@hDc@vBa@zBsBjHe@tAc@pAq@|Aa@tAsAhDU|@I|@[bAs@rAcAFo@Sg@a@a@i@wAe@mNsE_KoDY_BOsBy@{He@}FDc@ZGbBnAlKjKpDbE|JvKz@x@t@Eh@DfAVP`@@h@WnAq@hAqFbO}DbLsCbHe@tBY|Bl@z@Pb@Cb@{@rBc@hBFpAr@lGnAtLp@jGrA~FpC~LjBpKfFh\zB~P^dBPfBnBvOlBlPn@rDx@tFZtCz@~KZlFL~@FtA`@tE?`Aa@dEe@|B}A`Gm@dDSrBa@lJeA`JSfAQh@]j@[Vi@\yCvAi@d@mA|AWb@eAbC[n@m@dBeApDiBhIKtAN@OAGzAFdAJn@Vl@d@j@dAt@~CfBv@ZrA`A^^\l@jAfCb@rBPxADp@jA~V@j@G|AKv@m@xCgB|H}@pDm@|AS`@eA|AeAdAyDbDaDlC{KnI_BvAqD|CsCbDuCvCi@`@oAbBc@hAs@dII|BQzHElHHvEIrEu@pL]pG_@pF}@bFm@lCiA~C[t@q@|@u@r@gBhAoAhAe@v@Wn@]tAGx@?l@LjCJlDN`KXpEDdBh@tJb@|Gh@lGV~BPbDFfGMxDW`Dg@tCkAjFyBxIc@vAkAvCeAtBsFlKaBrDgDlL[`BQATeCVuBMAHk@Le@`]DkGQKGIAEJU';
        // var encoded = "jqyi@etkaT}A]b@{BTyA//\\GXWFW|@ZlIhBwCjMaC~Jy@~CiBtFwAtDuB~Fo@vBuGvRmCtIiG~Q_EfMSt@UtAi@bEeAlF_@|BeAtFgCzM_Mho@uBvKU`BcChMe@`B{@tCSf@m@nAgDtFoIrOaA|AeApBkFjJeCxE{@fBiAhCo@fBcM`_@s@nBYh@uHjVsAzD_@tA_@nBe@lDuCxHAFcArCi@lAcDlI_EpKyAfE~DhBHVAh@{AtDQHSAwDqAoCeASUEQAWzA}DTK`@EPDvBv@~DhBHVAh@{AtDQHSAyDiAg@Ta@z@u@nBuBxFmA`DsAzDg@`B]|Ai@rCw@hDc@vBa@zBsBjHe@tAc@pAq@|Aa@tAsAhDU|@I|@[bAs@rAcAFo@Sg@a@a@i@wAe@mNsE_KoDY_BOsBy@{He@}FDc@ZGbBnAlKjKpDbE|JvKz@x@t@Eh@DfAVP`@@h@WnAq@hAqFbO}DbLsCbHe@tBY|Bl@z@Pb@Cb@{@rBc@hBFpAr@lGnAtLp@jGrA~FpC~LjBpKfFh//\\zB~P^dBPfBnBvOlBlPn@rDx@tFZtCz@~KZlFL~@FtA`@tE?`Aa@dEe@|B}A`Gm@dDSrBa@lJeA`JSfAQh@]j@[Vi@//\\yCvAi@d@mA|AWb@eAbC[n@m@dBeApDiBhIKtAN@OAGzAFdAJn@Vl@d@j@dAt@~CfBv@ZrA`A^^//\\l@jAfCb@rBPxADp@jA~V@j@G|AKv@m@xCgB|H}@pDm@|AS`@eA|AeAdAyDbDaDlC{KnI_BvAqD|CsCbDuCvCi@`@oAbBc@hAs@dII|BQzHElHHvEIrEu@pL]pG_@pF}@bFm@lCiA~C[t@q@|@u@r@gBhAoAhAe@v@Wn@]tAGx@?l@LjCJlDN`KXpEDdBh@tJb@|Gh@lGV~BPbDFfGMxDW`Dg@tCkAjFyBxIc@vAkAvCeAtBsFlKaBrDgDlL[`BQATeCVuBMAHk@Le@`DkGQKGIAEJU";


		var polyline = L.Polyline.fromEncoded(encoded, {
            color: '#b71c1c',
            weight: 8
        }).addTo(map);

		map.fitBounds(polyline.getBounds());
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
