-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 Mei 2018 pada 04.44
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_ta`
--

CREATE TABLE `table_ta` (
  `id` int(100) NOT NULL,
  `id_user` varchar(100) NOT NULL,
  `judul_TA` text NOT NULL,
  `ringkasan` text NOT NULL,
  `Dp1` varchar(40) NOT NULL,
  `Dp2` varchar(40) NOT NULL,
  `komentar` text NOT NULL,
  `status` enum('Belum Di review','Diterima','Ditolak','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(40) NOT NULL,
  `password` varchar(80) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `prodi` varchar(40) NOT NULL,
  `golongan` varchar(2) NOT NULL,
  `level` enum('mahasiswa','dosen','kota','') NOT NULL,
  `active` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `password`, `nama`, `prodi`, `golongan`, `level`, `active`) VALUES
('D31160787', '6599e01772e90dc5f44afb0716487b32', 'Ghozi tapi dosen', 'Mif ', 'B', 'dosen', '1'),
('E31160787', '6599e01772e90dc5f44afb0716487b32', 'Ghozi', 'MIF ', 'B', 'mahasiswa', '1'),
('K31160787', '6599e01772e90dc5f44afb0716487b32', 'Ghozi tapi koordinatro', 'MIF', 'B', 'kota', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_ta`
--
ALTER TABLE `table_ta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_ta`
--
ALTER TABLE `table_ta`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
