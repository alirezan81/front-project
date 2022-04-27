-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 27, 2022 at 11:59 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `writer` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `role` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `subject` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `content` text COLLATE utf8mb4_persian_ci NOT NULL,
  `cover` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `state` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL DEFAULT 'saved',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `writer`, `role`, `subject`, `content`, `cover`, `state`) VALUES
(4, 'محمد بیک', 'admin', 'cpython', '<h1 style=\"text-align: center;\">توابع پایتون</h1>\r\n<h3>map</h3>\r\n<p><code>&gt;&gt;&gt; map(lambda x: x*2 , [1,2,3,4])</code></p>', '32822.jpg', 'saved'),
(2, 'علیرضا نوروزی', 'admin', 'cpython', 'مفسر', 'alireza.jpg', 'published'),
(3, 'محمد بیک', 'admin', 'کامپایلر', 'asdasdasdasdasdas', '449787.jpg', 'saved'),
(5, 'محمد بیک', 'admin', 'فرمت بندی رشته ها', '<h1 style=\"text-align: center;\">فرمت بندی رشته</h1>\r\n<p style=\"text-align: right;\">فرمت بندی پایتون</p>', '32822.jpg', 'saved');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `description` text COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `email`, `title`, `description`) VALUES
(2, 'alirezan4279@gmail.com', 'بوستان', 'شماره دانشجویی میخام'),
(14, 'alirezan4279@gmail.com', 'بوستان', 'انتخاب واحد به درستی انجام نشده'),
(60, 'alirezan4279@gmail.com', 'پایتون', '55555555555555555');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `section` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `description` text COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `email`, `fullname`, `section`, `title`, `description`) VALUES
(1, 'alirezan4279@gmail.com', 'علیرضا نوروزی', 'مجوز', 'مجوز انتشار', 'دسترسی انتشار مقاله را خواستارم'),
(3, 'alirezan4279@gmail.com', 'علیرضا نوروزی', 'فنی', 'sdadasd', 'asdasdda'),
(4, 'mmd85@gmail.com', 'محمد بیک', 'آموزشی', '7777', '8888');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `gender` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `age` varchar(20) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `edu` varchar(100) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `major` varchar(100) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `role` varchar(100) COLLATE utf8mb4_persian_ci DEFAULT 'user',
  `level` varchar(100) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`,`email`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `email`, `phone`, `gender`, `age`, `city`, `edu`, `major`, `role`, `level`) VALUES
(1, 'alirezan81', '1381', 'علیرضا نوروزی', 'alirezan4279@gmail.com', '09010444279', 'male', '19', 'اصفهان', 'فوق دیپلم', 'نرم افزار', 'admin', 'read-write'),
(2, 'mmd85', '1385', 'محمد بیک', 'mmd85@gmail.com', '09030796881', 'male', '16', '', 'دانش آموز', 'مکاترونیک', 'admin', 'read-write'),
(13, 'maryam64', '1234', 'مریم نوروزی', 'maryamn4073@gmai.com', '09913314073', 'female', NULL, NULL, NULL, NULL, 'user', NULL),
(7, 'matin8171', '1234', 'متینه بیگ', 'matin8171@gmail.com', '09336478834', 'female', '', '', 'دانش آموز', 'مدیريت', 'user', 'read'),
(15, 'mahdigh2980', '1234', 'مهدی قاسمی', 'mahdi.gh200yt@gmail.com', '09162662980', 'male', '', '', 'دیپلم', 'ریاضی', 'user', NULL),
(19, 'torabi82', '1234', 'علیرضا ترابی', 'torabi82@gmail.com', '09202664185', 'male', '', '', 'کارشناسی', 'مشاوره فرهنگیان', 'user', 'read'),
(20, 'pynet81', '1234', 'علی پایتونی', 'alipy81@gmail.com', '09332673954', 'male', '', '', 'مقطع تحصیلی', '', 'admin', 'read-write');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
