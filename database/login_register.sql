-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 05:54 PM
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
-- Database: `login_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(2, 'admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Contact_number` varchar(255) NOT NULL,
  `cid` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `full_name`, `email`, `password`, `Contact_number`, `cid`) VALUES
(1, 'Rabita Amin', 'rabita019@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '01767896545', 1767);

-- --------------------------------------------------------

--
-- Table structure for table `busbook`
--

CREATE TABLE `busbook` (
  `source` varchar(20) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `departingDate` date NOT NULL,
  `returnDate` date NOT NULL,
  `count` int(20) NOT NULL,
  `fav_coach` varchar(20) NOT NULL,
  `departingTime` int(20) NOT NULL,
  `returnTime` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `busbook`
--

INSERT INTO `busbook` (`source`, `destination`, `departingDate`, `returnDate`, `count`, `fav_coach`, `departingTime`, `returnTime`) VALUES
('Dhaka', 'Chittagong', '2021-09-24', '2021-09-25', 1, 'AC', 21, 21),
('Dhaka', 'Chittagong', '2021-09-23', '2021-09-24', 1, 'AC', 21, 21),
('Dhaka', 'Shylet', '2021-09-24', '2021-09-25', 1, 'AC', 21, 21),
('Cox-bazar', 'Dhaka', '2021-09-25', '2021-09-28', 3, 'AC', 21, 21),
('Cox-bazar', 'Dhaka', '2021-09-25', '2021-09-28', 3, 'AC', 21, 21),
('Cox-bazar', 'Dhaka', '2021-09-25', '2021-09-28', 3, 'AC', 21, 21),
('Cox-bazar', 'Dhaka', '2021-09-25', '2021-09-28', 3, 'AC', 21, 21),
('Cox-bazar', 'Dhaka', '2021-09-25', '2021-09-28', 3, 'AC', 21, 21),
('Cox-bazar', 'Dhaka', '2021-09-25', '2021-09-28', 3, 'AC', 21, 21),
('Cox-bazar', 'Dhaka', '2021-09-25', '2021-09-28', 3, 'AC', 21, 21),
('Cox-bazar', 'Dhaka', '2021-09-25', '2021-09-28', 3, 'AC', 21, 21),
('Cox-bazar', 'Dhaka', '2021-09-25', '2021-09-28', 3, 'AC', 21, 21),
('Cox-bazar', 'Dhaka', '2021-09-25', '2021-09-28', 3, 'AC', 21, 21),
('Cox-bazar', 'Dhaka', '2021-09-25', '2021-09-28', 3, 'AC', 21, 21),
('Cox-bazar', 'Dhaka', '2021-09-25', '2021-09-28', 3, 'AC', 21, 21),
('Cox-bazar', 'Dhaka', '2021-09-25', '2021-09-28', 3, 'AC', 21, 21),
('Cox-bazar', 'Dhaka', '2021-09-25', '2021-09-28', 3, 'AC', 21, 21),
('Cox-bazar', 'Dhaka', '2021-09-25', '2021-09-28', 3, 'AC', 21, 21),
('Cox-bazar', 'Dhaka', '2021-09-25', '2021-09-28', 3, 'AC', 21, 21);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `Contact_number` text NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `email`, `Contact_number`, `gender`) VALUES
(1, 'Maksuda Amin', 'begummaksuda016@gmail.com', '0191318037', 'Female'),
(2, 'Samira Alam', 'samira11@gmail.com', '01987907645', 'Female'),
(4, 'Rabita Amin', 'ratri@gmail.com', '0191318037', 'Female'),
(5, ' Tasmia  Sultana Anonna', 'anonna1@gmail.com', '01786906535', 'Female'),
(6, 'Nahian Samiha', 'samiha@gmail.com', '01765456789', 'Female'),
(7, ' Dewan Abrar Ali Jihan', 'abrarjihan@gmail.com', '01345678756', 'Male'),
(8, ' Taneir Arani', 'tarani@gmail.com', '01789653456', 'Female'),
(9, 'Tarannum Islam', 'tara@gmail.com', '01987563456', 'Female'),
(10, 'Wahida Tasnim', 'wahida@gmail.com', '01898675465', 'Female'),
(11, 'Rabita Amin', 'ratri@gmail.com', '01911186161', 'Female'),
(14, 'Muna', 'muna@gmail.com', '0191318037', 'Female'),
(16, 'Afrin Jahan', 'begummaksuda016@gmail.com', '0191318037', 'Female'),
(17, 'Maksuda Amin', 'begummaksuda016@gmail.com', '01913180373', 'Female'),
(18, 'Ratri', 'begummaksuda016@gmail.com', '01913180373', 'Female'),
(22, 'Wahida Tasnim', 'begummaksuda016@gmail.com', '01913180376', 'Female'),
(34, 'Md Sahal', 'sahal@gmail.com', '01978653456', 'Male'),
(36, 'ratri', 'rat@gmail.com', '01787654567', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contact Number` int(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Ratings` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `Name`, `Location`, `Address`, `Contact Number`, `Email`, `Ratings`) VALUES
(1, 'Hotel 71', 'Sylhet', ' 176, Shaheed Syed Nazrul Islam Sarani, 47 Bijoy Nagar Road, Dhaka 1000', 1750076933, 'hotel71@gmail.com', '8.2'),
(3, 'Richmond Hotel & Suites', 'Dhaka', '   House-2 Rd No 10, Dhaka 1230', 1974246663, 'richmond@gmail.com', '6.6'),
(4, 'Radisson blu dhaka water garden', 'Dhaka', ' Airport Rd, Dhaka 1206', 1878976534, 'radisson@gmail.com', '7.3'),
(5, 'Hotel Sarin', 'Dhaka', '   Plot #27, Road #17, Banani C/A, Dhaka 1213', 1789065423, 'sarina@gmail.com', '7.9'),
(6, 'Pan Pacific Sonargaon Dhaka', 'Dhaka', '107 Kazi Nazrul Islam Ave, Dhaka 1215', 1789453678, 'panpacific@gmail.com', '7.7'),
(7, 'Hotel Agrabad', 'Chittagong', 'Sabder Ali Road, Agrabad C/A, Chittagong 4000', 1456789045, 'agrabad@gmail.com', '7.3'),
(8, 'The Peninsula', 'Chittagong', '486/B, CDA Avenue, O.R. Nizam Road, Bulbul Center, Chittagong 4100', 1987456783, 'peninsula@gmail.com', '8.4'),
(9, 'Radisson Blu Chattogram Bay View', 'Chittagong', 'Shahid Saifuddin Khaled Rd, Lalkhan Bazar Cir, Chattogram 4000', 1567894567, 'radissionctg@gmail.com', '9.0'),
(10, 'Hill Town Residence', 'Chittagong', 'BRTC Market, 16. Station Road City Super Complex The Railway Man\'s Store ( Upper Ctg Fruitit Market)', 1789653890, 'hilltown@gmail.com', '7.2'),
(11, 'Hotel Tower Inn', 'Chittagong', '183 Jubilee Rd, Chittagong', 1789543678, 'towerinn@gmail.com', '6.2'),
(12, 'Hotel Hilton City Residential', 'Chittagong', '1686, Choumuhuni circle, west side, Chittagong 4000', 1455624099, 'hiltoncityresidential@gmail.com', '7.5'),
(13, 'Hotel Diamond Park', 'Chittagong', 'Khwaja Super Market, Chittagong 4000', 1678987334, 'diamondpark@gmail.com', '5.3'),
(14, 'Grand Palace Hotel & Resorts Shylet ', 'Sylhet', 'Jallarpar Rd, Sylhet', 1786904536, 'grandpalace@gmail.com', '7.0'),
(15, 'Hotel Holy Gate', 'Sylhet', ' Holy Complex, East Dargah Gate, Sylhet 3100', 1972552233, 'holygate@gmail.com', '7.5'),
(16, 'Rose View Hotel', 'Sylhet', 'Shahjalal Uposhohor Sylhet, 3100', 1897456789, 'roseview@gmail.com', '5.8'),
(17, 'Hotel Grand Surma', 'Sylhet', 'Gazi, Syed Burhan Uddin Rd, Sylhet', 1707180152, 'surma@gmail.com', '7.8'),
(18, 'Hotel Sea Crown', 'Cox Bazar', 'Marine Drive, New Beach Rd, Cox\'s Bazar 4700', 1978646789, 'sea@gmail.com', '7.5'),
(26, 'Long Beach Hotel', 'Cox Bazar', '14, Kalatoli, Hotel-Motel Zone, 4700', 1567890987, 'longbeach@gmail.com', '7.5'),
(31, 'Hotel Jhata', 'Sylhet', ' Road:16,House:988,Baitul Aman housing', 191318035, 'begummaksud016@gmail.com', '2.1'),
(32, 'Hotel Hill Touch', 'Khagrachari', '4X5J+899, Changrachhari', 1511, 'hoteltouch@gmail.com', '6.5'),
(33, 'Hotel Ecochari Inn', 'Khagrachari', '10/A, Khagrachari', 1878653456, 'eco@gmail.com', '6.2'),
(34, 'jkk', 'jkk', 'sss', 2147483647, 'e@gmail.com', '9');

-- --------------------------------------------------------

--
-- Table structure for table `hotelnew`
--

CREATE TABLE `hotelnew` (
  `id` int(11) NOT NULL,
  `p_name` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotelnew`
--

INSERT INTO `hotelnew` (`id`, `p_name`, `location`, `price`, `image`) VALUES
(2, 'Hotel 71', 'Dhaka', '5000', 'image/download.jpg'),
(3, 'Hotel Tropical Daisy', 'Dhaka', '5000', 'image/tropical.jpg'),
(4, 'jkl', 'dhaka', '5000', 'image/new.jpg'),
(5, 'Hotel Diamond Park', 'Chittagong', '2000', 'image/suite.jpg'),
(6, 'jkl', 'hjk', '1400', 'image/1647081917_6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hotelroom`
--

CREATE TABLE `hotelroom` (
  `id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Location` text NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Room Type` varchar(100) NOT NULL,
  `no_of_persons` int(100) NOT NULL,
  `Price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotelroom`
--

INSERT INTO `hotelroom` (`id`, `Name`, `Location`, `Address`, `Room Type`, `no_of_persons`, `Price`) VALUES
(1, 'Hotel 71', 'Dhaka', '', 'Deluxe Twin Room', 2, 2200),
(2, 'Hotel 71', 'Dhaka', '', 'Deluxe Double Room', 2, 2300),
(3, 'Hotel 71', 'Dhaka', '', 'King Room', 2, 3000),
(4, 'Hotel 71', 'Dhaka', '', 'Royal Suite', 2, 3500),
(5, 'Hotel 71', 'Dhaka', '', 'Premier Single Room', 1, 1600),
(6, 'Hotel 71', 'Dhaka', '', 'Superior Single Room', 1, 1800),
(7, 'Hotel 71', '', '', 'Superior Triple Room', 3, 4500),
(8, 'Hotel 71', '', '', 'Premium Triple Room', 3, 5000),
(9, 'Hotel 71', '', '', 'Premium Quadruple Room', 4, 7000),
(10, 'Hotel Shuktara', 'Dhaka', '', 'Superior  King Room', 2, 2600),
(11, 'Hotel Shuktara', 'Dhaka', 'Holding No 20/A, Indira Road, near Tejgoan Collage, 1215 Dhaka', 'Superior Twin Room', 4, 4500),
(12, 'Hotel Shuktara', 'Dhaka', 'Holding No 20/A, Indira Road, near Tejgoan Collage, 1215 Dhaka, Bangladesh –', 'Deluxe King Room', 2, 2700),
(13, 'Hotel Shuktara', 'Dhaka', 'Holding No 20/A, Indira Road, near Tejgoan Collage, 1215 Dhaka, Bangladesh –', 'Premium Family Room', 3, 6000);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'test123');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email` varchar(255) NOT NULL,
  `D.O.B` varchar(255) NOT NULL,
  `Gender` text NOT NULL,
  `Blood Group` varchar(25) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Mobile` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`ID`, `Name`, `Email`, `D.O.B`, `Gender`, `Blood Group`, `Address`, `City`, `Mobile`) VALUES
(1761, 'Afrin Jahan Eva', 'eva@gmail.com', '12.01.1999', 'Female', 'A+', 'CRP,Savar', 'Dhaka', 1987564567),
(1767, 'Rabita Amin', 'rabita@gmail.com', '10.02.1999', 'Female', 'O+', 'Road:01,Shekhertek', 'Dhaka', 1987564534),
(1775, 'Taneir Arani', 'arani@gmail.com', '12.09.1999', 'Female', 'B+', 'Mirpur', 'Dhaka', 1987564534),
(1785, 'Md Sahal', 'sahal@gmail.com', '10.09.1999', 'Male', 'A+', 'Khilgaon', 'Dhaka', 1789095645);

-- --------------------------------------------------------

--
-- Table structure for table `register_user`
--

CREATE TABLE `register_user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL,
  `bloodgroup` varchar(100) NOT NULL,
  `Contact_number` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `no_of_rooms` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_user`
--

INSERT INTO `register_user` (`id`, `name`, `check_in_date`, `check_out_date`, `bloodgroup`, `Contact_number`, `email`, `address`, `no_of_rooms`) VALUES
(1, 'Maksuda Amin', '2021-09-15', '2021-09-22', 'O+', '+8801987456783', 'maksuda@gmail.com', 'Mohammadpur,Dhaka', 1),
(3, 'Monayam Ali', '2021-09-15', '2021-09-20', 'A+', '+8801987456789', 'monayam@gmail.com', 'Adabor,Dhaka', 1),
(7, 'Taneir Arani', '2021-09-23', '2021-09-25', 'A+', '+8801913180373', 'begummaksuda016@gmail.com', 'Road:16,House:988,Baitul Aman housing,Adabor', 1),
(12, 'Raisa Rubaita', '2021-09-28', '2021-09-30', 'O+', '01913180373', 'begummaksuda016@gmail.com', 'Road:11,House:801,Baitul Aman Housing,Adabor', 1),
(16, 'Maksuda Amin', '2021-09-29', '2021-09-30', 'A+', '+8801676347359', 'begummaksuda016@gmail.com', 'House no:21,Road no:01,Shekhertek,Mohammadpur', 1),
(17, 'Long Beach Hotel', '2021-09-30', '2021-09-30', 'A+', '+8801676347359', 'begummaksuda016@gmail.com', 'House no:21,Road no:01,Shekhertek,Mohammadpur', 1),
(18, 'Maksuda Begum', '2021-09-29', '2021-09-29', 'A+', '+8801676347359', 'begummaksuda016@gmail.com', 'House no:21,Road no:01,Shekhertek,Mohammadpur', 1),
(19, 'Maksuda Begum', '2021-09-22', '2021-09-22', 'A+', '+8801913180373', 'begummaksuda016@gmail.com', 'Road:16,House:988,Baitul Aman housing,Adabor', 1),
(20, 'Taneir Arani', '2021-09-30', '2021-10-01', 'A+', '+8801987564532', 'arani@gmail.com', 'Mirpur', 1),
(21, 'arani', '2021-09-30', '2021-10-01', 'A+', '+8801987564345', 'arani@gmail.com', 'Dhaka', 1);

-- --------------------------------------------------------

--
-- Table structure for table `register_user_train`
--

CREATE TABLE `register_user_train` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `bloodgroup` varchar(100) NOT NULL,
  `Contact_number` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `no_of_ticket` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_user_train`
--

INSERT INTO `register_user_train` (`id`, `name`, `bloodgroup`, `Contact_number`, `email`, `address`, `no_of_ticket`) VALUES
(1, 'Israt Adrita Muna', 'B+', 1976456789, 'isratmun@gmail.com', 'Mohammadpur,Dhaka', 1),
(3, 'Maksuda Begum', 'O+', 2147483647, 'begummaksuda016@gmail.com', 'House no:21,Road no:01,Shekhertek,Mohammadpur', 1),
(4, 'Maksuda Begum', 'O+', 2147483647, 'begummaksuda016@gmail.com', 'House no:21,Road no:01,Shekhertek,Mohammadpur', 1),
(5, 'Long Beach Hotel', 'B+', 2147483647, 'begummaksuda016@gmail.com', 'Road:16,House:988,Baitul Aman housing,Adabor', 1),
(6, 'Maksuda Amin', 'A+', 2147483647, 'begummaksuda016@gmail.com', 'Road:16,House:988,Baitul Aman housing,Adabor', 1),
(7, 'Maksuda Amin', 'A+', 2147483647, 'begummaksuda016@gmail.com', 'House no:21,Road no:01,Shekhertek,Mohammadpur', 1),
(8, 'Taneir Arani', 'A+', 2147483647, 'arani@gmail.com', 'House no:21,Road no:01,Shekhertek,Mohammadpur', 1),
(9, 'Taneir Arani', 'A+', 2147483647, 'arani@gmail.com', 'mirpur:01', 1),
(10, 'arani', 'A+', 2147483647, 'arani@gmail.com', 'dhaka', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `id` int(11) NOT NULL,
  `Place` text NOT NULL,
  `Duration` varchar(200) NOT NULL,
  `Start Date` date NOT NULL,
  `End Date` date NOT NULL,
  `Cost` int(200) NOT NULL,
  `Booking Ammount` int(200) NOT NULL,
  `Booking Last Date` date NOT NULL,
  `Transport` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`id`, `Place`, `Duration`, `Start Date`, `End Date`, `Cost`, `Booking Ammount`, `Booking Last Date`, `Transport`) VALUES
(1, 'Bagura', '3 days', '2021-10-06', '2021-10-09', 2500, 700, '2021-10-05', 'Bus'),
(2, 'Bandarban', '5 days', '2021-10-20', '2021-10-25', 8000, 3000, '2021-10-19', 'Bus'),
(3, 'Chandpur', '3 days', '2021-10-28', '2021-10-31', 4000, 1000, '2021-10-27', 'Train'),
(4, 'Chittagong', '5 days', '2021-11-01', '2021-11-06', 4500, 1000, '2021-10-31', 'Bus'),
(5, 'Cumilla', '5 days', '2021-11-10', '2021-11-16', 4000, 1000, '2021-11-09', 'Bus'),
(6, 'Cox Bazar', '3 days', '2021-10-04', '2021-09-08', 6000, 1500, '2021-10-03', 'Bus'),
(7, 'Khagrachari', '3 days', '2021-10-15', '2021-09-18', 5000, 1600, '2021-10-04', 'Bus'),
(8, 'Cox Bazar', '4 days', '2021-10-05', '2021-09-10', 6500, 2000, '2021-10-04', 'Bus');

-- --------------------------------------------------------

--
-- Table structure for table `trainbook`
--

CREATE TABLE `trainbook` (
  `trainno` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `fromcity` varchar(100) NOT NULL,
  `tocity` varchar(100) NOT NULL,
  `arrival` time(6) NOT NULL,
  `departure` time(6) NOT NULL,
  `price` int(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainbook`
--

INSERT INTO `trainbook` (`trainno`, `name`, `fromcity`, `tocity`, `arrival`, `departure`, `price`, `class`, `id`) VALUES
('10101', 'Silkcity Express', 'Dhaka', 'Rajshahi', '01:00:00.000000', '00:00:03.450000', 680, 'AC', 1),
('10101', 'Silkcity Express', 'Rajshahi', 'Dhaka', '00:00:14.450000', '00:00:20.350000', 680, 'AC', 2),
('10201', 'Padma Express', 'Dhaka', 'Rajshahi', '00:00:23.000000', '00:00:04.300000', 340, 'Non AC Chair', 3),
('10201', 'Padma Express', 'Rajshahi', 'Dhaka', '00:00:06.000000', '00:00:11.400000', 340, 'Non AC Chair', 4),
('10301', 'Silkcity Express', 'Dhaka', 'Rajshahi', '14:45:00.000000', '20:35:00.000000', 1020, 'Sleeper', 5),
('10301', 'Silkcity Express', 'Rajshahi', 'Dhaka', '00:00:07.400000', '00:00:13.300000', 1020, 'Sleeper', 6),
('709', 'Parbat Express', 'Dhaka', 'Sylhet', '00:00:13.000000', '00:00:06.200000', 320, 'Non AC Chair', 7),
('709', 'Parbat Express', 'Sylhet', 'Dhaka', '00:00:11.450000', '00:00:13.300000', 320, 'Non AC Chair', 8),
('709', 'Parbat Express', 'Dhaka', 'Sylhet', '00:00:19.000000', '00:00:11.150000', 558, 'AC', 9),
('709', 'Parbat Express', 'Sylhet', 'Dhaka', '00:00:05.000000', '00:00:09.000000', 560, 'AC', 10),
('717', 'Joyontika Express', 'Dhaka', 'Sylhet', '00:00:05.000000', '00:00:20.300000', 560, 'Sleeper', 11),
('717', 'Joyontika Express', 'Sylhet', 'Dhaka', '00:00:11.150000', '00:00:14.000000', 560, 'Sleeper', 12),
('704', 'Mahanagar Provati ', 'Dhaka', 'Chittagong', '00:00:09.000000', '00:00:12.000000', 345, 'Non AC Chair', 13);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Contact_number` varchar(255) NOT NULL,
  `cid` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `full_name`, `email`, `password`, `Contact_number`, `cid`) VALUES
(3, 'Taneir Arani', 'arani@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '01876458976', 0),
(4, 'Rabita Amin', 'rabita@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '01987564567', 0),
(5, 'Md Sahal', 'sahal@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '01987564356', 0),
(9, 'Afrin Jahan', 'afrin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '01456789867', 0),
(10, 'Maksuda Begum', 'maksuda@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '01676453456', 0),
(11, 'Mursalin Amin', 'mursalin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '01676453567', 0),
(12, 'Murshid Ali', 'zarif@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '01913180675', 0),
(13, 'Eva Jahan', 'eva@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '019787656', 0),
(14, 'Md Sahal', 'sa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '01987675456', 1785),
(15, 'Silvia Sandhi', 'sandhi@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '01676453456', 1776),
(16, 'Sumaiya Binte Shahid', 'sumaiya@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '01787654567', 1769),
(17, 'Afrin ', 'afrin61@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '01676456789', 1761);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`) VALUES
('Maksuda Begum', 'maksuda@gmail.com', '1234'),
('Maksuda Amin', 'rabita@gmail.com', '1234'),
('Rabita Amin', 'rabita@gmail.com', '123'),
('Rabita Amin', 'rabita@gmail.com', '123'),
('Samira Alam', 'begummaksuda016@gmail.com', '1234'),
('Maksuda Amin', 'rat@gmail.com', '123'),
('Wahida Tasnim', 'wahida@gmail.com', '12345'),
('Maksuda Amin', 'begummaksuda016@gmail.com', '12345'),
('Dewan Moksed Ali', 'begummaksuda016@gmail.com', '12345'),
('Afrin Jahan', 'afrin@gmail.com', 'afrin'),
('Mursalin Amin', 'mursalin@gmail.com', '1234'),
('Mursalin Amin', 'mursalin@gmail.com', '1234'),
('Murshid Ali', 'murshid@gmail.com', '1234'),
('Rabita Amin', 'ratri@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotelnew`
--
ALTER TABLE `hotelnew`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotelroom`
--
ALTER TABLE `hotelroom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `register_user`
--
ALTER TABLE `register_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_user_train`
--
ALTER TABLE `register_user_train`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainbook`
--
ALTER TABLE `trainbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `hotelnew`
--
ALTER TABLE `hotelnew`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hotelroom`
--
ALTER TABLE `hotelroom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1786;

--
-- AUTO_INCREMENT for table `register_user`
--
ALTER TABLE `register_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `register_user_train`
--
ALTER TABLE `register_user_train`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `trainbook`
--
ALTER TABLE `trainbook`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
