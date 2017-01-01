
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 01, 2017 at 03:05 PM
-- Server version: 10.0.28-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u581423896_edex`
--

-- --------------------------------------------------------

--
-- Table structure for table `for_all`
--

CREATE TABLE IF NOT EXISTS `for_all` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniqueelement` varchar(20) NOT NULL,
  `comments` varchar(200) NOT NULL,
  `suggestions` varchar(200) NOT NULL,
  `expt_handwriting` varchar(20) NOT NULL,
  `expt_problem_solving` varchar(20) NOT NULL,
  `expt_weekly_monthly_test` varchar(20) NOT NULL,
  `expt_homework` varchar(20) NOT NULL,
  `expt_daily_tracking` varchar(20) NOT NULL,
  `know_hoarding` varchar(20) NOT NULL,
  `know_handwill` varchar(20) NOT NULL,
  `know_letter_email` varchar(20) NOT NULL,
  `know_recommendation` varchar(20) NOT NULL,
  `know_internet` varchar(20) NOT NULL,
  `know_newspaper` varchar(20) NOT NULL,
  `know_seminar` varchar(20) NOT NULL,
  `know_friends` varchar(20) NOT NULL,
  `know_others` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `for_all`
--

INSERT INTO `for_all` (`id`, `uniqueelement`, `comments`, `suggestions`, `expt_handwriting`, `expt_problem_solving`, `expt_weekly_monthly_test`, `expt_homework`, `expt_daily_tracking`, `know_hoarding`, `know_handwill`, `know_letter_email`, `know_recommendation`, `know_internet`, `know_newspaper`, `know_seminar`, `know_friends`, `know_others`) VALUES
(1, '4142', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE IF NOT EXISTS `registrations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniqueelement` varchar(10) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirm_password` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `image` varchar(50) NOT NULL,
  `landline` varchar(15) NOT NULL,
  `cat` varchar(10) NOT NULL,
  `verify` varchar(10) NOT NULL,
  `token` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `uniqueelement`, `first_name`, `last_name`, `father_name`, `address`, `state`, `email`, `mobile`, `username`, `password`, `confirm_password`, `sex`, `dob`, `image`, `landline`, `cat`, `verify`, `token`) VALUES
(1, '4142', 'Sujit', 'Singh', 'Jitendra Kumar Singh', 'NANDANVAN PARK, A/603, PLOT-9, SECTOR-36, KAMOTHE', 'Maharashtra', 'tijussingh@gmail.com', '9833631395', 'tijussingh', '1sujitamit*', '1sujitamit*', 'Male', '2016-12-12', '', '', 'Student', 'Yes', '9899656796');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniqueelement` varchar(20) NOT NULL,
  `Academic` varchar(10) NOT NULL,
  `Standard` varchar(10) NOT NULL,
  `schooladdress` varchar(250) NOT NULL,
  `board` varchar(150) NOT NULL,
  `maths_marksobt` varchar(10) NOT NULL,
  `maths_marksexp` varchar(10) NOT NULL,
  `opted_maths` varchar(10) NOT NULL,
  `french_marksobt` varchar(10) NOT NULL,
  `french_marksexp` varchar(10) NOT NULL,
  `opted_french` varchar(10) NOT NULL,
  `science_marksobt` varchar(10) NOT NULL,
  `science_marksexp` varchar(10) NOT NULL,
  `opted_science` varchar(10) NOT NULL,
  `sst_marksobt` varchar(10) NOT NULL,
  `sst_marksexp` varchar(10) NOT NULL,
  `opted_sst` varchar(10) NOT NULL,
  `english_marksobt` varchar(10) NOT NULL,
  `english_marksexp` varchar(10) NOT NULL,
  `opted_english` varchar(10) NOT NULL,
  `hindi_marksobt` varchar(10) NOT NULL,
  `hindi_marksexp` varchar(10) NOT NULL,
  `opted_hindi` varchar(10) NOT NULL,
  `marathi_marksobt` varchar(10) NOT NULL,
  `marathi_marksexp` varchar(10) NOT NULL,
  `opted_marathi` varchar(10) NOT NULL,
  `sanskrit_marksobt` varchar(10) NOT NULL,
  `sanskrit_marksexp` varchar(10) NOT NULL,
  `opted_sanskrit` varchar(10) NOT NULL,
  `others_marksobt` varchar(10) NOT NULL,
  `others_marksexp` varchar(10) NOT NULL,
  `opted_others` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `uniqueelement`, `Academic`, `Standard`, `schooladdress`, `board`, `maths_marksobt`, `maths_marksexp`, `opted_maths`, `french_marksobt`, `french_marksexp`, `opted_french`, `science_marksobt`, `science_marksexp`, `opted_science`, `sst_marksobt`, `sst_marksexp`, `opted_sst`, `english_marksobt`, `english_marksexp`, `opted_english`, `hindi_marksobt`, `hindi_marksexp`, `opted_hindi`, `marathi_marksobt`, `marathi_marksexp`, `opted_marathi`, `sanskrit_marksobt`, `sanskrit_marksexp`, `opted_sanskrit`, `others_marksobt`, `others_marksexp`, `opted_others`) VALUES
