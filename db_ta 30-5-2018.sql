-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30 Mei 2018 pada 10.00
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
-- Struktur dari tabel `golongan`
--

CREATE TABLE `golongan` (
  `id_golongan` int(10) NOT NULL,
  `golongan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `golongan`
--

INSERT INTO `golongan` (`id_golongan`, `golongan`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D');

-- --------------------------------------------------------

--
-- Struktur dari tabel `limitdospem`
--

CREATE TABLE `limitdospem` (
  `id` int(20) NOT NULL,
  `id_user` varchar(40) NOT NULL,
  `Limit_Dospem` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id_Prodi` int(10) NOT NULL,
  `Prodi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id_Prodi`, `Prodi`) VALUES
(1, 'MIF'),
(2, 'TKK'),
(3, 'TIF');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_ta`
--

CREATE TABLE `table_ta` (
  `id` int(100) NOT NULL,
  `id_user` varchar(100) NOT NULL,
  `prodi` varchar(10) NOT NULL,
  `golongan` varchar(10) NOT NULL,
  `judul_TA` text NOT NULL,
  `ringkasan` text NOT NULL,
  `Dospem` varchar(40) NOT NULL,
  `komentar` text NOT NULL,
  `status` enum('Belum Di review','Diterima','Ditolak','') NOT NULL,
  `Tanggal_Kirim` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_ta`
--

INSERT INTO `table_ta` (`id`, `id_user`, `prodi`, `golongan`, `judul_TA`, `ringkasan`, `Dospem`, `komentar`, `status`, `Tanggal_Kirim`) VALUES
(8, 'E31160788', '', '', 'sdf', 'sdf', 'dsfdsf', 'Belum ada komentar', 'Belum Di review', ''),
(14, 'E31160787', '', '', 'Judulku', 'asdwq3', 'sdf234', 'Belum ada komentar', 'Belum Di review', '2018-5-29'),
(15, 'E31160777', '', '', 'Test judul buat ini', 'as;ldasl;kdl;askdkasl;dkasl;jlasjdlkjaskdljsakldjklasjkdljaskldjklasjdklasjdkljskldjskaljdklasdkd;askdl;askdl;sakld;ksal;dklas;kdl;askdl;askdl;askl;dksal;kdl;askdl;askld;', 'hai', 'Belum ada komentar', 'Belum Di review', ''),
(16, 'E31160787', 'jhj', 'B', 'Judul 12', 'asd23', 'Ghozi tapi dosen', 'Belum ada komentar', 'Belum Di review', '2018-5-29'),
(17, 'E31160787', 'jhj', 'B', 'asdw23', 'jjjhjkh', 'Ghozi tapi dosen', 'Belum ada komentar', 'Belum Di review', '2018-5-30'),
(18, 'E31160787', 'jhj', 'B', 'asdsd', 'qweqwe', 'Ghozi tapi reviewr', 'Belum ada komentar', 'Belum Di review', 'CURDATE()'),
(19, 'E31160787', 'jhj', 'B', 'Blabla', 'kasjdlkasjdwrer', 'Ghozi tapi dosen', 'Belum ada komentar', 'Belum Di review', '2018-29-2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggal`
--

CREATE TABLE `tanggal` (
  `id` int(11) NOT NULL,
  `Proses` varchar(20) NOT NULL,
  `W_mulai` varchar(20) NOT NULL,
  `W_selesai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tanggal`
--

INSERT INTO `tanggal` (`id`, `Proses`, `W_mulai`, `W_selesai`) VALUES
(1, 'JudulTA', '2018-05-23', '2018-06-29'),
(2, 'Proposal', '2017-04-20', '2017-04-20');

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
  `level` enum('mahasiswa','dosen','kota','reviewer') NOT NULL,
  `active` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `password`, `nama`, `prodi`, `golongan`, `level`, `active`) VALUES
('D31160787', '6599e01772e90dc5f44afb0716487b32', 'Ghozi tapi dosen', 'MIF', 'B', 'dosen', '1'),
('D31160788', '6599e01772e90dc5f44afb0716487b32', 'Ghozi tapi reviewr', 'MIF', 'B', 'reviewer', '1'),
('D31160799', '19f426adf9db937ef55bb8a08d00a0e2', 'TestDosen1', 'Mif', 'B', 'dosen', '1'),
('E31160787', '6599e01772e90dc5f44afb0716487b32', 'Ghozi', 'MIF', 'B', 'mahasiswa', '1'),
('er34234', '0cc175b9c0f1b6a831c399e269772661', 'dsf', 'MIF', 'A', 'mahasiswa', '1'),
('K31160787', '6599e01772e90dc5f44afb0716487b32', 'Ghozi tapi koordinatro', 'MIF', 'B', 'kota', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id_golongan`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_Prodi`);

--
-- Indexes for table `table_ta`
--
ALTER TABLE `table_ta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tanggal`
--
ALTER TABLE `tanggal`
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
-- AUTO_INCREMENT for table `golongan`
--
ALTER TABLE `golongan`
  MODIFY `id_golongan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_Prodi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table_ta`
--
ALTER TABLE `table_ta`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tanggal`
--
ALTER TABLE `tanggal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
