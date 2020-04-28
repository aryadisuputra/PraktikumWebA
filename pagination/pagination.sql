-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2020 at 01:05 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pagination`
--

-- --------------------------------------------------------

--
-- Table structure for table `pagination_table`
--

CREATE TABLE `pagination_table` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `age` int(10) NOT NULL,
  `dept` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pagination_table`
--

INSERT INTO `pagination_table` (`id`, `name`, `age`, `dept`) VALUES
(1, 'Suatika', 20, 'Informatika Udayana'),
(2, 'Aryadi', 20, 'Informatika Udayana'),
(3, 'Babol', 21, 'ITS '),
(4, 'Bayu', 21, 'TI Udayana'),
(5, 'Alex', 23, 'Universitas Indonesia'),
(6, 'Sukma', 20, 'Informatika Udayana'),
(7, 'Dharma', 20, 'Informatika Udayana'),
(8, 'Anggita', 30, 'Informatika Udayana'),
(9, 'Agus', 23, 'Informatika Udayana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pagination_table`
--
ALTER TABLE `pagination_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pagination_table`
--
ALTER TABLE `pagination_table`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
