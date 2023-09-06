<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="author" content="One Stop Propery - Management">
    <meta name="description"
        content="Temukan rumah impian Anda atau jual properti Anda dengan cepat dan mudah menggunakan aplikasi web kami. Jelajahi berbagai properti, hubungi penjual secara langsung, dan ajukan penawaran.">
    <meta name="keywords"
        content="iklankanpropertimu, denganonestopproperty, onestoproperty, onestopproperty, onestopproperties,AllYourPropertyNeeds,RumahImpian,propertiindonesia,realestateindonesia,jualbelipropertiindonesia,realestateindonesia, propertyforsale, sellproperti, iklanproperti" />
    <meta name="copyright" content="One Stop Propery - Management">
    <meta name="url" content="https://onestoproperty.com">
    <meta name="identifier-URL" content="https://onestoproperty.com">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id="></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', '');
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id="></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', '');
    </script>



    <!-- Font Imports -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=DM+Serif+Display&display=swap"
        rel="stylesheet">

    <!-- Core Style -->
    <link rel="stylesheet" href="{!! asset('style.css') !!}">

    <!-- Font Icons -->
    <link rel="stylesheet" href="{!! asset('css/font-icons.css') !!}">

    <!-- Plugins/Components CSS -->
    <link rel="stylesheet" href="{!! asset('css/swiper.css') !!}">

    <!-- Niche Demos -->
    <link rel="stylesheet" href="{!! asset('landing-2/landing-2.css') !!}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{!! asset('css/custom.css') !!}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Document Title
 ============================================= -->
    <title>
        @if (View::hasSection('title'))
            @yield('title')
        @else
            Home
        @endif
        | One Stop Property
    </title>
    <!-- FAVICON AND TOUCH ICONS -->
    <link rel="icon" href="{!! asset('osp/Asset6@3x.png') !!}" type="image/png">
    <link rel="apple-touch-icon" sizes="152x152" href="{!! asset('osp/Asset6@3x.png') !!}">
    <link rel="apple-touch-icon" sizes="120x120" href="{!! asset('osp/Asset6@3x.png') !!}">
    <link rel="apple-touch-icon" sizes="76x76" href="{!! asset('osp/Asset6@3x.png') !!}">

    <meta name="og:title" property="og:title"
        content="@if (View::hasSection('title')) @yield('title')@else Home @endif | One Stop Property" />
    <meta name="og:url" property="og:url" content="https://onestoproperty.com" />
    <meta name="og:type" property="og:type" content="website" />
    <meta name="og:image" property="og:image" content="{!! asset('cover-tag.png') !!}" />
    <meta name="og:description" property="og:description"
        content="Temukan rumah impian Anda atau jual properti Anda dengan cepat dan mudah menggunakan aplikasi web kami. Jelajahi berbagai properti, hubungi penjual secara langsung, dan ajukan penawaran." />
    <meta name="twitter:card"
        content="@if (View::hasSection('title')) @yield('title')@else Home @endif | One Stop Property" />
    <meta name="twitter:title" property="og:title"
        content="@if (View::hasSection('title')) @yield('title')@else Home @endif | One Stop Property" />
    <meta name="twitter:url" property="og:url" content="https://onestoproperty.com" />
    <meta name="twitter:type" property="og:type" content="website" />
    <meta name="twitter:image" property="og:image" content="{!! asset('cover-tag.png') !!}" />
    <meta name="twitter:description" property="og:description"
        content="Temukan rumah impian Anda atau jual properti Anda dengan cepat dan mudah menggunakan aplikasi web kami. Jelajahi berbagai properti, hubungi penjual secara langsung, dan ajukan penawaran." />
    <link rel="canonical" href="https://onestoproperty.com/" />
    <link rel="shortcut icon" href=" {!! asset('osp/Asset6@3x.png') !!}" type="image/png" sizes="64x64" />
    <meta name="og:email" content="info@onestoproperty.com" />
    <meta name="og:phone_number" content="081262845980" />
    <meta name="og:latitude" content="-6.1465558" />
    <meta name="og:longitude" content="106.7843094" />
    <meta name="og:street-address" content="Jl Pasar 1, Bunga Asoka" />
    <meta name="og:locality" content="Medan" />
    <meta name="og:region" content="ID" />
    <meta name="og:postal-code" content="11480" />
    <meta name="og:country-name" content="Indonesia" />

</head>

