<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <title>Trans Semarang | Home</title>
    <base href="https://transsemarang.semarangkota.go.id/v2/">
    {{-- <base href="http://127.0.0.1:8000/"> --}}

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
    .bg-darkngi {

        height: 220px;
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
<!-- Page content-->
    <div class="card imgwrap">
        <img class="imgart" src="{{ $article->gambar }}"/>
    </div>
    <div class="container" style="display: flex;flex-direction: column;justify-content: flex-start;align-items: center;padding: 80px 120px;width: 1440px;height: 1716px;">
        <div style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;gap: 40px;width: 1200px;height: 228px;padding-top: 80px">
            <span style="width: 1200px;height: 120px;font-family: 'Plus Jakarta Sans';font-style: normal;font-weight: 600;font-size: 48px;line-height: 60px;color: #1D2939;">
                <p>{{$article->title}}</p>
            </span>
            <div
                style="display: flex;flex-direction: row;justify-content: space-between;align-items: center;padding: 0px;gap: 40px;width: 1200px;height: 68px;">
                <span
                    style="width: 356px;height: 64px;font-family: 'Plus Jakarta Sans';font-style: normal;font-weight: 400;font-size: 24px;line-height: 32px;color: #98A2B3;">
                    <p><?php $phpdate = strtotime( $article->date );
                        $mysqldate = date( 'l, d F Y', $phpdate );
                        echo $mysqldate;
                    ?></p>
                    <p><span id="time"></span> minute read</p>
                </span>
                <span style="display: flex;flex-direction: row;align-items: flex-start;padding: 0px;gap: 20px;width: 250px;height: 68px;">
                    <ul class="list-inline mb-0" style="display:flex;justify-content: space-evenly">
                        <li class="list-inline-item">
                            <div id="fb-root"></div>
                            <script>
                                (function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return;
                                    js = d.createElement(s);
                                    js.id = id;
                                    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));
                            </script>

                            <a onclick="fbttn.onclick()" target="_blank" style="color: #F9FAFB; cursor: pointer;">
                                <div class="fb-share-button" id="fbsb" data-href="https://transsemarang.semarangkota.go.id/" data-layout="button_count" hidden></div>
                                <script>
                                    var fbttn = document.getElementById("fbsb");
                                    fbttn.style.cursor = "pointer";
                                    fbttn.onclick = function() {
                                        window.open("https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(location.href) + "&t=" +
                                            encodeURIComponent(document.title), '',
                                            'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
                                        return false;
                                    };
                                </script>
                                <img src="assets/img/facebook.svg" alt="facebook.svg">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="twitter-share-button"
                            href="https://twitter.com/intent/tweet?text={{ $article->title }}&url=https://transsemarang.semarangkota.go.id/portal/page/berita/{{ $article->art_seo }}"
                            data-size="large" target="_blank" style="color: #F9FAFB">
                                <img src="assets/img/twitter.svg" alt="twitter.svg">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/transsemarang" target="_blank"
                                style="color: #F9FAFB">
                                <img src="assets/img/whatsapp.svg" alt="whatsapp.svg">
                            </a>
                        </li>
                    </ul>
                </span>
            </div>
        </div>
    </div>
    <article>
        <p><?=$article->content?></p>
    </article>
<!-- End Page content-->


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
    <script>
        function readingTime() {
            const text = document.getElementById("article").innerText;
            const wpm = 225;
            const words = text.trim().split(/\s+/).length;
            const time = Math.ceil(words / wpm);
            document.getElementById("time").innerText = time;
        }
        readingTime();
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
    {{-- <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register("/sw.js").then(function (reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);
            });
        }
    </script> --}}
</body>
</html>
