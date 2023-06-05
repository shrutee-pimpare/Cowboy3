-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 30, 2023 at 12:50 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginregisterdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bicycle` varchar(100) NOT NULL,
  `phone` int NOT NULL,
  `region` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`firstname`, `lastname`, `email`, `bicycle`, `phone`, `region`) VALUES
('', '', '', 'Road Bike', 0, ''),
('', '', '', 'Road Bike', 0, ''),
('shweta', 'singh', 'shwetasingh3602@gmail.com', 'Cross-Country Bike', 2147483647, 'pune'),
('sanskriti', 'paul', 'paul@gmail.com', 'Mountain Bike', 2147483647, 'bangalore'),
('sanskriti', 'paul', 'paul@gmail.com', 'Mountain Bike', 2147483647, 'bangalore'),
('sanskriti', 'paul', 'dffg@gmail.com', 'Enduro Bike', 2147483647, 'india'),
('palak', 'mantri', 'palakmantri@gmail.com', 'Trail Bike', 2147483647, 'pimpri'),
('kajal', 'singh', 'kajal@gmail.com', 'Hybrid Bike', 2147483647, 'pune'),
('shweta', 'singh', 'shwetasingh3602@gmail.com', 'Fat Bike', 2147483647, 'pune'),
('peter', 'singh', 'peter@gmail.com', 'Cross-Country Bike', 2147483647, 'pune'),
('peter', 'singh', 'peter@gmail.com', 'Hybrid Bike', 2147483647, 'bangalore'),
('peter', 'mantri', 'peter@gmail.com', 'Hybrid Bike', 2147483647, 'bhilwara'),
('peter', 'mantri', 'peter@gmail.com', 'Mountain Bike', 2147483647, 'pune'),
('shweta', 'singh', 'shwetasingh3602@gmail.com', 'Downhill Bike', 2147483647, 'pune'),
('sanskriti', 'paul', 'paul@gmail.com', 'Trail Bike', 2147483647, 'bangalore'),
('shrutee', 'pimpare', 'shrutee@gmail.com', 'Cross-Country Bike', 2147483647, 'pune');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
