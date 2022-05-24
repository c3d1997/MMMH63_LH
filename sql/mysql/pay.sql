-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.3.15

--
-- 資料庫： `test`
--

-- 資料表結構 `pay`
--

CREATE TABLE `pay` (
  `sid` int(11) NOT NULL,
  `items_sid` int(11) NULL,
  `members_sid` int(11) NULL,
  `contract_from_y_m_d` date NOT NULL,
  `contract_end_y_m_d` date NOT NULL,
  `payway` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `categories`
--

INSERT INTO `pay` (`sid`, `contract_from_y_m_d`, `contract_end_y_m_d`, `payway`) VALUES
(1, '2022-07-02', '2023-07-02', '匯款'),
(2, '2022-07-03', '2023-07-03', '信用卡'),
(3, '2022-07-04', '2023-07-04', '信用卡'),
(4, '2022-07-05', '2023-07-05', '信用卡'),
(5, '2022-07-06', '2023-07-06', '匯款'),
(6, '2022-07-07', '2023-07-07', '匯款'),
(7, '2022-07-08', '2023-07-08', '信用卡'),
(8, '2022-07-09', '2023-07-09', '信用卡'),
(9, '2022-07-10', '2023-07-10', '匯款'),
(10,'2022-07-11', '2023-07-11', '匯款');

-- --------------------------------------------------------
