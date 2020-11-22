-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 29, 2017 at 12:18 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `top`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `top` ()  begin select avg(salary) as Average_Salary from staff group by designation ; end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

DROP TABLE IF EXISTS `facilities`;
CREATE TABLE IF NOT EXISTS `facilities` (
  `F_id` varchar(20) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `h_id` varchar(20) NOT NULL,
  PRIMARY KEY (`F_id`,`h_id`),
  KEY `h_id` (`h_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

DROP TABLE IF EXISTS `hotel`;
CREATE TABLE IF NOT EXISTS `hotel` (
  `h_id` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`h_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`h_id`, `name`) VALUES
('H001', 'Lalitha Mahal Palace'),
('H002', 'Royal Orchid Metropole'),
('H003', 'Shiv Vilas Palace'),
('H004', 'Villa Pottipatti'),
('H005', 'Coconut Lagoon Resort'),
('H006', 'Old Courtyard');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `country` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `street` varchar(30) NOT NULL,
  `h_id` varchar(30) NOT NULL,
  `state_id` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`h_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`country`, `state`, `city`, `street`, `h_id`, `state_id`) VALUES
('India', 'Karnataka', 'Hassan', 'BC Road', 'H001', '1'),
('India', 'Karnataka', 'Mysore', 'Jhansi Lakshimibai Road', 'H002', '1'),
('India ', 'Karnataka', 'Bellary', 'Palace Road', 'H003', '1'),
('India', 'Karnataka', 'Malleswaram,Bengaluru', '8th cross,4th Main Road', 'H004', '1'),
('India', 'Kerala', 'Kuttanad', 'Kumarakom', 'H005', '2'),
('India', 'Kerala', 'Kochi', 'Princess St,Fort Kochi', 'H006', '2');

--
-- Triggers `location`
--
DROP TRIGGER IF EXISTS `tk`;
DELIMITER $$
CREATE TRIGGER `tk` BEFORE INSERT ON `location` FOR EACH ROW begin if new.state='karnataka' then set new.state_id=1; ELSEIF new.state='kerala' then set new.state_id=2; end if; end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `room_no` int(20) NOT NULL AUTO_INCREMENT,
  `type` varchar(30) NOT NULL,
  `number` int(20) NOT NULL,
  `cost` float NOT NULL,
  `h_id` varchar(30) NOT NULL,
  PRIMARY KEY (`room_no`),
  KEY `h_id` (`h_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `sid` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `salary` int(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `h_id` varchar(20) NOT NULL,
  PRIMARY KEY (`sid`,`h_id`),
  KEY `h_id` (`h_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`sid`, `name`, `salary`, `designation`, `h_id`) VALUES
('HS001', 'Vignesh', 100000, 'Owner', 'H001'),
('HS001', 'Shrinidhi', 100000, 'Manager', 'H002');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `contact`, `password`) VALUES
('vignesh', 'vignesh@gmail.com', '9876543210', '456'),
('shreehari', 'shreehari@gmail.com', '987456321', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
