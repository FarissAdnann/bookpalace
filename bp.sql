-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 05:58 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`password`) VALUES
('$2y$10$ZnKZcnHcU9rP/P66hHFg7OjXdc0dWimU7xlbe1/2ZkWLeCxqna0t2');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `idBuku` int(5) NOT NULL,
  `Tajuk` varchar(40) NOT NULL,
  `hargaBuku` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`idBuku`, `Tajuk`, `hargaBuku`) VALUES
(125, 'Kancil dan Buaya', 25),
(126, 'Gagak yang dahaga', 15),
(127, 'Kura-Kura dan Arnab', 10),
(128, 'Belalang dengan Semut', 20);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `idPelanggan` int(5) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(250) NOT NULL,
  `namapenuh` varchar(70) NOT NULL,
  `icnum` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phonenum` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`idPelanggan`, `username`, `password`, `namapenuh`, `icnum`, `email`, `phonenum`) VALUES
(1, 'faris', '$2y$10$oRFjBB22T9NHh9roVh1RUegA8e3ikCcjRKJ22b7nv.CL/BKbSCd5u', 'Muhammad Faris Bin Adnan', '990524060793', 'faris@gmail.com', '0199935148'),
(5, 'fikri', '$2y$10$5cfJQsHt6Lc5gZnd32nPJu.oWzbNyXSJz.rFGJCtqI7z7STlnyYUW', 'Mohamad Fikri Bin Rosli', '990612062211', 'fikri@gmail.com', '0192873377'),
(7, 'abu', '$2y$10$3kPq/96PmrY5dX9AunNOwO7M2SjqugeQ/4zH3sMRcl.QT8BvU5Hgm', 'Abu Bin Bakar', '992120356274', 'abu@gmail.com', '0198765432'),
(8, 'ali', '$2y$10$ipPVop3nW2Zt4201eMezv.A3ALr7oguH.r6ue35j0sftegDFzUdR2', 'Ali Bin Ahmad', '980221069783', 'ali@gmail.com', '0123456789');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `idPesanan` int(5) NOT NULL,
  `idPelanggan` int(5) NOT NULL,
  `idBuku` int(5) NOT NULL,
  `jumlahBayaran` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`idPesanan`, `idPelanggan`, `idBuku`, `jumlahBayaran`) VALUES
(111, 176, 126, 15),
(112, 839, 128, 20),
(113, 349, 127, 10);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`password`) VALUES
('$2y$10$NkwkpAMwRPOGkDQzxB8t5uh0mr4f2Jx5wG/ySM4fEnWwIx/gSaNrC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`idBuku`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`idPelanggan`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`idPesanan`),
  ADD KEY `idPelanggan` (`idPelanggan`),
  ADD KEY `idBuku` (`idBuku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `idBuku` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `idPelanggan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `idPesanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
