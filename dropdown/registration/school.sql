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
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `ID` int(20) NOT NULL auto_increment,
  `image` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` decimal(12,0) NOT NULL,
  `HOD` varchar(50) NOT NULL,
  `s_date` date NOT NULL,
  `s_type` varchar(20) NOT NULL,
  `n_student` decimal(20,0) NOT NULL,
  `affi` varchar(20) NOT NULL,
  `s_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`ID`, `image`, `email`, `contact`, `HOD`, `s_date`, `s_type`, `n_student`, `affi`, `s_name`, `password`) VALUES
(58, '', 'school@gmail.com', '9904329973', 'Jignesh Parmar', '1990-07-19', 'boy', '550', 'State Board', 'Schoo', '123456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
