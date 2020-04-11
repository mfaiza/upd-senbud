-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2020 at 06:26 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekskul`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokumentasi_ekskul`
--

CREATE TABLE `dokumentasi_ekskul` (
  `id_dokumentasi_ekskul` int(11) NOT NULL,
  `id_ekskul` int(11) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumentasi_ekskul`
--

INSERT INTO `dokumentasi_ekskul` (`id_dokumentasi_ekskul`, `id_ekskul`, `path`) VALUES
(4, 21, 'files/20181007151556.jpeg'),
(5, 20, 'files/20200411054448.jpg'),
(6, 20, 'files/20200411054524.jpg'),
(7, 20, 'files/20200411055318.jpg'),
(8, 20, 'files/20200411055410.jpg'),
(9, 20, 'files/20200411055414.jpg'),
(10, 24, 'files/20200411055856.jpeg'),
(11, 24, 'files/20200411055913.jpeg'),
(12, 17, 'files/20200411055922.jpg'),
(13, 18, 'files/20200411055947.jpg'),
(14, 18, 'files/20200411060203.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dokumentasi_senbud`
--

CREATE TABLE `dokumentasi_senbud` (
  `id_dokumentasi_senbud` int(11) NOT NULL,
  `id_senbud` int(11) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ekskul`
--

CREATE TABLE `ekskul` (
  `id_ekskul` int(11) NOT NULL,
  `nama_ekskul` varchar(50) NOT NULL,
  `penanggung_jawab` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `hari` enum('senin','selasa','rabu','kamis','jumat','sabtu','minggu') NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ekskul`
--

INSERT INTO `ekskul` (`id_ekskul`, `nama_ekskul`, `penanggung_jawab`, `lokasi`, `hari`, `jam_mulai`, `jam_selesai`) VALUES
(4, 'Paskibra', 'Andi ', 'Lapangan', 'rabu', '09:00:00', '14:00:00'),
(5, 'basket', 'sandi', 'lapangan', 'kamis', '16:00:00', '17:30:00'),
(14, 'basketasda', 'sandi', 'lapangan', 'kamis', '16:00:00', '17:30:00'),
(17, 'baskets', 'sandi', 'lapangan', 'kamis', '16:00:00', '17:30:00'),
(18, 'basketraw', 'sandi', 'lapangan', 'kamis', '16:00:00', '17:30:00'),
(19, 'basketss', 'sandi', 'lapangan', 'kamis', '16:00:00', '17:30:00'),
(20, 'basketrawwawaw', 'sandi', 'lapangan', 'kamis', '16:00:00', '17:30:00'),
(21, 'basketrawwawawEDAA', 'sandi', 'lapangan', 'kamis', '16:00:00', '17:30:00'),
(22, 'basketrawwawawsadwadawda', 'sandi', 'lapangan', 'kamis', '16:00:00', '17:30:00'),
(23, 'basketRAWARONTEK', 'sandi', 'lapangan', 'kamis', '16:00:00', '17:30:00'),
(24, 'basketRAWARONTEK123', 'sandi', 'lapangan', 'kamis', '16:00:00', '17:30:00'),
(25, 'basketa', 'sandi', 'lapangan', 'kamis', '16:00:00', '17:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi_ekskul`
--

CREATE TABLE `registrasi_ekskul` (
  `id_registrasi_ekskul` int(11) NOT NULL,
  `id_ekskul` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `tanggal_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrasi_ekskul`
--

INSERT INTO `registrasi_ekskul` (`id_registrasi_ekskul`, `id_ekskul`, `id_siswa`, `tanggal_daftar`) VALUES
(5, 5, 12, '2020-04-06'),
(7, 23, 12, '2020-04-11');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi_senbud`
--

CREATE TABLE `registrasi_senbud` (
  `id_registrasi_senbud` int(11) NOT NULL,
  `id_senbud` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `tanggal_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrasi_senbud`
--

INSERT INTO `registrasi_senbud` (`id_registrasi_senbud`, `id_senbud`, `id_siswa`, `tanggal_daftar`) VALUES
(1, 1, 12, '2020-04-11');

-- --------------------------------------------------------

--
-- Table structure for table `senbud`
--

CREATE TABLE `senbud` (
  `id_senbud` int(11) NOT NULL,
  `nama_senbud` varchar(50) NOT NULL,
  `penanggung_jawab` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `hari` enum('senin','selasa','rabu','kamis','jumat','sabtu','minggu') NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `senbud`
--

INSERT INTO `senbud` (`id_senbud`, `nama_senbud`, `penanggung_jawab`, `lokasi`, `hari`, `jam_mulai`, `jam_selesai`) VALUES
(1, 'Gitar', 'ateng', 'panggung', 'selasa', '01:00:00', '02:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `kelas` enum('X','XI','XII','') NOT NULL,
  `jurusan` enum('-OTKP-','-RPL-','-TKJ-','-MMD-','-BDP-','-TBG-','-HTL-') NOT NULL,
  `rombel` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nis`, `nama_siswa`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `kelas`, `jurusan`, `rombel`) VALUES
(9, '11706171', 'Muhamad Farid Mahindra', 'Jakarta', '2002-03-22', 'telukpinang', 'XII', '-RPL-', '3'),
(10, '11706265', 'Moch. Faiz Alamsyah', 'Bogor', '2002-09-08', 'Cisarua', 'XII', '-MMD-', '2'),
(11, '11608756', 'Febrianto', 'Sukabumi', '2003-04-03', 'Cigombong', 'XI', '-TBG-', '4'),
(12, '11804539', 'Muklis Rifai', 'Bogor', '2004-07-07', 'Ciherang', 'X', '-OTKP-', '2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('0','1') NOT NULL,
  `id_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`, `id_siswa`) VALUES
(119, 'farid', '6a214fde6c1f8c84902a5576bbe98834623913cc', '0', 9),
(120, 'faiz', '9e13342cfc1ea881aeb27a51e009ee9162d45dfb', '0', 10),
(121, 'febri', '597682675d37620217245e044cdb6357351dcb75', '0', 11),
(122, 'muklis', '7e89feb9b80b69c4d31f1a0497699b87ee9c54a0', '0', 12),
(124, 'mahindra', 'ed0fd9f6e702283bc1e80a6afb528abee0572b75', '1', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokumentasi_ekskul`
--
ALTER TABLE `dokumentasi_ekskul`
  ADD PRIMARY KEY (`id_dokumentasi_ekskul`),
  ADD KEY `fk_dokumentasi_ekskul` (`id_ekskul`);

--
-- Indexes for table `dokumentasi_senbud`
--
ALTER TABLE `dokumentasi_senbud`
  ADD PRIMARY KEY (`id_dokumentasi_senbud`),
  ADD KEY `fk_dokumentasi_ekskul` (`id_senbud`);

--
-- Indexes for table `ekskul`
--
ALTER TABLE `ekskul`
  ADD PRIMARY KEY (`id_ekskul`);

--
-- Indexes for table `registrasi_ekskul`
--
ALTER TABLE `registrasi_ekskul`
  ADD PRIMARY KEY (`id_registrasi_ekskul`),
  ADD KEY `fk_registrasi_ekskul` (`id_ekskul`),
  ADD KEY `fk_registrasi_siswa` (`id_siswa`);

--
-- Indexes for table `registrasi_senbud`
--
ALTER TABLE `registrasi_senbud`
  ADD PRIMARY KEY (`id_registrasi_senbud`),
  ADD KEY `fk_registrasi_ekskul` (`id_senbud`),
  ADD KEY `fk_registrasi_siswa` (`id_siswa`);

--
-- Indexes for table `senbud`
--
ALTER TABLE `senbud`
  ADD PRIMARY KEY (`id_senbud`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_siswa` (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokumentasi_ekskul`
--
ALTER TABLE `dokumentasi_ekskul`
  MODIFY `id_dokumentasi_ekskul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `dokumentasi_senbud`
--
ALTER TABLE `dokumentasi_senbud`
  MODIFY `id_dokumentasi_senbud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ekskul`
--
ALTER TABLE `ekskul`
  MODIFY `id_ekskul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `registrasi_ekskul`
--
ALTER TABLE `registrasi_ekskul`
  MODIFY `id_registrasi_ekskul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registrasi_senbud`
--
ALTER TABLE `registrasi_senbud`
  MODIFY `id_registrasi_senbud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `senbud`
--
ALTER TABLE `senbud`
  MODIFY `id_senbud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokumentasi_ekskul`
--
ALTER TABLE `dokumentasi_ekskul`
  ADD CONSTRAINT `fk_dokumentasi_ekskul` FOREIGN KEY (`id_ekskul`) REFERENCES `ekskul` (`id_ekskul`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `registrasi_ekskul`
--
ALTER TABLE `registrasi_ekskul`
  ADD CONSTRAINT `fk_registrasi_ekskul` FOREIGN KEY (`id_ekskul`) REFERENCES `ekskul` (`id_ekskul`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_registrasi_siswa` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_siswa` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
