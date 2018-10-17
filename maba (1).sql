-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2018 at 05:57 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datamaba`
--

-- --------------------------------------------------------

--
-- Table structure for table `maba`
--

CREATE TABLE `maba` (
  `nama` varchar(50) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `jk` varchar(30) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `mottohidup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maba`
--

INSERT INTO `maba` (`nama`, `nim`, `jk`, `prodi`, `fakultas`, `asal`, `mottohidup`) VALUES
('', '', '', '', '', '', ''),
('errr', '466666', 'Perempuan', 'Teknik Industri', 'Fakultas Informatika', 'aaddf', 'fff'),
('sxxx', '6666', 'Perempuan', 'Teknik Industri', 'Fakultas Informatika', 'dd', 'hhh'),
('dianwp', '6701170006', 'Perempuan', 'Teknik Industri', 'Fakultas Informatika', 'www', 'dddd'),
('fff', '6701170033', 'Laki - Laki', 'Teknik Industri', 'Fakultas Informatika', 'sss', 'rr'),
('wp', '6701170052', 'Perempuan', 'Teknik Industri', 'Fakultas Informatika', 'jkt', 'aa'),
('jeje', '6701170053', 'Perempuan', 'Teknik Industri', 'Fakultas Komunikasi Bisnis', 'aaaaa', 'jjj'),
('dianw', '888888888', 'Perempuan', 'Teknik Industri', 'Fakultas Rekayasa Industri', 'jkt', 'AAA'),
('sgdgd', '99999999', 'Perempuan', 'Teknik Industri', 'Fakultas Informatika', 'ffff', 'pppp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maba`
--
ALTER TABLE `maba`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
