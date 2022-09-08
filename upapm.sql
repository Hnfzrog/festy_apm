-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 08:09 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anyy`
--

-- --------------------------------------------------------

--
-- Table structure for table `upapm`
--

CREATE TABLE `upapm` (
  `id` int(11) NOT NULL,
  `area` varchar(500) NOT NULL,
  `penilaian` text NOT NULL,
  `skor` varchar(500) NOT NULL,
  `kriteria` varchar(500) NOT NULL,
  `keterangan` text NOT NULL,
  `nilai` varchar(500) NOT NULL,
  `evidence` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upapm`
--

INSERT INTO `upapm` (`id`, `area`, `penilaian`, `skor`, `kriteria`, `keterangan`, `nilai`, `evidence`) VALUES
(1, 'area 4', 'fiad', 'fwrfweffdas', 'feada', 'cdsa', 'fdaadvfad', 'vfaagfsd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `upapm`
--
ALTER TABLE `upapm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upapm`
--
ALTER TABLE `upapm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
