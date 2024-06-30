-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2024 年 6 月 30 日 11:36
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `kadai_db_survey`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `survey_responses`
--

CREATE TABLE `survey_responses` (
  `id` int(11) NOT NULL,
  `student_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `grade` int(11) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `learning_preferences` text DEFAULT NULL,
  `issues` text DEFAULT NULL,
  `desired_features` text DEFAULT NULL,
  `strengths` varchar(255) DEFAULT NULL,
  `weaknesses` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `survey_responses`
--

INSERT INTO `survey_responses` (`id`, `student_id`, `name`, `grade`, `department`, `learning_preferences`, `issues`, `desired_features`, `strengths`, `weaknesses`) VALUES
(1, '0001', 'yuki', 1, '1', '[\"教科\"]', '[\"理解が難しい\"]', '[\"必要な時にいつでも使える\"]', 'cooking', 'sawing'),
(2, '0001', 'yuki', 1, '1', '[\"教科\"]', '[\"理解が難しい\"]', '[\"必要な時にいつでも使える\"]', 'cooking', 'sawing'),
(3, '0002', 'hikaru', 2, '2', '[\"実験・実習\"]', '[\"課題が提出できない\"]', '[\"アクセスが簡単\"]', '動画撮影', '対話'),
(4, '0003', 'mitsu', 3, '2', '[\"実験・実習\"]', '[\"何をするべきかわからない\"]', '[\"アクセスが簡単\"]', 'プログラミング', '探し物'),
(5, '0004', 'neko', 4, '4', '[\"研究\"]', '[\"課題が提出できない\"]', '[\"必要な時にいつでも使える\"]', 'amae', 'souonn'),
(6, '0005', 'yukiyuki', 5, 'M', '[\"実験・実習\"]', '[\"課題が提出できない\"]', '[\"必要な時にいつでも使える\"]', 'プログラミング', '英語'),
(7, '0006', 'aiaiai', 3, 'M', '[\"実験・実習\"]', '[\"何をするべきかわからない\"]', '[\"アクセスが簡単\"]', '数学', '物理'),
(8, '0007', 'aiaiai', 2, 'E', '[\"教科\"]', '[\"理解が難しい\"]', '[\"必要な時にいつでも使える\"]', '数学', '探し物'),
(9, '0008', 'yukiyuki', 1, 'D', '[\"実験・実習\"]', '[\"理解が難しい\"]', '[\"アクセスが簡単\"]', '数学', '英語'),
(10, '0009', 'yuki', 2, 'J', '[\"教科\"]', '[\"理解が難しい\"]', '[\"必要な時にいつでも使える\"]', 'プログラミング', '対話');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `survey_responses`
--
ALTER TABLE `survey_responses`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `survey_responses`
--
ALTER TABLE `survey_responses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
