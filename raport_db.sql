-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2016 at 03:27 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raport_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` char(2) NOT NULL,
  `nm_jurusan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nm_jurusan`) VALUES
('01', 'Tata Boga'),
('02', 'Tata Busana'),
('99', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` char(6) NOT NULL,
  `kelas` char(3) NOT NULL,
  `nm_kelas` char(15) NOT NULL,
  `ruang` int(1) NOT NULL,
  `id_jurusan` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `kelas`, `nm_kelas`, `ruang`, `id_jurusan`) VALUES
('admin9', 'XXX', 'xxx', 0, '99'),
('xbu1', 'X', 'Tata Busana', 1, '01'),
('xibu1', 'XI', 'Tata Busana', 1, '01'),
('xibu2', 'XI', 'Tata Busana', 2, '01'),
('xiibu1', 'XII', 'Tata Busana', 1, '01'),
('xip1', 'XI', 'Pastri', 1, '02');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id_mapel` char(3) NOT NULL,
  `nm_mapel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id_mapel`, `nm_mapel`) VALUES
('A01', 'Pendidikan Agama'),
('K01', 'Seni Kriya'),
('L01', 'Seni Lukis'),
('M01', 'Matematika'),
('M02', 'Pendidikan Memasak');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `angka` int(5) NOT NULL,
  `huruf` char(30) NOT NULL,
  `predikat` char(10) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `id_mapel` char(3) NOT NULL,
  `no_induk` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`angka`, `huruf`, `predikat`, `deskripsi`, `id_mapel`, `no_induk`) VALUES
(81, 'Delapan Puluh Satu', 'A', 'Kurang maksimal dalam perhitungan Aljabar', 'M01', '4012'),
(88, 'Delapan Puluh Delapan', 'A', '-', 'M02', '4012');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `no_induk` char(4) NOT NULL,
  `nm_siswa` varchar(25) NOT NULL,
  `jns_kelamin` char(1) DEFAULT NULL,
  `tmpt_lahir` char(15) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `agama` char(8) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `sekolah asal` varchar(55) DEFAULT NULL,
  `almt_sklh_asal` varchar(50) DEFAULT NULL,
  `thn_ijazah` char(4) DEFAULT NULL,
  `no_ijazah` char(30) DEFAULT NULL,
  `kelas_diterima` varchar(25) DEFAULT NULL,
  `tgl_diterima` date DEFAULT NULL,
  `id_jurusan` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`no_induk`, `nm_siswa`, `jns_kelamin`, `tmpt_lahir`, `tgl_lahir`, `agama`, `alamat`, `sekolah asal`, `almt_sklh_asal`, `thn_ijazah`, `no_ijazah`, `kelas_diterima`, `tgl_diterima`, `id_jurusan`) VALUES
('4012', 'Antoni', '1', 'Tegal', '1996-04-05', 'kristen', 'jl. Raya bulakamba no. 145', 'SMP Negeri 7 Tegal', 'Jl. Dr Supeno no.6', '2004', '1223-543-5876', 'X Tata Busana 2', '2016-12-04', '02');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nip` char(9) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nip`, `password`, `id`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin9');

-- --------------------------------------------------------

--
-- Table structure for table `wali_murid`
--

CREATE TABLE `wali_murid` (
  `nm_ayah` varchar(25) NOT NULL,
  `nm_ibu` varchar(25) NOT NULL,
  `almt_ortu` varchar(50) NOT NULL,
  `kerja_ortu` varchar(15) NOT NULL,
  `nm_wali` varchar(25) NOT NULL,
  `almt_wali` varchar(50) NOT NULL,
  `kerja_wali` varchar(15) NOT NULL,
  `no_induk` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wali_murid`
--

INSERT INTO `wali_murid` (`nm_ayah`, `nm_ibu`, `almt_ortu`, `kerja_ortu`, `nm_wali`, `almt_wali`, `kerja_wali`, `no_induk`) VALUES
('Ryan Liardo', 'Cecilia Angle', 'Jl. Raya Merdeka no.97 Semarang', 'Wiraswasta', '-', '-', '-', '4012');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD KEY `id_mapel` (`id_mapel`),
  ADD KEY `no_induk` (`no_induk`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`no_induk`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `id_kelas` (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `wali_murid`
--
ALTER TABLE `wali_murid`
  ADD KEY `no_induk` (`no_induk`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
