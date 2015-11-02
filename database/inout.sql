-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2015 at 11:26 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

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
  `campid` int(11) NOT NULL,
  `campname` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `place` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

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
  `doctorid` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(11) NOT NULL,
  `photo` text NOT NULL,
  `institute` text NOT NULL,
  `specialization` varchar(11) NOT NULL,
  `year of passing` int(11) NOT NULL,
  `hospital` varchar(100) NOT NULL,
  `city` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctorid`, `email`, `password`, `photo`, `institute`, `specialization`, `year of passing`, `hospital`, `city`) VALUES
(1, 'doctor1@gmail.com', '123', 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcS9fPbNpmq_aGsAzB4remKbzHIRIY9mAJo89VpXPXB9UIznkeOQ', 'svnit', 'dental', 2005, 'random hosp', 'surat'),
(2, 'doctor2@gmail.com', '456', 'https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAAJFAAAAJDBjYTZmZmJiLTU3N2MtNGViNi04ZjhhLWY3NzMzZmY2YjE1ZQ.jpg', 'svnit', 'computer', 2006, 'campus dispensary', 'surat'),
(3, 'deepbhavsar78@gmail.com', '456', 'https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAAJFAAAAJDBjYTZmZmJiLTU3N2MtNGViNi04ZjhhLWY3NzMzZmY2YjE1ZQ.jpg', 'SVNIT', 'Orthopedic', 2003, 'AIIMS', 'Ahmedabad'),
(4, 'sairamvishwa@vmail.com', '456', 'http://globe-views.com/dcim/dreams/doctor/doctor-05.jpg', 'Svnit', 'Skin specia', 2004, 'civil hospital', 'Surat');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `unique_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `dob` date NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(11) NOT NULL,
  `cno` int(11) NOT NULL,
  `photo` text NOT NULL,
  `place` varchar(25) DEFAULT NULL,
  `state` varchar(11) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `physical` varchar(7) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`unique_id`, `name`, `dob`, `age`, `address`, `cno`, `photo`, `place`, `state`, `gender`, `physical`) VALUES
(1, 'rajan', '2456-03-12', 19, 'akkqpqkp', 2147483647, 'img/The-best-top-hd-desktop-bleach-wallpaper-bleach-wallpapers-2.jpg', NULL, '', '', ''),
(2, 'Deep', '1995-10-08', 20, 'srwhqyteage', 12345687, '', 'ahmedabad', 'gujarat', 'male', 'no'),
(3, 'Sairam', '1996-11-03', 19, 'wregeqa', 24165447, 'http://globe-views.com/dcim/dreams/doctor/doctor-05.jpg', 'surat', 'gujarat', 'male', 'no'),
(4, 'phiju', '2013-11-20', 2, 'eakhgadlvqk', 2147483620, 'http://globe-views.com/dcim/dreams/doctor/doctor-05.jpg', 'vadodara', 'gujarat', 'male', 'no'),
(5, 'himmat', '2015-11-01', 0, 'eghreshgEJA', 2146564665, 'http://globe-views.com/dcim/dreams/doctor/doctor-05.jpg', 'jaipur', 'rajasthan', 'male', 'no'),
(6, 'ujjaval', '2014-11-02', 1, 'wergwdfhiwq', 2141109, 'http://globe-views.com/dcim/dreams/doctor/doctor-05.jpg', 'Daman', 'Daman', 'female', 'no'),
(7, 'dia mirza', '2015-08-05', 20, 'sdad', 545656211, 'img/Screenshot (3).png', 'surat', 'gujarat', '', 'no'),
(8, 'dia mirza', '2015-08-05', 20, 'sdad', 545656211, 'img/Screenshot (3).png', 'surat', 'gujarat', '', 'no'),
(9, 'dia mirza', '2015-08-05', 20, 'sdad', 545656211, 'img/Screenshot (3).png', 'surat', 'gujarat', '', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `reportid` int(11) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `disese_found` varchar(50) DEFAULT NULL,
  `dignosis_report` varchar(50) NOT NULL,
  `dt` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `hospital` varchar(25) NOT NULL,
  `place` varchar(25) NOT NULL,
  `medicine` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`reportid`, `unique_id`, `doctor_id`, `disese_found`, `dignosis_report`, `dt`, `hospital`, `place`, `medicine`) VALUES
(1, 1, 1, 'love', 'needs marri', '2015-10-31 18:49:48.000000', 'svnit_dispe', 'surat', 'tablet'),
(2, 3, 4, 'the Viral fever', 'Tu beer he ', '2009-11-09 22:41:27.000000', 'AIIMS', 'Ahmedabad', 'wrhsgjeagjj'),
(3, 2, 1, 'skin disese', 'jesngjljlga', '2008-11-03 04:37:54.000000', 'civil hospi', 'ahmedabad', 'eahdehadhlj'),
(4, 4, 3, 'Aids', 'reljsgjsd', '2004-11-01 18:30:00.000000', 'ewgda', 'bhavnagar', 'ejwgjadhhje'),
(5, 2, 3, 'malaria', 'grwhgfsug', '2015-11-01 05:03:59.556179', 'civil hospi', 'surat', 'wehgwheah'),
(6, 2, 3, 'skin disese', 'grwhgfsug', '2015-11-01 05:03:59.556179', 'civil hospi', 'bhavnagar', 'wehgwheah'),
(7, 6, 2, 'malaria', 'grwhgfsug', '2015-11-01 05:03:59.556179', 'civil hospi', 'Ahmedabad', 'wehgwheah'),
(8, 5, 4, 'malaria', 'grwhgfsug', '2015-11-01 05:03:59.556179', 'civil hospi', 'Ahmedabad', 'wehgwheah'),
(9, 1, 1, 'malaria', 'grwhgfsug', '2015-11-01 05:03:59.556179', 'civil hospi', 'jaipur', 'wehgwheah'),
(10, 2, 3, 'malaria', 'grwhgfsug', '2015-11-01 05:03:59.556179', 'civil hospi', 'rajkot', 'wehgwheah'),
(11, 3, 2, 'malaria', 'grwhgfsug', '2015-11-01 05:03:59.556179', 'civil hospi', 'ahmedabad', 'wehgwheah'),
(12, 4, 4, 'malaria', 'grwhgfsug', '2015-11-01 05:03:59.556179', 'civil hospi', 'surat', 'wehgwheah'),
(13, 4, 5, 'malaria', 'grwhgfsug', '2015-11-01 05:03:59.556179', 'civil hospi', 'bhavnagar', 'wehgwheah');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `doctor id` int(11) NOT NULL,
  `email` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `contact no.` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camp`
--
ALTER TABLE `camp`
  ADD PRIMARY KEY (`campid`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctorid`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`unique_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`reportid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `camp`
--
ALTER TABLE `camp`
  MODIFY `campid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctorid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `unique_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `reportid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
