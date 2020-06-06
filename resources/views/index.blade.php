<!DOCTYPE html>
<html lang="en">
<head>
  <style>
  .button {
    border: 0;
    padding: 10px 32px;
    color: #0880e8;
    transition: 0.4s;
    border-radius: 50px;
    border: 2px solid #0880e8;
    background: #fff;
  }

  .button:hover {
    background: #0880e8;
    color: #fff;
  }
  </style>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>COFORBA (Covid Information Bandung)</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script type="text/javascript" src="assets/js/chart.js"></script>

  <!-- =======================================================
  * Template Name: Anyar - v2.0.0
  * Template URL: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
      <h1 class="logo mr-auto"><a href="#header" class="scrollto">COFORBA</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Layanan</a></li>
          <li><a href="#portfolio">Daftar Rumah Sakit Rujukan</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Konsultasi</a></li>
          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
            <li><a href="{{ url('/pengguna') }}">Daftar Pengguna</a></li>
            <li>
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        <font color="black">{{ __('Logout') }}</font>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                  </div>
              </li>
          @endguest
        </ul>
      </nav>
      <!-- .nav-menu -->
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animated fadeInDown">Welcome to <span>COFORBA</span></h2>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animated fadeInDown">Covid Information Bandung</h2>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animated fadeInDown">#DiRumahAja</h2>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">
    <!-- ======= Icon Boxes Section ======= -->
    <section id="icon-boxes" class="icon-boxes">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0 " data-aos="fade-up">
            <div style="background-color: #fcdfe0" class=" icon-box ">
              <div class="icon"></div>
              <h4 style="font-size: 30px;" class="title"><b><a href="{{ url('/positif') }}">Positif</a></b></h4>
              <p style="font-size: 25px;" class="description">Bandung &nbsp; &nbsp; &nbsp;120  <font color="red"> +5 </font></p> <br>
              <p style="font-size: 25px;" class="description">Jawa Barat &nbsp; &nbsp; &nbsp;2130  <font color="red"> +17 </font></p> <br>
              <p style="font-size: 25px;" class="description">Indonesia &nbsp; &nbsp; &nbsp;23165  <font color="red"> +415 </font></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div style="background-color: #d3eee3" class="icon-box">
              <div class="icon"></div>
              <h4 style="font-size: 30px; " class="title"><a href="{{ url('/sembuh') }}">Sembuh</a></h4>
              <p style="font-size: 25px;" class="description">Bandung &nbsp; &nbsp; &nbsp;125  <font color="green"> +6 </font></p> <br>
              <p style="font-size: 25px;" class="description">Jawa Barat &nbsp; &nbsp; &nbsp;505  <font color="green"> +26 </font></p> <br>
              <p style="font-size: 25px;" class="description">Indonesia &nbsp; &nbsp; &nbsp;5877  <font color="green"> +235 </font></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div style="background-color: #fcdfe0" class="icon-box">
              <div class="icon"></div>
              <h4 style="font-size: 30px;" class="title"><a href="{{ url('/meninggal') }}">Meninggal</a></h4>
              <p style="font-size: 25px;" class="description">Bandung &nbsp; &nbsp; &nbsp;15  <font color="red"> +9 </font></p> <br>
              <p style="font-size: 25px;" class="description">Jawa Barat &nbsp; &nbsp; &nbsp;137  <font color="red"> +9 </font></p> <br>
              <p style="font-size: 25px;" class="description">Indonesia &nbsp; &nbsp; &nbsp;1418  <font color="red"> +27 </font></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div style="margin-top: 20px;" class="icon-box">
              <div class="icon"></div>
              <h4 style="font-size: 30px;" class="title"><a href="{{ url('/odp') }}">ODP</a></h4>
              <p><canvas id="chartODP" width="700" height="600"></canvas></p>
              <script>
                var ctx = document.getElementById("chartODP").getContext('2d');
                var myLineChart = new Chart(ctx, {
                type: 'line',
                data: {
                  labels: ['01/04/2020', '01/05/2020', '01/06/2020'],
                  datasets: [{
                    label: 'Orang Dalam Pemantauan',
                    data: [125, 653, 413],
                    backgroundColor: [
                      'rgba(6, 255, 0, 0.2)'
                    ],
                    borderColor: [
                      'rgba(8, 203, 3, 1)',
                      'rgba(8, 203, 3, 1)',
                      'rgba(8, 203, 3, 1)'
                    ],
                    borderWidth: 1
                  }]
                },
                options: {
                  scales: {
                    yAxes: [{
                      ticks: {
                        beginAtZero: true
                      }
                    }]
                  }
                }
              });
              </script>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div style="margin-top: 20px;" class="icon-box">
              <div class="icon"></div>
              <h4 style="font-size: 30px;" class="title"><a href="{{ url('/pdp') }}">PDP</a></h4>
              <p><canvas id="chartPDP" width="700" height="600"></canvas></p>
              <script>
                var ctx = document.getElementById("chartPDP").getContext('2d');
                var myLineChart = new Chart(ctx, {
                type: 'line',
                data: {
                  labels: ['01/04/2020', '01/05/2020', '01/06/2020'],
                  datasets: [{
                    label: 'Pasien Dalam Pemantauan',
                    data: [212, 376, 132],
                    backgroundColor: [
                      'rgba(30, 0, 255, 0.2)'
                    ],
                    borderColor: [
                      'rgba(35, 12, 212, 1)',
                      'rgba(35, 12, 212, 1)',
                      'rgba(35, 12, 212, 1)'
                    ],
                    borderWidth: 1
                  }]
                },
                options: {
                  scales: {
                    yAxes: [{
                      ticks: {
                        beginAtZero: true
                      }
                    }]
                  }
                }
              });
              </script>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- End Icon Boxes Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>About Us</h2>
          <p>COFORBA merupakan aplikasi berbasis web mengenai penanganan COVID-19 di kota Bandung, Jawa Barat.</p>
        </div>
      </div>
    </section>
    <!-- End About Us Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="owl-carousel clients-carousel">
          <img src="assets/img/kes.png" alt="">
          <img src="assets/img/smk.png" alt="">
          <img src="assets/img/clients/kita.png" alt="">
          <img src="assets/img/terbang.png" alt="">
          <img src="assets/img/clients/gopay.png" alt="">
          <img src="assets/img/clients/ovo.png" alt="">
          <img src="assets/img/clients/dana.png" alt="">
          <img src="assets/img/clients/halo.png" alt="">
        </div>

      </div>
    </section>
    <!-- End Clients Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("assets/img/pi.jpg");' data-aos="fade-right">
            <a href="https://www.youtube.com/watch?v=eUIyRf7bHnw" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true" target="_blank"></a>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch" data-aos="fade-left">

            <div class="content">
              <h3>Coronavirus <strong>Covid-19</strong></h3>
              <p>
                Virus Corona atau severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2) adalah virus yang menyerang sistem pernapasan. Penyakit karena infeksi virus ini disebut COVID-19. Virus Corona bisa menyebabkan gangguan ringan pada sistem pernapasan, infeksi paru-paru yang berat, hingga kematian.
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li data-aos="fade-up" data-aos-delay="100">
                  <a data-toggle="collapse" class="collapse" href="#accordion-list-1"><span>01</span> Apa Gejala Yang Terjadi ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                    <p>
                     Gejala Yang Biasanya Terjadi Adalah Hidung beringus, Sakit Kepala, Batuk, Sakit Tenggorokan, Demam, Merasa Tidak Enak Badan.
                    </p>
                  </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="200">
                  <a data-toggle="collapse" href="#accordion-list-2" class="collapsed"><span>02</span>Apa Penyebab Infeksi Coronavirus ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                    <p>
                      Percikan air liur pengidap (bantuk dan bersin),
                      Menyentuh tangan atau wajah orang yang terinfeksi,
                      Menyentuh mata, hidung, atau mulut setelah memegang barang yang terkena percikan air liur pengidap virus corona,
                      Tinja atau feses (jarang terjadi).
                    </p>
                  </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="300">
                  <a data-toggle="collapse" href="#accordion-list-3" class="collapsed"><span>03</span> Bagaimana Cara Mencegah Virus Corona ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                    <p>
                      1. Rutin mencuci tangan <br>
                      2. Physical distancing<br>
                      3. Hindari memegang mata, hidung, dan mulut <br>
                      4. Ketika bersin dan batuk, jangan lupa tutup <br>
                      5. Ketika bersin dan batuk, jangan lupa tutup <br>
                      6. Bersihkan permukaan yang sering disentuh <br>
                      7. Cari tahu informasi akurat mengenai Covid-19
                    </p>
                  </div>
                </li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Layanan</h2>
          <p>Berikut adalah layanan yang bisa anda akses di web COFORBA ini </p>
        </div>

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <i class="icofont-hand"></i>
              <h4><a href="{{ url('/relawan') }}">Pendaftaran Relawan</a></h4>
              <p>Menu ini adalah menu pendaftaran yang diperuntukkan untuk masyarakat yang ingin menjadi relawan pada masa pandemi ini.</p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <i class="icofont-jacket"></i>
              <h4><a href="{{ url('/apd') }}">Donasi Alat Pelindung Diri (APD)</a></h4>
              <p>Menu ini digunakan untuk masyarakat yang ingin mendonasikan Alat Pelindung Diri (APD) untuk para tenaga medis.</p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <i class="icofont-money-bag"></i>
              <h4><a href="{{ url('/dana') }}">Donasi Uang Tunai</a></h4>
              <p>Menu ini digunakan untuk masyarakat yang ingin mendonasikan uang tunai, yang nantinya akan diberikan kepada masyarakat yang membutuhkan, dan dipergunakan untuk membeli alat kesehatan
                juga alat pelindung diri yang nantinya diberikan kepada para tenaga medis.</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row" data-aos="zoom-in">
          <div class="col-lg-9 text-center text-lg-left">
            <h3>Call Center</h3>
            <p>Nomor disamping adalah nomor darurat khusus untuk penanganan COVID-19.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="tel://119">Memanggil ke 119</a>
          </div>
        </div>

      </div>
    </section>
    <!-- End Cta Section -->

    <!-- ======= Portfoio Section ======= -->
    <section id="portfolio" class="portfoio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Daftar Rumah Sakit Rujukan</h2>
          <p>Berikut adalah daftar rumah sakit rujukan yang ada di Kota Bandung.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>RSU Dr. Hasan Sadikin</h4>
              <p>Jl. Pasteur No. 38, Kota Bandung</p>
              <a href="https://web.rshs.or.id/" class="details-link" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>RSTP Dr. H. A. Rotinsulu</h4>
              <p>Jl. Bukit Jarian No.40, Hegarmanah, Kota Bandung</p>
              <a href="http://rsparurotinsulu.org/" class="details-link" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>RS Immanuel Bandung</h4>
              <p>Jl. Kopo No. 161, Kota Bandung</p>
              <a href="http://www.rsimmanuel.com/" class="details-link" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>RS Santo Borromeus</h4>
              <p>Jl. Ir. H.Djuanda No.100, Kota Bandung</p>
              <a href="http://rsborromeus.com/" class="details-link" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>RS Santo Yusup Bandung</h4>
              <p>Jl. Cikutra No. 7, Kota Bandung</p>
              <a href="https://www.rssantoyusup.com/" class="details-link" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>RS Al Islam Bandung</h4>
              <p>Jl. Soekarno Hatta No. 644, Kota Bandung</p>
              <a href="https://www.rsalislam.com/" class="details-link" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>RS Advent Bandung</h4>
              <p>Jl. Cihampelas No.161, Kota Bandung</p>
              <a href="http://www.rsadventbandung.com/" class="details-link" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Santosa Hospital Bandung Central</h4>
              <p>Jl.Kebonjati No.38, Kota Bandung</p>
              <a href="https://www.santosa-hospital.com/" class="details-link" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>RSUD Kota Bandung</h4>
              <p>Jl. Rumah Sakit No. 22 Ujung Berung, Kota Bandung</p>
              <a href="https://rsudkotabandung.web.id/" class="details-link" title="More Details" target="_blank"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- End Portfoio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Team</h2>
        </div>
        <div class="row">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/nanda.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Ananda Cipta Pamungkas</h4>
                <span>Back End Programmer</span>
                +62 887-0633-1778
                <div class="social">
                  <a href="https://www.instagram.com/ciptaananda/" target="_blank"><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/isan.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Ihsan Herdiansyah</h4>
                <span>Front End Designer</span>
                +62 878-3803-9520
                <div class="social">
                  <a href="https://www.instagram.com/ihsanherdiansyah/" target="_blank"><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="300">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/ainan.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Ainani Tajriyan Muntaharridwan</h4>
                <span>Designer & Data Collector & Tester</span>
                +62 821-2052-4105
                <div class="social">
                  <a href="https://www.instagram.com/ainanitajriyan_/" target="_blank"><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Pertanyaan Paling Sering Ditanyakan</h2>
        </div>
        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">Apakah meminum banyak air putih bisa mencegah virus corona? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                <p>
                  Mengonsumsi air putih minimal 8 gelas sehari atau 2 liter sehari memang dianjurkan dan baik untuk kesehatan tubuh, namun apakah hal tersebut dapat mencegah terjadinya virus corona?
