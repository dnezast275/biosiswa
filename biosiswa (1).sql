-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3310
-- Generation Time: Aug 18, 2020 at 05:12 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biosiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata-siswa`
--

CREATE TABLE `biodata-siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelas` varchar(8) NOT NULL,
  `jenis-kelamin` varchar(10) NOT NULL,
  `nis` varchar(9) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nomor-kk` varchar(16) NOT NULL,
  `tempat-lahir` varchar(50) NOT NULL,
  `tanggal-lahir` varchar(10) NOT NULL,
  `nomor-akte` varchar(30) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `kebutuhan-khusus` varchar(50) NOT NULL,
  `alamat` varchar(400) NOT NULL,
  `desa` varchar(150) NOT NULL,
  `kecamatan` varchar(150) NOT NULL,
  `kota` varchar(150) NOT NULL,
  `kode-pos` varchar(5) NOT NULL,
  `tinggal-bersama` varchar(150) NOT NULL,
  `transportasi` varchar(150) NOT NULL,
  `asal-sekolah` varchar(150) NOT NULL,
  `nopes-un` varchar(150) NOT NULL,
  `no-ijazah` varchar(150) NOT NULL,
  `no-skhun` varchar(150) NOT NULL,
  `nomor-kip` varchar(20) NOT NULL,
  `nomor-kis` varchar(20) NOT NULL,
  `nomor-kks` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data-ayah`
--

CREATE TABLE `data-ayah` (
  `id` int(11) NOT NULL,
  `nis-siswa` varchar(9) NOT NULL,
  `nama-ayah` varchar(150) NOT NULL,
  `nik-ayah` varchar(16) NOT NULL,
  `tahun-lahir-ayah` varchar(4) NOT NULL,
  `pendidikan-ayah` varchar(50) NOT NULL,
  `pekerjaan-ayah` varchar(50) NOT NULL,
  `penghasilan-ayah` varchar(150) NOT NULL,
  `kebutuhan-ayah` varchar(150) NOT NULL,
  `no-hp-ayah` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data-ibu`
--

