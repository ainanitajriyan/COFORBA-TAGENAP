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
          <li class="active"><a href="{{ url('/apd') }}">Daftar Donasi APD</a></li>
          <li><a href="{{ url('/apd/create') }}">Form Donasi Alat Pelindung Diri</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header>
  <!-- End Header -->

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ url('/index') }}#services">Home</a></li>
          <li>Donasi APD</li>
        </ol>
        <h2>Donasi APD</h2>
        <a href="{{ url('/apd/create') }}" class="btn btn-info">
          Ayo Donasi APD!
        </a>
      </div>
    </section>

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
                  <th>Masker</th>
                  <th>Pelindung Mata</th>
                  <th>Pelindung Wajah</th>
                  <th>Baju Hazmat</th>
                  <th>Sarung Tangan Medis</th>
                  <th>Penutup Kepala</th>
                  <th>Sepatu Pelindung</th>
                  <th>Total Banyak Barang</th>
                  <th>Dokumentasi APD</th>
                  <th>Resi Pengiriman</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tfoot>
                <th>No</th>
                <th>Nama Pengirim</th>
                <th>Masker</th>
                <th>Pelindung Mata</th>
                <th>Pelindung Wajah</th>
                <th>Baju Hazmat</th>
                <th>Sarung Tangan Medis</th>
                <th>Penutup Kepala</th>
                <th>Sepatu Pelindung</th>
                <th>Total Banyak Barang</th>
                <th>Dokumentasi APD</th>
                <th>Resi Pengiriman</th>
                <th>Aksi</th>
                </tr>
              </tfoot>
              @foreach ($apd as $row)
              <tbody>
                <td class="text-center">{{ isset($i) ? ++$i : $i = 1 }}</td>
                <td> {{ @$row->pengguna->nama }} </td>
                <td > {{ $row->masker }} </td>
                <td > {{ $row->pelindung_mata}} </td>
                <td> {{ $row->pelindung_wajah }}</td>
                <td> {{ $row->gaun_medis }}</td>
                <td > {{ $row->sarung_tangan_medis }} </td>
                <td > {{ $row->penutup_kepala }} </td>
                <td > {{ $row->sepatu_pelindung }} </td>
                <td > {{ $row->total }} </td>
                <td>  <img src="{{ url('/dokumen_donasi_apd/'. $row->foto)}}" width="100px" alt=""> </td>
                <td > {{ $row->resi_pengiriman }} </td>
                <td>
                <form class="" action="{{ url('/apd', $row->id) }}" method="post">
                  @method('DELETE')
                  @csrf
                    <a class="btn btn-warning btn-sm"  href="{{ url('/apd/' . $row->id . '/edit') }}"  role="button">Edit</a>
                  <button type="submit" class="btn btn-danger btn-sm"name="button">Delete</button>
                </form>
                </td>
              </tbody>
              @endforeach
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
