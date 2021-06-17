-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 17, 2021 at 04:22 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `birthdayrem`
--

DROP TABLE IF EXISTS `birthdayrem`;
CREATE TABLE IF NOT EXISTS `birthdayrem` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `birthdayrem`
--

INSERT INTO `birthdayrem` (`id`, `Name`, `DOB`) VALUES
(1, 'Abhi p', '1970-01-01'),
(2, 'Sweet Layer', '2021-04-05'),
(3, 'Abhi p', '2021-04-05'),
(4, 'ABhi Patel', '2021-07-05'),
(5, 'ABhi Patel', '2021-07-05'),
(6, 'ABhi Patel', '2021-07-05'),
(7, 'ABhi Patel', '1970-01-01'),
(8, 'Sweet Layer', '2021-05-22'),
(9, '', '2021-05-12'),
(10, 'Abhi p', '2002-02-19'),
(11, 'Abhi p', '2002-02-19'),
(12, 'Nisarg', '2002-02-09'),
(13, 'Nitinbhai', '2021-05-23'),
(14, 'ABhi Patell', '2021-05-24'),
(15, 'Yash', '2021-06-22'),
(16, 'Ji', '2021-06-23'),
(17, 'Yashvi', '2021-06-23'),
(18, 'jp', '2021-06-16'),
(19, 'saina', '2021-05-23'),
(20, 'saina', '2021-05-23'),
(21, 'saina1', '2021-12-22'),
(22, 'Happi', '2021-05-29'),
(23, 'Nanda', '2021-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

DROP TABLE IF EXISTS `child`;
CREATE TABLE IF NOT EXISTS `child` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Child_name` varchar(100) NOT NULL,
  `Child_gender` varchar(5) NOT NULL,
  `Child_city` varchar(50) NOT NULL,
  `Child_birth` date NOT NULL,
  `Child_age` int NOT NULL,
  `Child_weight` double NOT NULL,
  `Child_height` double NOT NULL,
  `Child_Vax` varchar(200) NOT NULL,
  `Username` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`id`, `Child_name`, `Child_gender`, `Child_city`, `Child_birth`, `Child_age`, `Child_weight`, `Child_height`, `Child_Vax`, `Username`) VALUES
(1, 'Sam', 'male', 'Anjar', '2021-06-15', 1, 2, 3, 'BCG,Rotavirus,', 'Ab1234'),
(2, 'Kridh', 'FeMal', 'Gandhidham', '2021-06-15', 1, 3, 3, 'BCG,', 'abKri'),
(3, 'Kridha Dharmikbhai Patel', 'FeMal', 'Gandhidham', '2021-06-16', 1, 3, 3, 'BCG,', 'aKridha');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Uname` varchar(50) NOT NULL,
  `Pwd` varchar(50) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `Child_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `Uname`, `Pwd`, `Email`, `token`, `Child_name`) VALUES
(1, 'AdminPersonal', '123', NULL, NULL, NULL),
(2, 'Student', '123', NULL, NULL, NULL),
(3, 'abhi', '123', NULL, NULL, NULL),
(5, 'Abh1234', 'abhi2002', 'abhi2002patel@gmail.com', '1f73be31d69cd6a588d79493671864962263', 'AbhiPatel'),
(6, 'abhi12', 'abhi2002', '20ceuod014@ddu.ac.in', '49c79a413d3d4a9fb133d17b4d3ccb991929', 'Ruhi'),
(7, 'nisu123', '1234', 'mevadanisarg9586425893@gmail.com', '74b8ba58b71c4faf7883e0099c0452f38983', 'Indi'),
(8, 'Malay123', '1234', 'malaythakkar8758710306@gmail.com', '7bb93dea764fc014793ef49c47a2a51e9971', 'Chait'),
(9, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e7082', ''),
(10, 'Ab12', '12', 'abhi2002patel@gmail.com', '1f73be31d69cd6a588d79493671864962498', 'rAHI'),
(11, 'Ab12', '12', 'abhi2002patel@gmail.com', '1f73be31d69cd6a588d79493671864962498', 'rAHI'),
(12, 'Ab123', '123', 'abhi2002patel@gmail.com', '1f73be31d69cd6a588d79493671864961472', 'rAHI'),
(13, 'Ab123', '123', 'abhi2002patel@gmail.com', '1f73be31d69cd6a588d79493671864961472', 'rAHI'),
(14, 'Ab1234', '1234', 'abhi2002patel@gmail.com', '1f73be31d69cd6a588d79493671864961254', 'rAHI'),
(15, 'abhiR', '1234', 'abhi2002patel@gmail.com', '1f73be31d69cd6a588d79493671864968541', ''),
(16, 'abhiR', '123', 'abhi2002patel@gmail.com', '1f73be31d69cd6a588d79493671864967805', ''),
(17, 'abhiR', '123', 'abhi2002patel@gmail.com', '1f73be31d69cd6a588d794936718649687', ''),
(18, 'AbK12', '123', 'abhi2002patel@gmail.com', '1f73be31d69cd6a588d79493671864962448', 'Krishthy'),
(19, 'abKri', '12345', 'abhi2002patel@gmail.com', '1f73be31d69cd6a588d79493671864964995', 'Kridh'),
(20, 'aKridha', '1234', 'abhi2002patel@gmail.com', '1f73be31d69cd6a588d79493671864961918', 'Kridha');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `R_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `R_name`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `rolesdetails`
--

DROP TABLE IF EXISTS `rolesdetails`;
CREATE TABLE IF NOT EXISTS `rolesdetails` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `role_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `role_id` (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rolesdetails`
--

INSERT INTO `rolesdetails` (`id`, `user_id`, `role_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(6, 6, 2),
(5, 5, 2),
(4, 4, 2),
(3, 3, 2),
(7, 7, 2),
(8, 8, 2),
(9, 9, 2),
(10, 10, 2),
(11, 14, 2),
(12, 15, 2),
(13, 16, 2),
(14, 17, 2),
(15, 18, 2),
(16, 19, 2),
(17, 20, 2);

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

DROP TABLE IF EXISTS `vaccine`;
CREATE TABLE IF NOT EXISTS `vaccine` (
  `id` int NOT NULL AUTO_INCREMENT,
  `VaccineName` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`id`, `VaccineName`) VALUES
(1, 'BCG'),
(2, 'Covishield'),
(3, 'OPV Birth dose'),
(4, 'Rotavirus vaccine'),
(5, 'HepatitisA');

-- --------------------------------------------------------

--
-- Table structure for table `vaccinedate`
--

DROP TABLE IF EXISTS `vaccinedate`;
CREATE TABLE IF NOT EXISTS `vaccinedate` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `Vaccine_date` date NOT NULL,
  `Due_date` date NOT NULL,
  `Uname` varchar(50) NOT NULL,
  `childN` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vaccinedate`
--

INSERT INTO `vaccinedate` (`id`, `name`, `Vaccine_date`, `Due_date`, `Uname`, `childN`, `status`) VALUES
(1, 'BCG', '2021-06-15', '2021-06-22', 'Ab1234', 'Sam', ''),
(2, 'Rotavirus', '2021-06-15', '2021-08-15', 'Ab1234', 'Sam', 'Allocated'),
(3, 'BCG', '2021-06-15', '2021-06-22', 'abKri', 'Kridh', 'Allocated'),
(4, 'BCG', '2021-06-16', '2021-06-23', 'aKridha', 'Kridha Dharmikbhai', 'Allocated');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
