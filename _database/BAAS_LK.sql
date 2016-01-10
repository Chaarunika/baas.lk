-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2015 at 06:59 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `baaslk`
--

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`calendar_id`, `title`, `detail`, `jobDate`, `dateAdded`, `location`, `jobtime`, `contactno`, `customer_id`, `sp_id`, `accepted`) VALUES
(3, 'pantry cupboard', 'pantry wood', '11/04/2015', '2015-11-03', 'colombo', '7:00 AM', '0717507035', 19, 1, 1),
(4, 'pantry cupboard', 'pantry', '11/05/2015', '2015-11-03', 'Colombo', '7:00 AM', '0717456523', 23, 1, 1);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data' AUTO_INCREMENT=5 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `user_id`, `contactNo`, `opContactNo`, `opEmail`, `area`, `dob`, `gender`, `address`, `languages`) VALUES
(1, 17, 712310111, NULL, NULL, 'Colombo', '1973-06-05', 'Male', 'Kollupitiya,Colombo 03', NULL),
(4, 23, 0, NULL, NULL, '', NULL, NULL, NULL, NULL);

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

INSERT INTO `fanswer` (`question_id`, `a_id`, `user`, `userphoto`, `a_answer`, `a_datetime`, `user_catagory`) VALUES
(6, 1, 'janith', 'avatar/default.jpg', 'its abouth Rs.1000  per day', '03/11/15 09:11:08', 'sp'),
(11, 1, 'janith', 'avatar/default.jpg', 'i also know', '03/11/15 10:44:20', 'sp'),
(6, 2, 'janith', 'avatar/default.jpg', 'ljlj;j;jk', '15/11/15 04:00:14', 'sp');

-- --------------------------------------------------------

--
-- Table structure for table `fquestions`
--

CREATE TABLE IF NOT EXISTS `fquestions` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `user` varchar(65) NOT NULL DEFAULT '',
  `userphoto` varchar(255) NOT NULL DEFAULT '',
  `topic` varchar(255) NOT NULL DEFAULT '',
  `detail` longtext NOT NULL,
  `datetime` varchar(25) NOT NULL DEFAULT '',
  `view` int(4) NOT NULL DEFAULT '0',
  `reply` int(4) NOT NULL DEFAULT '0',
  `user_catagory` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `fquestions`
--

INSERT INTO `fquestions` (`id`, `user`, `userphoto`, `topic`, `detail`, `datetime`, `view`, `reply`, `user_catagory`) VALUES
(6, 'customer', 'avatar/default.jpg', 'what are the minimum wages for amason', 'please help me to find current  wages for a mason', '03/11/15 09:10:33', 20, 2, 'customer'),
(11, 'janith', 'avatar/default.jpg', 'New cement', 'I know a new cement', '03/11/15 10:44:01', 8, 1, 'sp');

-- --------------------------------------------------------

--
-- Table structure for table `pm`
--

