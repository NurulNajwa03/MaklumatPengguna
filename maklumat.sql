-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2023 at 06:39 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maklumat`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(3) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_kp` varchar(12) NOT NULL,
  `jantina` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `nama`, `no_kp`, `jantina`, `no_hp`) VALUES
(0, 'ANIQ NAUFAL BIN MUHAMMAD AZRAEL', '020828160169', 'Lelaki', '01162190345'),
(0, 'MUHAMMBAD ANAS BIN SUHAIMI', '030531100199', 'Lelaki', '0169520198'),
(0, 'ISHUARIYAA A/P PONAN', '030610080616', 'Perempuan', '01133688927'),
(0, 'Najwa', '030808101229', 'Perempuan', '01151559408'),
(0, 'ANIQ NAUFAL BIN SALEHUDDIN ', '031021101671', 'Lelaki', '801117141009'),
(0, 'ANIS ZAHIRA BINTI AZRAF', '080820106422', 'Perempuan', '0192606424'),
(0, 'MUHAMMAD ADAM BIN NAZRI', '850902140975', 'Perempuan', '0133138765');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `masuk`
--

CREATE TABLE `masuk` (
  `username` varchar(50) NOT NULL,
  `pasword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `masuk`
--

INSERT INTO `masuk` (`username`, `pasword`) VALUES
('najwa', '01258'),
('nana', '98765');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`no_kp`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
