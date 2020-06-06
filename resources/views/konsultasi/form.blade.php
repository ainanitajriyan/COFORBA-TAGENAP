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
      <h1 class="logo mr-auto"><a href="{{ url('/index') }}#contact" class="scrollto">COFORBA</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="{{ url('/index') }}#contact">Home</a></li>
          <li><a href="{{ url('/konsultasi') }}">Hasil Konsultasi</a></li>
          <li class="active"><a href="{{ url('/konsultasi/create') }}">Form Konsultasi Online</a></li>
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
          <li><a href="{{ url('/index') }}#contact">Home</a></li>
          <li><a href="{{ url('/konsultasi') }}">Hasil Konsultasi Online</a></li>
          <li>Form Konsultasi Online</li>
        </ol>
        <h2> Form Konsultasi Online</h2>
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
              <form action="{{ url('konsultasi', @$konsultasi->id) }}" method="post">
                @csrf

                @if(!empty($konsultasi))
                  @method('PATCH')
                @endif
                <table class="table">
              <tr>
                <td>Apakah Anda Merasakan Batuk?</td>
                <td><label><input type="radio" name="batuk" value="Ya" {{ old('batuk', @$konsultasi->batuk) == 'Ya' ? 'checked' : '' }}/> Ya</label><br/>
                  <label><input type="radio" name="batuk" value="Tidak" {{ old('batuk', @$konsultasi->batuk) == 'Tidak' ? 'checked' : '' }}/> Tidak</label></td>
              </tr>
              <tr>
                <td>Apakah Anda Merasakan Pilek?</td>
                <td><label><input type="radio" name="pilek" value="Ya" {{ old('pilek', @$konsultasi->pilek) == 'Ya' ? 'checked' : '' }}/> Ya</label><br/>
                    <label><input type="radio" name="pilek" value="Tidak" {{ old('pilek', @$konsultasi->pilek) == 'Tidak' ? 'checked' : '' }}/> Tidak</label></td>
              </tr>
              <tr>
                <td>Apakah Anda Merasakan Sakit Tenggorokan?</td>
                <td><label><input type="radio" name="sakit_tenggorokan" value="Ya" {{ old('sakit_tenggorokan', @$konsultasi->sakit_tenggorokan) == 'Ya' ? 'checked' : '' }}/> Ya</label><br/>
                  <label><input type="radio" name="sakit_tenggorokan" value="Tidak" {{ old('sakit_tenggorokan', @$konsultasi->sakit_tenggorokan) == 'sakit_tenggorokan' ? 'checked' : '' }}/> Tidak</label></td>
              </tr>
              <tr>
                <td>Apakah Anda Merasakan Menggigil?</td>
                <td><label><input type="radio" name="menggigil" value="Ya" {{ old('menggigil', @$konsultasi->menggigil) == 'Ya' ? 'checked' : '' }}/> Ya </label><br/>
                  <label><input type="radio" name="menggigil" value="Tidak" {{ old('menggigil', @$konsultasi->menggigil) == 'Tidak' ? 'checked' : '' }}/> Tidak</label></td>
              </tr>
              <tr>
                <td>Apakah Suhu Badan Anda Mencapai 38-40 derajat?</td>
                <td><label><input type="radio" name="suhu_badan" value="Ya" {{ old('suhu_badan', @$konsultasi->suhu_badan) == 'Ya' ? 'checked' : '' }}/> Ya</label><br/>
                  <label><input type="radio" name="suhu_badan" value="Tidak" {{ old('suhu_badan', @$konsultasi->suhu_badan) == 'Tidak' ? 'checked' : '' }}/> Tidak</label></td>
              </tr>
              <tr>
                <td>Apakah Anda Merasakan Lemah/Lesu?</td>
                <td><label><input type="radio" name="lemah_lesu" value="Ya" {{ old('lemah_lesu', @$konsultasi->lemah_lesu) == 'Ya' ? 'checked' : '' }}/> Ya</label><br/>
                  <label><input type="radio" name="lemah_lesu" value="Tidak" {{ old('lemah_lesu', @$konsultasi->lemah_lesu) == 'Tidak' ? 'checked' : '' }}/> Tidak</label></td>
              </tr>
              <tr>
                <td>Apakah Anda Merasakan Sakit Kepala?</td>
                <td><label><input type="radio" name="sakit_kepala" value="Ya" {{ old('sakit_kepala', @$konsultasi->sakit_kepala) == 'Ya' ? 'checked' : '' }}/> Ya</label><br/>
                  <label><input type="radio" name="sakit_kepala" value="Tidak" {{ old('sakit_kepala', @$konsultasi->sakit_kepala) == 'Tidak' ? 'checked' : '' }}/> Tidak</label></td>
              </tr>
              <tr>
                <td>Apakah Anda Merasakan Nyeri Otot?</td>
                <td><label><input type="radio" name="nyeri_otot" value="Ya" {{ old('nyeri_otot', @$konsultasi->nyeri_otot) == 'Ya' ? 'checked' : '' }}/> Ya</label><br/>
                  <label><input type="radio" name="nyeri_otot" value="Tidak" {{ old('nyeri_otot', @$konsultasi->nyeri_otot) == 'Tidak' ? 'checked' : '' }}/> Tidak</label></td>
              </tr>
              <tr>
                <td>Apakah Anda Merasakan Nyeri Perut?</td>
                <td><label><input type="radio" name="nyeri_perut" value="Ya" {{ old('nyeri_perut', @$konsultasi->nyeri_perut) == 'Ya' ? 'checked' : '' }}/> Ya</label><br/>
                  <label><input type="radio" name="nyeri_perut" value="Tidak" {{ old('nyeri_perut', @$konsultasi->nyeri_perut) == 'Tidak' ? 'checked' : '' }}/> Tidak</label></td>
              </tr>
              <tr>
                <td>Apakah Anda Merasakan Mual?</td>
                <td><label><input type="radio" name="mual" value="Ya" {{ old('mual', @$konsultasi->mual) == 'Ya' ? 'checked' : '' }}/> Ya</label><br/>
                  <label><input type="radio" name="mual" value="Tidak" {{ old('mual', @$konsultasi->mual) == 'Tidak' ? 'checked' : '' }}/> Tidak</label></td>
              </tr>
              <tr>
                <td>Apakah Anda Merasakan Diare?</td>
                <td><label><input type="radio" name="diare" value="Ya" {{ old('diare', @$konsultasi->diare) == 'Ya' ? 'checked' : '' }}/> Ya</label><br/>
                  <label><input type="radio" name="diare" value="Tidak" {{ old('diare', @$konsultasi->diare) == 'Tidak' ? 'checked' : '' }}/> Tidak</label></td>
              </tr>
              <tr>
                <td>
                Apakah Anda Mempunyai Riwayat Penyakit Khusus?</td>
                <td><input type="text" name="riwayat_penyakit" value="{{ old('riwayat_penyakit', @$konsultasi->riwayat_penyakit) }}" /></td>
              </tr>
              <tr>
                <td>
                Apakah Anda Merasakan Gejala Lainnya Selain dari Apa yang Telah Disebutkan Diatas?</td>
                <td><input type="text" name="gejala_lainnya" value="{{ old('gejala_lainnya', @$konsultasi->gejala_lainnya) }}" /></td>
              </tr>
              <tr>
                <td>
                Apakah Anda Melakukan Perjalanan ke Luar Negeri dalam 14 hari terakhir? Jika ya, maka isi nama negara yang anda kunjungi!</td>
                <td><input type="text" name="negara_kunjungan" value="{{ old('negara_kunjungan', @$konsultasi->negara_kunjungan) }}" /></td>
              </tr>
              <tr>
                <td>
                Apakah Anda Melakukan Perjalanan ke Luar Kota dalam 14 hari terakhir? Jika ya, maka isi nama kota yang anda kunjungi!</td>
                <td><input type="text" name="kota_kunjungan" value="{{ old('kota_kunjungan', @$konsultasi->kota_kunjungan) }}" /></td>
              </tr>
              <tr>
                <td>
                Tanggal Berapakah Anda Melakukan Pemberangkaan Perjalanan ke Luar Negeri/Kota?</td>
                <td><input type="date" name="tgl_berangkat" value="{{ old('tgl_berangkat', @$konsultasi->tgl_berangkat) }}" /></td>
              </tr>
              <td>
              Tanggal Berapakah Anda Melakukan Kepulangan dari Luar Negeri/Kota?</td>
              <td><input type="date" name="tgl_pulang" value="{{ old('tgl_pulang', @$konsultasi->tgl_pulang) }}" /></td>
            </tr>
                <td align="center">
              <input type="submit" class="btn btn-primary" value="Kirim"/>
              <a href="{{ url('/index') }}" class="btn btn-primary">Kembali</a>
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
