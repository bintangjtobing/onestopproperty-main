@extends('welcome')
@section('css')
    <link rel="stylesheet" href="{!! asset('real-estate/css/font-icons.css') !!}">

    <!-- Plugins/Components CSS -->
    <link rel="stylesheet" href="{!! asset('css/components/bs-select.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/components/bs-switches.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/components/ion.rangeslider.css') !!}">

    <!-- Niche Demos -->
    <link rel="stylesheet" href="{!! asset('real-estate/real-estate.css') !!}">
@endsection
@section('title', 'Listing Properti')
@section('content')
    <section id="slider" class="slider-element dark min-vh-25 min-vh-md-50 include-header py-5">
        <div class="slider-inner">

            <div class="vertical-middle text-center">
                <div class="container">
                    <div class="row align-items-center justify-content-center">

                        <div class="col-lg-6 col-md-6">
                            <h2 class="display-3 fw-bold text-black mb-2">Properti yang tersedia</h2>
                            <p class="lead mb-0 fw-normal text-black">Pilih properti yang menarik bagi mu
                            </p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section><!-- #slider end -->
    <div class="tabs advanced-real-estate-tabs">

        <div class="container">
            <ul class="nav canvas-tabs tabs nav-tabs" style="--bs-nav-tabs-border-width: 0px">
                <li class="nav-item"><a class="nav-link" href="#tab-properties" data-scrollto="#tab-properties"
                        data-offset="133">Search Properties</a></li>
            </ul>
        </div>

        <div class="tab-container bg-contrast-200">
            <div class="container">
                <div class="tab-content" id="tab-properties">
                    <form action="#" method="post" class="mb-0">
                        <div class="row g-4">
                            <div class="col-lg-2 col-md-12">
                                <label class="d-block">Type</label>
                                <input class="bt-switch" type="checkbox" checked data-on-text="Buy" data-off-text="Rent"
                                    data-on-color="themecolor" data-off-color="themecolor">
                            </div>
                            <div class="col-lg-5 col-md-6 col-12">
                                <label>Choose Locations</label>
                                <select class="selectpicker w-100" multiple data-live-search="true" data-size="6">
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-lg-5 col-md-6 col-12">
                                <label>Property Type</label>
                                <select class="selectpicker w-100" data-size="6" style="line-height: 30px;">
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <label style="margin-bottom: 20px !important;">Price Range</label>
                                <input class="price-range-slider">
                            </div>
                            <div class="w-100 d-block d-md-none"></div>
                            <div class="col-lg-4 offset-lg-1 col-md-6 col-12">
                                <label style="margin-bottom: 20px !important;">Property Area</label>
                                <input class="area-range-slider">
                            </div>
                            <div class="offset-lg-1 col-lg-2 col-md-12">
                                <button class="button button-3d button-rounded w-100 m-0"
                                    style="margin-top: 35px !important;">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <section id="content">
        <div class="content-wrap">
            <div class="container">

                <div style="position: relative;">
                    <div class="heading-block border-bottom-0">
                        <h3>Featured Properties</h3>
                    </div>

                    <a href="#"
                        class="button button-small button-rounded button-border button-border-thin fw-medium m-0"
                        style="position: absolute; top: 7px; right: 0;">Check All</a>

                    <div class="real-estate owl-carousel image-carousel carousel-widget mb-6" data-margin="10"
                        data-nav="true" data-loop="true" data-pagi="false" data-items-xs="1" data-items-sm="1"
                        data-items-md="2" data-items-lg="3" data-items-xl="3">

                        <div class="oc-item">
                            <div class="real-estate-item">
                                <div class="real-estate-item-image">
                                    <div class="badge bg-danger bg-color2">For Sale</div>
                                    <a href="#">
                                        <img src="{!! asset('real-estate/images/items/1.jpg') !!}" alt="Image 1">
                                    </a>
                                    <div class="real-estate-item-price">
                                        $1.2m<span>Leasehold</span>
                                    </div>
                                    <div class="real-estate-item-info">
                                        <a href="#"><i class="uil uil-images"></i></a>
                                        <a href="#"><i class="bi-heart"></i></a>
                                    </div>
                                </div>

                                <div class="real-estate-item-desc">
                                    <h3><a href="#">3 Bedroom Villa</a></h3>
                                    <span>Seminyak Area</span>

                                    <a href="#" class="real-estate-item-link"><i class="bi-info-circle"></i></a>

                                    <div class="line" style="margin-top: 15px; margin-bottom: 15px;"></div>

                                    <div class="real-estate-item-features fw-medium font-primary">
                                        <div class="row g-0">
                                            <div class="col-lg-4 p-0">Beds: <span class="color">3</span></div>
                                            <div class="col-lg-4 p-0">Baths: <span class="color">3</span></div>
                                            <div class="col-lg-4 p-0">Area: <span class="color">150 sqm</span></div>
                                            <div class="col-lg-4 p-0">Pool: <span class="text-success"><i
                                                        class="fa-solid fa-square-check"></i></span></div>
                                            <div class="col-lg-4 p-0">Internet: <span class="text-success"><i
                                                        class="fa-solid fa-square-check"></i></span></div>
                                            <div class="col-lg-4 p-0">Cleaning: <span class="text-danger"><i
                                                        class="bi-dash-square-fill"></i></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="oc-item">
                            <div class="real-estate-item">
                                <div class="real-estate-item-image">
                                    <div class="badge bg-success">Hot Deal</div>
                                    <a href="#">
                                        <img src="{!! asset('real-estate/images/items/2.jpg') !!}" alt="Image 2">
                                    </a>
                                    <div class="real-estate-item-price">
                                        $200,000<span>bi-annually</span>
                                    </div>
                                    <div class="real-estate-item-info">
                                        <a href="#"><i class="uil uil-images"></i></a>
                                        <a href="#"><i class="bi-heart"></i></a>
                                    </div>
                                </div>

                                <div class="real-estate-item-desc">
                                    <h3><a href="#">3 Bedroom Villa</a></h3>
                                    <span>Seminyak Area</span>

                                    <a href="#" class="real-estate-item-link"><i class="bi-info-circle"></i></a>

                                    <div class="line" style="margin-top: 15px; margin-bottom: 15px;"></div>

                                    <div class="real-estate-item-features fw-medium">
                                        <div class="row g-0">
                                            <div class="col-lg-4 p-0">Beds: <span class="color">3</span></div>
                                            <div class="col-lg-4 p-0">Baths: <span class="color">3</span></div>
                                            <div class="col-lg-4 p-0">Area: <span class="color">150 sqm</span></div>
                                            <div class="col-lg-4 p-0">Pool: <span class="text-success"><i
                                                        class="fa-solid fa-square-check"></i></span></div>
                                            <div class="col-lg-4 p-0">Internet: <span class="text-success"><i
                                                        class="fa-solid fa-square-check"></i></span></div>
                                            <div class="col-lg-4 p-0">Cleaning: <span class="text-success"><i
                                                        class="fa-solid fa-square-check"></i></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="oc-item">
                            <div class="real-estate-item">
                                <div class="real-estate-item-image">
                                    <div class="badge bg-danger">Long Term Rental</div>
                                    <a href="#">
                                        <img src="{!! asset('real-estate/images/items/4.jpg') !!}" alt="Image 3">
                                    </a>
                                    <div class="real-estate-item-price">
                                        $1600<span>per month</span>
                                    </div>
                                    <div class="real-estate-item-info">
                                        <a href="#"><i class="uil uil-images"></i></a>
                                        <a href="#"><i class="bi-heart"></i></a>
                                    </div>
                                </div>

                                <div class="real-estate-item-desc">
                                    <h3><a href="#">3 Bedroom Villa</a></h3>
                                    <span>Seminyak Area</span>

                                    <a href="#" class="real-estate-item-link"><i class="bi-info-circle"></i></a>

                                    <div class="line" style="margin-top: 15px; margin-bottom: 15px;"></div>

                                    <div class="real-estate-item-features fw-medium">
                                        <div class="row g-0">
                                            <div class="col-lg-4 p-0">Beds: <span class="color">3</span></div>
                                            <div class="col-lg-4 p-0">Baths: <span class="color">3</span></div>
                                            <div class="col-lg-4 p-0">Area: <span class="color">150 sqm</span></div>
                                            <div class="col-lg-4 p-0">Pool: <span class="text-success"><i
                                                        class="fa-solid fa-square-check"></i></span></div>
                                            <div class="col-lg-4 p-0">Internet: <span class="text-success"><i
                                                        class="fa-solid fa-square-check"></i></span></div>
                                            <div class="col-lg-4 p-0">Cleaning: <span class="text-success"><i
                                                        class="fa-solid fa-square-check"></i></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="promo promo-dark bg-color mb-6 p-4">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg">
                            <h3 class="fw-normal ls-1">Special Offers on Villa Long Term Rentals &amp; Lease Agreements
                            </h3>
                        </div>
                        <div class="col-12 col-lg-auto mt-4 mt-lg-0">
                            <a href="#" class="button button-dark button-large button-rounded m-0">Contact Now</a>
                        </div>
                    </div>
                </div>

                <div class="row real-estate-properties">

                    <div class="col-lg-7">
                        <a href="#"
                            style="background: url('{!! asset('real-estate/images/cities/4.jpg') !!}') no-repeat bottom center; background-size: cover;">
                            <div class="vertical-middle dark text-center">
                                <div class="heading-block m-0 border-0">
                                    <h3 class="text-capitalize fw-medium">California</h3>
                                    <span style="margin-top: 5px; font-size: 17px;">23 Properties</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-5">
                        <a href="#"
                            style="background: url('{!! asset('real-estate/images/cities/2.jpg') !!}') no-repeat center center; background-size: cover;">
                            <div class="vertical-middle dark text-center">
                                <div class="heading-block m-0 border-0">
                                    <h3 class="text-capitalize fw-medium">New York</h3>
                                    <span style="margin-top: 5px; font-size: 17px;">12 Properties</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4">
                        <a href="#"
                            style="background: url('{!! asset('real-estate/images/cities/3.jpg') !!}') no-repeat center center; background-size: cover;">
                            <div class="vertical-middle dark text-center">
                                <div class="heading-block m-0 border-0">
                                    <h3 class="text-capitalize fw-medium">San Francisco</h3>
                                    <span style="margin-top: 5px; font-size: 17px;">8 Properties</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#"
                            style="background: url('{!! asset('real-estate/images/cities/1.jpg') !!}') no-repeat center center; background-size: cover;">
                            <div class="vertical-middle dark text-center">
                                <div class="heading-block m-0 border-0">
                                    <h3 class="text-capitalize fw-medium">Texas</h3>
                                    <span style="margin-top: 5px; font-size: 17px;">31 Properties</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#"
                            style="background: url('{!! asset('real-estate/images/cities/5.jpg') !!}') no-repeat center center; background-size: cover;">
                            <div class="vertical-middle dark text-center">
                                <div class="heading-block m-0 border-0">
                                    <h3 class="text-capitalize fw-medium">New Orleans</h3>
                                    <span style="margin-top: 5px; font-size: 17px;">19 Properties</span>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
@section('javascript')
    <script src="{!! asset('js/jquery.js') !!}"></script>
    <script src="{!! asset('js/plugins.bootstrap.js') !!}" id="canvas-bootstrap-js"></script>
    <!-- Bootstrap Select Plugin -->
    <script src="{!! asset('js/components/bs-select.js') !!}"></script>

    <!-- Bootstrap Switch Plugin -->
    <script src="{!! asset('js/components/bs-switches.js') !!}"></script>

    <!-- Range Slider Plugin -->
    <script src="{!! asset('js/components/rangeslider.min.js') !!}"></script>

    <script>
        jQuery(document).ready(function() {
            jQuery(".price-range-slider").ionRangeSlider({
                type: "double",
                prefix: "$",
                min: 200,
                max: 10000,
                max_postfix: "+"
            });

            jQuery(".area-range-slider").ionRangeSlider({
                type: "double",
                min: 50,
                max: 20000,
                from: 50,
                to: 20000,
                postfix: " sqm.",
                max_postfix: "+"
            });

            jQuery(".bt-switch").bootstrapSwitch();
        });
    </script>
@endsection
