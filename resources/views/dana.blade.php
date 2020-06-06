<!DOCTYPE html>
<html lang="en">

<head>
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
          <li class="active"><a href="{{ url('/dana') }}">Daftar Donasi Uang Tunai</a></li>
          <li><a href="{{ url('/dana/create') }}">Form Donasi Uang Tunai</a></li>
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
          <li>Donasi Uang Tunai</li>
        </ol>
        <h2>Donasi Uang Tunai</h2>
        <a href="{{ url('/dana/create') }}" class="btn btn-info">
          Ayo Berdonasi!
        </a>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pengirim</th>
                  <th>Jenis Kelamin</th>
                  <th>Nominal</th>
                  <th>Pembayaran</th>
                  <th>Bukti Pengiriman</th>
                  <th>Keperluan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama Pengirim</th>
                    <th>Jenis Kelamin</th>
                    <th>Nominal</th>
                    <th>Pembayaran</th>
                    <th>Bukti Pengiriman</th>
                    <th>Keperluan</th>
                    <th>Aksi</th>
                </tr>
              </tfoot>
              <tbody>
                @foreach ($dana as $row)
                <tr>
                    <td class="text-center">{{ isset($i) ? ++$i : $i = 1 }}</td>
                    <td> {{ @$row->pengguna->nama }} </td>
                    <td> {{ @$row->pengguna->jenkel }} </td>
                    <td > {{ $row->nominal }} </td>
                    <td > {{ $row->pembayaran}} </td>
                    <td>  <img src="{{ url('/dokumen_donasi_dana/'. $row->foto)}}" width="100px" alt=""> </td>
                    <td> {{ $row->keperluan }}</td>
                    </td>
                    <td>
                    <form class="" action="{{ url('/dana', $row->id) }}" method="post">
                      @method('DELETE')
                      @csrf
                        <a class="btn btn-warning btn-sm"  href="{{ url('/dana/' . $row->id . '/edit') }}"  role="button">Edit</a>
                      <button type="submit" class="btn btn-danger btn-sm"name="button">Delete</button>
                    </form> </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    <!-- End Portfolio Details Section -->
  </main>
  <!-- End #main -->

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
