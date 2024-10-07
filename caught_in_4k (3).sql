-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2024 at 08:59 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caught_in_4k`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kod_barang` int(11) NOT NULL,
  `nama_barang` varchar(30) DEFAULT NULL,
  `kod_jenama` varchar(10) DEFAULT NULL,
  `harga` double(7,2) DEFAULT NULL,
  `nokp_staff` varchar(12) DEFAULT NULL,
  `gambar` varchar(200) DEFAULT NULL,
  `ISO` varchar(15) DEFAULT NULL,
  `Prosesor` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kod_barang`, `nama_barang`, `kod_jenama`, `harga`, `nokp_staff`, `gambar`, `ISO`, `Prosesor`) VALUES
(1, 'Instax Mini 11', 'INS4', 490.86, '060715182739', 'https://cdn.discordapp.com/attachments/839778165412593664/1124702727243575296/image_7.png', '800', 'X Processor Pro'),
(3, 'FUJIFILM FINEPIX REAL 3D W3', 'FUJ2', 2289.02, '010723127493', 'https://cdn.discordapp.com/attachments/839778165412593664/1115499656634445875/image_8.png', '100 - 1600', '3D RP (Real Photo)HD'),
(4, 'Fujifilm X-E3', 'FUJ2', 4573.92, '010723127493', 'https://cdn.discordapp.com/attachments/839778165412593664/1115500935242850405/image_5.png', '200 - 12800', 'X-Processor Pro'),
(5, 'Casio Exilim EX-FH25', 'CASI3', 1818.00, '060715182739', 'https://cdn.discordapp.com/attachments/839778165412593664/1115494959081066536/image_9.png', '100 - 3200', 'EXILIM engine'),
(24, 'Canon EOS R6 II', 'CAN1', 11441.67, '060715182739', 'https://cdn.discordapp.com/attachments/839778165412593664/1124957540875255818/image_4.png', '100-102400', 'Digic X');

-- --------------------------------------------------------

--
-- Table structure for table `jenama`
--

CREATE TABLE `jenama` (
  `kod_jenama` varchar(10) NOT NULL,
  `jenama_barang` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenama`
--

INSERT INTO `jenama` (`kod_jenama`, `jenama_barang`) VALUES
('CAN1', 'CANON'),
('CASI3', 'CASIO'),
('FUJ2', 'FUJIFILM'),
('INS4', 'INSTAX');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `nokp_pembeli` varchar(12) NOT NULL,
  `nama_pembeli` varchar(60) DEFAULT NULL,
  `katalaluan_pembeli` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`nokp_pembeli`, `nama_pembeli`, `katalaluan_pembeli`) VALUES
('050518293033', 'Shamila', '123'),
('770216876459', 'HOLIDAY', '7382'),
('791031640423', 'Jia Qi', 'jdsj9'),
('981203239845', 'Kelvin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `nokp_staff` varchar(12) NOT NULL,
  `nama_staff` varchar(60) DEFAULT NULL,
  `katalaluan_staff` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`nokp_staff`, `nama_staff`, `katalaluan_staff`) VALUES
('010723127493', 'Sammy', '6_7D'),
('021028657393', 'Azaman', 'je78'),
('060715182739', 'Camila', '123'),
('070323945683', 'Farhna', '1234'),
('971117745974', 'Catherine', '893ej');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kod_barang`),
  ADD KEY `nokp_staff` (`nokp_staff`),
  ADD KEY `kod_jenama` (`kod_jenama`);

--
-- Indexes for table `jenama`
--
ALTER TABLE `jenama`
  ADD PRIMARY KEY (`kod_jenama`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`nokp_pembeli`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`nokp_staff`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `kod_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`nokp_staff`) REFERENCES `staff` (`nokp_staff`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`kod_jenama`) REFERENCES `jenama` (`kod_jenama`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
