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
        <header id="header" class="border-bottom-0 no-sticky transparent-header header-custom-size">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">
                        <div id="logo" class="me-lg-5">
                            <a href="#"><img src="{!! asset('osp/Asset1@3x.png') !!}"
                                    alt="onestoproperty OneStoProperty Logo" class="py-3"></a>
                        </div>
                        <div class="header-misc">
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
                        <nav class="primary-menu me-lg-auto">

                            <ul class="menu-container">
                                <li class="menu-item"><a class="menu-link" href="/tentang">
                                        <div>Tentang Kami</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="/#FAQ">
                                        <div>Cara Iklan</div>
                                    </a></li>
                                {{-- <li class="menu-item"><a class="menu-link" href="/">
                                        <div>Layanan</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="/">
                                        <div>Properti</div>
                                    </a></li> --}}
                                <li class="menu-item"><a class="menu-link" href="/#FAQ">
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

        @yield('content')

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
                                <p>
                                    <b>Phone: </b> 0812 6284 5980 <br>
                                    <b>E-mail: </b> info@onestoproperty.com <br>
                                    <b>Office: </b> Jl Pasar 1 Bunga Asoka, <br>
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
