-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 06:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sriramana`
--

-- --------------------------------------------------------

--
-- Table structure for table `catlog`
--

CREATE TABLE `catlog` (
  `pid` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `disprice` varchar(100) NOT NULL,
  `describ` varchar(1000) NOT NULL,
  `addinfo` varchar(1000) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catlog`
--

INSERT INTO `catlog` (`pid`, `name`, `price`, `disprice`, `describ`, `addinfo`, `image`) VALUES
('SW0001', 'Shiva Bhavani', '10000', '5000', 'Bhavani Wife of Shiva \r\nBhavani Love Shiva', 'Jai Jai Bhavani', 'uploads/logo.png'),
('SW0002', 'Bhavani Shiva ', '10000', '9000', 'Ma Amma Bhavani Na Thali Bhavani', 'Jai Bhavani Jai Jai Bhavani \r\nOhm Nama Shiva', 'AmmaNana.jpg'),
('SW0003', 'Ganesh', '1000', '899', 'Jai Ganapathi Jai Jai Ganapathi', 'Jai Sri Ram', 'Sureshsir.jpg'),
('SW0004', 'ManiKanta', '1500', '1299', 'Jai Jai ManiKanta', 'Son of My Father \r\nMa Annaya', 'janmashtamilordkrishna.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catlog`
--
ALTER TABLE `catlog`
  ADD PRIMARY KEY (`pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
