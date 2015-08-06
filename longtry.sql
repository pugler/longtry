-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2015 at 07:35 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `longtry`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `album_id` int(11) NOT NULL AUTO_INCREMENT,
  `album_name` varchar(255) NOT NULL,
  `album_description` text NOT NULL,
  `album_model` varchar(255) NOT NULL,
  `album_location` varchar(255) NOT NULL,
  `album_date` datetime NOT NULL,
  `album_create_date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = show, 0 = hide',
  PRIMARY KEY (`album_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`album_id`, `album_name`, `album_description`, `album_model`, `album_location`, `album_date`, `album_create_date`, `status`) VALUES
(1, 'name', 'description', 'model', 'lo', '0000-00-00 00:00:00', '2015-08-06', 1),
(2, 'name', 'description', 'model', 'lo', '0000-00-00 00:00:00', '2015-08-06', 1),
(3, 'name', 'description', 'model', 'lo', '0000-00-00 00:00:00', '2015-08-06', 1),
(4, 'name', 'description', 'model', 'lo', '0000-00-00 00:00:00', '2015-08-06', 1),
(5, 'name', 'description', 'model', 'lo', '0000-00-00 00:00:00', '2015-08-06', 1),
(6, 'name', 'description', 'model', 'lo', '0000-00-00 00:00:00', '2015-08-06', 1),
(7, 'name', 'description', 'model', 'lo', '0000-00-00 00:00:00', '2015-08-06', 1),
(8, 'name', 'description', 'model', 'lo', '0000-00-00 00:00:00', '2015-08-06', 1),
(9, 'name', 'description', 'model', 'lo', '0000-00-00 00:00:00', '2015-08-06', 1),
(10, 'name', 'description', 'model', 'lo', '0000-00-00 00:00:00', '2015-08-06', 1),
(11, 'name', 'description', 'model', 'lo', '0000-00-00 00:00:00', '2015-08-06', 1),
(12, 'name', 'description', 'model', 'lo', '0000-00-00 00:00:00', '2015-08-06', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
