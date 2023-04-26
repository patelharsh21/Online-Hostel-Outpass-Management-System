-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2022 at 04:40 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srec_hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `backup`
--

CREATE TABLE `backup` (
  `name` varchar(25) NOT NULL,
  `rollno` int(10) NOT NULL,
  `roomno` int(10) NOT NULL,
  `outpasstype` varchar(50) NOT NULL,
  `outdate` varchar(50) NOT NULL,
  `indate` varchar(50) NOT NULL,
  `outtime` varchar(50) NOT NULL,
  `intime` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `backup`
--

INSERT INTO `backup` (`name`, `rollno`, `roomno`, `outpasstype`, `outdate`, `indate`, `outtime`, `intime`, `place`, `status`) VALUES
('SREC1901013', 1901013, 325, 'on', '2022-02-10', '2022-02-09', '20:50', '21:50', 'f5tgtg', 'accepted'),
('SREC1901013145', 1901013, 325, 'on', '2022-02-10', '2022-02-09', '20:50', '21:50', 'f5tgtg', 'accepted'),
('SREC1901013145', 1901053, 325, 'on', '2022-02-10', '2022-02-09', '20:50', '21:50', 'f5tgtg', 'declined'),
('SREC1901013145', 1901053, 325, 'on', '2022-02-10', '2022-02-09', '20:50', '21:50', 'f5tgtg', 'accepted'),
('SREC1901013145tgtg', 1901053, 325, 'on', '2022-02-10', '2022-02-09', '20:50', '21:50', 'f5tgtg', 'declined');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` int(10) NOT NULL,
  `password` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roomno` int(11) NOT NULL,
  `htutor` varchar(20) NOT NULL,
  `ctutor` varchar(20) NOT NULL,
  `ac` varchar(20) NOT NULL,
  `hod` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `name`, `roomno`, `htutor`, `ctutor`, `ac`, `hod`) VALUES
(1901013, 123, 'Annar', 325, 'Jaswanth', 'Harsshanth', 'Geetha', 'JHG');

-- --------------------------------------------------------

--
-- Table structure for table `requestform`
--

CREATE TABLE `requestform` (
  `name` varchar(25) NOT NULL,
  `rollno` int(10) NOT NULL,
  `roomno` int(10) NOT NULL,
  `outpasstype` varchar(50) NOT NULL,
  `outdate` varchar(50) NOT NULL,
  `indate` varchar(50) NOT NULL,
  `outtime` varchar(50) NOT NULL,
  `intime` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE `security` (
  `rollno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `security`
--

INSERT INTO `security` (`rollno`) VALUES
(1901013);

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`username`, `password`) VALUES
('AN20', 'Good@123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
