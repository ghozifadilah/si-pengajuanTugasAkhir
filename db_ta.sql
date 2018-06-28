-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 Jun 2018 pada 01.35
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

--
-- Dumping data untuk tabel `limitdospem`
--

INSERT INTO `limitdospem` (`id`, `id_user`, `Limit_Dospem`) VALUES
(1, 'D31160787', 6);

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
-- Struktur dari tabel `statistik_dosen`
--

CREATE TABLE `statistik_dosen` (
  `nama` varchar(34) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `statistik_dosen`
--

INSERT INTO `statistik_dosen` (`nama`, `nilai`) VALUES
('Ghozi tapi dosen', 5),
('Ghozi tapi koordinatro', 2),
('Ghozi tapi reviewr', 3),
('TestDosen1', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `statistik_mahasiswa`
--

CREATE TABLE `statistik_mahasiswa` (
  `Nama` varchar(20) NOT NULL,
  `Nilai` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `statistik_mahasiswa`
--

INSERT INTO `statistik_mahasiswa` (`Nama`, `Nilai`) VALUES
('BelumMengajukan', 1),
('SudahMengajukan', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `statistik_pengajuan`
--

CREATE TABLE `statistik_pengajuan` (
  `Hari` int(23) NOT NULL,
  `TotalUsulan` int(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `statistik_pengajuan`
--

INSERT INTO `statistik_pengajuan` (`Hari`, `TotalUsulan`) VALUES
(20, 6),
(21, 1),
(22, 2),
(23, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_penelitiandosen`
--

CREATE TABLE `table_penelitiandosen` (
  `id` int(20) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `Nama` varchar(36) NOT NULL,
  `Judul_Penelitian` varchar(30) NOT NULL,
  `kuota` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_penelitiandosen`
--

INSERT INTO `table_penelitiandosen` (`id`, `id_user`, `Nama`, `Judul_Penelitian`, `kuota`) VALUES
(5, 'K31160787', 'Ghozi tapi koordinatro', 'bokep', 2),
(6, 'D31160787', 'Ghozi tapi dosen', 'Tes', 23);

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
  `status` varchar(12) NOT NULL,
  `Status_pembimbing` varchar(30) NOT NULL,
  `Tanggal_Kirim` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_ta`
--

INSERT INTO `table_ta` (`id`, `id_user`, `prodi`, `golongan`, `judul_TA`, `ringkasan`, `Dospem`, `komentar`, `status`, `Status_pembimbing`, `Tanggal_Kirim`) VALUES
(15, 'E31160777', '', '', 'Test judul buat ini', 'as;ldasl;kdl;askdkasl;dkasl;jlasjdlkjaskdljsakldjklasjkdljaskldjklasjdklasjdkljskldjskaljdklasdkd;askdl;askdl;sakld;ksal;dklas;kdl;askdl;askdl;askl;dksal;kdl;askdl;askld;', 'hai', 'Belum ada komentar', 'Ditermia Den', '', ''),
(16, 'E31160787', 'jhj', 'B', 'Judul 12', 'asd23', 'Ghozi tapi dosen', 'oke dokie', 'Ditermia', 'pending', '2018-5-29'),
(18, 'E31160787', 'jhj', 'B', 'asdsd', 'qweqwe', 'Ghozi tapi reviewr', 'Belum ada komentar', 'Belum Di rev', 'pending', 'CURDATE()'),
(19, 'E31160787', 'jhj', 'B', 'Blabla', 'kasjdlkasjdwrer', 'Ghozi tapi dosen', 'Belum ada komentar', 'Belum Di rev', 'Di Terima', '2018-29-2'),
(20, 'E31160787', 'MIF', 'B', 'sad', 'asd', 'Ghozi tapi koordinatro', 'Belum ada komentar', 'Belum Di rev', 'Di Terima', '2018-6-11'),
(21, 'E31160787', 'MIF', 'B', 'qwqw', 'asdas', 'Ghozi tapi koordinatro', 'Belum ada komentar', 'Belum Di rev', 'pending', '2018-6-11'),
(22, 'E31160787', 'MIF', 'B', 'sad', 'se', 'Ghozi tapi dosen', 'Belum ada komentar', 'Belum Di rev', 'pending', '2018-6-11'),
(23, 'E31160787', 'MIF', 'B', 'dfdsdf', 'ewrw', 'Ghozi tapi dosen', 'Belum ada komentar', 'Belum Di rev', 'pending', '2018-6-23'),
(24, 'E31160787', 'MIF', 'B', 'jhgjh', 'hgjghj', 'Ghozi tapi dosen', 'Belum ada komentar', 'Belum Di rev', 'pending', '2018-6-23'),
(25, 'E31160787', 'MIF', 'B', 'tyr', 'retert', 'Ghozi tapi dosen', 'Belum ada komentar', 'Belum Di rev', 'pending', '2018-6-23'),
(26, 'E31160787', 'MIF', 'B', '234', 'wer', 'Ghozi tapi koordinatro', 'Belum ada komentar', 'Belum Di rev', 'pending', '2018-6-23'),
(27, 'E31160787', 'MIF', 'B', 'OKe bro', 'Yyse man sd', 'Ghozi tapi reviewr', 'Belum ada komentar', 'Belum Di rev', 'pending', '2018-6-23'),
(28, 'E31160787', 'MIF', 'B', 'gfhfgh', 'fghf', 'Ghozi tapi dosen', 'Belum ada komentar', 'Belum Di rev', 'pending', '2018-6-23'),
(29, 'E31160787', 'MIF', 'B', 'sd', 'wewe', 'Ghozi tapi reviewr', 'Belum ada komentar', 'Belum Di rev', 'pending', '2018-6-23'),
(30, 'E31160787', 'MIF', 'B', 'sdlfkl', 'lkjkewr', 'Ghozi tapi reviewr', 'Belum ada komentar', 'Belum Di rev', 'pending', '2018-6-23'),
(31, 'E31160787', 'MIF', 'B', 'dfg', 'dfg', 'Ghozi tapi dosen', 'Belum ada komentar', 'Belum Di rev', 'pending', '2018-6-23'),
(32, 'E31160787', 'MIF', 'B', 'sdf', 'sdf', 'TestDosen1', 'Belum ada komentar', 'Belum Di rev', 'pending', '2018-6-23'),
(33, 'ghozifadilah', 'MIF', 'A', 'sdfwerwer', 'ewrewr', 'Ghozi tapi koordinatro', 'Belum ada komentar', 'Belum Di rev', 'pending', '2018-6-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_tafix`
--

CREATE TABLE `table_tafix` (
  `id` int(100) NOT NULL,
  `id_user` varchar(100) NOT NULL,
  `prodi` varchar(10) NOT NULL,
  `golongan` varchar(10) NOT NULL,
  `judul_TA` text NOT NULL,
  `ringkasan` text NOT NULL,
  `Dospem` varchar(40) NOT NULL,
  `komentar` text NOT NULL,
  `status` varchar(12) NOT NULL,
  `Status_pembimbing` varchar(30) NOT NULL,
  `Tanggal_Kirim` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_tafix`
--

INSERT INTO `table_tafix` (`id`, `id_user`, `prodi`, `golongan`, `judul_TA`, `ringkasan`, `Dospem`, `komentar`, `status`, `Status_pembimbing`, `Tanggal_Kirim`) VALUES
(2, 'E31160787', 'MIF', 'B', 'ronde 2', 'oke des des', 'Ghozi tapi dosen', 'Belum ada komentar', 'Belum Di rev', 'pending', '2018-6-22');

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
(1, 'JudulTA', '2018-05-31', '2018-07-17'),
(2, 'Proposal', '2018-05-28', '2018-07-24'),
(3, 'JudulTAFix', '2018-05-31', '2018-05-31');

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
('b', '92eb5ffee6ae2fec3ad71c777531578f', 'b', 'MIF', 'A', 'mahasiswa', '1'),
('D31160787', '6599e01772e90dc5f44afb0716487b32', 'Ghozi tapi dosen', 'MIF', 'B', 'dosen', '1'),
('D31160788', '6599e01772e90dc5f44afb0716487b32', 'Ghozi tapi reviewr', 'MIF', 'B', 'reviewer', '1'),
('D31160799', '19f426adf9db937ef55bb8a08d00a0e2', 'TestDosen1', 'Mif', 'B', 'dosen', '1'),
('dd', '8277e0910d750195b448797616e091ad', 'dd', 'MIF', 'A', 'mahasiswa', '1'),
('E31160787', '6599e01772e90dc5f44afb0716487b32', 'Ghozi', 'MIF', 'B', 'mahasiswa', '1'),
('er34234', '0cc175b9c0f1b6a831c399e269772661', 'dsf', 'MIF', 'A', 'mahasiswa', '1'),
('ghozifadilah', '19f426adf9db937ef55bb8a08d00a0e2', 'sdfdsf', 'MIF', 'A', 'mahasiswa', '1'),
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
-- Indexes for table `statistik_dosen`
--
ALTER TABLE `statistik_dosen`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `statistik_mahasiswa`
--
ALTER TABLE `statistik_mahasiswa`
  ADD PRIMARY KEY (`Nama`);

--
-- Indexes for table `statistik_pengajuan`
--
ALTER TABLE `statistik_pengajuan`
  ADD PRIMARY KEY (`Hari`);

--
-- Indexes for table `table_penelitiandosen`
--
ALTER TABLE `table_penelitiandosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_ta`
--
ALTER TABLE `table_ta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_tafix`
--
ALTER TABLE `table_tafix`
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
-- AUTO_INCREMENT for table `statistik_pengajuan`
--
ALTER TABLE `statistik_pengajuan`
  MODIFY `Hari` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `table_penelitiandosen`
--
ALTER TABLE `table_penelitiandosen`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `table_ta`
--
ALTER TABLE `table_ta`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `table_tafix`
--
ALTER TABLE `table_tafix`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tanggal`
--
ALTER TABLE `tanggal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
