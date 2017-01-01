
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 25, 2016 at 01:52 PM
-- Server version: 10.0.20-MariaDB
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `for_all`
--

INSERT INTO `for_all` (`id`, `uniqueelement`, `comments`, `suggestions`, `expt_handwriting`, `expt_problem_solving`, `expt_weekly_monthly_test`, `expt_homework`, `expt_daily_tracking`, `know_hoarding`, `know_handwill`, `know_letter_email`, `know_recommendation`, `know_internet`, `know_newspaper`, `know_seminar`, `know_friends`, `know_others`) VALUES
(27, '138', 'dfsa', 'asfd', 'on', 'on', 'on', '', '', '', '', '', 'on', 'on', '', '', '', ''),
(40, '9490', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(39, '3253', '', '', 'on', '', '', '', '', 'on', '', '', '', '', '', '', '', ''),
(38, '9630', '', '', '', '', '', '', '', '', '', '', '', '', 'on', '', '', ''),
(37, '2269', '', '', '', '', '', '', '', '', '', '', 'on', '', '', '', '', ''),
(36, '2650', '', '', 'on', '', '', '', '', '', '', '', '', '', 'on', '', '', ''),
(35, '9521', 'no ', 'dfsa', 'on', 'on', '', '', '', '', 'on', 'on', 'on', '', '', '', '', ''),
(34, '1229', 'dfsa', 'asfd', 'on', 'on', '', '', '', '', '', '', '', 'on', 'on', '', '', '');

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `uniqueelement`, `first_name`, `last_name`, `father_name`, `address`, `state`, `email`, `mobile`, `username`, `password`, `confirm_password`, `sex`, `dob`, `image`, `landline`, `cat`) VALUES
(29, '2650', 'SUJATA', 'SINGH', 'dinesh singh', 'Nandanvan Park, A/603, Plot-9, Kamothe', 'Maharashtra', 'edexworld@yahoo.co.in', '9222976881', 'edexworld@yahoo.co.i', '456123', '456123', 'Female', '2016-08-11', '', '09222976881', 'Tutor'),
(26, '138', 'SUJATA', 'SINGH', 'dinesh singh', 'Nandanvan Park, A/603, Plot-9, Kamothe', 'Maharashtra', 'edexworld@yahoo.co.in', '9222976881', 'edexworld@yahoo.co.i', '123456', '123456', 'Female', '2016-08-04', '', '09222976881', 'Tutor'),
(27, '1229', 'Jitendra', 'SINGH', 'Raghubansh Narayan Singh', 'Nandanvan Park, A/603, Plot-9, Kamothe', 'Maharashtra', 'edexworld@yahoo.co.in', '9222976881', 'jitubhai', '456789', '456789', 'Male', '2016-08-02', '', '', 'Tutor'),
(28, '9521', 'Amit', 'Singh', 'JITENDRA KUMAR SINGH', 'Nandanvan Park, A/603, Plot-9, Kamothe', 'Maharashtra', 'amit_tijus99@rediffmail.com', '8879272080', 'AmitTijus', '654321', '654321', 'Male', '2016-08-03', 'pics/DSC_9939.jpg', '', 'Student'),
(30, '2786', 'Sujit', 'Singh', 'JITENDRA KUMAR SINGH', 'Nandanvan Park, A/603, Plot-9, Kamothe', 'Maharashtra', 'tijussingh@gmail.com', '9833631395', 'TijusSingh', '1sujitamit*', '1sujitamit*', 'Male', '1994-10-16', 'pics/DSC_9938.jpg', '', 'Student'),
(31, '2269', 'Sujit', 'SINGH', 'JITENDRA KUMAR SINGH', 'Nandanvan Park, A/603, Plot-9, Kamothe, None', 'Maharashtra', 'edexworld@yahoo.co.in', '9222976881', 'edex123', '1sujitamit*', '1sujitamit*', 'Male', '1994-10-16', '', '', 'Student'),
(32, '9630', 'SUJATA', 'SINGH', 'dinesh singh', 'Nandanvan Park, A/603, Plot-9, Kamothe, None', 'Maharashtra', 'edexworld@yahoo.co.in', '9222976881', 'din123', '1sujitamit*', '1sujitamit*', 'Male', '1994-10-16', 'pics/DSC_9938.jpg', '', 'Student'),
(33, '5317', 'SUJATA', 'SINGH', 'dinesh singh', 'Nandanvan Park, A/603, Plot-9, Kamothe, None', 'Maharashtra', 'edexworld@yahoo.co.in', '9222976881', 'dinn123', '1sujitamit*', '1sujitamit*', 'Male', '1994-10-16', '', '', 'Student'),
(34, '8067', 'Sujit', 'Singh', 'jakja', 'asd', 'dsfa', 'afdsfsd@gmail.com', '9833631395', 'asdfsdfdsffdsa', 'asdfghjkl', 'asdfghjkl', 'Male', '2016-09-05', '', '', 'Student'),
(35, '3253', 'Sujit', 'Singh', 'Jitendra', 'NANDANVAN PARK, A/603, PLOT-9, SECTOR-36, KAMOTHE', 'Maharashtra', 'tijussingh@gmail.com', '9833631395', 'SujitJ', '1sujitamit*', '1sujitamit*', 'Male', '1994-10-16', '', '', 'Student'),
(36, '9490', 'Amit', 'Singh', 'Jitendra Kumar Singh', 'NANDANVAN PARK, A/603, PLOT-9, SECTOR-36, KAMOTHE', 'Maharashtra', 'tijussingh@gmail.com', '9833631395', 'AmitJSingh', '1sujitamit*', '1sujitamit*', 'Male', '1999-07-29', '', '02265129596', 'Student');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `uniqueelement`, `Academic`, `Standard`, `schooladdress`, `board`, `maths_marksobt`, `maths_marksexp`, `opted_maths`, `french_marksobt`, `french_marksexp`, `opted_french`, `science_marksobt`, `science_marksexp`, `opted_science`, `sst_marksobt`, `sst_marksexp`, `opted_sst`, `english_marksobt`, `english_marksexp`, `opted_english`, `hindi_marksobt`, `hindi_marksexp`, `opted_hindi`, `marathi_marksobt`, `marathi_marksexp`, `opted_marathi`, `sanskrit_marksobt`, `sanskrit_marksexp`, `opted_sanskrit`, `others_marksobt`, `others_marksexp`, `opted_others`) VALUES
(20, '9521', '1', '12C', 'Apeejay School, Nerul', '10', '25', '100', 'Yes', '525', '25', 'No', '', '', 'NA', '', '', 'NA', '', '', 'NA', '', '', 'NA', '', '', 'NA', '', '', 'NA', '', '', 'NA'),
(21, '2269', '1', '12S', 'Apeejay School, Nerul', '10', '', '', 'NA', '', '', 'NA', '', '', 'NA', '', '', 'NA', '', '', 'NA', '', '', 'NA', '', '', 'NA', '', '', 'NA', '', '', 'NA'),
(22, '9630', '1', '12S', 'Apeejay School, Nerul', '10', '', '', 'NA', '', '', 'NA', '', '', 'NA', '', '', 'NA', '', '', 'NA', '', '', 'NA', '', '', 'NA', '', '', 'NA', '', '', 'NA'),
(23, '5317', '2', '10', 'Nandanvan Park, A/603, Plot-9, Kamothe, None', '2', '', '', 'NA', '', '', 'NA', '', '', 'NA', '', '', 'NA', '', '', 'NA', '', '', 'NA', '', '', 'NA', '', '', 'NA', '', '', 'NA'),
(24, '3253', '1', '11A', '', 'na', '', '', 'Yes', '', '', 'Yes', '', '', 'Yes', '', '', 'Yes', '', '', 'Yes', '', '', 'Yes', '', '', 'Yes', '', '', 'Yes', '', '', 'Yes'),
(25, '9490', '1', '12C', 'Apeejay School Nerul', '10', '80', '90', 'Yes', '', '', 'No', '', '', 'Yes', '', '', 'Yes', '', '', 'Yes', '', '', 'Yes', '', '', 'Yes', '', '', 'Yes', 'Business S', '90', 'Yes');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`id`, `uniqueelement`, `x_university`, `x_score`, `xii_university`, `xii_score`, `certificate_university`, `certificate_score`, `diploma_university`, `diploma_score`, `grads`, `grads_university`, `grads_score`, `post_grads`, `post_grads_university`, `post_grads_score`, `prof`, `prof_university`, `prof_score`, `research`, `research_university`, `research_score`, `cert`, `f_e_university`, `f_e_score`, `hobby`, `work_experience`, `maths_fees`, `opted_maths_tutor`, `french_fees`, `opted_french_tutor`, `science_fees`, `opted_science_tutor`, `sst_fees`, `opted_sst_tutor`, `english_fees`, `opted_english_tutor`, `hindi_fees`, `opted_hindi_tutor`, `marathi_fees`, `opted_marathi_tutor`, `sanskrit_fees`, `opted_sanskrit_tutor`, `others_fees`, `opted_others_tutor`, `opted_maths_teach`, `opted_french_teach`, `opted_science_teach`, `opted_sst_teach`, `opted_english_teach`, `opted_hindi_teach`, `opted_marathi_teach`, `opted_sanskrit_teach`, `opted_others_teach`) VALUES
(24, '2650', 'maha', 92, 'SSEB', 90, '', 0, '', 0, 'NA', '', 0, 'NA', '', 0, 'NA', '', 0, 'NA', '', 0, '', '', 0, '', '', '500', '/hr', '500', '/hr', '', 'NA', '', 'NA', '', 'NA', '', 'NA', '', 'NA', '', 'NA', '', 'NA', 'Yes', 'No', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', ''),
(22, '138', 'maha', 92, 'cbse', 85, '', 0, '', 0, 'NA', '', 0, 'NA', '', 0, 'NA', '', 0, 'NA', '', 0, '', '', 0, '', '', '100', '/hr', '500', '/hr', '', 'NA', '', 'NA', '', 'NA', '', 'NA', '', 'NA', '', 'NA', '', 'NA', 'Yes', 'Yes', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', ''),
(23, '1229', 'maha', 92, 'cbse', 85, '', 0, '', 0, 'NA', '', 0, 'NA', '', 0, 'NA', '', 0, 'NA', '', 0, '', '', 0, '', '', '100', '/hr', '1000', '/hr', '', 'NA', '', 'NA', '', 'NA', '', 'NA', '', 'NA', '', 'NA', '', 'NA', 'Yes', 'No', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
