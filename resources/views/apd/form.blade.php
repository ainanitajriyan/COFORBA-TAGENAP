<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>COFORBA (Covid Information Bandung)</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Anyar - v2.0.0
  * Template URL: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">
      <h1 class="logo mr-auto"><a href="{{ url('/index') }}#services" class="scrollto">COFORBA</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="{{ url('/index') }}#services">Home</a></li>
          <li><a href="{{ url('/apd') }}">Daftar Donasi APD</a></li>
          <li class="active"><a href="{{ url('/apd/create') }}">Form Donasi Alat Pelindung Diri</a></li>
        </ul>
      </nav>
      <!-- .nav-menu -->
    </div>
  </header>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ url('/index') }}#services">Home</a></li>
          <li><a href="{{ url('/apd') }}">Donasi APD</a></li>
          <li>Form Donasi Alat Pelindung Diri</li>
        </ol>
        <h2>Form Donasi Alat Pelindung Diri</h2>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
        <div class="card-body">
          <div class="table-responsive">
            @if(session('error'))
            <div class="alert alert-error">
              {{session('error')}}
            </div>
            @endif

            @if(count($errors) > 0)
            <div class="alert alert-danger">
              <strong>Perhatian</strong>
              <br/>
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
            <div class="form-group">
            <form action="{{ url('apd', @$apd->id) }}" method="post" enctype="multipart/form-data">
              @csrf
              @if(!empty($apd))
                @method('PATCH')
              @endif
                <table class="table">
                <tr>
                  <td>NIK</td>
                  <td><input type="text" name="nik" value="{{ old('nik', @$apd->nik) }}" /></td>
                </tr>
                <tr>
                  <td>Masukan Jumlah Masker</td>
                  <td><input type="text" name="masker" value="{{ old('masker', @$apd->masker) }}"/></td>
                </tr>
                <tr>
                  <td>Masukan Jumlah Pelindung Mata</td>
                  <td><input type="text" name="pelindung_mata" value="{{ old('pelindung_mata', @$apd->pelindung_mata) }}"/>  </td>
                </tr>
                <tr>
                  <td>Masukan Jumlah Pelindung Wajah</td>
                  <td><input type="text" name="pelindung_wajah" value="{{ old('pelindung_wajah', @$apd->pelindung_wajah) }}"/></td>
                </tr>
                <tr>
                  <td>Masukan Jumlah Gaun Medis</td>
                  <td><input type="text" name="gaun_medis" value="{{ old('gaun_medis', @$apd->gaun_medis) }}"/></td>
                </tr>
                <tr>
                  <td>Masukan Jumlah Sarung Tangan Medis</td>
                  <td><input type="text" name="sarung_tangan_medis" value="{{ old('sarung_tangan_medis', @$apd->sarung_tangan_medis) }}"/></td>
                </tr>
                <tr>
                  <td>Masukan Jumlah Penutup Kepala Medis</td>
                  <td><input type="text" name="penutup_kepala" value="{{ old('penutup_kepala', @$apd->penutup_kepala) }}"/></td>
                </tr>
                <tr>
                  <td>Masukan Jumlah Sepatu Pelindung Medis</td>
                  <td><input type="text" name="sepatu_pelindung" value="{{ old('sepatu_pelindung', @$apd->sepatu_pelindung) }}"/></td>
                </tr>
                <tr>
                  <td>Masukan Foto Bukti Donasi</td>
                  <td>
                    <input type="file" name="foto" />
                    <!-- Apabila Foto kosong pada saat Edit -->
                    <img src="{{url('/dokumen_donasi_apd/'. @$apd->foto)}}" width="80px" alt=""/>
                    <!-- tidak melakukan perubahan pada foto -->
                    <input type="hidden" name="hidden_image" value="{{@$apd->foto}}"/>
                  </td>
                </tr>
                <tr>
                  <td>Masukan Resi Pengiriman APD</td>
                  <td><input type="text" name="resi_pengiriman" value="{{ old('resi_pengiriman', @$apd->resi_pengiriman) }}"/></td>
                </tr>
                  <td align="center">
                    <input type="submit" class="btn btn-primary" value="Kirim">
                    <a href="{{ url('/apd') }}" class="btn btn-primary">Kembali</a>
                  </td>
                </tr>
              </table>
              </form>
          </div>
        </div>
      </div>
    <!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Jl. Kliningan No.6, Turangga, Kec. Lengkong, Kota Bandung, Jawa Barat 40264
              <strong>Phone:</strong> +62 227303736<br>
              <strong>Email:</strong> coforba@gmail.com<br>
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
    <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
