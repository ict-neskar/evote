-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Okt 2022 pada 09.51
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swara-ex`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `class`
--

CREATE TABLE `class` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jurusans` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusanl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rombel` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `class`
--

INSERT INTO `class` (`id`, `jurusans`, `jurusanl`, `kelas`, `rombel`, `created_at`, `updated_at`) VALUES
(1, 'DPIB', 'Desain Pemodelan Dan Informasi Bangunan', 'X', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'DPIB', 'Desain Pemodelan Dan Informasi Bangunan', 'X', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'TM', 'Teknik Pemesinan', 'X', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'TM', 'Teknik Pemesinan', 'X', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'TM', 'Teknik Pemesinan', 'X', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'TM', 'Teknik Pemesinan', 'X', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'TM', 'Teknik Perancangan Gambar Mesin', 'X', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'TM', 'Teknik Perancangan Gambar Mesin', 'X', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'TO', 'Teknik Kendaraan Ringan Otomotif', 'X', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'TO', 'Teknik Kendaraan Ringan Otomotif', 'X', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'TO', 'Teknik Bisnis dan Sepeda Motor', 'X', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'TO', 'Teknik Bisnis dan Sepeda Motor', 'X', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'TPFL', 'Teknik Pengelasan', 'X', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'TPFL', 'Teknik Pengelasan', 'X', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'TPFL', 'Teknik Fabrikasi Logam dan Manufaktur', 'X', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'TE', 'Teknik Elektronika Industri', 'X', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'TE', 'Teknik Elektronika Industri', 'X', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'TE', 'Teknik Elektronika Industri', 'X', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'TK', 'Teknik Instalasi Tenaga Listrik', 'X', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'TK', 'Teknik Instalasi Tenaga Listrik', 'X', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'PPLG', 'Pengembangan Perangkat Lunak Dan Gim', 'X', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'PPLG', 'Pengembangan Perangkat Lunak Dan Gim', 'X', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'TKJ', 'Teknik Komputer dan Jaringan', 'X', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'TKJ', 'Teknik Komputer dan Jaringan', 'X', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'DPIB', 'Desain Pemodelan Dan Informasi Bangunan', 'XI', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'DPIB', 'Desain Pemodelan Dan Informasi Bangunan', 'XI', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'TP', 'Teknik Pemesinan', 'XI', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'TP', 'Teknik Pemesinan', 'XI', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'TPGM', 'Teknik Perancangan Gambar Mesin', 'XI', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'TPGM', 'Teknik Perancangan Gambar Mesin', 'XI', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'TKRO', 'Teknik Kendaraan Ringan Otomotif', 'XI', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'TKRO', 'Teknik Kendaraan Ringan Otomotif', 'XI', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'TKRO', 'Teknik Kendaraan Ringan Otomotif', 'XI', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'TBSM', 'Teknik Bisnis dan Sepeda Motor', 'XI', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'TBSM', 'Teknik Bisnis dan Sepeda Motor', 'XI', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'TPL', 'Teknik Pengelasan', 'XI', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'TPL', 'Teknik Pengelasan', 'XI', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'TFLM', 'Teknik Fabrikasi Logam dan Manufaktur', 'XI', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'TEI', 'Teknik Elektronika Industri', 'XI', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'TEI', 'Teknik Elektronika Industri', 'XI', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'TEI', 'Teknik Elektronika Industri', 'XI', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'TITL', 'Teknik Instalasi Tenaga Listrik', 'XI', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'TITL', 'Teknik Instalasi Tenaga Listrik', 'XI', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'RPL', 'Pengembangan Perangkat Lunak Dan Gim', 'XI', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'RPL', 'Pengembangan Perangkat Lunak Dan Gim', 'XI', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'TKJ', 'Teknik Komputer dan Jaringan', 'XI', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'TKJ', 'Teknik Komputer dan Jaringan', 'XI', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'TKJ', 'Teknik Komputer dan Jaringan', 'XI', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'DPIB', 'Desain Pemodelan Dan Informasi Bangunan', 'XII', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'DPIB', 'Desain Pemodelan Dan Informasi Bangunan', 'XII', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'DPIB', 'Desain Pemodelan Dan Informasi Bangunan', 'XII', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'TP', 'Teknik Pemesinan', 'XII', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'TP', 'Teknik Pemesinan', 'XII', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'TPGM', 'Teknik Perancangan Gambar Mesin', 'XII', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'TKRO', 'Teknik Kendaraan Ringan Otomotif', 'XII', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'TKRO', 'Teknik Kendaraan Ringan Otomotif', 'XII', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'TBSM', 'Teknik Bisnis dan Sepeda Motor', 'XII', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'TBSM', 'Teknik Bisnis dan Sepeda Motor', 'XII', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'TPL', 'Teknik Pengelasan', 'XII', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'TPL', 'Teknik Pengelasan', 'XII', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'TFLM', 'Teknik Fabrikasi Logam dan Manufaktur', 'XII', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'TEI', 'Teknik Elektronika Industri', 'XII', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'TEI', 'Teknik Elektronika Industri', 'XII', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'TEI', 'Teknik Elektronika Industri', 'XII', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 'TITL', 'Teknik Instalasi Tenaga Listrik', 'XII', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 'TITL', 'Teknik Instalasi Tenaga Listrik', 'XII', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 'RPL', 'Pengembangan Perangkat Lunak Dan Gim', 'XII', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 'RPL', 'Pengembangan Perangkat Lunak Dan Gim', 'XII', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 'RPL', 'Pengembangan Perangkat Lunak Dan Gim', 'XII', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 'TKJ', 'Teknik Komputer dan Jaringan', 'XII', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 'TKJ', 'Teknik Komputer dan Jaringan', 'XII', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 'TKJ', 'Teknik Komputer dan Jaringan', 'XII', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 'TFLM', 'Teknik Fabrikasi Logam dan Manufaktur', 'XIII', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 'TFLM', 'Teknik Fabrikasi Logam dan Manufaktur', 'XIII', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `class`
--
ALTER TABLE `class`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
