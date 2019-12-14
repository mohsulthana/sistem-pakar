-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2019 at 03:05 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

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
('G1', 'Apakah Merasakan Demam?', '', ''),
('g12', 'dadwada', 'G3', 'G8'),
('G2', 'Apakah Demam Naik Terutama pada Malam Hari?', '', ''),
('G3', 'Apakah Merasakan Demam Turun pada Hari ke 3?', '', ''),
('G4', 'Apakah Demam Ringan Biasa?', '', ''),
('G5', 'Apakah Merasakan Nyeri pada Ulu Hati?', '', ''),
('G6', 'Apakah ada rasa Konstipasi atau sembelit?', '', ''),
('G7', 'Apakah anda merasakan Sakit Kepala?', '', ''),
('G8', 'Apakah anda merasakan Nyeri Perut seperti Kram?', '', ''),
('G9', 'Apakah anda merasakan rasa mual?', 'G2', 'G6');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(10) NOT NULL,
  `nama` text NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `umur` varchar(2) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('P004', 'Dispepsi', '', '');

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
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

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
  MODIFY `id_pasien` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

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
