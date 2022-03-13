-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2022 at 05:14 AM
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
(10, 89765678, 'Ordinary differential ', 'Morris Tenenbaum', 'Math', '../image/8.jpeg', 40, 'https://cosmathclub.files.wordpress.com/2014/10/morris-tenenbaum-harry-pollard-ordinary-differential-equations-copy.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`) VALUES
(5, 'Sahal', 'me.sahal3000@gmail.com', 'Hey'),
(6, 'Rabita', 'rabita@gmail.com', 'Nice one!!!'),
(8, 'Afrin', 'afrinahmed01@gmail.com', 'You guys have done a tremendous job. Hope this will continue. Good luck and best wishes...'),
(9, 'Sumaiya', 'sumbinhid@gmail.com', 'Great job.'),
(10, 'Arman', 'sohelbd005@yahoo.com', 'Profile management should be improved.'),
(11, 'Michael', 'mike034@gamil.com', 'Should be more professional.'),
(12, 'Rabita', 'rabita@gmail.com', 'Very nice');

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
(6, 'Rabita', 'Amin', 'rabita@gmail.com', '$2y$10$bvMTvpvOryQqUArhxqUV9eu61NlsAffKLW1SDN9ijge6X/Z8.WmA.', '../image/profile../image/profile/beard.png', '2022-03-12 21:55:52'),
(7, 'Md', 'Sahal', 'sahal@gmail.com', '$2y$10$mIfcLj6GTYJYsY1.hUOE8eknUD7RCeQvvfLVG/hhXr8ZVw2f/.w5G', '../image/profile../image/profile/beard.png', '2022-03-13 09:20:13'),
(8, 'Md', 'Sahal', 'sahal@gmail.com', '$2y$10$FYaQHOWFfvNBJai6VbfvVe5j96Vk7FDs73LAsrkcC5SKusYuRvXPa', '../image/profile../image/profile/beard.png', '2022-03-13 09:20:28'),
(9, 'Rafi', 'Alam', 'rafi@gmail.com', '$2y$10$WHwOdQuk52JKo3w3hni6DOBe1zfTdYp8JjzVfqGOe.nql7SVm7zy6', '../image/profile../image/profile/beard.png', '2022-03-13 09:23:22'),
(10, 'Rafi', 'Alam', 'rafi@gmail.com', '$2y$10$YSKg4aPuP90ggcWiIfdeGupEE0d8pCVFkTjuX46vujd3xdrsIqF.W', '../image/profile../image/profile/beard.png', '2022-03-13 09:24:21'),
(11, 'Rafi', 'Alam', 'rafi@gmail.com', '$2y$10$eBelCHtbrbh0cNhLTX6mwuq9HE4liMdtvGhT0Wzi8x7grMFfMmq/W', '../image/profile../image/profile/beard.png', '2022-03-13 09:24:43'),
(12, 'Sahal', 'Alam', 'sahal@gmail.com', '$2y$10$x0SGG3KbdzdGnkiiYdS5a.k8Vt2pwU7ltg9TDTXXNu1cNDfCqkmua', '../image/profile../image/profile/beard.png', '2022-03-13 09:25:03'),
(13, 'Sahal', 'Alam', 'sahal@gmail.com', '$2y$10$pdGYeUWu.nTEFh3dLeSP1eukLUwnsm0R7hs6Wyl4oLFcXrkQ4qVui', '../image/profile../image/profile/beard.png', '2022-03-13 09:34:12'),
(14, 'Sahal', 'Alam', 'sahal@gmail.com', '$2y$10$Pf0J5aCcAK8A0tEKxtUG.O/ATGHBwURaaq7gzxQ/kXkIdud/DSPbS', '../image/profile../image/profile/beard.png', '2022-03-13 09:34:27'),
(15, 'Sahal', 'Alam', 'sahal@gmail.com', '$2y$10$Ua0kYiI3jlChrKeNJy./H.oK8vPnHU1Nu//A1kVgtDk4kveYIsmE6', '../image/profile../image/profile/beard.png', '2022-03-13 09:36:06'),
(16, 'Rafi', 'Alam', 'rafi@gmail.com', '$2y$10$OlwbzWI.jGsPQwzxi5c0j.0VB01TibLZ6nL2wBLRVk0ZlwKc8Vg16', '../image/profile../image/profile/beard.png', '2022-03-13 09:36:38');

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
-- Indexes for table `comments`
--
ALTER TABLE `comments`
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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