CREATE TABLE IF NOT EXISTS `pm` (
  `id` bigint(20) NOT NULL,
  `id2` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `user1` bigint(20) NOT NULL,
  `user2` bigint(20) NOT NULL,
  `message` text NOT NULL,
  `timestamp` int(10) NOT NULL,
  `user1read` varchar(3) NOT NULL,
  `user2read` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pm`
--

INSERT INTO `pm` (`id`, `id2`, `title`, `user1`, `user2`, `message`, `timestamp`, `user1read`, `user2read`) VALUES
(13, 1, 'Testing', 1, 2, 'Testing message', 1446741828, 'yes', 'yes'),
(13, 2, '', 2, 0, 'Thank you', 1446743093, '', ''),
(3, 1, 'jlljl;', 1, 17, 'lj;k;k', 1447560644, 'yes', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `postjob2`
--

CREATE TABLE IF NOT EXISTS `postjob2` (
  `job_id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) NOT NULL,
  `job_type` varchar(100) NOT NULL,
  `job_description` varchar(1000) NOT NULL,
  `area` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `tel_num` int(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `postjob2`
--

INSERT INTO `postjob2` (`job_id`, `username`, `job_type`, `job_description`, `area`, `address`, `tel_num`, `time`) VALUES
(49, 'malith', 'Interior Designer', '  Interior designer needed for a built house.URGENT', 'Colombo', '  colombo 07', 712564896, '2015-11-03 08:59:39'),
(50, 'customer', 'Mason', 'Niawasak kapararu kereemata awashyawa atha. Ikmanin amathanna.', 'Colombo', '  pettah', 712564896, '2015-11-03 09:00:49'),
(51, 'customer', 'Contractor', 'Kurunegala niwasak itha ikmanin sadeemata awashya wee atha.amathanna', 'Colombo', '  colombo', 112318333, '2015-11-03 09:07:05'),
(53, 'customer', 'Carpenter', '  Pantry cupboard', 'Colombo', '  34,homagama', 717332631, '2015-11-03 10:40:11'),
(54, 'customer', 'Numerology Service', '  i want to meet numerology man, i want meet imidiately, any one meet me', 'Kandy', '  120,vira mawatha,katugastota', 777777777, '2015-11-15 05:49:39'),
(55, 'root', 'Architect', '  i want to find architect for my house work', 'Ampara', '  no 133, waliwita,kalmune', 778676679, '2015-11-15 08:49:58'),
(56, 'root', 'Architect', '  ljl;jk', 'Colombo', '  lj;jkl', 778676679, '2015-11-15 08:51:43'),
(57, 'root', 'Architect', '  ljlj', 'Colombo', '  jlk', 777777777, '2015-11-15 08:53:56'),
(58, 'customer', 'Architect', '  jljk', 'Colombo', '  jl;k', 778676679, '2015-11-15 08:56:42');

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
  `rating` int(11) DEFAULT NULL,
  `ratingCount` int(11) DEFAULT NULL,  
  PRIMARY KEY (`sp_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data' AUTO_INCREMENT=21 ;

--
-- Dumping data for table `serviceprovider`
--

INSERT INTO `serviceprovider` (`sp_id`, `user_id`, `contactNo`, `opContactNo`, `opEmail`, `category`, `area`, `descr`, `workInfo`, `dob`, `gender`, `address`, `website`, `languages`,`rating`,`ratingCount`) VALUES
(1, 1, 775669875, NULL, NULL, 'Carpenter', 'Colombo', 'I am a Carpenter with 37 years experience in the construction industry. I can be flexible from project management to taking on carpentry work only. I offer a personal service with free estimates and references.', 'I have worked mostly privately for the last 20 years. Iam experinced in designing pantries, wooden stair cases ,chairs,wood designs etc. ', '1973-06-05', 'Male', ' No 6/21,kaluthra', NULL, NULL, NULL, NULL),
(2, 2, 712365489, NULL, NULL, 'Mason', 'Kalutara', 'Im the mason in kaluthara district', 'I worked Nawaloka construction', '1984-10-10', 'Male', 'Kaluthara south,kaluthara', NULL, NULL, NULL, NULL),
(3, 3, 789654123, NULL, NULL, 'HandyMan', 'Colombo', 'Im the handy man in colombo district', 'I worked Nawaloka construction', '1976-10-10', 'Male', 'Kirulapane,Colombo', NULL, NULL, NULL, NULL),
(4, 4, 714563697, NULL, NULL, 'HandyMan', 'Gampaha', 'Im the handy man in gampaha district', 'I worked gampaha south construction', '1956-05-23', 'Male', 'No:78,Gampaha', NULL, NULL, NULL, NULL),
(5, 5, 714569872, NULL, NULL, 'HandyMan', 'Matara', 'I m the handy man in matara district', 'I worked Nawaloka construction', '1981-01-10', 'Male', 'No45,weligama', NULL, NULL, NULL, NULL),
(8, 8, 785236984, NULL, NULL, 'Plumber', 'NuwaraEliya', 'Im the plumber in nuwaraeliya district', 'I worked ABC project', '1979-08-29', 'Male', 'NO56,Nuwaraeliya', NULL, NULL, NULL, NULL),
(9, 9, 125487963, NULL, NULL, 'Plumber', 'Galle', 'Im the plumber in galle district', 'I worked Midigama construction', '1978-02-10', 'Male', 'Karapitiya,galle', NULL, NULL, NULL, NULL),
(10, 10, 715463256, NULL, NULL, 'Real Estate Company', 'Colombo', 'Land Seller & dealer in colombo district', 'I worked PQR construction', '1975-08-30', 'Male', 'Lucky Lanka Sons,No.456/7,Viraketiya,Hambanthota', 'www.luckylanka.org', NULL, NULL, NULL),
(12, 12, 789655566, NULL, NULL, 'Real Estate Company', 'Kandy', 'Im the Real Estate in kandy district', '', '1973-09-27', 'Male', 'No.45,Sri Deerananda Mawatha, kandy', 'www.wijayalankalands.lk', NULL, NULL, NULL),
(13, 13, 715899633, NULL, NULL, 'Carpenter', 'Kalutara', 'Im the carpenter in kaluthara district', 'I worked Naguma construction', '1972-08-14', 'Male', 'No78,kaluthra', NULL, NULL, NULL, NULL),
(14, 14, 785622456, NULL, NULL, 'Painter', 'Galle', 'Im the painter in galle district', 'I worked ABC project', '1971-01-10', 'Male', 'No20,galle', NULL, NULL, NULL, NULL),
(15, 15, 774552236, NULL, NULL, 'Painter', 'Anuradhapura', 'Im the painter in Anuradhapura district', 'I worked Nawaloka construction', '1976-10-10', 'Male', 'No2,anuradhapura', NULL, NULL, NULL, NULL),
(16, 16, 789662232, NULL, NULL, 'Painter', 'Badulla', 'Im the painter in Badulla', 'I worked cms project', '1946-03-10', 'Male', 'No 23,Badulla', NULL, NULL, NULL, NULL),


-- --------------------------------------------------------

--
-- Table structure for table `systemadmin`
--

CREATE TABLE IF NOT EXISTS `systemadmin` (
  `sa_id` int(20) NOT NULL,
  `adminusername` varchar(20) NOT NULL,
  `password` varchar(150) NOT NULL,
  PRIMARY KEY (`sa_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `systemadmin`
--

INSERT INTO `systemadmin` (`sa_id`, `adminusername`, `password`) VALUES
(1, 'baaslk', 'fcea920f7412b5da7be0cf42b8c93759');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=133 ;

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
(29, 8, 83, 5464, '2015-11-02 14:45:12'),
(30, 8, 83, 80000, '2015-11-02 14:45:34'),
(31, 19, 82, 58000, '2015-11-02 15:05:30'),
(32, 20, 82, 65000, '2015-11-02 15:08:20'),
(33, 1, 82, 68000, '2015-11-02 19:45:49'),
(34, 1, 100, 89998, '2015-11-02 23:01:54'),
(35, 1, 73, 100000, '2015-11-03 15:12:23'),
(36, 1, 73, 100000, '2015-11-03 16:12:59'),
(37, 1, 73, 565400, '2015-11-15 07:30:16'),
(38, 1, 73, 57500, '2015-11-15 07:31:37'),
(39, 1, 73, 575000, '2015-11-15 07:31:53'),
(40, 1, 73, 800000, '2015-11-15 07:33:27'),
(41, 1, 73, 900000, '2015-11-15 07:35:21'),
(42, 1, 73, 1000000, '2015-11-15 07:36:43'),
(43, 1, 73, 1100000, '2015-11-15 07:37:44'),
(44, 1, 73, 50000, '2015-11-15 07:40:35'),
(45, 1, 73, 20000, '2015-11-15 07:43:16'),
(46, 1, 73, 23000, '2015-11-15 07:48:00'),
(48, 1, 73, 24000, '2015-11-15 07:49:58'),
(49, 1, 73, 24000, '2015-11-15 07:50:14'),
(50, 1, 73, 25000, '2015-11-15 07:50:27'),
(51, 1, 73, 25000, '2015-11-15 07:50:41'),
(52, 1, 73, 26000, '2015-11-15 07:50:53'),
(53, 1, 73, 27599, '2015-11-15 07:51:10'),
(54, 1, 73, 45555, '2015-11-15 07:51:26'),
(55, 1, 73, 60000, '2015-11-15 07:52:48'),
(56, 1, 73, 1200000, '2015-11-15 08:00:32'),
(57, 1, 73, 13000, '2015-11-15 08:00:45'),
(58, 1, 73, 1300000, '2015-11-15 08:00:59'),
(59, 1, 73, 45678, '2015-11-15 08:35:02'),
(60, 1, 73, 45000, '2015-11-15 08:38:18'),
(61, 1, 73, 50000, '2015-11-15 08:38:31'),
(62, 1, 77, 2000, '2015-11-15 14:36:15'),
(63, 1, 82, 72000, '2015-11-15 14:36:34'),
(64, 1, 82, 73000, '2015-11-15 14:37:37'),
(66, 1, 76, 85000, '2015-11-15 14:54:34'),
(67, 1, 76, 86000, '2015-11-15 14:54:49'),
(68, 1, 76, 87000, '2015-11-15 14:55:21'),
(69, 1, 76, 89000, '2015-11-15 14:56:23'),
(70, 1, 120, 50000, '2015-11-15 14:58:15'),
(71, 1, 120, 60000, '2015-11-15 14:58:52'),
(72, 1, 120, 70000, '2015-11-15 14:59:30'),
(73, 1, 120, 80000, '2015-11-15 15:00:34'),
(74, 1, 120, 90000, '2015-11-15 15:01:11'),
(75, 1, 120, 100000, '2015-11-15 15:01:43'),
(76, 1, 120, 110000, '2015-11-15 15:02:58'),
(77, 1, 135, 1400000, '2015-11-16 15:44:24'),
(78, 1, 134, 675000, '2015-11-16 15:44:40'),
(79, 1, 134, 825000, '2015-11-16 15:44:59'),
(80, 1, 77, 4000000, '2015-11-16 15:45:18'),
(81, 1, 77, 5600000, '2015-11-16 15:45:34'),
(82, 25, 76, 4500000, '2015-11-16 15:46:49'),
(83, 13, 136, 1200000, '2015-11-17 09:14:32'),
(84, 13, 136, 1225000, '2015-11-17 09:14:46'),
(85, 13, 136, 1240000, '2015-11-17 09:15:04'),
(86, 13, 136, 1275000, '2015-11-17 09:15:20'),
(87, 13, 136, 1230000, '2015-11-17 09:15:36'),
(88, 8, 136, 1175000, '2015-11-17 09:16:12'),
(89, 8, 136, 1195000, '2015-11-17 09:16:25'),
(90, 8, 136, 1425000, '2015-11-17 09:16:36'),
(91, 8, 136, 1435000, '2015-11-17 09:16:52'),
(92, 8, 136, 1238000, '2015-11-17 09:17:11'),
(93, 1, 137, 1875000, '2015-11-17 09:27:45'),
(94, 1, 137, 1975000, '2015-11-17 09:28:01'),
(95, 1, 137, 1385000, '2015-11-17 09:28:15'),
(96, 1, 137, 2075000, '2015-11-17 09:28:32'),
(97, 1, 137, 2125000, '2015-11-17 09:28:47'),
(98, 1, 137, 237500, '2015-11-17 09:29:00'),
(99, 8, 137, 1850000, '2015-11-17 09:29:41'),
(100, 8, 137, 1875000, '2015-11-17 09:29:55'),
(101, 8, 137, 1990000, '2015-11-17 09:30:13'),
(102, 1, 138, 1385000, '2015-11-17 09:36:48'),
(103, 1, 138, 1000000, '2015-11-17 09:37:01'),
(104, 1, 138, 1700000, '2015-11-17 09:37:12'),
(105, 1, 138, 1900000, '2015-11-17 09:37:26'),
(106, 1, 138, 1925000, '2015-11-17 09:37:40'),
(107, 1, 138, 194000, '2015-11-17 09:37:49'),
(108, 8, 138, 198000, '2015-11-17 09:38:32'),
(109, 8, 138, 1995000, '2015-11-17 09:38:45'),
(110, 8, 138, 2125000, '2015-11-17 09:38:58'),
(111, 8, 138, 1800000, '2015-11-17 09:39:09'),
(112, 1, 139, 2000000, '2015-11-17 09:43:08'),
(113, 1, 139, 2075000, '2015-11-17 09:43:23'),
(114, 1, 139, 1975000, '2015-11-17 09:43:38'),
(115, 1, 139, 1875000, '2015-11-17 09:43:50'),
(116, 1, 139, 2300000, '2015-11-17 09:44:05'),
(117, 1, 139, 1775000, '2015-11-17 09:44:17'),
(118, 1, 139, 2475000, '2015-11-17 09:44:31'),
(119, 1, 139, 2490000, '2015-11-17 09:44:44'),
(120, 1, 139, 1875000, '2015-11-17 09:45:06'),
(121, 1, 140, 4875000, '2015-11-17 09:49:34'),
(122, 1, 140, 4325000, '2015-11-17 09:49:47'),
(123, 1, 140, 4275000, '2015-11-17 09:49:59'),
(124, 1, 140, 4020000, '2015-11-17 09:50:11'),
(125, 1, 140, 3375000, '2015-11-17 09:50:37'),
(126, 1, 140, 4925000, '2015-11-17 09:50:52'),
(127, 8, 140, 4723000, '2015-11-17 09:51:20'),
(128, 8, 140, 490000, '2015-11-17 09:51:33'),
(129, 8, 140, 4023000, '2015-11-17 09:51:49'),
(130, 8, 136, 75000, '2015-11-17 10:29:50'),
(131, 8, 136, 80000, '2015-11-17 10:30:20'),
(132, 1, 138, 2126000, '2015-11-17 14:29:24');

-- --------------------------------------------------------

--
-- Table structure for table `tblbiditems`
--

CREATE TABLE IF NOT EXISTS `tblbiditems` (
  `biditemid` int(11) NOT NULL AUTO_INCREMENT,
  `accountno` varchar(50) NULL,
  `biditem` varchar(50) NULL,
  `biddesc` varchar(500) NULL,
  `town` varchar(100) NULL,
  `image_path` varchar(200) NULL,
  `minimumbid` bigint(20) NULL,
  `closingtime` text NULL,
  PRIMARY KEY (`biditemid`),
  KEY `user_id` (`accountno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=141 ;

--
-- Dumping data for table `tblbiditems`
--

INSERT INTO `tblbiditems` (`biditemid`, `accountno`, `biditem`, `biddesc`, `town`, `image_path`, `closingtime`) VALUES
(136, '12', 'Prime Property At Piachaud Gardens', '58.8125 Perch Prime Land In Piachaud Gardens to sell @ the best price. The land is situated in the most prestigious area In Kandy (in Front Of Light House Church) Mostly suitable for an educational Institute, Mansion, Apartment Project Or Tourism Project', 'Kandy', 'images.jpg', 'Nov-30-2015 09:00:24 AM'),
(137, '10', 'Land in Haragama, Kandy', '10km to Kandy town.50m to Kandy-Badulla Rd.Excellent neighbourhood. Clear deed.Close to the Royal park land sale.Untroubled place to live. To be selled @ highest price.', 'Kandy', 'images (2).jpg', 'Dec-15-2015 10:00:00 AM'),
(138, '10', 'Brighter Park', 'Facilities_ - Water - - Electricity - - 20 feet wide access roads - Bank loan facilities - Better quiet residential environment - - Clear deed - Price can be negotiated', 'Colombo', 'images (1).jpg', 'Dec-31-2015 09:34:18 AM'),
(139, '10', 'Two Acre Beach Land for Hotel Development', 'Kandy, Aniwatte, Galkanda Road 45p land in residential area. Within the municipal limits. Close proximity to banks, shops and leading schools such as Girls High School, Swarnamali, Pushpadana and Kingswood.', 'Kandy', 'insde photo.jpg', 'Nov-30-2015 09:40:41 AM'),
(140, '1', '35 Perches Land with a Colonial House for Sale', '35 Perches of Prime land in Colombo 7 On Rajakeeya Mawatha Close to Royal College in Colombo 7. Ideal for a large Residence with renovation or use the land to build a residence in the area. Very Rare Opportunity to buy a land in this area.', 'Colombo', 'house_for_sale_galle_sri lanka_2.jpg', 'Nov-30-2015 09:46:30 AM');

-- --------------------------------------------------------

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data' AUTO_INCREMENT=25 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password_hash`, `user_email`, `user_active`, `user_activation_hash`, `user_password_reset_hash`, `user_password_reset_timestamp`, `user_rememberme_token`, `user_failed_logins`, `user_last_failed_login`, `user_registration_datetime`, `user_registration_ip`, `user_firstname`, `user_lastname`, `user_avatar`, `user_catagory`, `login_type`) VALUES
(1, 'janith', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'jankavi85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'Janalanka', 'Wood Works', 'avatar/default.jpg', 'sp', NULL),
(2, 'kamal', '$2y$10$wHkMCYwjG0A/gaO95i8SV.XX6rq1OfWpiFlrVFAnNO866wGKHGKhC', 'kamalamal85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 09:37:26', '127.0.0.1', 'kamal', 'Perera', 'avatar/default.jpg', 'sp', NULL),
(3, 'kevin', '$2y$10$h1LkMoN2p.COBym9l4d.jOiVpDBuIeiUfT8EvCQ5HTGF5.fEPI8iG', 'kevinlevin720@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 09:53:40', '::1', 'Kevin', 'Perera', 'avatar/default.jpg', 'sp', NULL),
(4, 'kavinda', '$2y$10$6PJUKTWAkkn4Nrz4n.YmoeZhr0QqftgWMvieO6Mvsv4nDOCMbVl2O', 'kavindawijerathne85@gmail.com', 0, '54a61ef266e0887bb3379a4b75ba3a548e099d33', NULL, NULL, NULL, 1, 1445015590, '2015-10-16 09:57:25', '127.0.0.1', 'Sunil', 'dasanayake', 'avatar/default.jpg', 'sp', NULL),
(5, 'hashini', '$2y$10$ivWdhr4XwA3oRxHVjYy1O.oNPEhDkPxDJkV9qQ3Txt8vu.fh92W1u', 'hashinihimasha560@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 10:02:41', '::1', 'kevin', 'Perera', 'avatar/default.jpg', 'sp', NULL),
(8, 'dinidu', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'dinidu85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'Orange', 'Electricals', 'avatar/default.jpg', 'sp', NULL),
(9, 'kanchana', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'kanchana85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'Sathuta', 'builders', 'avatar/default.jpg', 'sp', NULL),
(10, 'dananga', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'dananga85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'malith', 'perera', 'avatar/default.jpg', 'sp', NULL),
(12, 'nipuna', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'nipunavi85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'nisal', 'nadeera', 'avatar/default.jpg', 'sp', NULL),
(13, 'nethviru', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'nethviru85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'methviru', 'gamahe', 'avatar/default.jpg', 'sp', NULL),
(14, 'padukka', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'padukka85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'Unitect', 'architects', 'avatar/default.jpg', 'sp', NULL),
(15, 'nirmal', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'malith009999@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', NULL, NULL, 'avatar/default.jpg', 'sp', NULL),
(16, 'wijerathne', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'wijerathne85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', NULL, NULL, 'avatar/default.jpg', 'sp', NULL),
(17, 'customer', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'customer85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'Customer', 'Customer', 'avatar/default.jpg', 'customer', NULL),
(23, '10204860539585627', '', 'malith009@ymail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-11-03 16:05:08', '::1', 'Nirmal', 'Malith', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xap1/v/t1.0-1/c0.0.50.50/p50x50/971089_4976999835133_634578937_n.jpg?oh=f1e86b7caaded0027bbb40e2632775ea&oe=56CFBB5A&__gda__=1455613067_c1f4a16b55154a9d30ce4b1268e6d67a', 'customer', 'fb'),
(24, 'malith0091', '$2y$10$5b./Ama.KyDamGZRpu9MJesAZZr7tqBPCWgA0TNC.qJgZIlYSLH2O', 'malith009@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-11-03 16:07:50', '::1', NULL, NULL, 'avatar/default.jpg', 'sp', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
