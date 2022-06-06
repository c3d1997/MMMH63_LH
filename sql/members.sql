-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-06-06 12:43:38
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
-- 資料表結構 `members`
--

CREATE TABLE `members` (
  `sid` int(11) NOT NULL,
  `id` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `EngName` varchar(255) DEFAULT NULL,
  `Id_number` varchar(255) DEFAULT NULL,
  `Pass_num` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `Area` varchar(255) NOT NULL,
  `Dist` varchar(255) NOT NULL,
  `Add` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Introduce` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `members`
--

INSERT INTO `members` (`sid`, `id`, `name`, `EngName`, `Id_number`, `Pass_num`, `email`, `mobile`, `Area`, `Dist`, `Add`, `Password`, `Introduce`, `created_at`) VALUES
(1, 'A1556655', '彭世豪', NULL, 'B294354724', NULL, 'bosebawi@gmail.com', '0968881277', '新北市', '樹林區', '田尾街17號', '123', '韓愈說過一句富有哲理的話，不塞不流，不止不行。希望各位能用心體會這段話。我以為我了解興趣，但我真的了解興趣嗎？仔細想想，我對興趣的理解只是皮毛而已。貝蒂在不經意間這樣說過，大家都不聽謊言，說謊的人也就絕跡了。', '2020-04-06 16:31:02'),
(2, 'A1556656', '滕孟軒', NULL, 'H192818569', NULL, 'wetozulo@gmail.com', '0952524903', '高雄市', '前鎮區', '管仲路2號', '456', '不下功夫，卻能成功，根本是不可能的事情。這是撼動人心的。在人類的歷史中，我們總是盡了一切努力想搞懂興趣。我們不妨可以這樣來想: 興趣的存在，令我無法停止對他的思考。', '2020-04-06 16:31:02'),
(3, 'A1556657', '張佳穎', NULL, 'F292004896', NULL, 'lawoxigu@gmail.com', '0954536994', '花蓮縣', '萬榮鄉', '西林9號', '789', '我們都知道，只要有意義，那麼就必須慎重考慮。巴金說過一句著名的話，寒冷寂寞的生，卻不如轟轟烈烈的死。這段話對世界的改變有著深遠的影響。我們都很清楚，這是個嚴謹的議題。', '2020-04-06 16:31:02'),
(4, 'A1556658', '劉宜文', NULL, 'B296789565', NULL, 'hutimewo@gmail.com', '0919232753', '雲林縣', '元長鄉', '文明街17號', '1100', '既然如此，這是不可避免的。總結來說，對我個人而言，房子不僅僅是一個重大的事件，還可能會改變我的人生。', '2020-04-06 16:31:02'),
(5, 'A1556659', '余宜芳', NULL, 'H193630023', NULL, 'sanofeye@gmail.com', '0988476081', '臺南市', '歸仁區', '文化五街18號', '1111', '松下幸之助講過，勤勞工作、誠懇待人是邁向成功的唯一途徑。這與沒有嚐過辛苦，而獲得成功的滋味迥然不同。不下功夫，卻能成功，根本是不可能的事情。這是撼動人心的。在人類的歷史中，我們總是盡了一切努力想搞懂興趣。我們不妨可以這樣來想: 興趣的存在，令我無法停止對他的思考。', '2020-04-06 16:31:02'),
(6, 'A1556660', '汪威廷', NULL, 'D295962688', NULL, 'ruvaguve@gmail.com', '0982290154', '桃園市', '大園區', '園航路30號', '2222', '卻不如轟轟烈烈的死。這段話對世界的改變有著深遠的影響。我們都很清楚，這是個嚴謹的議題。', '2020-04-06 16:31:02'),
(7, 'A1556661', NULL, 'Willie Douglas Davis', NULL, 'AC24912251', 'voraguca@gmail.com', '0953785113', '新北市', '萬里區', '孝三街22號', '3333', 'My name is Willie Douglas Davis, I was born in Taiwan, on January 1st, 1989. I spent my childhood and school years there. I have one sibling. . My father is a/an engineer and my mother is a/an accountant. As a student, I tried to get good grades at school', '2020-04-06 16:31:02'),
(8, 'A1556662', NULL, 'Wilma Harrison Graves', NULL, 'AC14949031', 'girizexu@gmail.com', '0939473797', '臺中市', '大雅區', '春亭一街13號', '4444', 'My name is Wilma Harrison Graves, I was born in Taiwan, on January 1st, 1989. I spent my childhood and school years there. I have one sibling. . My father is a/an engineer and my mother is a/an accountant. As a student, I tried to get good grades at schoo', '2020-04-06 16:31:02'),
(9, 'A1556663', NULL, 'Armie Hammer', NULL, 'AC02540180', 'rixodeni@gmail.com', '0927508036', '臺南市', '永康區', '永科北路10號', '5555', 'My name is Armie Hammer, I was born in Taiwan, on January 1st, 1989. I spent my childhood and school years there. I have one sibling. . My father is a/an engineer and my mother is a/an accountant. As a student, I tried to get good grades at school. Histor', '2020-04-06 16:31:02'),
(10, 'A1556664', NULL, 'Ronald C. Jacobs', NULL, 'AC58344356', 'zafefeyu@gmail.com', '0953893117', '臺中市', '南屯區', '文心南九路7號', '6666', 'My name is Ronald C. Jacobs, I was born in Taiwan, on January 1st, 1989. I spent my childhood and school years there. I have one sibling. . My father is a/an engineer and my mother is a/an accountant. As a student, I tried to get good grades at school. Hi', '2020-04-06 16:31:02');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `members`
--
ALTER TABLE `members`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
