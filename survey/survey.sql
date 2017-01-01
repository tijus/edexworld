-- phpMyAdmin SQL Dump
-- version 4.4.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2016 at 07:36 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `class` varchar(10) NOT NULL,
  `school` varchar(250) NOT NULL,
  `society` varchar(250) NOT NULL,
  `area` varchar(250) NOT NULL,
  `q1` int(11) NOT NULL,
  `q2` int(11) NOT NULL,
  `q3` int(11) NOT NULL,
  `q4` int(11) NOT NULL,
  `q5` int(11) NOT NULL,
  `q6` int(11) NOT NULL,
  `q7` int(11) NOT NULL,
  `q8` int(11) NOT NULL,
  `q9` int(11) NOT NULL,
  `q10` int(11) NOT NULL,
  `q11` int(11) NOT NULL,
  `q12` int(11) NOT NULL,
  `q13` int(11) NOT NULL,
  `q14` int(11) NOT NULL,
  `q15` int(11) NOT NULL,
  `q16` int(11) NOT NULL,
  `q17` int(11) NOT NULL,
  `q18` int(11) NOT NULL,
  `q19` int(11) NOT NULL,
  `q20` int(11) NOT NULL,
  `q21` int(11) NOT NULL,
  `q22` int(11) NOT NULL,
  `q23` int(11) NOT NULL,
  `q24` int(11) NOT NULL,
  `q25` int(11) NOT NULL,
  `q26` int(11) NOT NULL,
  `q27` int(11) NOT NULL,
  `q28` int(11) NOT NULL,
  `q29` int(11) NOT NULL,
  `q30` int(11) NOT NULL,
  `q31` varchar(11) NOT NULL,
  `q32` varchar(11) NOT NULL,
  `q33` float NOT NULL,
  `q34` float NOT NULL,
  `q35` float NOT NULL,
  `q36` float NOT NULL,
  `q37` float NOT NULL,
  `q38` float NOT NULL,
  `q39` float NOT NULL,
  `q40` float NOT NULL,
  `q41` float NOT NULL,
  `q42` float NOT NULL,
  `q43` float NOT NULL,
  `q44` float NOT NULL,
  `q45` float NOT NULL,
  `q46` float NOT NULL,
  `q47` float NOT NULL,
  `q48` float NOT NULL,
  `q49` float NOT NULL,
  `q50` float NOT NULL,
  `q51` float NOT NULL,
  `q52` float NOT NULL,
  `sum` float NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `user_id`, `class`, `school`, `society`, `area`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`, `q20`, `q21`, `q22`, `q23`, `q24`, `q25`, `q26`, `q27`, `q28`, `q29`, `q30`, `q31`, `q32`, `q33`, `q34`, `q35`, `q36`, `q37`, `q38`, `q39`, `q40`, `q41`, `q42`, `q43`, `q44`, `q45`, `q46`, `q47`, `q48`, `q49`, `q50`, `q51`, `q52`, `sum`, `time`) VALUES
(40, 41, '12', 'Apeejay School, Nerul', 'Nandanvan Park', 'Kamothe', 4, 2, 2, 4, 2, 2, 2, 2, 1, 2, 2, 2, 2, 2, 2, 3, 2, 2, 1, 3, 3, 3, 3, 3, 3, 3, 2, 3, 3, 2, 'A', 'No', 1, 0.75, 0.75, 0.75, 1, 0.75, 1, 0.5, 0.25, 0.5, 0.25, 0.75, 0.75, 0.75, 0.75, 0.75, 0.75, 0.75, 1, 0.75, 87.75, '2016-06-28 16:29:07'),
(41, 42, '10', 'K. V. ONGC, Panvel', 'Kalpataru Riverside', 'Panvel', 3, 2, 2, 3, 1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 3, 1, 3, 3, 3, 3, 1, 1, 3, 3, 3, 2, 2, 3, 3, 'B', 'No', 1, 0.5, 0.25, 1, 1, 0.5, 1, 0.75, 0, 0.5, 0.25, 1, 0.5, 1, 0.75, 1, 0.75, 0.75, 1, 0.75, 82.5, '2016-07-14 21:58:37'),
(42, 43, 'X', 'Apeejay School, Nerul', 'Nandanvan Park', 'Kamothe', 3, 2, 1, 1, 2, 2, 1, 1, 1, 1, 1, 2, 2, 1, 1, 3, 2, 3, 3, 2, 3, 1, 1, 2, 3, 1, 2, 3, 3, 1, 'B', 'No', 0, 0, 0, 0, 0.25, 0.25, 0.25, 0.75, 0.5, 0.5, 0.5, 0.5, 0.75, 0.25, 0.25, 0.25, 0, 0, 0, 1, 62, '2016-07-24 22:48:29'),
(43, 44, '12', 'Apeejay School, Nerul', 'Nandanvan Park', 'Panvel', 1, 2, 1, 1, 1, 2, 2, 2, 2, 2, 2, 1, 1, 1, 1, 3, 1, 2, 2, 1, 3, 3, 2, 2, 3, 3, 1, 1, 3, 1, 'C', 'No', 0.25, 0.25, 0.25, 0.25, 0, 0, 0, 0.5, 0.5, 0.5, 0.5, 0.75, 0.75, 0.25, 0.25, 0, 0, 0, 0, 1, 60, '2016-07-24 22:57:19');

-- --------------------------------------------------------

--
-- Table structure for table `entry_pass_parents`
--

CREATE TABLE IF NOT EXISTS `entry_pass_parents` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `company` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `locality` varchar(100) NOT NULL,
  `society` varchar(100) NOT NULL,
  `flat` varchar(15) NOT NULL,
  `contact` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entry_pass_parents`
