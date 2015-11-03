-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 02, 2015 at 02:27 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `baaslk`
--
CREATE DATABASE IF NOT EXISTS `baaslk` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `baaslk`;

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE IF NOT EXISTS `calendar` (
  `calendar_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) DEFAULT NULL,
  `detail` varchar(250) DEFAULT NULL,
  `jobDate` varchar(15) NOT NULL,
  `dateAdded` date NOT NULL,
  `location` varchar(60) DEFAULT NULL,
  `jobtime` varchar(10) DEFAULT NULL,
  `contactno` varchar(10) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `sp_id` int(11) DEFAULT NULL,
  `accepted` int(1) NOT NULL,
  PRIMARY KEY (`calendar_id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `calendar`
--


-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index',
  `user_id` int(11) DEFAULT NULL,
  `contactNo` int(15) NOT NULL,
  `opContactNo` int(15) DEFAULT NULL,
  `opEmail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `area` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dob` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `languages` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`customer_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `user_id`, `contactNo`, `opContactNo`, `opEmail`, `area`, `dob`, `gender`, `address`, `languages`) VALUES
(1, 17, 712310111, NULL, NULL, 'Colombo', '1973-06-05', 'Male', 'Kollupitiya,Colombo 03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fanswer`
--

CREATE TABLE IF NOT EXISTS `fanswer` (
  `question_id` int(4) NOT NULL DEFAULT '0',
  `a_id` int(4) NOT NULL DEFAULT '0',
  `user` varchar(65) NOT NULL DEFAULT '',
  `userphoto` varchar(65) NOT NULL DEFAULT '',
  `a_answer` longtext NOT NULL,
  `a_datetime` varchar(25) NOT NULL DEFAULT '',
  `user_catagory` varchar(65) NOT NULL,
  KEY `a_id` (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fanswer`
--


-- --------------------------------------------------------

--
-- Table structure for table `fquestions`
--

CREATE TABLE IF NOT EXISTS `fquestions` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `user` varchar(65) NOT NULL DEFAULT '',
  `userphoto` varchar(65) NOT NULL DEFAULT '',
  `topic` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL,
  `datetime` varchar(25) NOT NULL DEFAULT '',
  `view` int(4) NOT NULL DEFAULT '0',
  `reply` int(4) NOT NULL DEFAULT '0',
  `user_catagory` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `fquestions`
--


-- --------------------------------------------------------

--
-- Table structure for table `postjob2`
--

CREATE TABLE IF NOT EXISTS `postjob2` (
  `job_id` int(100) NOT NULL AUTO_INCREMENT,
  `job_type` varchar(100) NOT NULL,
  `job_description` varchar(1000) NOT NULL,
  `area` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `tel_num` int(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `postjob2`
--

INSERT INTO `postjob2` (`job_id`, `job_type`, `job_description`, `area`, `address`, `tel_num`, `time`) VALUES
(1, 'Consultancy Service', 'I want to build a house quickly', 'Colombo', 'Delkanda, Nugegoda.', 775201412, '0000-00-00 00:00:00'),
(2, 'Material Supplier', 'I want to 3 sand cubes quickly', 'Colombo', 'weherahena, matara', 712564896, '0000-00-00 00:00:00'),
(3, 'Contractor', 'I want to build house.', '', 'Navinna , Maharagama', 2147483647, '0000-00-00 00:00:00'),
(4, 'Technician', 'I want to wiring my house.', '', 'No 23, Matara.', 2147483647, '0000-00-00 00:00:00'),
(5, 'Architect And Designer', 'I want to create a house plan.', '', 'No 12, Kirulapana.', 714563289, '0000-00-00 00:00:00'),
(6, 'Architect And Designer', 'I want to create a house plan.', '', 'No 12, Kirulapana.', 714563289, '0000-00-00 00:00:00'),
(7, 'Real Estate Company', 'I want to sold my house.', 'Matara', 'No 78/9, Anagarika Dharmapala Mawatha, Matara.', 112789632, '0000-00-00 00:00:00'),
(8, 'Real Estate Company', 'I want to sold my house.', '', 'No 78/9, Anagarika Dharmapala Mawatha, Matara.', 112789632, '0000-00-00 00:00:00'),
(9, 'Material Supplier', 'For cements.', 'Colombo', 'No 45/1, Matara.', 123654789, '0000-00-00 00:00:00'),
(10, 'Material Supplier', 'For cements.', '', 'No 45/1, Matara.', 123654789, '0000-00-00 00:00:00'),
(11, 'Real Estate Company', 'For sell my Home and Land.', '', 'Kaburugamuwa, Matara.', 417896523, '0000-00-00 00:00:00'),
(12, 'Technician', 'For wiring building.', '', 'Denipitiya, Weligama.', 123654789, '0000-00-00 00:00:00'),
(13, 'Builder', 'I want a mason baas.', '', 'Havelock Town, Colombo.', 123654789, '0000-00-00 00:00:00'),
(14, 'Consultancy Service', 'A', '', 'Z', 4, '0000-00-00 00:00:00'),
(15, 'Consultancy Service', 'a', '', 'q', 5, '0000-00-00 00:00:00'),
(16, 'Consultancy Service', 's', '', 'c', 5, '0000-00-00 00:00:00'),
(17, 'Technician', 'I want to build a house.', '', 'Delkanda, Nugegoda.', 712365478, '0000-00-00 00:00:00'),
(18, 'Consultancy Service', 'hs', '', 'jsk', 44, '0000-00-00 00:00:00'),
(19, 'Consultancy Service', 'I want to sell my home land quikcly.', '', 'Anagarika Dharmapala Mawatha, Matara', 21456979, '0000-00-00 00:00:00'),
(20, 'Consultancy Service', 'hudhuhf', '', 'f mnfm', 0, '0000-00-00 00:00:00'),
(21, 'Material Supplier', 'I want to stone 1 cube and chipsy stone 1 cube', '', 'Warakapitiya, Denipitiya, Weligama, pc 81730', 716174536, '0000-00-00 00:00:00'),
(22, 'Consultancy Service', 'ff', '', 's', 0, '0000-00-00 00:00:00'),
(23, 'Consultancy Service', 's', '', 's', 0, '0000-00-00 00:00:00'),
(24, 'Builder', 'nadeera', '', 'rukshan', 716179152, '0000-00-00 00:00:00'),
(25, 'Consultancy Service', ',m ', '', 'lkk', 0, '0000-00-00 00:00:00'),
(26, 'Technician', 'Nirmal', '', 'kollupitiya', 716179152, '0000-00-00 00:00:00'),
(27, 'Consultancy Service', '134', '', '4343', 44, '0000-00-00 00:00:00'),
(28, 'Consultancy Service', 'hhgjg', '', 'uygyug', 0, '0000-00-00 00:00:00'),
(29, 'Consultancy Service', 'iuhh', '', 'kjoi', 0, '0000-00-00 00:00:00'),
(30, 'Material Supplier', 'mksjdhdj', '', 'sjfcijsi', 1165, '0000-00-00 00:00:00'),
(31, 'Builder', 'miyuru kavishan', '', 'aarachchi', 123566, '0000-00-00 00:00:00'),
(32, 'Interior Designer', ' qwertyuiop', '', ' qwertyuiop', 123645879, '0000-00-00 00:00:00'),
(33, 'Architect', ' ', '', ' ', 0, '0000-00-00 00:00:00'),
(34, 'Architect', ' ', '', ' ', 0, '0000-00-00 00:00:00'),
(35, 'Architect', ' ', '', ' ', 0, '0000-00-00 00:00:00'),
(36, 'Architect', ' ', '', ' ', 0, '0000-00-00 00:00:00'),
(37, 'Vaasthu', ' ', '', ' ', 0, '0000-00-00 00:00:00'),
(38, 'Fengshui', ' skokfokofokoskpkfokosksvl\r\nskpvokpovk\r\nsc]lopksock\r\nscskjig\r\nelvkedjv0ke0vke', '', ' slpopks\r\nsv\r\nl[vl\r\n\r\nvl\r\ndlbp[kd[b\r\ndlb', 2147483647, '2015-10-12 01:50:00'),
(39, 'Draftsman', ' zzzzzzzzzzzzzz', 'Matara', ' czzzzzzzzzzzzz\r\nzzzzzz\r\nzzzzzzz', 2147483647, '2015-10-30 23:36:19'),
(40, 'Draftsman', ' zzzzzzzzzzzzzz', 'Mullaitivu', ' zzzzzzzzzzzzz', 41253698, '2015-10-12 06:39:49'),
(41, 'Astrology', ' I want to meet Astrology men to take advices before built a house. Please Contact me.', 'Badulla', ' No:12/56,\r\nPahathadumbara,\r\nDabulla.', 478965423, '2015-11-01 00:40:15'),
(42, 'Architect', ' kokpokokoijoi', 'Colombo', ' ', 0, '2015-11-01 00:45:53'),
(43, 'Architect', ' ', 'Colombo', ' ', 0, '2015-11-01 01:01:33'),
(44, 'Architect', '  jl', 'Colombo', '  hkh', 0, '2015-11-02 06:35:47'),
(45, 'Architect', '  gj', 'Colombo', '  gdfgsd', 0, '2015-11-02 06:44:02'),
(46, 'Architect', '  I want built a house.', 'Colombo', '  sjh', 0, '2015-11-02 07:11:58');

-- --------------------------------------------------------

--
-- Table structure for table `serviceprovider`
--

CREATE TABLE IF NOT EXISTS `serviceprovider` (
  `sp_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index',
  `user_id` int(11) DEFAULT NULL,
  `contactNo` int(15) NOT NULL,
  `opContactNo` int(15) DEFAULT NULL,
  `opEmail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `area` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `descr` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `workInfo` text COLLATE utf8_unicode_ci,
  `dob` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `languages` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gallery1` text COLLATE utf8_unicode_ci,
  `gallery2` text COLLATE utf8_unicode_ci,
  `gallery3` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`sp_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data' AUTO_INCREMENT=17 ;

--
-- Dumping data for table `serviceprovider`
--

INSERT INTO `serviceprovider` (`sp_id`, `user_id`, `contactNo`, `opContactNo`, `opEmail`, `category`, `area`, `descr`, `workInfo`, `dob`, `gender`, `address`, `website`, `languages`, `gallery1`, `gallery2`, `gallery3`) VALUES
(1, 1, 775669875, NULL, NULL, 'Carpenter', 'Colombo', 'I am a Carpenter with 37 years experience in the construction industry. I can be flexible from project management to taking on carpentry work only. I offer a personal service with free estimates and references.', 'I have worked mostly privately for the last 20 years. Iam experinced in designing pantries, wooden stair cases ,chairs,wood designs etc. ', '1973-06-05', 'Male', ' No 6/21,kaluthra', NULL, NULL, NULL, NULL, NULL),
(2, 2, 712365489, NULL, NULL, 'Mason', 'Kalutara', 'Im the mason in kaluthara district', 'I worked Nawaloka construction', '1984-10-10', 'Male', 'Kaluthara south,kaluthara', NULL, NULL, NULL, NULL, NULL),
(3, 3, 789654123, NULL, NULL, 'HandyMan', 'Colombo', 'Im the handy man in colombo district', 'I worked Nawaloka construction', '1976-10-10', 'Male', 'Kirulapane,Colombo', NULL, NULL, NULL, NULL, NULL),
(4, 4, 714563697, NULL, NULL, 'HandyMan', 'Gampaha', 'Im the handy man in gampaha district', 'I worked gampaha south construction', '1956-05-23', 'Male', 'No:78,Gampaha', NULL, NULL, NULL, NULL, NULL),
(5, 5, 714569872, NULL, NULL, 'HandyMan', 'Matara', 'I m the handy man in matara district', 'I worked Nawaloka construction', '1981-01-10', 'Male', 'No45,weligama', NULL, NULL, NULL, NULL, NULL),
(6, 6, 778992223, NULL, NULL, 'Carpenter', 'Ampara', 'Im the carpenter in ampara district', 'I worked Nawaloka construction', '1980-10-10', 'Male', 'No23,ampara south', NULL, NULL, NULL, NULL, NULL),
(7, 7, 714569872, NULL, NULL, 'Carpenter', 'Kandy', 'Im the carpenter in kandy district', 'I worked PQR project', '1979-10-20', 'Male', 'Kirulapane,Colombo', NULL, NULL, NULL, NULL, NULL),
(8, 8, 785236984, NULL, NULL, 'Plumber', 'NuwaraEliya', 'Im the plumber in nuwaraeliya district', 'I worked ABC project', '1979-08-29', 'Male', 'NO56,Nuwaraeliya', NULL, NULL, NULL, NULL, NULL),
(9, 9, 125487963, NULL, NULL, 'Plumber', 'Galle', 'Im the plumber in galle district', 'I worked Midigama construction', '1978-02-10', 'Male', 'Karapitiya,galle', NULL, NULL, NULL, NULL, NULL),
(10, 10, 715463256, NULL, NULL, 'Carpenter', 'Colombo', 'Im the carpenter in colombo district', 'I worked PQR construction', '1975-08-30', 'Male', 'Viraketiya,hambanthota', NULL, NULL, NULL, NULL, NULL),
(12, 12, 789655566, NULL, NULL, 'Contractor', 'Kandy', 'Im the contractor in kandy district', 'I worked Nawaloka construction', '1973-09-27', 'Male', 'No45, kandy', NULL, NULL, NULL, NULL, NULL),
(13, 13, 715899633, NULL, NULL, 'Carpenter', 'Kalutara', 'Im the carpenter in kaluthara district', 'I worked Naguma construction', '1972-08-14', 'Male', 'No78,kaluthra', NULL, NULL, NULL, NULL, NULL),
(14, 14, 785622456, NULL, NULL, 'Painter', 'Galle', 'Im the painter in galle district', 'I worked ABC project', '1971-01-10', 'Male', 'No20,galle', NULL, NULL, NULL, NULL, NULL),
(15, 15, 774552236, NULL, NULL, 'Painter', 'Anuradhapura', 'Im the painter in Anuradhapura district', 'I worked Nawaloka construction', '1976-10-10', 'Male', 'No2,anuradhapura', NULL, NULL, NULL, NULL, NULL),
(16, 16, 789662232, NULL, NULL, 'Painter', 'Badulla', 'Im the painter in Badulla', 'I worked cms project', '1946-03-10', 'Male', 'No 23,Badulla', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `systemadmin`
--

CREATE TABLE IF NOT EXISTS `systemadmin` (
  `sa_id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`sa_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `systemadmin`
--

INSERT INTO `systemadmin` (`sa_id`, `username`, `password`) VALUES
(1, 'baaslk', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `tblbidhistory`
--

CREATE TABLE IF NOT EXISTS `tblbidhistory` (
  `bidhistoryid` int(11) NOT NULL AUTO_INCREMENT,
  `accountid` int(11) NOT NULL,
  `biditemid` int(11) NOT NULL,
  `bidprice` bigint(20) NOT NULL,
  `dtesubmitted` datetime NOT NULL,
  PRIMARY KEY (`bidhistoryid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `tblbidhistory`
--

INSERT INTO `tblbidhistory` (`bidhistoryid`, `accountid`, `biditemid`, `bidprice`, `dtesubmitted`) VALUES
(21, 8, 73, 175000, '2015-10-18 06:17:19'),
(22, 8, 74, 80000, '2015-10-18 06:17:42'),
(23, 8, 76, 74000, '2015-10-18 06:17:55'),
(24, 8, 76, 83000, '2015-10-18 06:18:10'),
(25, 9, 73, 99000, '2015-10-18 07:23:02'),
(26, 9, 82, 57944, '2015-10-18 07:23:18'),
(27, 9, 77, 5892200, '2015-10-18 07:23:42'),
(28, 3, 73, 45, '2015-10-21 18:15:55'),
(29, 8, 83, 5464, '2015-11-02 14:45:12'),
(30, 8, 83, 80000, '2015-11-02 14:45:34'),
(31, 19, 82, 58000, '2015-11-02 15:05:30'),
(32, 20, 82, 65000, '2015-11-02 15:08:20'),
(33, 1, 82, 68000, '2015-11-02 19:45:49'),
(34, 1, 100, 89998, '2015-11-02 23:01:54');

-- --------------------------------------------------------

--
-- Table structure for table `tblbiditems`
--

CREATE TABLE IF NOT EXISTS `tblbiditems` (
  `biditemid` int(11) NOT NULL AUTO_INCREMENT,
  `accountno` varchar(50) NOT NULL,
  `biditem` varchar(50) NOT NULL,
  `biddesc` varchar(500) NOT NULL,
  `town` varchar(100) NOT NULL,
  `image_path` varchar(200) NOT NULL,
  `closingtime` text NOT NULL,
  PRIMARY KEY (`biditemid`),
  KEY `user_id` (`accountno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `tblbiditems`
--

INSERT INTO `tblbiditems` (`biditemid`, `accountno`, `biditem`, `biddesc`, `town`, `image_path`, `closingtime`) VALUES
(73, '8', '  Prime Property At Piachaud Gardens', '58.8125 Perch Prime Land In Piachaud Gardens The Most Prestigious Area In Kandy (in Front Of Light House Church) For Sale. Suitable For Educational Institute, Mansion, Apartment Project Or Tourism Project', 'Anuradhapura', '', 'Nov-30-2015 04:29:04 AM'),
(76, '8', 'Land in Haragama, Kandy', '*10km to Kandy town.\r\n*50m to Kandy-Badulla Rd.\r\n*Excellent neighbourhood.\r\n*Clear deed.\r\n*Close to the Royal park land sale.\r\n*Untroubled place to liv', 'Kandy', '', 'Dec-28-2015 05:58:56 AM'),
(77, '8', ' Kandy - Kengalla Residential Land For Sale', 'Extent : 12.674 Perches\r\nLocated on Kengalla - Malpana Road\r\n01 Km to Kandy - Digana Main Road\r\nResidential Location\r\n\r\n', 'Kandy', '', 'Dec-23-2015 07:10:07 AM'),
(82, '9', 'Brighter Park', 'Facilities_\r\n- Water -\r\n- Electricity -\r\n- 20 feet wide access roads - Bank loan facilities\r\n- Better quiet residential environment - \r\n- Clear deed -\r\n\r\nPrice can be negotiated.', 'Homagama', '', 'Dec-22-2015 07:21:12 AM'),
(99, '1', 'methviru land', 'i want to buy a land ', 'colombo', '', 'Nov-18-2015 07:59:08 PM'),
(100, '1', 'jlj', 'jklkj', 'jljk', '', 'jklkj');

-- --------------------------------------------------------

--
--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index',
  `user_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name, unique',
  `user_password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s password in salted and hashed format',
  `user_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s email, unique',
  `user_active` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'user''s activation status',
  `user_activation_hash` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user''s email verification hash string',
  `user_password_reset_hash` char(40) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user''s password reset code',
  `user_password_reset_timestamp` bigint(20) DEFAULT NULL COMMENT 'timestamp of the password reset request',
  `user_rememberme_token` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user''s remember-me cookie token',
  `user_failed_logins` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'user''s failed login attemps',
  `user_last_failed_login` int(10) DEFAULT NULL COMMENT 'unix timestamp of last failed login attempt',
  `user_registration_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_registration_ip` varchar(39) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0.0.0.0',
  `user_firstname` text COLLATE utf8_unicode_ci,
  `user_lastname` text COLLATE utf8_unicode_ci,
  `user_avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_catagory` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `login_type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data' AUTO_INCREMENT=18 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password_hash`, `user_email`, `user_active`, `user_activation_hash`, `user_password_reset_hash`, `user_password_reset_timestamp`, `user_rememberme_token`, `user_failed_logins`, `user_last_failed_login`, `user_registration_datetime`, `user_registration_ip`, `user_firstname`, `user_lastname`, `user_avatar`, `user_catagory`, `login_type`) VALUES
(1, 'janith', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'jankavi85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'Janalanka', 'Wood Works', 'avatar/default.jpg', 'sp', NULL),
(2, 'kamal', '$2y$10$wHkMCYwjG0A/gaO95i8SV.XX6rq1OfWpiFlrVFAnNO866wGKHGKhC', 'kamalamal85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 09:37:26', '127.0.0.1', 'kamal', 'Perera', 'avatar/default.jpg', 'sp', NULL),
(3, 'kevin', '$2y$10$h1LkMoN2p.COBym9l4d.jOiVpDBuIeiUfT8EvCQ5HTGF5.fEPI8iG', 'kevinlevin720@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 09:53:40', '::1', 'Kevin', 'Perera', 'avatar/default.jpg', 'sp', NULL),
(4, 'kavinda', '$2y$10$6PJUKTWAkkn4Nrz4n.YmoeZhr0QqftgWMvieO6Mvsv4nDOCMbVl2O', 'kavindawijerathne85@gmail.com', 0, '54a61ef266e0887bb3379a4b75ba3a548e099d33', NULL, NULL, NULL, 1, 1445015590, '2015-10-16 09:57:25', '127.0.0.1', 'Sunil', 'dasanayake', 'avatar/default.jpg', 'sp', NULL),
(5, 'hashini', '$2y$10$ivWdhr4XwA3oRxHVjYy1O.oNPEhDkPxDJkV9qQ3Txt8vu.fh92W1u', 'hashinihimasha560@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 10:02:41', '::1', 'kevin', 'Perera', 'avatar/default.jpg', 'sp', NULL),
(6, 'miyuru', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'miyuru@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ABC', 'Electricals', 'avatar/default.jpg', 'sp', NULL),
(7, 'nisal', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'nisaljankavi85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'Hightec Solutions', NULL, 'avatar/default.jpg', 'sp', NULL),
(8, 'dinidu', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'dinidu85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'Orange', 'Electricals', 'avatar/default.jpg', 'sp', NULL),
(9, 'kanchana', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'kanchana85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'Sathuta', 'builders', 'avatar/default.jpg', 'sp', NULL),
(10, 'dananga', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'dananga85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'malith', 'perera', 'avatar/default.jpg', 'sp', NULL),
(12, 'nipuna', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'nipunavi85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'nisal', 'nadeera', 'avatar/default.jpg', 'sp', NULL),
(13, 'nethviru', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'nethviru85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'methviru', 'gamahe', 'avatar/default.jpg', 'sp', NULL),
(14, 'padukka', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'padukka85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'Unitect', 'architects', 'avatar/default.jpg', 'sp', NULL),
(15, 'nirmal', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'malith009@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', NULL, NULL, 'avatar/default.jpg', 'sp', NULL),
(16, 'wijerathne', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'wijerathne85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', NULL, NULL, 'avatar/default.jpg', 'sp', NULL),
(17, 'customer', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'customer85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'Customer', 'Customer', 'avatar/default.jpg', 'customer', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
