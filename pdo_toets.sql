-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 11, 2022 at 10:08 AM
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
-- Database: `pdo_toets`
--

-- --------------------------------------------------------

--
-- Table structure for table `pizza`
--

DROP TABLE IF EXISTS `pizza`;
CREATE TABLE IF NOT EXISTS `pizza` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bodemformaat` int(11) NOT NULL,
  `saus` varchar(20) NOT NULL,
  `topping` varchar(40) NOT NULL,
  `kruiden` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pizza`
--

INSERT INTO `pizza` (`id`, `bodemformaat`, `saus`, `topping`, `kruiden`) VALUES
(1, 20, 'Tomaten saus', 'Topping1,Topping2, Topping3', 'Kruiden,Kruiden2, Kruiden3,Kruiden4'),
(2, 30, 'Extra tomatensaus', ',Topping2, ', ',Kruiden2, Kruiden3'),
(3, 30, 'Extra tomatensaus', ',Topping2, ', ',Kruiden2, Kruiden3,'),
(4, 30, 'Extra tomatensaus', ',Topping2, ', ',Kruiden2, Kruiden3,'),
(5, 35, 'Spicy tomatensaus', ',Topping2, ', 'Kruiden,Kruiden2, ,'),
(7, 25, 'creme fraiche', 'Topping1,, ', 'Kruiden,, Kruiden3,'),
(8, 25, 'Spicy tomatensaus', ',Topping2, ', ',, Kruiden3,'),
(9, 35, 'BBQ saus', ',, Topping3', 'Kruiden,Kruiden2, ,'),
(10, 25, 'Extra tomatensaus', 'Topping1,, ', ',Kruiden2, Kruiden3,'),
(11, 30, 'Extra tomatensaus', 'Topping1,, ', ',Kruiden2, Kruiden3,');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
