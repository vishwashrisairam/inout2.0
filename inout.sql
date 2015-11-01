-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2015 at 05:17 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inout`
--

-- --------------------------------------------------------

--
-- Table structure for table `camp`
--

CREATE TABLE IF NOT EXISTS `camp` (
  `campid` int(11) NOT NULL AUTO_INCREMENT,
  `campname` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `place` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`campid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `camp`
--

INSERT INTO `camp` (`campid`, `campname`, `date`, `place`, `description`) VALUES
(1, 'Blood Donation', '2015-11-03', 'bhavnagar', 'blood donation for donating blood '),
(2, 'swine flu vaccination', '2015-11-03', 'Bhavnagar', 'vaccination programmme'),
(3, 'polio drops ', '2015-11-06', 'Ahmedabad', 'polio drops in schools'),
(4, 'hathipago awareness', '2015-11-05', 'Ahmedabad', 'hathipago is dangerous'),
(5, 'orthopedic surgery camp', '2015-11-05', 'rajkot', 'best doctors of the world');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `doctorid` int(11) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `password` varchar(11) NOT NULL,
  `photo` text NOT NULL,
  `institute` text NOT NULL,
  `specialization` varchar(11) NOT NULL,
  `year of passing` int(11) NOT NULL,
  `hospital` varchar(100) NOT NULL,
  `city` text NOT NULL,
  PRIMARY KEY (`doctorid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctorid`, `email`, `password`, `photo`, `institute`, `specialization`, `year of passing`, `hospital`, `city`) VALUES
(1, 'doctor1@gmail.com', '123', 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcS9fPbNpmq_aGsAzB4remKbzHIRIY9mAJo89VpXPXB9UIznkeOQ', 'svnit', 'dental', 2005, 'random hosp', 'surat');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `unique_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `dob` date NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(11) NOT NULL,
  `cno` bigint(20) NOT NULL,
  `disease` varchar(11) NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`unique_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`unique_id`, `name`, `dob`, `city`, `state`, `age`, `address`, `cno`, `disease`, `photo`) VALUES
(1, 'rajan', '2456-03-12', 'bhavnagar', 'gujarat', 19, 'akkqpqkp', 9409054975, 'no', 'img/The-best-top-hd-desktop-bleach-wallpaper-bleach-wallpapers-2.jpg'),
(2, 'achal', '2014-01-07', 'bhavnagar', 'gujarat', 20, 'surat', 7600311516, 'tb', '');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `reportid` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `disese_found` varchar(50) DEFAULT NULL,
  `dignosis_report` varchar(11) NOT NULL,
  `docs` text NOT NULL,
  `dt` timestamp(6) NOT NULL,
  `hospital` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `medicine` varchar(50) NOT NULL,
  PRIMARY KEY (`reportid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`reportid`, `unique_id`, `doctor_id`, `disese_found`, `dignosis_report`, `docs`, `dt`, `hospital`, `place`, `medicine`) VALUES
(1, 1, 1, 'fever', 'viral fever', '', '2015-11-01 03:54:23.000000', 'svnit_dispe', 'surat', 'tablet'),
(2, 2, 1, 'dengue', 'one week be', '', '2015-11-01 00:34:39.000000', 'random hosp', 'surat', ''),
(3, 1, 1, 'dengue', 'one week be', 'img/', '2015-10-26 18:30:00.000000', '1`', 'surat', 'glucose');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
