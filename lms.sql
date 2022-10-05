-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2020 at 09:26 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `ID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `TITLE` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `AUTHOR` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `GENRE` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `ISSUED_BY` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TIMES_ISSUED` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`ID`, `TITLE`, `AUTHOR`, `GENRE`, `ISSUED_BY`, `TIMES_ISSUED`) VALUES
('1000', 'Lets Code', 'benzamine', 'educational', 'CSM19011', 1);

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE IF NOT EXISTS `journal` (
  `JOURNAL_ID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `NAME` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `SUBJECT` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `PUBLISHER` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `YEAR` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `ISSUED_BY` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`JOURNAL_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`JOURNAL_ID`, `NAME`, `SUBJECT`, `PUBLISHER`, `YEAR`, `ISSUED_BY`) VALUES
('3000', 'Muhona', 'Event', 'TU', '2020', 'CSM19011'),
('123', 'asdd', 'sci', 'as pub', '2015', NULL),
('100022', 'gabb', 'assdd', '123qwe', '2023', NULL),
('12333', 'asddqq', 'scisss', 'as aapub', '2015', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `magazine`
--

CREATE TABLE IF NOT EXISTS `magazine` (
  `MAGAZINE_ID` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `NAME` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `PUBLISHER` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `MONTH` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `YEAR` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `ISSUED_BY` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`MAGAZINE_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `magazine`
--

INSERT INTO `magazine` (`MAGAZINE_ID`, `NAME`, `PUBLISHER`, `MONTH`, `YEAR`, `ISSUED_BY`) VALUES
('2000', 'sakhi', 'friend', 'January', '2015', 'CSM19011'),
('2001', 'pran', 'Soul', 'January', '2015', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `NAME` varchar(100) NOT NULL,
  `ROLL_NUMBER` varchar(100) NOT NULL,
  `SEX` varchar(100) NOT NULL,
  `DEPARTMENT` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `BOOKS_ISSUED` varchar(100) NOT NULL,
  `MAGAZINE_ISSUED` int(100) NOT NULL DEFAULT '0',
  `JOURNAL_ISSUED` int(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ROLL_NUMBER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`NAME`, `ROLL_NUMBER`, `SEX`, `DEPARTMENT`, `PASSWORD`, `BOOKS_ISSUED`, `MAGAZINE_ISSUED`, `JOURNAL_ISSUED`) VALUES
('tun tun', 'CSM19011', 'Male', 'CSE', 'tezu123', '1', 1, 1),
('madhurjya', 'CSM19032', 'Male', 'CSE', 'tezu123', '0', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
