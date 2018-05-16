-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2018 at 02:37 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `tm_gol`
--

CREATE TABLE `tm_gol` (
  `id` int(11) NOT NULL,
  `golongan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tm_gol`
--

INSERT INTO `tm_gol` (`id`, `golongan`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D'),
(5, 'E');

-- --------------------------------------------------------

--
-- Table structure for table `tm_mahasiswa`
--

CREATE TABLE `tm_mahasiswa` (
  `nim` varchar(8) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tm_prodi_id` int(11) NOT NULL,
  `tm_gol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tm_mahasiswa`
--

INSERT INTO `tm_mahasiswa` (`nim`, `nama`, `tm_prodi_id`, `tm_gol_id`) VALUES
('E111601', 'Ian', 1, 1),
('E121601', 'Lia', 2, 1),
('E131601', 'Mei', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tm_prodi`
--

CREATE TABLE `tm_prodi` (
  `id` int(2) NOT NULL,
  `prodi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tm_prodi`
--

INSERT INTO `tm_prodi` (`id`, `prodi`) VALUES
(1, 'MIF'),
(2, 'TKK'),
(3, 'TIF');

-- --------------------------------------------------------

ALTER TABLE `tm_gol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tm_mahasiswa`
--
ALTER TABLE `tm_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tm_prodi`
--
ALTER TABLE `tm_prodi`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
