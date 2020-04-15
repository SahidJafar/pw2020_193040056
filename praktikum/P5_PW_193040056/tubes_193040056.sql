-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 12:19 PM
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
-- Database: `tubes_193040056`
--

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `Id` int(10) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Processor` varchar(255) NOT NULL,
  `Keterangan` varchar(255) NOT NULL,
  `Harga` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`Id`, `Foto`, `Nama`, `Processor`, `Keterangan`, `Harga`) VALUES
(1, '1.jfif', 'Asus Laptop 15 A509f', 'Intel Core i5-8265u', 'RAM 4GB DDR4,1TB HDD,Graphic NVIDIA Geforce MX 230 2GB VRAM', 'Rp.8.199.000,00'),
(2, 'z.jpg', 'Asus Vivobook A407', 'Intel Core i3-6006U', 'RAM 4GB DDR4,1TB HDD,Intel HD Graphics 520', 'Rp.5.699.000,00'),
(3, '3.jpg', 'Asus X409UA', 'Intel Core i3 7020U', 'RAM 4GB DDR4,1TB HDD,512GB SSD,Intel UHD Graphics 620', 'Rp.6.499.000,00'),
(4, '4.jpg', 'Asus Vivobook X403FA', 'Intel Core i5-8265U', 'RAM 8GB,512GB SSD,Intel UHD Graphics 620', 'Rp.9.799.000,00'),
(5, '5.jfif', 'Asus Tuf Gaming FX50', 'AMD Ryzen 5-3550H Processor 2.1GHz (6M cache, up t', '8GB RAM DDR4,1TB HDD,AMD Radeon RX560X 4GB GDDR5 VRAM', 'Rp.11.299.000,00'),
(6, '6.png', 'Asus ROG Strix G', 'Intel Core i7-9750H Hexa Core (12M Cache, up to 4,', '8 GB RAM DDR4,256 GB M.2 NVMe PCIe SSD + 1 TB SSHD,Nvidia GeForce RTX 2070 8 GB GDDR6 VRAM', 'Rp 18.299.000,00'),
(7, '7.jpg', 'Asus Vivobook S14', 'Intel Core i5', '8 GB RAM DDR4,HDD 1TB SSD 128 GB,Nvidia GeForce MX150 Graphic 4GB VRam', 'Rp.11.499.000,00'),
(8, '8.jfif', 'Asus Zenbook 13 UX33', 'Intel Core i5-8265U', '8 GB RAM DDR4, 256 SDD PCIe® 3.0 x2 SSD,Intel UHD Graphics 630', 'Rp.12.999.000,00'),
(9, '9.jfif', 'Asus Zenbook Flip 14', 'AMD Ryzen 5 3500U', '8 GB RAM DDR4, 512 GB SSD, AMD Radeon Vega 10 Graphics', 'Rp 10.699.000,00'),
(10, '10.jfif', 'Asus ROG Zephyrus S ', 'Intel Core i7-8750H', '8GB RAM DDR4, 1TB SSD, NVIDIA® GeForce RTX™ 2080 with Max-Q Design 8GB GDDR6 VRAM', 'Rp 47.999.000,00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
