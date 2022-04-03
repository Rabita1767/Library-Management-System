-- phpMyAdmin SQL Dump
<<<<<<< HEAD
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 09:50 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10
=======
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 11:23 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1
>>>>>>> 0327f0c1e3008053e462af1598a6d4c111de4822

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
(1, 978013161, 'Computer Graphics', 'Roy|Gordon Kalley', 'CG', '../image/7.jpg', 350, 'https://ia800602.us.archive.org/21/items/SchaumsOutlineSeriesPlastockRoyA.XiangZhigangSchaumsOutlineOfTheoryAndProblemsOf/%28Schaum%27s%20outline%20series%29%20Plastock%2C%20Roy%20A._%20Xiang%2C%20Zhigang-Schaum%27s%20outline%20of%20theory%20and%20problems%20of%20computer%20graphics-McGraw-Hill%20%282000%29.pdf'),
(2, 978111941, 'Accounting Principles', '\r\nWeygandt|Kimmel|Kieso', 'Accounting', '../image/6.jpg', 200, 'https://toaz.info/doc-viewer'),
(24, 87907656, 'Introduction to Information Technology ', 'Pearson ', 'ITF', '', 100, ''),
(25, 7865678, 'Electronic Devices and Circuits ', 'Millman and Halkias', 'EC', '', 120, ''),
(26, 87453245, 'Electric Circuits', 'Schaum\'s series, McGraw Hill', 'EC', '', 200, ''),
(27, 89765678, ' Programming with C', 'Byron Gottfried ', 'IPE', '', 150, ''),
(28, 6754567, 'C Made Easy', 'Herbert Schidt, McGraw Hill', 'IPE', '', 160, ''),
(29, 6758907, 'Data Structure and Algorithm', 'Schaum‟s Outline Series ', 'DS', '', 200, ''),
(30, 89076789, 'Fundamentals of Data Structures', ' Horowitz E. and Sahni, S Galgotia ', 'DS', '', 59, ''),
(31, 76896567, 'Head First Java', ' Kathy Sierra and Bert Bates, O‟reilly publication', 'OOP', '', 100, ''),
(32, 67589867, 'Object Oriented Programming with C++  ', 'E. Balagurusamy', 'OOP', '', 150, ''),
(33, 45678767, 'Fundamentals of Database Systems', 'Elmasri & Navathe,Addison Wesley', 'DB', '', 150, ''),
(34, 89765678, 'Database Management Systems', 'Ramakrishnan R. & Gehrke J.,McGraw Hill ', 'DB', '', 200, ''),
(35, 45643567, 'Principles of Interactive Computer Graphics', 'William M., Newman, McGraw-Hill', 'CG', '', 120, ''),
(36, 98765678, 'Computer Graphics \r\n', 'James D. Foley, Andries van Dam, Steven K. Feiner, John F. Hughes', 'CG', '', 85, ''),
(37, 89764534, 'An Introduction to the Intel Family of Microprocessors ', 'James L. Antonakos . Prentice Hall, \r\n3ed Edition, 1999', 'MP', '', 80, ''),
(38, 98764534, 'Microprocessor architecture programming and applications\r\n', ' Gaonkar, 3rd edition', 'MP', '', 80, ''),
(39, 87689087, 'Web Programming. Building Internet Applications\r\n', 'John Wiley & Sons, \r\nLtd., 2002. ', 'Web', '', 55, ''),
(40, 54678987, 'Accounting for Non-Accountants', ' Wayne Label', 'Accounting', '', 155, '');

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
(12, 'Rabita', 'rabita@gmail.com', 'Very nice'),
(13, 'Rayhan', 'rayhan@gmail.com', 'Great help'),
(14, 'Rayhan', 'rayhan@gmail.com', 'Great help'),
(15, 'Ahsan', 'ahsan@gmail.com', 'Hi'),
(16, 'Sahal', 'sahal@gmail.com', 'Hello'),
(17, 'Arani', 'arani@gmail.com', 'Nice Service');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `phoneno` int(10) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `cdate` date DEFAULT NULL,
  `approval` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `usname`, `pass`) VALUES
