-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2026 at 03:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web2_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `email`) VALUES
(1, 'Diva', 'admin', '0192023a7bbd73250516f069df18b500', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `judul`, `deskripsi`, `gambar`) VALUES
(1, 'MMG', 'My Mamih Gue', 'WhatsApp Image 2026-06-21 at 19.24.54.jpeg'),
(3, 'MMG', 'My mamih gue', 'WhatsApp Image 2026-06-21 at 19.24.55.jpeg'),
(4, 'MMG', 'My Mamih Gue', 'WhatsApp Image 2026-06-21 at 19.24.55 (1).jpeg'),
(5, 'MMG', 'My Mamih Gue', 'WhatsApp Image 2026-06-21 at 19.24.55 (2).jpeg'),
(6, 'MMG', 'My Mamih Gue', 'WhatsApp Image 2026-06-21 at 19.24.55 (3).jpeg'),
(7, 'MMG', 'My Mamih Gue', 'WhatsApp Image 2026-06-21 at 19.24.56.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(20) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `prodi` varchar(100) DEFAULT NULL,
  `usia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `prodi`, `usia`) VALUES
(1, '202518101', 'Tiara Andini', 'Sistem Informasi', 20),
(2, '202518102', 'Sari Fitri', 'Manajemen Informatika', 22),
(3, '202518103', 'Rizky Febian', 'Sistem Informasi', 19),
(4, '202518104', 'Pamungkas Mas', 'Teknik Informatika', 20),
(5, '202518105', 'Ondie Lee', 'Sistem Informasi', 21);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `level` enum('ADMIN','OPERATOR') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama_lengkap`, `username`, `password`, `email`, `level`) VALUES
(1, 'Budi Santoso', 'budi', '827ccb0eea8a706c4c34a16891f84e7b', 'budi@email.com', 'OPERATOR'),
(2, 'Siti Aminah', 'siti', '827ccb0eea8a706c4c34a16891f84e7b', 'siti@email.com', 'OPERATOR'),
(3, 'Achmad Fauzi', 'fauzi', '827ccb0eea8a706c4c34a16891f84e7b', 'fauzi@email.com', 'OPERATOR'),
(4, 'Muhammad Saipul Ikhrom', 'ipul1', '827ccb0eea8a706c4c34a16891f84e7b', 'saipul@email.com', 'ADMIN'),
(5, 'Diva aninditya putri', 'diva', '827ccb0eea8a706c4c34a16891f84e7b', 'admin@gmail.com', 'ADMIN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
