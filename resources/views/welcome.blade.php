<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <title>Trans Semarang | Home</title>
    {{-- <base href="https://transsemarang.semarangkota.go.id/v2/"> --}}
    <base href="http://127.0.0.1:8000/">

    <meta name="twitter:description" content="Twitter Resmi BLU UPTD Trans Semarang  Jl. Tambak Aji Raya No. 5 Kode Pos 50185  CS : 1-5000-94  IG: transsemarang  FB: TRANS Semarang">
    <meta property="og:image" content="{{asset('assets/img/Trans_Semarang_icon.svg')}}">
    <meta property="og:type" content="website">
    <meta name="description" content="Trans Semarang adalah sistem transportasi angkutan massal berbasis jalan di Jawa Tengah yang beroperasi di Kota dan Kabupaten Semarang. Layanan ini dioperasikan guna mengurai kemacetan di Kota Semarang serta untuk mengakomodasi para pelaju menuju pusat kota dan destinasi wisata yang ada di Kota Semarang.">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:image" content="{{asset('assets/img/tsmgLogo32px-01.png')}}">
    <meta name="twitter:title" content="Trans Semarang | @transsemarang">
    <meta name="google-signin-client_id"content="662068769407-1qc1taetjo897853c5lkl755p2c5csvi.apps.googleusercontent.com">

    <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="{{asset('assets/img/tsmgLogo-01-01%20(180x180).png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/tsmgLogo-01-01%20(16x16).png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/img/tsmgLogo32px-01.png')}}">
    <link rel="icon" type="image/png" sizes="180x180" href="{{asset('assets/img/tsmgLogo-01-01%20(180x180).png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/img/tsmgLogo-01-01%20(192x192).png')}}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://kit.fontawesome.com/1e94ef36ed.js" type="text/javascript" crossorigin="anonymous"></script>
    {{-- <script src="assets/bootstrap/js/live.js" type="text/javascript"></script> --}}
    <script src="{{asset('js/polyline.js')}}" type="text/javascript" ></script>

    {{-- <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Plus+Jakarta+Sans:200,300,400,500,600,700,800'>
    <link rel="stylesheet" href="{{asset('assets/css/Footer-Multi-Column-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Hero-Clean-Reverse-images.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/logo-slider.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.38/dist/sweetalert2.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css"integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/slick/slick-theme.css')}}"/>
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
    <nav id="mainNav" class="navbar navbar-expand-lg shadow fixed-top bg-darkngi sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="{{url('/')}}">
                <span class="d-flex justify-content-center align-items-center me-2">
                    <img class="border rounded" src="{{asset('assets/img/tsmgLogo32px-01.png')}}" width="36" height="36">
                </span>
                <img src="{{asset('assets/img/textLogo.png')}}" width="198.87" height="44">
            </a>
            <button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler text-white bg-primary navbar-toggler-right text-uppercase rounded">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarResponsive" class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto rounded">
                    <li class="nav-item mx-3 mx-lg-1 rounded">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="http://karir.transsemarang.semarangkota.go.id" target="_blank">CAREER</a>
                    </li>
                    <li class="nav-item mx-3 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="https://ppid.semarangkota.go.id/kb/jalur-rute-brt-trans-semarang-dan-feeder-di-kota-semarang" target="_blank">BUS & RUTE</a>
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
            <div class="slickbg" style="background: url('{{asset('assets/img/Hero.png')}}') top center / 100% auto no-repeat;">
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
                            target="_blank"
                            style="background: url('{{asset('assets/img/Google_Play.png')}}') center / 100% no-repeat;"></a>
                        <a class="btnapple btn" role="button"
                            href="https://apps.apple.com/id/app/trans-semarang/id1460565652"
                            target="_blank"
                            style="background: url('{{asset('assets/img/App_Store.png')}}') center / 100% no-repeat;"></a>
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
                            <img src="public/{{ $RNart->gambar }}" class="gallery-image" alt="{{ $RNart->gambar }}" />
                            <div class="gallery-item-info">
                                <a class="gallery-item-type" href="/detailarticle/{{$RNart->title}}">
                                    <p class="fw-semibold text-white">{{ $RNart->title }}</p>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- End News --}}

