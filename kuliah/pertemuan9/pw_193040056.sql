-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 12:28 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040056`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `Id` int(10) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Nrp` char(15) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Jurusan` varchar(30) NOT NULL,
  `Gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`Id`, `Nama`, `Nrp`, `Email`, `Jurusan`, `Gambar`) VALUES
(1, ' Sahid Jafar', '193040056', 'sahid11.sj@gmail.com', 'Teknik Informatika', 'sahid.jpg'),
(2, 'Aji Nuansa', '193010001', 'ajin@gmail.com', 'Teknik Industri', 'aji.jpg'),
(3, 'Rifki gema Fauzi', '193020010', 'rifki@gmail.com', 'Teknik Pangan', 'rifki.jpg'),
(4, 'Salsabilla ', '193030002', 'salsa@gmail.com', 'Teknik Mesin', 'salsa.jpg\r\n'),
(5, 'Devi ayu', '193050005', 'devi@gmail.com', 'Teknik Lingkungan', 'devi.jpg'),
(6, 'Angga Saputra', '193060009', 'Angga@gmail.com', 'Perencanaan Wilayah dan Kota', 'angga.jpg'),
(7, 'Herlan Nur', '193040040', 'herlan@gmal.com', 'Teknik Informatika', 'herlan.jpg'),
(8, 'Bayu cucan', '193050008', 'bayu@gmail.com', 'Teknik Lingkungan', 'bayu.jpg\r\n'),
(9, 'Rio alifian', '193020011', 'rio@gmail.com', 'Teknik Pangan', 'rio.jpg'),
(10, 'Sulthan Jihad', '193010002', 'sulthan@gmail.com', 'Teknik Industri', 'sulthan.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
