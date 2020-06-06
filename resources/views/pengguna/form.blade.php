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
      <h1 class="logo mr-auto"><a href="{{ url('/index') }}" class="scrollto">COFORBA</a></h1>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="{{ url('/index') }}">Home</a></li>
          <li><a href="{{ url('/pengguna') }}">Daftar Pengguna COFORBA</a></li>
          <li class="active"><a href="{{ url('/pengguna/create') }}">Form Pendaftaran Pengguna COFORBA</a></li>
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
          <li><a href="{{ url('/index') }}">Home</a></li>
          <li><a href="{{ url('/pengguna') }}">Daftar Pengguna COFORBA</a></li>
          <li>Form Pendaftaran Pengguna COFORBA</li>
        </ol>
        <h2>Form Pendaftaran Pengguna COFORBA</h2>
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
              <form action="{{ url('pengguna', @$pengguna->id) }}" method="post">
                @csrf

                @if(!empty($pengguna))
                  @method('PATCH')
                @endif
                <table class="table">
              <tr>
                <td>NIK</td>
                <td><input type="text" name="nik" value="{{ old('nik', @$pengguna->nik) }}"/></td>
              </tr>
              <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama" value="{{ old('nama', @$pengguna->nama) }}" /></td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td>
                <td><label><input type="radio" name="jenkel" value="L" {{ old('jenkel', @$pengguna->jenkel) == 'L' ? 'checked' : '' }}/> L</label><br/>
                <label><input type="radio" name="jenkel" value="P" {{ old('jenkel', @$pengguna->jenkel) == 'P' ? 'checked' : '' }}/> P</label></td>
              </tr>
              <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="tempatlahir" value="{{ old('tempatlahir', @$pengguna->tempatlahir) }}" /></td>
              </tr>
              <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tgl_lahir" value="{{ old('tgl_lahir', @$pengguna->tgl_lahir) }}" /></td>
              </tr>
              <tr>
                <td>Usia</td>
                <td><input type="text" name="usia" value="{{ old('usia', @$pengguna->usia) }}" /></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="{{ old('alamat', @$pengguna->alamat) }}" /></td>
              </tr>
              <tr>
                <td>Kota</td>
                <td><input type="text" name="kota" value="{{ old('kota', @$pengguna->kota) }}" /></td>
              </tr>
              <tr>
                <td>Kecamatan</td>
                <td>
                      <select name="kecamatan" class="custom-select" >
                      <option value="">Pilih Kecamatan</option>
                      <option value="Andir" {{ old('kecamatan', @$pengguna->kecamatan) == 'Andir' ? 'selected' : '' }}> Andir </option>
                      <option value="Astana Anyar" {{ old('kecamatan', @$pengguna->kecamatan) == 'Astana Anyar' ? 'selected' : '' }}>Astana Anyar</option>
                      <option value="Antapani" {{ old('kecamatan', @$pengguna->kecamatan) == 'Antapani' ? 'selected' : '' }}>Antapani</option>
                      <option value="Arcamanik" {{ old('kecamatan', @$pengguna->kecamatan) == 'Arcamanik' ? 'selected' : '' }}>Arcamanik</option>
                      <option value="Babakan Ciparay" {{ old('kecamatan', @$pengguna->kecamatan) == 'Babakan Ciparay' ? 'selected' : '' }}>Babakan Ciparay</option>
                      <option value="Bandung Kidul" {{ old('kecamatan', @$pengguna->kecamatan) == 'Bandung Kidul' ? 'selected' : '' }}>Bandung Kidul</option>
                      <option value="Bandung Kulon" {{ old('kecamatan', @$pengguna->kecamatan) == 'Bandung Kulon' ? 'selected' : '' }}>Bandung Kulon</option>
                      <option value="Bandung Wetan" {{ old('kecamatan', @$pengguna->kecamatan) == 'Bandung Wetan' ? 'selected' : '' }}>Bandung Wetan</option>
                      <option value="Batununggal" {{ old('kecamatan', @$pengguna->kecamatan) == 'Batununggal' ? 'selected' : '' }}>Batununggal</option>
                      <option value="Bojongloa Kaler" {{ old('kecamatan', @$pengguna->kecamatan) == 'Bojongloa Kaler' ? 'selected' : '' }}>Bojongloa Kaler</option>
                      <option value="Bojongloa Kidul" {{ old('kecamatan', @$pengguna->kecamatan) == 'Bojongloa Kidul' ? 'selected' : '' }}>Bojongloa Kidul</option>
                      <option value="Buahbatu" {{ old('kecamatan', @$pengguna->kecamatan) == 'Buahbatu' ? 'selected' : '' }}>Buahbatu</option>
                      <option value="Cibeunying Kidul" {{ old('kecamatan', @$pengguna->kecamatan) == 'Cibeunying Kidul' ? 'selected' : '' }}>Cibeunying Kaler</option>
                      <option value="Cibeunying Kaler" {{ old('kecamatan', @$pengguna->kecamatan) == 'Cibeunying Kaler' ? 'selected' : '' }}>Cibeunying Kidul</option>
                      <option value="Cibiru" {{ old('kecamatan', @$pengguna->kecamatan) == 'Cibiru' ? 'selected' : '' }}>Cibiru</option>
                      <option value="Cidadap" {{ old('kecamatan', @$pengguna->kecamatan) == 'Cidadap' ? 'selected' : '' }}>Cidadap</option>
                      <option value="Cicendo" {{ old('kecamatan', @$pengguna->kecamatann) == 'Cicendo' ? 'selected' : '' }}>Cicendo</option>
                      <option value="Cinambo" {{ old('kecamatan', @$pengguna->kecamatan) == 'Cinambo' ? 'selected' : '' }}>Cinambo</option>
                      <option value="Coblong" {{ old('kecamatan', @$pengguna->kecamatan) == 'Coblong' ? 'selected' : '' }}>Coblong</option>
                      <option value="Kiaracondong" {{ old('kecamatan', @$pengguna->kecamatan) == 'Kiaracondong' ? 'selected' : '' }}>Kiaracondong</option>
                      <option value="Cedebage" {{ old('kecamatan', @$pengguna->kecamatan) == 'Gedebage' ? 'selected' : '' }}>Gedebage</option>
                      <option value="Lengkong" {{ old('kecamatan', @$pengguna->kecamatan) == 'Lengkong' ? 'selected' : '' }}>Lengkong</option>
                      <option value="Mandalajati" {{ old('kecamatan', @$pengguna->kecamatan) == 'Mandalajati' ? 'selected' : '' }}>Mandalajati</option>
                      <option value="Panyileukan" {{ old('kecamatan', @$pengguna->kecamatan) == 'Panyileukan' ? 'selected' : '' }}>Panyileukan</option>
                      <option value="Rancasari" {{ old('kecamatan', @$pengguna->kecamatan) == 'Rancasari' ? 'selected' : '' }}>Rancasari</option>
                      <option value="Regol" {{ old('kecamatan', @$pengguna->kecamatan) == 'Regol' ? 'selected' : '' }}>Regol</option>
                      <option value="Sukajadi" {{ old('kecamatan', @$pengguna->kecamatan) == 'Sukajadi' ? 'selected' : '' }}>Sukajadi</option>
                      <option value="Sukasari" {{ old('kecamatan', @$pengguna->kecamatan) == 'Sukasari' ? 'selected' : '' }}>Sukasari</option>
                      <option value="Sumur Bandung" {{ old('kecamatan', @$pengguna->kecamatan) == 'Sumur Bandung' ? 'selected' : '' }}>Sumur Bandung</option>
                      <option value="Ujung Berung" {{ old('kecamatan', @$pengguna->kecamatan) == 'Ujung Berung' ? 'selected' : '' }}>Ujung Berung</option>
                      </select><br/><br/>
                    </td>
              </tr>
              <tr>
                <td>Kelurahan</td>
                <td><input type="text" name="kelurahan" value="{{ old('kelurahan', @$pengguna->kelurahan) }}" /></td>
              </tr>
              <tr>
                <td>No Telepon</td>
                <td><input type="text" name="telepon" value="{{ old('telepon', @$pengguna->telepon) }}" /></td>
              </tr>
              <tr>
                <td>Email </td>
                <td><input type="text" name="email" value="{{ old('email', @$pengguna->email) }}" /></td>
              </tr>
                <td align="center"><input type="submit" class="btn btn-primary" value="Simpan"/>&nbsp;&nbsp;<a href="{{ url('/pengguna') }}" class="btn btn-primary">Kembali</a></td>
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
