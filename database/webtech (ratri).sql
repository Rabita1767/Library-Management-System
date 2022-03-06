-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2022 at 08:09 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

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

CREATE TABLE `book1` (
  `id` int(250) NOT NULL,
  `isbn` int(250) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `writer` varchar(1000) NOT NULL,
  `category` varchar(250) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `count` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book1`
--

INSERT INTO `book1` (`id`, `isbn`, `name`, `writer`, `category`, `image`, `count`) VALUES
(1, 978013161, 'Computer Graphics', 'Roy|Gordon Kalley', 'Graphics', '../image/7.jpg', 350),
(2, 978111941, 'Accounting Principles', 'Weygandt|Kimmel|Kieso', 'Accounting', '../image/6.jpg', 200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book1`
--
ALTER TABLE `book1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book1`
--
ALTER TABLE `book1`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
