-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2019-06-13 07:42:31
-- 伺服器版本: 5.7.17-log
-- PHP 版本： 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `phpproject`
--

-- --------------------------------------------------------

--
-- 資料表結構 `borrowed`
--

CREATE TABLE `borrowed` (
  `stu_ID` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `stu_mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stu_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `e_type` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `borrowed`
--

INSERT INTO `borrowed` (`stu_ID`, `stu_mail`, `stu_name`, `e_type`, `id`) VALUES
('a1063399', 'cutesoldier@gmail.com', 'Cute Soldier', '輪椅', 1),
('a1063399', 'cutesoldier@gmail.com', 'Cute Soldier', '拐杖', 2),
('a1063395', 'black@gmail.com', '', '輪椅', 6),
('a1063397', 'cutesoldier@gmail.com', '張芷玲', '輪椅', 7),
('a1063397', 'cutesoldier@gmail.com', '張芷玲', '熱敷袋', 8),
('a1063396', 'leg@gmail.com', '張芷玲', '輪椅', 9),
('a1063396', 'leg@gmail.com', '張芷玲', '輪椅', 10),
('a1063398', 'lebronjames@gmail.com', '張芷玲', '輪椅', 11),
('a1063399', 'cutesoldier@gmail.com', '張芷玲', '拐杖', 12),
('a1063395', 'black@gmail.com', '張芷玲', '輪椅', 13),
('a1063395', 'black@gmail.com', '張芷玲', '輪椅', 14),
('a1063395', 'black@gmail.com', '張芷玲', '輪椅', 15),
('a1063394', 'wen@gmail.com', '張芷玲', '拐杖', 16);

-- --------------------------------------------------------

--
-- 資料表結構 `equipment`
--

CREATE TABLE `equipment` (
  `e_number` int(5) NOT NULL,
  `e_type` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `available` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `e_No` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `equipment`
--

INSERT INTO `equipment` (`e_number`, `e_type`, `available`, `e_No`) VALUES
(9, '床', 'n', 1),
(4, '拐杖', 'y', 2),
(2, '熱敷袋', 'y', 3),
(3, '聽診器', 'n', 4),
(8, '血壓測量機', 'n', 5),
(6, '輪椅', 'y', 6);

-- --------------------------------------------------------

--
-- 資料表結構 `medicament`
--

CREATE TABLE `medicament` (
  `med_amount` int(5) NOT NULL,
  `med_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `med_type` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `medicament`
--

INSERT INTO `medicament` (`med_amount`, `med_name`, `med_type`, `id`) VALUES
(0, '優碘', '藥品', 111),
(9, '繃帶', '消耗品', 112),
(9, '食鹽水', '消耗品', 113);

-- --------------------------------------------------------

--
-- 資料表結構 `tb2`
--

CREATE TABLE `tb2` (
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `tb2`
--

INSERT INTO `tb2` (`message`, `id`) VALUES
('123', 7),
('123', 8),
('你們的保健室阿姨好正', 9),
('孫子淵哈哈', 10);

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `user_account` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `users`
--

INSERT INTO `users` (`user_account`, `user_password`, `user_name`, `user_email`, `user_phone`) VALUES
('a1063314', 'a1063314', 'cutesoldier', 'a1063314@mail.nuk.edu.tw', 922120287),
('a1063322', 'a1063322', 'legbro', 'a1063322@mail.nuk.edu.tw', 922120286),
('a1063334', 'a1063334', 'wenting', 'a1063334@mail.nuk.edu.tw', 922120288);

-- --------------------------------------------------------

--
-- 資料表結構 `visitor`
--

CREATE TABLE `visitor` (
  `ID` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `gender` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `visitor_email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `in_type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `in_location` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `vid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `visitor`
--

INSERT INTO `visitor` (`ID`, `name`, `gender`, `visitor_email`, `in_type`, `in_location`, `time`, `vid`) VALUES
('a1063395', '張芷玲', 'm', 'black@gmail.com', '睡死', '男廁', '2019-06-10', 1),
('a1063396', 'leg', 'w', 'leg@gmail.com', '睡死', '女廁', '2019-06-01', 2),
('a1063397', '可愛小兵', 'm', 'cutesoldier@gmail.com', '中暑', '操場', '2017-12-03', 3),
('a1063398', 'LeBron', 'm', 'lebronjames@gmail.com', '拉傷', '體育場', '2018-12-02', 4),
('a1063399', 'Cute Soldier', 'm', 'cutesoldier@gmail.com', '睡死', '家裡', '2016-10-09', 5),
('a1063394', 'wen', 'm', 'wen@gmail.com', '拉傷', '家裡', '2009-12-02', 7),
('a1063393', '海綿寶寶', 'm', 'www@gmail.com', '睡死', '操場', '2019-02-13', 11),
('a1063393', ':)', 'm', 'wdcfsev@dkowcfev', '拉傷', '男廁', '2019-06-05', 14);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `borrowed`
--
ALTER TABLE `borrowed`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`e_No`);

--
-- 資料表索引 `medicament`
--
ALTER TABLE `medicament`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `tb2`
--
ALTER TABLE `tb2`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_account`);

--
-- 資料表索引 `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`vid`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `borrowed`
--
ALTER TABLE `borrowed`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- 使用資料表 AUTO_INCREMENT `equipment`
--
ALTER TABLE `equipment`
  MODIFY `e_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用資料表 AUTO_INCREMENT `tb2`
--
ALTER TABLE `tb2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- 使用資料表 AUTO_INCREMENT `visitor`
--
ALTER TABLE `visitor`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
