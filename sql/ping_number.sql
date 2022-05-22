-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-05-22 18:06:05
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `mmmh57`
--

-- --------------------------------------------------------

--
-- 資料表結構 `ping_number`
--

CREATE TABLE `ping_number` (
  `sid` int(11) NOT NULL,
  `ping_number` varchar(50) CHARACTER SET utf8 NOT NULL,
  `searchcategory_sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `ping_number`
--

INSERT INTO `ping_number` (`sid`, `ping_number`, `searchcategory_sid`) VALUES
(1, '1-5坪', 0),
(2, '5-10坪', 0),
(3, '10-15坪', 0),
(4, '15-20坪', 0),
(5, '不限坪數', 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `ping_number`
--
ALTER TABLE `ping_number`
  ADD PRIMARY KEY (`sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `ping_number`
--
ALTER TABLE `ping_number`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;