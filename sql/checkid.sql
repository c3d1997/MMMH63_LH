-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-05-27 05:18:20
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
-- 資料表結構 `checkid`
--

CREATE TABLE `checkid` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--

INSERT INTO `checkid` (`id`, `email`, `password`, `mobile`,`create_at`) VALUES
(1, 'ming@gg.com', '7777', '0918222333','2019-01-07 10:39:38'),
(1, 'aaa@qq.com', '8888', '0911111111','2022-05-01 10:39:38'),
(1, 'ming@gg.com', '7777', '0918222333','2022-06-01 10:39:38'),
(1, 'ming@gg.com', '7777', '0918222333','2022-06-02 10:39:38');



