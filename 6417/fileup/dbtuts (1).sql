-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 05, 2017 at 04:44 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbtuts`
--
CREATE DATABASE IF NOT EXISTS `dbtuts` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbtuts`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uploads`
--

CREATE TABLE IF NOT EXISTS `tbl_uploads` (
  `id` varchar(30) NOT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_uploads`
--

INSERT INTO `tbl_uploads` (`id`, `file`, `type`, `size`) VALUES
('', '69217-145444-quotes-about-juvenile-crime.jpg.png', 'image/png', 69),
('0', '56639-145444-quotes-about-juvenile-crime.jpg.png', 'image/png', 69),
('1', '88716-145444-quotes-about-juvenile-crime.jpg.png', 'image/png', 69),
('1', '93759-145444-quotes-about-juvenile-crime.jpg.png', 'image/png', 69),
('1', '69256-145444-quotes-about-juvenile-crime.jpg.png', 'image/png', 69);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
