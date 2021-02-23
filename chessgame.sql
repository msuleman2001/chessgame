-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 23, 2021 at 08:37 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chessgame`
--

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

DROP TABLE IF EXISTS `player`;
CREATE TABLE IF NOT EXISTS `player` (
  `player_id` int(11) NOT NULL AUTO_INCREMENT,
  `player_name` varchar(100) NOT NULL,
  `player_email` varchar(100) NOT NULL,
  `player_password` varchar(100) NOT NULL,
  `player_country` varchar(30) NOT NULL,
  `player_image` varchar(500) NOT NULL,
  `player_date_created` datetime NOT NULL,
  `remarks` varchar(200) NOT NULL,
  PRIMARY KEY (`player_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`player_id`, `player_name`, `player_email`, `player_password`, `player_country`, `player_image`, `player_date_created`, `remarks`) VALUES
(1, 'xyz@xyz.com', 'xyz@xyz.com', '123', 'USA', 'avatar-1.png', '2021-02-23 08:28:22', 'New Member'),
(2, 'kkk@kkk.com', 'kkk@kkk.com', '321', 'USA', 'avatar-1.png', '2021-02-23 08:29:43', 'New Member');

-- --------------------------------------------------------

--
-- Table structure for table `player_login`
--

DROP TABLE IF EXISTS `player_login`;
CREATE TABLE IF NOT EXISTS `player_login` (
  `player_login_id` int(11) NOT NULL AUTO_INCREMENT,
  `player_id` int(11) NOT NULL,
  `last_seen` datetime NOT NULL,
  `time_elapsed` varchar(20) NOT NULL,
  `remarks` varchar(300) NOT NULL,
  PRIMARY KEY (`player_login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
