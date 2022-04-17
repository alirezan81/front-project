-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 17, 2022 at 02:23 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `writer`, `role`, `subject`, `content`, `cover`, `state`) VALUES
(2, 'علیرضا نوروزی', 'admin', 'cpython', 'مفسر', 'alireza.jpg', 'published');

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
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `email`, `title`, `description`) VALUES
(2, 'alirezan4279@gmail.com', 'بوستان', 'شماره دانشجویی میخام'),
(14, 'alirezan4279@gmail.com', 'بوستان', 'انتخاب واحد به درستی انجام نشده');

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `email`, `fullname`, `section`, `title`, `description`) VALUES
(1, 'alirezan4279@gmail.com', 'علیرضا نوروزی', 'مجوز', 'مجوز انتشار', 'دسترسی انتشار مقاله را خواستارم'),
(3, 'alirezan4279@gmail.com', 'علیرضا نوروزی', 'فنی', 'sdadasd', 'asdasdda');

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
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `email`, `phone`, `gender`, `age`, `city`, `edu`, `major`, `role`, `level`) VALUES
(1, 'alirezan81', '1381', 'علیرضا نوروزی', 'alirezan4279@gmail.com', '09010444279', 'male', '19', 'اصفهان', 'مقطع تحصیلی', 'کامپیوتر', 'admin', 'read'),
(2, 'mmd85', '1385', 'محمد بیک', 'mmd85@gmail.com', '09030796881', 'male', '', '', 'دانش آموز', 'مکاترونیک', 'admin', 'read-write'),
(13, 'maryam64', '1234', 'مریم نوروزی', 'maryamn4073@gmai.com', '09913314073', 'female', NULL, NULL, NULL, NULL, 'user', NULL),
(7, 'matin8171', '1234', 'متینه قجه بیگ', 'matin8171@gmail.com', '09336478834', 'female', '', '', 'دیپلم', '', 'user', NULL),
(15, 'mahdigh2980', '1234', 'مهدی قاسمی', 'mahdi.gh200yt@gmail.com', '09162662980', 'male', NULL, NULL, NULL, NULL, 'user', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
