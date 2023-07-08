-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2023 at 11:07 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stok_barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `databarang`
--

CREATE TABLE `databarang` (
  `Id_barang` varchar(155) NOT NULL,
  `Nama_barang` varchar(255) NOT NULL,
  `Ukuran_barang` varchar(50) NOT NULL,
  `Harga_barang` double NOT NULL,
  `Jumlah_barang` int(50) NOT NULL,
  `Tanggal_barang_masuk` date NOT NULL,
  `Id_user` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `databarang`
--

INSERT INTO `databarang` (`Id_barang`, `Nama_barang`, `Ukuran_barang`, `Harga_barang`, `Jumlah_barang`, `Tanggal_barang_masuk`, `Id_user`) VALUES
('BBPI001', 'Mangga', 'Besar', 45000, 30, '2023-07-02', 0),
('BBPI002', 'Manggis', 'Kecil', 25000, 2, '2023-07-02', 0),
('BBPI003', 'Kedondong', 'Sedang', 20000, 4, '2023-07-02', 0),
('BBPI004', 'Rambutan', 'Kecil', 20000, 1, '2023-07-07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `datapembelian`
--

CREATE TABLE `datapembelian` (
  `Id_histori` varchar(50) NOT NULL,
  `Id_detail` varchar(50) NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datapembelian`
--

INSERT INTO `datapembelian` (`Id_histori`, `Id_detail`, `Tanggal`) VALUES
('ikEpw7Feh1', '3md0NyPx3xmUvYQ', '2003-07-23');

-- --------------------------------------------------------

--
-- Table structure for table `detailpembelian`
--

CREATE TABLE `detailpembelian` (
  `Id_Utama` varchar(50) NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `Id_barang` varchar(115) NOT NULL,
  `Id_detail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detailpembelian`
--

INSERT INTO `detailpembelian` (`Id_Utama`, `Jumlah`, `Id_barang`, `Id_detail`) VALUES
('oAQCI23qY0', 1, 'BBPI003', '3md0NyPx3xmUvYQ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `user` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user`, `nama`, `password`, `level`) VALUES
(0, 'joanica', 'Joanica', 'joanica123', 1),
(6235827, 'nada', 'Qotrun', 'nada123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `databarang`
--
ALTER TABLE `databarang`
  ADD PRIMARY KEY (`Id_barang`),
  ADD KEY `Id_user` (`Id_user`);

--
-- Indexes for table `datapembelian`
--
ALTER TABLE `datapembelian`
  ADD PRIMARY KEY (`Id_histori`),
  ADD KEY `Id_detail` (`Id_detail`);

--
-- Indexes for table `detailpembelian`
--
ALTER TABLE `detailpembelian`
  ADD PRIMARY KEY (`Id_Utama`),
  ADD KEY `Id_detail` (`Id_detail`),
  ADD KEY `Id_barang` (`Id_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `databarang`
--
ALTER TABLE `databarang`
  ADD CONSTRAINT `databarang_ibfk_1` FOREIGN KEY (`Id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detailpembelian`
--
ALTER TABLE `detailpembelian`
  ADD CONSTRAINT `detailpembelian_ibfk_1` FOREIGN KEY (`Id_detail`) REFERENCES `datapembelian` (`Id_detail`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detailpembelian_ibfk_2` FOREIGN KEY (`Id_barang`) REFERENCES `databarang` (`Id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
