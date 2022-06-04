-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-06-04 13:16:22
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
-- 資料庫： `little_house`
--

-- --------------------------------------------------------

--
-- 資料表結構 `my_house`
--

CREATE TABLE `my_house` (
  `sid` int(11) NOT NULL,
  `member_sid` int(11) NOT NULL,
  `item_sid` int(11) NOT NULL,
  `item_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `contract_time` varchar(50) CHARACTER SET utf8 NOT NULL,
  `contract_txt` varchar(50) CHARACTER SET utf8 NOT NULL,
  `house_status` varchar(50) CHARACTER SET utf8 NOT NULL,
  `pay_time` varchar(50) CHARACTER SET utf8 NOT NULL,
  `see_house_time` varchar(50) CHARACTER SET utf8 NOT NULL,
  `contract_status` varchar(50) CHARACTER SET utf8 NOT NULL,
  `pay_status` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `my_house`
--
ALTER TABLE `my_house`
  ADD PRIMARY KEY (`sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `my_house`
--
ALTER TABLE `my_house`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