<body class="stretched">

    <!-- Document Wrapper
 ============================================= -->
    <div id="wrapper">

        <div class="position-absolute vh-100 vw-100 top-0 start-0 overflow-hidden">
            <img src="{!! asset('landing-2/images/hero-bg.svg') !!}" alt="onestoproperty " class="hero-bg">
        </div>
        <!-- Header
  ============================================= -->
        <header id="header" class="border-bottom-0 no-sticky transparent-header header-custom-size">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">

                        <!-- Logo
      ============================================= -->
                        <div id="logo" class="me-lg-5">
                            <a href="#"><img src="{!! asset('osp/Asset1@3x.png') !!}"
                                    alt="onestoproperty OneStoProperty Logo" class="py-3"></a>
                        </div><!-- #logo end -->

                        <div class="header-misc">

                            <!-- Top Search
       ============================================= -->
                            <a href="https://s.id/yukIklankan" target="_blank"
                                class="button bg-white rounded-pill text-dark h-shadow-sm box-shadow">Iklankan sekarang
                                yuk?
                                <i class="bi-arrow-right me-0 ms-1"></i></a>

                        </div>

                        <div class="primary-menu-trigger">
                            <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
                                <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
                            </button>
                        </div>

                        <!-- Primary Navigation
      ============================================= -->
                        <nav class="primary-menu me-lg-auto">

                            <ul class="menu-container">
                                <li class="menu-item"><a class="menu-link" href="/">
                                        <div>Tentang Kami</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#FAQ">
                                        <div>Cara Iklan</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="/">
                                        <div>Layanan</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="/">
                                        <div>Properti</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#FAQ">
                                        <div>FAQ</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="/">
                                        <div>Laporkan Kendala</div>
                                    </a></li>
                            </ul>

                        </nav><!-- #primary-menu end -->

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->

        <!-- Content
  ============================================= -->
        <section id="content" class="bg-transparent">
            <div class="content-wrap overflow-visible pb-0">

                <div class="position-relative">
                    <div class="section-1 mb-md-6">
                        <div class="container">
                            <div class="row col-mb-50">
                                <div class="col-lg-5">
                                    <h1 class="display-4 fw-bold">Iklankan properti kamu bersama <span
                                            class="circle-draw"><span>OneStopProperty</span><svg
                                                xmlns="http://www.w3.org/2000/svg" width="510" height="119"
                                                viewBox="0 0 510 119">
                                                <path
                                                    d="M98.269,102.723c191.518,50.4,433.149-14.254,403.627-69.23C469.212-.827,218,3,94,25.5S-30.549,100.9,109.5,115c138.587,5.83,313.427-3.644,362.5-34.5,30.5-19.177,82.988-57.915-47-74.937"
                                                    transform="translate(-0.645 -3.32)" fill="none"
                                                    stroke="var(--cnvs-themecolor)" stroke-linecap="round"
                                                    stroke-width="4">
                                            </svg></span>.
                                    </h1>
                                    <p>Jangkau lebih luas dan tepat sasaran calon pembeli yang potensial untuk listing
                                        properti Anda.</p>
                                    <a href="/"
                                        class="button button-small button-light button-border border-color h-bg-color rounded-pill text-dark m-0">Lihat
                                        properti<i class="bi-arrow-right me-0 ms-1"></i></a>
                                </div>
                                <div class="col-lg-7">
                                    <img src="{!! asset('osp/sales-buyer.png') !!}" alt="onestoproperty Image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clear mt-5 mt-lg-0"></div>

                    <div class="section-2 mt-5 mt-lg-0">
                        <div class="container p-4 p-sm-5 p-md-6 rounded-6"
                            style="background: linear-gradient( to bottom left, rgba(255, 224, 54, .3), rgba(216, 220, 232, .5) 70% );">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h1 class="display-5 fw-bold lh-base mb-5">Jadilah bagian dari <span
                                            class="circle-draw"><span>OneStopProperty</span><svg
                                                xmlns="http://www.w3.org/2000/svg" width="510" height="119"
                                                viewBox="0 0 510 119.584">
                                                <path
                                                    d="M98.269,102.723c191.518,50.4,433.149-14.254,403.627-69.23C469.212-.827,218,3,94,25.5S-30.549,100.9,109.5,115c138.587,5.83,313.427-3.644,362.5-34.5,30.5-19.177,82.988-57.915-47-74.937"
                                                    transform="translate(-0.645 -3.32)" fill="none"
                                                    stroke="var(--cnvs-themecolor)" stroke-linecap="round"
                                                    stroke-width="4">
                                            </svg></span>.</h1>
                                    <p class="mb-5">Dapatkan manfaat beriklan disini. Nikmati layanan iklan dengan
                                        lebih hemat, jangkauan luas dan tepat sasaran.</p>
                                    <div class="row align-items-center flex-row mt-4 gx-5 op-07">
                                        <div class="col"><span
                                                style="font-size:2.5rem; font-weight:800;">250+</span><br><span>Penjual
                                                Beriklan</span>
                                        </div>
                                        <div class="col"><span
                                                style="font-size:2.5rem; font-weight:800;">364+</span><br><span>Properti
                                                Tergabung</span>
                                        </div>
                                        <div class="col"><span
                                                style="font-size:2.5rem; font-weight:800;">9/10</span><br><span>Tingkat
                                                Kepuasan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-scroll d-none d-lg-block">
                        <div class="section-sticky">
                            <div class="container">
                                <div class="row justify-content-end">
                                    <div class="col-md-7">
                                        <div class="position-relative">
                                            <img src="{!! asset('osp/sales-buyer.png') !!}" alt="onestoproperty Image"
                                                class="position-relative op-0">
                                            <img src="{!! asset('landing-2/images/hero-iphone-2.png') !!}" alt="onestoproperty Image"
                                                width="220" class="parallax position-absolute mb-5"
                                                style="right: 0; bottom: -50px; opacity: 0;"
                                                data-200-start="transform: translate(0px, 0px); opacity: 0;"
                                                data-top-bottom="transform: translate(-260px, -60px); opacity: 1;">
                                            <img src="{!! asset('landing-2/images/hero-iphone.png') !!}" alt="onestoproperty Image"
                                                width="220" class="parallax position-absolute mb-5"
                                                style="right: 0; bottom: -60px;"
                                                data-0="transform: translate(0px, 0px) scale(1); bottom: -60px;"
                                                data-top-bottom="transform: translate(-60px, 60px) scale(1.3); bottom: 63px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container py-lg-6 mw-md mt-5">

                    <div class="text-center mb-lg-6">
                        <h2 class="mb-1 display-6 fw-bold">Kenalan dengan <span class="circle-draw"><span>tim
                                    kami</span><svg xmlns="http://www.w3.org/2000/svg" width="510" height="119"
                                    viewBox="0 0 510 119">
                                    <path
                                        d="M98.269,102.723c191.518,50.4,433.149-14.254,403.627-69.23C469.212-.827,218,3,94,25.5S-30.549,100.9,109.5,115c138.587,5.83,313.427-3.644,362.5-34.5,30.5-19.177,82.988-57.915-47-74.937"
                                        transform="translate(-0.645 -3.32)" fill="none"
                                        stroke="var(--cnvs-themecolor)" stroke-linecap="round" stroke-width="4">
                                </svg></span>
                            dulu</h2>
                    </div>

                    <div class="clear"></div>

                    <div class="overflow-hidden">
                        <div class="row gutter-custom justify-content-center" style="--custom-gutter: 80px;">
                            <div class="col-sm-6">
                                <div class="card border-0">
                                    <img src="https://ospcairns.au/assets/images/photos/why-us.png"
                                        alt="onestoproperty card img" class="rounded-5 mb-3">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card border-0">
                                    <div class="card-body">
                                        <h1 class="text-transform-none fw-semibold h1 mb-3">Harus di
                                            <span class="circle-draw"><span>OneStopProperty?</span><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="510" height="119"
                                                    viewBox="0 0 510 119">
                                                    <path
                                                        d="M98.269,102.723c191.518,50.4,433.149-14.254,403.627-69.23C469.212-.827,218,3,94,25.5S-30.549,100.9,109.5,115c138.587,5.83,313.427-3.644,362.5-34.5,30.5-19.177,82.988-57.915-47-74.937"
                                                        transform="translate(-0.645 -3.32)" fill="none"
                                                        stroke="var(--cnvs-themecolor)" stroke-linecap="round"
                                                        stroke-width="4">
                                                </svg></span>
                                        </h1>
                                        <p class="mb-4">Fokus kami adalah memberikan hasil terbaik untuk Anda - tepat
                                            sasaran, harga yang tepat, dan pengalaman untuk mendapatkan hasil terbaik
                                            untuk Anda.
                                            <br><br>
                                            Diskusi yang profesional, terbuka dan transparan, pelayanan kelas satu dan
                                            selalu berupaya mendapatkan solusi terbaik. Nilai-nilai bisnis keluarga,
                                            komitmen bisnis keluarga.
                                            <br><br>

                                            Kami telah menjadi penduduk lokal sejak tahun 1915, dan dari generasi ke
                                            generasi… kami adalah agen lokal yang tepercaya, bereputasi, dan
                                            berpengalaman.
                                            <br><br>

                                            Kita memperlakukan orang lain sebagaimana kita ingin mereka memperlakukan
                                            kita.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section my-0 bg-transparent">
                    <div class="container py-lg-3">
                        <div class="text-center mb-lg-6">
                            <h2 class="mb-1 display-5 fw-bold">Harga? Sangat <span
                                    class="circle-draw"><span>Fleksible</span><svg xmlns="http://www.w3.org/2000/svg"
                                        width="510" height="119" viewBox="0 0 510 119">
                                        <path
                                            d="M98.269,102.723c191.518,50.4,433.149-14.254,403.627-69.23C469.212-.827,218,3,94,25.5S-30.549,100.9,109.5,115c138.587,5.83,313.427-3.644,362.5-34.5,30.5-19.177,82.988-57.915-47-74.937"
                                            transform="translate(-0.645 -3.32)" fill="none"
                                            stroke="var(--cnvs-themecolor)" stroke-linecap="round" stroke-width="4">
                                    </svg></span></h2>
                        </div>
                        <div class="clear mb-4"></div>
                        <div class="row justify-content-center gy-5" style="--bs-gutter-x: 60px">
                            <div class="col-xl-5 col-lg-6">
                                <div class="card border-0 bg-color rounded-6 pt-0">
                                    <div class="card-body text-center p-5 pt-0">
                                        <i class="bi-person h2 m-0 bg-white rounded-circle icon-stacked text-center"
                                            style="transform: translateY(-32px);"></i>
                                        <h2 class="text-transform-none fw-bold fs-2 mb-0">Termurah</h2>
                                        <p class="">Untuk individual</p>
                                        <div
                                            class="bg-white p-2 d-flex justify-content-center align-items-center rounded text-start">
                                            <h3 class="mb-0 display-3 font-secondary">Rp23.5K</h3>
                                            <div class="ms-3">
                                                <div class="mb-0 h6 fw-semibold lh-base">per hari</div>
                                                <small class="mb-0 op-08 lh-base" style="font-size: 12px;">dengan
                                                    detail penargetan
                                                    terbaru.</small>
                                            </div>
                                        </div>
                                        <div class="small op-07 mt-2">atau Rp705.000 per bulan</div>
                                        <div
                                            class="text-start my-5 d-flex flex-column justify-content-center align-items-center text-start">
                                            <div>
                                                <h4 class="mb-3 h6 fw-medium"><i
                                                        class="bi-check-circle-fill me-2"></i> Estimasi jangkauan: 150
                                                    -
                                                    500
                                                    per hari
                                                </h4>
                                                <h4 class="mb-3 h6 fw-medium"><i
                                                        class="bi-check-circle-fill me-2"></i> Umur target: 35 - 55
                                                    tahun</h4>
                                                <h4 class="h6 fw-medium"><i class="bi-check-circle-fill me-2"></i>
                                                    Lokasi target: 4 wilayah Indonesia & 2 <i>abroad</i></h4>
                                            </div>
                                        </div>
                                        <a href="https://s.id/yukIklankan" target="_blank"
                                            class="button button-xlarge bg-white text-dark px-5 py-3 w-100 rounded-pill h-op-09 m-0"
                                            style=" white-space: normal;">Pesan Iklan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6">
                                <div class="card border-0 bg-color rounded-6 pt-0">
                                    <div class="card-body text-center p-5 pt-0">
                                        <i class="bi-person h2 m-0 bg-white rounded-circle icon-stacked text-center"
                                            style="transform: translateY(-32px);"></i>
                                        <h2 class="text-transform-none fw-bold fs-2 mb-0">Mahal?</h2>
                                        <p class="">Untuk developer ataupun team</p>
                                        <div
                                            class="bg-white p-2 d-flex justify-content-center align-items-center rounded text-start">
                                            <h3 class="mb-0 display-3 font-secondary">Rp175K</h3>
                                            <div class="ms-3">
                                                <div class="mb-0 h6 fw-semibold lh-base">per hari</div>
                                                <small class="mb-0 op-08 lh-base" style="font-size: 12px;">dengan
                                                    detail penargetan
                                                    terbaru.</small>
                                            </div>
                                        </div>
                                        <div class="small op-07 mt-2">atau Rp5.250.000 per bulan</div>
                                        <div
                                            class="text-start my-5 d-flex flex-column justify-content-center align-items-center text-start">
                                            <div>
                                                <h4 class="mb-3 h6 fw-medium"><i
                                                        class="bi-check-circle-fill me-2"></i> Estimasi jangkauan: 800
                                                    -
                                                    2.500
                                                    per hari
                                                </h4>
                                                <h4 class="mb-3 h6 fw-medium"><i
                                                        class="bi-check-circle-fill me-2"></i> Umur target: 35 - 55
                                                    tahun</h4>
                                                <h4 class="h6 fw-medium"><i class="bi-check-circle-fill me-2"></i>
                                                    Lokasi target: 6 wilayah Indonesia & 4 <i>abroad</i></h4>
                                            </div>
                                        </div>
                                        <a href="https://s.id/yukIklankan" target="_blank"
                                            class="button button-xlarge bg-white text-dark px-5 py-3 w-100 rounded-pill h-op-09 m-0"
                                            style=" white-space: normal;">Pesan Iklan</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-9 mt-lg-6" id="FAQ">
                                <h2 class="mb-5 display-6 fw-bold">FAQs (Frequently Asked Questions)</h2>
                                <div class="row">
                                    <div class="col-lg-6 mt-lg-2">
                                        <div class="px-lg-6 p-5 rounded"
                                            style="background: linear-gradient( to bottom left, rgba(255, 224, 54, .15), rgba(216, 220, 232, .3) 70% );">
                                            <div class="toggle toggle-lg py-4 border-bottom mb-0">
                                                <div class="toggle-header align-items-center">
                                                    <div class="toggle-title fw-semibold">
                                                        Apa itu OneStopProperty?
                                                    </div>
                                                    <div class="toggle-icon">
                                                        <i class="toggle-closed bi bi-plus-circle fs-4 op-05"></i>
                                                        <i class="toggle-open bi bi-dash-circle fs-4"></i>
                                                    </div>
                                                </div>
                                                <div class="toggle-content fs-6">Agensi marketing properti
                                                    OneStopProperty
                                                    adalah perusahaan yang membantu mengiklankan properti pemilik
                                                    properti/marketing properti untuk menjual atau menyewakan properti
                                                    mereka.
                                                    Agensi ini menyediakan berbagai layanan, seperti pemasaran properti
                                                    melalui
                                                    periklanan, dan aset.
                                                </div>
                                            </div>

                                            <div class="toggle toggle-lg py-4 border-bottom mb-0">
                                                <div class="toggle-header align-items-center">
                                                    <div class="toggle-title fw-semibold">
                                                        Apa keuntungan menggunakan layanan OneStopProperty?
                                                    </div>
                                                    <div class="toggle-icon">
                                                        <i class="toggle-closed bi bi-plus-circle fs-4 op-05"></i>
                                                        <i class="toggle-open bi bi-dash-circle fs-4"></i>
                                                    </div>
                                                </div>
                                                <div class="toggle-content fs-6">
                                                    Ada beberapa keuntungan menggunakan agensi marketing properti,
                                                    antara lain:
                                                    <br>
                                                    <ol>
                                                        <li>Menjual atau menyewakan properti dengan lebih cepat dan
                                                            mudah.</li>
                                                        <li>Mendapatkan harga yang lebih baik.</li>
                                                        <li>Mempermudah proses transaksi properti.</li>
                                                    </ol>
                                                </div>
                                            </div>

                                            <div class="toggle toggle-lg py-4 border-bottom mb-0">
                                                <div class="toggle-header align-items-center">
                                                    <div class="toggle-title fw-semibold">
                                                        Berapa biaya menggunakan periklanan OneStopProperty?
                                                    </div>
                                                    <div class="toggle-icon">
                                                        <i class="toggle-closed bi bi-plus-circle fs-4 op-05"></i>
                                                        <i class="toggle-open bi bi-dash-circle fs-4"></i>
                                                    </div>
                                                </div>
                                                <div class="toggle-content fs-6">Biaya periklanan menggunakan
                                                    OneStopProperty
                                                    bervariasi tergantung pada pemilik properti/marketing properti,
                                                    dimulai dari
                                                    harga Rp.23.500 /hari nya hingga ke harga Rp.175.000 /hari dengan
                                                    <i>tim
                                                        research</i> yang memiliki pasar target yang terarah dan tepat
                                                    sasaran.
                                                </div>
                                            </div>
                                            <div class="toggle toggle-lg py-4 border-bottom mb-0">
                                                <div class="toggle-header align-items-center">
                                                    <div class="toggle-title fw-semibold">
                                                        Apa saja yang perlu disiapkan untuk menggunakan jasa layanan
                                                        OneStopProperty?
                                                    </div>
                                                    <div class="toggle-icon">
                                                        <i class="toggle-closed bi bi-plus-circle fs-4 op-05"></i>
                                                        <i class="toggle-open bi bi-dash-circle fs-4"></i>
                                                    </div>
                                                </div>
                                                <div class="toggle-content fs-6">
                                                    Beberapa dokumen yang perlu disiapkan untuk menggunakan agensi
                                                    marketing
                                                    properti:

                                                    <ol>
                                                        <li>Sertifikat kepemilikan properti.</li>
                                                        <li>Sertifikat tanah.</li>
                                                        <li>Izin mendirikan bangunan (IMB).</li>
                                                        <li>Surat keterangan bebas banjir.</li>
                                                        <li>Surat keterangan bebas sengketa.</li>
                                                        <li>Gambar detail dan jelas dari properti</li>
                                                        <li>Kontak detail pemilik/marketing properti</li>
                                                    </ol>
                                                </div>
                                            </div>
                                            <div class="toggle toggle-lg py-4 border-bottom mb-0">
                                                <div class="toggle-header align-items-center">
                                                    <div class="toggle-title fw-semibold">
                                                        Metode pembayaran apa saja yang tersedia di OneStopProperty?
                                                    </div>
                                                    <div class="toggle-icon">
                                                        <i class="toggle-closed bi bi-plus-circle fs-4 op-05"></i>
                                                        <i class="toggle-open bi bi-dash-circle fs-4"></i>
                                                    </div>
                                                </div>
                                                <div class="toggle-content fs-6">
                                                    OVO, Bank Transfer BCA, dan Dana
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-lg-2">
                                        <div class="px-lg-6 p-5 rounded"
                                            style="background: linear-gradient( to bottom left, rgba(255, 224, 54, .15), rgba(216, 220, 232, .3) 70% );">
                                            <div class="toggle toggle-lg py-4 border-bottom mb-0">
                                                <div class="toggle-header align-items-center">
                                                    <div class="toggle-title fw-semibold">
                                                        Bagaimana prosedur menggunakan layanan OneStopProperty?
                                                    </div>
                                                    <div class="toggle-icon">
                                                        <i class="toggle-closed bi bi-plus-circle fs-4 op-05"></i>
                                                        <i class="toggle-open bi bi-dash-circle fs-4"></i>
                                                    </div>
                                                </div>
                                                <div class="toggle-content fs-6">
                                                    <ol>
                                                        <li>Daftar ke website melalui form yang tersedia di
                                                            OneStopProperty</li>
                                                        <li>Admin akan melakukan konfirmasi/verifikasi data melalui
                                                            Telpon
                                                            Seluler/Whatsapp</li>
                                                        <li>Lakukan pembayaran melalui provider yang tersedia dengan
                                                            menggunakan
                                                            nomor invoice yang terkirim ke E-mail ataupun Whatsapp.</li>
                                                        <li>OneStopProperty akan mengiklankan properti kamu.</li>
                                                    </ol>
                                                </div>
                                            </div>
                                            <div class="toggle toggle-lg py-4 border-bottom mb-0">
                                                <div class="toggle-header align-items-center">
                                                    <div class="toggle-title fw-semibold">
                                                        Bagaimana mekanisme untuk melanjutkan langganan di
                                                        OneStopProperty?
                                                    </div>
                                                    <div class="toggle-icon">
                                                        <i class="toggle-closed bi bi-plus-circle fs-4 op-05"></i>
                                                        <i class="toggle-open bi bi-dash-circle fs-4"></i>
                                                    </div>
                                                </div>
                                                <div class="toggle-content fs-6">
                                                    Seminggu dan maksimal sehari sebelum masa berlangganan habis, kamu
                                                    akan
                                                    menerima reminder perpanjangan melalui email & Whatsapp yang
                                                    terdaftar. Jika
                                                    kamu ingin melanjutkan masa berlangganan, silakan melakukan transfer
                                                    ke
                                                    rekening / e-wallet Seakun dengan nominal yang diinformasikan.
                                                </div>
                                            </div>
                                            <div class="toggle toggle-lg py-4 border-bottom mb-0">
                                                <div class="toggle-header align-items-center">
                                                    <div class="toggle-title fw-semibold">
                                                        Bagaimana bila ada kendala ketika proses pembayaran?
                                                    </div>
                                                    <div class="toggle-icon">
                                                        <i class="toggle-closed bi bi-plus-circle fs-4 op-05"></i>
                                                        <i class="toggle-open bi bi-dash-circle fs-4"></i>
                                                    </div>
                                                </div>
                                                <div class="toggle-content fs-6">
                                                    Bila kamu mengalami kendala dalam melakukan proses pembayaran,
                                                    seperti:
                                                    tidak mendapat konfirmasi dan follow up. Mohon isi form pada <a
                                                        href="#">link ini</a>. Kami akan segera menghubungi kamu
                                                    maksimal
                                                    dalam 1x24 jam.
                                                </div>
                                            </div>
                                            <div class="toggle toggle-lg py-4 mb-0">
                                                <div class="toggle-header align-items-center">
                                                    <div class="toggle-title fw-semibold">
                                                        Apa yang harus dilakukan bila layanan mengalami masalah?
                                                    </div>
                                                    <div class="toggle-icon">
                                                        <i class="toggle-closed bi bi-plus-circle fs-4 op-05"></i>
                                                        <i class="toggle-open bi bi-dash-circle fs-4"></i>
                                                    </div>
                                                </div>
                                                <div class="toggle-content fs-6">
                                                    Bila akun kamu mengalami masalah, seperti: telah melakukan
                                                    pembayaran namun
                                                    akun berubah menjadi free kembali. Mohon isi form pada <a
                                                        href="#">link ini</a>. Kami akan segera menghubungi kamu
                                                    maksimal
                                                    1x24 jam.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="section bg-transparent my-0 py-0 py-lg-5">
                    <div class="container text-center">
                        <h2 class="display-4 font-secondary position-relative">
                            <svg class="promo-bg" xmlns="http://www.w3.org/2000/svg" width="612.879"
                                height="132.494" viewBox="0 0 612.879 132.494">
                                <g transform="translate(-9.868 -173.609)">
                                    <path d="M523.081,297.591l28,6.513,1.574,14.21S522.624,297.508,523.081,297.591Z"
                                        transform="translate(205.206 -190.859) rotate(20)" fill="#437ad4"
                                        opacity="0.96">
                                        <path
                                            d="M517.55,299.672l13.542,25.355-9.654,10.545S517.311,299.273,517.55,299.672Z"
                                            transform="translate(206.812 -190.875) rotate(20)" fill="#437ad4"
                                            opacity="0.96">
                                            <path
                                                d="M518.385,283.755l14.694-6.054,5.27,5.892S518.152,283.865,518.385,283.755Z"
                                                transform="translate(204.555 -185.345) rotate(20)" fill="#437ad4"
                                                opacity="0.96">
                                                <g transform="translate(29 -110.764)" opacity="0.735">
                                                    <path
                                                        d="M277.7,395.9a2.419,2.419,0,1,1-1.148,3.223A2.419,2.419,0,0,1,277.7,395.9Z"
                                                        fill="#ffe13e">
                                                        <path
                                                            d="M270.866,381.5a2.419,2.419,0,1,1-1.148,3.224A2.419,2.419,0,0,1,270.866,381.5Z"
                                                            fill="#ffe13e">
                                                            <path
                                                                d="M264.029,367.1a2.42,2.42,0,1,1-1.148,3.224A2.421,2.421,0,0,1,264.029,367.1Z"
                                                                fill="#ffe13e">
                                                                <path
                                                                    d="M257.192,352.7a2.419,2.419,0,1,1-1.148,3.223A2.419,2.419,0,0,1,257.192,352.7Z"
                                                                    fill="#ffe13e">
                                                                    <path
                                                                        d="M250.355,338.293a2.42,2.42,0,1,1-1.148,3.223A2.419,2.419,0,0,1,250.355,338.293Z"
                                                                        fill="#ffe13e">
                                                                        <path
                                                                            d="M290.232,389.952a2.42,2.42,0,1,1-1.149,3.223A2.419,2.419,0,0,1,290.232,389.952Z"
                                                                            fill="#ffe13e">
                                                                            <path
                                                                                d="M283.394,375.55a2.42,2.42,0,1,1-1.148,3.224A2.421,2.421,0,0,1,283.394,375.55Z"
                                                                                fill="#ffe13e">
                                                                                <path
                                                                                    d="M276.557,361.149a2.419,2.419,0,1,1-1.148,3.223A2.42,2.42,0,0,1,276.557,361.149Z"
                                                                                    fill="#ffe13e">
                                                                                    <path
                                                                                        d="M269.72,346.747a2.42,2.42,0,1,1-1.148,3.223A2.419,2.419,0,0,1,269.72,346.747Z"
                                                                                        fill="#ffe13e">
                                                                                        <path
                                                                                            d="M262.883,332.346a2.419,2.419,0,1,1-1.148,3.223A2.419,2.419,0,0,1,262.883,332.346Z"
                                                                                            fill="#ffe13e">
                                                                                            <path
                                                                                                d="M302.76,384a2.42,2.42,0,1,1-1.148,3.224A2.419,2.419,0,0,1,302.76,384Z"
                                                                                                fill="#ffe13e">
                                                                                                <path
                                                                                                    d="M295.923,369.6a2.419,2.419,0,1,1-1.148,3.223A2.419,2.419,0,0,1,295.923,369.6Z"
                                                                                                    fill="#ffe13e">
                                                                                                    <path
                                                                                                        d="M289.085,355.2a2.42,2.42,0,1,1-1.147,3.223A2.42,2.42,0,0,1,289.085,355.2Z"
                                                                                                        fill="#ffe13e">
                                                                                                        <path
                                                                                                            d="M282.249,340.8a2.419,2.419,0,1,1-1.148,3.223A2.419,2.419,0,0,1,282.249,340.8Z"
                                                                                                            fill="#ffe13e">
                                                                                                            <path
                                                                                                                d="M275.411,326.4a2.419,2.419,0,1,1-1.148,3.223A2.42,2.42,0,0,1,275.411,326.4Z"
                                                                                                                fill="#ffe13e">
                                                                                                                <path
                                                                                                                    d="M315.288,378.057a2.419,2.419,0,1,1-1.148,3.223A2.419,2.419,0,0,1,315.288,378.057Z"
                                                                                                                    fill="#ffe13e">
                                                                                                                    <path
                                                                                                                        d="M308.451,363.655a2.419,2.419,0,1,1-1.148,3.223A2.419,2.419,0,0,1,308.451,363.655Z"
                                                                                                                        fill="#ffe13e">
                                                                                                                        <path
                                                                                                                            d="M301.614,349.254a2.419,2.419,0,1,1-1.148,3.223A2.418,2.418,0,0,1,301.614,349.254Z"
                                                                                                                            fill="#ffe13e">
                                                                                                                            <path
                                                                                                                                d="M294.777,334.852a2.419,2.419,0,1,1-1.148,3.223A2.419,2.419,0,0,1,294.777,334.852Z"
                                                                                                                                fill="#ffe13e">
                                                                                                                                <path
                                                                                                                                    d="M287.94,320.45a2.42,2.42,0,1,1-1.148,3.224A2.419,2.419,0,0,1,287.94,320.45Z"
                                                                                                                                    fill="#ffe13e">
                                                                                                                                    <path
                                                                                                                                        d="M327.816,372.109a2.419,2.419,0,1,1-1.148,3.223A2.42,2.42,0,0,1,327.816,372.109Z"
                                                                                                                                        fill="#ffe13e">
                                                                                                                                        <path
                                                                                                                                            d="M320.979,357.708a2.419,2.419,0,1,1-1.148,3.223A2.418,2.418,0,0,1,320.979,357.708Z"
                                                                                                                                            fill="#ffe13e">
                                                                                                                                            <path
                                                                                                                                                d="M314.142,343.306a2.419,2.419,0,1,1-1.148,3.223A2.419,2.419,0,0,1,314.142,343.306Z"
                                                                                                                                                fill="#ffe13e">
                                                                                                                                                <path
                                                                                                                                                    d="M307.3,328.9a2.419,2.419,0,1,1-1.148,3.224A2.419,2.419,0,0,1,307.3,328.9Z"
                                                                                                                                                    fill="#ffe13e">
                                                                                                                                                    <path
                                                                                                                                                        d="M300.468,314.5a2.419,2.419,0,1,1-1.148,3.223A2.419,2.419,0,0,1,300.468,314.5Z"
                                                                                                                                                        fill="#ffe13e">
                                                </g>
                                                <path
                                                    d="M310.395,171.614l-31.788-12.841.768-17.035s8.611,8.205,16.76,16.016C303.583,164.892,310.645,171.7,310.395,171.614Z"
                                                    transform="matrix(0.946, 0.326, -0.326, 0.946, -197.688, -46.01)"
                                                    fill="#ff5e5f" opacity="0.96">
                                                    <path
                                                        d="M326.343,164.5l-11.279-32.375,13.322-10.644S326.552,165.015,326.343,164.5Z"
                                                        transform="matrix(0.946, 0.326, -0.326, 0.946, -209.991, -43.829)"
                                                        fill="#ff5e5f" opacity="0.96">
                                                        <path
                                                            d="M317.452,197.985l-18.432,4.423-5.122-7.915S317.747,197.9,317.452,197.985Z"
                                                            transform="matrix(0.946, 0.326, -0.326, 0.946, -196.873, -62.447)"
                                                            fill="#ff5e5f" opacity="0.96">
                                </g>
                            </svg>
                            Tunggu apa lagi? Buktikan dengan OneStopProperty
                        </h2>
                        <a href="https://s.id/yukIklankan" target="_blank"
                            class="button button-xlarge px-5 rounded-pill text-dark bg-color h-op-09 mb-5">Ngiklan
                            Sekarang? #kitaBantuIklanin <i class="bi-arrow-right me-0 ms-1"></i></a>
                    </div>
                </div>

            </div>
        </section><!-- #content end -->

        <!-- Footer
  ============================================= -->
        <footer id="footer" class="bg-white">

            <div class="container">

                <!-- Footer Widgets
    ============================================= -->
                <div class="footer-widgets-wrap">

                    <div class="row col-mb-50">

                        <div class="col-md-4">
                            <div class="widget">

                                <img src="{!! asset('osp/Asset1@3x.png') !!}" alt="onestoproperty Image" class="footer-logo"
                                    height="60">

                                <p>Jangkau lebih luas dan tepat sasaran calon pembeli yang potensial untuk listing
                                    properti Anda.
                                </p>

                                <div>
                                    <a href="/facebook"
                                        class="social-icon border-color h-border-transparent h-bg-facebook">
                                        <i class="fa-brands fa-facebook-f"></i>
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>

                                    <a href="/instagram"
                                        class="social-icon border-color h-border-transparent h-bg-instagram">
                                        <i class="fa-brands fa-instagram"></i>
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>

                                    <a href="/linkedin"
                                        class="social-icon border-color h-border-transparent h-bg-linkedin">
                                        <i class="fa-brands fa-linkedin"></i>
                                        <i class="fa-brands fa-linkedin"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="col-6 col-md-2 ms-md-auto">
                            <div class="widget">

                                <h4 class="">Properti</h4>

                                <ul class="widget-li-noicon widget_links ms-0">
                                    <li><a href="#">Residence</a></li>
                                    <li><a href="#">Apartemen</a></li>
                                    <li><a href="#">Ruko</a></li>
                                    <li><a href="#">Rumah</a></li>
                                    <li><a href="#">Tanah</a></li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-6 col-md-2">
                            <div class="widget">

                                <h4 class="">Terms</h4>

                                <ul class="widget-li-noicon widget_links ms-0">
                                    <li><a href="#">Karir</a></li>
                                    <li><a href="#">Privacy &amp; Policy</a></li>
                                    <li><a href="#">Hubungi Kami</a></li>
                                </ul>

                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="widget">

                                <div id="gotoTop"
                                    class="bi bi-arrow-up bg-white box-shadow h-shadow-sm text-dark rounded-circle all-ts">
                                </div>

                                <p class="mb-0 mt-4 mt-md-5 text-smaller op-06">Copyrights &copy; 2023 All Rights
                                    Reserved by OneStopProperty Management.</p>

                            </div>
                        </div>

                    </div>

                </div><!-- .footer-widgets-wrap end -->

            </div>

        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
 ============================================= -->
    <!-- <div id="gotoTop" class="uil uil-angle-up"></div> -->

    <!-- JavaScripts
 ============================================= -->
    <script src="{!! asset('js/functions.js') !!}"></script>

    <!-- Parallax Script
 ============================================= -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js"></script>
    <script>
        var s = !SEMICOLON.Mobile.any() && skrollr.init({
            forceHeight: false
        });
    </script>

</body>

</html>
