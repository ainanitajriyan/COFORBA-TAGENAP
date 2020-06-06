-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jun 2020 pada 15.47
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_coforba`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_05_15_193352_create_t_pengguna', 1),
(4, '2020_05_15_202917_create_t_relawan', 2),
(5, '2020_05_16_225415_create_t_konsultasi', 3),
(6, '2020_05_17_092000_create_t_apd', 4),
(7, '2020_05_19_235734_create_t_dana', 5),
(8, '2020_05_20_000543_create_t_rs_rujukan', 6),
(9, '2020_05_20_001214_create_t_daftar_odp', 7),
(10, '2020_05_20_001704_create_t_daftar_pdp', 8),
(11, '2020_05_20_002324_create_t_daftar_positif', 9),
(12, '2020_05_20_002750_create_t_daftar_sembuh', 10),
(13, '2020_05_23_023459_create_t_meninggal', 11),
(14, '2020_05_23_024648_create_t_daftar_meninggal', 12),
(15, '2020_05_23_051650_create_t_login', 13),
(16, '2020_05_23_094650_create_users_table', 14),
(17, '2014_10_12_100000_create_password_resets_table', 15),
(18, '2020_05_25_041303_create_users_table', 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_apd`
--

CREATE TABLE `t_apd` (
  `id` int(11) UNSIGNED NOT NULL,
  `masker` int(30) NOT NULL,
  `pelindung_mata` int(30) NOT NULL,
  `pelindung_wajah` int(30) NOT NULL,
  `gaun_medis` int(30) NOT NULL,
  `sarung_tangan_medis` int(30) NOT NULL,
  `penutup_kepala` int(30) NOT NULL,
  `sepatu_pelindung` int(30) NOT NULL,
  `total` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resi_pengiriman` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_daftar_meninggal`
--

CREATE TABLE `t_daftar_meninggal` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenkel` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'L',
  `tempatlahir` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `usia` int(11) NOT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` enum('Andir','Astana Anyar','Antapani','Arcamanik','Babakan Ciparay','Bandung Kidul','Bandung Kulon','Bandung Wetan','Batununggal','Bojongloa Kaler','Bojongloa Kidul','Buah Batu','Cibeunying Kaler','Cibeunying Kidul','Cibiru','Cicendo','Cidadap','Cinambo','Coblong','Gedebage','Kiaracondong','Lengkong','Mandalajati','Panyileukan','Rancasari','Regol','Sukajadi','Sukasari','Sumur Bandung','Ujung Berung') COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_penetapan` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_daftar_odp`
--

CREATE TABLE `t_daftar_odp` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenkel` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'L',
  `tempatlahir` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `usia` int(11) NOT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` enum('Andir','Astana Anyar','Antapani','Arcamanik','Babakan Ciparay','Bandung Kidul','Bandung Kulon','Bandung Wetan','Batununggal','Bojongloa Kaler','Bojongloa Kidul','Buah Batu','Cibeunying Kaler','Cibeunying Kidul','Cibiru','Cicendo','Cidadap','Cinambo','Coblong','Gedebage','Kiaracondong','Lengkong','Mandalajati','Panyileukan','Rancasari','Regol','Sukajadi','Sukasari','Sumur Bandung','Ujung Berung') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Andir',
  `kelurahan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_penetapan` date NOT NULL,
  `status_pemantauan` enum('Isolasi','Rujukan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_penetapan_negatif` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_daftar_pdp`
--

CREATE TABLE `t_daftar_pdp` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenkel` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'L',
  `tempatlahir` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `usia` int(11) NOT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` enum('Andir','Astana Anyar','Antapani','Arcamanik','Babakan Ciparay','Bandung Kidul','Bandung Kulon','Bandung Wetan','Batununggal','Bojongloa Kaler','Bojongloa Kidul','Buah Batu','Cibeunying Kaler','Cibeunying Kidul','Cibiru','Cicendo','Cidadap','Cinambo','Coblong','Gedebage','Kiaracondong','Lengkong','Mandalajati','Panyileukan','Rancasari','Regol','Sukajadi','Sukasari','Sumur Bandung','Ujung Berung') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Andir',
  `kelurahan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_penetapan` date NOT NULL,
  `status_pengawasan` enum('Rawat Jalan','Rawat Inap') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Rawat Jalan',
  `rs_rujukan` enum('Rumah Sakit Advent','Rumah Sakit Al-islam','Rumah Sakit Borromeus','Rumah Sakit Immanuel','Rumah Sakit Khusus Kopo','Rumah Sakit Salamun','Rumah Sakit Santosa','Rumah Sakit Sartika Asih','Rumah Sakit Ujung Berung','Rumah Sakit Pindad') COLLATE utf8mb4_unicode_ci DEFAULT 'Rumah Sakit Advent',
  `status` enum('PDP','Negatif') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PDP',
  `tgl_penetapan_negatif` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_daftar_positif`
--

CREATE TABLE `t_daftar_positif` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenkel` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'L',
  `tempatlahir` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `usia` int(11) NOT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` enum('Andir','Astana Anyar','Antapani','Arcamanik','Babakan Ciparay','Bandung Kidul','Bandung Kulon','Bandung Wetan','Batununggal','Bojongloa Kaler','Bojongloa Kidul','Buah Batu','Cibeunying Kaler','Cibeunying Kidul','Cibiru','Cicendo','Cidadap','Cinambo','Coblong','Gedebage','Kiaracondong','Lengkong','Mandalajati','Panyileukan','Rancasari','Regol','Sukajadi','Sukasari','Sumur Bandung','Ujung Berung') COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_penetapan` date NOT NULL,
  `rs_perawatan` enum('Rumah Sakit Advent','Rumah Sakit Al-islam','Rumah Sakit Borromeus','Rumah Sakit Immanuel','Rumah Sakit Khusus Kopo','Rumah Sakit Salamun','Rumah Sakit Santosa','Rumah Sakit Sartika Asih','Rumah Sakit Ujung Berung','Rumah Sakit Pindad') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_daftar_sembuh`
--

CREATE TABLE `t_daftar_sembuh` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenkel` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'L',
  `tempatlahir` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `usia` int(11) NOT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` enum('Andir','Astana Anyar','Antapani','Arcamanik','Babakan Ciparay','Bandung Kidul','Bandung Kulon','Bandung Wetan','Batununggal','Bojongloa Kaler','Bojongloa Kidul','Buah Batu','Cibeunying Kaler','Cibeunying Kidul','Cibiru','Cicendo','Cidadap','Cinambo','Coblong','Gedebage','Kiaracondong','Lengkong','Mandalajati','Panyileukan','Rancasari','Regol','Sukajadi','Sukasari','Sumur Bandung','Ujung Berung') COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_penetapan` date NOT NULL,
  `status` enum('Sembuh','Isolasi') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_dana`
--

CREATE TABLE `t_dana` (
  `id` int(10) UNSIGNED NOT NULL,
  `nominal` int(11) NOT NULL,
  `pembayaran` enum('BNI','BCA','BRI','MANDIRI','ALFAMART','DANA','OVO') COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keperluan` enum('Bantuan Sosial','Tenaga Medis','Rumah Sakit Rujukan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_konsultasi`
--

CREATE TABLE `t_konsultasi` (
  `id` int(10) UNSIGNED NOT NULL,
  `batuk` enum('Ya','Tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pilek` enum('Ya','Tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `sakit_tenggorokan` enum('Ya','Tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `menggigil` enum('Ya','Tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `suhu_badan` enum('Ya','Tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `lemah_lesu` enum('Ya','Tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `sakit_kepala` enum('Ya','Tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nyeri_otot` enum('Ya','Tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nyeri_perut` enum('Ya','Tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `mual` enum('Ya','Tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `diare` enum('Ya','Tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `riwayat_penyakit` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gejala_lainnya` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `negara_kunjungan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_kunjungan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `tgl_pulang` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_meninggal`
--

CREATE TABLE `t_meninggal` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenkel` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'L',
  `tempatlahir` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `usia` int(11) NOT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` enum('Andir','Astana Anyar','Antapani','Arcamanik','Babakan Ciparay','Bandung Kidul','Bandung Kulon','Bandung Wetan','Batununggal','Bojongloa Kaler','Bojongloa Kidul','Buah Batu','Cibeunying Kaler','Cibeunying Kidul','Cibiru','Cicendo','Cidadap','Cinambo','Coblong','Gedebage','Kiaracondong','Lengkong','Mandalajati','Panyileukan','Rancasari','Regol','Sukajadi','Sukasari','Sumur Bandung','Ujung Berung') COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_penetapan` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pengaduan`
--

CREATE TABLE `t_pengaduan` (
  `id` int(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `konsultasi` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pengguna`
--

CREATE TABLE `t_pengguna` (
  `id` int(16) NOT NULL,
  `nik` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenkel` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempatlahir` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `usia` int(2) NOT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'andir',
  `kelurahan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(18) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_relawan`
--

CREATE TABLE `t_relawan` (
  `id` int(11) NOT NULL,
  `pekerjaan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendapatan` int(11) NOT NULL,
  `keahlian` enum('Perawat','Konsultan','Apoteker','Relawan Lapangan') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Perawat',
  `rs_rujukan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `t_apd`
--
ALTER TABLE `t_apd`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_daftar_meninggal`
--
ALTER TABLE `t_daftar_meninggal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_daftar_odp`
--
ALTER TABLE `t_daftar_odp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_daftar_pdp`
--
ALTER TABLE `t_daftar_pdp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_daftar_positif`
--
ALTER TABLE `t_daftar_positif`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_daftar_sembuh`
--
ALTER TABLE `t_daftar_sembuh`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_dana`
--
ALTER TABLE `t_dana`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_konsultasi`
--
ALTER TABLE `t_konsultasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_meninggal`
--
ALTER TABLE `t_meninggal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_pengaduan`
--
ALTER TABLE `t_pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_pengguna`
--
ALTER TABLE `t_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_relawan`
--
ALTER TABLE `t_relawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `t_apd`
--
ALTER TABLE `t_apd`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `t_daftar_meninggal`
--
ALTER TABLE `t_daftar_meninggal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `t_daftar_odp`
--
ALTER TABLE `t_daftar_odp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `t_daftar_pdp`
--
ALTER TABLE `t_daftar_pdp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `t_daftar_positif`
--
ALTER TABLE `t_daftar_positif`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `t_daftar_sembuh`
--
ALTER TABLE `t_daftar_sembuh`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `t_dana`
--
ALTER TABLE `t_dana`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `t_konsultasi`
--
ALTER TABLE `t_konsultasi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `t_meninggal`
--
ALTER TABLE `t_meninggal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `t_pengaduan`
--
ALTER TABLE `t_pengaduan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `t_pengguna`
--
ALTER TABLE `t_pengguna`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `t_relawan`
--
ALTER TABLE `t_relawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
