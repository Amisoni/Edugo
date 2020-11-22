-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 15, 2013 at 07:42 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `edugo`
--

-- --------------------------------------------------------

--
-- Table structure for table `chap2`
--

CREATE TABLE IF NOT EXISTS `chap2` (
  `chkid` int(10) NOT NULL AUTO_INCREMENT,
  `sub` int(10) NOT NULL,
  `que` varchar(200) NOT NULL,
  `a` varchar(100) NOT NULL,
  `b` varchar(100) NOT NULL,
  `c` varchar(100) NOT NULL,
  `d` varchar(100) NOT NULL,
  `marks` int(10) NOT NULL,
  PRIMARY KEY (`chkid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=157 ;

--
-- Dumping data for table `chap2`
--

INSERT INTO `chap2` (`chkid`, `sub`, `que`, `a`, `b`, `c`, `d`, `marks`) VALUES
(154, 70, 'LJK', 'LJLKJ', 'JLK', 'kjhjk', 'jkhkj', 3),
(152, 70, 'LJK', 'LJLKJ', 'JLK', 'kjhjk', 'jkhkj', 3),
(150, 1, 'LJK', 'LJLKJ', 'JLK', 'kjhjk', 'jkhkj', 3),
(146, 3, 'LJK', 'LJLKJ', 'JLK', 'kjhjk', 'jkhkj', 3),
(156, 43, ' bsad', 'hkjhkj', 'hkjhkj', 'hkjhkj', 'hkjh', 12),
(148, 3, 'LJK', 'LJLKJ', 'JLK', 'kjhjk', 'jkhkj', 3),
(149, 3, 'JLKJ;', 'KJL', 'JLK', 'hkj', 'hkjh', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE IF NOT EXISTS `chapter` (
  `ch_id` int(2) NOT NULL AUTO_INCREMENT,
  `s_id` int(2) NOT NULL,
  `chapname` varchar(100) NOT NULL,
  `chap_no` int(50) NOT NULL,
  PRIMARY KEY (`ch_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`ch_id`, `s_id`, `chapname`, `chap_no`) VALUES
(70, 1, 'jhkjhk', 0),
(5, 2, 'chap1', 0),
(6, 2, 'chap2', 0),
(7, 2, 'chap3', 0),
(8, 2, 'chap4', 0),
(9, 3, 'chap1', 0),
(10, 3, 'chap2', 0),
(11, 3, 'chap3', 0),
(12, 3, 'chap4', 0),
(13, 4, 'chap1', 0),
(14, 4, 'chap2', 0),
(15, 4, 'chap3', 0),
(16, 4, 'chap4', 0),
(17, 5, 'chap1', 0),
(18, 5, 'chap2', 0),
(19, 5, 'chap3', 0),
(20, 5, 'chap4', 0),
(21, 6, 'chap1', 0),
(22, 6, 'chap2', 0),
(23, 6, 'chap3', 0),
(24, 6, 'chap4', 0),
(27, 7, 'chap1', 0),
(28, 7, 'chap2', 0),
(29, 7, 'chap3', 0),
(30, 7, 'chap4', 0),
(31, 8, 'chap1', 0),
(32, 8, 'chap2', 0),
(33, 8, 'chap3', 0),
(34, 8, 'chap4', 0),
(35, 9, 'chap1', 0),
(36, 9, 'chap2', 0),
(37, 9, 'chap3', 0),
(38, 9, 'chap4', 0),
(39, 10, 'chap1', 0),
(40, 10, 'chap2', 0),
(41, 10, 'chap3', 0),
(42, 10, 'chap4', 0),
(43, 11, 'chap1', 0),
(44, 11, 'chap2', 0),
(47, 12, 'chap1', 0),
(48, 12, 'chap4', 0),
(49, 13, 'chap3', 0),
(50, 13, 'chap4', 0),
(51, 14, 'chap1', 0),
(52, 14, 'chap2', 0),
(53, 15, 'chap1', 0),
(55, 16, 'chap1', 0),
(56, 16, 'chap2', 0),
(57, 17, 'chap1', 0),
(58, 17, 'chap2', 0),
(59, 18, 'chap1', 0),
(60, 18, 'chap2', 0),
(61, 19, 'chap1', 0),
(62, 19, 'chap2', 0),
(63, 8, 'chapter6', 0),
(64, 2, 'chapter6', 0),
(65, 2, 'chapter6', 0),
(66, 2, 'chapter6', 0),
(67, 8, 'kk', 0),
(73, 11, 'hkjhak', 1),
(74, 11, 'arjun', 3),
(75, 11, 'hkwjhdkj', 2);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `c_id` int(2) NOT NULL AUTO_INCREMENT,
  `cname` varchar(10) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`c_id`, `cname`) VALUES
(2, '6'),
(3, '7'),
(4, '8'),
(5, '9'),
(6, '10'),
(7, '11'),
(8, '12');

-- --------------------------------------------------------

--
-- Table structure for table `example`
--

