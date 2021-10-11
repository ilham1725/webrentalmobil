-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2016 at 11:44 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sebelasrpl2`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE IF NOT EXISTS `jenis` (
  `id_jenis` int(11) NOT NULL,
  `nm_jenis` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nm_jenis`) VALUES
(1, 'furniture'),
(2, 'elektronik');

-- --------------------------------------------------------

--
-- Table structure for table `jenkel`
--

CREATE TABLE IF NOT EXISTS `jenkel` (
  `id_jenkel` int(11) NOT NULL,
  `nm_jenkel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenkel`
--

INSERT INTO `jenkel` (`id_jenkel`, `nm_jenkel`) VALUES
(1, 'Pria'),
(2, 'Wanita');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id_member` int(11) NOT NULL,
  `nm_member` varchar(255) DEFAULT NULL,
  `tgl_lahir` varchar(255) DEFAULT NULL,
  `alamat` text,
  `tlp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `id_jenkel` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nm_member`, `tgl_lahir`, `alamat`, `tlp`, `email`, `id_jenkel`) VALUES
(1, 'Lina Khoirunnisa', '1999-03-25', 'ALinda Kencana Permai', '85719248878', 'linakhoirunnisa29@gmail.com', 1),
(2, 'Rosita Febrianti', '1999-02-15', 'Jl.Swadaya 1', '89647312198', 'rositafebrianti117@gmail.com', 2),
(3, 'Mila Asriana', '1999-4-24', 'Kav.Bahagia', '089977665544', 'milaariana24@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int(11) NOT NULL,
  `nm_produk` varchar(255) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `id_jenis` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nm_produk`, `harga`, `id_jenis`, `stok`, `keterangan`) VALUES
(1, 'lemari pakaian', '1500000', 1, 5, 'Lemari Olympic type XYZ'),
(2, 'tv toshiba', '4500000', 2, 5, 'TV Toshiba 21 inc'),
(3, 'mesin cuci', '130000000', 2, 10, 'masin cuci sharp 333'),
(4, 'Laptop', '15000000', 2, 6, 'Laptop Asus');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` char(32) DEFAULT NULL,
  `id_member` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `id_member`, `date`) VALUES
(1, 'Lina', '202cb962ac59075b964b07152d234b70', 1, '2016-05-02'),
(2, 'Rosita', '250cf8b51c773f3f8dc8b4be867a9a02', 2, '2016-05-02'),
(3, 'rian', '15de21c670ae7c3f6f3f1f37029303c9', 3, '2016-05-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `jenkel`
--
ALTER TABLE `jenkel`
  ADD PRIMARY KEY (`id_jenkel`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jenkel`
--
ALTER TABLE `jenkel`
  MODIFY `id_jenkel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
