-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 24, 2013 at 11:59 PM
-- Server version: 5.5.25a
-- PHP Version: 5.3.15

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cytracom`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `itemTypeId` int(11) NOT NULL,
  `itemNumber` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `showOnProposal` tinyint(1) NOT NULL,
  `isRecurring` tinyint(1) NOT NULL,
  `glCodeId` int(11) NOT NULL,
  `sortIndex` int(11) NOT NULL,
  `includedMinutes` int(11) NOT NULL,
  `transTypeCode` int(11) NOT NULL,
  PRIMARY KEY (`itemTypeId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemTypeId`, `itemNumber`, `title`, `description`, `price`, `showOnProposal`, `isRecurring`, `glCodeId`, `sortIndex`, `includedMinutes`, `transTypeCode`) VALUES
(1, 'product-12345', 'ItemTitle', 'SomeDescription', 150, 1, 1, 1, 1, 1500, 1),
(2, 'product-8383', 'my title', 'product description', 150, 0, 0, 1, 1, 1000, 1),
(3, 'product-12345', 'ItemTitle', 'SomeDescription', 150, 1, 1, 1, 1, 1500, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
