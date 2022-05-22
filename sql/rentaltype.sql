-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-05-22 17:52:44
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
-- 資料表結構 `rentaltype`
--

CREATE TABLE `rentaltype` (
  `sid` int(11) NOT NULL,
  `options` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `searchcategory_sid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `rentaltype`
--

INSERT INTO `rentaltype` (`sid`, `options`, `searchcategory_sid`) VALUES
(1, '共生', 1),
(2, '分租', 1),
(3, '不限', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `rentaltype`
--
ALTER TABLE `rentaltype`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `searchcategory_sid` (`searchcategory_sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `rentaltype`
--
ALTER TABLE `rentaltype`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `rentaltype`
--
ALTER TABLE `rentaltype`
  ADD CONSTRAINT `rentaltype_ibfk_1` FOREIGN KEY (`searchcategory_sid`) REFERENCES `searchcategory` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
