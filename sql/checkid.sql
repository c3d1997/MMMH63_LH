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

-- 資料表結構 `checkid`
--

CREATE TABLE `checkid` (
  `sid` int(11) NULL,
  `members_sid` int(11) NULL,
  `email` varchar(255) NOT NULL,
  `checked` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `checkid`
--

INSERT INTO `checkid` (`email`, `checked`) VALUES
('littlehouse6302@gmail.com', 'xx897'),
('chiying0104@gmail.com', '123abc')



