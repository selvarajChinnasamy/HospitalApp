-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 03, 2017 at 05:34 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `data`
--


-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `id` varchar(30) NOT NULL,
  `suffer` varchar(30) NOT NULL,
  `medission` varchar(30) NOT NULL,
  `catagory` varchar(30) NOT NULL,
  `docid` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `suffer`, `medission`, `catagory`, `docid`, `date`) VALUES
('55', 'high ferver', 'colpol ', 'medium', '12', '2017-03-29'),
('55', 'qw', 'qw', 'low', '12', '2017-03-29'),
('55', 'heavy ferver', 'colpol  ', 'high', '12', '2017-03-29'),
('55', 'headace', 'colpol', 'low', '12', '2017-03-29'),
('55', 'ferver', 'test', 'low', '55', '2017-03-29'),
('55', 'qw', 'qw', 'high', '55', '2017-03-30'),
('55', 'head', 'colpal  ', 'medium', '55', '2017-03-30'),
('55', 'SUFFERING', 'CANCER', 'high', '12', '2017-03-31'),
('55', 'ferver78', 'ferver78554', 'medium', '55', '2017-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `docter`
--

CREATE TABLE IF NOT EXISTS `docter` (
  `Name` varchar(30) NOT NULL,
  `docid` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Mobile` varchar(30) NOT NULL,
  `Hospital` varchar(30) NOT NULL,
  PRIMARY KEY (`docid`),
  UNIQUE KEY `Password` (`Password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `docter`
--

INSERT INTO `docter` (`Name`, `docid`, `Password`, `Mobile`, `Hospital`) VALUES
('12', '12', '12', '12', '12'),
('SelvaRaj', '55', '55', '55', 'Government Hospital Chennai');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `sno` int(10) NOT NULL AUTO_INCREMENT,
  `id` varchar(10) NOT NULL,
  `blood` varchar(30) NOT NULL,
  `fname` varchar(25) DEFAULT NULL,
  `lname` varchar(25) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `pnum` varchar(15) DEFAULT NULL,
  `dno` varchar(50) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `pin` varchar(7) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `nation` varchar(35) DEFAULT NULL,
  `donar` varchar(4) DEFAULT NULL,
  `dia` varchar(4) DEFAULT NULL,
  `mi` varchar(4) DEFAULT NULL,
  `r1name` varchar(25) DEFAULT NULL,
  `r1rel` varchar(15) DEFAULT NULL,
  `r1pnum` varchar(15) DEFAULT NULL,
  `r2name` varchar(25) DEFAULT NULL,
  `r2rel` varchar(15) DEFAULT NULL,
  `r2pnum` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`sno`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`sno`, `id`, `blood`, `fname`, `lname`, `dob`, `gender`, `pnum`, `dno`, `street`, `city`, `state`, `pin`, `country`, `nation`, `donar`, `dia`, `mi`, `r1name`, `r1rel`, `r1pnum`, `r2name`, `r2rel`, `r2pnum`) VALUES
(1, '55', 'o+', 'Selvaraj', 'Chinnasamy', '2017-03-02', 'Male', '9585823764', '175/4,', 'AnnaNagar,Manoor,', 'Palani', 'TamilNadu,', '958745', 'India', 'Indian', 'Yes', 'No', 'No', 'Chinnasamy', 'Father', '9585641308', 'Sindhamani', 'Mother', '7418956318'),
(4, '23', 'o-', '23', '23', '2017-03-02', 'male', '23', '23', '23', '23', '23', '23', '23', '23', 'yes', 'yes', 'yes', '23', 'father', '23', '23', 'father', '23'),
(5, '15', 'm ', '14', '15', '2017-04-28', 'male', '15', '15', '15', '15', '15', '15', '15', '15', 'yes', 'yes', 'yes', '15', 'brother', '15', '15', 'mother', '15');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
