-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2017 at 12:21 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fest`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`event_id`),
  UNIQUE KEY `event_id` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id` varchar(20) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`username`, `password`, `id`, `phone_no`, `email_id`) VALUES
('sekhar', 'sekhar@123', '123', '8142686266', 'j.somsekhar007@gmail'),
('qefqe', '456', '45', '456', 'ikj'),
('daf', '123', '455', '6565', '54'),
('efaef', '123', 'bub', 'nun', 'junujn'),
('jasb', '123', 'igiou', 'jgug', 'ghio'),
('45', 'qwertyu', 'qwertyu', '8142686266', 'j.somsekhar007@gmail'),
('45', '456', 'uybgy', 'yvgy', 'yugyg'),
('efaef', '123', 'weqetwr', 'nunbhbyb', 'jnnijij');

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE IF NOT EXISTS `student_data` (
  `id` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `event_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `team_id` int(11) NOT NULL AUTO_INCREMENT,
  `leader_id` varchar(10) NOT NULL,
  `event_id` int(11) NOT NULL,
  `team_name` varchar(255) NOT NULL,
  `member_1` varchar(10) NOT NULL,
  `member_2` varchar(10) NOT NULL,
  `member_3` varchar(10) NOT NULL,
  `member_4` varchar(10) NOT NULL,
  `member_5` varchar(10) NOT NULL,
  PRIMARY KEY (`team_id`,`leader_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`team_id`, `leader_id`, `event_id`, `team_name`, `member_1`, `member_2`, `member_3`, `member_4`, `member_5`) VALUES
(1, '45', 2, 'www', '1', '2', '3', '4', '5');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
