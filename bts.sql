-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 09:50 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bts`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(300) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `feedback` varchar(300) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `feedback`, `date`) VALUES
(25, 'sulabh', 'sulabhsonwane786@gmail.com', 'bgt\r\n', '2023-05-13');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(300) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobilenumber` varchar(300) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `name`, `email`, `mobilenumber`, `address`, `password`, `date`) VALUES
(12, 'Sulabh Sonwane', 'sulabhsonwane786@gmail.com', '8770631412', 'balaghat', '$2y$04$G2gFFoE1Cp22/TUKy1867O4BRJMkSUMP0VPsznNCsKZc.I0Xt4P4C', '2023-05-13'),
(13, 'sdwe', 'cs@gmail.com', '5985589236', 'bgt', '$2y$04$/kR8l2OBQDH1iBsKGFR9W.ESK0Fd52gmlMlUCOoS6e.uvhnJ1.xIa', '2023-05-13'),
(14, 'PBKT', 'vinayakmeshram@gmail.com', '8770631412', 'BGT', '$2y$04$z//JsyBC85Cnkum0b9HfH.nlMyhUR9lfsuhAbHrvLoUIdGgv6YPHG', '2023-05-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
