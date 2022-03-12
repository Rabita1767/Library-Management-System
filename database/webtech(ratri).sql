-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2022 at 12:52 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Rabita Amin', 'rabita@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `book1`
--

CREATE TABLE `book1` (
  `id` int(255) NOT NULL,
  `isbn` int(255) NOT NULL,
  `name` text NOT NULL,
  `writer` text NOT NULL,
  `category` text NOT NULL,
  `image` varchar(1000) NOT NULL,
  `count` int(255) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book1`
--

INSERT INTO `book1` (`id`, `isbn`, `name`, `writer`, `category`, `image`, `count`, `link`) VALUES
(1, 978013161, 'Computer Graphics', 'Roy|Gordon Kalley', 'Graphics', '../image/7.jpg', 350, 'https://ia800602.us.archive.org/21/items/SchaumsOutlineSeriesPlastockRoyA.XiangZhigangSchaumsOutlineOfTheoryAndProblemsOf/%28Schaum%27s%20outline%20series%29%20Plastock%2C%20Roy%20A._%20Xiang%2C%20Zhigang-Schaum%27s%20outline%20of%20theory%20and%20problems%20of%20computer%20graphics-McGraw-Hill%20%282000%29.pdf'),
(2, 978111941, 'Accounting Principles', '\r\nWeygandt|Kimmel|Kieso', 'Accounting', '../image/6.jpg', 200, 'https://toaz.info/doc-viewer'),
(10, 89765678, 'Ordinary differential ', 'Morris Tenenbaum', 'Math', '../image/6.jpg', 40, 'https://cosmathclub.files.wordpress.com/2014/10/morris-tenenbaum-harry-pollard-ordinary-differential-equations-copy.pdf');

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
(5, 'Arman', 'Khan', 'arman@gmail.com', '$2y$10$BT4Shonc/swR8GaQ192cBeXmZSGMoTG7TjGafvK8.K5y1ZGfW/Bay', './image/profile/../image/profile/beard.png', '2022-03-11 08:22:07'),
(6, 'Rabita', 'Amin', 'rabita@gmail.com', '$2y$10$8NQJoyhRDqUrf317uXchw.p0wIziCLvRYme9FERdjGp92OyZmnHHO', './image/profile/../image/profile/beard.png', '2022-03-12 16:21:22'),
(7, 'Mursalin', 'Amin', 'mursalin@gmail.com', '$2y$10$hOPeDOR8.0CFKFQSV7wL9e7jetOtEmF5fKZjxH02PMiS.L4h8HfJC', './image/profile/../image/profile/beard.png', '2022-03-12 16:29:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book1`
--
ALTER TABLE `book1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book1`
--
ALTER TABLE `book1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
