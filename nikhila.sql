-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2017 at 04:23 AM
-- Server version: 5.7.11
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nikhila`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `user_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`user_id`, `password`) VALUES
('a007', 'admin'),
('a007', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admin_report`
--

CREATE TABLE `admin_report` (
  `to` varchar(20) NOT NULL,
  `message` varchar(500) NOT NULL,
  `one` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_report`
--

INSERT INTO `admin_report` (`to`, `message`, `one`) VALUES
('rishabh', 'OK rishabh, we are seeing your case. ', 2),
('MANOHAR', 'ok manohar lets meet at 9:00 am tomorrow.', 1),
('Rishabh', 'rishabh we r on u case', 2),
('Rishabh', 'Thief was caught.', 1),
('rishabh', 'we got the thief', 1),
('rishabh', 'we got the thief', 1),
('', '', 1),
('harsha', 'hi harsha,\r\nwe are on your case.', 2),
('alekhya', 'we r on ur case.we will find it soon', 2),
('alekhya', 'u r case is done', 1),
('gowthami', 'yes gowthami we on the way...', 2),
('gowthami', 'solved', 1),
('gowthami', 'weef', 2),
('gowthami', 'solved', 1),
('gowthami', 'we r working ', 2),
('gowthami', 'solved', 1),
('anusha', 'we have got him', 1),
('anusha', 'we got the chain snatcher', 1),
('gopi', 'yes ok', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fire_login`
--

CREATE TABLE `fire_login` (
  `user_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fire_login`
--

INSERT INTO `fire_login` (`user_id`, `password`) VALUES
('f007', 'fire'),
('f007', 'fire');

-- --------------------------------------------------------

--
-- Table structure for table `fire_report`
--

CREATE TABLE `fire_report` (
  `firstname` varchar(20) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fire_report`
--

INSERT INTO `fire_report` (`firstname`, `message`) VALUES
('nikhila', 'There is a fire accident in TT 3rd floor.');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_login`
--

CREATE TABLE `hospital_login` (
  `user_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital_login`
--

INSERT INTO `hospital_login` (`user_id`, `password`) VALUES
('h007', 'hospital'),
('h007', 'hospital');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_report`
--

CREATE TABLE `hospital_report` (
  `firstname` varchar(20) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital_report`
--

INSERT INTO `hospital_report` (`firstname`, `message`) VALUES
('anusha', 'I want an appointment for dental treatment on tuesday 3:00 pm.');

-- --------------------------------------------------------

--
-- Table structure for table `police_login`
--

CREATE TABLE `police_login` (
  `user_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police_login`
--

INSERT INTO `police_login` (`user_id`, `password`) VALUES
('p007', 'police'),
('p007', 'police'),
('p007', 'police');

-- --------------------------------------------------------

--
-- Table structure for table `police_report`
--

CREATE TABLE `police_report` (
  `firstname` varchar(20) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police_report`
--

INSERT INTO `police_report` (`firstname`, `message`) VALUES
('asdasfsa', 'asfasf'),
('nikhila', 'robbery happened'),
('harsha', 'dear sir,\r\ni lost my mobile \r\nname:samsung note 4\r\ncolor:black ');

-- --------------------------------------------------------

--
-- Table structure for table `rental_login`
--

CREATE TABLE `rental_login` (
  `user_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rental_login`
--

INSERT INTO `rental_login` (`user_id`, `password`) VALUES
('r007', 'rental'),
('r007', 'rental');

-- --------------------------------------------------------

--
-- Table structure for table `rental_report`
--

CREATE TABLE `rental_report` (
  `firstname` varchar(20) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rental_report`
--

INSERT INTO `rental_report` (`firstname`, `message`) VALUES
('nikhila', 'i need a room in vit guesthouse.\r\nmy parents are coming on this weekend 17th.'),
('gowthami', 'wsr');

-- --------------------------------------------------------

--
-- Table structure for table `uni_admin`
--

CREATE TABLE `uni_admin` (
  `Name` varchar(20) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `radio` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uni_admin`
--

INSERT INTO `uni_admin` (`Name`, `Message`, `radio`) VALUES
('gowthami', 'solved', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_report`
--

CREATE TABLE `user_report` (
  `name` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_report`
--

INSERT INTO `user_report` (`name`, `message`) VALUES
('quibber', 'hii'),
('quibber123', 'data test'),
('quibber1', 'we have problem with traffic in vellore green circle.'),
('veeru', 'there a gas leak near my home, street 1.'),
('anu', 'jgvdjsvcsvciw'),
('anu', 'fire accident'),
('anusha', 'fire accident'),
('nikhila', 'sdsadfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `usr_login`
--

CREATE TABLE `usr_login` (
  `username` int(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usr_login`
--

INSERT INTO `usr_login` (`username`, `password`, `email`) VALUES
(1234567890, 'sravan', 'ksravan605@gmail.com'),
(12345, '12345', 'anushapallempati01@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usr_login`
--
ALTER TABLE `usr_login`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
