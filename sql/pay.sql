-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-06-07 11:53:31
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
-- 資料表結構 `pay`
--

CREATE TABLE `pay` (
  `sid` int(11) NOT NULL,
  `items_sid` int(11) DEFAULT NULL,
  `members_sid` int(11) DEFAULT NULL,
  `contract_from_y_m_d` date NOT NULL,
  `contract_end_y_m_d` date NOT NULL,
  `payway` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `pay`
--

INSERT INTO `pay` (`sid`, `items_sid`, `members_sid`, `contract_from_y_m_d`, `contract_end_y_m_d`, `payway`) VALUES
(1, NULL, NULL, '2022-07-02', '2023-07-02', '匯款'),
(2, NULL, NULL, '2022-07-03', '2023-07-03', '信用卡'),
(3, NULL, NULL, '2022-07-04', '2023-07-04', '信用卡'),
(4, NULL, NULL, '2022-07-05', '2023-07-05', '信用卡'),
(5, NULL, NULL, '2022-07-06', '2023-07-06', '匯款'),
(6, NULL, NULL, '2022-07-07', '2023-07-07', '匯款'),
(7, NULL, NULL, '2022-07-08', '2023-07-08', '信用卡'),
(8, NULL, NULL, '2022-07-09', '2023-07-09', '信用卡'),
(9, NULL, NULL, '2022-07-10', '2023-07-10', '匯款'),
(10, NULL, NULL, '2022-07-11', '2023-07-11', '匯款');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
