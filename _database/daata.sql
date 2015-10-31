-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 21, 2015 at 01:16 PM
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
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index',
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
  PRIMARY KEY (`customer_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data' AUTO_INCREMENT=1 ;

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
(1, 8, 775669875, NULL, NULL, 'Carpenter', 'Kalutara', 'Im the carpenter in kalutara district', 'I worked ABC project', '1973-06-05', 'Male', 'No6.kaluthra', NULL, NULL, NULL, NULL, NULL),
(2, 7, 712365489, NULL, NULL, 'Mason', 'Kalutara', 'Im the mason in kaluthara district', 'I worked Nawaloka construction', '1984-10-10', 'Male', 'Kaluthara south,kaluthara', NULL, NULL, NULL, NULL, NULL),
(3, 5, 789654123, NULL, NULL, 'HandyMan', 'Colombo', 'Im the handy man in colombo district', 'I worked Nawaloka construction', '1976-10-10', 'Male', 'Kirulapane,Colombo', NULL, NULL, NULL, NULL, NULL),
(4, 6, 714563697, NULL, NULL, 'HandyMan', 'Gampaha', 'Im the handy man in gampaha district', 'I worked gampaha south construction', '1956-05-23', 'Male', 'No:78,Gampaha', NULL, NULL, NULL, NULL, NULL),
(5, 22, 714569872, NULL, NULL, 'HandyMan', 'Matara', 'I m the handy man in matara district', 'I worked Nawaloka construction', '1981-01-10', 'Male', 'No45,weligama', NULL, NULL, NULL, NULL, NULL),
(6, 23, 778992223, NULL, NULL, 'Painter', 'Ampara', 'Im the painter in ampara district', 'I worked Nawaloka construction', '1980-10-10', 'Male', 'No23,ampara south', NULL, NULL, NULL, NULL, NULL),
(7, 24, 714569872, NULL, NULL, 'Mason', 'Kandy', 'Im the mason in kandy district', 'I worked PQR project', '1979-10-20', 'Male', 'Kirulapane,Colombo', NULL, NULL, NULL, NULL, NULL),
(8, 25, 785236984, NULL, NULL, 'Plumber', 'NuwaraEliya', 'Im the plumber in nuwaraeliya district', 'I worked ABC project', '1979-08-29', 'Male', 'NO56,Nuwaraeliya', NULL, NULL, NULL, NULL, NULL),
(9, 26, 125487963, NULL, NULL, 'Plumber', 'Galle', 'Im the plumber in galle district', 'I worked Midigama construction', '1978-02-10', 'Male', 'Karapitiya,galle', NULL, NULL, NULL, NULL, NULL),
(10, 28, 715463256, NULL, NULL, 'Carpenter', 'Hambanthota', 'Im the carpenter in hambanthota district', 'I worked PQR construction', '1975-08-30', 'Male', 'Viraketiya,hambanthota', NULL, NULL, NULL, NULL, NULL),
(11, 29, 778956325, NULL, NULL, 'Contractor', 'Colombo', 'Im the contractor in colombo district', 'I worked DEF project', '1974-08-17', 'Male', 'Kirulapane,Colombo', NULL, NULL, NULL, NULL, NULL),
(12, 30, 789655566, NULL, NULL, 'Contractor', 'Kandy', 'Im the contractor in kandy district', 'I worked Nawaloka construction', '1973-09-27', 'Male', 'No45, kandy', NULL, NULL, NULL, NULL, NULL),
(13, 31, 715899633, NULL, NULL, 'Painter', 'Kalutara', 'Im the painter in kaluthara district', 'I worked Naguma construction', '1972-08-14', 'Male', 'No78,kaluthra', NULL, NULL, NULL, NULL, NULL),
(14, 32, 785622456, NULL, NULL, 'Painter', 'Galle', 'Im the painter in galle district', 'I worked ABC project', '1971-01-10', 'Male', 'No20,galle', NULL, NULL, NULL, NULL, NULL),
(15, 33, 774552236, NULL, NULL, 'Painter', 'Anuradhapura', 'Im the painter in Anuradhapura district', 'I worked Nawaloka construction', '1976-10-10', 'Male', 'No2,anuradhapura', NULL, NULL, NULL, NULL, NULL),
(16, 34, 789662232, NULL, NULL, 'Painter', 'Badulla', 'Im the painter in Badulla', 'I worked cms project', '1946-03-10', 'Male', 'No 23,Badulla', NULL, NULL, NULL, NULL, NULL);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data' AUTO_INCREMENT=67 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password_hash`, `user_email`, `user_active`, `user_activation_hash`, `user_password_reset_hash`, `user_password_reset_timestamp`, `user_rememberme_token`, `user_failed_logins`, `user_last_failed_login`, `user_registration_datetime`, `user_registration_ip`, `user_firstname`, `user_lastname`, `user_avatar`, `user_catagory`, `login_type`) VALUES
(1, 'janith', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'jankavi85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'customer', NULL),
(2, 'kamal', '$2y$10$wHkMCYwjG0A/gaO95i8SV.XX6rq1OfWpiFlrVFAnNO866wGKHGKhC', 'kamalamal85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 09:37:26', '127.0.0.1', 'kamal', 'amal', 'default.jpg', 'sp', NULL),
(3, 'kevin', '$2y$10$h1LkMoN2p.COBym9l4d.jOiVpDBuIeiUfT8EvCQ5HTGF5.fEPI8iG', 'kevinlevin720@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 09:53:40', '::1', NULL, NULL, 'default.jpg', 'sp', NULL),
(4, 'kavinda', '$2y$10$6PJUKTWAkkn4Nrz4n.YmoeZhr0QqftgWMvieO6Mvsv4nDOCMbVl2O', 'kavindawijerathne85@gmail.com', 0, '54a61ef266e0887bb3379a4b75ba3a548e099d33', NULL, NULL, NULL, 1, 1445015590, '2015-10-16 09:57:25', '127.0.0.1', NULL, NULL, 'default.jpg', 'sp', NULL),
(5, 'hashini', '$2y$10$ivWdhr4XwA3oRxHVjYy1O.oNPEhDkPxDJkV9qQ3Txt8vu.fh92W1u', 'hashinihimasha560@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 10:02:41', '::1', 'kevin', '', 'hydrangeas-1364408688.jpg', 'sp', NULL),
(6, 'miyuru', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'miyuru@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'customer', NULL),
(7, 'nisal', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'nisaljankavi85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'customer', NULL),
(8, 'dinidu', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'dinidu85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'customer', NULL),
(9, 'kanchana', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'kanchana85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'customer', NULL),
(10, 'dananga', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'dananga85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'customer', NULL),
(11, 'malith', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'malith@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'customer', NULL),
(12, 'nipuna', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'nipunavi85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'customer', NULL),
(13, 'nethviru', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'nethviru85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'customer', NULL),
(14, 'padukka', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'padukka85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'customer', NULL),
(15, 'nirmal', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'nirmal@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'customer', NULL),
(16, 'wijerathne', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'wijerathne85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'customer', NULL),
(17, 'nuwan', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'nuwan@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'nuwan', 'prbath', 'koala-49486548.jpg', 'sp', NULL),
(18, 'namal', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'namal@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(19, 'chathuranga', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'chathuranga@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(20, 'danuska', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'danuska.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(21, 'damith', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'damith@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(22, 'asanka', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'asanka@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(23, 'malisha', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'malisha@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(24, 'kemal', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'kemal@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(25, 'chamod', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'chamod@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(26, 'kalum', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'kalum@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(27, 'chankana', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'chankana@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(28, 'danuka', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'danuka@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(29, 'mahinda', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'mahinda@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(30, 'maitri', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'maitri@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(31, 'vimal', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'vimal@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(32, 'ranil', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'ranil@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(33, 'sujeewa', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'sujeewa@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(34, 'lakshita', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'kanuwan@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(35, 'amal', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'amal@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(36, 'anjana', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'anjana@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(37, 'nadeesh', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'nadeesh@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(38, 'lahiru', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'lahiru@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(39, 'lakmal', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'lakmal@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(40, 'nisita', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'nisita@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(41, 'namal98', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'namajl@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(42, 'namal87', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'namalkl@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(43, 'namal121', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'namkal@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(44, 'amal bandara', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'nljlamal@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(45, 'vihkjkkjhmal', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'namalkllk@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(46, 'sunimal', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'nakjmal@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(47, 'chamal', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'na9888mal@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(48, 'asitha', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'na88mal@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(49, 'rajitha', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'na8999999mal@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(50, 'thusitha', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'na9999mal@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(51, 'abilin', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'na99999mal@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(52, 'surasena', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'na99mal@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(53, 'nipunasmara', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'n99amal@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(54, 'kavesha', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'njkklamal@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(55, 'ruwan', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'kjklnamal@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(56, 'rohana', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'na9mal@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(57, 'jayawansha', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'n0amal@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(58, 'nimal r perie', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'n098amal@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(59, 'vijith', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'nama90l@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(60, 'vijithamuni', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'n23amal@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(61, 's.B', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'n43amal@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(62, 'disanayaka', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'nam34al@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(63, 'deshppriya', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', '34@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(64, 'kalum9', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'na343mal@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(65, 'sennaaa', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', '12namal@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL),
(66, 'sirimal', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', '123namal@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ljk', 'ljljlj;', 'default.jpg', 'sp', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
