-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-05-22 18:11:00
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
-- 資料表結構 `additional_charges`
--

CREATE TABLE `additional_charges` (
  `sid` int(11) NOT NULL,
  `Additional_charges` varchar(50) CHARACTER SET utf8 NOT NULL,
  `searchcategory_sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `additional_charges`
--

INSERT INTO `additional_charges` (`sid`, `Additional_charges`, `searchcategory_sid`) VALUES
(1, '水電費', 0),
(2, '網路費', 0),
(3, '第四台', 0),
(4, '清潔費', 0),
(5, '停車費', 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `additional_charges`
--
ALTER TABLE `additional_charges`
  ADD PRIMARY KEY (`sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `additional_charges`
--
ALTER TABLE `additional_charges`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
