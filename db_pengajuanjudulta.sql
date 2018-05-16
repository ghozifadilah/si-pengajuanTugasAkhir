-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 04:20 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pengajuanjudulta`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `nip` varchar(30) NOT NULL,
  `nama_dosen` varchar(45) NOT NULL,
  `prodi_dosen` varchar(3) NOT NULL,
  `level_dosen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`nip`, `nama_dosen`, `prodi_dosen`, `level_dosen`) VALUES
('197011282003121001', 'Hariyono Rakhmad , S.Pd, M.Kom			', 'TKK', 'Dosen'),
('197104082001121003', 'Wahyu Kurnia Dewanto, S.Kom, MT			', 'MIF', 'Dosen'),
('197110092003121001', 'Denny Trias Utomo, S,Si, MT		', 'TKK', 'Dosen'),
('197111151998021001', 'Adi Heru Utomo, S.Kom, M.Kom			', 'MIF', 'Dosen'),
('197709292005011003', 'Didit Rahmat hartadi, S.Kom ,MT			', 'MIF', 'Dosen'),
('197808162005011002', 'Beni Widiawan, S.ST, MT		', 'TKK', 'Dosen'),
('197808172003121005', 'Agus Hariyanto ST, M.Kom		', 'TKK', 'Dosen'),
('197808192005022001', 'Ika Widiastuti, S.ST , MT		', 'MIF', 'Dosen'),
('197809082005011001', 'Denny Wijanarko, ST,MT		', 'TKK', 'Dosen'),
('197907032003121001', 'Surateno, S.Kom, M.Kom		', 'TKK', 'Dosen'),
('198005172008121002', 'Dwi Putro Sarwo S., S.Kom, M.Kom			', 'MIF', 'Reviewer'),
('198101152005011011', 'Nurul Zainal Fanani, S.ST, MT		', 'TKK', 'Dosen'),
('198106152006041002', 'Syamsul Arifin, S.Kom., M.Cs.		', 'MIF', 'Reviewer'),
('198301092017031001', 'Hermawan Arif S.T.,MT.		', 'MIF', 'Reviewer'),
('198302032006041003', 'Hendra Yufit Riskiawan, S.Kom, M.Cs			', 'MIF', 'Dosen'),
('198406252015041004', 'Bekti Maryuni S., S.Pd, M.Kom		', 'TKK', 'Dosen'),
('198511282008121002', 'Aji Seto Arfianto, S.ST, MT		', 'TIF', 'Dosen'),
('198603192014031001', 'Fendik Eko Purnomo, S.Pd , MT		', 'TKK', 'Dosen'),
('198606092008122004', 'Nanik Anita M., S.ST, MT		', 'MIF', 'Dosen'),
('198807022016101001', 'Husin, S.Kom., M.MT.		', 'MIF', 'Dosen'),
('198903292015031001', 'Taufiq Rizaldi S, ST,MT		', 'MIF', 'Koordinator'),
('198907102015091001', 'Ery Setiawan Julev Atmaji, S.Kom, M.Cs			', 'TKK', 'Dosen'),
('199002272015032001', 'Trismayanti Dwi P, S.Kom, M,Cs			', 'TIF', 'Dosen');

-- --------------------------------------------------------

--
-- Table structure for table `tb_judul`
--

CREATE TABLE `tb_judul` (
  `id_judul` varchar(10) NOT NULL,
  `id_dosen` varchar(10) NOT NULL,
  `id_mahasiswa` varchar(10) NOT NULL,
  `nama_judul` text NOT NULL,
  `ringkasan` text NOT NULL,
  `pembagian_tugas` text NOT NULL,
  `pengerjaan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama_mahasiswa` varchar(35) NOT NULL,
  `gol_mahasiswa` varchar(1) NOT NULL,
  `prodi_mahasiswa` varchar(5) NOT NULL,
  `semester` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_review`
--

CREATE TABLE `tb_review` (
  `id_review` varchar(10) NOT NULL,
  `id_dosen` varchar(10) NOT NULL,
  `id_mahasiswa` varchar(10) NOT NULL,
  `id_judul` varchar(10) NOT NULL,
  `catatan` text NOT NULL,
  `status` varchar(15) NOT NULL,
  `tgl_review` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tb_judul`
--
ALTER TABLE `tb_judul`
  ADD PRIMARY KEY (`id_judul`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tb_review`
--
ALTER TABLE `tb_review`
  ADD PRIMARY KEY (`id_review`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