(1, 'Admin', '1234'),
(2, 'Prasath', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `newsletterlog`
--

CREATE TABLE `newsletterlog` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(52) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `news` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
<<<<<<< HEAD
=======
-- Table structure for table `offlinebook`
--

CREATE TABLE `offlinebook` (
  `id` int(255) NOT NULL,
  `isbn` int(255) NOT NULL,
  `name` text NOT NULL,
  `writer` text NOT NULL,
  `category` text NOT NULL,
  `count` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offlinebook`
--

INSERT INTO `offlinebook` (`id`, `isbn`, `name`, `writer`, `category`, `count`) VALUES
(1, 89767890, 'Introduction to Information Technology', 'Pearson Edication', 'ITF', 150),
(2, 78675645, ' Computer and Information Processing', 'William M. Four', 'ITF', 100),
(3, 87678982, 'Electronic Devices and Circuits', 'Millman and Halkias', 'EC', 120),
(4, 65784534, 'Electric Circuits', 'Edminister J.A, Schaum\'s series, McGraw Hill', 'EC', 100),
(5, 78954534, 'Programming with C', 'Byron Gottfried (Schaum‟s Outline Series)', 'IPE', 120),
(6, 78654567, 'C Made Easy', 'Herbert Schidt,McGraw Hill', 'IPE', 130),
(7, 87567876, 'Data Structure and Algorithm', 'Schaum‟s Outline Series ', 'DS', 150);

-- --------------------------------------------------------

--
-- Table structure for table `onlinebook`
--

CREATE TABLE `onlinebook` (
  `id` int(255) NOT NULL,
  `isbn` int(255) NOT NULL,
  `name` text NOT NULL,
  `writer` text NOT NULL,
  `category` text NOT NULL,
  `count` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `onlinebook`
--

INSERT INTO `onlinebook` (`id`, `isbn`, `name`, `writer`, `category`, `count`) VALUES
(2, 978013161, 'Computer Graphics', 'Roy|Gordon Kalley', 'CG', 100),
(3, 978111941, 'Accounting Principles', 'Weygandt|Kimmel|Kieso', 'Accounting', 150);

-- --------------------------------------------------------

--
>>>>>>> 0327f0c1e3008053e462af1598a6d4c111de4822
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) DEFAULT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `troom` varchar(30) DEFAULT NULL,
  `tbed` varchar(30) DEFAULT NULL,
  `nroom` int(11) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `ttot` double(8,2) DEFAULT NULL,
  `fintot` double(8,2) DEFAULT NULL,
  `mepr` double(8,2) DEFAULT NULL,
  `meal` varchar(30) DEFAULT NULL,
  `btot` double(8,2) DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `bedding` varchar(10) DEFAULT NULL,
  `place` varchar(10) DEFAULT NULL,
  `cusid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `bedding`, `place`, `cusid`) VALUES
(1, 'Superior Room', 'Single', 'Free', NULL),
(2, 'Superior Room', 'Double', 'Free', NULL),
(3, 'Superior Room', 'Triple', 'Free', NULL),
(4, 'Single Room', 'Quad', 'Free', NULL),
(5, 'Superior Room', 'Quad', 'Free', NULL),
(6, 'Deluxe Room', 'Single', 'Free', NULL),
(7, 'Deluxe Room', 'Double', 'Free', NULL),
(8, 'Deluxe Room', 'Triple', 'Free', NULL),
(9, 'Deluxe Room', 'Quad', 'Free', NULL),
(10, 'Guest House', 'Single', 'Free', NULL),
(11, 'Guest House', 'Double', 'Free', NULL),
(12, 'Guest House', 'Quad', 'Free', NULL),
(13, 'Single Room', 'Single', 'Free', NULL),
(14, 'Single Room', 'Double', 'Free', NULL),
(15, 'Single Room', 'Triple', 'Free', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(5) DEFAULT NULL,
  `FName` text DEFAULT NULL,
  `LName` text DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `National` varchar(30) DEFAULT NULL,
  `Country` varchar(30) DEFAULT NULL,
  `Phone` text DEFAULT NULL,
  `TRoom` varchar(20) DEFAULT NULL,
  `Bed` varchar(10) DEFAULT NULL,
  `NRoom` varchar(2) DEFAULT NULL,
  `Meal` varchar(15) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `stat` varchar(15) DEFAULT NULL,
  `nodays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(16, 'Rafi', 'Alam', 'rafi@gmail.com', '$2y$10$OlwbzWI.jGsPQwzxi5c0j.0VB01TibLZ6nL2wBLRVk0ZlwKc8Vg16', '../image/profile../image/profile/beard.png', '2022-03-13 09:36:38'),
(17, 'Ratri', 'Amin', 'ratri@gmail.com', '$2y$10$ZkDJDnGHHvMNKHJld.PnQOrZ3xbKjIX60NMcFHlcTdjNe..8QXP3e', '../image/profile../image/profile/beard.png', '2022-03-13 10:19:40'),
(18, 'Asha', 'Akter', 'asha@gmaail.com', '$2y$10$ixTZIDjUtGWGD067qH1o2..eYA7JSVXPDBbjjvw1UooyY8qtkIu3G', '../image/profile../image/profile/beard.png', '2022-03-13 10:53:51'),
(19, 'Ashaa', 'Akter', 'ashaa@gmaail.com', '$2y$10$u5br.Nxa8DgPEhuTjcnlReBXFJCMndtlRAq2K9EIVXbfXLhOeuNea', '../image/profile../image/profile/beard.png', '2022-03-13 10:57:07'),
(20, 'qwe', 'rr', 'qwe@gmail.com', '$2y$10$2u8PJ5jBvQdD5TeyO6afnurBBm8ECAfb3WIrJour8B1asiMWUbcf6', '../image/profile../image/profile/beard.png', '2022-03-13 10:59:05'),
(21, 'sumu', 'mali', 'sumu@gmail.com', '$2y$10$rBvgLDhtTZz5pSPO9hKH1.1cHmH4J8VpFuv8zamI/ApyocPquacCC', '../image/profile../image/profile/beard.png', '2022-03-13 11:26:05'),
(22, 'Jack', 'adison', 'jack@gmail.com', '$2y$10$c4lVOXeWD1wQCPIRQrRheOyjp7NZrqHCMImAaGOuxEFbZZm3CiQJy', '../image/profile../image/profile/beard.png', '2022-03-13 11:52:56');

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
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  ADD PRIMARY KEY (`id`);

--
<<<<<<< HEAD
=======
-- Indexes for table `offlinebook`
--
ALTER TABLE `offlinebook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `onlinebook`
--
ALTER TABLE `onlinebook`
  ADD PRIMARY KEY (`id`);

--
>>>>>>> 0327f0c1e3008053e462af1598a6d4c111de4822
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
<<<<<<< HEAD
=======
-- AUTO_INCREMENT for table `offlinebook`
--
ALTER TABLE `offlinebook`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `onlinebook`
--
ALTER TABLE `onlinebook`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
>>>>>>> 0327f0c1e3008053e462af1598a6d4c111de4822
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