Menurut WHO, hanya dengan meminum air putih saja, kamu tidak bisa mencegah penularan virus corona.
                </p>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Mengapa orang yang dicurigai tertular virus corona harus diisolasi 14 hari? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                <p>Virus corona biasanya menunjukkan gejala-gejala dalam 1 – 14 hari. Karena itu, orang yang dicurigai harus diisolasi selama 14 hari, baik di rumah sakit, rumah atau lokasi lain dan dipantau gejala-gejala yang muncul seperti demam, batuk atau sesak napas. Untuk memastikan infeksi virus corona, suspek dapat mengikuti tes beberapa kali.</p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Apa yang harus saya lakukan jika anggota keluarga menunjukkan gejala virus corona? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-parent=".faq-list">
              <p>Segera cari pertolongan kesehatan bila Anda atau anak mengalami demam, batuk dan kesulitan bernapas. Telepon sarana kesehatan terlebih dahulu untuk memberi tahu jika Anda telah melakukan perjalanan ke wilayah di mana dilaporkan ada kasus virus corona (COVID-19) atau bila Anda pernah bertemu dengan seseorang yang telah melakukan perjalanan ke wilayah itu dan menunjukkan gejala-gejalanya.</p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">Adakah pengobatan untuk virus corona?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                <p>
                  Saat ini belum ada pengobatan khusus yang efektif untuk infeksi virus corona baru. Vaksin mungkin baru bisa tersedia 18 bulan ke depan (2021).
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">Apakah virus corona dapat menular ke anak-anak atau ibu hamil? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                <p>Ini adalah virus baru dan kita belum memperoleh pengetahuan yang cukup tentang bagaimana virus mempengaruhi anak-anak atau ibu hamil. Yang telah diketahui: siapapun dari semua kelompok usia dapat terinfeksi virus. Yang kita tahu, sejauh ini jumlah kasus anak-anak terbilang sedikit</p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section>
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Layanan Pengaduan</h2>
        </div>

        <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

          <div class="col-lg-5">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Jl. Kliningan No.6, Turangga, Kec. Lengkong, Kota Bandung, Jawa Barat 40264</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>coforba@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>119</p>
              </div>

            </div>
          </div>
          <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">
            <form action="{{ url('index') }}" method="post">
              @csrf
              <div class="form-row">

                <div class="col-md-6 form-group">
                  <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>

                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>

              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="judul" placeholder="Judul" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="konsultasi" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Silahkan Konsultasikan Kepada Kami"></textarea>
                <div class="validate"></div>
              </div>
              <div class="text-center"><button type="submit" class="button">Kirim Pengaduan</button></div>
              <br>
              @if(session('success'))
              <div class="alert alert-success">
                {{ session('success') }}
              </div>
              @endif
              @if(session('error'))
              <div class="alert alert-error">
                {{ session('error') }}
              </div>
              @endif
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section -->
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Konsultasi Online</h4>
            <p>Anda bisa melakukan konsultasi online untuk membantu kami dalam memutus rantai COVID-19</p>
            <button type="button" class="btn btn-info">
              <a href="{{ url('/konsultasi/create') }}"> <font color="white">Lakukan Konsultasi Online</font></a>
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Jl. Kliningan No.6, Turangga, Kec. Lengkong, Kota Bandung, Jawa Barat 40264
              <strong>Phone:</strong> +62 227303736<br>
              <strong>Email:</strong> coforba@gmail.com.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About COFORBA</h3>
            <p>Aplikasi COFORBA adalah aplikasi berbasis web yang dimana fungsinya adalah sebagai sistem informasi mengensi penanganan COVID-19 khususnya di Kota Bandung.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>COFORBA</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
