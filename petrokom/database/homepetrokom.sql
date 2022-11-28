-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 11:59 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homepetrokom`
--

-- --------------------------------------------------------

--
-- Table structure for table `dbaslab`
--

CREATE TABLE `dbaslab` (
  `id_aslab` int(11) NOT NULL,
  `nama_aslab` varchar(30) NOT NULL,
  `nim_aslab` varchar(15) NOT NULL,
  `no_aslab` varchar(15) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `kelompok` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbaslab`
--

INSERT INTO `dbaslab` (`id_aslab`, `nama_aslab`, `nim_aslab`, `no_aslab`, `keterangan`, `kelompok`) VALUES
(1, 'Putrie Aurelia Riyono', '1909076004', '081213141516', 'Asisten Basis Data', 1),
(2, 'Alya Arsenly', '1909076020', '082223242526', 'Asisten Basis Data', 2),
(3, 'Muhammad Arya Delwizar', '1909076026', '083233343536', 'Asisten Struktur Data', 1),
(4, 'Siska Mayra Andini', '1909076027', '084243444546', 'Asisten Struktur Data', 2);

-- --------------------------------------------------------

--
-- Table structure for table `praktikanbd`
--

CREATE TABLE `praktikanbd` (
  `id_praktikan` int(11) NOT NULL,
  `nama_praktikan` varchar(30) NOT NULL,
  `nim_praktikan` varchar(15) NOT NULL,
  `kelompok_bd` enum('1','2','tidak mengikuti') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `praktikanbd`
--

INSERT INTO `praktikanbd` (`id_praktikan`, `nama_praktikan`, `nim_praktikan`, `kelompok_bd`) VALUES
(1, 'Aprillia Amrina Ainurrosyida', '1909076016', '1'),
(2, 'Ahmad Akbar ', '1909076003', '1'),
(3, 'Eki Rian Cavalera', '1909076028', '1'),
(4, 'Chandra Bayuaji', '2009076030', '1'),
(5, 'Mahesa Adskhan Al-Aqsa', '2009076031', '1'),
(6, 'Calvin Antares', '2009076032', '2'),
(7, 'Felixiano Halim', '2009076033', '2'),
(8, 'Abimayu Jinendra Adsy', '2009076034', '2'),
(9, 'Jusuf Nagara', '2009076035', '2'),
(10, 'Kirino Isha Khalil', '2009076036', '2'),
(11, 'Ayis Januar', '2009076038', '2');

-- --------------------------------------------------------

--
-- Table structure for table `praktikansd`
--

CREATE TABLE `praktikansd` (
  `id_praktikan` int(11) NOT NULL,
  `nama_praktikan` varchar(30) NOT NULL,
  `nim_praktikan` varchar(15) NOT NULL,
  `kelompok_sd` enum('1','2','tidak mengikuti') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `praktikansd`
--

INSERT INTO `praktikansd` (`id_praktikan`, `nama_praktikan`, `nim_praktikan`, `kelompok_sd`) VALUES
(1, 'Aprillia Amrina Ainurrosyida', '1909076016', '1'),
(2, 'Ahmad Akbar ', '1909076003', '1'),
(3, 'Chandra Bayuaji', '2009076030', '1'),
(4, 'Mahesa Adskhan Al-Aqsa', '2009076031', '1'),
(5, 'Calvin Antares', '2009076032', '2'),
(6, 'Felixiano Halim', '20009076033', '2'),
(7, 'Abimayu Jinendra Adsy', '2009076034', '2'),
(8, 'Jusuf Nagara', '2009076035', '2'),
(9, 'Kirino Isha Khalil', '2009076036', '2'),
(10, 'Ayis Januar', '2009076038', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dbaslab`
--
ALTER TABLE `dbaslab`
  ADD PRIMARY KEY (`id_aslab`);

--
-- Indexes for table `praktikanbd`
--
ALTER TABLE `praktikanbd`
  ADD PRIMARY KEY (`id_praktikan`);

--
-- Indexes for table `praktikansd`
--
ALTER TABLE `praktikansd`
  ADD PRIMARY KEY (`id_praktikan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dbaslab`
--
ALTER TABLE `dbaslab`
  MODIFY `id_aslab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `praktikanbd`
--
ALTER TABLE `praktikanbd`
  MODIFY `id_praktikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `praktikansd`
--
ALTER TABLE `praktikansd`
  MODIFY `id_praktikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
