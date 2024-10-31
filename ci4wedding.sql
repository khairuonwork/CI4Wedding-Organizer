-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 31, 2024 at 12:45 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku_acara`
--

CREATE TABLE `buku_acara` (
  `id_acara` int NOT NULL,
  `waktu` varchar(30) NOT NULL,
  `nama_acara` varchar(255) NOT NULL,
  `detail_acara` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `buku_acara`
--

INSERT INTO `buku_acara` (`id_acara`, `waktu`, `nama_acara`, `detail_acara`) VALUES
(2, '08:00-09:15', 'Tamu Datang', 'Persiapan di Pintu Masuk');

-- --------------------------------------------------------

--
-- Table structure for table `buku_panitia`
--

CREATE TABLE `buku_panitia` (
  `id_panitia` int NOT NULL,
  `nama_panitia` varchar(50) NOT NULL,
  `tugas_panitia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `buku_panitia`
--

INSERT INTO `buku_panitia` (`id_panitia`, `nama_panitia`, `tugas_panitia`) VALUES
(1, 'Daffa', 'Ambil Makanan'),
(2, 'Kaira', 'Mengarahkan Tamu di Pintu'),
(4, 'Kira', 'Bawa Dimsum');

-- --------------------------------------------------------

--
-- Table structure for table `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `id_tamu` int NOT NULL,
  `nama_tamu` varchar(50) NOT NULL,
  `relasi_tamu` varchar(50) NOT NULL,
  `pesan_tamu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `buku_tamu`
--

INSERT INTO `buku_tamu` (`id_tamu`, `nama_tamu`, `relasi_tamu`, `pesan_tamu`) VALUES
(1, 'Daffa', 'Keluarga', 'Test'),
(2, 'Daffa', 'Keluarga', 'Test'),
(3, 'Daffa', 'Keluarga', 'Test'),
(4, 'Daffa', 'Keluarga', 'Test'),
(5, 'Daffa', 'Keluarga', 'Test'),
(6, 'Yafi', 'Keluarga', 'Test'),
(7, 'Sarah', 'Keluarga', 'Test'),
(8, 'Daffa', 'Keluarga', 'Test'),
(9, 'Daffa', 'Keluarga', 'Test'),
(10, 'Daffa', 'Keluarga', 'Test'),
(11, 'Daffa', 'Keluarga', 'Test'),
(12, 'Daffa', 'Keluarga', 'Test'),
(13, 'Daffa', 'Teman', 'Test'),
(14, 'Daffa', 'Keluarga', 'Test\r\n'),
(15, 'Kai', 'Teman', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `buku_warning`
--

CREATE TABLE `buku_warning` (
  `id_warning` int NOT NULL,
  `detail_warning` varchar(255) NOT NULL,
  `pelapor_warning` varchar(255) NOT NULL,
  `status_warning` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `buku_warning`
--

INSERT INTO `buku_warning` (`id_warning`, `detail_warning`, `pelapor_warning`, `status_warning`) VALUES
(1, 'Dimsum Habis', 'Daffa', 'MEDIUM'),
(3, 'Kurang Kursi', 'Kaira', 'HIGH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku_acara`
--
ALTER TABLE `buku_acara`
  ADD PRIMARY KEY (`id_acara`);

--
-- Indexes for table `buku_panitia`
--
ALTER TABLE `buku_panitia`
  ADD PRIMARY KEY (`id_panitia`);

--
-- Indexes for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- Indexes for table `buku_warning`
--
ALTER TABLE `buku_warning`
  ADD PRIMARY KEY (`id_warning`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku_acara`
--
ALTER TABLE `buku_acara`
  MODIFY `id_acara` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `buku_panitia`
--
ALTER TABLE `buku_panitia`
  MODIFY `id_panitia` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  MODIFY `id_tamu` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `buku_warning`
--
ALTER TABLE `buku_warning`
  MODIFY `id_warning` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