{{-- Start Maps & Route --}}
    <div class="mapsandrute" id="mapsandrute" name="mapsandrute">
        <div class="headinfomaps">
            <div class="infowrap">
                <div class="infotext">
                    <div class="headinfo">
                        <p class="headinfo1">TS.MAPS</p>
                        <p class="headinfo2">Route & Corridor Info</p>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit orci condimentum natoque elit amet mauris augue sed nunc. Consequat tincidunt risus nulla viverra. Massa sollicitudin dui adipiscing massa. </p>
                </div>
            </div>
        </div>
        <div class="headmaps">
            <div class="mapswrap">
                <div class="maps">
                    <div class="actionmaps">
                        <div class="headeraction">
                            <p class="ha1">Select your preference of</p>
                            <p class="ha2">Route Corridor Info</p>
                        </div>
                        <div class="btn-group" onclick="toggleItems()">
                            <button class="btn btn-tsm btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false" style="height: 100%">Pilih Koridor BRT</button>
                            <ul class="dropdown-menu dropdown-menu-lg-end"  style="width: 100%">
                                {{-- @foreach($result as $datas)
                                <li><a class="dropdown-item {{$datas['kor']}} hidden">Koridor {{$datas['kor']}} {{$datas['origin']}} - {{$datas['toward']}}</a></li>
                                @endforeach --}}
                            </ul>
                        </div>
                    </div>
                    <div class="leaflet">
                        <div style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;gap: 4px;width: 400px;height: 100%;left: 0px;background: #F9FAFB;border-bottom-left-radius: 20px;"></div>
                        <div class="container bg-dark" id="map"></div>
                    </div>
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
                    <li class="list-group-item"><b>Mangkang</b></li>
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
        <div class="cardwrap">
            <div class="row cardhead">
                <div class="col-1 cardheadh1">
                    <p class="cardheadh1-title">TS.PAYMENT</p>
                    <p class="cardheadh1-text">Make Payments Easier</p>
                </div>
                <div class="col text-justify cardheadh1-ket">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pretium vulputate id ultricies diam pulvinar vitae sit proin. Quam morbi turpis dolor in.</div>
            </div>
            <div class="swiper">
                <div class="swiper-wrapper">
                    @foreach ($Cpayment as $dataCard)
                    <div class="swiper-slide">
                        <a class="swiperlink" href="#">
                            <div class="news_img" >
                                <img src="data_card/{{$dataCard->image}}" alt="{{$dataCard->name}}"/>
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
                {{-- <div class="swiper-scrollbar"></div> --}}
            </div>
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
                        <div class="lgnfirstwrap1">
                            <div class="lgnfirsth1">
                                <p class="lgnfirsth1text">Layanan Aduan</p>
                            </div>
                            <div class="mb-3 lgnfirstwrap2">
                                <img class="lgnfirstwrap2img" src="assets/img/IlustrationCS.png"/>
                                <div class="lgnfirsth1text2">
                                    <p>Anda harus masuk dengan Google untuk melanjutkan</p>
                                </div>
                                <div class="mb-3 GPlusSignIn">
                                    <a href="/auth/google" class="btn GPlusSignIn" role="button" type="button">
                                        <img src="https://cdn.cdnlogo.com/logos/g/35/google-icon.svg" style="width: 32px;height: 32px;">
                                        <span id="name" >Lanjutkan dengan Google</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 lgnfirsth2text">
                            <p class="lgnfirsth2text2">Setelah Anda mengajukan keluhan, kami akan mengirimkan informasi penanganan ke email yang Anda gunakan untuk login.</p>
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
            </div>
        </div>
    </div>
    </div>
{{-- End Report Tracking  --}}

