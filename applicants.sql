-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 18, 2021 at 03:18 AM
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
-- Database: `atc`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

DROP TABLE IF EXISTS `applicants`;
CREATE TABLE IF NOT EXISTS `applicants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `motherTonque` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `churchAffiliation` varchar(100) NOT NULL,
  `fathersName` varchar(100) NOT NULL,
  `fathersOccupation` varchar(100) NOT NULL,
  `mothersName` varchar(100) NOT NULL,
  `mothersOccupation` varchar(100) NOT NULL,
  `annualIncome` varchar(100) NOT NULL,
  `contactAddress` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `pinCode` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobileno` varchar(100) NOT NULL,
  `aadharno` varchar(100) NOT NULL,
  `maritalStatus` varchar(100) NOT NULL,
  `spouseName` varchar(100) NOT NULL,
  `spouseOccupation` varchar(100) NOT NULL,
  `children` varchar(100) NOT NULL,
  `male` varchar(100) NOT NULL,
  `female` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `division` varchar(100) NOT NULL,
  `board_university` varchar(100) NOT NULL,
  `work` varchar(100) NOT NULL,
  `church` varchar(100) NOT NULL,
  `suspended` varchar(100) NOT NULL,
  `suspendedReason` varchar(100) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `churchRecommendation` varchar(100) NOT NULL,
  `sponsorship` varchar(100) NOT NULL,
  `responsibleNamea` varchar(100) NOT NULL,
  `responsibleMobilea` varchar(100) NOT NULL,
  `responsibleAddressa` varchar(100) NOT NULL,
  `responsibleNameb` varchar(100) NOT NULL,
  `responsibleMobileb` varchar(100) NOT NULL,
  `responsibleAddressb` varchar(100) NOT NULL,
  `smoke` varchar(100) NOT NULL,
  `chew` varchar(100) NOT NULL,
  `tatoo` varchar(100) NOT NULL,
  `dateSignature` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
