-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2014 at 12:36 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `csc2019`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutcompany`
--

CREATE TABLE IF NOT EXISTS `aboutcompany` (
  `ArticleID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `content` varchar(200) NOT NULL,
  PRIMARY KEY (`ArticleID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `aboutcompany`
--

INSERT INTO `aboutcompany` (`ArticleID`, `title`, `content`) VALUES
(10, 'Test', 'Test'),
(9, 'Test', 'Test'),
(8, 'Test', 'Test'),
(6, 'About the Company', 'Based on Malone Road, Belfast!'),
(11, 'Test', 'Test'),
(12, 'Test', 'Test'),
(13, 'Test', 'Test123'),
(14, 'This is a test', 'This is anther thest'),
(15, 'About the Company', 'Based on Malone Road, belfast, Raymond''s PC''s is the place to go for all your desktop and laptop needs!'),
(16, 'abc', '123'),
(17, 'test`', 'abc123'),
(18, 'test`;', 'abc123;'),
(19, 'Raymond', '123'),
(20, 'Raymond ', '<p>This is a test</p>'),
(25, '', ''),
(26, '', ''),
(27, '', ''),
(28, 'wqeqw', '<p>weqwqewqeqwq</p>'),
(29, 'wqeqw  ', '<p>weqwqewqeqwq</p>'),
(32, 'sdsa', '<p>sadsadasdsada</p>'),
(33, 'this is a test ', '<p>ahhh testing</p>'),
(34, 'Hello', '<p>This is a test</p>'),
(35, 'Hello', '<p>This is a test</p>'),
(36, 'Hello', '<p>This is a test</p>'),
(37, 'Hello', '<p>This is a test</p>'),
(38, 'Hello abc ', '<p>This another is This is a test</p>'),
(39, 'sdaasdas', '<p>adsasdaaaaaaaaaaaaaaaaaaa</p>'),
(40, 'sdaasdas', '<p>adsasdaaaaaaaaaaaaaaaaaaa</p>'),
(41, 'sdaasdas', '<p>adsasdaaaaaaaaaaaaaaaaaaa</p>'),
(42, 'sdaasdas', '<p>adsasdaaaaaaaaaaaaaaaaaaa</p>'),
(43, 'sdaasdas', '<p>adsasdaaaaaaaaaaaaaaaaaaa</p>'),
(44, 'About the Company', '<p>We offer the best deals on laptops and desktops in the country.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `Answer` varchar(300) NOT NULL,
  `Question_ID` int(11) NOT NULL,
  `correct` tinyint(1) NOT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`answer_id`, `Answer`, `Question_ID`, `correct`) VALUES
(34, 'Question 1 Answer 1', 18, 0),
(35, 'Question 1 Answer 2', 18, 1),
(36, 'Question 2 Answer 1', 19, 0),
(37, 'Question 2 Answer 2', 19, 1),
(38, 'q1a1', 20, 0),
(39, 'q1a2', 20, 0),
(40, 'q1a3', 20, 0),
(41, '1', 21, 0),
(42, '2', 21, 0),
(43, '3', 21, 0),
(44, 'a1', 22, 0),
(45, 'a2', 22, 0),
(46, 'a3', 22, 0),
(47, 'red', 23, 0),
(48, 'pink', 23, 0),
(49, 'blue', 23, 1),
(50, '12', 24, 0),
(51, '2', 24, 0),
(52, '21', 24, 1),
(53, 'Beragh', 25, 0),
(54, 'Belfast', 25, 0),
(55, 'Eskra', 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `colour`
--

CREATE TABLE IF NOT EXISTS `colour` (
  `ColourID` int(11) NOT NULL AUTO_INCREMENT,
  `hexvalue` varchar(10) NOT NULL,
  PRIMARY KEY (`ColourID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `colour`
--

INSERT INTO `colour` (`ColourID`, `hexvalue`) VALUES
(1, '#D9DB00');

-- --------------------------------------------------------

--
-- Table structure for table `companyhistory`
--

CREATE TABLE IF NOT EXISTS `companyhistory` (
  `ArticleID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `content` varchar(200) NOT NULL,
  PRIMARY KEY (`ArticleID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `companyhistory`
--

INSERT INTO `companyhistory` (`ArticleID`, `title`, `content`) VALUES
(1, 'Test ', '<p>Test123</p>'),
(3, 'Company History', '<p>Founded in 2001, we have been going&nbsp;<strong>strong&nbsp;</strong>every since.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `customercharter`
--

CREATE TABLE IF NOT EXISTS `customercharter` (
  `ArticleID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL,
  `content` varchar(100) NOT NULL,
  `title1` varchar(40) NOT NULL,
  `content1` varchar(100) NOT NULL,
  `title2` varchar(40) NOT NULL,
  `content2` varchar(100) NOT NULL,
  `title3` varchar(40) NOT NULL,
  `content3` varchar(100) NOT NULL,
  `title4` varchar(40) NOT NULL,
  `content4` varchar(100) NOT NULL,
  PRIMARY KEY (`ArticleID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `customercharter`
--

INSERT INTO `customercharter` (`ArticleID`, `title`, `content`, `title1`, `content1`, `title2`, `content2`, `title3`, `content3`, `title4`, `content4`) VALUES
(1, 't', '\r\nc\r\n\r\n', 't1', '\r\nc1\r\n\r\n', 't2', '\r\nc2\r\n\r\n', 't3', '\r\nc3\r\n\r\n', 't4', '\r\nc4\r\n\r\n'),
(3, 'Customer', '<p>The Customer Always Comes first</p>', 'Price', '<p>We will not be beaten on price.</p>', 'Service', '<p>We will not be beaten on service.</p>', 'Product Quality', '<p>We strive to supply the best quality product to the customer.</p>', 'Friendly Staff', '<p>Our staff aim to be friendly and welcoming to the custimer.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE IF NOT EXISTS `footer` (
  `ArticleID` int(11) NOT NULL AUTO_INCREMENT,
  `line1` varchar(50) NOT NULL,
  `line2` varchar(50) NOT NULL,
  `line3` varchar(50) NOT NULL,
  PRIMARY KEY (`ArticleID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`ArticleID`, `line1`, `line2`, `line3`) VALUES
(2, '<p>info@raymondspcs.com</p>', '<p>Tel: 07703766787</p>', '<p>(C) Raymond Dillon 2013</p>');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE IF NOT EXISTS `header` (
  `HeaderID` int(11) NOT NULL AUTO_INCREMENT,
  `imagepath` varchar(30) NOT NULL,
  PRIMARY KEY (`HeaderID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`HeaderID`, `imagepath`) VALUES
(3, 'header.png');

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE IF NOT EXISTS `homepage` (
  `ArticleID` int(11) NOT NULL AUTO_INCREMENT,
  `imagepath` varchar(60) NOT NULL,
  `content` varchar(200) NOT NULL,
  PRIMARY KEY (`ArticleID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`ArticleID`, `imagepath`, `content`) VALUES
(1, 'WIN_20131208_164404.JPG', '\r\ntaylor\r\n\r\n'),
(2, 'WIN_20131208_164356.JPG', '<p>taylor</p>'),
(3, 'WIN_20131208_164410.JPG', '<p>asdas</p>'),
(4, 'WIN_20131208_164410.JPG', '<p>sadsa</p>'),
(5, 'WIN_20131208_164410.JPG', '<p>sadsa</p>'),
(6, 'WIN_20131208_164408.JPG', '<p>erew</p>'),
(7, 'WIN_20131208_164408.JPG', '<p>erew</p>'),
(8, 'WIN_20131208_164408.JPG', '<p>erew</p>'),
(9, 'WIN_20131208_164408.JPG', '<p>erew</p>'),
(10, 'WIN_20131208_164356.JPG', '<p>dsfdsfsdf</p>'),
(11, 'WIN_20131208_164356.JPG', '<p>dsfdsfsdf</p>'),
(14, 'home_logo.png', '<p>Welcome - &nbsp;please feel free to browse our website for our latest offers.</p>'),
(17, 'header_image1.png', '<p>Welcome. Please feel free to brows the website for the lastest offers! This is a new homepage record!</p>');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE IF NOT EXISTS `logins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `pword` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `username`, `pword`) VALUES
(1, 'admin', 'pass123');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `ProductID` int(11) NOT NULL AUTO_INCREMENT,
  `machinename` varchar(50) NOT NULL,
  `processor` varchar(50) NOT NULL,
  `hdd` varchar(50) NOT NULL,
  `ram` varchar(50) NOT NULL,
  `os` varchar(50) NOT NULL,
  `graphics` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `imagepath` varchar(50) NOT NULL,
  PRIMARY KEY (`ProductID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `machinename`, `processor`, `hdd`, `ram`, `os`, `graphics`, `price`, `imagepath`) VALUES
(8, 'Ray''s Build', 'Intel Core i5', 'SSD', '8gb', 'Windows 7', 'Yes', '600', 'Koala.jpg'),
(7, 'Dell XYZ', 'Intel I7', '40GB', '8', 'Windows 8', '89', '300', 'home_logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `Question_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Question` varchar(3000) NOT NULL,
  `Quiz_ID` int(11) NOT NULL,
  PRIMARY KEY (`Question_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`Question_ID`, `Question`, `Quiz_ID`) VALUES
(18, 'Question1', 69),
(19, 'Question2', 69),
(20, 'Test Question 1', 70),
(21, 'Test Question 2', 70),
(22, 'Test Question 3', 70),
(23, 'What colour is the sky?', 71),
(24, 'How old am i?', 71),
(25, 'Where am I?', 71);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE IF NOT EXISTS `quiz` (
  `Quiz_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Module` varchar(100) NOT NULL,
  `no_of_questions` int(11) DEFAULT NULL,
  `no_of_options` int(11) DEFAULT NULL,
  PRIMARY KEY (`Quiz_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`Quiz_ID`, `Module`, `no_of_questions`, `no_of_options`) VALUES
(69, 'CSC2001', 2, 2),
(70, 'CSC2002', 3, 3),
(71, 'CSC2004', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user`, `pass`) VALUES
('student', 'password'),
('staff', 'password'),
('student', 'password'),
('staff', 'password'),
('student', 'password'),
('staff', 'password');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
