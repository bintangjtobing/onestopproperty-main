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
            <img src="{!! asset('landing-2/images/hero-bg.svg') !!}" alt="" class="hero-bg">
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
                            <a href="#"><img src="{!! asset('osp/Asset1@3x.png') !!}" alt="OneStoProperty Logo"
                                    class="py-3"></a>
                        </div><!-- #logo end -->

                        <div class="header-misc">

                            <!-- Top Search
       ============================================= -->
                            <a href="#"
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
                                <li class="menu-item"><a class="menu-link" href="/">
                                        <div>Cara Iklan</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="/">
                                        <div>Layanan</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="/">
                                        <div>Testimoni</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="/">
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
                                    <a href="/"
                                        class="button button-small button-light button-border border-color h-bg-color rounded-pill text-dark m-0">Lihat
                                        Layanan <i class="bi-arrow-right me-0 ms-1"></i></a>
                                </div>
                                <div class="col-lg-7">
                                    <img src="{!! asset('osp/sales-buyer.png') !!}" alt="Image">
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
                                    <h1 class="display-5 fw-bold lh-base mb-5">Jadilah bagian dari<span
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
                                            <img src="{!! asset('osp/sales-buyer.png') !!}" alt="Image"
                                                class="position-relative op-0">
                                            <img src="{!! asset('landing-2/images/hero-iphone-2.png') !!}" alt="Image" width="220"
                                                class="parallax position-absolute mb-5"
                                                style="right: 0; bottom: -50px; opacity: 0;"
                                                data-200-start="transform: translate(0px, 0px); opacity: 0;"
                                                data-top-bottom="transform: translate(-260px, -60px); opacity: 1;">
                                            <img src="{!! asset('landing-2/images/hero-iphone.png') !!}" alt="Image" width="220"
                                                class="parallax position-absolute mb-5"
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
                        <h2 class="mb-1 display-6 fw-bold">All the <span class="circle-draw"><span>features</span><svg
                                    xmlns="http://www.w3.org/2000/svg" width="510" height="119"
                                    viewBox="0 0 510 119">
                                    <path
                                        d="M98.269,102.723c191.518,50.4,433.149-14.254,403.627-69.23C469.212-.827,218,3,94,25.5S-30.549,100.9,109.5,115c138.587,5.83,313.427-3.644,362.5-34.5,30.5-19.177,82.988-57.915-47-74.937"
                                        transform="translate(-0.645 -3.32)" fill="none"
                                        stroke="var(--cnvs-themecolor)" stroke-linecap="round" stroke-width="4">
                                </svg></span> you want</h2>
                        <h4 class="fw-normal">Professionally orchestrate plug-and-play action items.</h4>
                    </div>

                    <div class="clear"></div>

                    <div class="overflow-hidden">
                        <div class="row gutter-custom justify-content-center" style="--custom-gutter: 80px;">
                            <div class="col-sm-6">
                                <div class="card border-0">
                                    <img src="{!! asset('landing-2/images/services/3.jpg') !!}" alt="card img" class="rounded-5 mb-3">
                                    <div class="card-body">
                                        <h2 class="text-transform-none fw-semibold h5 mb-3">Powerful PlugIns</h2>
                                        <p class="mb-4">Powerful Layout with Responsive functionality that can be
                                            adapted.</p>
                                        <a href="#"
                                            class="button button-small button-light button-border border-color h-bg-color rounded-pill text-dark m-0">Learn
                                            More <i class="bi-arrow-right me-0 ms-1"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card border-0">
                                    <img src="{!! asset('landing-2/images/services/2.jpg') !!}" alt="card img" class="rounded-5 mb-3">
                                    <div class="card-body">
                                        <h2 class="text-transform-none fw-semibold h5 mb-3">eCommerce Integrated</h2>
                                        <p class="mb-4">Powerful Layout with Responsive functionality that can be
                                            adapted.</p>
                                        <a href="#"
                                            class="button button-small button-light button-border border-color h-bg-color rounded-pill text-dark m-0">Learn
                                            More <i class="bi-arrow-right me-0 ms-1"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card border-0">
                                    <img src="{!! asset('landing-2/images/services/1.jpg') !!}" alt="card img" class="rounded-5 mb-3">
                                    <div class="card-body">
                                        <h2 class="text-transform-none fw-semibold h5 mb-3">Social Media Integrated
                                        </h2>
                                        <p class="mb-4">Powerful Layout with Responsive functionality that can be
                                            adapted.</p>
                                        <a href="#"
                                            class="button button-small button-light button-border border-color h-bg-color rounded-pill text-dark m-0">Learn
                                            More <i class="bi-arrow-right me-0 ms-1"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card border-0">
                                    <img src="{!! asset('landing-2/images/services/4.jpg') !!}" alt="card img" class="rounded-5 mb-3">
                                    <div class="card-body">
                                        <h2 class="text-transform-none fw-semibold h5 mb-3">Pre-made Niche Demos</h2>
                                        <p class="mb-4">Powerful Layout with Responsive functionality that can be
                                            adapted.</p>
                                        <a href="#"
                                            class="button button-small button-light button-border border-color h-bg-color rounded-pill text-dark m-0">Learn
                                            More <i class="bi-arrow-right me-0 ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section sticky-top p-0 mb-0" style="overflow: visible;">
                    <div class="row g-0">
                        <div class="col-md-6 position-sticky m-0 vh-40 min-vh-md-100 top-0 z-1 overflow-hidden">
                            <!-- Sticky Image Target -->
                            <div id="list-example" class="w-100 h-100"
                                style="background: url('landing-2/images/sticky-section/video-poster.jpg') no-repeat center center / cover;">
                                <!-- List Item 1 -->
                                <a class="list-group-item active" href="#list-item-1">
                                    <div class="video-wrap no-placeholder">
                                        <video id="slide-video" poster="{!! asset('landing-2/images/sticky-section/video-poster.jpg') !!}" preload="auto" loop
                                            autoplay muted playsinline>
                                            <source src='landing-2/images/sticky-section/video.mp4' type='video/mp4'>
                                        </video>
                                    </div>
                                </a>

                                <!-- List Item 2 -->
                                <a class="list-group-item" href="#list-item-2">
                                    <div class="fslider position-absolute h-100 w-100 top-0 start-0" data-loop="true"
                                        data-pause="5000" data-animation="fade">
                                        <div class="flexslider h-100">
                                            <div class="slider-wrap">
                                                <div class="slide"
                                                    style="background: url('landing-2/images/sticky-section/2-1.jpg') center right; background-size: cover; height: 100% !important;">
                                                </div>
                                                <div class="slide"
                                                    style="background: url('landing-2/images/sticky-section/2-2.jpg') center right; background-size: cover; height: 100% !important;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <i
                                        class="bi-play-fill icon-stacked transform-ts bg-white h-bg-light rounded-circle text-dark h1 text-center ps-1 shadow z-9"></i>
                                </a>

                                <!-- List Item 3 -->
                                <a class="list-group-item" href="#list-item-3"
                                    style="background-image: url('landing-2/images/sticky-section/3.jpg');">
                                    <i
                                        class="bi-play-fill icon-stacked transform-ts bg-white h-bg-light rounded-circle text-dark h1 text-center ps-1 shadow"></i>
                                </a>

                                <!-- List Item 4 -->
                                <a class="list-group-item" href="#list-item-4"
                                    style="background-image: url('landing-2/images/sticky-section/1.jpg');">
                                    <i
                                        class="bi-play-fill icon-stacked transform-ts bg-white h-bg-light rounded-circle text-dark h1 text-center ps-1 shadow"></i>
                                </a>
                            </div>
                        </div>

                        <!-- List Item Content -->
                        <div class="col-md-6 list-group-content" data-bs-spy="scroll" data-bs-target="#list-example"
                            data-bs-offset="250">
                            <!-- List Item Content 1 -->
                            <div id="list-item-1" class="min-vh-md-100 py-5 py-md-6 bg-appstore dark">
                                <i class="bi-award display-4 mb-4 color"></i>
                                <h2 class="display-4 fw-normal font-secondary"><span class="nocolor op-05">Our main
                                        Priority is of-course </span>Quality<span>.</span></h2>
                                <p class="fs-5 fw-light op-07">Monotonectally extend go forward data for pandemic
                                    deliverables. Proactively benchmark open-source human capital whereas cutting-edge
                                    "outside the box".</p>
                                <div>
                                    <a href="#"
                                        class="button button-small button-light button-border border-color h-bg-color rounded-pill h-text-dark color op-08 h-op-1 m-0">learn
                                        more <i class="bi-arrow-right me-0 ms-1"></i></a>
                                </div>
                            </div>

                            <!-- List Item Content 2 -->
                            <div id="list-item-2" class="min-vh-md-100 py-5 py-md-6 bg-appstore dark">
                                <i class="bi-tools display-4 mb-4 color"></i>
                                <h2 class="display-4 fw-normal font-secondary"><span class="nocolor op-05">Easy</span>
                                    customization<span>.</span></h2>
                                <p class="fs-5 fw-light op-07">Monotonectally extend go forward data for pandemic
                                    deliverables. Proactively benchmark open-source human capital whereas cutting-edge
                                    "outside the box".</p>
                                <div>
                                    <a href="#"
                                        class="button button-small button-light button-border border-color h-bg-color rounded-pill h-text-dark color op-08 h-op-1 m-0">learn
                                        more <i class="bi-arrow-right me-0 ms-1"></i></a>
                                </div>
                            </div>

                            <!-- List Item Content 3 -->
                            <div id="list-item-3" class="min-vh-md-100 py-5 py-md-6 bg-appstore dark">
                                <i class="bi-people display-4 mb-4 color"></i>
                                <h2 class="display-4 fw-normal font-secondary"><span class="nocolor op-05">How we
                                        connect with your </span> customers<span>.</span></h2>
                                <p class="fs-5 fw-light op-07">Monotonectally extend go forward data for pandemic
                                    deliverables. Proactively benchmark open-source human capital whereas cutting-edge
                                    "outside the box".</p>
                                <div>
                                    <a href="#"
                                        class="button button-small button-light button-border border-color h-bg-color rounded-pill h-text-dark color op-08 h-op-1 m-0">learn
                                        more <i class="bi-arrow-right me-0 ms-1"></i></a>
                                </div>
                            </div>

                            <!-- List Item Content 4 -->
                            <div id="list-item-4" class="min-vh-md-100 py-5 py-md-6 bg-appstore dark">
                                <i class="bi-emoji-smile display-4 mb-4 color"></i>
                                <h2 class="display-4 fw-normal font-secondary"><span class="nocolor op-05">More than
                                    </span>60K+<span class="nocolor op-05"> Happy Customers</span><span>.</span></h2>
                                <p class="fs-5 fw-light op-07">Monotonectally extend go forward data for pandemic
                                    deliverables. Proactively benchmark open-source human capital whereas cutting-edge
                                    "outside the box".</p>
                                <div>
                                    <a href="#"
                                        class="button button-small button-light button-border border-color h-bg-color rounded-pill h-text-dark color op-08 h-op-1 m-0">learn
                                        more <i class="bi-arrow-right me-0 ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section my-0 bg-transparent">
                    <div class="container py-lg-5">
                        <div class="text-center mb-lg-6">
                            <h2 class="mb-1 display-5 fw-bold">Our Flexible <span
                                    class="circle-draw"><span>Pricing</span><svg xmlns="http://www.w3.org/2000/svg"
                                        width="510" height="119" viewBox="0 0 510 119">
                                        <path
                                            d="M98.269,102.723c191.518,50.4,433.149-14.254,403.627-69.23C469.212-.827,218,3,94,25.5S-30.549,100.9,109.5,115c138.587,5.83,313.427-3.644,362.5-34.5,30.5-19.177,82.988-57.915-47-74.937"
                                            transform="translate(-0.645 -3.32)" fill="none"
                                            stroke="var(--cnvs-themecolor)" stroke-linecap="round" stroke-width="4">
                                    </svg></span></h2>
                            <h4 class="fw-normal">Professionally orchestrate plug-and-play action items.</h4>
                        </div>
                        <div class="clear mb-4"></div>
                        <div class="row justify-content-center gy-5" style="--bs-gutter-x: 60px">
                            <div class="col-xl-5 col-lg-6">
                                <div class="card border-0 bg-color rounded-6 pt-0">
                                    <div class="card-body text-center p-5 pt-0">
                                        <i class="bi-person h2 m-0 bg-white rounded-circle icon-stacked text-center"
                                            style="transform: translateY(-32px);"></i>
                                        <h2 class="text-transform-none fw-bold fs-2 mb-0">Standard</h2>
                                        <p class="">For individuals and small projects.</p>
                                        <div
                                            class="bg-white p-2 d-flex justify-content-center align-items-center rounded text-start">
                                            <h2 class="mb-0 display-3 font-secondary">$11</h2>
                                            <div class="ms-3">
                                                <div class="mb-0 h6 fw-semibold lh-base">per month</div>
                                                <small class="mb-0 op-08 lh-base">with Lifetime free Updates</small>
                                            </div>
                                        </div>
                                        <div class="small op-07 mt-2">Or $110 per year</div>
                                        <div
                                            class="text-start my-5 d-flex flex-column justify-content-center align-items-center text-start">
                                            <div>
                                                <h4 class="mb-3 h6 fw-medium"><i
                                                        class="bi-check-circle-fill me-2"></i> Use free 30 Days with
                                                    pay</h4>
                                                <h4 class="mb-3 h6 fw-medium"><i
                                                        class="bi-check-circle-fill me-2"></i> Use it from anywhere
                                                </h4>
                                                <h4 class="mb-3 h6 fw-medium"><i
                                                        class="bi-check-circle-fill me-2"></i> All devices except
                                                    mobile</h4>
                                                <h4 class="h6 fw-medium"><i class="bi-check-circle-fill me-2"></i> For
                                                    individual person only</h4>
                                            </div>
                                        </div>
                                        <a href="#"
                                            class="button button-xlarge bg-white text-dark px-5 py-3 w-100 rounded-pill h-op-09 m-0"
                                            style=" white-space: normal;">Start your 30-Day Free Trial</a>
                                        <div class="small op-06 mt-2">No Credit-Card required upto 30days</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-5 col-lg-6">
                                <div class="card border-0 rounded-6 pt-0"
                                    style="background: linear-gradient( to bottom left, rgba(255, 224, 54, .3), rgba(216, 220, 232, .5) 70% );">
                                    <div class="card-body text-center p-5 pt-0">
                                        <i class="bi-credit-card-2-back h2 m-0 rounded-circle icon-stacked text-center bg-white text-dark"
                                            style="transform: translateY(-32px);"></i>
                                        <h2 class="text-transform-none fw-bold fs-2 mb-0">Business</h2>
                                        <p>For team work or organizations.</p>
                                        <div
                                            class="bg-white p-3 d-flex justify-content-center align-items-center rounded text-start">
                                            <h2 class="mb-0 h4 font-secondary">Standard features included, and...</h2>
                                        </div>
                                        <div class="small op-07 mt-2">Only Yearly Subscription accept</div>
                                        <div
                                            class="text-start my-5 py-3 d-flex flex-column justify-content-center align-items-center text-start">
                                            <div>
                                                <h4 class="mb-3 h6 fw-medium"><i
                                                        class="bi-check-circle-fill text-dark me-2"></i> Use it from
                                                    anywhere</h4>
                                                <h4 class="mb-3 h6 fw-medium"><i
                                                        class="bi-check-circle-fill text-dark me-2"></i> For all latest
                                                    devices</h4>
                                                <h4 class="mb-3 h6 fw-medium"><i
                                                        class="bi-check-circle-fill text-dark me-2"></i> Unlimited
                                                    users excess</h4>
                                                <h4 class="h6 fw-medium"><i
                                                        class="bi-check-circle-fill text-dark me-2"></i> Priority
                                                    support available</h4>
                                            </div>
                                        </div>
                                        <a href="#"
                                            class="button button-xlarge button-dark h-bg-dark px-5 py-3 w-100 rounded-pill h-op-09 m-0">Contact
                                            Us</a>
                                        <div class="small op-06 mt-2">Cancel Anytime &amp; Secured Payment</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-9 mt-lg-6">
                                <h2 class="mb-5 display-6 fw-bold">Pricing FAQs</h2>
                                <div class="px-lg-6 p-5 rounded"
                                    style="background: linear-gradient( to bottom left, rgba(255, 224, 54, .15), rgba(216, 220, 232, .3) 70% );">
                                    <div class="toggle toggle-lg py-4 border-bottom mb-0">
                                        <div class="toggle-header align-items-center">
                                            <div class="toggle-title fw-semibold">
                                                How will I get my Project after Subscribed?
                                            </div>
                                            <div class="toggle-icon">
                                                <i class="toggle-closed bi bi-plus-circle fs-4 op-05"></i>
                                                <i class="toggle-open bi bi-dash-circle fs-4"></i>
                                            </div>
                                        </div>
                                        <div class="toggle-content fs-6">Competently myocardinate sticky technology
                                            through competitive testing procedures. Progressively engineer customer
                                            directed e-services before frictionless scenarios. Objectively strategize
                                            next-generation web services for professional catalysts for change. Quickly
                                            productize clicks-and-mortar schemas for collaborative e-business.
                                            Dynamically customize user friendly leadership skills and interactive
                                            e-services. Objectively actualize virtual imperatives vis-a-vis enabled.
                                        </div>
                                    </div>

                                    <div class="toggle toggle-lg py-4 border-bottom mb-0">
                                        <div class="toggle-header align-items-center">
                                            <div class="toggle-title fw-semibold">
                                                Can I cancel anytime my Subscription?
                                            </div>
                                            <div class="toggle-icon">
                                                <i class="toggle-closed bi bi-plus-circle fs-4 op-05"></i>
                                                <i class="toggle-open bi bi-dash-circle fs-4"></i>
                                            </div>
                                        </div>
                                        <div class="toggle-content fs-6">Competently myocardinate sticky technology
                                            through competitive testing procedures. Progressively engineer customer
                                            directed e-services before frictionless scenarios. Objectively strategize
                                            next-generation web services for professional catalysts for change. Quickly
                                            productize clicks-and-mortar schemas for collaborative e-business.
                                            Dynamically customize user friendly leadership skills and interactive
                                            e-services. Objectively actualize virtual imperatives vis-a-vis
                                            enabled.<br><br>Voluptates doloribus quae nisi tempore necessitatibus
                                            dolores ducimus enim libero eaque explicabo suscipit animi at quaerat
                                            aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero
                                            vitae nulla.</div>
                                    </div>

                                    <div class="toggle toggle-lg py-4 border-bottom mb-0">
                                        <div class="toggle-header align-items-center">
                                            <div class="toggle-title fw-semibold">
                                                How does Business Plan work?
                                            </div>
                                            <div class="toggle-icon">
                                                <i class="toggle-closed bi bi-plus-circle fs-4 op-05"></i>
                                                <i class="toggle-open bi bi-dash-circle fs-4"></i>
                                            </div>
                                        </div>
                                        <div class="toggle-content fs-6">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo
                                            voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore
                                            necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at
                                            quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas
                                            beatae vero vitae nulla.</div>
                                    </div>

                                    <div class="toggle toggle-lg py-4 mb-0">
                                        <div class="toggle-header align-items-center">
                                            <div class="toggle-title fw-semibold">
                                                Is there any hidden charges?
                                            </div>
                                            <div class="toggle-icon">
                                                <i class="toggle-closed bi bi-plus-circle fs-4 op-05"></i>
                                                <i class="toggle-open bi bi-dash-circle fs-4"></i>
                                            </div>
                                        </div>
                                        <div class="toggle-content fs-6">Compellingly morph virtual niche markets
                                            vis-a-vis excellent paradigms. Assertively orchestrate quality deliverables
                                            vis-a-vis cross-unit e-commerce. Proactively deploy fully tested paradigms
                                            for cross-media content. Conveniently implement cross-media processes
                                            whereas highly efficient opportunities. Objectively scale flexible
                                            partnerships vis-a-vis end-to-end meta-services. <br><br>Conveniently
                                            synergize front-end content rather than high-payoff users. Professionally
                                            parallel.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section bg-color bg-opacity-10 py-0 mt-lg-4 mt-0">
                    <div class="position-absolute top-0 end-0 w-100 h-100"
                        style="background: url('landing-2/images/section-bg.svg') no-repeat right 70%; background-size: 100%;">
                    </div>
                    <div class="container">
                        <div class="row align-items-end justify-content-center justify-content-lg-between">

                            <div class="col-lg-5 py-lg-6 py-4">
                                <h2 class="display-4 font-secondary">Available for Smartphones.</h2>
                                <p>Progressively strategize just in time scenarios and compelling results. Intrinsicly
                                    parallel task extensive systems whereas distinctive catalysts for scenarios and
                                    compelling results change.</p>
                                <div class="clear"></div>
                                <div class="d-flex mt-4">
                                    <div class="d-flex flex-column me-2">
                                        <a href="#"
                                            class="button button-xlarge rounded-pill button-dark d-flex align-items-center justify-content-center py-3 bg-dark h-op-09 m-0 mb-3">
                                            <!-- <i class="fa-brands fa-app-store-ios fs-1 me-4" style="color:#48aef7"></i> -->
                                            <img src="{!! asset('landing-2/images/appstore.svg') !!}" alt="Store Logo" width="45"
                                                height="45">
                                            <div class="d-flex flex-column ms-3">
                                                <small class="fw-normal text-smaller lh-1 mb-2 op-06">Get it on
                                                    the</small>
                                                <span class="h5 mb-0 fw-semibold text-white lh-1">Apple Store</span>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="button button-xlarge rounded-pill button-dark d-flex align-items-center justify-content-center py-3 bg-dark h-op-09 m-0">
                                            <img src="{!! asset('landing-2/images/playstore.svg') !!}" alt="Store Logo" width="45"
                                                height="45">
                                            <div class="d-flex flex-column ms-3">
                                                <small class="fw-normal text-smaller lh-1 mb-2 op-06">Get it on
                                                    the</small>
                                                <span class="h5 mb-0 fw-semibold text-white lh-1">Google Store</span>
                                            </div>
                                        </a>
                                    </div>
                                    <img src="{!! asset('landing-2/images/qr.svg') !!}" alt="Image" height="170"
                                        class="bg-white border p-2 ms-4">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-8 mt-6 mt-sm-0">
                                <div class="d-flex align-items-end">
                                    <img src="{!! asset('landing-2/images/phone-2-half.png') !!}" class="fast" alt="Image"
                                        style="width: 300px;">
                                    <img src="{!! asset('landing-2/images/phone-1-half.png') !!}" class="fast" alt="Image"
                                        style="width: 370px; transform: translateX(-100px);">
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
                            Enjoy the OneStoProperty now
                        </h2>
                        <p class="mw-xs mx-auto text-dark">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Excepturi molestiae sequi placeat facilis quis recusandae nisi nesciunt illo fuga in.</p>
                        <a href="#"
                            class="button button-xlarge px-5 rounded-pill text-dark bg-color h-op-09 mb-5">Create a
                            Project <i class="bi-arrow-right me-0 ms-1"></i></a>
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

                                <img src="{!! asset('landing-2/images/logo.svg') !!}" alt="Image" class="footer-logo"
                                    height="60">

                                <p>We believe in Simple, Creative, Premium Quality &amp; Flexible Design Standards with.
                                </p>

                                <div>
                                    <a href="#"
                                        class="social-icon border-color h-border-transparent h-bg-facebook">
                                        <i class="fa-brands fa-facebook-f"></i>
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>

                                    <a href="#"
                                        class="social-icon border-color h-border-transparent h-bg-delicious">
                                        <i class="fa-brands fa-delicious"></i>
                                        <i class="fa-brands fa-delicious"></i>
                                    </a>

                                    <a href="#"
                                        class="social-icon border-color h-border-transparent h-bg-paypal">
                                        <i class="fa-brands fa-paypal"></i>
                                        <i class="fa-brands fa-paypal"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="col-6 col-md-2 ms-md-auto">
                            <div class="widget">

                                <h4 class="">Product</h4>

                                <ul class="widget-li-noicon widget_links ms-0">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Help & Support</a></li>
                                    <li><a href="#">Pricing</a></li>
                                    <li><a href="#">Purchase</a></li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-6 col-md-2">
                            <div class="widget">

                                <h4 class="">Terms</h4>

                                <ul class="widget-li-noicon widget_links ms-0">
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Privacy &amp; Policy</a></li>
                                    <li><a href="#">Licence</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>

                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="widget">

                                <div id="gotoTop"
                                    class="bi bi-arrow-up bg-white box-shadow h-shadow-sm text-dark rounded-circle all-ts">
                                </div>

                                <p class="mb-0 mt-4 mt-md-5 text-smaller op-06">Copyrights &copy; 2023 All Rights
                                    Reserved by Canvas Inc.</p>

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
