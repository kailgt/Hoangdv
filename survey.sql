-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2021 at 06:57 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result`
--

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id` int(11) NOT NULL,
  `food` text CHARACTER SET utf8 DEFAULT NULL,
  `pet` text CHARACTER SET utf8 DEFAULT NULL,
  `result` text CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `food`, `pet`, `result`) VALUES
(1, 'chocolate', 'hamster', 'chocolate & hamster'),
(2, 'chocolate', 'cat', 'chocolate & cat'),
(3, 'banana', 'cat', 'banana & cat'),
(4, 'friedchicken', 'dog', 'friedchicken & dog'),
(5, 'friedchicken', 'cat', 'friedchicken & cat'),
(6, 'banana', 'dog', 'banana & dog'),
(7, 'friedchicken', 'hamster', 'friedchicken & hamster'),
(8, 'banana', 'cat', 'banana & cat'),
(9, 'banana', 'cat', 'banana & cat'),
(10, 'chocolate', 'dog', 'chocolate & dog'),
(11, 'chocolate', 'cat', 'chocolate & cat'),
(12, 'banana', 'hamster', 'banana & hamster');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
