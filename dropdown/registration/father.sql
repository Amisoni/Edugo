-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 06, 2013 at 11:03 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `edugo`
--

-- --------------------------------------------------------

--
-- Table structure for table `father`
--

CREATE TABLE IF NOT EXISTS `father` (
  `ID` int(20) NOT NULL auto_increment,
  `image` varchar(200) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `occ` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` decimal(12,0) NOT NULL,
  `contact2` decimal(50,0) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `birth_date` date NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `father`
--

INSERT INTO `father` (`ID`, `image`, `f_name`, `l_name`, `occ`, `email`, `contact`, `contact2`, `sex`, `birth_date`, `password`) VALUES
(13, '', 'Parents', 'Parmar', 'Business Man', 'parents@gmail.com', '9904329973', '276247007', 'Male', '1990-07-19', '123456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
