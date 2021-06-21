-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 05:19 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `control-interface`
--

-- --------------------------------------------------------

--
-- Table structure for table `datamotor`
--

CREATE TABLE `datamotor` (
  `id` int(11) NOT NULL,
  `Motor1` int(180) NOT NULL DEFAULT 0,
  `Motor2` int(180) NOT NULL DEFAULT 1,
  `Motor3` int(180) NOT NULL DEFAULT 2,
  `Motor4` int(180) NOT NULL DEFAULT 3,
  `Motor5` int(180) NOT NULL DEFAULT 4,
  `Motor6` int(180) NOT NULL DEFAULT 5,
  `On_value` int(100) NOT NULL,
  `Off_value` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `datamotor`
--

INSERT INTO `datamotor` (`id`, `Motor1`, `Motor2`, `Motor3`, `Motor4`, `Motor5`, `Motor6`, `On_value`, `Off_value`) VALUES
(1, 133, 42, 123, 57, 140, 161, 0, 0),
(2, 133, 42, 123, 57, 140, 161, 1, 0),
(3, 133, 42, 123, 57, 140, 161, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datamotor`
--
ALTER TABLE `datamotor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datamotor`
--
ALTER TABLE `datamotor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