{{-- Start Related Link  --}}
    <div class="relatedlink">
        <div class="relatedwrap">
            <div class="h-100 relatedlinkwrap">
                <div class="row align-items-center h-100">
                    <div class="container rounded">
                        <div class="slider slider-wrap">
                            <div class="logos">
                                <img class="fab fa-4x" src="{{asset('assets/img/LAPOR-02.png')}}">
                                <img class="fab fa-4x" src="{{asset('assets/img/PEMKOT-03.png')}}">
                                <img class="fab fa-4x" src="{{asset('assets/img/DISHUB-01.png')}}">
                                <img class="fab fa-4x" src="{{asset('assets/img/wndrl-07.png')}}">
                                <img class="fab fa-4x" src="{{asset('assets/img/ATCS-04.png')}}">
                            </div>
                            <div class="logos">
                                <img class="fab fa-4x" src="{{asset('assets/img/prwst-05.png')}}">
                                <img class="fab fa-4x" src="{{asset('assets/img/RESTABES-06.png')}}">
                                <img class="fab fa-4x" src="{{asset('assets/img/JATENG-08.png')}}">
                                <img class="fab fa-4x" src="{{asset('assets/img/wndrl-07.png')}}">
                                <img class="fab fa-4x" src="{{asset('assets/img/ATCS-04.png')}}">
                            </div>
                            <div class="logos">
                                <img class="fab fa-4x" src="{{asset('assets/img/prwst-05.png')}}">
                                <img class="fab fa-4x" src="{{asset('assets/img/RESTABES-06.png')}}">
                                <img class="fab fa-4x" src="{{asset('assets/img/JATENG-08.png')}}">
                                <img class="fab fa-4x" src="{{asset('assets/img/wndrl-07.png')}}">
                                <img class="fab fa-4x" src="{{asset('assets/img/ATCS-04.png')}}">
                            </div>
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
            <div class="d-flex pt-3 btmlogo">
                <div class="btmwrap justify-content-between align-items-center">
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
            </div>
        </footer>
    </div>
{{-- End Footer --}}

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.38/dist/sweetalert2.all.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
    <script type="text/javascript" src="assets/slick/slick.min.js"></script>
    <script src="{{asset('js/Polyline.encoded.js')}}"></script>
<!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/63688c02b0d6371309cda477/1gh865r2q';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
<!--End of Tawk.to Script-->
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
                spaceBetween: 380,
                centeredSlides: false
                },
                2559: {
                slidesPerView: 4,
                spaceBetween: 380,
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
    var result = {!! json_encode($result) !!};;
    console.log(result);

    let map = L.map('map', {zoomControl:false}).setView([-6.997226, 110.393395], 12);
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

</script>

    {{-- <script>
$.ajax({
    type:"GET",
    url:"https://gps.brtnusantara.com/dev/trans_semarang/api_v1/getAllRoutes",
    data: {},
    success:function(result){
        console.log(result);
    }
})

      	var map = new L.Map('map').setView([-6.996667, 110.416664], 13);
		var tiles = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
            maxZoom: 19,
            zoomControl: true,
            subdomains:['mt0','mt1','mt2','mt3'],
            attribution: '&copy; Trans Semarang | <a href="https://www.google.com/intl/id/permissions/geoguidelines/">Google Maps</a>'
            }).addTo(map);

				var coridorIcon = L.icon({
					iconUrl: 'assets/icon/busstop.png',
					// shadowUrl: 'leaf-shadow.png',

					iconSize:     [40, 45], // size of the icon
					shadowSize:   [50, 64], // size of the shadow
					iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
					shadowAnchor: [4, 62],  // the same for the shadow
					popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
				});


				L.marker([-7.012321, 110.418670,12], {icon: coridorIcon}).addTo(map);
				L.marker([-6.991553, 110.353506,12], {icon: coridorIcon}).addTo(map);

		map.fitBounds(polyline.getBounds());
    </script> --}}
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
    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register("/sw.js").then(function (reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);
            });
        }
    </script>
</body>

</html>
