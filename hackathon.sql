-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2018 at 03:35 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `rsvp`
--

CREATE TABLE `rsvp` (
  `team_name` varchar(50) NOT NULL,
  `describes` varchar(50) NOT NULL,
  `m1_name` varchar(50) NOT NULL,
  `m1_email` varchar(50) NOT NULL,
  `m1_contact` varchar(50) NOT NULL,
  `m2_name` varchar(50) NOT NULL,
  `m2_email` varchar(50) NOT NULL,
  `m2_contact` varchar(50) NOT NULL,
  `m3_name` varchar(50) NOT NULL,
  `m3_email` varchar(50) NOT NULL,
  `m3_contact` varchar(50) NOT NULL,
  `m4_name` varchar(50) NOT NULL,
  `m4_email` varchar(20) NOT NULL,
  `m4_contact` varchar(10) NOT NULL,
  `coupon_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rsvp`
--

INSERT INTO `rsvp` (`team_name`, `describes`, `m1_name`, `m1_email`, `m1_contact`, `m2_name`, `m2_email`, `m2_contact`, `m3_name`, `m3_email`, `m3_contact`, `m4_name`, `m4_email`, `m4_contact`, `coupon_name`) VALUES
('e', 'student', 'e', 'e@s', '4444', '', '', '', '', '', '', '', '', '', 'FAME18');

-- --------------------------------------------------------

--
-- Table structure for table `sponser`
--

CREATE TABLE `sponser` (
  `title` varchar(45) NOT NULL,
  `sponse_code` varchar(10) NOT NULL,
  `person_name` varchar(45) NOT NULL,
  `person_number` int(12) NOT NULL,
  `person_email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sponser`
--

INSERT INTO `sponser` (`title`, `sponse_code`, `person_name`, `person_number`, `person_email`) VALUES
('Fame Technologies', 'FAME18', 'vasanth', 1234556, 'v@s'),


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
