-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2024 at 08:24 AM
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
-- Database: `anghauz`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_unit`
--

CREATE TABLE `detail_unit` (
  `id_detail_unit` int(11) NOT NULL,
  `id_kawasan` int(11) NOT NULL,
  `no_rumah` varchar(100) NOT NULL,
  `luas_tanah` int(11) NOT NULL,
  `luas_bangunan` int(11) NOT NULL,
  `harga` varchar(200) NOT NULL,
  `tanggal_terjual` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_unit`
--

INSERT INTO `detail_unit` (`id_detail_unit`, `id_kawasan`, `no_rumah`, `luas_tanah`, `luas_bangunan`, `harga`, `tanggal_terjual`) VALUES
(3, 2, '3A', 70, 60, 'Rp 500.000.000', '2024-01-03');

--
-- Triggers `detail_unit`
--
DELIMITER $$
CREATE TRIGGER `hapus_detail` AFTER DELETE ON `detail_unit` FOR EACH ROW BEGIN
DELETE FROM dokumen WHERE id_detail_unit=old.id_detail_unit;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id_dokumen` int(11) NOT NULL,
  `nama_dokumen` varchar(500) NOT NULL,
  `dokumen` varchar(500) NOT NULL,
  `id_detail_unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id_dokumen`, `nama_dokumen`, `dokumen`, `id_detail_unit`) VALUES
(3, 'CV', 'CV.pdf', 3);

-- --------------------------------------------------------

--
-- Table structure for table `kawasan`
--

CREATE TABLE `kawasan` (
  `id_kawasan` int(11) NOT NULL,
  `luas_kawasan` int(11) NOT NULL,
  `negara` varchar(200) NOT NULL,
  `provinsi` varchar(200) NOT NULL,
  `kota` varchar(200) NOT NULL,
  `kecamatan` varchar(200) NOT NULL,
  `maps` text NOT NULL,
  `blok_kawasan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kawasan`
--

INSERT INTO `kawasan` (`id_kawasan`, `luas_kawasan`, `negara`, `provinsi`, `kota`, `kecamatan`, `maps`, `blok_kawasan`) VALUES
(1, 2000, 'Indonesia', 'Jawa Timur', 'Surabaya', 'jambangan', 'https://maps.app.goo.gl/ipfEGkTvsw9HqwnG6', 'Tama III'),
(2, 3500, 'Indonesia', 'Jawa Timur', 'Surabaya', 'Jambangan', 'https://maps.app.goo.gl/ctXiUnEYzuZYWXqN6', 'Tama II');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_unit`
--
ALTER TABLE `detail_unit`
  ADD PRIMARY KEY (`id_detail_unit`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id_dokumen`);

--
-- Indexes for table `kawasan`
--
ALTER TABLE `kawasan`
  ADD PRIMARY KEY (`id_kawasan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_unit`
--
ALTER TABLE `detail_unit`
  MODIFY `id_detail_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kawasan`
--
ALTER TABLE `kawasan`
  MODIFY `id_kawasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
