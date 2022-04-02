-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 02, 2022 at 06:51 PM
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
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `isbn` int(255) NOT NULL,
  `name` text NOT NULL,
  `writer` text NOT NULL,
  `category` text NOT NULL,
  `image` varchar(1000) NOT NULL,
  `count` int(255) NOT NULL,
  `link` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book1`
--

INSERT INTO `book1` (`id`, `isbn`, `name`, `writer`, `category`, `image`, `count`, `link`) VALUES
(1, 978013161, 'Computer Graphics', 'Roy|Gordon Kalley', 'CG', '../image/7.jpg', 350, 'https://ia800602.us.archive.org/21/items/SchaumsOutlineSeriesPlastockRoyA.XiangZhigangSchaumsOutlineOfTheoryAndProblemsOf/%28Schaum%27s%20outline%20series%29%20Plastock%2C%20Roy%20A._%20Xiang%2C%20Zhigang-Schaum%27s%20outline%20of%20theory%20and%20problems%20of%20computer%20graphics-McGraw-Hill%20%282000%29.pdf'),
(2, 978111941, 'Accounting Principles', '\r\nWeygandt|Kimmel|Kieso', 'Accounting', '../image/6.jpg', 200, 'https://toaz.info/doc-viewer'),
(24, 87907656, 'Introduction to Information Technology ', 'Pearson ', 'ITF', '../image/1.jpeg', 100, ''),
(25, 7865678, 'Electronic Devices and Circuits ', 'Millman and Halkias', 'EC', '../image/1.jpg', 120, ''),
(26, 87453245, 'Electric Circuits', 'Schaum\'s series, McGraw Hill', 'EC', '../image/2.jpg', 200, ''),
(27, 89765678, ' Programming with C', 'Byron Gottfried ', 'IPE', '../image/3.jpg', 150, ''),
(28, 6754567, 'C Made Easy', 'Herbert Schidt, McGraw Hill', 'IPE', '../image/4.jpg', 160, ''),
(29, 6758907, 'Data Structure and Algorithm', 'Schaum‟s Outline Series ', 'DS', '../image/5.jpg', 200, ''),
(30, 89076789, 'Fundamentals of Data Structures', ' Horowitz E. and Sahni, S Galgotia ', 'DS', '../image/8.jpg', 59, ''),
(31, 76896567, 'Head First Java', ' Kathy Sierra and Bert Bates, O‟reilly publication', 'OOP', '../image/9.jpg', 100, ''),
(32, 67589867, 'Object Oriented Programming with C++  ', 'E. Balagurusamy', 'OOP', '../image/10.jpg', 150, ''),
(33, 45678767, 'Fundamentals of Database Systems', 'Elmasri & Navathe,Addison Wesley', 'DB', '../image/11.jpg', 150, ''),
(34, 89765678, 'Database Management Systems', 'Ramakrishnan R. & Gehrke J.,McGraw Hill ', 'DB', '../image/12.jpg', 200, ''),
(35, 45643567, 'Principles of Interactive Computer Graphics', 'William M., Newman, McGraw-Hill', 'CG', '../image/13.jpg', 120, ''),
(36, 98765678, 'Computer Graphics \r\n', 'James D. Foley, Andries van Dam, Steven K. Feiner, John F. Hughes', 'CG', '../image/14.jpg', 85, ''),
(37, 89764534, 'An Introduction to the Intel Family of Microprocessors ', 'James L. Antonakos . Prentice Hall, \r\n3ed Edition, 1999', 'MP', '../image/15.jpg', 80, ''),
(38, 98764534, 'Microprocessor architecture programming and applications\r\n', ' Gaonkar, 3rd edition', 'MP', '../image/16.jpg', 80, ''),
(39, 87689087, 'Web Programming. Building Internet Applications\r\n', 'John Wiley & Sons, \r\nLtd., 2002. ', 'Web', '../image/17.jpg', 55, ''),
(40, 54678987, 'Accounting for Non-Accountants', ' Wayne Label', 'Accounting', '../image/8.jpeg', 155, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
