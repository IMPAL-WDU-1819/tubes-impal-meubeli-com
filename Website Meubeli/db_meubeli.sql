-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2018 at 07:17 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_meubeli`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `hak` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`username`, `password`, `nama`, `email`, `hak`) VALUES
('admin', 'admin', 'ADMIN', 'admin@meubeli.com', 'ADMIN'),
('crypt', 'cordeon', 'Ja-VR', 'fasyahj@yahoo.com', 'BASIC');

-- --------------------------------------------------------

--
-- Table structure for table `cicilan`
--

CREATE TABLE `cicilan` (
  `id_transaksi` char(12) NOT NULL,
  `cicilan` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_meubel` char(12) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_meubel`, `gambar`) VALUES
('m000000001', 'kursi-goyang1.jpg'),
('m000000001', 'kursi-goyang2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `meubel`
--

CREATE TABLE `meubel` (
  `id_meubel` char(10) NOT NULL,
  `nama_meubel` varchar(50) NOT NULL,
  `harga_meubel` int(8) NOT NULL,
  `kategori_meubel` varchar(25) NOT NULL,
  `jenis_meubel` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meubel`
--

INSERT INTO `meubel` (`id_meubel`, `nama_meubel`, `harga_meubel`, `kategori_meubel`, `jenis_meubel`) VALUES
('m000000001', 'kursi goyang', 500000, 'kursi', 'kursi santai');

-- --------------------------------------------------------

--
-- Table structure for table `sparepart`
--

CREATE TABLE `sparepart` (
  `id_sparepart` char(12) NOT NULL,
  `nama_sparepart` varchar(50) NOT NULL,
  `harga_sparepart` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` char(12) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `jml_cicilan` int(2) NOT NULL,
  `jenis_pembayaran` varchar(8) NOT NULL,
  `status_transaksi` varchar(8) NOT NULL,
  `id_user` char(10) NOT NULL,
  `id_meubel` char(10) NOT NULL,
  `id_sparepart` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tgl_transaksi`, `jml_cicilan`, `jenis_pembayaran`, `status_transaksi`, `id_user`, `id_meubel`, `id_sparepart`) VALUES
('t00000000001', '2018-11-17', 0, 'cash', 'lunas', 'crypt', 'm000000001', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `meubel`
--
ALTER TABLE `meubel`
  ADD PRIMARY KEY (`id_meubel`);

--
-- Indexes for table `sparepart`
--
ALTER TABLE `sparepart`
  ADD PRIMARY KEY (`id_sparepart`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
