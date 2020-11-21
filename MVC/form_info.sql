-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `test`
--

-- --------------------------------------------------------

--
-- 資料表結構 `form_info`
--

CREATE TABLE `form_info` (
  `id` int(10) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sID` int(20) NOT NULL,
  `father` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mother` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `family_status` int(1) NOT NULL,
  `mentor_comment` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mentor_sign` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `secretary_verify` int(10) DEFAULT NULL,
  `secretary_comment` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `secretary_sign` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `principal_sign` int(10) DEFAULT NULL,
  `form_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `form_info`
--

INSERT INTO `form_info` (`id`, `name`, `sID`, `father`, `mother`, `family_status`, `mentor_comment`, `mentor_sign`, `secretary_verify`, `secretary_comment`, `secretary_sign`, `principal_sign`, `form_status`) VALUES
(3, '周', 123123, 'assdf', 'qwd1', 1, 'asd', '陳', 123123, 'asd', '金', 1, 4),
(4, '趙', 12312313, 'safadsf', 'adsfadsf', 1, 'asdasd', '陳', -1, 'asdasd', '金', 1, 4),
(5, '趙', 123123, 'assdf', 'afsdfsf', 2, 'asdasd', '陳', 123123, 'asdasd', '金', 2, 4);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `form_info`
--
ALTER TABLE `form_info`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `form_info`
--
ALTER TABLE `form_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
