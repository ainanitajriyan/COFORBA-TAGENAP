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
          <li><a href="{{ url('/relawan') }}">Daftar Relawan</a></li>
          <li class="active"><a href="{{ url('/relawan/create') }}">Form Pendaftaran Relawan</a></li>
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
          <li><a href="{{ url('/relawan') }}">Daftar Relawan</a></li>
          <li>Form Pendaftaran Relawan</li>
        </ol>
        <h2>Form Pendaftaran Relawan</h2>
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
            <form action="{{ url('relawan', @$relawan->id) }}" method="POST">
              @csrf

              @if(!empty($relawan))
                @method('PATCH')
              @endif
                <table class="table">
                <tr>
                  <td>NIK</td>
                  <td><input type="text" name="nik" value="{{ old('nik', @$relawan->nik) }}" /></td>
                </tr>
                <tr>
                  <td>Pekerjaan</td>
                  <td><input type="text" name="pekerjaan" value="{{ old('pekerjaan', @$relawan->pekerjaan) }}" /></td>
                </tr>
                <tr>
                  <td>Pendapatan</td>
                  <td><input type="text" name="pendapatan" value="{{ old('pendapatan', @$relawan->pendapatan) }}" /></td>
                </tr>
                <tr>
                  <td>Keahlian</td>
                  <td>
                    <select name="keahlian" class="custom-select" >
                    <option value="">Pilih Keahlian</option>
                    <option value="Perawat" {{ old('keahlian', @$relawan->keahlian) == 'Perawat' ? 'selected' : '' }}> Perawat </option>
                    <option value="Konsultan" {{ old('keahlian', @$relawan->keahlian) == 'Konsultan' ? 'selected' : '' }}> Konsultan </option>
                    <option value="Apoteker" {{ old('keahlian', @$relawan->keahlian) == 'Apoteker' ? 'selected' : '' }}> Apoteker </option>
                    <option value="Relawan Lapangan" {{ old('keahlian', @$relawan->keahlian) == 'Relawan Lapangan' ? 'selected' : '' }}> Relawan Lapangan </option>
                    </select><br/><br/>
                  </td>
                </tr>
                <tr>
                  <td>Rumah Sakit Rujukan Relawan COVID-19</td>
                  <td>
                    <select name="rs_rujukan" class="custom-select" >
                    <option value="">Pilih Rumah Sakit Rujukan </option>
                    <option value="RSU Dr. Hasan Sadikin" {{ old('rs_rujukan', @$relawan->rs_rujukan) == 'RSU Dr. Hasan Sadikin' ? 'selected' : '' }}>RSU Dr. Hasan Sadikin </option>
                    <option value="RSTP Dr. H. A. Rotinsulu" {{ old('rs_rujukan', @$relawan->rs_rujukan) == 'RSTP Dr. H. A. Rotinsulu' ? 'selected' : '' }}> RSTP Dr. H. A. Rotinsulu </option>
                    <option value="RS Immanuel Bandung" {{ old('rs_rujukan', @$relawan->rs_rujukan) == 'RS Immanuel Bandung' ? 'selected' : '' }}> RS Immanuel Bandung </option>
                    <option value="RS Santo Borromeus" {{ old('rs_rujukan', @$relawan->rs_rujukan) == 'RS Santo Borromeus' ? 'selected' : '' }}> RS Santo Borromeus</option>
                    <option value="RS Santo Yusup Bandung" {{ old('rs_rujukan', @$relawan->rs_rujukan) == 'RS Santo Yusup Bandung' ? 'selected' : '' }}> RS Santo Yusup Bandung </option>
                    <option value="RS Al Islam Bandung" {{ old('rs_rujukan', @$relawan->rs_rujukan) == 'RS Al Islam Bandung' ? 'selected' : '' }}> RS Al Islam Bandung </option>
                    <option value="RS Advent Bandung" {{ old('rs_rujukan', @$relawan->rs_rujukan) == 'RS Advent Bandung' ? 'selected' : '' }}> RS Advent Bandung </option>
                    <option value="Santosa Hospital Bandung Central" {{ old('rs_rujukan', @$relawan->rs_rujukan) == 'Santosa Hospital Bandung Central' ? 'selected' : '' }}> Santosa Hospital Bandung Central </option>
                    <option value="RSUD Kota Bandung" {{ old('rs_rujukan', @$relawan->rs_rujukan) == 'RSUD Kota Bandung' ? 'selected' : '' }}> RSUD Kota Bandung </option>
                    </select><br/><br/>
                </td>
              </tr>
              <tr>
                <td align="center"><input type="submit" class="btn btn-primary" value="Daftar">&nbsp;&nbsp;<a href="{{ url('/relawan') }}" class="btn btn-primary">Kembali</a></td>
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
