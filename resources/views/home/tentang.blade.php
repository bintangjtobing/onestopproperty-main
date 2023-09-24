@extends('welcome')
@section('title', 'Tentang Kami')
@section('content')
    <!-- Slider
                                                                          ============================================= -->
    <section id="slider" class="slider-element dark min-vh-25 min-vh-md-50 include-header py-5">
        <div class="slider-inner">

            <div class="vertical-middle text-center">
                <div class="container">
                    <div class="row align-items-center justify-content-center">

                        <div class="col-lg-6 col-md-6">
                            <h2 class="display-3 fw-bold text-black mb-2">Tentang kami</h2>
                            <p class="lead mb-0 fw-normal text-black">Iklankan properti anda dengan lebih mudah dan
                                terjangkau.</p>
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

            <div class="container mt-6 mb-6">

                <div class="row mt-5 col-mb-30">
                    <div class="col-md-5 text-center">
                        <h3 class="text-transform-none mb-5 display-4 fw-bold font-primary">What is OneStopProperty</h3>
                        <img src="{!! asset('osp/Asset1@3x.png') !!}" alt="Image">
                    </div>

                    <div class="col-md-7">
                        <h3 class="lead fw-normal">
                            One Stop Property adalah perusahaan jasa properti yang berkomitmen untuk menyediakan solusi
                            terpadu bagi kebutuhan properti masyarakat. Kami menawarkan berbagai jasa properti yang
                            disesuaikan dengan kebutuhan pelanggan, mulai dari jasa pengiklanan, pemasaran, hingga penjualan
                            properti. Kami percaya bahwa dengan memberikan solusi terpadu, kami dapat membantu pelanggan
                            untuk menemukan properti yangsesuai dengan kebutuhan dan anggaran mereka. Kami juga berkomitmen
                            untuk memberikan layanan yang berkualitas tinggi dan terpercaya, sehingga pelanggan dapat merasa
                            nyaman dan puas dalam menggunakan jasa kami.
                        </h3>
                        <div class="line my-5 border-width-5 border-f5"></div>

                        <h3 class="lead fw-normal">Di One Stop Property, kami selalu berupaya agar Anda mendapatkan hasil
                            terbaik. Itu karena kita hidup dan bernafas dalam satu etos mendasar:</h3>
                        <div class="line my-5 border-width-5 border-f5"></div>

                        <h3 class="lead fw-normal">Kami mengatakan apa yang kami lakukan, dan kami melakukan apa yang kami
                            katakan
                            Tujuan kami adalah melakukan yang terbaik untuk memastikan ekspektasi layanan klien kami
                            terpenuhi dan terlampaui. Di One Stop Property, kami bangga menjaga segala sesuatunya tidak
                            rumit, terus memberi Anda informasi, dan sederhana, lebih peduli.


                            Kami ingin mengenal klien kami, sehingga Anda menjadi bagian penting dari keluarga One Stop
                            Property.
                            Saat Anda melibatkan agen dan agensinya, Anda tidak pernah benar-benar tahu seberapa bagus
                            mereka sampai Anda mulai bekerja dengan mereka, dan seperti setiap industri, terdapat perbedaan
                            besar dalam tingkat profesionalisme, komitmen, dan kemampuan.</h3>
                        <div class="line my-5 border-width-5 border-f5"></div>

                        <h3 class="lead fw-normal">Apa yang kami yakini
                            Di One Stop Property, kami percaya bahwa real estat lebih dari sekadar mencapai penjualan atau
                            penyewaan – ini tentang pengalaman dan bagaimana proses kami bekerja untuk Anda. Hasil luar
                            biasa bukan hanya sekedar kebetulan atau keberuntungan, namun tentang upaya untuk menciptakan
                            hasil terbaik. Sikap positif dan antusiasme terhadap aktivitas sehari-hari sangat menular, dan
                            ketika dipadukan dengan sifat peduli, santai, dan profesional, kami menjamin segala upaya akan
                            dilakukan untuk menjadikan pengalaman Anda yang terbaik yang pernah Anda alami.</h3>
                        <div class="line my-5 border-width-5 border-f5"></div>

                        <h3 class="lead fw-normal">Saat Anda memilih kami, Anda akan merasa telah memilih agen yang tepat,
                            yang lebih peduli dibandingkan siapa pun, yang berusaha setiap hari. Kami menetapkan standar dan
                            praktik kami melebihi standar dan praktik lainnya di industri ini, karena kami ingin mencapai
                            hal tersebut setiap saat, sesuai dengan apa yang Anda layak dapatkan. Dedikasi dan komitmen 100%
                            kami terhadap karir jangka panjang di bidang Real Estat sepenuhnya terfokus pada melakukan hal
                            yang benar setiap saat, memiliki standar layanan pelanggan yang sangat baik, mencintai apa yang
                            kami lakukan, dan ingin memiliki penggemar yang antusias. Setiap klien baru yang kami bantu jual
                            atau bantu beli properti adalah peluang untuk menciptakan hubungan tulus lainnya.</h3>
                    </div>
                </div>

            </div>

            <div class="section my-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex align-items-lg-center text-center flex-row">
                            <div class="col">
                                <h3 class="mb-0">Kerjasama</h3>
                            </div>
                            <div class="col"><img src="{!! asset('conference/images/sponcors/amazon.svg') !!}" alt="Partner One Stop Property"></div>
                            <div class="col"><img src="{!! asset('conference/images/sponcors/netflix.svg') !!}" alt="Partner One Stop Property">
                            </div>
                            <div class="col"><img src="{!! asset('conference/images/sponcors/google.svg') !!}" alt="Partner One Stop Property"></div>
                            <div class="col"><img src="{!! asset('conference/images/sponcors/linkedin.svg') !!}" alt="Partner One Stop Property">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clear"></div>

            <div class="overflow-hidden">
                <div class="row gutter-custom justify-content-center" style="--custom-gutter: 80px;">
                    <div class="col-sm-6">
                        <div class="card border-0">
                            <img src="https://ospcairns.au/assets/images/photos/why-us.png" alt="onestoproperty card img"
                                class="rounded-5 mb-3">
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
                                                stroke="var(--cnvs-themecolor)" stroke-linecap="round" stroke-width="4">
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

    </section><!-- #content end -->
@endsection