CREATE TABLE `data-ibu` (
  `id` int(11) NOT NULL,
  `nis-siswa` varchar(9) NOT NULL,
  `nama-ibu` varchar(150) NOT NULL,
  `nik-ibu` varchar(16) NOT NULL,
  `tahun-lahir-ibu` varchar(4) NOT NULL,
  `pendidikan-ibu` varchar(50) NOT NULL,
  `pekerjaan-ibu` varchar(50) NOT NULL,
  `penghasilan-ibu` varchar(150) NOT NULL,
  `kebutuhan-ibu` varchar(150) NOT NULL,
  `no-hp-ibu` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data-periodik`
--

CREATE TABLE `data-periodik` (
  `id` int(11) NOT NULL,
  `nis-siswa` varchar(9) NOT NULL,
  `email` varchar(200) NOT NULL,
  `tinggi-badan` varchar(3) NOT NULL,
  `berat-badan` varchar(3) NOT NULL,
  `lingkar-kepala` varchar(3) NOT NULL,
  `jarak-tempuh` varchar(3) NOT NULL,
  `waktu-tempuh` varchar(3) NOT NULL,
  `anak-ke` varchar(3) NOT NULL,
  `saudara` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data-prestasi`
--

CREATE TABLE `data-prestasi` (
  `id` int(11) NOT NULL,
  `nis-siswa` varchar(9) NOT NULL,
  `jenis-prestasi` varchar(150) NOT NULL,
  `tingkat-prestasi` varchar(150) NOT NULL,
  `nama-prestasi` varchar(250) NOT NULL,
  `tahun-prestasi` varchar(4) NOT NULL,
  `penyelenggara` varchar(252) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data-wali`
--

CREATE TABLE `data-wali` (
  `id` int(11) NOT NULL,
  `nis-siswa` varchar(9) NOT NULL,
  `nama-wali` varchar(150) NOT NULL,
  `nik-wali` varchar(16) NOT NULL,
  `tahun-lahir-wali` varchar(4) NOT NULL,
  `pendidikan-wali` varchar(50) NOT NULL,
  `pekerjaan-wali` varchar(150) NOT NULL,
  `penghasilan-wali` varchar(150) NOT NULL,
  `kebutuhan-wali` varchar(150) NOT NULL,
  `no-hp-wali` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kebutuhan-khusus`
--

CREATE TABLE `kebutuhan-khusus` (
  `id` int(11) NOT NULL,
  `nama-kebutuhan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kebutuhan-khusus`
--

INSERT INTO `kebutuhan-khusus` (`id`, `nama-kebutuhan`) VALUES
(1, 'Tidak ada'),
(2, 'Tuna Rungu'),
(3, 'Tuna Netra'),
(4, 'Grahita ringan'),
(5, 'Grahita sedang'),
(6, 'Daksa ringan'),
(7, 'Daksa sedang'),
(8, 'Tuna Wicara'),
(9, 'Tuna ganda'),
(10, 'Hiperaktif'),
(11, 'Cerdas Istimewa'),
(12, 'Bakat Istimewa'),
(13, 'Kesulitan Belajar'),
(14, 'Narkoba'),
(15, 'Indigo'),
(16, 'Down Sindrom'),
(17, 'Autis');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int(11) NOT NULL,
  `kendaraan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `kendaraan`) VALUES
(1, 'Jalan Kaki'),
(2, 'Kendaraan pribadi'),
(3, 'Kendaraan umum/angkot/pete-pete'),
(4, 'Jemputan sekolah'),
(5, 'Kereta api'),
(6, 'Ojek'),
(7, 'Andong/bendi/sado/dokar/delman/beca'),
(8, 'Perahu penyebrangan/rakit/getek'),
(9, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` int(11) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `pekerjaan`) VALUES
(1, 'Tidak bekerja'),
(2, 'Nelayan'),
(3, 'Petani'),
(4, 'Peternak'),
(5, 'PNS/TNI/POLRI'),
(6, 'Karyawan Swasta'),
(7, 'Pedagang Kecil'),
(8, 'Pedagang Besar'),
(9, 'Wiraswasta'),
(10, 'Wirausaha'),
(11, 'Buruh'),
(12, 'Pensiunan');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(11) NOT NULL,
  `sekolah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `sekolah`) VALUES
(1, 'Tidak Sekolah'),
(2, 'Putus SD'),
(3, 'SD Sederajat'),
(4, 'SMP Sederajat'),
(5, 'SMA Sederajat'),
(6, 'D1'),
(7, 'D2'),
(8, 'D3'),
(9, 'D4/S1'),
(10, 'S2'),
(11, 'S3');

-- --------------------------------------------------------

--
-- Table structure for table `penghasilan`
--

CREATE TABLE `penghasilan` (
  `id` int(11) NOT NULL,
  `penghasilan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penghasilan`
--

INSERT INTO `penghasilan` (`id`, `penghasilan`) VALUES
(1, '< Rp. 500.000'),
(2, 'Rp. 500.000 - Rp. 999.999'),
(3, 'Rp. 1.000.000 - Rp. 1.999.999'),
(4, 'Rp. 2.000.000 - Rp. 4.999.999'),
(5, 'Rp. 5.000.000 - Rp. 20.000.000'),
(6, '> Rp. 20.000.000'),
(7, 'Tidak berpenghasilan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata-siswa`
--
ALTER TABLE `biodata-siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data-ayah`
--
ALTER TABLE `data-ayah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data-ibu`
--
ALTER TABLE `data-ibu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data-periodik`
--
ALTER TABLE `data-periodik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data-prestasi`
--
ALTER TABLE `data-prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data-wali`
--
ALTER TABLE `data-wali`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kebutuhan-khusus`
--
ALTER TABLE `kebutuhan-khusus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penghasilan`
--
ALTER TABLE `penghasilan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata-siswa`
--
ALTER TABLE `biodata-siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `data-ayah`
--
ALTER TABLE `data-ayah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data-ibu`
--
ALTER TABLE `data-ibu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data-periodik`
--
ALTER TABLE `data-periodik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data-prestasi`
--
ALTER TABLE `data-prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data-wali`
--
ALTER TABLE `data-wali`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kebutuhan-khusus`
--
ALTER TABLE `kebutuhan-khusus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `penghasilan`
--
ALTER TABLE `penghasilan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
