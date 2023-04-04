-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 13, 2023 at 10:16 AM
-- Server version: 10.6.5-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `state_controller`
--

-- --------------------------------------------------------

--
-- Table structure for table `block`
--

DROP TABLE IF EXISTS `block`;
CREATE TABLE IF NOT EXISTS `block` (
  `block_id` int(20) NOT NULL AUTO_INCREMENT,
  `state_id` int(20) NOT NULL,
  `district_id` int(20) NOT NULL,
  `block` varchar(200) NOT NULL,
  PRIMARY KEY (`block_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `block`
--

INSERT INTO `block` (`block_id`, `state_id`, `district_id`, `block`) VALUES
(7, 1, 13, 'hathua'),
(23, 1, 22, 'hathua'),
(21, 12, 18, 'siwan');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

DROP TABLE IF EXISTS `district`;
CREATE TABLE IF NOT EXISTS `district` (
  `district_id` int(20) NOT NULL AUTO_INCREMENT,
  `state_id` int(20) NOT NULL,
  `district` varchar(40) NOT NULL,
  PRIMARY KEY (`district_id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `state_id`, `district`) VALUES
(18, 12, 'sonipat'),
(22, 1, 'chhapra'),
(13, 1, 'gopalganj'),
(15, 1, 'siwan'),
(26, 17, 'surat'),
(27, 17, 'Vododra'),
(28, 17, 'Ahamdabad'),
(29, 17, 'Somnath');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
CREATE TABLE IF NOT EXISTS `state` (
  `state_id` int(20) NOT NULL AUTO_INCREMENT,
  `state` text NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state`) VALUES
(1, 'Bihar'),
(2, 'uttar pradesh'),
(12, 'Haryana'),
(14, 'Madhya pradesh'),
(15, 'Delhi'),
(17, 'Gujrat');

-- --------------------------------------------------------

--
-- Table structure for table `village`
--

DROP TABLE IF EXISTS `village`;
CREATE TABLE IF NOT EXISTS `village` (
  `village_id` int(20) NOT NULL AUTO_INCREMENT,
  `state_id` int(20) NOT NULL,
  `district_id` int(20) NOT NULL,
  `block_id` int(20) NOT NULL,
  `village` varchar(50) NOT NULL,
  PRIMARY KEY (`village_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `village`
--

INSERT INTO `village` (`village_id`, `state_id`, `district_id`, `block_id`, `village`) VALUES
(8, 1, 13, 7, 'diwan parsha');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
