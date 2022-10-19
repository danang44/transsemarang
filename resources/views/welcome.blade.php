@include('sweetalert::alert')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trans Semarang | Home</title>
    <meta name="twitter:description"
        content="Twitter Resmi BLU UPTD Trans Semarang  Jl. Tambak Aji Raya No. 5 Kode Pos 50185  CS : 1-5000-94  IG: transsemarang  FB: TRANS Semarang">
    <meta property="og:image" content="assets/img/Trans_Semarang_icon.svg">
    <meta property="og:type" content="website">
    <meta name="description"
        content="Trans Semarang adalah sistem transportasi angkutan massal berbasis jalan di Jawa Tengah yang beroperasi di Kota dan Kabupaten Semarang. Layanan ini dioperasikan guna mengurai kemacetan di Kota Semarang serta untuk mengakomodasi para pelaju menuju pusat kota dan destinasi wisata yang ada di Kota Semarang.">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:image" content="assets/img/tsmgLogo32px-01.png">
    <meta name="twitter:title" content="Trans Semarang | @transsemarang">
    <meta
        name="google-signin-client_id"content="662068769407-1qc1taetjo897853c5lkl755p2c5csvi.apps.googleusercontent.com">
    <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="assets/img/tsmgLogo-01-01%20(180x180).png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/tsmgLogo-01-01%20(16x16).png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/tsmgLogo32px-01.png">
    <link rel="icon" type="image/png" sizes="180x180" href="assets/img/tsmgLogo-01-01%20(180x180).png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/tsmgLogo-01-01%20(192x192).png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> --}}
    <link
        rel="stylesheet"href="https://fonts.googleapis.com/css?family=Lato:100i,300,300i,400,700,900&amp;display=swap">
    <link
        rel="stylesheet"href="https://fonts.googleapis.com/css?family=Plus+Jakarta+Sans:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i&amp;display=swap">
    <link rel="stylesheet" href="assets/css/Footer-Multi-Column-icons.css">
    <link rel="stylesheet" href="assets/css/Hero-Clean-Reverse-images.css">
    <link rel="stylesheet" href="assets/css/logo-slider.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.38/dist/sweetalert2.css">
    <link rel="stylesheet"
        href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css"integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14="
        crossorigin="" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
</head>

<style>
    .g_id_signin {
        display: flex;
        flex-direction: row;
        align-items: center;
        padding: 20px 32px;
        gap: 20px;
        width: 413px;
        height: 72px;
        text-align: center;
    }
