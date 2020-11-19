-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2020 at 06:55 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ruan-gong`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_info`
--

CREATE TABLE `form_info` (
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sID` int(20) NOT NULL,
  `father` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mother` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `family_status` int(1) NOT NULL,
  `mentor_comment` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mentor_sign` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `secretary_verify` int(1) NOT NULL DEFAULT -1,
  `secretary_comment` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `secretary_sign` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `principal_sign` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
