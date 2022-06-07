-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-06-07 11:52:44
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
-- 資料庫: `little_house`
--

-- --------------------------------------------------------

--
-- 資料表結構 `detailed_area`
--

CREATE TABLE `detailed_area` (
  `sid` int(11) NOT NULL,
  `detailed_area` varchar(50) CHARACTER SET utf8 NOT NULL,
  `area_sid` int(11) NOT NULL,
  `searchcategory_sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `detailed_area`
--

INSERT INTO `detailed_area` (`sid`, `detailed_area`, `area_sid`, `searchcategory_sid`) VALUES
(1, '板橋區', 0, 0),
(2, '三重區', 0, 0),
(3, '中和區', 0, 0),
(4, '永和區', 0, 0),
(5, '新莊區', 0, 0),
(6, '新店區', 0, 0),
(7, '土城區', 0, 0),
(8, '蘆洲區', 0, 0),
(9, '樹林區', 0, 0),
(10, '汐止區', 0, 0),
(11, '鶯歌區', 0, 0),
(12, '三峽區', 0, 0),
(13, '淡水區', 0, 0),
(14, '瑞芳區', 0, 0),
(15, '五股區', 0, 0),
(16, '泰山區', 0, 0),
(17, '林口區', 0, 0),
(18, '深坑區', 0, 0),
(19, '石碇區', 0, 0),
(20, '坪林區', 0, 0),
(21, '三芝區', 0, 0),
(22, '石門區', 0, 0),
(23, '八里區', 0, 0),
(24, '平溪區', 0, 0),
(25, '雙溪區', 0, 0),
(26, '貢寮區', 0, 0),
(27, '金山區', 0, 0),
(28, '萬里區', 0, 0),
(29, '烏來區', 0, 0),
(30, '北投區', 0, 0),
(31, '士林區', 0, 0),
(32, '內湖區', 0, 0),
(33, '中山區', 0, 0),
(34, '大同區', 0, 0),
(35, '松山區', 0, 0),
(36, '中正區', 0, 0),
(37, '信義區', 0, 0),
(38, '南港區', 0, 0),
(39, '萬華區', 0, 0),
(40, '大安區', 0, 0),
(41, '文山區', 0, 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `detailed_area`
--
ALTER TABLE `detailed_area`
  ADD PRIMARY KEY (`sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `detailed_area`
--
ALTER TABLE `detailed_area`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
