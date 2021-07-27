-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 09:51 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `id_pengguna` varchar(10) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `nama` varchar(25) NOT NULL,
  `jabatan` enum('admin','komisaris','direktur','keuangan','manajpro') NOT NULL,
  `user_level` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `id_pengguna`, `username`, `password`, `nama`, `jabatan`, `user_level`) VALUES
(1, 'N01', 'nadhfrr', '21232f297a57a5a743894a0e4a801fc3', 'Nadhief Fawaz Rezaka', 'admin', '1'),
(2, 'K01', 'komisaris', 'e00cf25ad42683b3df678c61f42c6bda', 'Muhammad Anas Rafiq', 'komisaris', '2'),
(3, 'D01', 'direktur', 'c84258e9c39059a89ab77d846ddab909', 'Arif Rohman Rohim', 'direktur', '3'),
(4, 'Keu01', 'keuangan', '32cacb2f994f6b42183a1300d9a3e8d6', 'Al Kautsar Azka', 'keuangan', '4'),
(5, 'M01', 'manajpro', 'fc1ebc848e31e0a68e868432225e3c82', 'Puguh Utomo', 'manajpro', '5');

-- --------------------------------------------------------

--
-- Table structure for table `rincian_bahan`
--

CREATE TABLE `rincian_bahan` (
  `kd_bahan` varchar(15) NOT NULL,
  `uraian_bahan` varchar(30) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `harga_dasar` double NOT NULL,
  `merk` varchar(50) NOT NULL,
  `spesifikasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rincian_bahan`
--

INSERT INTO `rincian_bahan` (`kd_bahan`, `uraian_bahan`, `satuan`, `harga_dasar`, `merk`, `spesifikasi`) VALUES
('BB', 'Besi beton (polos/ulir)', 'kg', 13409, 'Standar', 'Dia 12mm (12m) polos (SNI)'),
('BCP', 'Bak cuci piring', 'unit', 218845, 'Standar', 'Stainless Stell'),
('BTB', 'Batu belah', 'm3', 355624, 'Standar', 'Standar'),
('BTM', 'Bata merah', 'buah', 1189, 'AT', 'Standar'),
('C75', 'Baja ringan canai dingin C75', 'kg', 22808, 'Standar', '0,75 TCT, Panjang 6m (berat 5.1kg)');

-- --------------------------------------------------------

--
-- Table structure for table `rincian_upah`
--

CREATE TABLE `rincian_upah` (
  `kd_upah` varchar(20) NOT NULL,
  `uraian_upah` varchar(50) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `harga_dasar` double NOT NULL,
  `merk` varchar(50) NOT NULL,
  `spesifikasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rincian_upah`
--

INSERT INTO `rincian_upah` (`kd_upah`, `uraian_upah`, `satuan`, `harga_dasar`, `merk`, `spesifikasi`) VALUES
('KTBa', 'Kepala Tukang Batu', 'OH', 139157, 'Standar', 'Standar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rincian_bahan`
--
ALTER TABLE `rincian_bahan`
  ADD PRIMARY KEY (`kd_bahan`);

--
-- Indexes for table `rincian_upah`
--
ALTER TABLE `rincian_upah`
  ADD PRIMARY KEY (`kd_upah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
