
<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Sistem Rekomendasi</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="{{ asset('landingTemplate/assets/img/favicon.png') }}"
    />
    <!-- Place favicon.ico in the root directory -->

    <!-- ======== CSS here ======== -->
    <link rel="stylesheet" href="{{ asset('landingTemplate/assets/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('landingTemplate/assets/css/lineicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('landingTemplate/assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('landingTemplate/assets/css/main.css') }}" />
  </head>
  <body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- ======== preloader start ======== -->
    <div class="preloader">
      <div class="loader">
        <div class="spinner">
          <div class="spinner-container">
            <div class="spinner-rotator">
              <div class="spinner-left">
                <div class="spinner-circle"></div>
              </div>
              <div class="spinner-right">
                <div class="spinner-circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- preloader end -->

    <!-- ======== header start ======== -->
    <header class="header">
      <div class="navbar-area">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="{{ asset('landingTemplate/index.html') }}">
                  {{-- <img src="{{ asset('landingTemplate/assets/img/logo/logo.svg') }}" alt="Logo" /> --}}
                </a>
                <button
                  class="navbar-toggler"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                </button>

                <div
                  class="collapse navbar-collapse sub-menu-bar"
                  id="navbarSupportedContent"
                >
                  <ul id="nav" class="navbar-nav ms-auto">
                    <li class="nav-item">
                      <a class="page-scroll active" href="#welcome">Dashboard</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#layanan">Layanan</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#about">Kegiatan</a>
                    </li>

                    <li class="nav-item">
                      <a class="page-scroll" href="#contact">Kontak</a>
                    </li>
                    <li class="nav-item">
                      <a href="/login" >Login</a>
                    </li>
                    {{-- <li class="nav-item">
                      <a href="/register">Register</a>
                    </li> --}}
                  </ul>
                </div>
                <!-- navbar collapse -->
              </nav>
              <!-- navbar -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- navbar area -->
    </header>
    <!-- ======== header end ======== -->

    <!-- ======== hero-section start ======== -->
    <section id="welcome" class="hero-section">
      <div class="container">
        <div class="row align-items-center position-relative">
          <div class="col-lg-6">
            <div class="hero-content">
              <h1 class="wow fadeInUp" data-wow-delay=".4s">
                Sistem Rekomendasi Pemberian Bantuan Kepada Lansia
              </h1>
              {{-- <a href="#features" class="scroll-bottom">
                <i class="lni lni-arrow-down"></i
              ></a> --}}
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero-img wow fadeInUp" data-wow-delay=".5s">
              <img src="{{ asset('landingTemplate/assets/img/hero/landing.png') }}" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ======== hero-section end ======== -->

    <!-- ======== feature-section start ======== -->
    <section id="layanan" class="feature-section pt-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-8 col-sm-10">
            <div class="single-feature">
              {{-- <div class="icon">
                <i class="lni lni-layout"></i>
              </div> --}}
              <div class="content">
                <h3>Urutan Rekomendasi Lansia Penerima Bantuan</h3>
                <h5>(Berdasarkan Kriteria : Kondisi Keluarga, Kondisi Tempat Tinggal, Usia, Kesehatan, Makanan Sehari-hari,
                  Makanan Berprotein Tinggi, Pakaian > 4 Pasang, dan Jenjang Sekolah)</h5>
                <br>
                <table class="table">
                  <thead>
                      <tr>
                          <th>Nama Lansia</th>
                          <th>Nilai Akhir</th>
                          <th>Ranking</th>
                      </tr>
                  </thead>
                  <tbody>
                  @foreach ($ranking->sortBy('ranking') as $ranking)
                      @if ($ranking->hasil_akhir == 1)
                          <tr>
                              <td>{{ $ranking->Alternatif->nama_alternatif }}</td>
                              <td>{{ $ranking->hasil_akhir }}</td>
                              <td>{{ $ranking->ranking }}</td>
                          </tr>
                      @endif
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-8 col-sm-10">
            <div class="single-feature">
              <div>
                <img src="{{ asset('landingTemplate/assets/img/barcode.jpg')}}" style="max-width: 300px">
              </div>
              <div class="content">
                <br>
                <p>
                  Mari berbagi keberkahan kepada para lansia. Sedikit yang anda berikan dapat bermanfaat bagi
                  kami dan menjadi amal kebaikan
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ======== feature-section end ======== -->

    <!-- ======== about-section start ======== -->
    <section id="about" class="about-section pt-150">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-6">
            <div class="about-img">
              <img src="{{ asset('landingTemplate/assets/img/kegiatan1.jpg') }}" alt="" style="width: 400px; border-radius: 50%" />
              <img
                src="{{ asset('landingTemplate/assets/img/about/about-left-shape.svg') }}"
                alt=""
                class="shape shape-1"
              />
              <img
                src="{{ asset('landingTemplate/assets/img/about/left-dots.svg') }}"
                alt=""
                class="shape shape-2"
              />
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="about-content">
              <div class="section-title mb-30">
                <h2 class="mb-25 wow fadeInUp" data-wow-delay=".2s">
                  Penyuluhan
                </h2>
                <p class="wow fadeInUp" data-wow-delay=".4s">
                  Bimbingan Sosial oleh Bu Waginah di AULA UPTD PSLU Tresna Werdha pada tanggal 08 Agustus 2023
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ======== about-section end ======== -->

    <!-- ======== about2-section start ======== -->
    <section id="about" class="about-section pt-150">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-6">
            <div class="about-content">
              <div class="section-title mb-30">
                <h2 class="mb-25 wow fadeInUp" data-wow-delay=".2s">
                  Pemeriksaan Kesehatan
                </h2>
                <p class="wow fadeInUp" data-wow-delay=".4s">
                  Kegiatan Pemeriksaan Kesehatan Lanjut Usia Tresna Werdha dari Puskesmas Rawat Inap Tanjung Sari, Natar,
                  Lampung Selatan pada tanggal 23 Juni 2023
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 order-first order-lg-last">
            <div class="about-img-2">
              <img src="{{ asset('landingTemplate/assets/img/kegiatan2.jpg') }}" alt="" style="width: 400px; border-radius: 50%" />
              <img
                src="{{ asset('landingTemplate/assets/img/about/about-right-shape.svg') }}"
                alt=""
                class="shape shape-1"
              />
              <img
                src="{{ asset('landingTemplate/assets/img/about/right-dots.svg') }}"
                alt=""
                class="shape shape-2"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ======== about2-section end ======== -->

    <section id="about" class="about-section pt-150">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-6">
            <div class="about-img">
              <img src="{{ asset('landingTemplate/assets/img/kegiatan3.jpg') }}" alt="" style="width: 400px; border-radius: 50%" />
              <img
                src="{{ asset('landingTemplate/assets/img/about/about-left-shape.svg') }}"
                alt=""
                class="shape shape-1"
              />
              <img
                src="{{ asset('landingTemplate/assets/img/about/left-dots.svg') }}"
                alt=""
                class="shape shape-2"
              />
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="about-content">
              <div class="section-title mb-30">
                <h2 class="mb-25 wow fadeInUp" data-wow-delay=".2s">
                  Keterampilan
                </h2>
                <p class="wow fadeInUp" data-wow-delay=".4s">
                  Kegiatan Keterampilan Lansia UPTD PSLU Tresna Werdha pada Rabu, 09 November 2022, yaitu membuat
                  gantungan kunci dipandu Siswa/i SMK Muhammadiyah 3 Metro.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======== subscribe-section start ======== -->
    <section id="contact" class="subscribe-section pt-120">
      <div class="container">
        <div class="subscribe-wrapper img-bg">
          <div class="row justify-content-center">
            
              <div class="section-title mb-15" style="text-align: center">
                <h2 class="text-white mb-25">Kontak Kami</h2>
                <p class="text-white pr-5">
                  Whatsapp : +62 831-9932-0345 <br>
                  (Ade Indah Riznaya)
                </p>
              </div>

          </div>
        </div>
      </div>
    </section>
    <!-- ======== subscribe-section end ======== -->

    <!-- ======== footer start ======== -->
    <footer class="footer">
      <div class="container">
        <div class="widget-wrapper">
          <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
              <div class="footer-widget">
                <div class="logo mb-30">
                  <a href="{{ asset('landingTemplate/index.html') }}">
                    {{-- <img src="{{ asset('landingTemplate/assets/img/logo/logo.svg') }}" alt="" /> --}}
                  </a>
                </div>
                <p class="desc mb-30 text-white">
                  Copyright &copy; {{ date("Y")}}
                </p>
                {{-- <ul class="socials">
                  <li>
                    <a href="jvascript:void(0)">
                      <i class="lni lni-facebook-filled"></i>
                    </a>
                  </li>
                  <li>
                    <a href="jvascript:void(0)">
                      <i class="lni lni-twitter-filled"></i>
                    </a>
                  </li>
                  <li>
                    <a href="jvascript:void(0)">
                      <i class="lni lni-instagram-filled"></i>
                    </a>
                  </li>
                  <li>
                    <a href="jvascript:void(0)">
                      <i class="lni lni-linkedin-original"></i>
                    </a>
                  </li>
                </ul> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- ======== footer end ======== -->

    <!-- ======== scroll-top ======== -->
    <a href="#" class="scroll-top btn-hover">
      <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ======== JS here ======== -->
    <script src="{{ asset('landingTemplate/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('landingTemplate/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('landingTemplate/assets/js/main.js') }}"></script>
  </body>
</html>
