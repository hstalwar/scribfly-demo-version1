-- phpMyAdmin SQL Dump
-- version 4.4.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 02, 2015 at 08:28 PM
-- Server version: 5.6.24
-- PHP Version: 5.4.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `scribfly_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `scribfly_cases`
--

CREATE TABLE IF NOT EXISTS `scribfly_cases` (
  `casenumber` varchar(50) NOT NULL DEFAULT '',
  `state` varchar(15) DEFAULT NULL,
  `county` varchar(15) NOT NULL,
  `court` varchar(20) NOT NULL,
  `clerkemail` varchar(50) DEFAULT NULL,
  `plaintiffemail` varchar(500) DEFAULT NULL,
  `defendentemail` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scribfly_users`
--

CREATE TABLE IF NOT EXISTS `scribfly_users` (
  `scribfly_firstname` varchar(50) NOT NULL,
  `scribfly_lastname` varchar(50) NOT NULL,
  `scribfly_emailaddress` varchar(75) NOT NULL,
  `scribfly_pwd` varchar(150) NOT NULL,
  `scribfly_lawfirm` varchar(100) NOT NULL,
  `scribfly_lawfirmaddress` varchar(300) NOT NULL,
  `scribfly_userrole` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scribfly_users`
--

INSERT INTO `scribfly_users` (`scribfly_firstname`, `scribfly_lastname`, `scribfly_emailaddress`, `scribfly_pwd`, `scribfly_lawfirm`, `scribfly_lawfirmaddress`, `scribfly_userrole`) VALUES
('John', 'Doe', 'john.doe@doelawfirms.com', 'f179effb648fb3d1bdd51a25ccd1eb70fa521c7f', 'Doe Law Firms LLC', '100, North Point Circle\r\nAtlanta, GA 30346', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `scribfly_cases`
--
ALTER TABLE `scribfly_cases`
  ADD PRIMARY KEY (`casenumber`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
