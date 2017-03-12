-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 10, 2017 at 04:28 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `diary`
--

-- --------------------------------------------------------

--
-- Table structure for table `addressbook`
--

CREATE TABLE IF NOT EXISTS `addressbook` (
  `item` int(255) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `age` int(255) NOT NULL,
  `phone` bigint(255) NOT NULL,
  `email` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`item`,`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `addressbook`
--

INSERT INTO `addressbook` (`item`, `id`, `title`, `first_name`, `last_name`, `address`, `age`, `phone`, `email`) VALUES
(3, '170222161049', 'MRS', 'Sarah', 'Jener', '1000 chastain road, kennesaw, GA 31144', 25, 7705567895, 'sjener@jener.com'),
(5, '170222184942', 'MR', 'Lionel Lario', 'Kamdem', '950 Hudson Road', 38, 6995214789, 'lionel@gmail.com'),
(6, '170222185629', 'MRS', 'Gaelle ', 'Komba', 'london', 29, 7452632147, 'gaelle@you.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
