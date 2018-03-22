-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-03-03 18:01:56
-- 伺服器版本: 10.1.30-MariaDB
-- PHP 版本： 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `proj51`
--

-- --------------------------------------------------------

--
-- 資料表結構 `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `hash` varchar(255) NOT NULL,
  `activated` int(11) NOT NULL DEFAULT '0',
  `nickname` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `members`
--

INSERT INTO `members` (`id`, `email`, `password`, `mobile`, `address`, `birthday`, `hash`, `activated`, `nickname`, `create_at`) VALUES
(1, 'afkjdlnj@gjalg.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '0955555555', '宜蘭市', '2018-02-20', 'eaefd9d8cf006b056a792bbf97f71bc5fdf9d6af', 0, 'q23b', '2018-02-07 10:07:33'),
(4, '2jljgl3@galkjlg.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '0938888888', '雲林縣', '2000-02-20', 'edb3f7c2fe81fc9b3e34334cc3e4207e1fe53b6c', 0, 'alwvk', '2018-02-07 10:15:33'),
(5, '223jljgl3@galkjlg.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '0938888888', '雲林縣', '2000-02-20', '262bbc6235668f0b6d4ea4f369c2f1986b74d7f3', 0, 'alwvk', '2018-02-07 10:36:16'),
(6, 'abc@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '023', '', '0000-00-00', '408b4d2e2dd77fa24fd1d341d4afc2d732033ea4', 0, 'abc', '2018-02-08 10:01:24'),
(8, 'abc123@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '', '0000-00-00', '9b75a5800ead3d9e1d8d5bea2d829dbdc40f9f91', 0, 'abc', '2018-03-03 23:32:25');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
