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



INSERT INTO `baaslk`.`users` (`user_id`, `user_name`, `user_password_hash`, `user_email`, `user_active`, `user_activation_hash`, `user_password_reset_hash`, `user_password_reset_timestamp`, `user_rememberme_token`, `user_failed_logins`, `user_last_failed_login`, `user_registration_datetime`, `user_registration_ip`, `user_firstname`, `user_lastname`, `user_avatar`, `user_catagory`, `login_type`) VALUES
(1, 'janith', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'jankavi85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'Janith', 'Kavinda', 'avatar/default.jpg', 'sp', NULL),
(2, 'kamal', '$2y$10$wHkMCYwjG0A/gaO95i8SV.XX6rq1OfWpiFlrVFAnNO866wGKHGKhC', 'kamalamal85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 09:37:26', '127.0.0.1', 'kamal', 'Perera', 'avatar/default.jpg', 'sp', NULL),
(3, 'kevin', '$2y$10$h1LkMoN2p.COBym9l4d.jOiVpDBuIeiUfT8EvCQ5HTGF5.fEPI8iG', 'kevinlevin720@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 09:53:40', '::1', 'Kevin', 'Perera', 'avatar/default.jpg', 'sp', NULL),
(4, 'kavinda', '$2y$10$6PJUKTWAkkn4Nrz4n.YmoeZhr0QqftgWMvieO6Mvsv4nDOCMbVl2O', 'kavindawijerathne85@gmail.com', 0, '54a61ef266e0887bb3379a4b75ba3a548e099d33', NULL, NULL, NULL, 1, 1445015590, '2015-10-16 09:57:25', '127.0.0.1', 'Sunil', 'dasanayake', 'avatar/default.jpg', 'sp', NULL),
(5, 'hashini', '$2y$10$ivWdhr4XwA3oRxHVjYy1O.oNPEhDkPxDJkV9qQ3Txt8vu.fh92W1u', 'hashinihimasha560@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 10:02:41', '::1', 'kevin', 'Perera', 'avatar/default.jpg', 'sp', NULL),
(6, 'miyuru', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'miyuru@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'ABC', 'Electricals', 'avatar/default.jpg', 'sp', NULL),
(7, 'nisal', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'nisaljankavi85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'Hightec Solutions', NULL, 'avatar/default.jpg', 'sp', NULL),
(8, 'dinidu', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'dinidu85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'Orange', 'Electricals', 'avatar/default.jpg', 'sp', NULL),
(9, 'kanchana', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'kanchana85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'Sathuta', 'builders', 'avatar/default.jpg', 'sp', NULL),
(10, 'dananga', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'dananga85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'malith', 'perera', 'avatar/default.jpg', 'sp', NULL),
(11, 'malith', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'malith@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'Dinidu', 'kanchana', 'avatar/default.jpg', 'sp', NULL),
(12, 'nipuna', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'nipunavi85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'nisal', 'nadeera', 'avatar/default.jpg', 'sp', NULL),
(13, 'nethviru', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'nethviru85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'methviru', 'gamahe', 'avatar/default.jpg', 'sp', NULL),
(14, 'padukka', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'padukka85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'Unitect', 'architects', 'avatar/default.jpg', 'sp', NULL),
(15, 'nirmal', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'nirmal@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', NULL, NULL, 'avatar/default.jpg', 'sp', NULL),
(16, 'wijerathne', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'wijerathne85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', NULL, NULL, 'avatar/default.jpg', 'sp', NULL),
(17, 'customer', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'customer85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', "Customer", "Customer", 'avatar/default.jpg', 'customer', NULL);



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

INSERT INTO `baaslk`.`serviceprovider` (`sp_id`, `user_id`, `contactNo`, `opContactNo`, `opEmail`, `category`, `area`, `descr`, `workInfo`, `dob`, `gender`, `address`, `website`, `languages`, `gallery1`, `gallery2`, `gallery3`) VALUES
(1, 1, 775669875, NULL, NULL, 'Carpenter', 'Kalutara', 'Im the carpenter in kalutara district', 'I worked ABC project', '1973-06-05', 'Male', 'No6.kaluthra', NULL, NULL, NULL, NULL, NULL),
(2, 2, 712365489, NULL, NULL, 'Mason', 'Kalutara', 'Im the mason in kaluthara district', 'I worked Nawaloka construction', '1984-10-10', 'Male', 'Kaluthara south,kaluthara', NULL, NULL, NULL, NULL, NULL),
(3, 3, 789654123, NULL, NULL, 'HandyMan', 'Colombo', 'Im the handy man in colombo district', 'I worked Nawaloka construction', '1976-10-10', 'Male', 'Kirulapane,Colombo', NULL, NULL, NULL, NULL, NULL),
(4, 4, 714563697, NULL, NULL, 'HandyMan', 'Gampaha', 'Im the handy man in gampaha district', 'I worked gampaha south construction', '1956-05-23', 'Male', 'No:78,Gampaha', NULL, NULL, NULL, NULL, NULL),
(5, 5, 714569872, NULL, NULL, 'HandyMan', 'Matara', 'I m the handy man in matara district', 'I worked Nawaloka construction', '1981-01-10', 'Male', 'No45,weligama', NULL, NULL, NULL, NULL, NULL),
(6, 6, 778992223, NULL, NULL, 'Painter', 'Ampara', 'Im the painter in ampara district', 'I worked Nawaloka construction', '1980-10-10', 'Male', 'No23,ampara south', NULL, NULL, NULL, NULL, NULL),
(7, 7, 714569872, NULL, NULL, 'Mason', 'Kandy', 'Im the mason in kandy district', 'I worked PQR project', '1979-10-20', 'Male', 'Kirulapane,Colombo', NULL, NULL, NULL, NULL, NULL),
(8, 8, 785236984, NULL, NULL, 'Plumber', 'NuwaraEliya', 'Im the plumber in nuwaraeliya district', 'I worked ABC project', '1979-08-29', 'Male', 'NO56,Nuwaraeliya', NULL, NULL, NULL, NULL, NULL),
(9, 9, 125487963, NULL, NULL, 'Plumber', 'Galle', 'Im the plumber in galle district', 'I worked Midigama construction', '1978-02-10', 'Male', 'Karapitiya,galle', NULL, NULL, NULL, NULL, NULL),
(10,10, 715463256, NULL, NULL, 'Carpenter', 'Hambanthota', 'Im the carpenter in hambanthota district', 'I worked PQR construction', '1975-08-30', 'Male', 'Viraketiya,hambanthota', NULL, NULL, NULL, NULL, NULL),
(11, 11, 778956325, NULL, NULL, 'Contractor', 'Colombo', 'Im the contractor in colombo district', 'I worked DEF project', '1974-08-17', 'Male', 'Kirulapane,Colombo', NULL, NULL, NULL, NULL, NULL),
(12, 12, 789655566, NULL, NULL, 'Contractor', 'Kandy', 'Im the contractor in kandy district', 'I worked Nawaloka construction', '1973-09-27', 'Male', 'No45, kandy', NULL, NULL, NULL, NULL, NULL),
(13, 13, 715899633, NULL, NULL, 'Painter', 'Kalutara', 'Im the painter in kaluthara district', 'I worked Naguma construction', '1972-08-14', 'Male', 'No78,kaluthra', NULL, NULL, NULL, NULL, NULL),
(14, 14, 785622456, NULL, NULL, 'Painter', 'Galle', 'Im the painter in galle district', 'I worked ABC project', '1971-01-10', 'Male', 'No20,galle', NULL, NULL, NULL, NULL, NULL),
(15, 15, 774552236, NULL, NULL, 'Painter', 'Anuradhapura', 'Im the painter in Anuradhapura district', 'I worked Nawaloka construction', '1976-10-10', 'Male', 'No2,anuradhapura', NULL, NULL, NULL, NULL, NULL),
(16, 16, 789662232, NULL, NULL, 'Painter', 'Badulla', 'Im the painter in Badulla', 'I worked cms project', '1946-03-10', 'Male', 'No 23,Badulla', NULL, NULL, NULL, NULL, NULL);



CREATE TABLE IF NOT EXISTS `baaslk`.`customer` (

 `customer_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index',
 `user_id` int(11),
 `contactNo` int(15) NOT NULL,
 `opContactNo` int(15) DEFAULT NULL,
 `opEmail` varchar(255) DEFAULT NULL,
 `area` varchar(100) NOT NULL,
 `dob` varchar(100) DEFAULT NULL,
 `gender` varchar(255) DEFAULT NULL,
 `address` text DEFAULT NULL, 
 `languages` varchar(10) DEFAULT NULL,
 
 
 FOREIGN KEY (`user_id`) REFERENCES users(`user_id`),
 
 PRIMARY KEY (`customer_id`)
 
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data';

INSERT INTO `baaslk`.`customer` (`customer_id`, `user_id`, `contactNo`, `opContactNo`, `opEmail`, `area`, `dob`, `gender`, `address`, `languages`) VALUES
(1, 17, 775669875, NULL, NULL, 'Kalutara', '1973-06-05', 'Male', 'No6.kaluthra', NULL);


CREATE TABLE IF NOT EXISTS `baaslk`.`tblbidhistory` (
  `bidhistoryid` int(11) NOT NULL AUTO_INCREMENT,
  `accountid` int(11) NOT NULL,
  `biditemid` int(11) NOT NULL,
  `bidprice` bigint(20) NOT NULL,
  `dtesubmitted` datetime NOT NULL,
  PRIMARY KEY (`bidhistoryid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

INSERT INTO `baaslk`.`tblbidhistory` (`bidhistoryid`, `accountid`, `biditemid`, `bidprice`, `dtesubmitted`) VALUES
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

INSERT INTO `baaslk`.`tblbiditems` (`biditemid`, `accountid`, `biditem`, `biddesc`, `town`, `image_path`, `closingtime`) VALUES
(73, '8', '  Prime Property At Piachaud Gardens', '58.8125 Perch Prime Land In Piachaud Gardens The Most Prestigious Area In Kandy (in Front Of Light House Church) For Sale. Suitable For Educational Institute, Mansion, Apartment Project Or Tourism Project', '', '', 'Oct-31-2015 04:29:04 AM'),
(76, '8', 'Land in Haragama, Kandy', '*10km to Kandy town.\r\n*50m to Kandy-Badulla Rd.\r\n*Excellent neighbourhood.\r\n*Clear deed.\r\n*Close to the Royal park land sale.\r\n*Untroubled place to liv', 'Kandy', '', 'Oct-28-2015 05:58:56 AM'),
(77, '8', ' Kandy - Kengalla Residential Land For Sale', 'Extent : 12.674 Perches\r\nLocated on Kengalla - Malpana Road\r\n01 Km to Kandy - Digana Main Road\r\nResidential Location\r\n\r\n', 'Kandy', '', 'Oct-23-2015 07:10:07 AM'),
(82, '9', 'Brighter Park', 'Facilities_\r\n- Water -\r\n- Electricity -\r\n- 20 feet wide access roads - Bank loan facilities\r\n- Better quiet residential environment - \r\n- Clear deed -\r\n\r\nPrice can be negotiated.', 'Homagama', '', 'Oct-22-2015 07:21:12 AM'),
(83, '9', 'Land in Punchiborella for Sale', '\r\nNo. 888 Maradana Road, Colombo 10., Colombo 10 (Maradana, Panchikawatta), Colombo, Colombo\r\nLKR 6,000,000', 'Borella', '', 'Oct-28-2015 07:28:41 AM'),
(85, '3', 'Malith', 'sdf', 'asdffdsa', '', 'Oct-21-2015 06:42:02 AM'),
(88, '1', 'sadf', 'sdfsd', 'sdfsdf', '', 'Oct-14-2015 03:52:58 PM'),
(89, '1', 'fdg', 'dfg', 'dfg', '', 'Oct-21-2015 05:45:09 PM'),
(90, '1', 'sdf', 'df', 'dfs', '', 'Oct-21-2015 05:46:18 PM'),
(91, '1', 'sdf', 'sdf', 'sdf', '', 'Oct-21-2015 05:46:50 PM'),
(93, '8', 'sdf', 'sdf', 'sdf', '', 'Oct-21-2015 05:49:27 PM'),
(94, '8', '', '', '', '', ''),
(95, '8', 'dfg', 'dfg', 'dfg', '', 'Oct-21-2015 05:50:23 PM'),
(97, '8', 'sfdsf', 'sdf', 'sdf', '', 'Oct-21-2015 06:17:15 PM'),
(98, '8', 'gkg', 'ghjj', 'ghj', '', 'Oct-21-2015 06:18:12 PM');




--
-- Table structure for table `fanswer`
--

CREATE TABLE IF NOT EXISTS `baaslk`.`fanswer` (
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

INSERT INTO `baaslk`.`fanswer` (`question_id`, `a_id`, `user`, `userphoto`, `a_answer`, `a_datetime`, `user_catagory`) VALUES
(1, 1, 'janith', 'j-606575988.png', 'go to srch br', '23/09/15 07:24:23', 'sp'),
(1, 2, 'kamal', '90496-404584807.jpg', 'go to hmpg', '23/09/15 07:30:14', 'customer'),
(1, 3, 'janith', 'j-606575988.png', 'jllkj', '15/10/15 16:40:26', 'sp'),
(2, 1, 'janith', 'default.jpg', 'jlljl', '16/10/15 05:26:24', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `fquestions`
--

CREATE TABLE IF NOT EXISTS `baaslk`.`fquestions` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `fquestions`
--

INSERT INTO `baaslk`.`fquestions` (`id`, `user`, `userphoto`, `topic`, `detail`, `datetime`, `view`, `reply`, `user_catagory`) VALUES
(1, 'janith', 'j-606575988.png', 'find a baas', 'hw to find a baas', '23/09/15 07:23:51', 43, 3, 'sp'),
(2, 'janith', 'j-606575988.png', 'jfgfsj', 'hlhglh', '12/10/15 05:28:48', 35, 1, 'sp'),
(3, 'hashini', 'default.jpg', 'i want to buy bus', 'how to find a bus', '16/10/15 11:49:45', 7, 0, 'sp');



CREATE TABLE IF NOT EXISTS `baaslk`.`calendar` (
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

INSERT INTO `baaslk`.`calendar` (`calendar_id`, `title`, `detail`, `jobDate`, `dateAdded`, `location`, `jobtime`, `contactno`, `customer_id`, `sp_id`, `accepted`) VALUES
(1, 'cdv', 'fb', '10/30/2015', '2015-10-30', '', '', '', 5, 4, 0),
(2, 'dfg', 'ijio', '10/30/2015', '2015-10-30', 'ijio', 'oikjo', 'o', 5, 4, 0);