(1, '4142', '0', 'none', '', 'na', '', '', 'NA', '', '', 'NA', '', '', 'NA', '', '', 'NA', '', '', 'NA', '', '', 'NA', '', '', 'NA', '', '', 'NA', '', '', 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE IF NOT EXISTS `tutor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniqueelement` varchar(20) NOT NULL,
  `x_university` varchar(50) NOT NULL,
  `x_score` int(11) NOT NULL,
  `xii_university` varchar(50) NOT NULL,
  `xii_score` int(11) NOT NULL,
  `certificate_university` varchar(50) NOT NULL,
  `certificate_score` int(11) NOT NULL,
  `diploma_university` varchar(50) NOT NULL,
  `diploma_score` int(11) NOT NULL,
  `grads` varchar(20) NOT NULL,
  `grads_university` varchar(50) NOT NULL,
  `grads_score` int(11) NOT NULL,
  `post_grads` varchar(20) NOT NULL,
  `post_grads_university` varchar(50) NOT NULL,
  `post_grads_score` int(11) NOT NULL,
  `prof` varchar(20) NOT NULL,
  `prof_university` varchar(50) NOT NULL,
  `prof_score` int(11) NOT NULL,
  `research` varchar(20) NOT NULL,
  `research_university` varchar(50) NOT NULL,
  `research_score` int(11) NOT NULL,
  `cert` varchar(20) NOT NULL,
  `f_e_university` varchar(50) NOT NULL,
  `f_e_score` int(11) NOT NULL,
  `hobby` varchar(50) NOT NULL,
  `work_experience` varchar(200) NOT NULL,
  `maths_fees` varchar(25) NOT NULL,
  `opted_maths_tutor` varchar(25) NOT NULL,
  `french_fees` varchar(25) NOT NULL,
  `opted_french_tutor` varchar(25) NOT NULL,
  `science_fees` varchar(25) NOT NULL,
  `opted_science_tutor` varchar(25) NOT NULL,
  `sst_fees` varchar(25) NOT NULL,
  `opted_sst_tutor` varchar(25) NOT NULL,
  `english_fees` varchar(25) NOT NULL,
  `opted_english_tutor` varchar(25) NOT NULL,
  `hindi_fees` varchar(25) NOT NULL,
  `opted_hindi_tutor` varchar(25) NOT NULL,
  `marathi_fees` varchar(25) NOT NULL,
  `opted_marathi_tutor` varchar(25) NOT NULL,
  `sanskrit_fees` varchar(25) NOT NULL,
  `opted_sanskrit_tutor` varchar(50) NOT NULL,
  `others_fees` varchar(25) NOT NULL,
  `opted_others_tutor` varchar(20) NOT NULL,
  `opted_maths_teach` varchar(20) NOT NULL,
  `opted_french_teach` varchar(20) NOT NULL,
  `opted_science_teach` varchar(20) NOT NULL,
  `opted_sst_teach` varchar(20) NOT NULL,
  `opted_english_teach` varchar(20) NOT NULL,
  `opted_hindi_teach` varchar(20) NOT NULL,
  `opted_marathi_teach` varchar(20) NOT NULL,
  `opted_sanskrit_teach` varchar(20) NOT NULL,
  `opted_others_teach` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
