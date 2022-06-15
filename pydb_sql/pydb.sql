-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 15, 2022 at 08:22 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

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
  `id` int NOT NULL AUTO_INCREMENT,
  `writer` int NOT NULL,
  `subject` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `time` int NOT NULL,
  `cover` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `state` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL DEFAULT 'saved',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `writer`, `subject`, `content`, `time`, `cover`, `state`) VALUES
(4, 1, 'Functions', '<h1 style=\"text-align: center;\">توابع پایتون</h1>\r\n<h3>map</h3>\r\n<p><code>&gt;&gt;&gt; map(lambda x: x*2 , [1,2,3,4])</code></p>', 12, 'fun-py.jpg', 'published'),
(6, 7, 'Common Errors', '<h2 style=\"text-align: center;\">خطا های رایج در پایتون</h2>', 10, 'error-py.png', 'published'),
(5, 19, 'Map & Filter & Reduce', '<h1 style=\"text-align: center;\">Map &amp; Filter &amp; Reduce</h1>\r\n<p style=\"text-align: right;\">فرمت بندی پایتون</p>', 20, 'mfr-py.png', 'published'),
(7, 1, 'Cpython', '<p style=\"text-align: center;\">یکی از مفسر های پایتون</p>', 20, 'cython_logo.webp', 'published'),
(8, 20, 'List Comprehension', '<h2 style=\"text-align: right;\">خلاصه لیست یا لیست ساز</h2>\n<p style=\"text-align: right;\">مثال شماره یک: تولید لیست کپیتال اسامی لیست</p>\n<p><img class=\"post-img\" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"images/list_comprehension_1\" alt=\"\"></p>\n<p style=\"text-align: right;\">مثال شماره دو: تولید لیست دو بعدی تجزیه کننده ی کاراکتر ها به صورت آپر کیس</p>\n<p><img class=\"post-img\" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"images/list_comprehension_2.png\" alt=\"\"></p>\n<p style=\"text-align: right;\">مثال شماره سه: به مثال زیر توجه کنید. با دو تا مثال بالا متفاوته</p>\n<p><img class=\"post-img\" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"images/list_comprehension_3.png\" alt=\"\"></p>\n<p style=\"text-align: right;\">مثال شماره چهارم: درک بهتر مثال بالا</p>\n<p><img class=\"post-img\" style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"images/list_comprehension_4.png\" alt=\"\"></p>\n<p>&nbsp;</p>', 15, 'lc-py.png', 'published'),
(10, 13, 'F-String', '<h2 style=\"text-align: center;\">فرمت بندی رشته ها با f-string</h2>', 10, 'fs-py.png', 'published');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `email`, `title`, `description`) VALUES
(2, 'alirezan4279@gmail.com', 'بوستان', 'شماره دانشجویی میخام'),
(14, 'alirezan4279@gmail.com', 'بوستان', 'انتخاب واحد به درستی انجام نشده'),
(61, 'maryamn4073@gmai.com', 'مجوز انتشار', 'سلام و وقت بخیر. بنده برای زمینه اندروید با پایتون مزخرف درخواست مجوز انتشار دارم اگر امکانش هست که بده بزنیم...');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sender` int NOT NULL,
  `section` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `sender`, `section`, `title`, `description`) VALUES
(1, 7, 'مجوز', 'مجوز انتشار', 'دسترسی انتشار مقاله را خواستارم'),
(3, 7, 'فنی', 'sdadasd', 'asdasdda'),
(4, 13, 'آموزشی', '7777', '8888'),
(5, 1, 'فنی', 'مهاجر', 'کلاس های حضوری');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `fullname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `phone` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `gender` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL,
  `age` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `city` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `edu` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `major` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `role` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT 'user',
  `level` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci NOT NULL DEFAULT 'normal',
  PRIMARY KEY (`id`,`email`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `email`, `phone`, `gender`, `age`, `city`, `edu`, `major`, `role`, `level`, `status`) VALUES
(1, 'alirezan81', '1381', 'علیرضا نوروزی', 'alirezan4279@gmail.com', '09010444279', 'male', '20', 'اصفهان', 'فوق دیپلم', 'نرم افزار', 'admin', 'read-write', 'normal'),
(13, 'maryam64', '1234', 'مریم نوروزی', 'maryamn4073@gmai.com', '09913314073', 'female', '', '', 'مقطع تحصیلی', '', 'user', 'read', 'normal'),
(7, 'matin8171', '1234', 'متینه بیگ', 'matin8171@gmail.com', '09336478834', 'female', '19', 'گلپایگان', 'دیپلم', 'مدیريت', 'user', 'read', 'normal'),
(19, 'torabi82', '1234', 'علیرضا ترابی', 'torabi82@gmail.com', '09202664185', 'male', '', '', 'کارشناسی', 'مشاوره فرهنگیان', 'user', 'read', 'normal'),
(20, 'pynet81', '1234', 'علی پایتونی', 'alipy81@gmail.com', '09332673954', 'male', '', '', 'مقطع تحصیلی', '', 'user', 'read-write', 'normal');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
