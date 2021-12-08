-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2021 at 04:20 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `vw_password` varchar(40) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jabatan` enum('admin','komisaris','direktur','keuangan','manajpro') NOT NULL,
  `user_level` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `id_pengguna`, `username`, `password`, `vw_password`, `nama`, `jabatan`, `user_level`) VALUES
(1, 'N01', 'nadhfrr', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'Nadhief Fawaz Rezaka', 'admin', '1'),
(2, 'K01', 'komisaris', 'e00cf25ad42683b3df678c61f42c6bda', 'admin1', 'Muhammad Anas Rafiq', 'komisaris', '2'),
(3, 'D01', 'direktur', 'c84258e9c39059a89ab77d846ddab909', 'admin2', 'Arif Rohman Rohim', 'direktur', '3'),
(4, 'Keu01', 'keuangan', '32cacb2f994f6b42183a1300d9a3e8d6', 'admin3', 'Al Kautsar Azka', 'keuangan', '4'),
(5, 'M01', 'manajpro', 'fc1ebc848e31e0a68e868432225e3c82', 'admin4', 'Puguh Utomo', 'manajpro', '5');

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
('BM', 'Bata Merah', 'buah', 500000, 'Standart', 'Standart'),
('CCI', 'Cat Catylac Interior', 'Kg', 88000, 'Catylac', '5 kg'),
('CDE', 'Cat Dulux Exterior', 'Klg', 206250, 'Dulux', '2.5 liter'),
('CDI', 'Cat Dulux Interior', 'Klg', 129250, 'Dulux', '2.5 liter'),
('CME', 'Cat Mowilex Exterior', 'Klg', 176000, 'Mowilex', '2.5 liter'),
('CMI', 'Cat Mowilex Interior', 'Klg', 165000, 'Mowilex', '2.5 liter'),
('CVI', 'Cat Vinilex Interior', 'kg', 82500, 'Vinilex', '5 kg'),
('GBM', 'Genteng Beton Monier', 'buah', 5350, 'Monier', '9 pcs/m2'),
('GBMO', 'Genteng Beton Morando', 'buah', 3750, 'Morando', '20 pcs/m2'),
('KA1', 'Keramik 40 x 40', 'Dos', 50000, 'Asiatile', 'Isi 7'),
('KA2', 'Keramik 30 x 30', 'Dos', 38000, 'Asia Tile', 'Isi 11'),
('KA3', 'Keramik 20 x 20', 'Dos', 55000, 'Asia Tile', 'Isi 25'),
('KDM', 'Kloset duduk monoblok INA', 'buah', 150000, 'Standart', 'Standart'),
('P1', 'Pipa PVC 1"', 'ljr', 22500, 'Standart', 'Standart'),
('P2', 'Pipa PVC 2.5"', 'ljr', 45000, 'Standart', 'Standart'),
('SO', 'Sock 1"', 'buah', 1500, 'Standart', 'Standart');

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
('AAU', 'Asisten Ahli Ukur', 'hari', 87200, 'Standart', 'Standart'),
('AU', 'Ahli Ukur', 'hari', 116300, 'Standart', 'Standart'),
('KTBR', 'Kepala Tukang Bor', 'hari', 2900, 'Standart', 'Standart'),
('KTBS', 'Kepala Tukang Besi', 'hari', 25000, 'Standart', 'Standart'),
('KTBT', 'Kepala Tukang Batu', 'hari', 32500, 'Standart', 'Standart'),
('KTCT', 'Kepala Tukang Cat', 'hari', 27000, 'Standart', 'Standart'),
('KTPL', 'Kepala Tukang Plitur', 'hari', 29000, 'Standart', 'Standart'),
('MD', 'Mandor', 'hari', 75000, 'Standart', 'Standart'),
('PAT', 'Pengawas / Ahli Teknik', 'hari', 37200, 'Standart', 'Standart'),
('PK', 'Pekerja', 'hari', 65000, 'Standart', 'Standart'),
('TBR', 'Tukang Bor', 'hari', 27500, 'Standart', 'Standart'),
('TBS', 'Tukang Besi', 'hari', 80000, 'Standart', 'Standart'),
('TBT', 'Tukang Batu', 'hari', 80000, 'Standart', 'Standart'),
('TCT', 'Tukang Cat', 'hari', 55000, 'Standart', 'Standart'),
('TG', 'Tukang Gali', 'hari', 65000, 'Standart', 'Standart'),
('TK', 'Tukang Kapur', 'hari', 22500, 'Standart', 'Standart'),
('TKY', 'Tukang Kayu', 'hari', 90000, 'Standart', 'Standart'),
('TLT', 'Tukang Listrik', 'hari', 29000, 'Standart', 'Standart'),
('TPL', 'Tukang Plitur', 'hari', 27000, 'Standart', 'Standart'),
('TPLD', 'Tukang Pipa Ledeng', 'hari', 27900, 'Standart', 'Standart');

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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
