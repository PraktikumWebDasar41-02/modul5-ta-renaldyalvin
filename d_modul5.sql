-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 04:53 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d_modul5`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_jurnal1`
--

CREATE TABLE `t_jurnal1` (
  `Nim` bigint(10) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Tanggal` date NOT NULL,
  `Jeniskelamin` varchar(20) NOT NULL,
  `Prodi` varchar(50) NOT NULL,
  `Fakultas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_jurnal1`
--

INSERT INTO `t_jurnal1` (`Nim`, `Nama`, `Email`, `Tanggal`, `Jeniskelamin`, `Prodi`, `Fakultas`) VALUES
(6701174091, 'alvin', 'agungmiftakhul7@gmail.com', '1998-12-07', 'Laki-Laki', 'Manajemen Informatika', 'FIT'),
(6701174091, 'alvin', 'agungmiftakhul7@gmail.com', '1998-12-07', 'Laki-Laki', 'Manajemen Informatika', 'FIT'),
(6701174091, 'ryan', 'agungmiftakhul7@gmail.com', '1998-12-07', 'Laki-Laki', 'Manajemen Informatika', 'FIT'),
(6701174091, 'alvin', 'agungmiftakhul7@gmail.com', '1998-12-07', 'Laki-Laki', 'Manajemen Informatika', 'FIT');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
