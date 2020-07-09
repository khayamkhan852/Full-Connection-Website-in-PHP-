-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 29, 2020 at 08:43 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment_four`
--
CREATE DATABASE IF NOT EXISTS `assignment_four` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `assignment_four`;

-- --------------------------------------------------------

--
-- Table structure for table `messages_table`
--

DROP TABLE IF EXISTS `messages_table`;
CREATE TABLE IF NOT EXISTS `messages_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `To_Email` tinytext NOT NULL,
  `From_Email` tinytext NOT NULL,
  `Actual_Text_Message` text NOT NULL,
  `Time_of_Message` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `messages_table`
--

INSERT INTO `messages_table` (`id`, `To_Email`, `From_Email`, `Actual_Text_Message`, `Time_of_Message`) VALUES
(1, 'umar@gmail.com', 'khayamkhan852@gmail.com', 'This is Message from Khayam khan', '2020-06-28'),
(2, 'khayamkhan852@gmail.com', 'umar@gmail.com', 'this 1 message from umar', '2020-06-28'),
(3, 'khayamkhan852@gmail.com', 'umar@gmail.com', 'this is 2 message from umar', '2020-06-28'),
(4, 'khayamkhan852@gmail.com', 'umar@gmail.com', 'this is 3 message from umar', '2020-06-28'),
(5, 'khayamkhan852@gmail.com', 'abc@gmail.com', 'this is message from Akmal', '2020-06-28'),
(6, '16pwcse1476@uetpeshawar.edu.pk', 'khayamkhan852@gmail.com', 'this a message from khayam to 16pwcse1476@uetpeshawar.edu.pk', '2020-06-28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `IdUsers` int(11) NOT NULL AUTO_INCREMENT,
  `UidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL,
  PRIMARY KEY (`IdUsers`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`IdUsers`, `UidUsers`, `emailUsers`, `pwdUsers`) VALUES
(2, 'khayam', 'khayamkhan852@gmail.com', '$2y$10$cnlFYOtpqp/lNZa1SbhlFudWt4JsSb2eK15jM.xTi0PRl84uyvcuC'),
(3, 'umar', 'umar@gmail.com', '$2y$10$CS/7t4eRHoQGJWsXvlkcu.jwL2r9VGix/NfZLQkktoPzdsJRwj.bS'),
(4, 'Akmal', 'abc@gmail.com', '$2y$10$SoRoP5EYgqb7Cxi4uWDbk.vImOJGdBetxbK.I2HlppS3kBcp6Grb2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
