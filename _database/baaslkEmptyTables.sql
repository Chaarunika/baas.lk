-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 12, 2016 at 09:38 PM
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
  `reported` int(1) NOT NULL,
  `feedback` int(1) NOT NULL,
  PRIMARY KEY (`calendar_id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE IF NOT EXISTS `complain` (
  `complain_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_id` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`complain_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fanswer`
--

CREATE TABLE IF NOT EXISTS `fanswer` (
  `question_id` int(4) NOT NULL DEFAULT '0',
  `a_id` int(4) NOT NULL DEFAULT '0',
  `user` varchar(65) NOT NULL DEFAULT '',
  `userphoto` varchar(255) NOT NULL DEFAULT '',
  `a_answer` longtext NOT NULL,
  `a_datetime` varchar(25) NOT NULL DEFAULT '',
  `user_catagory` varchar(65) NOT NULL,
  KEY `a_id` (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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

-- --------------------------------------------------------

--
-- Table structure for table `postjob2`
--

CREATE TABLE IF NOT EXISTS `postjob2` (
  `job_id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `job_description` varchar(1000) NOT NULL,
  `area` varchar(255) NOT NULL,
  `address` varchar(200) NOT NULL,
  `tel_num` int(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `descr` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `workInfo` text COLLATE utf8_unicode_ci,
  `dob` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `languages` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `ratingCount` int(11) DEFAULT NULL,
  PRIMARY KEY (`sp_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data' AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `minimumbid` bigint(20) NOT NULL,
  `closingtime` text NOT NULL,
  PRIMARY KEY (`biditemid`),
  KEY `user_id` (`accountno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data' AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