--

INSERT INTO `entry_pass_parents` (`id`, `name`, `dob`, `company`, `designation`, `email`, `locality`, `society`, `flat`, `contact`) VALUES
(1, 'SUJATA SINGH', '29-07-1999', 'EDEXWORLD EMPOWERMENT PVT LTD', 'developer', 'abc@gmail.com', 'Kamothe', 'Nandanvan Park', 'A/603', '9222976881'),
(2, '', '', '', '', '', '', '', '', ''),
(3, 'SUJATA SINGH', '29-07-1999', 'EDEXWORLD EMPOWERMENT PVT LTD', 'developer', 'edexworld@yahoo.co.in', 'Navi Mumbai', 'EDEXWORLD EMPOWERMENT PVT LTD', 'C/501', '9222976881'),
(4, 'SUJATA SINGH', '29-07-1999', 'EDEXWORLD EMPOWERMENT PVT LTD', 'developer', 'edexworld@yahoo.co.in', 'Navi Mumbai', 'EDEXWORLD EMPOWERMENT PVT LTD', 'C/501', '9222976881'),
(5, 'SUJATA SINGH', '29-07-1999', 'EDEXWORLD EMPOWERMENT PVT LTD', 'developer', 'edexworld@yahoo.co.in', 'Navi Mumbai', 'EDEXWORLD EMPOWERMENT PVT LTD', 'C/501', '9222976881'),
(6, 'SUJATA SINGH', '29-07-1999', 'EDEXWORLD EMPOWERMENT PVT LTD', 'developer', 'edexworld@yahoo.co.in', 'Navi Mumbai', 'EDEXWORLD EMPOWERMENT PVT LTD', 'C/501', '9222976881'),
(7, 'SUJATA SINGH', '29-07-1999', 'EDEXWORLD EMPOWERMENT PVT LTD', 'developer', 'edexworld@yahoo.co.in', 'Navi Mumbai', 'EDEXWORLD EMPOWERMENT PVT LTD', 'C/501', '9222976881'),
(8, 'SUJATA SINGH', '29-07-1999', 'EDEXWORLD EMPOWERMENT PVT LTD', 'developer', 'edexworld@yahoo.co.in', 'Navi Mumbai', 'EDEXWORLD EMPOWERMENT PVT LTD', 'C/501', '9222976881'),
(9, 'SUJATA SINGH', '29-07-1999', 'EDEXWORLD EMPOWERMENT PVT LTD', 'developer', 'edexworld@yahoo.co.in', 'Navi Mumbai', 'EDEXWORLD EMPOWERMENT PVT LTD', 'C/501', '9222976881'),
(10, 'SUJATA SINGH', '29-07-1999', 'EDEXWORLD EMPOWERMENT PVT LTD', 'developer', 'edexworld@yahoo.co.in', 'Navi Mumbai', 'EDEXWORLD EMPOWERMENT PVT LTD', 'C/501', '9222976881'),
(11, 'SUJATA SINGH', '29-07-1999', 'EDEXWORLD EMPOWERMENT PVT LTD', 'developer', 'edexworld@yahoo.co.in', 'Navi Mumbai', 'EDEXWORLD EMPOWERMENT PVT LTD', 'C/501', '9222976881'),
(12, 'SUJATA SINGH', '29-07-1999', 'EDEXWORLD EMPOWERMENT PVT LTD', 'developer', 'edexworld@yahoo.co.in', 'Navi Mumbai', 'EDEXWORLD EMPOWERMENT PVT LTD', 'C/501', '9222976881'),
(13, 'SUJATA SINGH', '29-07-1999', 'EDEXWORLD EMPOWERMENT PVT LTD', 'developer', 'edexworld@yahoo.co.in', 'Navi Mumbai', 'EDEXWORLD EMPOWERMENT PVT LTD', 'C/501', '9222976881'),
(14, 'SUJATA SINGH', '29-07-1999', 'EDEXWORLD EMPOWERMENT PVT LTD', 'developer', 'edexworld@yahoo.co.in', 'Navi Mumbai', 'EDEXWORLD EMPOWERMENT PVT LTD', 'C/501', '9222976881'),
(15, 'SUJATA SINGH', '29-07-1999', 'EDEXWORLD EMPOWERMENT PVT LTD', 'developer', 'edexworld@yahoo.co.in', 'Navi Mumbai', 'EDEXWORLD EMPOWERMENT PVT LTD', 'C/501', '9222976881'),
(16, 'SUJATA SINGH', '29-07-1999', 'EDEXWORLD EMPOWERMENT PVT LTD', 'developer', 'edexworld@yahoo.co.in', 'Navi Mumbai', 'EDEXWORLD EMPOWERMENT PVT LTD', 'C/501', '9222976881'),
(17, 'SUJATA SINGH', '29-07-1999', 'EDEXWORLD EMPOWERMENT PVT LTD', 'developer', 'edexworld@yahoo.co.in', 'Navi Mumbai', 'EDEXWORLD EMPOWERMENT PVT LTD', 'C/501', '9222976881'),
(18, 'SUJATA SINGH', '29-07-1999', 'EDEXWORLD EMPOWERMENT PVT LTD', 'developer', 'edexworld@yahoo.co.in', 'Navi Mumbai', 'EDEXWORLD EMPOWERMENT PVT LTD', 'C/501', '9222976881'),
(19, 'SUJATA SINGH', '29-07-1999', 'EDEXWORLD EMPOWERMENT PVT LTD', 'developer', 'edexworld@yahoo.co.in', 'Navi Mumbai', 'EDEXWORLD EMPOWERMENT PVT LTD', 'C/501', '9222976881'),
(20, 'SUJATA SINGH', '29-07-1999', 'EDEXWORLD EMPOWERMENT PVT LTD', 'developer', 'edexworld@yahoo.co.in', 'Navi Mumbai', 'EDEXWORLD EMPOWERMENT PVT LTD', 'C/501', '9222976881'),
(21, 'SUJATA SINGH', '29-07-1999', 'EDEXWORLD EMPOWERMENT PVT LTD', 'developer', 'edexworld@yahoo.co.in', 'Navi Mumbai', 'EDEXWORLD EMPOWERMENT PVT LTD', 'C/501', '9222976881');

