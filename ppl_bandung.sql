-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2015 at 01:18 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ppl_bandung`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_04_05_140918_create_ktp_table', 1),
('2015_04_22_151203_reset_all_db', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ppl_aparter_jenis_kendaraan`
--

CREATE TABLE IF NOT EXISTS `ppl_aparter_jenis_kendaraan` (
`id_jenis_kendaraan` int(10) unsigned NOT NULL,
  `jenis_kendaraan_parkir` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ppl_aparter_jenis_kendaraan`
--

INSERT INTO `ppl_aparter_jenis_kendaraan` (`id_jenis_kendaraan`, `jenis_kendaraan_parkir`) VALUES
(1, 'Roda 2'),
(2, 'Roda 4');

-- --------------------------------------------------------

--
-- Table structure for table `ppl_aparter_kecamatan`
--

CREATE TABLE IF NOT EXISTS `ppl_aparter_kecamatan` (
`id_kecamatan` int(10) unsigned NOT NULL,
  `nama_kecamatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ppl_aparter_kecamatan`
--

INSERT INTO `ppl_aparter_kecamatan` (`id_kecamatan`, `nama_kecamatan`) VALUES
(1, 'Campaka'),
(2, 'Ciroyom'),
(3, 'Dugus Cariang'),
(4, 'Garuda'),
(5, 'Kebonjeruk'),
(6, 'Maleber'),
(7, 'Antapani Kidul'),
(8, 'Antapani Kulon'),
(9, 'Antapani Tengah'),
(10, 'Antapani Wetan'),
(11, 'Cisaranten Endah'),
(12, 'Cisaranten Kulon'),
(13, 'Cisaranten Bina Harapan');

-- --------------------------------------------------------

--
-- Table structure for table `ppl_aparter_lahan`
--

CREATE TABLE IF NOT EXISTS `ppl_aparter_lahan` (
`id_lahan` int(10) unsigned NOT NULL,
  `luas` double NOT NULL,
  `id_terminal` int(10) unsigned NOT NULL,
  `id_pemilik` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `harga` int(10) unsigned NOT NULL,
  `tenggat` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ppl_aparter_lahan`
--

INSERT INTO `ppl_aparter_lahan` (`id_lahan`, `luas`, `id_terminal`, `id_pemilik`, `status`, `harga`, `tenggat`) VALUES
(1, 30, 1, '3273060611940005', 'request perluasan menjadi 15129', 400000, '2015-05-01'),
(2, 40, 2, '3273060611940005', 'Request perluasan', 300000, '2015-05-01'),
(3, 80, 3, '3273060611940005', 'request perluasan menjadi 207936', 550000, '2015-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `ppl_aparter_notifications`
--

CREATE TABLE IF NOT EXISTS `ppl_aparter_notifications` (
`id` int(10) unsigned NOT NULL,
  `id_ktp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci,
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `is_admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ppl_aparter_notifications`
--

INSERT INTO `ppl_aparter_notifications` (`id`, `id_ktp`, `subject`, `body`, `is_read`, `is_admin`) VALUES
(1, '3273060611940005', 'Pendaftaran Lahan Parkir Pribadi Jl. Bebek 42', 'Pendaftaran Lahan Parkir Pribadi Jl. Bebek 42 sudah diterima.', 0, 0),
(2, '3273060611940005', 'Pendaftaran Rekomendasi Parkir Jl. Ayam Blok F1', 'Pendaftaran Rekomendasi Parkir Jl. Ayam Blok F1 sudah diterima.', 0, 0),
(3, '3273060611940005', 'Tenggat Waktu Lahan Terminal Dago', 'Batas pembayaran lahan di Terminal Dago akan mencapai waktu tenggat.', 0, 0),
(4, '3273060611940005', 'Pendaftaran Lahan Parkir Pribadi coblong', 'Pendaftaran lahan parkir pribadi di coblong sudah diterima.', 0, 0),
(5, '3273060611940005', 'Permintaan Perluasan Lahan ID 1', 'Permintaan perluasan lahan dengan ID 1 sudah diterima.', 0, 0),
(6, '3273060611940005', 'Permintaan Perluasan Lahan ID 1', 'Permintaan perluasan lahan dengan ID 1 sudah diterima.', 0, 0),
(7, '3273060611940005', 'Permintaan Perluasan Lahan ID 3', 'Permintaan perluasan lahan dengan ID 3 sudah diterima.', 0, 0),
(8, '3273060611940005', 'Pembayaran Bulanan Lahan ID 2', 'Pendaftaran sewa lahan dengan ID 2 sudah diterima.', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ppl_aparter_parkir`
--

CREATE TABLE IF NOT EXISTS `ppl_aparter_parkir` (
`id_parkir` int(10) unsigned NOT NULL,
  `id_pemilik` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_kecamatan` int(10) unsigned NOT NULL,
  `id_jenis_kendaraan` int(10) unsigned NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `luas` double(8,2) NOT NULL,
  `tarif` int(10) unsigned NOT NULL,
  `tenggat` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ppl_aparter_parkir`
--

INSERT INTO `ppl_aparter_parkir` (`id_parkir`, `id_pemilik`, `id_kecamatan`, `id_jenis_kendaraan`, `alamat`, `lokasi`, `status`, `luas`, `tarif`, `tenggat`) VALUES
(1, '3273060611940005', 1, 1, 'Jl. Bebek 42', '', 'Registrasi', 100.00, 2000, '2015-05-01'),
(2, '3273060611940005', 1, 1, 'Jl. Ganesha 10', '', 'Registrasi', 50.00, 1000, '2015-05-07'),
(3, '3273060611940005', 1, 1, 'Jl. Kanayakan 14', '', 'Registrasi', 85.00, 1000, '2015-05-02'),
(4, '3273060611940005', 1, 1, 'coblong', '0,0', 'Registrasi', 300.00, 3000, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `ppl_aparter_pembayaran`
--

CREATE TABLE IF NOT EXISTS `ppl_aparter_pembayaran` (
`id_pembayaran` int(10) unsigned NOT NULL,
  `id_tempat_parkir` int(10) unsigned DEFAULT NULL,
  `id_tempat_lahan` int(10) unsigned DEFAULT NULL,
  `pembayaran_terakhir` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ppl_aparter_terminal`
--

CREATE TABLE IF NOT EXISTS `ppl_aparter_terminal` (
`id_terminal` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah_lahan` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ppl_aparter_terminal`
--

INSERT INTO `ppl_aparter_terminal` (`id_terminal`, `nama`, `alamat`, `lokasi`, `jumlah_lahan`) VALUES
(1, 'Terminal Leuwi Panjang', 'Leuwi Panjang', '0,0', 20),
(2, 'Terminal Ledeng', 'Ledeng', '0,0', 15),
(3, 'Terminal Cicaheum', 'Cicaheum', '0,0', 25),
(4, 'Terminal ST. Hall', 'Stasiun', '0,0', 50),
(5, 'Terminal Lembang', 'Leuwi Panjang', '0,0', 37),
(6, 'Terminal Kebon Kelapa', 'Kebon Kelapa', '0,0', 41),
(7, 'Terminal Margahayu', 'Margahayu', '0,0', 27);

-- --------------------------------------------------------

--
-- Table structure for table `ppl_dukcapil_ktp`
--

CREATE TABLE IF NOT EXISTS `ppl_dukcapil_ktp` (
`id` int(10) unsigned NOT NULL,
  `nik` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kota_lahir` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gol_darah` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rt` int(10) unsigned NOT NULL,
  `rw` int(10) unsigned NOT NULL,
  `kel_desa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kec` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kota_kab` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kode_pos` int(10) unsigned NOT NULL,
  `agama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kewarganegaraan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ttd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_kadaluarsa` date NOT NULL,
  `kota_dikeluarkan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prov_dikeluarkan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_dikeluarkan` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ppl_dukcapil_ktp`
--

INSERT INTO `ppl_dukcapil_ktp` (`id`, `nik`, `password`, `nama`, `kota_lahir`, `tanggal_lahir`, `jenis_kelamin`, `gol_darah`, `alamat`, `rt`, `rw`, `kel_desa`, `kec`, `kota_kab`, `kode_pos`, `agama`, `status`, `kewarganegaraan`, `foto`, `ttd`, `tgl_kadaluarsa`, `kota_dikeluarkan`, `prov_dikeluarkan`, `tgl_dikeluarkan`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, '3273060611940005', 'hohohoho', 'test', 'sdasds', '2015-04-01', 'lak', 'B', 'dsadsasad', 4, 4, 'sdsdsaddsa', 'ggjhjh', 'kjkjh', 1234556, 'jhjkhk', 'kjhjkhjk', 'kjhjk', 'hkjhjkhjk', 'kjhjhk', '2015-04-29', 'lsdkadlkasj', 'lklkjlkj', '2015-04-15', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ppl_aparter_jenis_kendaraan`
--
ALTER TABLE `ppl_aparter_jenis_kendaraan`
 ADD PRIMARY KEY (`id_jenis_kendaraan`);

--
-- Indexes for table `ppl_aparter_kecamatan`
--
ALTER TABLE `ppl_aparter_kecamatan`
 ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `ppl_aparter_lahan`
--
ALTER TABLE `ppl_aparter_lahan`
 ADD PRIMARY KEY (`id_lahan`), ADD KEY `ppl_aparter_lahan_id_terminal_foreign` (`id_terminal`), ADD KEY `ppl_aparter_lahan_id_pemilik_foreign` (`id_pemilik`);

--
-- Indexes for table `ppl_aparter_notifications`
--
ALTER TABLE `ppl_aparter_notifications`
 ADD PRIMARY KEY (`id`), ADD KEY `ppl_aparter_notifications_id_ktp_foreign` (`id_ktp`);

--
-- Indexes for table `ppl_aparter_parkir`
--
ALTER TABLE `ppl_aparter_parkir`
 ADD PRIMARY KEY (`id_parkir`), ADD KEY `ppl_aparter_parkir_id_pemilik_foreign` (`id_pemilik`), ADD KEY `ppl_aparter_parkir_id_kecamatan_foreign` (`id_kecamatan`), ADD KEY `ppl_aparter_parkir_id_jenis_kendaraan_foreign` (`id_jenis_kendaraan`);

--
-- Indexes for table `ppl_aparter_pembayaran`
--
ALTER TABLE `ppl_aparter_pembayaran`
 ADD PRIMARY KEY (`id_pembayaran`), ADD KEY `ppl_aparter_pembayaran_id_tempat_parkir_foreign` (`id_tempat_parkir`), ADD KEY `ppl_aparter_pembayaran_id_tempat_lahan_foreign` (`id_tempat_lahan`);

--
-- Indexes for table `ppl_aparter_terminal`
--
ALTER TABLE `ppl_aparter_terminal`
 ADD PRIMARY KEY (`id_terminal`);

--
-- Indexes for table `ppl_dukcapil_ktp`
--
ALTER TABLE `ppl_dukcapil_ktp`
 ADD PRIMARY KEY (`id`), ADD KEY `ppl_dukcapil_ktp_nik_index` (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ppl_aparter_jenis_kendaraan`
--
ALTER TABLE `ppl_aparter_jenis_kendaraan`
MODIFY `id_jenis_kendaraan` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ppl_aparter_kecamatan`
--
ALTER TABLE `ppl_aparter_kecamatan`
MODIFY `id_kecamatan` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `ppl_aparter_lahan`
--
ALTER TABLE `ppl_aparter_lahan`
MODIFY `id_lahan` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ppl_aparter_notifications`
--
ALTER TABLE `ppl_aparter_notifications`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `ppl_aparter_parkir`
--
ALTER TABLE `ppl_aparter_parkir`
MODIFY `id_parkir` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ppl_aparter_pembayaran`
--
ALTER TABLE `ppl_aparter_pembayaran`
MODIFY `id_pembayaran` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ppl_aparter_terminal`
--
ALTER TABLE `ppl_aparter_terminal`
MODIFY `id_terminal` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `ppl_dukcapil_ktp`
--
ALTER TABLE `ppl_dukcapil_ktp`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ppl_aparter_lahan`
--
ALTER TABLE `ppl_aparter_lahan`
ADD CONSTRAINT `ppl_aparter_lahan_id_pemilik_foreign` FOREIGN KEY (`id_pemilik`) REFERENCES `ppl_dukcapil_ktp` (`nik`) ON DELETE CASCADE,
ADD CONSTRAINT `ppl_aparter_lahan_id_terminal_foreign` FOREIGN KEY (`id_terminal`) REFERENCES `ppl_aparter_terminal` (`id_terminal`) ON DELETE CASCADE;

--
-- Constraints for table `ppl_aparter_notifications`
--
ALTER TABLE `ppl_aparter_notifications`
ADD CONSTRAINT `ppl_aparter_notifications_id_ktp_foreign` FOREIGN KEY (`id_ktp`) REFERENCES `ppl_dukcapil_ktp` (`nik`) ON DELETE CASCADE;

--
-- Constraints for table `ppl_aparter_parkir`
--
ALTER TABLE `ppl_aparter_parkir`
ADD CONSTRAINT `ppl_aparter_parkir_id_jenis_kendaraan_foreign` FOREIGN KEY (`id_jenis_kendaraan`) REFERENCES `ppl_aparter_jenis_kendaraan` (`id_jenis_kendaraan`) ON DELETE CASCADE,
ADD CONSTRAINT `ppl_aparter_parkir_id_kecamatan_foreign` FOREIGN KEY (`id_kecamatan`) REFERENCES `ppl_aparter_kecamatan` (`id_kecamatan`) ON DELETE CASCADE,
ADD CONSTRAINT `ppl_aparter_parkir_id_pemilik_foreign` FOREIGN KEY (`id_pemilik`) REFERENCES `ppl_dukcapil_ktp` (`nik`) ON DELETE CASCADE;

--
-- Constraints for table `ppl_aparter_pembayaran`
--
ALTER TABLE `ppl_aparter_pembayaran`
ADD CONSTRAINT `ppl_aparter_pembayaran_id_tempat_lahan_foreign` FOREIGN KEY (`id_tempat_lahan`) REFERENCES `ppl_aparter_lahan` (`id_lahan`) ON DELETE CASCADE,
ADD CONSTRAINT `ppl_aparter_pembayaran_id_tempat_parkir_foreign` FOREIGN KEY (`id_tempat_parkir`) REFERENCES `ppl_aparter_parkir` (`id_parkir`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
