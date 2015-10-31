CREATE DATABASE IF NOT EXISTS `baaslk`;

CREATE TABLE IF NOT EXISTS `baaslk`.`users` (

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
 `user_firstname` text,
 `user_lastname` text,
 `user_avatar` varchar(255) NOT NULL,
 `user_catagory` varchar(50) NOT NULL,
	`login_type` varchar(50) DEFAULT NULL,
 PRIMARY KEY (`user_id`),
 UNIQUE KEY `user_name` (`user_name`),
 UNIQUE KEY `user_email` (`user_email`)

 
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data';





CREATE TABLE IF NOT EXISTS `baaslk`.`serviceprovider` (

 `sp_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index',
 `user_id` int(11),
 `contactNo` int(15) NOT NULL,
 `opContactNo` int(15) DEFAULT NULL,
 `opEmail` varchar(255) DEFAULT NULL,
 `category` varchar(100) NOT NULL, 
 `area` varchar(100) NOT NULL,
 `descr` varchar(300) NULL,
 `workInfo` text DEFAULT NULL, 
 `dob` varchar(100) DEFAULT NULL,
 `gender` varchar(255) DEFAULT NULL,
 `address` text DEFAULT NULL,
 `website` varchar(255) DEFAULT NULL, 
 `languages` varchar(10) DEFAULT NULL,
 `gallery1` text DEFAULT NULL,
 `gallery2` text DEFAULT NULL,
 `gallery3` text DEFAULT NULL,
 
 
 
 
 
 FOREIGN KEY (`user_id`) REFERENCES users(`user_id`),
 
 PRIMARY KEY (`sp_id`)
 
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data';


CREATE TABLE IF NOT EXISTS `baaslk`.`customer` (

 `customer_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index',
 `user_id` int(11),
 `contactNo` int(15) NOT NULL,
 `opContactNo` int(15) DEFAULT NULL,
 `opEmail` varchar(255) DEFAULT NULL,
 `category` varchar(100) NOT NULL, 
 `area` varchar(100) NOT NULL,
 `descr` varchar(300) NULL,
 `workInfo` text DEFAULT NULL, 
 `dob` varchar(100) DEFAULT NULL,
 `gender` varchar(255) DEFAULT NULL,
 `address` text DEFAULT NULL,
 `website` varchar(255) DEFAULT NULL, 
 
 
 FOREIGN KEY (`user_id`) REFERENCES users(`user_id`),
 
 PRIMARY KEY (`customer_id`)
 
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data';


CREATE TABLE IF NOT EXISTS `baaslk`.`tblbidhistory` (
  `bidhistoryid` int(11) NOT NULL AUTO_INCREMENT,
  `accountid` int(11) NOT NULL,
  `biditemid` int(11) NOT NULL,
  `bidprice` bigint(20) NOT NULL,
  `dtesubmitted` datetime NOT NULL,
  PRIMARY KEY (`bidhistoryid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

INSERT INTO `tblbidhistory` (`bidhistoryid`, `accountid`, `biditemid`, `bidprice`, `dtesubmitted`) VALUES
(21, 8, 73, 175000, '2015-10-18 06:17:19'),
(22, 8, 74, 80000, '2015-10-18 06:17:42'),
(23, 8, 76, 74000, '2015-10-18 06:17:55'),
(24, 8, 76, 83000, '2015-10-18 06:18:10'),
(25, 9, 73, 99000, '2015-10-18 07:23:02'),
(26, 9, 82, 57944, '2015-10-18 07:23:18'),
(27, 9, 77, 5892200, '2015-10-18 07:23:42'),
(28, 3, 73, 45, '2015-10-21 18:15:55');

CREATE TABLE IF NOT EXISTS `baaslk`.`tblbiditems` (
  `biditemid` int(11) NOT NULL AUTO_INCREMENT,
  `accountid` varchar(50) NOT NULL,
  `biditem` varchar(50) NOT NULL,
  `biddesc` varchar(500) NOT NULL,
  `town` varchar(100) NOT NULL,
  `image_path` varchar(200) NOT NULL,
  `closingtime` text NOT NULL,
  PRIMARY KEY (`biditemid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=99 ;

INSERT INTO `tblbiditems` (`biditemid`, `accountid`, `biditem`, `biddesc`, `town`, `image_path`, `closingtime`) VALUES
(73, '8', '  Prime Property At Piachaud Gardens', '58.8125 Perch Prime Land In Piachaud Gardens The Most Prestigious Area In Kandy (in Front Of Light House Church) For Sale. Suitable For Educational Institute, Mansion, Apartment Project Or Tourism Project', '', '', 'Oct-31-2015 04:29:04 AM'),
(76, '8', 'Land in Haragama, Kandy', '*10km to Kandy town.\r\n*50m to Kandy-Badulla Rd.\r\n*Excellent neighbourhood.\r\n*Clear deed.\r\n*Close to the Royal park land sale.\r\n*Untroubled place to liv', 'Kandy', '', 'Oct-28-2015 05:58:56 AM'),
(77, '8', ' Kandy - Kengalla Residential Land For Sale', 'Extent : 12.674 Perches\r\nLocated on Kengalla - Malpana Road\r\n01 Km to Kandy - Digana Main Road\r\nResidential Location\r\n\r\n', 'Kandy', '', 'Oct-23-2015 07:10:07 AM'),
(82, '9', 'Brighter Park', 'Facilities_\r\n- Water -\r\n- Electricity -\r\n- 20 feet wide access roads - Bank loan facilities\r\n- Better quiet residential environment - \r\n- Clear deed -\r\n\r\nPrice can be negotiated.', 'Homagama', '', 'Oct-22-2015 07:21:12 AM'),
(83, '9', 'Land in Punchiborella for Sale', '\r\nNo. 888 Maradana Road, Colombo 10., Colombo 10 (Maradana, Panchikawatta), Colombo, Colombo\r\nLKR 6,000,000', 'Borella', '', 'Oct-28-2015 07:28:41 AM'),
(85, '3', 'Malith', 'sdf', 'asdffdsa', '', 'Oct-21-2015 06:42:02 AM'),
(88, '', 'sadf', 'sdfsd', 'sdfsdf', '', 'Oct-14-2015 03:52:58 PM'),
(89, '', 'fdg', 'dfg', 'dfg', '', 'Oct-21-2015 05:45:09 PM'),
(90, '', 'sdf', 'df', 'dfs', '', 'Oct-21-2015 05:46:18 PM'),
(91, '', 'sdf', 'sdf', 'sdf', '', 'Oct-21-2015 05:46:50 PM'),
(92, '8', '', '', '', '', ''),
(93, '8', 'sdf', 'sdf', 'sdf', '', 'Oct-21-2015 05:49:27 PM'),
(94, '8', '', '', '', '', ''),
(95, '8', 'dfg', 'dfg', 'dfg', '', 'Oct-21-2015 05:50:23 PM'),
(97, '8', 'sfdsf', 'sdf', 'sdf', '', 'Oct-21-2015 06:17:15 PM'),
(98, '8', 'gkg', 'ghjj', 'ghj', '', 'Oct-21-2015 06:18:12 PM');




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
(1, 1, 'janith', 'j-606575988.png', 'go to srch br', '23/09/15 07:24:23', 'sp'),
(1, 2, 'kamal', '90496-404584807.jpg', 'go to hmpg', '23/09/15 07:30:14', 'customer'),
(1, 3, 'janith', 'j-606575988.png', 'jllkj', '15/10/15 16:40:26', 'sp'),
(2, 1, 'janith', 'default.jpg', 'jlljl', '16/10/15 05:26:24', 'customer');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `fquestions`
--

INSERT INTO `fquestions` (`id`, `user`, `userphoto`, `topic`, `detail`, `datetime`, `view`, `reply`, `user_catagory`) VALUES
(1, 'janith', 'j-606575988.png', 'find a baas', 'hw to find a baas', '23/09/15 07:23:51', 43, 3, 'sp'),
(2, 'janith', 'j-606575988.png', 'jfgfsj', 'hlhglh', '12/10/15 05:28:48', 35, 1, 'sp'),
(3, 'hashini', 'default.jpg', 'i want to buy bus', 'how to find a bus', '16/10/15 11:49:45', 7, 0, 'sp');

