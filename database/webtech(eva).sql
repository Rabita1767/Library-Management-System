-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2022 at 03:08 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `profileImage` varchar(255) NOT NULL,
  `registerDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `firstName`, `lastName`, `email`, `password`, `profileImage`, `registerDate`) VALUES
(1, 'Ali', 'Hossain', 'ali@gmail.com', '$2y$10$SdYmQ60NIODRD74.TiYw2uDI55a5ghp.UnxjiE1Nm.yKcPCw7H4Ja', './assets/profile/beard.png', '2022-03-10 09:57:23'),
(2, 'Ayesha', 'Kabir', 'ayesha@gmail.com', '$2y$10$sKiT0BmWUGzaLZJtRV/tGevnQ/vP6xshKhBl/pGA0doDVeowLm8Ym', './image/profile/../image/profile/beard.png', '2022-03-10 20:47:29'),
(3, 'Ayesha', 'Kabir', 'ayesha@gmail.com', '$2y$10$XciPTgKQEMqMHy9TdpvZcORhnTWXdCFKWdOF9J7A3HfKSKunrmdW2', './image/profile/../image/profile/beard.png', '2022-03-10 20:47:33'),
(4, 'Ayesha', 'Kabir', 'ayesha@gmail.com', '$2y$10$ssn9rmHCsLpn5YCtB/nDqO2JVENht5j4Qbfm/x4irNPPkDtUx68Km', './image/profile/../image/profile/beard.png', '2022-03-10 20:47:40'),
(5, 'Arman', 'Khan', 'arman@gmail.com', '$2y$10$BT4Shonc/swR8GaQ192cBeXmZSGMoTG7TjGafvK8.K5y1ZGfW/Bay', './image/profile/../image/profile/beard.png', '2022-03-11 08:22:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
