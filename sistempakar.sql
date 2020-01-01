-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2020 at 02:17 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistempakar`
--

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` varchar(10) NOT NULL,
  `nama_gejala` varchar(50) NOT NULL,
  `id_induk_ya` varchar(5) NOT NULL,
  `id_induk_tidak` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `nama_gejala`, `id_induk_ya`, `id_induk_tidak`) VALUES
('G1', 'Apakah Merasakan Demam Tinggi?', '', ''),
('G10', 'Apakah anda merasakan konstipasi/sembelit?', 'G2', ''),
('G11', 'Apakah anda merasakan muntah?', 'G9', ''),
('G12', 'Apakah nafsu makan anda menurun?', 'G11', ''),
('G13', 'Apakah anda merasakan lemah letih lesu?', 'G12', ''),
('G14', 'Apakah anda ruam-ruam?', 'G7', ''),
('G15', 'Apakah anda nyeri otot persendian?', 'G14', ''),
('G16', 'Apakah anda merasakan nyeri di belakang mata?', 'G15', ''),
('G17', 'Apakah anda merasakan lemah letih lesu?', 'G16', ''),
('G18', 'Apakah anda merasakan asam pada mulut?', 'G5', ''),
('G19', 'Apakah anda merasakan mual?', 'G18', ''),
('G2', 'Apakah Demam Naik Terutama pada Malam Hari?', 'G1', ''),
('G20', 'Apakah anda merasakan muntah?', 'G19', ''),
('G3', 'Apakah Merasakan Demam Turun pada Hari ke 3?', '', 'G1'),
('G4', 'Apakah Demam Ringan Biasa?', '', ''),
('G5', 'Apakah Merasakan Nyeri pada Ulu Hati?', '', ''),
('G6', 'Apakah ada rasa Konstipasi atau sembelit?', 'G2', ''),
('G7', 'Apakah anda merasakan Sakit Kepala?', 'G3', ''),
('G8', 'Apakah anda merasakan Nyeri Perut seperti Kram?', 'G4', ''),
('G9', 'Apakah anda merasakan rasa mual?', 'G6', '');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(10) NOT NULL,
  `nama` text NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `umur` varchar(2) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `diagnosa` varchar(8) NOT NULL,
  `gejala` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama`, `alamat`, `umur`, `jenis_kelamin`, `diagnosa`, `gejala`) VALUES
(7, 'Akbar', 'Jl. Muhajirin LK 1 RT 1 Indralaya Indah, Kecamatan Indralaya', '23', 'Laki-Laki', 'P004', '[\"1\",\"3\",\"5\",\"7\",\"8\",\"9\",\"1\",\"1\"]'),
(8, 'Akbar', 'Jl. Muhajirin LK 1 RT 1 Indralaya Indah, Kecamatan Indralaya', '23', 'Laki-Laki', 'P004', '[\"1\",\"3\",\"5\",\"7\",\"8\",\"9\",\"1\",\"1\"]');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` varchar(11) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `solusi` varchar(200) NOT NULL,
  `obat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `nama_penyakit`, `solusi`, `obat`) VALUES
('P001', 'Penyakit Typhoid', 'Segera pergi ke klinik atau rumah sakit untuk memastikan melalui uji laboratorium.', ''),
('P002', 'Demam Berdarah Dengue (DBD)', '', ''),
('P003', 'Gastroentritis', '', ''),
('P004', 'Dispepsia', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id_user` int(11) NOT NULL,
  `gejala_awal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rulebase`
--

CREATE TABLE `rulebase` (
  `id_penyakit` varchar(11) NOT NULL,
  `id_gejala` varchar(11) NOT NULL,
  `bobot` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  `type_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `type_user`) VALUES
(1, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`),
  ADD KEY `diagnosa` (`diagnosa`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `rulebase`
--
ALTER TABLE `rulebase`
  ADD UNIQUE KEY `id_penyakit` (`id_penyakit`),
  ADD UNIQUE KEY `id_gejala` (`id_gejala`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `pasien_ibfk_1` FOREIGN KEY (`diagnosa`) REFERENCES `penyakit` (`id_penyakit`);

--
-- Constraints for table `rulebase`
--
ALTER TABLE `rulebase`
  ADD CONSTRAINT `rulebase_ibfk_1` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id_penyakit`),
  ADD CONSTRAINT `rulebase_ibfk_2` FOREIGN KEY (`id_gejala`) REFERENCES `gejala` (`id_gejala`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
