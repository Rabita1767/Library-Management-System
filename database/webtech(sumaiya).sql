-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 10, 2022 at 12:32 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `book1`
--

DROP TABLE IF EXISTS `book1`;
CREATE TABLE IF NOT EXISTS `book1` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `isbn` int(250) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `writer` varchar(1000) NOT NULL,
  `category` varchar(250) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `count` int(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book1`
--

INSERT INTO `book1` (`id`, `isbn`, `name`, `writer`, `category`, `image`, `count`) VALUES
(1, 978013161, 'Computer Graphics', 'Roy|Gordon Kalley', 'Graphics', '7.jpg', 350),
(2, 978111941, 'Accounting Principles ki', 'Weygandt|Kimmel|Kieso', 'Accounting', '6.jpg', 200),
(3, 978034553, 'Numerical Method', 'E Balagurusamy', 'Math', '1646914654_download.jpg', 3),
(5, 978134567, 'Microprocessor and interfacing', 'S. K, Kataria', 'Microprocessor', '1646915308_978-81-89757-27-4.png', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
