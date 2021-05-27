-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-05-27 06:04:05
-- 伺服器版本： 10.4.18-MariaDB
-- PHP 版本： 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `onetemple`
--

-- --------------------------------------------------------

--
-- 資料表結構 `like_shop`
--

CREATE TABLE `like_shop` (
  `sid` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `like_shop`
--

INSERT INTO `like_shop` (`sid`, `member_id`, `shop_id`, `created_at`) VALUES
(4, 1, 5, '2021-05-25 23:11:12'),
(6, 1, 29, '2021-05-25 23:15:56'),
(7, 1, 24, '2021-05-25 23:15:58'),
(8, 1, 26, '2021-05-25 23:15:59'),
(9, 1, 34, '2021-05-25 23:19:19'),
(10, 1, 33, '2021-05-25 23:19:21'),
(11, 1, 6, '2021-05-25 23:45:47'),
(14, 1, 32, '2021-05-26 16:27:20'),
(15, 1, 1, '2021-05-26 23:34:45');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `like_shop`
--
ALTER TABLE `like_shop`
  ADD PRIMARY KEY (`sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `like_shop`
--
ALTER TABLE `like_shop`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
