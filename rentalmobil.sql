-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2016 at 02:45 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalmobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenisservice`
--

CREATE TABLE `jenisservice` (
  `idjenisservice` varchar(255) NOT NULL,
  `Nmjenisservice` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `NIK` varchar(255) NOT NULL,
  `NmKaryawan` varchar(255) DEFAULT NULL,
  `AlmtKaryawan` text,
  `TelpKaryawan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`NIK`, `NmKaryawan`, `AlmtKaryawan`, `TelpKaryawan`) VALUES
('22203251999', 'Annisa', 'Pondok Ungu Permai', 111222333),
('22205241999', 'Yani', 'Taman Alamanda', 111222333);

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `NoPlat` varchar(255) NOT NULL,
  `tahun` int(11) DEFAULT NULL,
  `tarifPerjam` int(11) DEFAULT NULL,
  `statusrental` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`NoPlat`, `tahun`, `tarifPerjam`, `statusrental`) VALUES
('A 55 EK', 2013, 50000, 'Tersedia'),
('B 110 S', 2010, 25000, 'Telah diSewa'),
('B 44 U', 2009, 25000, 'Telah diSewa'),
('C 4 NTIK', 2011, 20000, 'Tersedia'),
('J 3 LEK', 2012, 40000, 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `Type_User` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `username`, `password`, `Type_User`) VALUES
(1, 'Lina', '202cb962ac59075b964b07152d234b70', 'Penyewa'),
(2, 'Mila', '250cf8b51c773f3f8dc8b4be867a9a02', 'Karyawan');

-- --------------------------------------------------------

--
-- Table structure for table `merk`
--

CREATE TABLE `merk` (
  `kodemerk` varchar(255) NOT NULL,
  `NmMerk` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `NoKTP` varchar(255) NOT NULL,
  `NamaPel` varchar(255) DEFAULT NULL,
  `AlamatPel` text,
  `TelpPel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`NoKTP`, `NamaPel`, `AlamatPel`, `TelpPel`) VALUES
('11119990325', 'Khoirunnisa', 'Alinda Kencana Permai', '085719248878'),
('11119990524', 'Asriana', 'Kavling Bahagia', '089676074110');

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE `pemilik` (
  `kdpemilik` varchar(255) NOT NULL,
  `NmPemilik` varchar(255) DEFAULT NULL,
  `AlmtPemilik` text,
  `TelpPemilik` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `KodeService` varchar(255) NOT NULL,
  `tglservice` date DEFAULT NULL,
  `biayaservice` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`KodeService`, `tglservice`, `biayaservice`) VALUES
('445566', '2016-05-26', '150000'),
('778899', '2016-01-08', '100000');

-- --------------------------------------------------------

--
-- Table structure for table `setoran`
--

CREATE TABLE `setoran` (
  `NoSetoran` int(11) NOT NULL,
  `tglsetoran` date DEFAULT NULL,
  `Jumlah` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sopir`
--

CREATE TABLE `sopir` (
  `idSopir` int(11) NOT NULL,
  `NmSopir` varchar(255) DEFAULT NULL,
  `AlmtSopir` text,
  `TelpSopir` int(11) DEFAULT NULL,
  `NoSim` text,
  `tarifPerjam` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksisewa`
--

CREATE TABLE `transaksisewa` (
  `NoTransaksi` varchar(255) NOT NULL,
  `tglpesan` date DEFAULT NULL,
  `tglpinjam` date DEFAULT NULL,
  `jampinjam` time DEFAULT NULL,
  `tglkembalirencana` date DEFAULT NULL,
  `jamkembalirencana` time DEFAULT NULL,
  `tglkembalireal` date DEFAULT NULL,
  `jamkembalireal` time DEFAULT NULL,
  `denda` varchar(255) DEFAULT NULL,
  `kmpinjam` varchar(255) DEFAULT NULL,
  `kmkembali` varchar(255) DEFAULT NULL,
  `BBMpinjam` varchar(255) DEFAULT NULL,
  `BBMkembali` varchar(255) DEFAULT NULL,
  `kondisimobilpinjam` text,
  `kondisimobilkembali` text,
  `kerusakan` text,
  `biayakerusakan` varchar(255) DEFAULT NULL,
  `biayaBBM` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `idType` varchar(255) NOT NULL,
  `NmType` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`idType`, `NmType`) VALUES
('AB22', 'Avanza'),
('AB33', 'Innova'),
('AB44', 'Jazz'),
('AB55', 'Civic'),
('AB66', 'Elf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenisservice`
--
ALTER TABLE `jenisservice`
  ADD PRIMARY KEY (`idjenisservice`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`NoPlat`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`kodemerk`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`NoKTP`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`kdpemilik`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`KodeService`);

--
-- Indexes for table `setoran`
--
ALTER TABLE `setoran`
  ADD PRIMARY KEY (`NoSetoran`);

--
-- Indexes for table `sopir`
--
ALTER TABLE `sopir`
  ADD PRIMARY KEY (`idSopir`);

--
-- Indexes for table `transaksisewa`
--
ALTER TABLE `transaksisewa`
  ADD PRIMARY KEY (`NoTransaksi`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`idType`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
