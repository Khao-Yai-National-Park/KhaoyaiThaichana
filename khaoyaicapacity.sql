-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 27, 2020 at 11:20 AM
-- Server version: 10.1.45-MariaDB
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
-- Database: `khaoyain_khaoyaicapacity`
--

-- --------------------------------------------------------

--
-- Table structure for table `noen_hom`
--

CREATE TABLE `noen_hom` (
  `noen_hom_id` int(11) NOT NULL,
  `in_in` int(11) NOT NULL,
  `out_out` int(11) NOT NULL,
  `year` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `noen_hom`
--

INSERT INTO `noen_hom` (`noen_hom_id`, `in_in`, `out_out`, `year`) VALUES
(1, 15, 8, 1595823278);

-- --------------------------------------------------------

--
-- Table structure for table `pak_chong`
--

CREATE TABLE `pak_chong` (
  `pak_chong_id` int(11) NOT NULL,
  `in_in` int(11) NOT NULL,
  `out_out` int(11) NOT NULL,
  `year` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pak_chong`
--

INSERT INTO `pak_chong` (`pak_chong_id`, `in_in`, `out_out`, `year`) VALUES
(1, 0, 0, 1595817070);

-- --------------------------------------------------------

--
-- Table structure for table `pepole`
--

CREATE TABLE `pepole` (
  `pepole_id` int(11) NOT NULL,
  `amout` int(11) NOT NULL,
  `max` int(11) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `noen_hom_in` int(11) NOT NULL,
  `noen_hom_out` int(11) NOT NULL,
  `pak_chong_in` int(11) NOT NULL,
  `pak_chong_out` int(11) NOT NULL,
  `year_noenhom` int(11) DEFAULT NULL,
  `year_pakchong` int(11) DEFAULT NULL,
  `year_thaichana` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pepole`
--

INSERT INTO `pepole` (`pepole_id`, `amout`, `max`, `year`, `noen_hom_in`, `noen_hom_out`, `pak_chong_in`, `pak_chong_out`, `year_noenhom`, `year_pakchong`, `year_thaichana`) VALUES
(1, 821, 5000, 1595823449, 15, 8, 0, 0, 1595823278, 1595817070, 1595823449);

-- --------------------------------------------------------

--
-- Table structure for table `thaichana`
--

CREATE TABLE `thaichana` (
  `thaichana_id` int(11) NOT NULL,
  `amout` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `max` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thaichana`
--

INSERT INTO `thaichana` (`thaichana_id`, `amout`, `year`, `max`) VALUES
(1, 0, 1594200923, 5000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `noen_hom`
--
ALTER TABLE `noen_hom`
  ADD PRIMARY KEY (`noen_hom_id`);

--
-- Indexes for table `pak_chong`
--
ALTER TABLE `pak_chong`
  ADD PRIMARY KEY (`pak_chong_id`);

--
-- Indexes for table `pepole`
--
ALTER TABLE `pepole`
  ADD PRIMARY KEY (`pepole_id`);

--
-- Indexes for table `thaichana`
--
ALTER TABLE `thaichana`
  ADD PRIMARY KEY (`thaichana_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `noen_hom`
--
ALTER TABLE `noen_hom`
  MODIFY `noen_hom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pak_chong`
--
ALTER TABLE `pak_chong`
  MODIFY `pak_chong_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pepole`
--
ALTER TABLE `pepole`
  MODIFY `pepole_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