</style>

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
                            <a class="nav-link py-3 px-0 px-lg-3 rounded"
                                href="http://karir.transsemarang.semarangkota.go.id" target="_blank">CAREER</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded"
                                href="https://ppid.semarangkota.go.id/kb/jalur-rute-brt-trans-semarang-dan-feeder-di-kota-semarang"
                                target="_blank">BUS & RUTE</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#hotlineCenter"
                                onclick="sweet();">HOTLINE CENTER</a>
                        </li>
                    </ul>
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
                    {{-- <div class="p-xl-5 m-xl-5"><img class="img-fluid fit-cover" style="min-height: 300px;"></div> --}}
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
                @foreach ($PNarticles as $PNart)
                <div class="row row-cols-1">
                    <div class="col-md-9 text-left text-md-start">
                        <p style="font-weight: 600;font-size: 24px;line-height: 32px;">
                            <strong>{{$PNart->title}}</strong>
                        </p>
                        <p class="text-justify text-black-50" style="display: -webkit-box;max-width: 412px;height: 112px;-webkit-line-clamp: 4;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;line-height: 28px; font-weight: 400;font-size: 20px;margin-bottom: 0px">
                            Semarang, Trans Semarang menambah waktu operasional dengan Rute Terminal Mangkang - Simpang
                            Lima mulai Hari Jumat 18
                            Maret 2022. Layanan malam ini akan beroperasional pada pukul 18.00 - 23.00 WIB.</p>
                        <p class="text-justify text-black-50" style="font-weight: 400;font-size: 16px;">September
                            23th, 2022</p>
                    </div>
                </div>
                @endforeach
                {{-- <div class="row row-cols-1">
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
                </div> --}}
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
                    <div class="row row-cols-6" style="display: flex;flex-direction: row;align-items: center;justify-content: flex-start;align-content: center;flex-wrap: wrap;width: 748px">
                        @foreach ($articles as $art)
                            <div class="col border rounded border-1" onclick="window.location.href = '{{ url('news') }}';"
                                style="cursor: pointer;background: linear-gradient(to bottom, rgba(255,255,255,0), rgba(0,0,0,1)),url('{{$art->thumb}}')center / cover no-repeat;width: 248px; height: 248px;align-items: flex-end;display: flex">

                                <div class="card">
                                    <div class="card-body">
                                        <span class="fw-semibold text-white" style="font-family: 'Plus Jakarta Sans';font-style: normal;font-size: 16px;line-height: 24px;">
                                            {{$art->title}}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="col border rounded border-1"
                        style="cursor: pointer;background: linear-gradient(to bottom, rgba(255,255,255,0), rgba(0,0,0,1)),url('assets/img/berita2.jpeg')center / cover no-repeat;width: 248px; height: 248px;align-items: flex-end;display: flex">
                        <div class="card">
                            <div class="card-body">
                                <span class="fw-semibold text-white"
                                    style="font-family: 'Plus Jakarta Sans';font-style: normal;font-size: 16px;line-height: 24px;">Trans
                                    Semarang Kembali Operasikan Feeder 1 Ngaliyan-Mijen-Madukoro</span>
                            </div>
                        </div>
                    </div>
                    <div class="col border rounded border-1"
                        style="cursor: pointer;background: linear-gradient(to bottom, rgba(255,255,255,0), rgba(0,0,0,1)),url('assets/img/berita3.jpeg')center / cover no-repeat;width: 248px; height: 248px;align-items: flex-end;display: flex">
                        <div class="card">
                            <div class="card-body">
                                <span class="fw-semibold text-white"
                                    style="font-family: 'Plus Jakarta Sans';font-style: normal;font-size: 16px;line-height: 1.5rem;">Trans
                                    Semarang Menambah Waktu Layanan Operasional</span>
                            </div>
                        </div>
                    </div> --}}

                    </div>

                    {{-- <div class="row row-cols-6">
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
                </div> --}}
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
        </div>
    </section>
    {{-- Section Payment --}}

    <section>
        <div class="row"
            style="display: flex;flex-direction: column;align-items: flex-start;padding: 80px 120px;gap: 80px;width: 1440px;height: 904px;background: #FFFFFF;align-content: center;justify-content: center;">
            <div class="row"
                style="display: flex;flex-direction: row;align-items: center;padding: 0px;gap: 80px;width: 1200px;height: 96px;align-content: center;">
                <div class="col"
                    style="display: flex;flex-direction: column;justify-content: center;align-items: flex-start;padding: 0px;width: 560px;height: 92px;">
                    <p
                        style="margin-block-end: 0px;font-weight: 500;font-size: 24px;line-height: 32px;color: #AF2330;">
                        TS.PAYMENT</p>
                    <p
                        style="margin-block-end: 0px;font-weight: 700;font-size: 48px;line-height: 60px;color: #1D2939;">
                        Bayar Pakai Kartu</p>
                </div>
                <p class="col"
                    style="margin-block-end: 0px;font-family: 'Plus Jakarta Sans';font-style: normal;font-weight: 300;font-size: 24px;line-height: 32px;color: #98A2B3;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pretium vulputate id ultricies diam
                    pulvinar vitae sit proin. Quam morbi turpis dolor in.</p>
            </div>
            <div class="container text-center my-3">
                <div class="row mx-auto my-auto"
                    style="display: flex;flex-direction: row;align-items: flex-start;padding: 0px;gap: 40px;width: 1200px;height: 568px;">
                    <div id="recipeCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner w-100" role="listbox">
                            <div class="carousel-item">
                                <div class="col-md-4">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="assets/img/ETS_DIFABLE.png"
                                            style="border-radius: 16px;">
                                        <h5 class="card-title"
                                            style="text-align: left;padding-top: 24px;font-weight: 600;font-size: 32px;line-height: 40px;color: #1D2939;">
                                            ETS Difabel</h5>
                                        <p class="card-text"
                                            style="width: 360px;height: 96px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;text-align: left;font-weight: 300;font-size: 24px;line-height: 32px;color: #98A2B3;">
                                            Some quick example text to build on the card title and make up the bulk of
                                            the card's content.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="assets/img/ETS_KIA.png"
                                            style="border-radius: 16px;">
                                        <h5 class="card-title"
                                            style="text-align: left;padding-top: 24px;font-weight: 600;font-size: 32px;line-height: 40px;color: #1D2939;">
                                            ETS KIA</h5>
                                        <p class="card-text"
                                            style="width: 360px;height: 96px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;text-align: left;font-weight: 300;font-size: 24px;line-height: 32px;color: #98A2B3;">
                                            Some quick example text to build on the card title and make up the bulk of
                                            the card's content.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="assets/img/ETS_LANSIA.png"
                                            style="border-radius: 16px;">
                                        <h5 class="card-title"
                                            style="text-align: left;padding-top: 24px;font-weight: 600;font-size: 32px;line-height: 40px;color: #1D2939;">
                                            ETS Lansia / Veteran</h5>
                                        <p class="card-text"
                                            style="width: 360px;height: 96px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;text-align: left;font-weight: 300;font-size: 24px;line-height: 32px;color: #98A2B3;">
                                            Some quick example text to build on the card title and make up the bulk of
                                            the card's content.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="assets/img/ETS_PELAJAR.png"
                                            style="border-radius: 16px;">
                                        <h5 class="card-title"
                                            style="text-align: left;padding-top: 24px;font-weight: 600;font-size: 32px;line-height: 40px;color: #1D2939;">
                                            ETS Pelajar</h5>
                                        <p class="card-text"
                                            style="width: 360px;height: 96px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;text-align: left;font-weight: 300;font-size: 24px;line-height: 32px;color: #98A2B3;">
                                            Some quick example text to build on the card title and make up the bulk of
                                            the card's content.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="assets/img/ETS_UMUM.png"
                                            style="border-radius: 16px;">
                                        <h5 class="card-title"
                                            style="text-align: left;padding-top: 24px;font-weight: 600;font-size: 32px;line-height: 40px;color: #1D2939;">
                                            ETS Umum</h5>
                                        <p class="card-text"
                                            style="width: 360px;height: 96px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;text-align: left;font-weight: 300;font-size: 24px;line-height: 32px;color: #98A2B3;">
                                            Some quick example text to build on the card title and make up the bulk of
                                            the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-4">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="assets/img/ETS_KIA.png"
                                            style="border-radius: 16px;">
                                        <h5 class="card-title"
                                            style="text-align: left;padding-top: 24px;font-weight: 600;font-size: 32px;line-height: 40px;color: #1D2939;">
                                            ETS KIA</h5>
                                        <p class="card-text"
                                            style="width: 360px;height: 96px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;text-align: left;font-weight: 300;font-size: 24px;line-height: 32px;color: #98A2B3;">
                                            Some quick example text to build on the card title and make up the bulk of
                                            the card's content.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="assets/img/ETS_LANSIA.png"
                                            style="border-radius: 16px;">
                                        <h5 class="card-title"
                                            style="text-align: left;padding-top: 24px;font-weight: 600;font-size: 32px;line-height: 40px;color: #1D2939;">
                                            ETS Lansia / Veteran</h5>
                                        <p class="card-text"
                                            style="width: 360px;height: 96px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;text-align: left;font-weight: 300;font-size: 24px;line-height: 32px;color: #98A2B3;">
                                            Some quick example text to build on the card title and make up the bulk of
                                            the card's content.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="assets/img/ETS_PELAJAR.png"
                                            style="border-radius: 16px;">
                                        <h5 class="card-title"
                                            style="text-align: left;padding-top: 24px;font-weight: 600;font-size: 32px;line-height: 40px;color: #1D2939;">
                                            ETS Pelajar</h5>
                                        <p class="card-text"
                                            style="width: 360px;height: 96px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;text-align: left;font-weight: 300;font-size: 24px;line-height: 32px;color: #98A2B3;">
                                            Some quick example text to build on the card title and make up the bulk of
                                            the card's content.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="assets/img/ETS_UMUM.png"
                                            style="border-radius: 16px;">
                                        <h5 class="card-title"
                                            style="text-align: left;padding-top: 24px;font-weight: 600;font-size: 32px;line-height: 40px;color: #1D2939;">
                                            ETS Umum</h5>
                                        <p class="card-text"
                                            style="width: 360px;height: 96px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;text-align: left;font-weight: 300;font-size: 24px;line-height: 32px;color: #98A2B3;">
                                            Some quick example text to build on the card title and make up the bulk of
                                            the card's content.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="assets/img/ETS_DIFABLE.png"
                                            style="border-radius: 16px;">
                                        <h5 class="card-title"
                                            style="text-align: left;padding-top: 24px;font-weight: 600;font-size: 32px;line-height: 40px;color: #1D2939;">
                                            ETS Difabel</h5>
                                        <p class="card-text"
                                            style="width: 360px;height: 96px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;text-align: left;font-weight: 300;font-size: 24px;line-height: 32px;color: #98A2B3;">
                                            Some quick example text to build on the card title and make up the bulk of
                                            the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-4">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="assets/img/ETS_LANSIA.png"
                                            style="border-radius: 16px;">
                                        <h5 class="card-title"
                                            style="text-align: left;padding-top: 24px;font-weight: 600;font-size: 32px;line-height: 40px;color: #1D2939;">
                                            ETS Lansia / Veteran</h5>
                                        <p class="card-text"
                                            style="width: 360px;height: 96px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;text-align: left;font-weight: 300;font-size: 24px;line-height: 32px;color: #98A2B3;">
                                            Some quick example text to build on the card title and make up the bulk of
                                            the card's content.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="assets/img/ETS_PELAJAR.png"
                                            style="border-radius: 16px;">
                                        <h5 class="card-title"
                                            style="text-align: left;padding-top: 24px;font-weight: 600;font-size: 32px;line-height: 40px;color: #1D2939;">
                                            ETS Pelajar</h5>
                                        <p class="card-text"
                                            style="width: 360px;height: 96px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;text-align: left;font-weight: 300;font-size: 24px;line-height: 32px;color: #98A2B3;">
                                            Some quick example text to build on the card title and make up the bulk of
                                            the card's content.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="assets/img/ETS_UMUM.png"
                                            style="border-radius: 16px;">
                                        <h5 class="card-title"
                                            style="text-align: left;padding-top: 24px;font-weight: 600;font-size: 32px;line-height: 40px;color: #1D2939;">
                                            ETS Umum</h5>
                                        <p class="card-text"
                                            style="width: 360px;height: 96px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;text-align: left;font-weight: 300;font-size: 24px;line-height: 32px;color: #98A2B3;">
                                            Some quick example text to build on the card title and make up the bulk of
                                            the card's content.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="assets/img/ETS_DIFABLE.png"
                                            style="border-radius: 16px;">
                                        <h5 class="card-title"
                                            style="text-align: left;padding-top: 24px;font-weight: 600;font-size: 32px;line-height: 40px;color: #1D2939;">
                                            ETS Difabel</h5>
                                        <p class="card-text"
                                            style="width: 360px;height: 96px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;text-align: left;font-weight: 300;font-size: 24px;line-height: 32px;color: #98A2B3;">
                                            Some quick example text to build on the card title and make up the bulk of
                                            the card's content.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="assets/img/ETS_KIA.png"
                                            style="border-radius: 16px;">
                                        <h5 class="card-title"
                                            style="text-align: left;padding-top: 24px;font-weight: 600;font-size: 32px;line-height: 40px;color: #1D2939;">
                                            ETS KIA</h5>
                                        <p class="card-text"
                                            style="width: 360px;height: 96px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;text-align: left;font-weight: 300;font-size: 24px;line-height: 32px;color: #98A2B3;">
                                            Some quick example text to build on the card title and make up the bulk of
                                            the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-4">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="assets/img/ETS_PELAJAR.png"
                                            style="border-radius: 16px;">
                                        <h5 class="card-title"
                                            style="text-align: left;padding-top: 24px;font-weight: 600;font-size: 32px;line-height: 40px;color: #1D2939;">
                                            ETS Pelajar</h5>
                                        <p class="card-text"
                                            style="width: 360px;height: 96px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;text-align: left;font-weight: 300;font-size: 24px;line-height: 32px;color: #98A2B3;">
                                            Some quick example text to build on the card title and make up the bulk of
                                            the card's content.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="assets/img/ETS_UMUM.png"
                                            style="border-radius: 16px;">
                                        <h5 class="card-title"
                                            style="text-align: left;padding-top: 24px;font-weight: 600;font-size: 32px;line-height: 40px;color: #1D2939;">
                                            ETS Umum</h5>
                                        <p class="card-text"
                                            style="width: 360px;height: 96px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;text-align: left;font-weight: 300;font-size: 24px;line-height: 32px;color: #98A2B3;">
                                            Some quick example text to build on the card title and make up the bulk of
                                            the card's content.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="assets/img/ETS_DIFABLE.png"
                                            style="border-radius: 16px;">
                                        <h5 class="card-title"
                                            style="text-align: left;padding-top: 24px;font-weight: 600;font-size: 32px;line-height: 40px;color: #1D2939;">
                                            ETS Difabel</h5>
                                        <p class="card-text"
                                            style="width: 360px;height: 96px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;text-align: left;font-weight: 300;font-size: 24px;line-height: 32px;color: #98A2B3;">
                                            Some quick example text to build on the card title and make up the bulk of
                                            the card's content.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="assets/img/ETS_KIA.png"
                                            style="border-radius: 16px;">
                                        <h5 class="card-title"
                                            style="text-align: left;padding-top: 24px;font-weight: 600;font-size: 32px;line-height: 40px;color: #1D2939;">
                                            ETS KIA</h5>
                                        <p class="card-text"
                                            style="width: 360px;height: 96px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;text-align: left;font-weight: 300;font-size: 24px;line-height: 32px;color: #98A2B3;">
                                            Some quick example text to build on the card title and make up the bulk of
                                            the card's content.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="assets/img/ETS_LANSIA.png"
                                            style="border-radius: 16px;">
                                        <h5 class="card-title"
                                            style="text-align: left;padding-top: 24px;font-weight: 600;font-size: 32px;line-height: 40px;color: #1D2939;">
                                            ETS Lansia / Veteran</h5>
                                        <p class="card-text"
                                            style="width: 360px;height: 96px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;text-align: left;font-weight: 300;font-size: 24px;line-height: 32px;color: #98A2B3;">
                                            Some quick example text to build on the card title and make up the bulk of
                                            the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item active">
                                <div class="col-md-4">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="assets/img/ETS_UMUM.png"
                                            style="border-radius: 16px;">
                                        <h5 class="card-title"
                                            style="text-align: left;padding-top: 24px;font-weight: 600;font-size: 32px;line-height: 40px;color: #1D2939;">
                                            ETS Umum</h5>
                                        <p class="card-text"
                                            style="width: 360px;height: 96px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;text-align: left;font-weight: 300;font-size: 24px;line-height: 32px;color: #98A2B3;">
                                            Some quick example text to build on the card title and make up the bulk of
                                            the card's content.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="assets/img/ETS_DIFABLE.png"
                                            style="border-radius: 16px;">
                                        <h5 class="card-title"
                                            style="text-align: left;padding-top: 24px;font-weight: 600;font-size: 32px;line-height: 40px;color: #1D2939;">
                                            ETS Difabel</h5>
                                        <p class="card-text"
                                            style="width: 360px;height: 96px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;text-align: left;font-weight: 300;font-size: 24px;line-height: 32px;color: #98A2B3;">
                                            Some quick example text to build on the card title and make up the bulk of
                                            the card's content.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="assets/img/ETS_KIA.png"
                                            style="border-radius: 16px;">
                                        <h5 class="card-title"
                                            style="text-align: left;padding-top: 24px;font-weight: 600;font-size: 32px;line-height: 40px;color: #1D2939;">
                                            ETS KIA</h5>
                                        <p class="card-text"
                                            style="width: 360px;height: 96px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;text-align: left;font-weight: 300;font-size: 24px;line-height: 32px;color: #98A2B3;">
                                            Some quick example text to build on the card title and make up the bulk of
                                            the card's content.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="assets/img/ETS_LANSIA.png"
                                            style="border-radius: 16px;">
                                        <h5 class="card-title"
                                            style="text-align: left;padding-top: 24px;font-weight: 600;font-size: 32px;line-height: 40px;color: #1D2939;">
                                            ETS Lansia / Veteran</h5>
                                        <p class="card-text"
                                            style="width: 360px;height: 96px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;text-align: left;font-weight: 300;font-size: 24px;line-height: 32px;color: #98A2B3;">
                                            Some quick example text to build on the card title and make up the bulk of
                                            the card's content.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-body">
                                        <img class="img-fluid" src="assets/img/ETS_PELAJAR.png"
                                            style="border-radius: 16px;">
                                        <h5 class="card-title"
                                            style="text-align: left;padding-top: 24px;font-weight: 600;font-size: 32px;line-height: 40px;color: #1D2939;">
                                            ETS Pelajar</h5>
                                        <p class="card-text"
                                            style="width: 360px;height: 96px;display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;text-align: left;font-weight: 300;font-size: 24px;line-height: 32px;color: #98A2B3;">
                                            Some quick example text to build on the card title and make up the bulk of
                                            the card's content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button"
                            data-slide="prev">
                            {{-- <span class="sr-only">Previous</span> --}}
                            <span class="carousel-control-prev-icon bg-danger border border-danger rounded-circle"
                                aria-hidden="true" style="width: 60px; height: 60px;"></span>
                        </a>
                        <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button"
                            data-slide="next">
                            {{-- <span class="sr-only">Next</span> --}}
                            <span class="carousel-control-next-icon bg-danger border border-danger rounded-circle"
                                aria-hidden="true" style="width: 60px; height: 60px;"></span>
                        </a>
                    </div>
                </div>
            </div>
            <script>
                $('#recipeCarousel').carousel({
                    interval: 10000
                })

                $('.carousel .carousel-item').each(function() {
                    var minPerSlide = 3;
                    var next = $(this).next();
                    if (!next.length) {
                        next = $(this).siblings(':first');
                    }
                    next.children(':first-child').clone().appendTo($(this));

                    for (var i = 0; i < minPerSlide; i++) {
                        next = next.next();
                        if (!next.length) {
                            next = $(this).siblings(':first');
                        }

                        next.children(':first-child').clone().appendTo($(this));
                    }
                });
            </script>
        </div>
    </section>

    <section>
        <div style="width: 1440px;height: 910px;background: #F9FAFB;">
            <div class="row" style="">
                <div class="col"
                    style="display: flex;flex-direction: column;align-items: flex-start;padding: 98.67px 120px 82px 99.3px;gap: 80px;position: absolute;width: 472px;height: 712px;">
                    <div class="row"
                        style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;width: 472px;height: 152px;">
                        <p style="font-weight: 500;font-size: 24px;line-height: 32px;color: #AF2330;">TS.ADUAN</p>
                        <p style="font-weight: 400;font-size: 48px;line-height: 60px;color: #1D2939">Layanan <strong
                                style=" font-weight: 800;color: #AF2330;">Aduan<br>& Bantuan</strong></p>
                    </div>
                    <div class="row"
                        style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;gap: 40px;width: 472px;height: 480px;">
                        <div class="row"
                            style="display: flex;flex-direction: row;align-items: flex-start;padding: 0px;gap: 20px;width: 472px;height: 112px;">
                            <h1
                                style="width: 44px;height: 40px;font-family: 'Plus Jakarta Sans';font-style: normal;font-weight: 400;font-size: 32px;line-height: 40px;color: #AF2330;">
                                01</h1>
                            <span
                                style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;gap: 8px;width: 408px;height: 112px;">
                                <p
                                    style="width: 408px;height: 40px;font-family: 'Plus Jakarta Sans';font-style: normal;font-weight: 600;font-size: 32px;line-height: 40px;color: #475467;">
                                    Jelaskan dengan jelas</p>
                                <p
                                    style="width: 408px;height: 64px;font-family: 'Plus Jakarta Sans';font-style: normal;font-weight: 300;font-size: 24px;line-height: 32px;color: #98A2B3;">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            </span>
                        </div>
                        <div class="row"
                            style="display: flex;flex-direction: row;align-items: flex-start;padding: 0px;gap: 20px;width: 472px;height: 176px;">
                            <h1
                                style="width: 44px;height: 40px;font-family: 'Plus Jakarta Sans';font-style: normal;font-weight: 400;font-size: 32px;line-height: 40px;color: #AF2330;">
                                02</h1>
                            <span
                                style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;gap: 8px;width: 408px;height: 112px;">
                                <p
                                    style="width: 408px;height: 40px;font-family: 'Plus Jakarta Sans';font-style: normal;font-weight: 600;font-size: 32px;line-height: 40px;color: #475467;">
                                    Gunakan kata yang sopan</p>
                                <p
                                    style="width: 408px;height: 128px;font-family: 'Plus Jakarta Sans';font-style: normal;font-weight: 300;font-size: 24px;line-height: 32px;color: #98A2B3;">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed est lorem massa.
                                    Risus in faucibus amet laoreet diam. </p>
                            </span>
                        </div>
                        <div class="row"
                            style="display: flex;flex-direction: row;align-items: flex-start;padding: 0px;gap: 20px;width: 472px;height: 112px;">
                            <h1
                                style="width: 44px;height: 40px;font-family: 'Plus Jakarta Sans';font-style: normal;font-weight: 400;font-size: 32px;line-height: 40px;color: #AF2330;">
                                03</h1>
                            <span
                                style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;gap: 8px;width: 408px;height: 112px;">
                                <p
                                    style="width: 408px;height: 40px;font-family: 'Plus Jakarta Sans';font-style: normal;font-weight: 600;font-size: 32px;line-height: 40px;color: #475467;">
                                    Sed iaculis morbi non.</p>
                                <p
                                    style="width: 408px;height: 64px;font-family: 'Plus Jakarta Sans';font-style: normal;font-weight: 300;font-size: 24px;line-height: 32px;color: #98A2B3;">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col"
                    style="display: flex;flex-direction: row;align-items: flex-start;padding: 80px 120px 80px 674px;isolation: isolate;position: absolute;width: 648px;height: 750px;">
                    <div
                        style="display: flex;flex-direction: row;align-items: flex-start;padding: 28px 0px;isolation: isolate;width: 4px;height: 80px;margin: 0px -2px;z-index: 1;">
                        <svg width="4" height="25" viewBox="0 0 4 25" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect y="0.996826" width="4" height="24" rx="2" fill="#AF2330" />
                        </svg>
                    </div>

                    <div class="row"
                        style="display: flex;flex-direction: column;align-items: center;padding: 0px;width: 646px;height: 746px;background: #FFFFFF;box-shadow: 0px 4px 12px rgba(29, 41, 57, 0.12);backdrop-filter: blur(10px);border-radius: 20px;">
                        <div class="mb-3"
                            style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;padding-bottom: 2px;width: 646px;height: 662px;background: #F9FAFB;border-radius: 20px;">
                            <div
                                style="width: 646px;height: 80px;background: #FFFFFF;border-radius: 20px 20px 0 0; margin-bottom: 2px">
                                <p
                                    style="position: absolute;width: 233px;height: 40px;left: 40px;top: 20px;font-family: 'Plus Jakarta Sans';font-style: normal;font-weight: 600;font-size: 32px;line-height: 40px;text-transform: capitalize;color: #1D2939;">
                                    Layanan Aduan
                                </p>
                            </div>
                            <div class="mb-3"
                                style="display: flex;flex-direction: column;align-items: flex-start;padding: 40px;gap: 20px;width: 646px;height: 580px;background: #FFFFFF;">
                                <img style="width: 566px;height: 344px;" src="assets/img/IlustrationCS.png" />
                                <div style="width: 566px;height: 200px;left: 40px;top: 424px;">
                                    <div style="padding: 0px;gap: 4px;width: 566px;height: 92px;">
                                        <p
                                            style="font-weight: 600;font-size: 24px;line-height: 32px;text-align: left;letter-spacing: -0.006em;color: #1D2939;">
                                            Anda harus masuk dengan Google untuk melanjutkan
                                        </p>
                                        <p
                                            style="font-weight: 400;font-size: 20px;line-height: 28px;letter-spacing: -0.006em;color: #98A2B3;">
                                            Setelah Anda mengajukan keluhan, kami akan mengirimkan informasi penanganan
                                            ke email yang Anda gunakan untuk login.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary" data-bs-toggle="modal" href="#modalPengaduan" role="button"
                            hidden>Pengaduan</a>
                        <div id="g_id_onload"
                            data-client_id="662068769407-1qc1taetjo897853c5lkl755p2c5csvi.apps.googleusercontent.com"
                            data-context="signin" data-ux_mode="popup" data-login_uri="http://localhost:8000/"
                            data-auto_prompt="false">
                        </div>

                        <div class="g_id_signin" data-type="standard" data-shape="rectangular" data-theme="outline"
                            data-text="signin_with" data-size="large" data-locale="id" data-logo_alignment="left"
                            data-width="350">
                        </div>
                    </div>
                </div>
            </div>

            {{-- <form action="/pengaduan.php" method="post" class="row"
                        style="display: flex;flex-direction: column;align-items: center;padding: 0px;width: 646px;height: 750px;background: #F9FAFB;box-shadow: 0px 4px 12px rgba(29, 41, 57, 0.12);backdrop-filter: blur(10px);border-radius: 20px;">
                        <div class="mb-3"
                            style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;gap: 2px;width: 646px;height: 662px;background: #F9FAFB;border-radius: 20px;">
                            <div style="width: 646px;height: 80px;background: #FFFFFF;border-radius: 20px 20px 0 0;">
                                <p
                                    style="position: absolute;width: 233px;height: 40px;left: 40px;top: 20px;font-family: 'Plus Jakarta Sans';font-style: normal;font-weight: 600;font-size: 32px;line-height: 40px;text-transform: capitalize;color: #1D2939;">
                                    Layanan Aduan
                                </p>
                            </div>
                            <div class="mb-3"
                                style="display: flex;flex-direction: column;align-items: flex-start;padding: 40px;gap: 20px;width: 646px;height: 580px;background: #FFFFFF;">
                                <legend
                                    style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;isolation: isolate;width: 566px;height: 92px;color: #98A2B3;">
                                    Your email
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="name@example.com">
                                </legend>
                                <legend
                                    style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;isolation: isolate;width: 566px;height: 88px;color: #98A2B3;">
                                    Subjek Pengaduan
                                    <select class="form-select" aria-label="Default select example"
                                        style="font-weight: 400;font-size: 20px;line-height: 28px;letter-spacing: -0.006em;color: #475467;"
                                        required>
                                        <option selected disabled value="">Materi Pengaduan...</option>
                                        <option value="1"><span>1.Pelanggaran terhadap kode etik dan/atau pedoman
                                                perilaku aparat</span></option>
                                        <option value="2"><span>2.Penyalahgunaan wewenang/jabatan</span></option>
                                        <option value="3"><span>3.Pelanggaran sumpah jabatan</span></option>
                                        <option value="4"><span>4.Pelanggaran terhadap peraturan disiplin Pegawai
                                                Negeri Sipil</span></option>
                                        <option value="5"><span>5.Perbuatan tercela, yaitu perbuatan amoral,
                                                asusila, atau perbuatan yang tidak selayaknya dilakukan oleh seorang
                                                aparat maupun selaku anggota masyarakat</span></option>
                                        <option value="6"><span>6.Pelanggaran hukum, baik dilakukan dengan
                                                sengaja, maupun karena kelalaian dan ketidakpahaman</span></option>
                                        <option value="7"><span>7.Mal administrasi, yaitu terjadinya kesalahan,
                                                kekeliruan atau kelalaian yang bersifat administratif</span></option>
                                        <option value="8"><span>8.Pelayanan publik yang tidak memuaskan yang dapat
                                                merugikan pihak-pihak yang berkepentingan serta masyarakat secara
                                                umum</span></option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Silahkan pilih materi pengaduan.</div>
                                </legend>
                                <legend
                                    style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;isolation: isolate;width: 566px;height: 172px;color: #98A2B3;">
                                    Deskripsi Kejadian
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"
                                        placeholder="Sebutkan peristiwa, waktu terjadinya, dan lokasi kejadian atas pengaduan anda" required></textarea>
                                </legend>
                                <legend
                                    style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;isolation: isolate;width: 566px;height: 92px;color: #98A2B3;">
                                    Foto Pendukung
                                    <input class="form-control" type="file" id="formFile"
                                        accept=".jpg,.jpeg,.png" onchange="Filevalidation()" />
                                </legend>
                                <p id="fileResult"></p>
                            </div>
                        </div>
                        <div
                            style="display: flex;flex-direction: row;justify-content: flex-end;align-items: center;padding: 20px 40px;gap: 12px;width: 646px;height: 88px;">
                            <button type="reset" class="btn btn-outline-secondary"
                                style="display: flex;flex-direction: row;justify-content: center;align-items: center;padding: 12px 24px;gap: 4px;width: 102px;height: 48px;border: 2px solid #E4E7EC;border-radius: 8px;">Cancel</button>
                            <button id="submitReport" type="submit" class="btn btn-danger text-white"
                                style="display: flex;flex-direction: row;justify-content: center;align-items: center;width: 159px;height: 48px;background: #AF2330;border-radius: 8px;"
                                disabled>Submit Report</button>
                        </div>
                    </form> --}}
        </div>
        </div>
        {{-- <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Modal 1</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Show a second modal and hide this one with the button below.
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Hide this modal and show the first with the button below.
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
                </div>
              </div>
            </div>
          </div> --}}
        {{-- <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open first modal</a> --}}
        <div class="modal fade" id="modalPengaduan" aria-hidden="true" aria-labelledby="modalPengaduanLabel"
            tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalPengaduanLabel">Layanan Aduan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/pengaduan.php" method="post" class="row"
                            style="display: flex;flex-direction: column;align-items: center;padding: 0px;width: 646px;height: 750px;background: #F9FAFB;box-shadow: 0px 4px 12px rgba(29, 41, 57, 0.12);backdrop-filter: blur(10px);border-radius: 20px;">
                            <div class="mb-3"
                                style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;gap: 2px;width: 646px;height: 662px;background: #F9FAFB;border-radius: 20px;">
                                <div
                                    style="width: 646px;height: 80px;background: #FFFFFF;border-radius: 20px 20px 0 0;">
                                    <p
                                        style="position: absolute;width: 233px;height: 40px;left: 40px;top: 20px;font-family: 'Plus Jakarta Sans';font-style: normal;font-weight: 600;font-size: 32px;line-height: 40px;text-transform: capitalize;color: #1D2939;">
                                        Layanan Aduan
                                    </p>
                                </div>
                                <div class="mb-3"
                                    style="display: flex;flex-direction: column;align-items: flex-start;padding: 40px;gap: 20px;width: 646px;height: 580px;background: #FFFFFF;">
                                    <legend
                                        style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;isolation: isolate;width: 566px;height: 92px;color: #98A2B3;">
                                        Your email
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="name@example.com">
                                    </legend>
                                    <legend
                                        style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;isolation: isolate;width: 566px;height: 88px;color: #98A2B3;">
                                        Subjek Pengaduan
                                        <select class="form-select" aria-label="Default select example"
                                            style="font-weight: 400;font-size: 20px;line-height: 28px;letter-spacing: -0.006em;color: #475467;"
                                            required>
                                            <option selected disabled value="">Materi Pengaduan...</option>
                                            <option value="1"><span>1.Pelanggaran terhadap kode etik dan/atau
                                                    pedoman
                                                    perilaku aparat</span></option>
                                            <option value="2"><span>2.Penyalahgunaan wewenang/jabatan</span>
                                            </option>
                                            <option value="3"><span>3.Pelanggaran sumpah jabatan</span></option>
                                            <option value="4"><span>4.Pelanggaran terhadap peraturan disiplin
                                                    Pegawai
                                                    Negeri Sipil</span></option>
                                            <option value="5"><span>5.Perbuatan tercela, yaitu perbuatan amoral,
                                                    asusila, atau perbuatan yang tidak selayaknya dilakukan oleh seorang
                                                    aparat maupun selaku anggota masyarakat</span></option>
                                            <option value="6"><span>6.Pelanggaran hukum, baik dilakukan dengan
                                                    sengaja, maupun karena kelalaian dan ketidakpahaman</span></option>
                                            <option value="7"><span>7.Mal administrasi, yaitu terjadinya
                                                    kesalahan,
                                                    kekeliruan atau kelalaian yang bersifat administratif</span>
                                            </option>
                                            <option value="8"><span>8.Pelayanan publik yang tidak memuaskan yang
                                                    dapat
                                                    merugikan pihak-pihak yang berkepentingan serta masyarakat secara
                                                    umum</span></option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Silahkan pilih materi pengaduan.</div>
                                    </legend>
                                    <legend
                                        style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;isolation: isolate;width: 566px;height: 172px;color: #98A2B3;">
                                        Deskripsi Kejadian
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"
                                            placeholder="Sebutkan peristiwa, waktu terjadinya, dan lokasi kejadian atas pengaduan anda" required></textarea>
                                    </legend>
                                    <legend
                                        style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;isolation: isolate;width: 566px;height: 92px;color: #98A2B3;">
                                        Foto Pendukung
                                        <input class="form-control" type="file" id="formFile"
                                            accept=".jpg,.jpeg,.png" onchange="Filevalidation()" />
                                    </legend>
                                    <p id="fileResult"></p>
                                </div>
                            </div>
                            {{-- <div
                                style="display: flex;flex-direction: row;justify-content: flex-end;align-items: center;padding: 20px 40px;gap: 12px;width: 646px;height: 88px;">
                                <button type="reset" class="btn btn-outline-secondary"
                                    style="display: flex;flex-direction: row;justify-content: center;align-items: center;padding: 12px 24px;gap: 4px;width: 102px;height: 48px;border: 2px solid #E4E7EC;border-radius: 8px;">Cancel</button>
                                <button id="submitReport" type="submit" class="btn btn-danger text-white"
                                    style="display: flex;flex-direction: row;justify-content: center;align-items: center;width: 159px;height: 48px;background: #AF2330;border-radius: 8px;"
                                    disabled>Submit Report</button>
                            </div> --}}
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-outline-secondary" data-bs-toggle="modal"
                            style="display: flex;flex-direction: row;justify-content: center;align-items: center;padding: 12px 24px;gap: 4px;width: 102px;height: 48px;border: 2px solid #E4E7EC;border-radius: 8px;">Cancel</button>
                        <button id="submitReport" type="submit" class="btn btn-danger text-white"
                            style="display: flex;flex-direction: row;justify-content: center;align-items: center;width: 159px;height: 48px;background: #AF2330;border-radius: 8px;"
                            disabled>Submit Report</button>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section>
        <div class="col"
            style="display: flex;flex-direction: row;justify-content: center;align-items: center;padding: 80px 120px;gap: 120px;width: 1440px;height: 316px;">
            <div class="row"
                style="display: flex;flex-direction: row;align-items: center;padding: 40px 80px;width: 1200px;height: 156px;background: #1D2939;border-radius: 8px;">
                <div class="col"
                    style="display: flex;flex-direction: column;justify-content: center;align-items: flex-start;padding: 0px;gap: 4px;width: 507px;height: 76px;">
                    <span style="font-weight: 300;font-size: 24px;line-height: 32px;color: #ffffff">Have you ever
                        reported a complaint?</span>
                    <span style="font-weight: 600;font-size: 32px;line-height: 40px;color: #ffffff">Track your
                        complaint report</span>
                </div>
                <script src="https://accounts.google.com/gsi/client" async defer></script>
                <div id="g_id_onload"
                    data-client_id="662068769407-1qc1taetjo897853c5lkl755p2c5csvi.apps.googleusercontent.com"
                    data-context="use" data-ux_mode="redirect" data-login_uri="http://localhost/home" data-nonce=""
                    data-itp_support="true" hidden>
                </div>

                <div class="g_id_signin" data-type="standard" data-shape="rectangular" data-theme="outline"
                    data-text="continue_with" data-size="large" data-locale="id" data-logo_alignment="center"
                    data-width="413">
                </div>
            </div>
        </div>
    </section>

    <section style="background-color: #F9FAFB;display: flex;flex-direction: row;justify-content: center;align-items: center;padding: 10px 80px;gap: 80px;width: 1440px;height: 120px;">
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

    <footer class="text-white" style="background-color: #AF2330;display: flex;flex-direction: column;align-items: flex-start;padding: 0px;width: 1440px;height: 398px;">
        <div class="col" style="display: flex;flex-direction: column;align-items: flex-start;padding: 40px 120px;gap: 40px;width: 1440px;height: 338px;">
            <div class="row text-lg-start d-flex flex-column item" style="display: flex;flex-direction: row;align-items: flex-start;padding: 0px;width: 1200px;height: 48px;">
                <img src="assets/img/Logobar.png" alt="" style="display: flex;flex-direction: row;align-items: left;padding: 0px;width: 256.95px;height: 48px;">
            </div>
            <div class="row"
                style="display: flex;flex-direction: row;align-items: flex-start;padding: 0px;gap: 80px;width: 1200px;height: 170px;">
                <div class="col-auto"
                    style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;row-gap: 20px;width: 546px;height: 170px;">
                    <p class=""
                        style="font-weight: 700;font-size: 24px;line-height: 34px;letter-spacing: -0.24px;">TRANS
                        SEMARANG</p>
                    <span class=""
                        style="font-weight: 400;font-size: 18px;line-height: 24px;letter-spacing: -0.24px;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et malesuada lobortis quis.
                    </span>
                    <div class=""
                        style="display: flex;flex-direction: row;align-items: flex-start;padding: 0px;gap: 8px;width: 332px;height: 48px;">
                        <a href="https://play.google.com/store/apps/details?id=ngi.brtsemarang.apppublic"
                            target="_blank"
                            class=""style="width: 162px;height: 48px;transform: matrix(1, 0, 0, 1, 0, 0);">
                            <img src="assets/img/Google_Play.png"></a>
                        <a href="https://apps.apple.com/id/app/trans-semarang/id1460565652" target="_blank"
                            class="" style="width: 162px;height: 48px;transform: matrix(1, 0, 0, 1, 0, 0);">
                            <img src="assets/img/App_Store.png"></a>
                    </div>
                </div>
                <div class="col-auto"
                    style="display: flex;flex-direction: row;align-items: flex-start;padding: 0px;gap: 40px;width: 574px;height: 162px;">
                    <div class="col-auto"
                        style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;gap: 20px;width: 260px;height: 162px;">
                        <p class=""
                            style="font-weight: 700;font-size: 24px;line-height: 34px;letter-spacing: -0.24px;">About
                        </p>
                        <div class="col-auto"
                            style="font-weight: 400;font-size: 18px;line-height: 24px;letter-spacing: -0.24px;display: flex;flex-direction: column;align-items: flex-start;padding: 0px;gap: 4px;width: 260px;height: 108px;text-decoration-line: none;">
                            <span class="row"><a class="text-white" href="#tentang_kami">Profil</a></span>
                            <span class="row"><a class="text-white" href="#kontak_kami">Team</a></span>
                            <span class="row"><a class="text-white" href="#karir">Visi & Misi</a></span>
                            <span class="row"><a class="text-white" href="#karir">Tugas Pokok</a></span>
                        </div>
                    </div>
                    <div class="col-auto"
                        style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;gap: 20px;width: 274px;height: 162px;">
                        <p class=""
                            style="font-weight: 700;font-size: 24px;line-height: 34px;letter-spacing: -0.24px;">
                            Supported by</p>
                        <div class="col-auto"
                            style="display: flex;flex-direction: column;align-items: flex-start;padding: 0px;gap: 4px;width: 274px;height: 108px;">
                            <span class="row"><a class="text-white" href="#tentang_kami">Pemerintah Kota Semarang
                                    2022</a></span>
                            <span class="row"><a class="text-white" href="#tentang_kami">Walikota
                                    Semarang</a></span>
                            <span class="row"><a class="text-white" href="#tentang_kami">Dinas Kesehatan Kota
                                    Semarang</a></span>
                            <span class="row"><a class="text-white" href="#tentang_kami">Nusantara Global
                                    Inovasi</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr style="margin-top: 10px; margin-bottom: 0px">
        <div class="d-flex justify-content-between align-items-center pt-3"
            style="background-color: #921D28;display: flex;flex-direction: row;padding: 20px 120px;width: 1440px;height: 60px;">
            <p class="text-white mb-0"
                style="font-weight: 300;font-size: 14px;line-height: 20px;letter-spacing: -0.24px;">&#169; NGINOVASI
                2022-V.1.1 All rights reserved.</p>
            <ul class="list-inline mb-0">
                <li class="list-inline-item"><a href="https://www.facebook.com/bus.trans.semarang/" target="_blank"
                        style="color: #ffffff">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                            viewBox="0 0 16 16" class="bi bi-facebook">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                            </path>
                        </svg></a>
                </li>
                <li class="list-inline-item"><a href="https://twitter.com/transsemarang" target="_blank"
                        style="color: #ffffff">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                            viewBox="0 0 16 16" class="bi bi-twitter">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z">
                            </path>
                        </svg></a>
                </li>
                <li class="list-inline-item"><a href="https://www.instagram.com/transsemarang" target="_blank"
                        style="color: #ffffff">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                            viewBox="0 0 16 16" class="bi bi-instagram">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                            </path>
                        </svg></a>
                </li>
                <li class="list-inline-item"><a href="https://www.youtube.com/channel/UCeaDUObnYHFxrdsea9zIP3w"
                        target="_blank" style="color: #ffffff">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-youtube" viewBox="0 0 16 16">
                            <path
                                d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                        </svg></a>
                </li>
            </ul>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.38/dist/sweetalert2.all.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"
        integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>

    <script>
        let formFile = document.getElementById('formFile');
        let fileResult = document.getElementById('fileResult');
        let submitReport = document.getElementById('submitReport');
        formFile.addEventListener('change', function() {
            if (formFile.files.length > 0) {
                const fileSize = formFile.files.item(0).size;
                const fileMb = fileSize / 1024 ** 2;
                if (fileMb >= 2) {
                    fileResult.innerHTML = "Please select a file less than 2MB.";
                    submitReport.disabled = true;
                } else {
                    fileResult.innerHTML = "Success, your file is " + fileMb.toFixed(1) + "MB.";
                    submitReport.disabled = false;
                }
            }
        });
    </script>
    <script>
        function sweet() {
            Swal.fire({
                title: 'Contact',
                html: 'CS: ' + '<a href="tel:1500094" target="_blank">1-5000-94</a>' + '| Whatsapp/SMS: ' +
                    '<a href="https://wa.me/+628112884447" target="_blank">0811-2884-447</a> ',
                imageUrl: 'assets/img/tsmgLogo32px-01.png',
                imageWidth: 100,
                imageHeight: 100,
                imageAlt: 'Custom image',
            })
        }
    </script>
    <script>
        var map = L.map('map').setView([-6.996667, 110.416664], 13);
        var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 20,
            zoomControl: true,
            attribution: '&copy; Trans Semarang | <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'

        }).addTo(map);
    </script>
</body>

</html>