-- --------------------------------------------------------

--
-- Table structure for table `entry_pass_students`
--

CREATE TABLE IF NOT EXISTS `entry_pass_students` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `standard` varchar(5) NOT NULL,
  `school` varchar(50) NOT NULL,
  `syllabus` varchar(50) NOT NULL,
  `locality` varchar(100) NOT NULL,
  `society` varchar(100) NOT NULL,
  `flat` varchar(15) NOT NULL,
  `contact` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entry_pass_students`
--

INSERT INTO `entry_pass_students` (`id`, `name`, `father_name`, `dob`, `standard`, `school`, `syllabus`, `locality`, `society`, `flat`, `contact`) VALUES
(1, 'Amit Singh', 'Jitendra Kumar Singh', '29-07-1999', '12', 'Apeejay School, Nerul', 'CBSE', 'Kamothe', 'Nandanvan Park', 'A/603', '8879272080'),
(2, 'Amit Singh', 'Jitendra Kumar Singh', '29-07-1999', '12', 'Apeejay School, Nerul', 'CBSE', 'Kamothe', 'Nandanvan Park', 'A/603', '8879272080'),
(3, 'Amit Singh', 'Jitendra Kumar Singh', '29-07-1999', '12', 'Apeejay School, Nerul', 'CBSE', 'Kamothe', 'Nandanvan Park', 'A/603', '8879272080'),
(4, 'Amit Singh', 'Jitendra Kumar Singh', '29-07-1999', '12', 'Apeejay School, Nerul', 'CBSE', 'Kamothe', 'Nandanvan Park', 'A/603', '8879272080'),
(5, 'Amit Singh', 'Jitendra Kumar Singh', '29-07-1999', '12', 'Apeejay School, Nerul', 'CBSE', 'Kamothe', 'Nandanvan Park', 'A/603', '8879272080'),
(6, 'Amit Singh', 'Jitendra Kumar Singh', '29-07-1999', '12', 'Apeejay School, Nerul', 'CBSE', 'Kamothe', 'Nandanvan Park', 'A/603', '8879272080'),
(7, 'Amit Singh', 'Jitendra Kumar Singh', '29-07-1999', '12', 'Apeejay School, Nerul', 'CBSE', 'Kamothe', 'Nandanvan Park', 'A/603', '8879272080'),
(8, 'Amit Singh', 'Jitendra Kumar Singh', '29-07-1999', '12', 'Apeejay School, Nerul', 'CBSE', 'Kamothe', 'Nandanvan Park', 'A/603', '8879272080'),
(9, 'Amit Singh', 'Jitendra Kumar Singh', '29-07-1999', '12', 'Apeejay School, Nerul', 'CBSE', 'Kamothe', 'Nandanvan Park', 'A/603', '8879272080'),
(10, 'Amit Singh', 'Jitendra Kumar Singh', '29-07-1999', '12', 'Apeejay School, Nerul', 'CBSE', 'Kamothe', 'Nandanvan Park', 'A/603', '8879272080'),
(11, 'Amit Singh', 'Jitendra Kumar Singh', '29-07-1999', '12', 'Apeejay School, Nerul', 'CBSE', 'Kamothe', 'Nandanvan Park', 'A/603', '8879272080'),
(12, 'Amit Singh', 'Jitendra Kumar Singh', '29-07-1999', '12', 'Apeejay School, Nerul', 'CBSE', 'Kamothe', 'Nandanvan Park', 'A/603', '8879272080'),
(13, 'Amit Singh', 'Jitendra Kumar Singh', '29-07-1999', '12', 'Apeejay School, Nerul', 'CBSE', 'Kamothe', 'Nandanvan Park', 'A/603', '8879272080'),
(14, 'Amit Singh', 'Jitendra Kumar Singh', '29-07-1999', '12', 'Apeejay School, Nerul', 'CBSE', 'Kamothe', 'Nandanvan Park', 'A/603', '8879272080'),
(15, 'Amit Singh', 'Jitendra Kumar Singh', '29-07-1999', '12', 'Apeejay School, Nerul', 'CBSE', 'Kamothe', 'Nandanvan Park', 'A/603', '8879272080'),
(16, 'Amit Singh', 'Jitendra Kumar Singh', '29-07-1999', '12', 'Apeejay School, Nerul', 'CBSE', 'Kamothe', 'Nandanvan Park', 'A/603', '8879272080'),
(17, 'Amit Singh', 'Jitendra Kumar Singh', '29-07-1999', '12', 'Apeejay School, Nerul', 'CBSE', 'Kamothe', 'Nandanvan Park', 'A/603', '8879272080'),
(18, 'Amit Singh', 'Jitendra Kumar Singh', '29-07-1999', '12', 'Apeejay School, Nerul', 'CBSE', 'Kamothe', 'Nandanvan Park', 'A/603', '8879272080'),
(19, 'Amit Singh', 'Jitendra Kumar Singh', '29-07-1999', '12', 'Apeejay School, Nerul', 'CBSE', 'Kamothe', 'Nandanvan Park', 'A/603', '8879272080'),
(20, 'Amit Singh', 'Jitendra Kumar Singh', '29-07-1999', '12', 'Apeejay School, Nerul', 'CBSE', 'Kamothe', 'Nandanvan Park', 'A/603', '8879272080'),
(21, 'Amit Singh', 'Jitendra Kumar Singh', '29-07-1999', '12', 'Apeejay School, Nerul', 'CBSE', 'Kamothe', 'Nandanvan Park', 'A/603', '8879272080');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `name`) VALUES
(1, 'Apeejay School, Nerul'),
(2, 'K. V. ONGC, Panvel');

-- --------------------------------------------------------

--
-- Table structure for table `society`
--

CREATE TABLE IF NOT EXISTS `society` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `area` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `society`
--

INSERT INTO `society` (`id`, `name`, `area`) VALUES
(1, 'Nandanvan Park', 'Kamothe');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `class` varchar(5) NOT NULL,
  `section` varchar(5) NOT NULL,
  `roll_no` varchar(11) NOT NULL,
  `school` varchar(50) NOT NULL,
  `syllabus` varchar(50) NOT NULL,
  `society` varchar(250) NOT NULL,
  `area` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `filename` varchar(250) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `dob`, `class`, `section`, `roll_no`, `school`, `syllabus`, `society`, `area`, `email`, `contact`, `filename`, `time`) VALUES
(41, 'Amit Singh', '29-07-1999', '12', 'D', '3', 'Apeejay School, Nerul', 'CBSE', 'Nandanvan Park', 'Kamothe', 'amit_tijus99@rediffmail.com', '8879272080', 'Amit Singh12D3.pdf', '2016-06-28 16:29:07'),
(42, 'Manasi Ojha', '23-07-2001', '10', 'B', '-', 'K. V. ONGC, Panvel', 'CBSE', 'Kalpataru Riverside', 'Panvel', 'manasiojha23@gmail.com', '9769291175', 'Manasi Ojha10B-.pdf', '2016-07-14 21:58:37'),
(43, 'Amit Singh', '29-07-1999', 'X', 'A', '3', 'Apeejay School, Nerul', 'CBSE', 'Nandanvan Park', 'Kamothe', 'amit_tijus99@rediffmail.com', '8879272080', 'Amit SinghXA3.pdf', '2016-07-24 22:48:29'),
(44, 'SUJATA SINGH', '29-07-1999', '12', 'd', '13415581', 'Apeejay School, Nerul', 'cbse', 'Nandanvan Park', 'Panvel', 'edexworld@yahoo.co.in', '9222976881', 'SUJATA SINGH12d13415581.pdf', '2016-07-24 22:57:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entry_pass_parents`
--
ALTER TABLE `entry_pass_parents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entry_pass_students`
--
ALTER TABLE `entry_pass_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `society`
--
ALTER TABLE `society`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `entry_pass_parents`
--
ALTER TABLE `entry_pass_parents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `entry_pass_students`
--
ALTER TABLE `entry_pass_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `society`
--
ALTER TABLE `society`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
