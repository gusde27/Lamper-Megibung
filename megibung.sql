-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2019 at 06:32 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `megibung`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `USER` varchar(30) NOT NULL,
  `FOTO_E` varchar(255) NOT NULL,
  `FOTO_E2` varchar(255) NOT NULL,
  `FOTO_E3` varchar(255) NOT NULL,
  `FOTO_E4` varchar(255) NOT NULL,
  `FOTO_E5` varchar(255) NOT NULL,
  `NAMA_E` varchar(75) NOT NULL,
  `TANGGAL_E` varchar(40) NOT NULL,
  `DESKRIPSI` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `postingan`
--

CREATE TABLE `postingan` (
  `USER` varchar(70) NOT NULL,
  `FOTO_T` varchar(300) NOT NULL,
  `FOTO_T2` varchar(255) NOT NULL,
  `FOTO_T3` varchar(255) NOT NULL,
  `FOTO_T4` varchar(255) NOT NULL,
  `FOTO_T5` varchar(255) NOT NULL,
  `TIPE` varchar(30) NOT NULL,
  `NAMA_T` varchar(70) NOT NULL,
  `DESKRIPSI` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `USER` varchar(50) NOT NULL,
  `NAMA_A` varchar(70) NOT NULL,
  `DESKRIPSI_P` varchar(255) NOT NULL,
  `FOTO_A` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `EMAIL` varchar(150) NOT NULL,
  `NAME_TAMU` varchar(70) NOT NULL,
  `SOCIAL` varchar(70) NOT NULL,
  `JENIS_S` varchar(70) NOT NULL,
  `NEGARA` varchar(100) NOT NULL,
  `NAME` varchar(70) NOT NULL,
  `KEDATANGAN` varchar(50) NOT NULL,
  `PENDAPATAN` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USERNAME` varchar(30) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL,
  `LEVEL` int(2) NOT NULL,
  `NAME` varchar(40) NOT NULL,
  `NICKNAME` varchar(20) NOT NULL,
  `NO_TELP` varchar(20) NOT NULL,
  `ALAMAT` varchar(100) NOT NULL,
  `JK` varchar(20) NOT NULL,
  `FOTO` varchar(300) NOT NULL,
  `FOTO_KTP` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USERNAME`, `PASSWORD`, `LEVEL`, `NAME`, `NICKNAME`, `NO_TELP`, `ALAMAT`, `JK`, `FOTO`, `FOTO_KTP`) VALUES
('de', 'wirawan@21.', 0, 'I Gede Bagus Wirawan', 'Gusde', '087761472255', 'Lamper Village', 'Male', 'IMG_0960.JPG', ''),
('gusde', 'wirawan@21.', 1, 'Gusde Seijuro', 'Gusde', '087761472255', 'Canda', 'Male', 'IMG_0424.JPG', ''),
('ketutsasot', '1985', 0, 'I Ketut Suarsa', 'Sasot', '081933065576', 'lol', 'Male', '12239605_10207302334653114_3315310865586829542_n.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USERNAME`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
