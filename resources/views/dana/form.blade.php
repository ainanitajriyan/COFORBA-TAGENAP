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
          <li><a href="{{ url('/dana') }}">Daftar Donasi Uang Tunai</a></li>
          <li class="active"><a href="{{ url('/dana/create') }}">Form Donasi Uang Tunai</a></li>
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
          <li><a href="{{ url('/dana') }}">Donasi Uang Tunai</a></li>
          <li>Form Donasi Uang Tunai</li>
        </ol>
        <h2>Form Donasi Uang Tunai</h2>
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
            <form action="{{ url('dana', @$dana->id) }}" method="post" enctype="multipart/form-data">
              @csrf

              @if(!empty($dana))
                @method('PATCH')
              @endif
                <table class="table">
                <tr>
                  <td>NIK</td>
                  <td><input type="text" name="nik" value="{{ old('nik', @$dana->nik) }}"/></td>
                </tr>
                <tr>
                  <td>Nominal</td>
                  <td><input type="text" name="nominal" value="{{ old('nominal', @$dana->nominal) }}"/></td>
                </tr>
                <tr>
                  <td>Pembayaran</td>
                  <td>
                    <select name="pembayaran" class="custom-select" >
                    <option value="">Pilih Pembayaran</option>
                    <option value="BNI" {{ old('pembayaran', @$dana->pembayaran) == 'BNI' ? 'selected' : '' }}> BNI </option>
                    <option value="BCA" {{ old('pembayaran', @$dana->pembayaran) == 'BCA' ? 'selected' : '' }}>BCA</option>
                    <option value="BRI" {{ old('pembayaran', @$dana->pembayaran) == 'BRI' ? 'selected' : '' }}> BRI </option>
                    <option value="MANDIRI" {{ old('pembayaran', @$dana->pembayaran) == 'MANDIRI' ? 'selected' : '' }}>MANDIRI</option>
                    <option value="alfamart" {{ old('pembayaran', @$dana->pembayaran) == 'alfamart' ? 'selected' : '' }}>Alfamart </option>
                    <option value="dana" {{ old('pembayaran', @$dana->pembayaran) == 'dana' ? 'selected' : '' }}>DANA</option>
                    <option value="ovo" {{ old('pembayaran', @$dana->pembayaran) == 'ovo' ? 'selected' : '' }}>OVO</option>
                    </select><br/><br/>
                  </td>
                </tr>
                <tr>
                  <td>Masukan Foto Bukti Penyetoran</td>
                  <td>
                    <input type="file" name="foto"/> <br/>
                    <img src="{{url('/dokumen_donasi_dana/'. @$dana->foto)}}" width="80px" alt=""/>
                    <input type="hidden" name="hidden_image" value="{{@$dana->foto}}"/>
                  </td>
                </tr>
                <tr>
                  <td>Keperluan</td>
                  <td>
                    <select name="keperluan" class="custom-select" >
                      <option value="">Pilih Keperluan</option>
                      <option value="Bantuan Sosial" {{ old('keperluan', @$dana->keperluan) == 'Bantuan Sosial' ? 'selected' : '' }}> Bantuan Sosial </option>
                      <option value="Tenaga Medis" {{ old('keperluan', @$dana->keperluan) == 'Tenaga Medis' ? 'selected' : '' }}>Tenaga Medis</option>
                      <option value="Rumah Sakit Rujukan" {{ old('keperluan', @$dana->keperluan) == 'Rumah Sakit Rujukan' ? 'selected' : '' }}> Rumah Sakit Rujukan</option>
                    </select><br/><br/>
                  </td>
                </tr>
                <tr>
                  <td align="center">
                    <input type="submit" class="btn btn-primary" value="Kirim"/>
                    <a href="{{ url('/dana') }}" class="btn btn-primary">Kembali</a>
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
