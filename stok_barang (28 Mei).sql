-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 12:10 PM
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
('BBPI001', 'Mangga Mahal', 'Sedang', 20000, 22, '2023-05-02', 0),
('BBPI002', 'Jeruk Bali', 'Sedang', 30000, 225, '2023-05-02', 1),
('BBPI005', 'Kedondong', 'Kecil', 30000, 2, '2023-05-18', 0),
('BBPI006', 'Rambutan', 'Kecil', 30000, 1, '2023-05-18', 0),
('BBPI007', 'Mangga', 'Kecil', 40000, 3, '2023-05-18', 0),
('BBPI008', 'Mangga Australia', 'Kecil', 700000, 80, '2023-05-28', 0),
('BBPI009', 'Klengkeng', 'Sedang', 92000, 60, '2023-05-28', 0),
('BBPI010', 'Pucuk Merah', 'Sedang', 82000, 4, '2023-05-28', 0);

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
(1, 'amel', 'amel mungiels', 'jojo123amel', 2);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
