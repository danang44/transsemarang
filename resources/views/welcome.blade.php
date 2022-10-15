@include('sweetalert::alert')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANS SEMARANG</title>
    <meta name="twitter:description" content="Twitter Resmi BLU UPTD Trans Semarang  Jl. Tambak Aji Raya No. 5 Kode Pos 50185  CS : 1-5000-94  IG: transsemarang  FB: TRANS Semarang">
    <meta property="og:image" content="assets/img/Trans_Semarang_icon.svg">
    <meta property="og:type" content="website">
    <meta name="description" content="Trans Semarang adalah sistem transportasi angkutan massal berbasis jalan di Jawa Tengah yang beroperasi di Kota dan Kabupaten Semarang. Layanan ini dioperasikan guna mengurai kemacetan di Kota Semarang serta untuk mengakomodasi para pelaju menuju pusat kota dan destinasi wisata yang ada di Kota Semarang.">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:image" content="assets/img/tsmgLogo32px-01.png">
    <meta name="twitter:title" content="Trans Semarang | @transsemarang">
    <meta name="google-signin-client_id" content="662068769407-v9ceg1qfrabh68j4nmd5svf5q6203hpd.apps.googleusercontent.com">
    <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="assets/img/tsmgLogo-01-01%20(180x180).png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/tsmgLogo-01-01%20(16x16).png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/tsmgLogo32px-01.png">
    <link rel="icon" type="image/png" sizes="180x180" href="assets/img/tsmgLogo-01-01%20(180x180).png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/tsmgLogo-01-01%20(192x192).png">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100i,300,300i,400,700,900&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Plus+Jakarta+Sans:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&amp;display=swap">
    <link rel="stylesheet" href="assets/css/Footer-Multi-Column-icons.css">
    <link rel="stylesheet" href="assets/css/Hero-Clean-Reverse-images.css">
    <link rel="stylesheet" href="assets/css/logo-slider.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.38/dist/sweetalert2.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
    <script src="https://apis.google.com/js/api:client.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="72">
    <header>
        <nav id="mainNav" class="navbar navbar-light navbar-expand-lg shadow fixed-top"
            style="background: linear-gradient(#1D2939, #1D2939),#1D2939;padding-top: 28px;padding-bottom: 28px; padding-right: 136px;padding-left: 136px; height: 100px;">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="#home">
                    <span
                        class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon">
                        <img class="border rounded" src="assets/img/tsmgLogo32px-01.png" width="36" height="36">
                    </span>
                    <img src="assets/img/textLogo.png" width="198.87" height="44">
                </a>
                <button data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                    class="navbar-toggler text-white bg-primary navbar-toggler-right text-uppercase rounded">
                    <span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span>
                </button>
                <div id="navbarResponsive" class="collapse navbar-collapse" id="navcol-2">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#karir" target="_parent">CAREER</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#busRute" target="_blank">BUS & RUTE</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#hotlineCenter" onclick="sweet();">HOTLINE CENTER</a>
                        </li>
                    </ul>
                    <script>
                        function sweet() {
                            Swal.fire({
                                title: 'Contact',
                                html: 'CS : 1-5000-94 | Whatsapp/SMS : ,'+'<a href="https://wa.me/+628112884447" target="_blank">0811-2884-447</a> ',
                                imageUrl: 'assets/img/tsmgLogo32px-01.png',
                                imageWidth: 100,
                                imageHeight: 100,
                                imageAlt: 'Custom image',
                            })
                        }
                    </script>
                </div>
            </div>
        </nav>
    </header>
    {{-- Section 1 - Slider --}}
    <section
        style="background: url('assets/img/Hero.png') center / cover no-repeat;position: relative;height:800px;padding-top: 120px;margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center"
                    style="color: #ffffff">
                    <div style="max-width: 600px;">
                        <p>
                            <span
                                style="font-size: 24px;font-family: 'Plus Jakarta Sans';font-weight:lighter;">NGINOVASI
                                X Trans Semarang</span>
                        </p>
                        <p>
                            <span style="font-size:45px;font-family: 'Plus Jakarta Sans';">Download
                                aplikasi<br><strong>Trans Semarang</strong>, dapatkan<br>info lokasi bus terkini<br>
                                serta lainnya.</span>
                        </p>
                        <p class="my-1" style="font-size: 24px; font-weight:300; padding-bottom: 80px">
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. At senectus ut tortor auctor
                                bibendum volutpat ante volutpat. Molestie id purus adipiscing.</span>
                        </p>
                        <a class="btn me-2" role="button"
                            href="https://play.google.com/store/apps/details?id=ngi.brtsemarang.apppublic"
                            target="_blank"
                            style="background: url('assets/img/Google_Play.png')  center / cover repeat;width: 162px;height: 48px;"></a>
                        <a class="btn" role="button"
                            href="https://apps.apple.com/id/app/trans-semarang/id1460565652" target="_blank"
                            style="background: url('assets/img/App_Store.png')  center / cover repeat;width: 162px;height: 48px;"></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-xl-5 m-xl-5"><img class="img-fluid fit-cover" style="min-height: 300px;"></div>
                </div>
            </div>
        </div>
    </section>
    {{-- Section 2 - News --}}
    <section
        style="display: flex;flex-direction: row;align-items: center;padding-top: 80px; padding-bottom: 80px;padding-left: 120px;padding-right: 120px;align-content: center;justify-content: center;">
        <div class="row row-cols-1"
            style="display: flex;flex-direction: row;align-items: flex-start;width: 1200px;height: 832px;">
            <div class="col-md-4 themed-grid-col" style="width: 412px">
                <div class="pb-3">
                    <p class=""
                        style="color: var(--bs-brand);font-family: 'Plus Jakarta Sans';font-style: normal;font-weight: 700;font-size: 32px;line-height: 40px;">
                        <strong>Popular</strong>
                        <span style="font-weight: lighter; color: black;"> News</span>
                    </p>
                </div>
                <div class="row row-cols-1">
                    <div class="col-md-9 text-left text-md-start">
                        <p style="font-weight: 600;font-size: 24px;line-height: 32px;"><strong>Kolaborasi Musisi
                                Semarang dan BRT Trans Semarang Lahirkan Kompilasi Ambyaran Semarang</strong></p>
                        <p class="text-justify text-black-50"
                            style="display: -webkit-box;
                        max-width: 412px;
                        height: 112px;
                        -webkit-line-clamp: 4;
                        -webkit-box-orient: vertical;
                        overflow: hidden;
                        text-overflow: ellipsis;
                        line-height: 28px; font-weight: 400;font-size: 20px;margin-bottom: 0px">
                            Semarang, Trans Semarang menambah waktu operasional dengan Rute Terminal Mangkang - Simpang
                            Lima mulai Hari Jumat 18
                            Maret 2022. Layanan malam ini akan beroperasional pada pukul 18.00 - 23.00 WIB.</p>
                        <p class="text-justify text-black-50" style="font-weight: 400;font-size: 16px;">September
                            23th, 2022</p>
                    </div>
                </div>
                <div class="row row-cols-1">
                    <div class="col-md-9 text-left text-md-start">
                        <p style="font-weight: 600;font-size: 24px;line-height: 32px;"><strong>Trans Semarang Kembali
                                Operasikan Feeder 1 Ngaliyan-Mijen-Madukoro</strong></p>
                        <p class="text-justify text-black-50"
                            style="display: -webkit-box;
                        max-width: 412px;
                        height: 112px;
                        -webkit-line-clamp: 4;
                        -webkit-box-orient: vertical;
                        overflow: hidden;
                        text-overflow: ellipsis;
                        line-height: 28px; font-weight: 400;font-size: 20px;margin-bottom: 0px">
                            Semarang, Trans Semarang
                            menambah waktu operasional dengan Rute Terminal Mangkang – Simpang Lima mulai Hari Jumat 18
                            Maret 2022. Layanan malam ini akan beroperasional pada pukul 18.00 – 23.00 WIB.</p>
                        <p class="text-justify text-black-50" style="font-weight: 400;font-size: 16px;">September
                            23th, 2022</p>
                    </div>
                </div>
                <div class="row row-cols-1">
                    <div class="col-md-9 text-left text-md-start">
                        <p style="font-weight: 600;font-size: 24px;line-height: 32px;"><strong>Trans Semarang Menambah
                                Waktu Layanan Operasional</strong></p>
                        <p class="text-justify text-black-50"
                            style="display: -webkit-box;
                        max-width: 412px;
                        height: 112px;
                        -webkit-line-clamp: 4;
                        -webkit-box-orient: vertical;
                        overflow: hidden;
                        text-overflow: ellipsis;
                        line-height: 28px; font-weight: 400;font-size: 20px;margin-bottom: 0px">
                            Semarang, Trans Semarang
                            menambah waktu operasional dengan Rute Terminal Mangkang – Simpang Lima mulai Hari Jumat 18
                            Maret 2022. Layanan malam ini akan beroperasional pada pukul 18.00 – 23.00 WIB.</p>
                        <p class="text-justify text-black-50" style="font-weight: 400;font-size: 16px;">September
                            23th, 2022</p>
                    </div>
                </div>
            </div>
            <div class="themed-grid-col"
                style="display: flex;flex-direction: column;align-items: flex-start;width: 748px;height: 828px;padding-left: 40px">
                <div class="pb-3">
                    <p class="w-lg-50 fw-semibold "
                        style="color: var(--bs-brand);width: 748px;height: 40px;font-family: 'Plus Jakarta Sans';font-style: normal;font-weight: 700;font-size: 32px;line-height: 40px;">
                        <strong>Recent</strong>
                        <span style="font-weight: lighter; color: black;"> News</span>
                    </p>
                </div>
                <div class="row row-cols-6">
                    <div class="col border rounded border-1"
                        style="background: linear-gradient(to bottom, rgba(255,255,255,0), rgba(0,0,0,1)),url('assets/img/berita1.jpeg')center / cover no-repeat;width: 248px; height: 248px;align-items: flex-end;display: flex">
                        <div class="card">
                            <div class="card-body">
                                <span class="fw-semibold text-white"
                                    style="font-family: 'Plus Jakarta Sans';font-style: normal;font-size: 16px;line-height: 24px;">Kolaborasi
                                    Musisi Semarang dan BRT Trans Semarang Lahirkan</span>
                            </div>
                        </div>
                    </div>
                    <div class="col border rounded border-1"
                        style="background: linear-gradient(to bottom, rgba(255,255,255,0), rgba(0,0,0,1)),url('assets/img/berita2.jpeg')center / cover no-repeat;width: 248px; height: 248px;align-items: flex-end;display: flex">
                        <div class="card">
                            <div class="card-body">
                                <span class="fw-semibold text-white"
                                    style="font-family: 'Plus Jakarta Sans';font-style: normal;font-size: 16px;line-height: 24px;">Trans
                                    Semarang Kembali Operasikan Feeder 1 Ngaliyan-Mijen-Madukoro</span>
                            </div>
                        </div>
                    </div>
                    <div class="col border rounded border-1"
                        style="background: linear-gradient(to bottom, rgba(255,255,255,0), rgba(0,0,0,1)),url('assets/img/berita3.jpeg')center / cover no-repeat;width: 248px; height: 248px;align-items: flex-end;display: flex">
                        <div class="card">
                            <div class="card-body">
                                <span class="fw-semibold text-white"
                                    style="font-family: 'Plus Jakarta Sans';font-style: normal;font-size: 16px;line-height: 1.5rem;">Trans
                                    Semarang Menambah Waktu Layanan Operasional</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-6">
                    <div class="col border rounded border-1" style="width: 248px; height: auto">
                        <div class="card">
                            <img src="assets/img/Card.png" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col border rounded border-1" style="width: 248px; height: 248px">
                        <div class="card">
                            <img src="assets/img/Card.png" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col border rounded border-1" style="width: 248px; height: 248px">
                        <div class="card">
                            <img src="assets/img/Card.png" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
                <div class="row row-cols-6">
                    <div class="col border rounded border-1" style="width: 248px; height: auto">
                        <div class="card">
                            <img src="assets/img/Card.png" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col border rounded border-1" style="width: 248px; height: 248px">
                        <div class="card">
                            <img src="assets/img/Card.png" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col border rounded border-1" style="width: 248px; height: 248px">
                        <div class="card">
                            <img src="assets/img/Card.png" class="card-img-top" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Section 3 - Maps & Route --}}
    <section>
        <div class="">
            <div class="container">
                <div class="text-white bg-brand border rounded border-0 p-4 p-md-5">
                    <p class="mb-0">TS Maps</p>
                    <h2 class="fw-bold text-white mb-3">Route & Corridor Info</h2>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Sit orci condimentum natoque elit amet mauris augue sed nunc.
                        Consequat tincidunt risus nulla viverra.
                        Massa sollicitudin dui adipiscing massa. </p>
                    <div class="my-3">
                        {{-- <a class="btn btn-primary btn-lg me-2" role="button" href="#">Button</a>
                        <a class="btn btn-light btn-lg" role="button" href="#">Button</a> --}}
                    </div>
                </div>
            </div>
            <div class="container bg-dark border rounded border-0 p-4 p-md-5" id="map"
                style="width: auto; height: 600px;"></div>
            <script>
                var map = L.map('map').setView([-6.996667, 110.416664], 13);
                var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 20,
                    zoomControl: true,
                    attribution: '&copy; Trans Semarang | <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'

                }).addTo(map);
            </script>
        </div>
    </section>
    {{-- Section Payment --}}
    <section>
        <div class="container py-4 py-xl-5">
            <div class="row mb-5">
                <div class="col-md-3 col-xl-6 text-left mx-auto">
                    <p class="w-lg-50 fw-semibold " style="color: var(--bs-brand)">TS.PAYMENT</p>
                    <h1 class="fw-bolder" style="color: #1D2939">Bayar Pakai Kartu</h1>
                </div>
                <div class="col-md-3 col-xl-6 text-left mx-auto align-self-center">
                    <p class="w-lg-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Pretium vulputate id ultricies diam pulvinar vitae sit proin. Quam morbi turpis dolor in.</p>
                </div>
            </div>
            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                <div class="col">
                    <div class="card">
                        <div class="card-body p-4">
                            <div
                                class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center d-inline-block mb-3 bs-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    fill="currentColor" viewBox="0 0 16 16" class="bi bi-bell">
                                    <path
                                        d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z">
                                    </path>
                                </svg>
                            </div>
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis.
                                Bibendum vulputate cras aenean.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body p-4">
                            <div
                                class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center d-inline-block mb-3 bs-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    fill="currentColor" viewBox="0 0 16 16" class="bi bi-bezier">
                                    <path fill-rule="evenodd"
                                        d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5v-1zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z">
                                    </path>
                                    <path
                                        d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z">
                                    </path>
                                </svg>
                            </div>
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis.
                                Bibendum vulputate cras aenean.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body p-4">
                            <div
                                class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center d-inline-block mb-3 bs-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    fill="currentColor" viewBox="0 0 16 16" class="bi bi-flag">
                                    <path
                                        d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001M14 1.221c-.22.078-.48.167-.766.255-.81.252-1.872.523-2.734.523-.886 0-1.592-.286-2.203-.534l-.008-.003C7.662 1.21 7.139 1 6.5 1c-.669 0-1.606.229-2.415.478A21.294 21.294 0 0 0 3 1.845v6.433c.22-.078.48-.167.766-.255C4.576 7.77 5.638 7.5 6.5 7.5c.847 0 1.548.28 2.158.525l.028.01C9.32 8.29 9.86 8.5 10.5 8.5c.668 0 1.606-.229 2.415-.478A21.317 21.317 0 0 0 14 7.655V1.222z">
                                    </path>
                                </svg>
                            </div>
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis.
                                Bibendum vulputate cras aenean.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Section User Report --}}
    <section>
        <section class="position-relative py-4 py-xl-5">
            <div class="container position-relative">
                <div class="row mb-5">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <h2>Contact us</h2>
                        <p class="w-lg-50">Curae hendrerit donec commodo hendrerit egestas tempus, turpis
                            facilisis
                            nostra nunc. Vestibulum dui eget ultrices.</p>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="d-flex flex-column justify-content-center align-items-start h-100">
                            <div class="d-flex align-items-center p-3">
                                <div
                                    class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        fill="currentColor" viewBox="0 0 16 16" class="bi bi-telephone">
                                        <path
                                            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="px-2">
                                    <h6 class="mb-0">Phone</h6>
                                    <p class="mb-0">+123456789</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center p-3">
                                <div
                                    class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        fill="currentColor" viewBox="0 0 16 16" class="bi bi-envelope">
                                        <path fill-rule="evenodd"
                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="px-2">
                                    <h6 class="mb-0">Email</h6>
                                    <p class="mb-0">info@example.com</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center p-3">
                                <div
                                    class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        fill="currentColor" viewBox="0 0 16 16" class="bi bi-pin">
                                        <path
                                            d="M4.146.146A.5.5 0 0 1 4.5 0h7a.5.5 0 0 1 .5.5c0 .68-.342 1.174-.646 1.479-.126.125-.25.224-.354.298v4.431l.078.048c.203.127.476.314.751.555C12.36 7.775 13 8.527 13 9.5a.5.5 0 0 1-.5.5h-4v4.5c0 .276-.224 1.5-.5 1.5s-.5-1.224-.5-1.5V10h-4a.5.5 0 0 1-.5-.5c0-.973.64-1.725 1.17-2.189A5.921 5.921 0 0 1 5 6.708V2.277a2.77 2.77 0 0 1-.354-.298C4.342 1.674 4 1.179 4 .5a.5.5 0 0 1 .146-.354zm1.58 1.408-.002-.001.002.001zm-.002-.001.002.001A.5.5 0 0 1 6 2v5a.5.5 0 0 1-.276.447h-.002l-.012.007-.054.03a4.922 4.922 0 0 0-.827.58c-.318.278-.585.596-.725.936h7.792c-.14-.34-.407-.658-.725-.936a4.915 4.915 0 0 0-.881-.61l-.012-.006h-.002A.5.5 0 0 1 10 7V2a.5.5 0 0 1 .295-.458 1.775 1.775 0 0 0 .351-.271c.08-.08.155-.17.214-.271H5.14c.06.1.133.191.214.271a1.78 1.78 0 0 0 .37.282z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="px-2">
                                    <h6 class="mb-0">Location</h6>
                                    <p class="mb-0">12 Example Street</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5 col-xl-4">
                        <div>
                            <form class="p-3 p-xl-4" method="post">
                                <div class="mb-3"><input class="form-control" type="text" id="name-1"
                                        name="name" placeholder="Name"></div>
                                <div class="mb-3"><input class="form-control" type="email" id="email-1"
                                        name="email" placeholder="Email"></div>
                                <div class="mb-3">
                                    <textarea class="form-control" id="message-1" name="message" rows="6" placeholder="Message"></textarea>
                                </div>
                                <div><button class="btn btn-primary d-block w-100" type="submit">Send
                                    </button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section>
        <div class="col" style="display: flex;flex-direction: row;justify-content: center;align-items: center;padding: 80px 120px;gap: 120px;width: 1440px;height: 316px;">
            <div class="row" style="display: flex;flex-direction: row;align-items: center;padding: 40px 80px;width: 1200px;height: 156px;background: #1D2939;border-radius: 8px;">
                <div class="col" style="display: flex;justify-content: center;align-items: flex-start;flex-direction: column;align-content: flex-start;">
                    <span style="font-weight: 300;font-size: 24px;line-height: 32px;color: #ffffff">Have you ever reported a complaint?</span>
                    <span style="font-weight: 600;font-size: 32px;line-height: 40px;color: #ffffff">Track your complaint report</span>
                </div>
                <script>
                    var googleUser = {};
                    var startApp = function() {
                      gapi.load('auth2', function(){
                        // Retrieve the singleton for the GoogleAuth library and set up the client.
                        auth2 = gapi.auth2.init({
                          client_id: '662068769407-v9ceg1qfrabh68j4nmd5svf5q6203hpd.apps.googleusercontent.com',
                          cookiepolicy: 'single_host_origin',
                          // Request scopes in addition to 'profile' and 'email'
                          //scope: 'additional_scope'
                        });
                        attachSignin(document.getElementById('customBtn'));
                      });
                    };

                    function attachSignin(element) {
                      console.log(element.id);
                      auth2.attachClickHandler(element, {},
                          function(googleUser) {
                            document.getElementById('name').innerText = "Signed in: " +
                                googleUser.getBasicProfile().getName();
                          }, function(error) {
                            alert(JSON.stringify(error, undefined, 2));
                          });
                    }
                    </script>
                <div id="gSignInWrapper" style="display: flex;flex-direction: row;align-items: center;width: 413px;height: 72px;">
                    <button id="customBtn" role="button" class="customGPlusSignIn" type="button" style="display: flex;flex-direction: column;padding: 20px 32px;gap: 20px;width: 413px;height: 72px;background: #FFFFFF;box-shadow: 0px 4px 12px rgba(29, 41, 57, 0.08);backdrop-filter: blur(10px);border-radius: 8px;flex-wrap: wrap;">
                        <img src="https://cdn.cdnlogo.com/logos/g/35/google-icon.svg" style="width: 32px;height: 32px;">
                        <span id="name" style="font-weight: 600;font-size: 24px;line-height: 32px;color: #1D2939;">Lanjutkan dengan Google</span>
                    </button>
                    <script>startApp();</script>
                </div>
            </div>
        </div>
    </section>
    {{-- Section Related Link --}}
    <section
        style="background-color: #F9FAFB;display: flex;flex-direction: row;justify-content: center;align-items: center;padding: 10px 80px;gap: 80px;width: 1440px;height: 120px;">
        <div class="container h-100" style="overflow: hidden;">
            <div class="row align-items-center h-100">
                <div class="container rounded">
                    <div class="slider" style="animation: slidein 30s linear infinite;white-space: nowrap;">
                        <div class="logos" style="width: 100%;display: inline-block;margin: 0px 0;">
                            <img class="fab fa-4x" src="assets/img/LAPOR-02.png"
                                style="width: calc(100% / 5);animation: fade-in 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) forwards;">
                            <img class="fab fa-4x" src="assets/img/PEMKOT-03.png"
                                style="width: calc(100% / 5);animation: fade-in 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) forwards;">
                            <img class="fab fa-4x" src="assets/img/DISHUB-01.png"
                                style="width: calc(100% / 5);animation: fade-in 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) forwards;">
                            <img class="fab fa-4x" src="assets/img/wndrl-07.png"
                                style="width: calc(100% / 5);animation: fade-in 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) forwards;">
                            <img class="fab fa-4x" src="assets/img/ATCS-04.png"
                                style="width: calc(100% / 5);animation: fade-in 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) forwards;">
                        </div>
                        <div class="logos" style="width: 100%;display: inline-block;margin: 0px 0;">
                            <img class="fab fa-4x" src="assets/img/prwst-05.png"
                                style="width: calc(100% / 5);animation: fade-in 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) forwards;">
                            <img class="fab fa-4x" src="assets/img/RESTABES-06.png"
                                style="width: calc(100% / 5);animation: fade-in 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) forwards;">
                            <img class="fab fa-4x" src="assets/img/JATENG-08.png"
                                style="width: calc(100% / 5);animation: fade-in 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) forwards;">
                            <img class="fab fa-4x" src="assets/img/wndrl-07.png"
                                style="width: calc(100% / 5);animation: fade-in 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) forwards;">
                            <img class="fab fa-4x" src="assets/img/ATCS-04.png"
                                style="width: calc(100% / 5);animation: fade-in 0.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) forwards;">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- Section Footer --}}
    <footer class="text-white" style="background-color: #AF2330; display: flex;display: flex;flex-direction: column;align-items: flex-start;padding: 0px;width: 1440px;height: 398px;">
        <div class="col" style="display: flex;flex-direction: column;align-items: flex-start;padding: 40px 120px;gap: 40px;width: 1440px;height: 338px;">
            <div class="row text-lg-start d-flex flex-column item" style="display: flex;flex-direction: row;align-items: flex-start;padding: 0px;width: 1200px;height: 48px;">
                <img src="assets/img/Logobar.png" alt=""
                    style="display: flex;flex-direction: row;align-items: left;padding: 0px;width: 256.95px;height: 48px;">

            </div>
            <div class="row" style="display: flex;flex-direction: row;align-items: flex-start;padding: 0px;gap: 80px;width: 1200px;height: 170px;">
                <div class="col-auto" style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;row-gap: 20px;width: 546px;height: 170px;">
                    <p class="" style="font-weight: 700;font-size: 24px;line-height: 34px;letter-spacing: -0.24px;">TRANS SEMARANG</p>
                    <span class="" style="font-weight: 400;font-size: 18px;line-height: 24px;letter-spacing: -0.24px;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et malesuada lobortis quis.
                    </span>
                    <div class="" style="display: flex;flex-direction: row;align-items: flex-start;padding: 0px;gap: 8px;width: 332px;height: 48px;">
                        <a href="https://play.google.com/store/apps/details?id=ngi.brtsemarang.apppublic" target="_blank" class=""style="width: 162px;height: 48px;transform: matrix(1, 0, 0, 1, 0, 0);">
                            <img src="assets/img/Google_Play.png"></a>
                        <a href="https://apps.apple.com/id/app/trans-semarang/id1460565652" target="_blank" class="" style="width: 162px;height: 48px;transform: matrix(1, 0, 0, 1, 0, 0);">
                            <img src="assets/img/App_Store.png"></a>
                    </div>
                </div>
                <div class="col-auto" style="display: flex;flex-direction: row;align-items: flex-start;padding: 0px;gap: 40px;width: 574px;height: 162px;">
                    <div class="col-auto" style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;gap: 20px;width: 260px;height: 162px;">
                        <p class="" style="font-weight: 700;font-size: 24px;line-height: 34px;letter-spacing: -0.24px;">About</p>
                        <div class="col-auto"
                            style="font-weight: 400;font-size: 18px;line-height: 24px;letter-spacing: -0.24px;display: flex;flex-direction: column;align-items: flex-start;padding: 0px;gap: 4px;width: 260px;height: 108px;text-decoration-line: none;">
                            <span class="row"><a class="text-white" href="#tentang_kami" >Profil</a></span>
                            <span class="row"><a class="text-white" href="#kontak_kami" >Team</a></span>
                            <span class="row"><a class="text-white" href="#karir">Visi & Misi</a></span>
                            <span class="row"><a class="text-white" href="#karir">Tugas Pokok</a></span>
                        </div>
                    </div>
                    <div class="col-auto" style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;gap: 20px;width: 274px;height: 162px;">
                        <p class="" style="font-weight: 700;font-size: 24px;line-height: 34px;letter-spacing: -0.24px;">Supported by</p>
                        <div class="col-auto"
                            style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;gap: 4px;width: 274px;height: 108px;">
                            <span class="row"><a class="text-white" href="#tentang_kami" >Pemerintah Kota Semarang 2022</a></span>
                            <span class="row"><a class="text-white" href="#tentang_kami" >Walikota Semarang</a></span>
                            <span class="row"><a class="text-white" href="#tentang_kami" >Dinas Kesehatan Kota Semarang</a></span>
                            <span class="row"><a class="text-white" href="#tentang_kami" >Nusantara Global Inovasi</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr style="margin-top: 10px; margin-bottom: 0px">
        <div class="d-flex justify-content-between align-items-center pt-3" style="background-color: #921D28;display: flex;flex-direction: row;padding: 20px 120px;width: 1440px;height: 60px;">
            <p class="text-white mb-0" style="font-weight: 300;font-size: 14px;line-height: 20px;letter-spacing: -0.24px;">&#169; NGINOVASI 2022-V.1.1 All rights reserved.</p>
            <ul class="list-inline mb-0">
                <li class="list-inline-item"><a href="https://www.facebook.com/bus.trans.semarang/" target="_blank" style="color: #ffffff">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                    </svg></a>
                </li>
                <li class="list-inline-item"><a href="https://twitter.com/transsemarang" target="_blank" style="color: #ffffff">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                    </svg></a>
                </li>
                <li class="list-inline-item"><a href="https://www.instagram.com/transsemarang" target="_blank" style="color: #ffffff">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                    </svg></a>
                </li>
                <li class="list-inline-item"><a href="https://www.youtube.com/channel/UCeaDUObnYHFxrdsea9zIP3w" target="_blank" style="color: #ffffff">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                      </svg></a>
                </li>
            </ul>
        </div>
    </footer>
    <script src="https://apis.google.com/js/api:client.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.38/dist/sweetalert2.all.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
</body>

</html>
