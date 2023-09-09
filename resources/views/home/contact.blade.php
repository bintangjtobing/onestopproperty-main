@extends('welcome')
@section('title', 'Hubungi Kami?')
@section('content')
    <section id="slider" class="slider-element dark min-vh-25 min-vh-md-50 include-header py-5">
        <div class="slider-inner">

            <div class="vertical-middle text-center">
                <div class="container">
                    <div class="row align-items-center justify-content-center">

                        <div class="col-lg-6 col-md-6">
                            <h2 class="display-3 fw-bold text-black mb-2">Hubungi kami?</h2>
                            <p class="lead mb-0 fw-normal text-black">Jangan sungkan untuk menanyakan apapun bersama kami</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section><!-- #slider end -->

    <!-- Content
                                                                                                    ============================================= -->
    <section id="content">
        <div class="content-wrap">

            <div class="section bg-transparent mt-0">
                <div class="container">
                    <div class="row justify-content-between col-mb-50">
                        <div class="col-lg-5">
                            <div class="text-nowrap dotted-bg dotted-bg-dark">
                                <h2 class="text-transform-none mb-3 display-3 fw-bold">Kami percaya kita bisa</h2>
                            </div>

                            <div class="clear"></div>

                            <div class="my-5">
                                <address>
                                    <strong>Kantor:</strong><br>
                                    Jalan pasar 1 Bunga Asoka<br>
                                    Medan - Indonesia<br>
                                </address>
                                <abbr title="Phone Number"><strong>Phone:</strong></abbr> (62) 812 6284 5980<br>
                                <abbr title="Email Address"><strong>Email:</strong></abbr> info@onestoproperty.com
                            </div>

                            <div class="d-flex mt-4">
                                <a href="/facebook" class="social-icon text-light bg-facebook" title="Facebook">
                                    <i class="fa-brands fa-facebook-f"></i>
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>

                                <a href="/instagram" class="social-icon text-light bg-instagram" title="Instagram">
                                    <i class="bi-instagram"></i>
                                    <i class="bi-instagram"></i>
                                </a>

                            </div>
                        </div>
                        <div class="col-lg-7">
                            <img src="{!! asset('landing-2/images/contact.jpg') !!}" alt="Office Image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="section bg-color"
                style="background-image: linear-gradient(to bottom, #ffb70200 0%, #ffb802 50%, #FFF 50%);">
                <div class="container">
                    <div class="row mx-auto dotted-bg" style="max-width: 740px">
                        <div class="col-md-12">
                            <div class="text-center dark mb-5">
                                <i class="fa-regular fa-life-ring h1 "></i>
                                <h2 class="fw-bold mb-2">Need Help?</h2>
                            </div>

                            <div class="card bg-white shadow-lg border-0">
                                <div class="card-body p-5">
                                    <div class="form-widget" data-loader="button" data-alert-type="inline">

                                        <div class="form-result"></div>

                                        <form class="row mb-0" id="landing-enquiry" action="#" method="post"
                                            enctype="multipart/form-data">
                                            <div class="form-process"></div>
                                            <div class="col-12 form-group mb-4">
                                                <label>Name:</label>
                                                <input type="text" name="landing-enquiry-name" id="landing-enquiry-name"
                                                    class="form-control form-control-lg required" value=""
                                                    placeholder="John Doe">
                                            </div>
                                            <div class="col-12 form-group mb-4">
                                                <label>Email:</label>
                                                <input type="email" name="landing-enquiry-email"
                                                    id="landing-enquiry-email" class="form-control form-control-lg required"
                                                    value="" placeholder="user@company.com">
                                            </div>
                                            <div class="col-12 form-group mb-4">
                                                <label>Phone:</label><br>
                                                <div class="input-group input-group-lg">
                                                    <select class="form-select required" name="landing-enquiry-idd"
                                                        id="landing-enquiry-idd" style="max-width: 100px;">
                                                        <option value="+1">+1</option>
                                                        <option value="+44">+44</option>
                                                        <option value="+66">+66</option>
                                                        <option value="+62">+62</option>
                                                        <option value="+61">+61</option>
                                                        <option value="+852">+852</option>
                                                        <option value="+65">+61</option>
                                                        <option value="+33">+61</option>
                                                        <option value="+49">+49</option>
                                                    </select>
                                                    <input type="text" name="landing-enquiry-phone"
                                                        id="landing-enquiry-phone"
                                                        class="form-control form-control-lg required" value=""
                                                        placeholder="811-2322-2424">
                                                </div>
                                            </div>
                                            <div class="col-12 form-group mb-4">
                                                <label>Message:</label>
                                                <textarea name="landing-enquiry-additional-requirements" id="landing-enquiry-additional-requirements"
                                                    class="form-control form-control-lg" cols="30" rows="5"
                                                    placeholder="Please let us know how we can help you..."></textarea>
                                            </div>
                                            <div class="col-12 d-none">
                                                <input type="text" id="landing-enquiry-botcheck"
                                                    name="landing-enquiry-botcheck" value="">
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" name="landing-enquiry-submit"
                                                    class="btn w-100 text-white bg-color rounded-3 py-3 fw-semibold text-uppercase mt-2">Contact
                                                    Us</button>
                                            </div>

                                            <input type="hidden" name="prefix" value="landing-enquiry-">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