CREATE TABLE IF NOT EXISTS `example` (
  `text` varchar(50) DEFAULT NULL,
  KEY `text` (`text`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `example`
--

INSERT INTO `example` (`text`) VALUES
('123'),
('arjun'),
('manish'),
('Peter');

-- --------------------------------------------------------

--
-- Table structure for table `exam_expert`
--

CREATE TABLE IF NOT EXISTS `exam_expert` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `r_id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `v_type` int(10) NOT NULL DEFAULT '1',
  `u_type` varchar(2) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`),
  KEY `id_3` (`id`),
  KEY `u_type` (`u_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `exam_expert`
--

INSERT INTO `exam_expert` (`id`, `r_id`, `p_id`, `v_type`, `u_type`) VALUES
(4, 71, 13, 0, 'p'),
(5, 72, 13, 0, 'p'),
(6, 73, 14, 0, 'p'),
(7, 74, 13, 0, 'p'),
(8, 75, 13, 0, 'p'),
(10, 77, 15, 0, 's'),
(11, 78, 13, 0, 'p'),
(12, 79, 15, 0, 's');

-- --------------------------------------------------------

--
-- Table structure for table `expert_paper`
--

CREATE TABLE IF NOT EXISTS `expert_paper` (
  `p_id` int(10) NOT NULL AUTO_INCREMENT,
  `u_id` varchar(50) NOT NULL,
  `c_id` int(2) NOT NULL,
  `s_id` int(2) NOT NULL,
  `u_type` varchar(11) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `expert_paper`
--

INSERT INTO `expert_paper` (`p_id`, `u_id`, `c_id`, `s_id`, `u_type`, `date_time`, `status`) VALUES
(1, '44', 1, 1, 'f', '0000-00-00 00:00:00', 1),
(2, '44', 1, 2, 'f', '0000-00-00 00:00:00', 1),
(3, '44', 1, 1, 'f', '0000-00-00 00:00:00', 1),
(4, '44', 1, 2, 'f', '0000-00-00 00:00:00', 1),
(5, '44', 1, 1, 'f', '0000-00-00 00:00:00', 1),
(6, '49', 1, 1, 'f', '0000-00-00 00:00:00', 1),
(7, '44', 1, 1, 'f', '0000-00-00 00:00:00', 1),
(8, '3', 1, 1, 'p', '0000-00-00 00:00:00', 1),
(9, '11', 1, 1, 't', '0000-00-00 00:00:00', 1),
(10, '11', 1, 1, 't', '0000-00-00 00:00:00', 1),
(11, '44', 3, 11, 'f', '0000-00-00 00:00:00', 1),
(12, '3', 3, 11, 'p', '0000-00-00 00:00:00', 1),
(13, '5', 3, 11, 'p', '0000-00-00 00:00:00', 0),
(14, '5', 3, 11, 'p', '0000-00-00 00:00:00', 0),
(15, '75', 3, 11, 's', '2013-04-10 18:00:30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `f_id` int(20) NOT NULL AUTO_INCREMENT,
  `f_photo` varchar(200) NOT NULL,
  `f_p_add` varchar(200) NOT NULL,
  `f_town` varchar(50) NOT NULL,
  `f_city` varchar(20) NOT NULL,
  `f_zipcode` int(6) NOT NULL,
  `f_neighbourhood` varchar(50) NOT NULL,
  `f_t_add` varchar(200) NOT NULL,
  `f_edu` varchar(20) NOT NULL,
  `f_resume` varchar(200) NOT NULL,
  `f_yearofjoin` int(4) NOT NULL,
  `f_yearofexperiance` int(4) NOT NULL,
  `f_schoolname` varchar(50) NOT NULL,
  `f_principalname` varchar(50) NOT NULL,
  `f_contactno` int(10) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `faculty`
--


-- --------------------------------------------------------

--
-- Table structure for table `father`
--

CREATE TABLE IF NOT EXISTS `father` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `father`
--

INSERT INTO `father` (`ID`, `image`, `f_name`, `l_name`, `occ`, `email`, `contact`, `contact2`, `sex`, `birth_date`, `password`) VALUES
(3, 'images/Chrysanthemum.jpg', 'arjun', 'kumar', 'sd', 'arjunmaybe@gmail.com', '123456679', '9099090909', 'Female', '1917-06-01', '123456'),
(4, '', 'yatendra', 'deshmukh', 'hjgsj', '123456', '35435', '5443', 'male', '0000-00-00', 'yatendra'),
(5, 'images/Desert.jpg 	', 'hkj', 'hhk', '676', 'arjuny@gmail.com', '57657', '576', 'Male', '0000-00-00', '123456'),
(6, '', 'ghj', 'gj', 'hgjh', 'arjunmay@gmail.com', '6786', '6876', 'Male', '0000-00-00', '123456'),
(7, '', 'jklj', 'lkj', 'jlk', 'arjunmaybe@gmail.com', '65757', '5765', 'Male', '0000-00-00', '1234556'),
(8, '', 'asdgjh', 'gjhg', 'jhg', 'arjun12343@gmail.com', '1234567890', '1234567890', 'Male', '2003-04-14', '1234567'),
(9, '', 'jjk', 'j', 'k', 'arjun.prajapati@may.be', '1234567890', '1234567890', 'Male', '1992-03-02', '123456'),
(10, '', 'yuy', 'yiu', 'yiu', 'y32543@gmail.com', '1234567890', '23', 'Male', '2000-02-14', '1243254365'),
(11, '', 'yuy', 'yiu', 'yiu', 'y325435433@gmail.com', '1234567890', '23', 'Male', '2000-02-14', '12434324'),
(12, '', 'jkj', 'jlkj', 'jlkjl', 'arjun.p12rajapati98@yahoo.com', '1234567890', '123', 'Male', '2002-04-15', '12345678'),
(13, 'images/Desert.jpg', 'hkj', 'hhjk', 'jlkjl', 'gmaZDSl@gmail.com', '1234567890', '123', 'Male', '2001-05-16', '12345678'),
(14, '', 'gfdgfd', 'gfdgf', 'gdfgdfg', 'gdfgdfgdfg@gmail.com', '4444444444', '0', 'Male', '1934-04-17', '44444444444444444'),
(15, '', 'arjun', 'kunmar', 'gasdhfhj', 'arjunmat@gmail.com', '9090909090', '90', 'Male', '1993-01-01', '12345678'),
(16, '', 'arjun', 'kunmar', 'gasdhfhj', 'arjunmat12@gmail.com', '9090909090', '90', 'Male', '1993-01-01', '12345678'),
(17, '', 'arjun', 'slkdj', 'lkjaslkdj', 'jksajdlk@gmail.com', '9090909090', '91', 'Male', '0000-00-00', 'Enter Password');

-- --------------------------------------------------------

--
-- Table structure for table `feculty`
--

CREATE TABLE IF NOT EXISTS `feculty` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(200) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` decimal(12,0) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `std` varchar(50) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `birth_date` date NOT NULL,
  `sub` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `midium` varchar(20) NOT NULL,
  `board` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `feculty`
--

INSERT INTO `feculty` (`ID`, `image`, `f_name`, `l_name`, `u_name`, `email`, `contact`, `phone`, `std`, `sex`, `birth_date`, `sub`, `password`, `midium`, `board`) VALUES
(44, 'images/Tulips.jpg', 'saumil', 'shah', 'ashdkjashd', 'saumilshah786@gmail.com', '9090909090', 0, 'adfds', 'Male', '1901-02-01', 'adkjshajdk', '12345678', '', ''),
(45, '', 'adshjkh', 'hkj', 'hj', 'arjunmay@gmail.in', '1234567', 0, '', 'Male', '0000-00-00', 'gujarati', '', '', ''),
(46, '', 'arjun', 'kumar', 'sgdhg', 'arjun1234567@gmail.com', '8511101334', 123, '2,6', 'Male', '1909-09-12', 'arjun', '12345678', '', ''),
(47, '', 'arjun', 'kumar', 'sgdhg', 'arjun1234768567@gmail.com', '8511101334', 123, '2,6', 'Male', '1909-09-12', 'arjun', '123456578', '', ''),
(48, 'images/Hydrangeas.jpg', 'hjk', 'hkjh', 'ahkjh', 'arjun3212@gmail.com', '8688768878', 123, '1,4,6', 'Male', '1900-01-01', 'engish hindi scince', '12345678', '', ''),
(49, 'images/imy1.jpg', 'jkjdhjkshk', 'jiljijkl', 'jkljlkl', 'lkjkkl@gmail.com', '9999999999', 0, '1,3,6,8', 'Male', '1900-01-01', 'Science', '123456787', '', ''),
(50, 'images/imy1.jpg', 'fdfgd', 'fdfd', 'sfsfs', 'sdfs@gmail.com', '6566666666', 0, '1,3,5,7', 'Male', '1900-01-01', 'jhnjkk', '55555555555', '', ''),
(51, '', 'adlkj', 'jlkjkl', 'jlkjlk', 'jlkj@gmail.com', '9090909090', 90, '2,4,7', 'Male', '1998-01-01', 'asd,mam', '12345678', 'Hindi,Gujarati', 'CBSE,IB'),
(53, '', 'adlkj', 'jlkjkl', 'jlkjlk', 'jlkj232@gmail.com', '9090909090', 90, '2,4,7', 'Male', '1998-01-01', 'asd,mam', '12345678', 'Hindi,Gujarati', 'CBSE,IB');

-- --------------------------------------------------------

--
-- Table structure for table `form1`
--

CREATE TABLE IF NOT EXISTS `form1` (
  `f_id` int(5) NOT NULL AUTO_INCREMENT,
  `csd_id` varchar(50) NOT NULL,
  `que` varchar(500) NOT NULL,
  `ans1` varchar(400) NOT NULL,
  `ans2` varchar(400) NOT NULL,
  `ans3` varchar(400) NOT NULL,
  `ans4` varchar(400) NOT NULL,
  `trueans` char(1) NOT NULL,
  PRIMARY KEY (`csd_id`),
  UNIQUE KEY `f_id` (`f_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `form1`
--

INSERT INTO `form1` (`f_id`, `csd_id`, `que`, `ans1`, `ans2`, `ans3`, `ans4`, `trueans`) VALUES
(9, '11 hindi 2013-02-09', 'What is your favorite Food? ', 'Gujarati', 'Panjabi', 'Kathiyavadi', ' chanise', 'c'),
(10, '12 hindi 2010-02-18', 'What is your favorite Books?', 'Chetan Bhagat', 'Ansic C', 'Asp.Net', 'c#', 'c'),
(7, '9 english 2013-02-05', 'sgvsdf', 'gsfdf', 'fdgdg', 'dfgdg', 'dfgds', 'c'),
(4, '9 english 2013-02-08', 'shg', 'ghfdgh', 'ghdfg', 'fghgfd', 'dfghdf', 'b'),
(8, '9 hindi 2013-02-13', 'fdhdg', 'fghfh', 'fhgg', 'fghfdh', 'fhfgh', 'c'),
(5, '9 hindi 2013-02-14', 'fhdhfdgh', 'hgfd', 'grhfg', 'fghfd', 'gfhfd', 'b'),
(6, '9 resanoing 2013-02-18', 'sfgdf', 'gdfgs', 'dfgsd', 'dfgsd', 'fdsgsd', 'd'),
(1, '9english', 'sfdsgf', 'fdgd', 'dsfgs', 'dffgdsg', 'gfs', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `f_info`
--

CREATE TABLE IF NOT EXISTS `f_info` (
  `f_id` int(20) NOT NULL,
  `f_photo` varchar(200) NOT NULL,
  `f_p_add` varchar(200) NOT NULL,
  `f_town` varchar(50) NOT NULL,
  `f_city` varchar(20) NOT NULL,
  `f_zipcode` int(6) NOT NULL,
  `f_neighbourhood` varchar(50) NOT NULL,
  `f_t_add` varchar(200) NOT NULL,
  `f_edu` varchar(20) NOT NULL,
  `f_resume` varchar(200) NOT NULL,
  `f_yearofjoin` int(4) NOT NULL,
  `f_yearofexperiance` varchar(10) NOT NULL,
  `f_schoolname` varchar(50) NOT NULL,
  `f_principalname` varchar(50) NOT NULL,
  `f_contactno` int(10) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f_info`
--

INSERT INTO `f_info` (`f_id`, `f_photo`, `f_p_add`, `f_town`, `f_city`, `f_zipcode`, `f_neighbourhood`, `f_t_add`, `f_edu`, `f_resume`, `f_yearofjoin`, `f_yearofexperiance`, `f_schoolname`, `f_principalname`, `f_contactno`) VALUES
(44, '', 'dediyasan', 'memehsana', 'London', 323232, 'll', '', 'Mscit', '', 1990, '1', 'fgfg', 'gdfgdf', 123456789),
(50, '', 'bfdgfdg', 'fgdfdfed', 'Rajkot', 34345343, 'efgted', '', '', '', 0, 'year of ex', 'ertete', 'ertgeert', 999999999),
(232, '', 'Dediyasan,vankar vas, ta : Mehsana', 'Mehsana', 'London', 45454, 'NONO', '', 'MBA', '', 0, '', 'JP29', 'dinkar jani', 65464564);

-- --------------------------------------------------------

--
-- Table structure for table `paper_noti`
--

CREATE TABLE IF NOT EXISTS `paper_noti` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pr_id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `notification` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `paper_noti`
--


-- --------------------------------------------------------

--
-- Table structure for table `paper_ques`
--

CREATE TABLE IF NOT EXISTS `paper_ques` (
  `uq_id` int(10) NOT NULL AUTO_INCREMENT,
  `p_id` int(5) NOT NULL,
  `chkid` int(10) NOT NULL,
  `u_marks` int(2) NOT NULL,
  PRIMARY KEY (`uq_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `paper_ques`
--

INSERT INTO `paper_ques` (`uq_id`, `p_id`, `chkid`, `u_marks`) VALUES
(1, 8, 151, 3),
(2, 8, 150, 3),
(3, 9, 151, 1),
(4, 9, 150, 8),
(5, 10, 151, 11),
(6, 10, 150, 20),
(7, 11, 156, 12),
(8, 12, 156, 17),
(9, 13, 156, 50),
(10, 14, 156, 12),
(11, 15, 156, 12);

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE IF NOT EXISTS `parent` (
  `p_id` int(10) NOT NULL AUTO_INCREMENT,
  `p_photo` varchar(200) NOT NULL,
  `p_p_add` varchar(200) NOT NULL,
  `p_town` varchar(50) NOT NULL,
  `p_city` varchar(50) NOT NULL,
  `p_zipcode` int(6) NOT NULL,
  `p_neighbour` varchar(20) NOT NULL,
  `p_t_add` varchar(200) NOT NULL,
  `p_edu` varchar(50) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`p_id`, `p_photo`, `p_p_add`, `p_town`, `p_city`, `p_zipcode`, `p_neighbour`, `p_t_add`, `p_edu`) VALUES
(3, '', 'dediyasan', 'mehsana', 'Baroda', 384002, 'rahul', 'Chandkheda', 'Graduate'),
(15, '', '', '', '', 0, '', '', ''),
(16, '', '', '', '', 0, '', '', ''),
(17, '', '', '', '', 0, '', '', ''),
(51, '', '', '', '', 0, '', '', ''),
(52, '', '', '', '', 0, '', '', ''),
(53, '', '', '', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `n_id` int(11) NOT NULL DEFAULT '0',
  `t_id` int(11) NOT NULL,
  `c_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `s_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `n_id`, `t_id`, `c_time`, `s_id`) VALUES
(1, 10, 1, '2013-03-07 22:15:26', 232),
(2, 45, 2, '2013-03-07 22:52:10', 233),
(3, 46, 2, '2013-03-07 22:58:14', 233),
(4, 11, 1, '2013-03-09 17:51:35', 237),
(5, 12, 1, '2013-03-10 19:52:12', 244),
(6, 47, 2, '2013-03-11 09:48:44', 245),
(7, 13, 1, '2013-03-12 12:24:28', 232),
(8, 14, 1, '2013-03-12 12:27:28', 232),
(9, 15, 1, '2013-03-12 12:28:28', 232),
(10, 16, 1, '2013-03-12 12:29:27', 232),
(11, 17, 1, '2013-03-12 12:29:48', 232),
(12, 18, 1, '2013-03-12 13:00:52', 232),
(13, 19, 1, '2013-03-12 13:01:03', 232),
(14, 20, 1, '2013-03-12 13:01:11', 232),
(15, 21, 1, '2013-03-12 13:01:33', 232),
(16, 22, 1, '2013-03-12 16:14:17', 232),
(17, 23, 1, '2013-03-13 16:06:58', 44),
(18, 24, 1, '2013-03-14 12:58:00', 3),
(19, 25, 1, '2013-03-14 13:10:29', 232),
(20, 48, 2, '2013-03-22 11:34:54', 232),
(21, 49, 2, '2013-03-22 12:07:08', 232),
(22, 50, 2, '2013-03-22 12:27:50', 232),
(23, 51, 2, '2013-03-22 12:35:02', 232),
(24, 52, 2, '2013-03-22 12:45:11', 232),
(25, 53, 2, '2013-03-22 12:46:03', 232),
(26, 54, 2, '2013-03-22 18:37:11', 232),
(27, 55, 2, '2013-03-23 10:39:31', 232),
(28, 56, 2, '2013-03-23 10:43:36', 232),
(29, 57, 2, '2013-03-28 10:23:15', 232),
(30, 58, 2, '2013-03-28 22:27:33', 232),
(31, 59, 2, '2013-03-29 13:17:06', 232),
(32, 60, 2, '2013-03-29 13:18:47', 232),
(33, 61, 2, '2013-03-29 13:19:14', 232),
(34, 62, 2, '2013-03-29 13:19:45', 232),
(35, 63, 2, '2013-03-29 13:58:10', 232),
(36, 64, 2, '2013-03-29 15:00:24', 232),
(37, 65, 2, '2013-03-29 15:03:40', 232),
(38, 66, 2, '2013-03-29 15:04:33', 232),
(39, 67, 2, '2013-03-29 15:05:13', 232),
(40, 68, 2, '2013-03-30 18:00:56', 232),
(41, 69, 2, '2013-03-30 18:02:08', 232),
(42, 70, 2, '2013-03-30 18:03:15', 232),
(43, 71, 2, '2013-03-30 18:03:59', 232),
(44, 1, 1, '2013-04-03 18:15:23', 232),
(45, 2, 1, '2013-04-03 18:15:34', 232),
(46, 3, 1, '2013-04-03 18:15:48', 232),
(47, 4, 1, '2013-04-03 18:53:39', 232),
(48, 5, 1, '2013-04-03 18:54:21', 232),
(49, 6, 1, '2013-04-03 22:59:37', 232),
(50, 7, 1, '2013-04-03 23:00:02', 232),
(51, 8, 1, '2013-04-03 23:00:44', 232),
(52, 9, 1, '2013-04-04 17:00:02', 232),
(53, 10, 1, '2013-04-04 17:26:57', 232),
(54, 72, 2, '2013-04-05 17:55:00', 232),
(55, 11, 1, '2013-04-08 11:28:11', 232),
(56, 12, 1, '2013-04-08 11:34:18', 232),
(57, 73, 2, '2013-04-11 11:09:59', 232),
(58, 74, 2, '2013-04-11 11:24:33', 232),
(59, 75, 2, '2013-04-11 11:46:47', 232),
(60, 76, 2, '2013-04-11 11:59:30', 232),
(61, 77, 2, '2013-04-11 12:02:32', 232),
(62, 78, 2, '2013-04-11 12:05:02', 232),
(63, 79, 2, '2013-04-11 12:42:01', 232);

-- --------------------------------------------------------

--
-- Table structure for table `profile_picture`
--

CREATE TABLE IF NOT EXISTS `profile_picture` (
  `p_id` int(10) NOT NULL AUTO_INCREMENT,
  `s_id` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `profile_picture`
--

INSERT INTO `profile_picture` (`p_id`, `s_id`, `image`) VALUES
(1, 232, 'images/'),
(2, 232, 'images/20130323_192508.jpg'),
(3, 232, 'images/'),
(4, 232, 'images/'),
(5, 232, 'images/20130323_191823.jpg'),
(6, 232, 'images/20130323_192641.jpg'),
(7, 232, 'images/20130323_193045.jpg'),
(8, 232, 'images/Desert.jpg'),
(9, 232, 'images/Hydrangeas.jpg'),
(10, 232, 'images/Desert.jpg'),
(11, 232, 'images/20130323_191823.jpg'),
(12, 232, 'images/hireme.png');

-- --------------------------------------------------------

--
-- Table structure for table `p_type`
--

CREATE TABLE IF NOT EXISTS `p_type` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(10) NOT NULL,
  `text` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `p_type`
--

INSERT INTO `p_type` (`id`, `type`, `text`) VALUES
(1, 'p', 'Updated His Profile Picture'),
(2, 'e', 'Give Exam');

-- --------------------------------------------------------

--
-- Table structure for table `quetable`
--

CREATE TABLE IF NOT EXISTS `quetable` (
  `q_id` int(5) NOT NULL AUTO_INCREMENT,
  `que` varchar(500) NOT NULL,
  `ans1` varchar(200) NOT NULL,
  `ans2` varchar(200) NOT NULL,
  `ans3` varchar(200) NOT NULL,
  `ans4` varchar(200) NOT NULL,
  `marks` int(2) NOT NULL,
  `chapter` varchar(100) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `class` int(1) NOT NULL,
  PRIMARY KEY (`q_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `quetable`
--

INSERT INTO `quetable` (`q_id`, `que`, `ans1`, `ans2`, `ans3`, `ans4`, `marks`, `chapter`, `subject`, `class`) VALUES
(1, 'where is the step well of queen?', 'Patan', 'Meshana', 'Deesa', 'Unja', 1, '1', 'Hindi', 5),
(2, 'who is owner of Reliance 1998?', 'Anil', 'Mukesh', 'Dhirubhai', 'Mahendra', 3, '2', 'Gujarati', 6),
(3, 'How many state in India?', '24', '25', '26', '27', 1, '4', 'English', 7),
(4, 'what is capital of Gujarat?', 'Ahmedabad', 'Mangrol', 'Gandhinagar', 'Patan', 1, '3', 'Science', 8),
(5, 'what is your Pet Name?', 'Mulo', 'kacharo', 'bhuro', 'lago', 1, '4', 'Gujarati', 6),
(6, 'Which vehicle is used for travel in the sky ?', 'Motorcycle', 'Aeroplane', 'Steamer', 'Bus', 2, '3', 'Hindi', 6),
(7, 'What is called the force experienced by a thing through the earth ?', 'Gravitation force', 'Attraction force', 'External force', 'Scientific force', 1, '4', 'Gujarati', 6),
(8, 'Steam occupies how much space compared to water ?', 'Less', 'Same Negligible', 'More', 'Other', 1, '1', 'Hindi', 7),
(9, 'Which instrument was discovered by James Watt ?', 'Motor ', 'Aeroplane', 'Steam Engine', 'Scientific force', 1, '2', 'Hindi', 3);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `rid` int(5) NOT NULL AUTO_INCREMENT,
  `sid` int(5) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `attempt` int(5) NOT NULL,
  `skip` int(5) NOT NULL,
  `totalmarks` int(5) NOT NULL,
  `getmarks` float NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=80 ;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`rid`, `sid`, `sname`, `attempt`, `skip`, `totalmarks`, `getmarks`, `date`) VALUES
(76, 232, 'Student', 1, 0, 12, 0, '2013-04-11 06:29:30'),
(75, 232, 'Student', 0, 1, 50, 0, '2013-04-11 06:16:47'),
(74, 232, 'Student', 0, 1, 50, 0, '2013-04-11 05:54:33'),
(73, 232, 'Student', 1, 0, 12, 0, '2013-04-11 05:39:59'),
(72, 232, 'Student', 0, 1, 50, 0, '2013-04-05 12:24:59'),
(71, 232, 'Student', 0, 1, 50, 0, '2013-03-30 12:33:59'),
(70, 232, 'Student', 0, 1, 50, 0, '2013-03-30 12:33:15'),
(69, 232, 'Student', 0, 1, 50, 0, '2013-03-30 12:32:08'),
(68, 232, 'Student', 0, 1, 50, 0, '2013-03-30 12:30:56'),
(77, 232, 'Student', 1, 0, 12, 12, '2013-04-11 06:32:31'),
(78, 232, 'Student', 0, 1, 50, 0, '2013-04-11 06:35:02'),
(79, 232, 'Student', 1, 0, 12, 0, '2013-04-11 07:12:01');

-- --------------------------------------------------------

--
-- Table structure for table `result_que`
--

CREATE TABLE IF NOT EXISTS `result_que` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `r_id` int(10) NOT NULL,
  `q_id` int(10) NOT NULL,
  `q_marks` int(11) NOT NULL DEFAULT '0',
  `r_ans` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `result_que`
--

INSERT INTO `result_que` (`id`, `r_id`, `q_id`, `q_marks`, `r_ans`) VALUES
(1, 68, 156, 50, 'none'),
(2, 69, 156, 50, 'none'),
(3, 70, 156, 50, 'none'),
(4, 71, 156, 50, 'none'),
(5, 72, 156, 50, 'none'),
(6, 73, 156, 12, 'hkjhkj'),
(7, 74, 156, 50, 'none'),
(8, 75, 156, 50, 'none'),
(9, 76, 156, 12, 'hkjhkj'),
(10, 77, 156, 12, 'hkjh'),
(11, 78, 156, 50, 'none'),
(12, 79, 156, 12, 'hkjhkj');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `image` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` decimal(12,0) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `HOD` varchar(50) NOT NULL,
  `s_date` date NOT NULL,
  `s_type` varchar(20) NOT NULL,
  `n_student` decimal(20,0) NOT NULL,
  `affi` varchar(20) NOT NULL,
  `s_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `midium` varchar(25) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`ID`, `image`, `email`, `contact`, `phone`, `HOD`, `s_date`, `s_type`, `n_student`, `affi`, `s_name`, `password`, `midium`) VALUES
(53, 'images/Tulips.jpg', 'gmail@gmail.com', '1234567890', 247007, 'sadsa', '0000-00-00', 'State Board', '43', 'fds', 'fds', '123456789', ''),
(54, '', 'jeettrivedi', '8347662159', 0, '8347662159', '0000-00-00', '2001', '0', 'CBSC', 'Jeet ', 'jeetme', ''),
(55, '', 'arjun434@gmail.com', '1234567890', 123, 'arjunkumar', '1999-04-12', 'boy', '100', 'State Board', 'arjun', '12345678', ''),
(56, 'images/Hydrangeas.jpg', 'prajapati123_arjun@ymail.com', '1243423554', 1243, 'fgdfhghj', '2002-03-14', 'boy', '435', 'State Board', 'hkj', '12345678', ''),
(57, 'images/20130323_191823.jpg', 'school@gmail.com', '9904329973', 90909090, 'dinkar jani', '1990-07-18', 'State Board', '45031', 'State Board', 'school', '12345678', ''),
(58, '', 'dgfasd@gmail.com', '5555555555', 0, 'gggggggggg', '2004-04-17', 'boy', '500', 'State Board', 'dfgdf', 'ggggggggggggggggg', ''),
(59, 'images/', 'hkhjkkj@gmail.com', '4645645644', 0, 'hgyjuhijl', '1990-01-01', 'boy', '50', 'State Board', 'erwekjol', '454545656658', ''),
(60, 'images/Desert.jpg', 'arjunschool2@gmail.com', '9090909090', 90, 'arjunkumar', '1900-01-01', 'boy', '90', 'State Board', 'asdkl', '1234567890', 'Hindi,Gujarati'),
(61, '', 'arjunschool290@gmail.com', '9090909090', 90, 'ajhkdjjq', '1900-01-01', 'boy', '100', 'State Board', 'arjun', '12345678', 'Hindi,Gujarati'),
(62, '', 'arjunmaybe12@gmail.com', '9090909090', 90, 'hasdkjhjk', '1917-02-19', 'boy', '100', 'State Board', 'arjun', '12345678', 'Hindi,Gujarati'),
(63, '', 'hkjhkj123@gmail.com', '1234567889', 90, 'dabhjgda', '2013-01-01', 'boy', '90', 'State Board', 'shdjkh', '12345678', 'Hindi,Gujarati'),
(64, '', 'hkjhkj1234@gmail.com', '1234567889', 0, 'dabhjgda', '2013-01-09', 'boy', '90', 'State Board', 'shdjkh', '12345678', 'Hindi,Gujarati'),
(65, '', 'hkjhkj12342@gmail.com', '1234567889', 0, 'dabhjgda', '2013-01-09', 'boy', '90', 'State Board', 'shdjkh', '12345678', 'Hindi,English,Gujarati'),
(66, '', 'hkjhkj1234212@gmail.com', '1234567889', 0, 'dabhjgda', '2013-01-09', 'boy', '90', 'State Board', 'shdjkh', '12345678', 'Hindi,English,Gujarati'),
(67, '', 'hkjhkj123421212@gmail.com', '1234567889', 0, 'dabhjgda', '2013-01-09', 'boy', '90', 'ICSE', 'shdjkh', '12345678', 'Hindi,English,Gujarati'),
(68, '', '', '0', 0, '', '0000-00-00', 'IB', '0', 'State Board', '', '', ''),
(69, '', 'arjunwhy@gmail.com', '9714158984', 7, '1234567', '0000-00-00', 'boy', '12', 'State Board', '', '123456789', 'Hindi,'),
(70, 'images/20130323_191823.jpg', 'fhdkjfhkd@gmail.com', '8989989898', 7897, 'sdfjgh', '0000-00-00', 'boy', '123', 'State Board', '', '12345678', 'Hindi,Gujarati'),
(71, '', 'kjjdaklfl@gmail.com', '1234567890', 90, 'jdhfkjhk', '0000-00-00', 'boy', '898', 'CBSE', '', '12345667778', 'Hindi,Gujarati'),
(72, '', 'hgadjgfhjgfdj@gmail.com', '1234567890', 90, 'dgjfhgjhg', '0000-00-00', 'boy', '123', 'CBSE', '', '123456789', 'English,'),
(73, '', 'hggdjjfsd@gnmail.com', '1234567890', 909, 'dhgfdhgj', '2020-03-11', 'boy', '134', 'State Board', '', '12345678', 'English,'),
(74, '', 'hggdjghjgasdjsd@gnmail.com', '1234567890', 909, 'dhgfdhgj', '2020-03-11', 'boy', '134', 'State Board', '3', '1234567890', 'English,'),
(75, 'images/Desert.jpg', 'jignesh123', '1234567890', 909, 'dhgfdhgj', '2020-03-11', 'boy', '134', 'State Board', '5', '1234567899', 'English,');

-- --------------------------------------------------------

--
-- Table structure for table `school_name`
--

CREATE TABLE IF NOT EXISTS `school_name` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sch_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `school_name`
--

INSERT INTO `school_name` (`id`, `sch_name`) VALUES
(1, 'zxhjckhgj1236'),
(2, 'arjun'),
(5, 'adbfhg');

-- --------------------------------------------------------

--
-- Table structure for table `sch_profile`
--

CREATE TABLE IF NOT EXISTS `sch_profile` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `sch_id` int(5) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` int(6) NOT NULL,
  `n_hood` varchar(200) NOT NULL,
  `s_feculty` int(3) NOT NULL,
  `s_standard` varchar(10) NOT NULL DEFAULT '1-1',
  `s_library` varchar(3) NOT NULL,
  `s_ground` varchar(3) NOT NULL,
  `s_room` int(3) NOT NULL,
  `p_quli` varchar(10) NOT NULL,
  `p_join` int(4) NOT NULL,
  `p_experience` int(2) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `a_des` varchar(200) NOT NULL,
  `a_certi` varchar(200) NOT NULL,
  `a_date` date NOT NULL,
  `picture` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `sch_profile`
--

INSERT INTO `sch_profile` (`ID`, `sch_id`, `address`, `city`, `state`, `zip`, `n_hood`, `s_feculty`, `s_standard`, `s_library`, `s_ground`, `s_room`, `p_quli`, `p_join`, `p_experience`, `a_name`, `a_des`, `a_certi`, `a_date`, `picture`) VALUES
(17, 53, 'Mehsana    ', 'Gadhinagar', 'Gujarat', 566666, 'rahul', 5, '17-17', '', '', 0, 'MCom', 2008, 1, 'fdsf', 'dfdfds', '', '1992-03-03', ''),
(18, 57, ' ASDJAKJDKL                            ', 'Ahmedabad', 'Rajesthan', 909902, 'AJSKDL JSHDJKSAJ JSAHD', 33, '2-7', '', '', 7, 'MBA', 2007, 1, '', '', '', '2006-10-12', ''),
(19, 60, '', '', '', 0, '', 0, '', '', '', 0, '', 0, 0, '', '', '', '0000-00-00', ''),
(20, 61, '', '', '', 0, '', 0, 'select cla', 'No', 'IB', 0, '', 0, 0, '', '', '', '0000-00-00', ''),
(21, 62, '', '', '', 0, '', 0, '-', 'No', 'IB', 0, '', 0, 0, '', '', '', '0000-00-00', ''),
(22, 63, '', '', '', 0, '', 0, '1-1', '', '', 0, '', 0, 0, '', '', '', '0000-00-00', ''),
(23, 64, '', '', '', 0, '', 0, '1-1', '', '', 0, '', 0, 0, '', '', '', '0000-00-00', ''),
(24, 65, '', '', '', 0, '', 0, '1-1', '', '', 0, '', 0, 0, '', '', '', '0000-00-00', ''),
(25, 66, '', '', '', 0, '', 0, '1-1', '', '', 0, '', 0, 0, '', '', '', '0000-00-00', ''),
(26, 67, '', '', '', 0, '', 0, '1-1', '', '', 0, '', 0, 0, '', '', '', '0000-00-00', ''),
(27, 68, '', '', '', 0, '', 0, 'select cla', '', '', 0, 'MBA', 1990, 1, '', '', '', '2004-08-01', ''),
(28, 69, '', '', '', 0, '', 0, '1-1', '', '', 0, '', 0, 0, '', '', '', '0000-00-00', ''),
(29, 70, '', '', '', 0, '', 0, '1-1', '', '', 0, '', 0, 0, '', '', '', '0000-00-00', ''),
(30, 71, '', '', '', 0, '', 0, '1-1', '', '', 0, '', 0, 0, '', '', '', '0000-00-00', ''),
(31, 72, '', '', '', 0, '', 0, '1-1', '', '', 0, '', 0, 0, '', '', '', '0000-00-00', ''),
(32, 73, '', '', '', 0, '', 0, '1-1', '', '', 0, '', 0, 0, '', '', '', '0000-00-00', ''),
(33, 74, '', '', '', 0, '', 0, '1-1', '', '', 0, '', 0, 0, '', '', '', '0000-00-00', ''),
(34, 75, '', '', '', 0, '', 0, '1-1', '', '', 0, '', 0, 0, '', '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `selectque`
--

CREATE TABLE IF NOT EXISTS `selectque` (
  `sq_id` int(3) NOT NULL AUTO_INCREMENT,
  `q_id` int(3) NOT NULL,
  PRIMARY KEY (`sq_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `selectque`
--

INSERT INTO `selectque` (`sq_id`, `q_id`) VALUES
(1, 2),
(2, 5),
(3, 1),
(4, 2),
(5, 2),
(7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `ID` double NOT NULL AUTO_INCREMENT,
  `image` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` decimal(10,0) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `std` varchar(50) NOT NULL,
  `midium` varchar(20) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `birth_date` date NOT NULL,
  `affiliance` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=261 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `image`, `password`, `f_name`, `l_name`, `s_name`, `email`, `contact`, `phone`, `std`, `midium`, `sex`, `birth_date`, `affiliance`) VALUES
(232, 'images/hireme.png', '12345678', 'Student', 'Parmar', '5', 'student@gmail.com', '9904329973', 247008, '3', '', 'Female', '1900-01-01', ''),
(233, '', '123456', 'jg', 'gj', 'gj', 'arjun@gmail.com', '1234567890', 1, '6', '', 'Male', '1990-01-01', ''),
(234, '', '12345678', 'bmj', 'hbhjh', 'kjh', 'kj@gmail.com', '1234567789', 5323, '3', '', 'Male', '2004-05-13', ''),
(235, 'images/', '12345678', 'bmj', 'hbhjh', 'kjh', 'kj243@gmail.com', '1234567789', 5323, '3', '', 'Male', '2004-05-13', ''),
(236, '', '687867687', 'hjkh', 'jh', 'kjh', 'arjun1237894567@gmail.com', '5465465465', 6787, '4', '', 'Male', '2004-05-30', ''),
(237, 'images/Chrysanthemum.jpg', '123456789', 'hjkh', 'kjh', 'kjh', 'arjunm@gmail.com', '1234567890', 1243, '2', '', 'Male', '2006-09-15', ''),
(238, '', '12345678', 'hkjh', 'kjh', 'kjh', 'faculty1@gmail.com', '1234567890', 123, '5', '', 'Male', '2003-04-13', ''),
(239, '', '12345678', 'hkjh', 'jh', 'hhhjkhj', 'gma3il@gmail.com', '8688768874', 1, '2', '', 'Male', '2001-08-18', ''),
(240, '', '12345678', 'hkjh', 'kjh', 'kjh', 'faculty31@gmail.com', '1234567890', 123, '5', '', 'Male', '2003-04-13', ''),
(241, 'images/imagesCA8Q0GNB.jpg', '2423423423432', 'bkjh', 'j23112', 'jk', 'hkj@gmail.com', '1234567890', 243, '3', '', 'Male', '2001-05-15', ''),
(242, 'images/Tulips.jpg', '66786786', 'hhjkh', 'hk', 'jh', 'student2232@gmail.com', '1234567789', 23, '3', '', 'Male', '2007-04-17', ''),
(243, '', '12345634', 'ghjg', 'jgjhgjh', 'jghgjhgj', 'saum23ilshah786@gmail.com', '8688768878', 1243, '3', '', 'Male', '1990-01-01', ''),
(244, 'images/Chrysanthemum.jpg', '12345678', 'gukk', 'ghghjg', 'tgyuguh', 'arju21n@gmail.com', '8688768878', 1, '3', '', 'Male', '2000-10-17', ''),
(245, 'images/Desert.jpg', '12342345', 'arjun', 'kumar', 'hjk,hkh', 'arjun12312321@gmail.com', '1234567890', 123, '3', '', 'Male', '2001-07-14', ''),
(246, '', '12345678', 'Student', 'Parmar', 'sdfsds', 'student1@gmail.com', '9904329973', 0, '1', '', 'Male', '1990-01-01', ''),
(247, '', '66666666', 'fdf', 'fedsf', 'FSDFDSF', 'fdggdf@gmail.com', '6666666666', 0, '2', '', 'Male', '1915-08-17', ''),
(249, '', 'ghmujjiljoi', 'fhgdshsj', 'jikj,ikjkl', 'hjjk,jklj', 'hkjhk@gmail.com', '6666666666', 0, '1', 'Gujarati', 'Male', '1900-01-01', 'CBSC'),
(250, '', 'gdfgdfgdfgfdg', 'sdfsaf', 'sdas', 'dfssd', 'sdasd2@gmail.com', '9904329973', 0, '1', 'Gujarati', 'Male', '1900-01-01', 'CBSC'),
(251, '', '12345678', 'arjun', 'kumar', 'adkljalksd', 'arjunschool@gmail.com', '9090909090', 90, '1', 'Hindi', 'Male', '1900-01-01', 'State Board'),
(252, '', '12345678', 'nmbn', 'bmnbmnb', 'bmnbmnb', 'bmnbmnb@gmail.com', '8989898989', 90, '2', 'Hindi', 'Male', '2003-01-01', 'CBSC'),
(253, '', '12345678', 'nmbn', 'bmnbmnb', 'bmnbmnb', 'bmnbmn1b@gmail.com', '8989898989', 90, '2', 'Hindi', 'Male', '2003-01-01', 'CBSC'),
(254, '', '12345678', 'dsfsd`', 'gjhgjhg', 'gjhgjh', 'jhgajhgdj@gmail.com', '9090909090', 90, '4', 'Gujarati', 'Male', '2003-01-01', 'State Board'),
(255, '', '12345678', 'dsfsd`', 'gjhgjhg', 'gjhgjh', 'jhgajhgdj23@gmail.com', '9090909090', 90, '4', 'Gujarati', 'Male', '2003-01-01', 'State Board'),
(256, '', 'value=78', 'dsfsd`', 'gjhgjhg', 'gjhgjh', 'jhgajhgdj2312@gmail.com', '9090909090', 0, '4', 'Gujarati', 'Male', '2003-01-01', 'ICSE'),
(257, '', '', 'arjun', 'akljksjdk', 'jkldajk', 'kajldksj', '8000013381', 91, '7', 'Hindi', 'Male', '0000-00-00', 'CBSE'),
(258, '', '', 'First Name', 'Last Name', 'School Name', 'Enter Email Address', '0', 91, '8', '', '', '0000-00-00', ''),
(259, 'images/Desert.jpg', '12345678', 'aefkjh', 'hkjhkj', '5', 'arjunmay', '9099026540', 90, '2', 'English', 'Male', '2020-03-11', 'on'),
(260, '', '12345678', 'bdfknb', 'bmnbmn', '2', 'arjun', '9090909090', 90, '3', 'English', 'Male', '0000-00-00', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `s_id` int(2) NOT NULL AUTO_INCREMENT,
  `c_id` int(2) NOT NULL,
  `sname` varchar(25) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`s_id`, `c_id`, `sname`) VALUES
(1, 1, 'computer'),
(11, 3, 'computer'),
(15, 4, 'computer1'),
(16, 5, 'Mathematics'),
(18, 5, 'Science');

-- --------------------------------------------------------

--
-- Table structure for table `sun`
--

CREATE TABLE IF NOT EXISTS `sun` (
  `c_id` int(10) NOT NULL AUTO_INCREMENT,
  `p_id` int(10) NOT NULL,
  `s_id` int(10) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `sun`
--

INSERT INTO `sun` (`c_id`, `p_id`, `s_id`) VALUES
(6, 5, 232);

-- --------------------------------------------------------

--
-- Table structure for table `s_info`
--

CREATE TABLE IF NOT EXISTS `s_info` (
  `s_id` int(20) NOT NULL,
  `s_photo` varchar(200) NOT NULL,
  `s_p_add` varchar(200) NOT NULL,
  `s_town` varchar(50) NOT NULL,
  `s_city` varchar(20) NOT NULL,
  `s_zipcode` int(6) NOT NULL,
  `s_neighbour` varchar(20) NOT NULL,
  `s_t_add` varchar(200) NOT NULL,
  `s_hobby` varchar(50) NOT NULL,
  `s_sport` varchar(50) NOT NULL,
  `s_subject` varchar(20) NOT NULL,
  `s_relegions` varchar(20) NOT NULL,
  `s_language` varchar(20) NOT NULL,
  `s_description` varchar(200) NOT NULL,
  `s_schoolname` varchar(50) NOT NULL,
  `s_principalname` varchar(50) NOT NULL,
  `s_contactnumber` int(10) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s_info`
--

INSERT INTO `s_info` (`s_id`, `s_photo`, `s_p_add`, `s_town`, `s_city`, `s_zipcode`, `s_neighbour`, `s_t_add`, `s_hobby`, `s_sport`, `s_subject`, `s_relegions`, `s_language`, `s_description`, `s_schoolname`, `s_principalname`, `s_contactnumber`) VALUES
(232, '', 'gjhg', 'hgjas', 'Diu', 123456, 'gjhgj', 'gjhgjh', 'bjmdhfk', 'gjhg', 'kh', '', 'English', '', 'jhkj', 'hkjh', 123456789),
(251, '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 0),
(252, '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 0),
(253, '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 0),
(254, '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 0),
(255, '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 0),
(256, '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 0),
(257, '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 0),
(258, '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 0),
(259, '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 0),
(260, '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id`, `name`) VALUES
(1, 'php'),
(2, 'php frameword'),
(3, 'php tutorial'),
(4, 'jquery'),
(5, 'ajax'),
(6, 'mysql'),
(7, 'wordpress'),
(8, 'wordpress theme'),
(9, 'xml');

-- --------------------------------------------------------

--
-- Table structure for table `teacherque`
--

CREATE TABLE IF NOT EXISTS `teacherque` (
  `tqid` varchar(20) NOT NULL,
  `que` varchar(200) NOT NULL,
  `ans1` varchar(100) NOT NULL,
  `ans2` varchar(100) NOT NULL,
  `ans3` varchar(100) NOT NULL,
  `ans4` varchar(100) NOT NULL,
  `marks` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacherque`
--

INSERT INTO `teacherque` (`tqid`, `que`, `ans1`, `ans2`, `ans3`, `ans4`, `marks`) VALUES
('13', 'Which ty pe of substance is pure water ?', 'Semitransparent', 'Translucent', 'Transparent', 'Mixed.', 4),
('17', 'The chemical property of water is ?', 'Universal solvent', 'Fluidity', 'Universal solute', 'Liquid form (state)', 7),
('13', 'Which ty pe of substance is pure water ?', 'Semitransparent', 'Translucent', 'Transparent', 'Mixed.', 2),
('17', 'The chemical property of water is ?', 'Universal solvent', 'Fluidity', 'Universal solute', 'Liquid form (state)', 5),
('11', 'Purifies the air.', 'Smoke ', 'Trees ', 'Hills', 'River', 5),
('15', 'pollutes the land maximum ', 'Plastic ', 'Paper ', 'Excreta of animals ', 'Skins of vegetables', 11),
('11', 'Purifies the air.', 'Smoke ', 'Trees ', 'Hills', 'River', 5),
('15', 'pollutes the land maximum ', 'Plastic ', 'Paper ', 'Excreta of animals ', 'Skins of vegetables', 11),
('11', 'Purifies the air.', 'Smoke ', 'Trees ', 'Hills', 'River', 5),
('15', 'pollutes the land maximum ', 'Plastic ', 'Paper ', 'Excreta of animals ', 'Skins of vegetables', 11),
('11', 'Purifies the air.', 'Smoke ', 'Trees ', 'Hills', 'River', 3),
('15', 'pollutes the land maximum ', 'Plastic ', 'Paper ', 'Excreta of animals ', 'Skins of vegetables', 5),
('11', 'Purifies the air.', 'Smoke ', 'Trees ', 'Hills', 'River', 3),
('15', 'pollutes the land maximum ', 'Plastic ', 'Paper ', 'Excreta of animals ', 'Skins of vegetables', 5),
('11', 'Purifies the air.', 'Smoke ', 'Trees ', 'Hills', 'River', 5),
('11', 'Purifies the air.', 'Smoke ', 'Trees ', 'Hills', 'River', 5),
('11', 'Purifies the air.', 'Smoke ', 'Trees ', 'Hills', 'River', 4),
('12', 'Gives maximum energy', 'Tree ', 'Animal ', 'Sun', 'Man', 3),
('15', 'pollutes the land maximum ', 'Plastic ', 'Paper ', 'Excreta of animals ', 'Skins of vegetables', 7),
('11', 'Purifies the air.', 'Smoke ', 'Trees ', 'Hills', 'River', 4),
('12', 'Gives maximum energy', 'Tree ', 'Animal ', 'Sun', 'Man', 39),
('15', 'pollutes the land maximum ', 'Plastic ', 'Paper ', 'Excreta of animals ', 'Skins of vegetables', 7),
('11', 'Purifies the air.', 'Smoke ', 'Trees ', 'Hills', 'River', 4),
('12', 'Gives maximum energy', 'Tree ', 'Animal ', 'Sun', 'Man', 3),
('15', 'pollutes the land maximum ', 'Plastic ', 'Paper ', 'Excreta of animals ', 'Skins of vegetables', 7),
('11', 'Purifies the air.', 'Smoke ', 'Trees ', 'Hills', 'River', 4),
('12', 'Gives maximum energy', 'Tree ', 'Animal ', 'Sun', 'Man', 3),
('15', 'pollutes the land maximum ', 'Plastic ', 'Paper ', 'Excreta of animals ', 'Skins of vegetables', 7),
('2', 'Question 2 ch2', 'a ch22', 'b ch23', 'c ch24', 'c ch25', 2),
('11', 'Purifies the air.', 'Smoke ', 'Trees ', 'Hills', 'River', 4),
('12', 'Gives maximum energy', 'Tree ', 'Animal ', 'Sun', 'Man', 3),
('15', 'pollutes the land maximum ', 'Plastic ', 'Paper ', 'Excreta of animals ', 'Skins of vegetables', 7),
('11', 'Purifies the air.', 'Smoke ', 'Trees ', 'Hills', 'River', 4),
('12', 'Gives maximum energy', 'Tree ', 'Animal ', 'Sun', 'Man', 3),
('15', 'pollutes the land maximum ', 'Plastic ', 'Paper ', 'Excreta of animals ', 'Skins of vegetables', 7),
('11', 'Purifies the air.', 'Smoke ', 'Trees ', 'Hills', 'River', 4),
('12', 'Gives maximum energy', 'Tree ', 'Animal ', 'Sun', 'Man', 3),
('15', 'pollutes the land maximum ', 'Plastic ', 'Paper ', 'Excreta of animals ', 'Skins of vegetables', 7),
('11', 'Purifies the air.', 'Smoke ', 'Trees ', 'Hills', 'River', 4),
('12', 'Gives maximum energy', 'Tree ', 'Animal ', 'Sun', 'Man', 3),
('15', 'pollutes the land maximum ', 'Plastic ', 'Paper ', 'Excreta of animals ', 'Skins of vegetables', 7),
('11', 'Purifies the air.', 'Smoke ', 'Trees ', 'Hills', 'River', 4),
('12', 'Gives maximum energy', 'Tree ', 'Animal ', 'Sun', 'Man', 3),
('13', 'Which ty pe of substance is pure water ?', 'Semitransparent', 'Translucent', 'Transparent', 'Mixed.', 2),
('16', 'Which gas is dissolved in cold drinks ?', 'Oxygen', 'Carbon dioxide', 'Hydrogen', 'Ammonia', 3),
('17', 'The chemical property of water is ?', 'Universal solvent', 'Fluidity', 'Universal solute', 'Liquid form (state)', 5),
('13', 'Which ty pe of substance is pure water ?', 'Semitransparent', 'Translucent', 'Transparent', 'Mixed.', 2),
('16', 'Which gas is dissolved in cold drinks ?', 'Oxygen', 'Carbon dioxide', 'Hydrogen', 'Ammonia', 3),
('17', 'The chemical property of water is ?', 'Universal solvent', 'Fluidity', 'Universal solute', 'Liquid form (state)', 5),
('11', 'Purifies the air.', 'Smoke ', 'Trees ', 'Hills', 'River', 4),
('12', 'Gives maximum energy', 'Tree ', 'Animal ', 'Sun', 'Man', 3),
('15', 'pollutes the land maximum ', 'Plastic ', 'Paper ', 'Excreta of animals ', 'Skins of vegetables', 7),
('13', 'Which ty pe of substance is pure water ?', 'Semitransparent', 'Translucent', 'Transparent', 'Mixed.', 2),
('16', 'Which gas is dissolved in cold drinks ?', 'Oxygen', 'Carbon dioxide', 'Hydrogen', 'Ammonia', 3),
('17', 'The chemical property of water is ?', 'Universal solvent', 'Fluidity', 'Universal solute', 'Liquid form (state)', 5),
('11', 'Purifies the air.', 'Smoke ', 'Trees ', 'Hills', 'River', 4),
('12', 'Gives maximum energy', 'Tree ', 'Animal ', 'Sun', 'Man', 9),
('15', 'pollutes the land maximum ', 'Plastic ', 'Paper ', 'Excreta of animals ', 'Skins of vegetables', 7),
('11', 'Purifies the air.', 'Smoke ', 'Trees ', 'Hills', 'River', 4),
('12', 'Gives maximum energy', 'Tree ', 'Animal ', 'Sun', 'Man', 3),
('15', 'pollutes the land maximum ', 'Plastic ', 'Paper ', 'Excreta of animals ', 'Skins of vegetables', 7),
('11', 'Purifies the air.', 'Smoke ', 'Trees ', 'Hills', 'River', 4),
('12', 'Gives maximum energy', 'Tree ', 'Animal ', 'Sun', 'Man', 3),
('15', 'pollutes the land maximum ', 'Plastic ', 'Paper ', 'Excreta of animals ', 'Skins of vegetables', 7),
('11', 'Purifies the air.', 'Smoke ', 'Trees ', 'Hills', 'River', 4),
('15', 'pollutes the land maximum ', 'Plastic ', 'Paper ', 'Excreta of animals ', 'Skins of vegetables', 7),
('11', 'Purifies the air.', 'Smoke ', 'Trees ', 'Hills', 'River', 4),
('12', 'Gives maximum energy', 'Tree ', 'Animal ', 'Sun', 'Man', 3),
('15', 'pollutes the land maximum ', 'Plastic ', 'Paper ', 'Excreta of animals ', 'Skins of vegetables', 7),
('12', 'Gives maximum energy', 'Tree ', 'Animal ', 'Sun', 'Man', 3),
('11', 'Purifies the air.', 'Smoke ', 'Trees ', 'Hills', 'River', 9),
('23', 'Howmany fingures?', '10', '20', '5', '9', 6),
('48', 'que chap 2', 'a ch2', 'b ch2', 'c ch3', 'd ch4', 3),
('30', 'compch2', 'c21', 'c22', 'c23', 'c24', 3),
('38', 'Gives maximum energy', 'Tree ', 'Animal ', 'Sun', 'Man', 8),
('1', 'que chap 2', 'a ch2', 'b ch2', 'c ch3', 'd ch4', 9),
('2', 'Question 2 ch2', 'a ch22', 'b ch23', 'c ch24', 'c ch25', 9),
('3', 'Computer que1', 'cq1', 'cq2', 'cq3', 'cq4', 9),
('4', 'compch2', 'c21', 'c22', 'c23', 'c24', 9),
('36', 'Which instrument was discovered by James Watt ?', 'Motor ', 'Aeroplane', 'Steam Engine', 'Scientific force', 0),
('37', 'Purifies the air.', 'Smoke ', 'Trees ', 'Hills', 'River', 0),
('51', 'compch2', 'c21', 'c22', 'c23', 'c24', 0),
('48', 'que chap 2', 'a ch2', 'b ch2', 'c ch3', 'd ch4', 0),
('49', 'Question 2 ch2', 'a ch22', 'b ch23', 'c ch24', 'c ch25', 0),
('6', 'computerchap1', 'cc1', 'cc2', 'cc3', 'cc4', 1),
('27', 'que chap 2', 'a ch2', 'b ch2', 'c ch3', 'd ch4', 5),
('31', 'englishchap1', 'ec1', 'ec2', 'ec3', 'ec4', 2),
('31', 'englishchap1', 'ec1', 'ec2', 'ec3', 'ec4', 2),
('28', 'Question 2 ch2', 'a ch22', 'b ch23', 'c ch24', 'c ch25', 5),
('48', 'que chap 2', 'a ch2', 'b ch2', 'c ch3', 'd ch4', 3),
('49', 'Question 2 ch2', 'a ch22', 'b ch23', 'c ch24', 'c ch25', 5),
('27', 'que chap 2', 'a ch2', 'b ch2', 'c ch3', 'd ch4', 5),
('6', 'computerchap1', 'cc1', 'cc2', 'cc3', 'cc4', 1),
('48', 'que chap 2', 'a ch2', 'b ch2', 'c ch3', 'd ch4', 3),
('49', 'Question 2 ch2', 'a ch22', 'b ch23', 'c ch24', 'c ch25', 5),
('27', 'que chap 2', 'a ch2', 'b ch2', 'c ch3', 'd ch4', 5),
('44', 'Mathematicsclass6chap1', 'mcc1', 'mcc2', 'mcc3', 'mcc4', 5),
('3', 'Computer que1', 'cq1', 'cq2', 'cq3', 'cq4', 5),
('25', 'Oldest Name of Social Science subject?', 'technology', 'social', 'two above', 'not all', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE IF NOT EXISTS `tutor` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(200) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` decimal(12,0) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `std` varchar(50) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `birth_date` date NOT NULL,
  `sub` varchar(50) NOT NULL,
  `midium` varchar(20) NOT NULL,
  `password` int(20) NOT NULL,
  `board` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`ID`, `image`, `f_name`, `l_name`, `u_name`, `email`, `contact`, `phone`, `std`, `sex`, `birth_date`, `sub`, `midium`, `password`, `board`) VALUES
(5, 'images/Jellyfish.jpg', 'arjun', 'kumar', 'mahatmagandhi', 'arjun.prajapati@gmail.com', '1234567890', 0, '123', 'male', '0000-00-00', 'fad', '', 123456, ''),
(20, '', 'arghu', 'ghg', 'hgjh', 'arjun@may.pu', '0', 0, '', 'Male', '0000-00-00', 'eurokidds', '', 0, ''),
(21, '', 'hkjh', 'hkj', 'JKLJ', 'arjuny@may.me', '1126716', 0, '', 'Male', '0000-00-00', 'guajarati', '', 123456, ''),
(22, '', 'ffggfjgf', 'gkgkg', 'gkgjgj', 'fjgj', '0', 0, '', 'Male', '0000-00-00', 'fhfhf', '', 0, ''),
(23, '', 'cXCZ', 'hkjh', 'hjkhjk', 'hkjhkj@gmail.com', '1234567890', 1243, '1,6', 'Male', '1997-12-30', 'dsd', '', 123455678, ''),
(24, '', 'cXCZ', 'hkjh', 'hjkhjk', 'hkjhk4324j@gmail.com', '1234567890', 1243, '1,6', 'Male', '1997-12-30', 'dsd', '', 2147483647, ''),
(25, 'images/Lighthouse.jpg', 'cXCZ', 'hkjh', 'hjkhjk', 'hkjhk432434324j@gmail.com', '1234567890', 1243, '1,6', 'Male', '1997-12-30', 'dsd', '', 343543656, ''),
(26, 'images/Hydrangeas.jpg', 'cXCZ', 'hkjh', 'hjkhjk', 'hkjhk432436784324j@gmail.com', '1234567890', 1243, '1,6', 'Male', '1997-12-30', 'dsd', '', 5467890, ''),
(27, 'images/imagesCAOKVKG4.jpg', 'kljh', 'jlkj', 'jklj', 'jlkjl@gmail.com', '1234567890', 2321, '1,6', 'Male', '1997-11-19', 'dw', '', 2147483647, ''),
(28, 'images/Hydrangeas.jpg', 'tutor', 'Parmar', 'Arc', 'tutor@gmail.com', '9904329973', 247007, '1,3,5,7', 'Female', '1900-01-01', 'ajhsdkjhsak', '', 12345678, ''),
(29, 'images/imy1.jpg', 'tutor', 'Parmar', 'Arc', 'tutor1@gmail.com', '9904329973', 0, '1,3,5,7', 'Male', '1900-01-01', 'Mathematics', '', 123456, ''),
(30, '', 'gfdgfd', 'dfgdf', 'dfdf', 'dfffdfg@gmail.com', '9999999999', 0, '1,3,6', 'Male', '1900-01-01', 'Science', 'GujaratiGujarati', 2147483647, 'State Board'),
(31, '', 'drgtdr', 'dsfgg', 'dfssf', 'dsfdfsd@gmail.com', '5455455555', 0, '1,3,6', 'Male', '1916-11-17', 'fsd', 'Hindi,Gujarati', 0, 'CBSE,ICSE,'),
(32, '', 'dfghdfgh', 'fdgdfg', 'fdgdfg', 'dasdsad@gmail.com', '5455455555', 0, '2,5,6', 'Male', '1916-11-18', 'ggffdg', 'English,Gujarati', 444444444, 'State Board,IB'),
(33, '', 'akdjlkj', 'jlkjlk', 'jlkjlkj', 'jlkjlkjlk@gmail.com', '9090909090', 90, '2,3,4,5', 'Male', '1981-09-15', 'kjdflkj', 'Hindi,', 12345678, 'CBSE,'),
(34, '', 'KFJAKLJ', 'JLKJLK', 'JLKJLK', 'jashdkj@gmail.com', '9090909090', 90, '2,4,7', 'Male', '1995-01-01', 'asjdlkj', 'Hindi,Gujarati', 12345678, 'CBSE,'),
(35, '', '34', 'JLKJLK', 'JLKJLK', 'jashdkjsda@gmail.com', '9090909090', 0, '3,5,6,8', 'Male', '1978-12-17', 'asjdlkj', 'Hindi,English,', 12345678, 'CBSE,'),
(36, '', '35', 'JLKJLK', 'JLKJLK', 'jashdkjsdsdasa@gmail.com', '9090909090', 0, '2,4,7', 'Male', '1979-10-16', 'asjdlkj', 'Hindi,Gujarati', 12345678, 'CBSE,');

-- --------------------------------------------------------

--
-- Table structure for table `tutorque`
--

CREATE TABLE IF NOT EXISTS `tutorque` (
  `tqid` int(10) NOT NULL,
  `que` varchar(200) NOT NULL,
  `ans1` varchar(100) NOT NULL,
  `ans2` varchar(100) NOT NULL,
  `ans3` varchar(100) NOT NULL,
  `ans4` varchar(100) NOT NULL,
  `marks` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tutorque`
--

INSERT INTO `tutorque` (`tqid`, `que`, `ans1`, `ans2`, `ans3`, `ans4`, `marks`) VALUES
(13, 'Which ty pe of substance is pure water ?', 'Semitransparent', 'Translucent', 'Transparent', 'Mixed.', 2),
(11, 'Purifies the air.', 'Smoke ', 'Trees ', 'Hills', 'River', 12),
(15, 'pollutes the land maximum ', 'Plastic ', 'Paper ', 'Excreta of animals ', 'Skins of vegetables', 16),
(11, 'Purifies the air.', 'Smoke ', 'Trees ', 'Hills', 'River', 2),
(15, 'pollutes the land maximum ', 'Plastic ', 'Paper ', 'Excreta of animals ', 'Skins of vegetables', 3),
(11, 'Purifies the air.', 'Smoke ', 'Trees ', 'Hills', 'River', 2),
(15, 'pollutes the land maximum ', 'Plastic ', 'Paper ', 'Excreta of animals ', 'Skins of vegetables', 3),
(13, 'Which ty pe of substance is pure water ?', 'Semitransparent', 'Translucent', 'Transparent', 'Mixed.', 2),
(16, 'Which gas is dissolved in cold drinks ?', 'Oxygen', 'Carbon dioxide', 'Hydrogen', 'Ammonia', 9),
(17, 'The chemical property of water is ?', 'Universal solvent', 'Fluidity', 'Universal solute', 'Liquid form (state)', 5),
(35, 'Steam occupies how much space compared to water ?', 'Less', 'Same Negligible', 'More', 'NotAny', 9);

-- --------------------------------------------------------

--
-- Table structure for table `t_info`
--

CREATE TABLE IF NOT EXISTS `t_info` (
  `t_id` int(20) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL,
  `t_p_add` varchar(200) NOT NULL,
  `t_city` varchar(50) NOT NULL,
  `t_state` varchar(20) NOT NULL,
  `t_zip` varchar(6) NOT NULL,
  `t_nb` varchar(50) NOT NULL,
  `t_edu` varchar(50) NOT NULL,
  `t_resume` varchar(200) NOT NULL,
  `t_date` date NOT NULL,
  `t_exp` varchar(50) NOT NULL,
  `t_ses` varchar(20) NOT NULL,
  `t_noofstud` varchar(50) NOT NULL,
  `t_s_time` varchar(20) NOT NULL,
  `t_e_time` varchar(20) NOT NULL,
  `t_expsub` varchar(20) NOT NULL,
  `t_advancesub` varchar(50) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=235 ;

--
-- Dumping data for table `t_info`
--

INSERT INTO `t_info` (`t_id`, `id`, `t_p_add`, `t_city`, `t_state`, `t_zip`, `t_nb`, `t_edu`, `t_resume`, `t_date`, `t_exp`, `t_ses`, `t_noofstud`, `t_s_time`, `t_e_time`, `t_expsub`, `t_advancesub`) VALUES
(2, 0, 'dediyasan', 'ahmedabad', 'ahmd', 'ahmd', '384002', 'nono', 'mca', '0000-00-00', '19920302', '1', '45', '4AM', '5AM', '1', 'comp'),
(28, 28, 'ahmedabad', 'ahmd', 'ahmd', '384002', 'rahul', 'Select', 'ME', '1991-02-02', '1year', '3', '44', '3AMAM', '5AMAM', 'english', 'comp'),
(29, 0, 'deyasan', 'Baroda', 'Rajasthan', '384002', 'fffff', 'ME', '1', '1991-02-02', 'computer', '3', '440', '4AM', '5AM', 'computer', 'math'),
(33, 0, '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', ''),
(34, 0, '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', ''),
(35, 0, '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', ''),
(36, 0, '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', ''),
(232, 0, 'deyasan', 'deyasan', 'Baroda', 'Rajast', '384002', 'fffff', 'ME', '0000-00-00', 'computer', '3', '440', '4AMAM', '5AMAM', 'computer', 'math'),
(233, 0, 'ahmedabad', 'ahmedabad', 'ahmd', 'ahmd', '384002', 'rahul', 'rahul', '0000-00-00', 'YearMonthDay', '3', '44', '3AMAMAM', '5AMAMAM', 'english', 'comp'),
(234, 0, 'ahmedabad', 'ahmedabad', 'ahmd', 'ahmd', '384002', 'rahul', 'rahul', '0000-00-00', 'YearMonthDay', '3', '44', '3AMAMAM', '5AMAMAM', 'english', 'comp');
