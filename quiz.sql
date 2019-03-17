-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 17, 2019 at 04:43 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `questions_id` int(10) UNSIGNED NOT NULL,
  `name_answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cheking` tinyint(2) NOT NULL DEFAULT '0',
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `questions_id`, `name_answer`, `cheking`, `create_time`, `update_time`) VALUES
(1, 1, 'Bình Ngô Đại Cáo', 0, '2019-03-16 20:48:16', NULL),
(2, 1, 'Hịch Tướng sĩ', 0, '2019-03-16 20:48:16', NULL),
(3, 1, 'Nam Quốc Sơn Hà', 1, '2019-03-16 20:48:16', NULL),
(4, 1, 'Bản Tuyên Ngôn Độc lập 2/9', 0, '2019-03-16 20:48:16', NULL),
(5, 2, 'Không biết', 0, '2019-03-16 20:48:16', NULL),
(6, 2, 'Có thể bằng 2', 1, '2019-03-16 20:48:16', NULL),
(7, 2, 'Chắc bằng 3', 0, '2019-03-16 20:48:16', NULL),
(8, 2, 'Chắc bằng 4', 0, '2019-03-16 20:48:16', NULL),
(9, 3, 'Tôi không biết', 0, '2019-03-17 10:42:38', NULL),
(10, 3, 'Có thể bằng 3', 0, '2019-03-17 10:42:38', NULL),
(11, 3, 'Chắc chắn bằng 6', 1, '2019-03-17 10:42:38', NULL),
(12, 3, 'Có thể bằng 6', 0, '2019-03-17 10:42:38', NULL),
(13, 4, 'Tôi không biết', 0, '2019-03-17 10:42:38', NULL),
(14, 4, 'Có thể bằng 3', 0, '2019-03-17 10:42:38', NULL),
(15, 4, 'Chắc chắn bằng 6', 1, '2019-03-17 10:42:39', NULL),
(16, 4, 'Có thể bằng 6', 0, '2019-03-17 10:42:39', NULL),
(17, 5, 'Tôi không biết', 0, '2019-03-17 10:42:39', NULL),
(18, 5, 'Có thể bằng 3', 0, '2019-03-17 10:42:39', NULL),
(19, 5, 'Chắc chắn bằng 6', 1, '2019-03-17 10:42:39', NULL),
(20, 5, 'Có thể bằng 6', 0, '2019-03-17 10:42:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_question` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `name_question`, `create_time`, `update_time`) VALUES
(1, 'Bản tuyên ngôn độc lập đầu tiên là gì', '2019-03-16 20:40:20', NULL),
(2, 'Một cộng một bằng mấy ? ', '2019-03-16 20:40:20', NULL),
(3, 'Hai cộng hai bằng mấy ? ', '2019-03-16 20:40:21', NULL),
(4, 'Ba cộng ba bằng mấy ? ', '2019-03-16 20:40:21', NULL),
(5, 'Bốn cộng hai bằng mấy ? ', '2019-03-16 20:40:21', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
