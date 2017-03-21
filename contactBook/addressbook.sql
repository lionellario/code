-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- --------------------------------------------------------

--
-- Table structure for table `addressbook`
--

CREATE TABLE `addressbook` (
  `item` int(255) NOT NULL,
  `id` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `phone` bigint(255) NOT NULL,
  `email` varchar(255) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Indexes for table `addressbook`
--
ALTER TABLE `addressbook`
  ADD PRIMARY KEY (`item`,`id`);

--
-- Dumping data for table `addressbook`
--

INSERT INTO `addressbook` (`item`, `id`, `title`, `first_name`, `last_name`, `address`, `occupation`, `phone`, `email`) VALUES
(1, '170222161049', 'MR.', 'Lionel', 'Kamdem', '1000 chastain road, kennesaw, GA 31144', 'Software Engineer', 4706990725, 'lionel@gmail.com');
