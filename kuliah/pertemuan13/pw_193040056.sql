-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2020 at 07:44 PM
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
  `Nama` varchar(100) NOT NULL,
  `Nrp` char(15) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Jurusan` varchar(100) NOT NULL,
  `Gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`Id`, `Nama`, `Nrp`, `Email`, `Jurusan`, `Gambar`) VALUES
(1, 'Sahid Jafar', '193040056', 'sahid11.sj@gmail.com', 'Teknik Informatika', 'sahid.jpg'),
(2, 'Aji Nuansa', '193010001', 'ajin@gmail.com', 'Teknik Industri', 'aji.jpg\r\n'),
(3, 'Rifki Gema Fauzi', '193020010', 'rifki@gmail.com', 'Teknik Pangan', 'gema.jpg'),
(4, 'Salsabila Nada', '193030002', 'salsa@gmail.com', 'Teknik Mesin', 'salsa.jpg'),
(5, 'Devi Ayu', '193050005', 'devi@gmail.com', 'Teknik Lingkungan', 'devi.jpg'),
(6, 'Angga Saputra', '193060009', 'Angga@gmail.com', 'Perencanaan Wilayah dan Kota', 'angga.jpg'),
(7, 'Herlan Nur', '193040040', 'herlan@gmal.com', 'Teknik Informatika', 'herlan.jpg'),
(8, 'Bayu Cucan', '193050008', 'bayu@gmail.com', 'Teknik Lingkungan', 'bayu.jpg\r\n'),
(9, 'Rio Alifian', '193020011', 'rio@gmail.com', 'Teknik Pangan', 'rio.jpg'),
(10, 'Sulthan Jihad', '193010002', 'sulthan@gmail.com', 'Teknik Industri', 'sulthan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `username`, `password`) VALUES
(5, 'unpas', '$2y$10$h.S3z1OJo9AUe3h3NFyQiOrEoA.6bnbWt020KHPxfpg6aUtp.5r8i'),
(6, 'admin', '$2y$10$dUJFakolakobSjURm5l6OuW7dFE0RMY8WCrZVUw7a319LqmDgi2pu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
