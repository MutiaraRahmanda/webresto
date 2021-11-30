-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2019 at 04:42 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservation1`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` varchar(4) NOT NULL DEFAULT '',
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `password`, `nama`, `telp`, `alamat`) VALUES
('11', 'b3daa77b4c04a9551b8781d03191fe098f325e67', 'Moch Nirwan Firdaus', '08765432134', 'Jl Bandulan 1f no 50n'),
('12', 'a1881c06eec96db9901c7bbfe41c42a3f08e9cb4', 'Moch Arifin', '089234567890', 'Jl Gading KW no 51N'),
('13', '0b7f849446d3383546d15a480966084442cd2193', 'Nanda Rahmat Akbar', '087654332411', 'Jl Kauman KW no 1'),
('14', '06e6eef6adf2e5f54ea6c43c376d6d36605f810e', 'Moch Fajar Darussalam', '089527547722', 'Jl. bandulan 2f no: 56b'),
('17', '54d757867f7c03793478fd98c58a4ee9f0bf7cd2', 'Alex Burning', '08932123432', 'Rowndown street number 8'),
('18', '26db59537b38633ebfeec0895e1498bdf0294371', 'Firdaus', '08933434344', 'London');

-- --------------------------------------------------------

--
-- Table structure for table `meja`
--

CREATE TABLE `meja` (
  `barcode` int(6) NOT NULL,
  `no_meja` varchar(15) NOT NULL,
  `tipe` varchar(15) NOT NULL,
  `muatan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meja`
--

INSERT INTO `meja` (`barcode`, `no_meja`, `tipe`, `muatan`) VALUES
(1, '1A', 'Standart', 5),
(2, '1B', 'Superior', 8),
(3, '1C', 'Esklusif', 10),
(4, '2A', 'Standart', 5),
(5, '2B', 'Superior', 8),
(6, '2C', 'Esklusif', 10),
(7, '3A', 'Standart', 5),
(8, '3B', 'Superior', 8),
(9, '3C', 'Esklusif', 10),
(11, '4B', 'Superior', 8),
(12, '4C', 'Esklusif', 10),
(13, '5A', 'Standart', 5),
(14, '5B', 'Superior', 8),
(15, '5C', 'Esklusif', 10),
(16, '6A', 'Standart', 5),
(17, 'w2', 'edd', 2),
(18, '2e', 'wfwf', 43),
(19, '7A', 'Standart', 20),
(20, '9A', 'ff', 5),
(21, '9A', 'stan', 2),
(22, '1N', 'Super', 3),
(23, '333', 'werrewr', 4),
(24, '10A', 'Giant', 6),
(25, '10B', 'Duper', 8),
(26, '12A', 'Super', 4),
(28, '34', 'tg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `reservasi_id` int(4) NOT NULL,
  `member_id` varchar(4) NOT NULL,
  `tanggal` date NOT NULL,
  `check_in` varchar(5) NOT NULL,
  `check_out` varchar(5) NOT NULL,
  `jumlah_meja` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`reservasi_id`, `member_id`, `tanggal`, `check_in`, `check_out`, `jumlah_meja`) VALUES
(16, '13', '2018-01-16', '16:00', '17:00', 3),
(17, '13', '2018-01-19', '14:00', '15:00', 6),
(18, '13', '2018-01-18', '11:00', '13:00', 3),
(19, '11', '2018-01-19', '20:00', '22:00', 3),
(20, '11', '2018-01-21', '08:00', '10:00', 1),
(21, '11', '2018-01-22', '11:00', '13:00', 4),
(22, '14', '2018-01-24', '13:00', '15:00', 3),
(23, '14', '2018-01-26', '16:00', '17:30', 1),
(26, '13', '2018-01-27', '20:00', '20:00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`username`, `password`) VALUES
('admin', 'f865b53623b121fd34ee5426c792e5c33af8c227');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meja`
--
ALTER TABLE `meja`
  ADD KEY `barcode` (`barcode`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`reservasi_id`),
  ADD KEY `member_id` (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meja`
--
ALTER TABLE `meja`
  MODIFY `barcode` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `reservasi_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD CONSTRAINT `reservasi_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `anggota` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
