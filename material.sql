-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 19, 2018 at 06:26 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `material`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_barang` int(11) NOT NULL,
  `nama_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`id`, `kode_barang`, `nama_barang`, `satuan`, `harga_beli`, `harga_jual`, `created_at`, `updated_at`) VALUES
(1, 834762, 'kaca', '3x4 ada 50 biji', 45000, 60000, '2018-02-17 08:26:45', '2018-02-18 09:45:43'),
(2, 67476476, 'kayu', '70  batang', 70000, 80000, '2018-02-18 09:42:44', '2018-02-18 09:45:57'),
(3, 736875, 'Aci', '50 karung', 75000, 90000, '2018-02-18 09:43:32', '2018-02-18 09:46:09'),
(4, 763458, 'Genteng', '250 biji', 5000, 7500, '2018-02-18 09:44:21', '2018-02-18 09:44:21'),
(5, 6734657, 'Semen', '50 sak', 70000, 85000, '2018-02-18 09:45:01', '2018-02-18 09:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `karyawans`
--

CREATE TABLE `karyawans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nik` int(11) NOT NULL,
  `nama_karyawan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bagian` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penghasilan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `karyawans`
--

INSERT INTO `karyawans` (`id`, `nik`, `nama_karyawan`, `bagian`, `status`, `penghasilan`, `created_at`, `updated_at`) VALUES
(1, 72392345, 'Dodi', 'pengantar barang', 'SIngle', 1500000, '2018-02-17 08:03:40', '2018-02-18 09:27:17'),
(2, 6738653, 'beni', 'kasir', 'Lajang', 2000000, '2018-02-18 09:24:20', '2018-02-18 09:24:20'),
(3, 7823687, 'Tarman', 'pembersih', 'Menikah', 1500000, '2018-02-18 09:25:00', '2018-02-18 09:27:30'),
(4, 287637, 'Karyo', 'Pelayan', 'Duda', 1500000, '2018-02-18 09:26:12', '2018-02-18 09:26:12'),
(5, 782366, 'Yola', 'Administrasi', 'Menikah', 2000000, '2018-02-18 09:27:04', '2018-02-18 09:27:04');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2018_02_14_092832_create_karyawans_table', 1),
(22, '2018_02_15_081649_create_transaksis_table', 1),
(23, '2018_02_15_140240_create_stok_barangs_table', 1),
(24, '2018_02_16_062348_create_penjualans_table', 1),
(25, '2018_02_17_091850_create_pembelians_table', 1),
(26, '2018_02_17_150734_create_barangs_table', 2),
(27, '2018_02_17_153257_create_parkirans_table', 3),
(28, '2018_02_18_064629_create_suppliers_table', 4),
(29, '2018_02_18_072722_create_penjagas_table', 5),
(30, '2018_02_18_135541_create_pemesanans_table', 6),
(31, '2018_02_18_143011_create_pengirimen_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `parkirans`
--

CREATE TABLE `parkirans` (
  `id` int(10) UNSIGNED NOT NULL,
  `plat_nomor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pemilik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merk_kendaraan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parkirans`
--

INSERT INTO `parkirans` (`id`, `plat_nomor`, `nama_pemilik`, `merk_kendaraan`, `jam_masuk`, `jam_keluar`, `created_at`, `updated_at`) VALUES
(2, 'D7659TA', 'goplah', 'Mio', '12:33:00', '15:33:00', '2018-02-17 09:01:47', '2018-02-18 09:49:07'),
(3, 'D5764ZA', 'Udin', 'Beat', '08:19:00', '10:20:00', '2018-02-18 09:47:17', '2018-02-18 09:52:58'),
(4, 'D7348PS', 'Gibran', 'Smash', '19:33:00', '20:00:00', '2018-02-18 09:48:27', '2018-02-18 09:49:23'),
(5, 'D7657HA', 'Tarjo', 'Scoopy', '13:30:00', '14:45:00', '2018-02-18 09:50:39', '2018-02-18 09:50:39'),
(6, '6734576', 'Umar', 'Supra', '15:30:00', '17:30:00', '2018-02-18 09:52:26', '2018-02-18 09:52:26');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembelians`
--

CREATE TABLE `pembelians` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_pembeli` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembelians`
--

INSERT INTO `pembelians` (`id`, `nama_pembeli`, `nama_barang`, `alamat`, `satuan`, `harga`, `created_at`, `updated_at`) VALUES
(2, 'Dono', 'Batu Kerikil', 'kp bahuan rt:05 rw:10 Bojong Malaka,kec.Baleendah,kab.Bandung,Jawa Barat', '1 col', 750000, '2018-02-17 03:24:23', '2018-02-17 03:24:35'),
(3, 'Anhar', 'keramik', 'kp.parung halang Bojong Malaka,Kec Baleendah,Kab Bandung,Jawa Barat', '2 dus', 150000, '2018-02-18 09:36:58', '2018-02-18 09:36:58'),
(4, 'Nandan', 'Pasir', 'kp.Ciodeng Bojong Malaka,Kec Baleendah,Kab Bandung,Jawa Barat', '2 col', 750000, '2018-02-18 09:37:56', '2018-02-18 09:37:56'),
(5, 'Beni', 'Bata', 'kp.Nusa Baru Bojong Malaka,Kec Baleendah,Kab Bandung,Jawa Barat', '125 bji', 300000, '2018-02-18 09:38:52', '2018-02-18 09:38:52'),
(6, 'Suripto', 'Besi', 'Komplek Bojong Malaka Indah Bojong Malaka,Kec Baleendah,Kab Bandung,Jawa Barat', '4kg', 1000000, '2018-02-18 09:41:19', '2018-02-18 09:41:19');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanans`
--

CREATE TABLE `pemesanans` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_barang` int(11) NOT NULL,
  `nama_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `satuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_minta` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemesanans`
--

INSERT INTO `pemesanans` (`id`, `kode_barang`, `nama_barang`, `tanggal_pembayaran`, `satuan`, `harga_minta`, `created_at`, `updated_at`) VALUES
(1, 31165325, 'Pasir', '1018-02-12', '1 col', 100000, '2018-02-18 07:20:10', '2018-02-18 10:06:03'),
(3, 83498, 'bata', '2018-02-15', '50biji', 55000, '2018-02-18 10:03:26', '2018-02-18 10:03:26'),
(4, 7837, 'Kaca', '2018-02-16', '3x4,7biji', 350000, '2018-02-18 10:04:18', '2018-02-18 10:04:18'),
(5, 734567, 'Semen', '2018-02-17', '2 sak', 150000, '2018-02-18 10:04:51', '2018-02-18 10:04:51'),
(6, 734687, 'KAyu', '2018-02-12', '4 batang', 30000, '2018-02-18 10:05:38', '2018-02-18 10:05:38');

-- --------------------------------------------------------

--
-- Table structure for table `pengirimen`
--

CREATE TABLE `pengirimen` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pengiriman` date NOT NULL,
  `tanggal_penerima` date NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cara_bayar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengirimen`
--

INSERT INTO `pengirimen` (`id`, `kode_barang`, `tanggal_pengiriman`, `tanggal_penerima`, `alamat`, `cara_bayar`, `created_at`, `updated_at`) VALUES
(1, '2435213', '2018-01-22', '2018-02-01', 'Jl.Raya Moch.Toha Bandung,Jawa Barat', 'Transfer Rekening', '2018-02-18 08:12:40', '2018-02-18 08:22:19'),
(2, '23452', '2017-01-29', '2018-02-10', 'Jl.Raya BKR Bandung,Jawa Barat', 'Bayar Ditempat', '2018-02-18 09:59:48', '2018-02-18 09:59:48'),
(3, '35348', '2018-01-30', '2018-02-11', 'Jl.Raya Dewi sartika Bandung,Jawa Barat', 'Transfer Rekening', '2018-02-18 10:01:01', '2018-02-18 10:01:01'),
(4, '78346', '2017-01-25', '2018-02-10', 'Jl.Raya Pasir koja Bandung,Jawa Barat', 'Transfer Rekening', '2018-02-18 10:01:54', '2018-02-18 10:01:54'),
(5, '3874687', '2017-01-31', '2018-01-29', 'Jl.Raya Gatot Subroto Bandung,Jawa Barat', 'Bayar Ditempat', '2018-02-18 10:02:49', '2018-02-18 10:02:49');

-- --------------------------------------------------------

--
-- Table structure for table `penjagas`
--

CREATE TABLE `penjagas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_penjaga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` int(11) NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shift` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gaji` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penjagas`
--

INSERT INTO `penjagas` (`id`, `nama_penjaga`, `umur`, `alamat`, `shift`, `gaji`, `created_at`, `updated_at`) VALUES
(1, 'Gobed', 44, 'Komplek Bojong Malaka Indah Blok:E No:22', 'Malam', 2000000, '2018-02-18 00:53:48', '2018-02-18 00:59:04'),
(2, 'Burhan', 22, 'Komplek Regency Indah Blok:E No:22', 'malam', 2000000, '2018-02-18 10:07:00', '2018-02-18 10:08:55'),
(3, 'ivan', 35, 'Komplek cluster baleendah Indah Blok:E No:22', 'siang', 2000000, '2018-02-18 10:07:42', '2018-02-18 10:07:42'),
(4, 'Bohim', 45, 'Komplek Lewi Panjang Indah Blok:E No:22', 'siang', 2000000, '2018-02-18 10:08:13', '2018-02-18 10:08:13'),
(5, 'Gabriel', 35, 'Komplek Graha indah Indah Blok:E No:22', 'siang', 2000000, '2018-02-18 10:08:48', '2018-02-18 10:08:48');

-- --------------------------------------------------------

--
-- Table structure for table `penjualans`
--

CREATE TABLE `penjualans` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_barang` int(11) NOT NULL,
  `nama_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `sisa_stok` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penjualans`
--

INSERT INTO `penjualans` (`id`, `kode_barang`, `nama_barang`, `satuan`, `harga_jual`, `sisa_stok`, `created_at`, `updated_at`) VALUES
(1, 73487, 'Palaron', '2 meter', 15500, '50 ikat', '2018-02-17 08:06:58', '2018-02-17 08:06:58'),
(2, 73466, 'pasir', '1 col', 350000, '1 truk', '2018-02-18 09:33:35', '2018-02-18 09:35:45'),
(3, 72348, 'Lem kayu', '1 bungkus', 2500, '5 dus', '2018-02-18 09:34:09', '2018-02-18 09:34:09'),
(4, 38744, 'Plat', '1Kg', 50000, '29Kg', '2018-02-18 09:34:59', '2018-02-18 09:34:59'),
(5, 78347, 'kayu', '2 batang', 80000, '50 batang', '2018-02-18 09:35:35', '2018-02-18 09:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `stok_barangs`
--

CREATE TABLE `stok_barangs` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_barang` int(11) NOT NULL,
  `nama_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_export` date NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stok_barangs`
--

INSERT INTO `stok_barangs` (`id`, `kode_barang`, `nama_barang`, `stok`, `tanggal_export`, `harga_jual`, `created_at`, `updated_at`) VALUES
(1, 83475, 'semen', '70 sak', '2018-08-17', 62000, '2018-02-17 08:04:52', '2018-02-18 09:32:40'),
(2, 765765, 'Kusen', '50 kubik', '2017-12-30', 380000, '2018-02-18 09:28:31', '2018-02-18 09:28:31'),
(3, 34534, 'Keramik', '250 dus', '2017-01-28', 45000, '2018-02-18 09:29:14', '2018-02-18 09:29:14'),
(4, 674655, 'Batu Kerikil', '2 truk', '2017-01-27', 450000, '2018-02-18 09:30:09', '2018-02-18 09:30:09'),
(5, 63476, 'Paralon', '40 ikat', '2017-01-26', 20000, '2018-02-18 09:32:18', '2018-02-18 09:32:18');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_barang` int(11) NOT NULL,
  `nama_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perusahaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` int(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `kode_barang`, `nama_barang`, `alamat`, `perusahaan`, `no_telepon`, `created_at`, `updated_at`) VALUES
(2, 2451935, 'keramik', 'Jl.Raya Soreang Soreang,Kab Bandung,Jawa Barat', 'PT.TAHAN ABADI', 895358974, '2018-02-18 00:11:43', '2018-02-18 00:25:33'),
(3, 73487, 'Bata', 'Jl.Raya Pangalengan Pangalengan,Kab Bandung,Jawa Barat', 'PT.KUAT GEMPA', 869233187, '2018-02-18 09:55:15', '2018-02-18 09:55:15'),
(4, 743786, 'Lampu', 'Jl.Raya Bojong Soang Baleendah,Kab Bandung,Jawa Barat', 'PT.SINAR TERANG', 896543687, '2018-02-18 09:56:29', '2018-02-18 09:56:37'),
(5, 837487, 'Lem kayu', 'Jl.Raya Banjaran Banjaran,Kab Bandung,Jawa Barat', 'PT.CEPEL ABADI', 958736526, '2018-02-18 09:57:51', '2018-02-18 09:57:51'),
(6, 764764, 'kaca', 'Jl.Raya Cangkuang Dayehkolot,Kab Bandung,Jawa Barat', 'PT.KINCLONG CEMERLANG', 896453712, '2018-02-18 09:58:57', '2018-02-18 09:58:57');

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_barang` int(11) NOT NULL,
  `nama_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_beli` date NOT NULL,
  `satuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksis`
--

INSERT INTO `transaksis` (`id`, `kode_barang`, `nama_barang`, `tanggal_beli`, `satuan`, `harga`, `created_at`, `updated_at`) VALUES
(1, 8736486, 'Semen', '2018-03-23', '1 sak', 62000, '2018-02-17 08:02:48', '2018-02-17 08:02:48'),
(2, 245248, 'bata', '2018-02-17', '150 biji', 300000, '2018-02-18 08:55:55', '2018-02-18 08:55:55'),
(3, 67237, 'Kusen', '2018-02-13', '1 kubik', 400000, '2018-02-18 09:12:02', '2018-02-18 09:12:02'),
(4, 7623776, 'keramik', '2018-02-10', '2 dus', 130000, '2018-02-18 09:12:45', '2018-02-18 09:12:45'),
(5, 87237, 'Lem kayu', '2018-02-11', '2 bungkus', 6000, '2018-02-18 09:13:23', '2018-02-18 09:23:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rizky', 'rizky12345@gmail.com', '$2y$10$ztYuhQEERztsKva1Mo21W.CzyZwXAR81AowHwEJqKNfEgPQZ17KdO', 'cZND6f4ezGztncFg287U6MRfNC1MbTq69SadXn13nnx7bf5JoO5sWp8sPuHQ', '2018-02-17 23:44:40', '2018-02-17 23:44:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `barangs_kode_barang_unique` (`kode_barang`);

--
-- Indexes for table `karyawans`
--
ALTER TABLE `karyawans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `karyawans_nik_unique` (`nik`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parkirans`
--
ALTER TABLE `parkirans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `parkirans_plat_nomor_unique` (`plat_nomor`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pembelians`
--
ALTER TABLE `pembelians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanans`
--
ALTER TABLE `pemesanans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pemesanans_kode_barang_unique` (`kode_barang`);

--
-- Indexes for table `pengirimen`
--
ALTER TABLE `pengirimen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pengirimen_kode_barang_unique` (`kode_barang`);

--
-- Indexes for table `penjagas`
--
ALTER TABLE `penjagas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualans`
--
ALTER TABLE `penjualans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `penjualans_kode_barang_unique` (`kode_barang`);

--
-- Indexes for table `stok_barangs`
--
ALTER TABLE `stok_barangs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `stok_barangs_kode_barang_unique` (`kode_barang`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `suppliers_kode_barang_unique` (`kode_barang`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transaksis_kode_barang_unique` (`kode_barang`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `karyawans`
--
ALTER TABLE `karyawans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `parkirans`
--
ALTER TABLE `parkirans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pembelians`
--
ALTER TABLE `pembelians`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pemesanans`
--
ALTER TABLE `pemesanans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengirimen`
--
ALTER TABLE `pengirimen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `penjagas`
--
ALTER TABLE `penjagas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `penjualans`
--
ALTER TABLE `penjualans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stok_barangs`
--
ALTER TABLE `stok_barangs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
