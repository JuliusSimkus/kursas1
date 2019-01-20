-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2019 at 11:21 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lankytojai`
--

-- --------------------------------------------------------

--
-- Table structure for table `lankytojai`
--

CREATE TABLE `lankytojai` (
  `id` int(11) NOT NULL,
  `vardas` text NOT NULL,
  `email` varchar(320) NOT NULL,
  `tekstas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lankytojai`
--

INSERT INTO `lankytojai` (`id`, `vardas`, `email`, `tekstas`) VALUES
(2, 'Julius', 'julius.simkus0@gmail.com', 'julius'),
(3, 'Tomas', 'tomas@gmail.com', 'Tomo tekstas ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lankytojai`
--
ALTER TABLE `lankytojai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lankytojai`
--
ALTER TABLE `lankytojai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
