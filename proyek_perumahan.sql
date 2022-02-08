-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2022 at 03:27 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek_perumahan`
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
-- Table structure for table `proyek`
--

CREATE TABLE `proyek` (
  `kd_proyek` varchar(11) NOT NULL,
  `nama_proyek` varchar(25) NOT NULL,
  `type` int(11) NOT NULL,
  `pemilik_proyek` varchar(25) NOT NULL,
  `keterangan_lain` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proyek`
--

INSERT INTO `proyek` (`kd_proyek`, `nama_proyek`, `type`, `pemilik_proyek`, `keterangan_lain`) VALUES
('1', 'Rumah Sederhana', 45, 'Nadhief Fawaz', 'sederhana'),
('2', 'Rumah', 36, 'Nadhief', 'sederhana'),
('3', 'Perumahan', 60, 'Rezaka', 'komersil');

-- --------------------------------------------------------

--
-- Table structure for table `proyekrab`
--

CREATE TABLE `proyekrab` (
  `id_proyekrab` varchar(5) NOT NULL,
  `id_rab` varchar(5) NOT NULL,
  `kd_proyek` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proyekrab`
--

INSERT INTO `proyekrab` (`id_proyekrab`, `id_rab`, `kd_proyek`) VALUES
('PRY1', '001', '1'),
('PRY2', '002', '2'),
('PRY3', '003', '3');

-- --------------------------------------------------------

--
-- Table structure for table `rab`
--

CREATE TABLE `rab` (
  `id_rab` varchar(5) NOT NULL,
  `nama_rab` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rab`
--

INSERT INTO `rab` (`id_rab`, `nama_rab`) VALUES
('001', 'Pekerjaan Pengukuran dan Pondasi'),
('002', 'Pekerjaan Pasang Bata'),
('003', 'Pekerjaan Atap'),
('004', 'Pekerjaan Rangka Plafon Hollow'),
('005', 'Pekerjaan Lantai 1:5'),
('006', 'Pekerjaan Pintu dan Jendela ( kusen )'),
('007', ' Pekerjaan Pengecatan'),
('008', 'Pekerjaan Penutup Atap'),
('009', 'Pekerjaan Beton 1 : 2 : 3'),
('010', ' Pekerjaan Plesteran 1 : 2 : 10'),
('011', 'Pekerjaan Sanitasi'),
('012', 'Pekerjaan Alat Penggantung'),
('013', ' Pekerjaan Carport'),
('014', 'Elektrikal');

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
('AV', 'Avur', 'bh', 35000, 'Soligen', 'Saringan bak cuci piring'),
('BB', 'Batu Belah 15/20', 'm3', 148936, 'Standar', 'Standar'),
('BBP', 'Besi Beton Polos', 'kg', 8500, 'Standar', 'Standar'),
('BD', 'Bendrad (kawat besi)', 'kg', 15000, 'Standar', 'Standar'),
('BK', 'Batu Kali', 'm3', 148936, 'Standar', 'Standar'),
('BM', 'Bata Merah', 'buah', 500, 'Standart', 'Standart'),
('BN', 'Benang', 'bh', 1500, 'Standar', 'Standar'),
('CCI', 'Cat Catylac Interior', 'Kg', 88000, 'Catylac', '5 kg'),
('CDE', 'Cat Dulux Exterior', 'Klg', 206250, 'Dulux', '2.5 liter'),
('CDI', 'Cat Dulux Interior', 'Klg', 129250, 'Dulux', '2.5 liter'),
('CME', 'Cat Mowilex Exterior', 'Klg', 176000, 'Mowilex', '2.5 liter'),
('CMI', 'Cat Mowilex Interior', 'Klg', 165000, 'Mowilex', '2.5 liter'),
('CVI', 'Cat Vinilex Interior', 'kg', 82500, 'Vinilex', '5 kg'),
('ENGJEN', 'Engsel Jendela', 'bh', 17500, 'Standar', 'Standar'),
('ENGPI', 'Engsel Pintu', 'bh', 20000, 'Standar', 'Standar'),
('FD', 'Floordrain', 'bh', 55000, 'Standar', 'Standar'),
('GBB', 'Genteng Bubungan Beton', 'bh', 2460, 'Standar', 'Standar'),
('GBM', 'Genteng Beton Monier', 'buah', 5350, 'Monier', '9 pcs/m2'),
('GBMO', 'Genteng Beton Morando', 'buah', 3750, 'Morando', '20 pcs/m2'),
('GRE', 'Grendel', 'bh', 7500, 'Standar', 'Standar'),
('HA', 'Hak Angin', 'bh', 12500, 'Standar', 'Standar'),
('KA1', 'Keramik 40 x 40', 'Dos', 50000, 'Asiatile', 'Isi 7'),
('KA2', 'Keramik 30 x 30', 'Dos', 38000, 'Asia Tile', 'Isi 11'),
('KA3', 'Keramik 20 x 20', 'Dos', 55000, 'Asia Tile', 'Isi 25'),
('KAB', 'Kawat Beton', 'kg', 15000, 'Standar', 'Standar'),
('KB', 'Koral Beton', 'm3', 148936, 'Standar', 'Standar'),
('KDM', 'Kloset duduk monoblok INA', 'buah', 150000, 'Standart', 'Standart'),
('KLJ', 'Kloset Jongkok', 'bh', 175000, 'Standar', 'Standar'),
('KN', 'Keni 1/2"', 'bh', 2800, 'Rucika', 'Standar'),
('KND', 'Keni Drat Dalam 1/2"', 'bh', 2800, 'Rucika', 'Standar'),
('KRA1', 'Kran Air', 'bh', 25000, 'Standar', 'Diameter 3/4"'),
('KRA2', 'Kran Air', 'bh', 25000, 'Standar', 'Diameter 1/2"'),
('KY', 'Kayu 5/7', 'm3', 32501, 'Standar', 'Pemasangan bouwplank'),
('KYP', 'Kayu Papan 2/10', 'm3', 900000, 'Standar', 'Pemasangan bouwplank'),
('LG', 'List Gypsum', 'm1', 4000, 'Standar', 'lebar = 5cm'),
('LK', 'List Kayu', 'm1', 5500, 'Standar', 'Standar'),
('M', 'MCB', 'bh', 140000, 'Standar', 'Standar'),
('MEA', 'Meteran Air', 'bh', 125000, 'Standar', 'Standar'),
('MEL', 'Meteran Listrik / BP + SLO', 'BH', 2250000, 'Standar', 'Standar'),
('OVL', 'Overloop 1/2" - 3/4" ', 'bh', 1500, 'Standar', 'Standar'),
('P1', 'Pipa PVC 1"', 'ljr', 22500, 'Standart', 'Standart'),
('P2', 'Pipa PVC 2.5"', 'ljr', 45000, 'Standart', 'Standart'),
('PA', 'Pintu Alumunium', 'm1', 400000, 'Standar', 'Standar'),
('PB', 'Pasir Beton', 'm3', 177000, 'Standar', 'Standar'),
('PC', 'Pacul', 'bh', 28000, 'Standar', 'Standar'),
('PG', 'Papan Gypsum', 'lbr', 42000, 'Standar', 'Standar'),
('PKB', 'Paku Biasa', 'kg', 12000, 'Standar', 'ukuran 2" - 5". Pemasangan Bouwplank'),
('PPas', 'Pasir Pasang', 'm3', 138297, 'Standar', 'Standar'),
('PPR', 'Papan Randu', 'ljr', 9000, 'Standar', 'Standar'),
('PU', 'Pasir Urug', 'm3', 138297, 'Standar', 'Urugan Pasir'),
('SemPor', 'Semen Portland', 'kg', 1200, 'Portland', 'Standar'),
('SK', 'Sekop', 'bh', 25000, 'Standar', 'Standar'),
('SL', 'Saklar Lampu', 'bh', 17500, 'Standar', 'Standar'),
('SLTB', 'Selot Besar', 'bh', 90000, 'Standar', 'Standar'),
('SLTK', 'Selot Kecil', 'bh', 45000, 'Standar', 'Standar'),
('SO', 'Sock 1"', 'buah', 1500, 'Standart', 'Standart'),
('SRT', 'Sirtu', 'm3', 65000, 'Standar', 'Standar'),
('STK', 'Stop Kontak', 'bh', 13000, 'Standar', 'Standar'),
('T', 'Tee', 'bh', 1250, 'Standar', 'Standar'),
('TL', 'Titik Lampu', 'TTK', 85000, 'Standar', 'Standar');

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

-- --------------------------------------------------------

--
-- Table structure for table `subpek`
--

CREATE TABLE `subpek` (
  `id_subpek` varchar(10) NOT NULL,
  `id_rab` varchar(5) NOT NULL,
  `nama_pek` varchar(30) NOT NULL,
  `volume` decimal(10,0) NOT NULL,
  `satuan` varchar(5) NOT NULL,
  `harga_satuan` double NOT NULL,
  `jumlah_harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subpek`
--

INSERT INTO `subpek` (`id_subpek`, `id_rab`, `nama_pek`, `volume`, `satuan`, `harga_satuan`, `jumlah_harga`) VALUES
('PK001', '001', ' Bouwplank', '0', 'm2', 0, 0),
('PK0010', '004', 'Rangka plafon', '0', 'm2', 0, 0),
('PK0011', '004', 'Plafon Gypsumboard', '0', '', 0, 0),
('PK0012', '004', 'List Gypsum', '0', '', 0, 0),
('PK0013', '005', 'Keramik Granit 60/60', '0', '', 0, 0),
('PK0014', '005', 'Keramik Dinding KM1 dan KM2', '0', '', 0, 0),
('PK0015', '005', ' Keramik Lantai KM1 dan KM2', '0', '', 0, 0),
('PK0016', '006', ' Kusen Pintu Almini', '0', '', 0, 0),
('PK0017', '006', 'Kusen dan daun jendela ', '0', '', 0, 0),
('PK0018', '006', ' Daun pintu utama panil', '0', '', 0, 0),
('PK0019', '006', 'Daun pintu double triplex', '0', '', 0, 0),
('PK002', '001', 'Galian tanah', '0', 'm3', 0, 0),
('PK0020', '007', ' Cat dinding', '0', '', 0, 0),
('PK0021', '007', 'Cat plafon', '0', '', 0, 0),
('PK0022', '007', 'Cat listplang', '0', '', 0, 0),
('PK0023', '007', ' Cat genteng', '0', '', 0, 0),
('PK0024', '008', 'Genteng beton', '0', '', 0, 0),
('PK0025', '008', 'Bubungan', '0', '', 0, 0),
('PK0026', '008', 'Plafond gypsum', '0', '', 0, 0),
('PK0027', '008', ' Atap spandek lantai 2', '0', '', 0, 0),
('PK0028', '009', 'Beton sloof 15x20', '0', '', 0, 0),
('PK0029', '009', 'Beton kolom 20x20 Lt1 & Lt2', '0', '', 0, 0),
('PK003', '001', 'Pasangan batu kumbung 1:3:10', '0', 'm3', 0, 0),
('PK0030', '009', 'Beton dak kanopy ', '0', '', 0, 0),
('PK0031', '009', ' Beton ring Balok 10x15', '0', '', 0, 0),
('PK032', '009', ' Stross ø 30', '0', '', 0, 0),
('PK033', '009', 'Pelat lantai 2 & teras t=10', '0', '', 0, 0),
('PK034', '009', ' Bordes & anak tangga', '0', '', 0, 0),
('PK035', '010', ' Plesteran & Acian ', '0', '', 0, 0),
('PK036', '010', ' Tali air', '0', '', 0, 0),
('PK037', '011', 'Pipa PVC 4"', '0', '', 0, 0),
('PK038', '011', ' Pipa PVC 3"', '0', '', 0, 0),
('PK039', '011', 'Pipa PVC 1/2"AW', '0', '', 0, 0),
('PK04', '001', 'Urugan pasir pondasi', '0', '', 0, 0),
('PK040', '011', ' Closet duduk ex china', '0', '', 0, 0),
('PK041', '011', ' Avur', '0', '', 0, 0),
('PK042', '011', 'Floor drainage', '0', '', 0, 0),
('PK043', '011', 'Kran air 1/2"', '0', '', 0, 0),
('PK044', '011', ' Keni 1/2 "', '0', '', 0, 0),
('PK045', '011', 'Keni drat dalam 1/2"', '0', '', 0, 0),
('PK046', '011', 'Keni 4"', '0', '', 0, 0),
('PK047', '011', ' Overloop 3/4"- 1/2"', '0', '', 0, 0),
('PK048', '011', 'Sock drat dalam 1/2"', '0', '', 0, 0),
('PK049', '011', 'Tee 1/2"', '0', '', 0, 0),
('PK05', '001', ' Urug kembali lubang pondasi ', '0', '', 0, 0),
('PK050', '011', 'Stop Kran', '0', '', 0, 0),
('PK051', '011', 'Meteran Air', '0', '', 0, 0),
('PK052', '011', 'Septic Tank', '0', '', 0, 0),
('PK053', '012', ' Selot Besar', '0', '', 0, 0),
('PK054', '012', 'Selot Kecil', '0', '', 0, 0),
('PK055', '012', 'Engsel pintu', '0', '', 0, 0),
('PK056', '012', 'Engsel jendela', '0', '', 0, 0),
('PK057', '012', 'Grendel', '0', '', 0, 0),
('PK058', '012', 'Hak Angin', '0', '', 0, 0),
('PK059', '013', 'Cor Carport', '0', '', 0, 0),
('PK06', '002', 'Pasangan bata merah 1:4', '0', '', 0, 0),
('PK060', '014', 'Titik Lampu', '0', '', 0, 0),
('PK061', '014', 'Saklar Lampu', '0', '', 0, 0),
('PK062', '014', 'Stop Kontak', '0', '', 0, 0),
('PK063', '014', 'MCB', '0', '', 0, 0),
('PK064', '014', 'Meteran Listrik/BP + SLO', '0', '', 0, 0),
('PK065', '009', 'Stross ø 20', '0', '', 0, 0),
('PK066', '011', ' Closet jongkok', '0', '', 0, 0),
('PK067', '005', ' Keramik 40/40', '0', '', 0, 0),
('PK07', '002', 'Pasangan bata merah 1:4:10', '0', '', 0, 0),
('PK08', '003', ' Atap Galvalum', '0', '', 0, 0),
('PK09', '003', ' List plank', '0', '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proyek`
--
ALTER TABLE `proyek`
  ADD PRIMARY KEY (`kd_proyek`),
  ADD KEY `kd_proyek` (`kd_proyek`);

--
-- Indexes for table `proyekrab`
--
ALTER TABLE `proyekrab`
  ADD PRIMARY KEY (`id_proyekrab`),
  ADD KEY `id_rab` (`id_rab`),
  ADD KEY `kd_proyek` (`kd_proyek`);

--
-- Indexes for table `rab`
--
ALTER TABLE `rab`
  ADD PRIMARY KEY (`id_rab`),
  ADD KEY `id_rab` (`id_rab`);

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
-- Indexes for table `subpek`
--
ALTER TABLE `subpek`
  ADD PRIMARY KEY (`id_subpek`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `proyekrab`
--
ALTER TABLE `proyekrab`
  ADD CONSTRAINT `proyekrab_ibfk_1` FOREIGN KEY (`id_rab`) REFERENCES `rab` (`id_rab`),
  ADD CONSTRAINT `proyekrab_ibfk_2` FOREIGN KEY (`kd_proyek`) REFERENCES `proyek` (`kd_proyek`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
