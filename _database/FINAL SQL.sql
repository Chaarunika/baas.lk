
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";




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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `user_id`, `contactNo`, `opContactNo`, `opEmail`, `area`, `dob`, `gender`, `address`, `languages`) VALUES
(1, 14, 712310111, NULL, NULL, 'Colombo', '1973-06-05', 'Male', 'Kollupitiya,Colombo 03', NULL),
(2, 16, 0, NULL, NULL, '', NULL, NULL, NULL, NULL);

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

--
-- Dumping data for table `fanswer`
--

INSERT INTO `fanswer` (`question_id`, `a_id`, `user`, `userphoto`, `a_answer`, `a_datetime`, `user_catagory`) VALUES
(4, 1, '109128209392514978370', 'https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg', '0712310324 à¶…à¶¸à¶­à¶±à·Šà¶±.', '12/01/16 18:18:48', 'sp'),
(3, 1, 'Nirmal', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xap1/v/t1.0-1/c0.0.50.50/p50x50/971089_4976999835133_634578937_n.jpg?oh=170c662b28617550b614fe0fa80b06da&oe=5746625A&__gda__=1463389067_ea24a87586f95092dfdf2341d3517e5e', 'multilac and robialac are the most famous according to my knowledge', '12/01/16 18:19:43', 'sp');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `fquestions`
--

INSERT INTO `fquestions` (`id`, `user`, `userphoto`, `topic`, `detail`, `datetime`, `view`, `reply`, `user_catagory`) VALUES
(1, 'janith', 'avatar/default.jpg', 'Steps in building a house', 'What is the activity we should do first? Is it painting or tiling?', '09/01/16 07:35:24', 9, 1, 'sp'),
(2, 'kevin', 'avatar/default.jpg', 'Sand prices', 'What are the prevailing sand prices in the market?', '11/01/16 09:30:11', 3, 1, 'sp'),
(3, 'customer', 'avatar/default.jpg', 'Paint colours', 'What are the most suitable paint colours for a newly built house?', '11/01/16 09:33:10', 8, 1, 'customer'),
(4, 'dinidu', 'avatar/default.jpg', 'à¶¸à·šà·ƒà¶±à·Š à¶¶à·à·ƒà·Šà·€à¶»à·”à¶±à·Š à¶…à·€à·à·Šà¶º à¶šà¶» à¶­à·’à¶¶à·š', 'à¶´à¶½à¶´à·”à¶»à·”à¶¯à·” à¶¸à·šà·ƒà¶±à·Š à¶¶à·à·ƒà·Šà·€à¶»à·”à¶±à·Š à¶…à·€à·à·Šà¶º à¶šà¶» à¶­à·’à¶¶à·š', '11/01/16 09:49:00', 6, 1, 'sp'),
(5, 'Nirmal', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xap1/v/t1.0-1/c0.0.50.50/p50x50/971089_4976999835133_634578937_n.jpg?oh=170c662b28617550b614fe0fa80b06da&oe=5746625A&__gda__=1463389067_ea24a87586f95092dfdf2341d3517e5e', 'à·€à·à¶½à·’ à¶½à·à¶©à·Š à¶‘à¶šà¶šà·Š à¶»à·”à¶´à·’à¶ºà¶½à·Š 5000à¶šà¶§ à¶œà¶±à·Šà¶± à¶´à·”à·…à·”à·€à¶±à·Š à¶­à·à¶±à¶šà·Š à¶¯à¶±à·Šà¶±à·€à¶¯ ? ', 'à·€à·à¶½à·’ à¶½à·à¶©à·Š à¶‘à¶šà¶šà·Š à¶‰à¶šà·Šà¶¸à¶±à·’à¶±à·Šà¶¸ à¶•à¶±à·š', '12/01/16 06:22:27', 5, 0, 'sp');

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
(1, 1, 'Completing windows', 14, 1, 'When can you finish my order? Do I need to pay you an advance?', 1452632134, 'yes', 'yes'),
(1, 2, '', 1, 0, 'I will try to finish it within this week and I will send you a message to you. I do not need an advance', 1452632258, '', ''),
(1, 3, '', 14, 0, 'Thank you', 1452632318, '', ''),
(1, 4, '', 14, 0, 'Thank you for your work you have done a great job.', 1452632341, '', ''),
(5, 1, 'ada kohe hari wadadakda??', 14, 1, 'ada uluwassa set karanna enawada', 1452632720, 'yes', 'yes'),
(5, 2, '', 1, 0, 'ow ada enawaa', 1452632841, '', ''),
(7, 1, 'need advance', 1, 14, 'i will be needing rs.5000 as advance', 1452633063, 'yes', 'no');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `postjob2`
--

INSERT INTO `postjob2` (`job_id`, `username`, `job_type`, `job_description`, `area`, `address`, `tel_num`, `time`) VALUES
(1, 'customer', 'Contractor', 'I want a contractor to build my house.', 'Colombo', '74,Highlevel Road, Nugegoda', 717508945, '2016-01-08 20:41:18'),
(2, 'customer', 'Contractor', 'I want a contractor to build my house.', 'Colombo', '74,Highlevel Road, Nugegoda', 717508945, '2016-01-08 20:42:20'),
(3, '', 'Architect', 'I want an architect to design a two storied . URGENT', 'Gampaha', '124, Gampaha', 712310111, '2016-01-11 21:51:06'),
(4, '', 'Carpenter', 'Carpenter needed to make furniture for my apartments. Call soon.', 'Colombo', '82, Galle Road, Moratuwa', 717011478, '2016-01-11 21:53:23'),
(5, 'customer', 'à·€à¶©à·” à·€à·à¶©', 'à·€à·„à¶½à¶ºà¶šà·Š à·ƒà·™à·€à·’à¶½à·’ à¶šà·’à¶»à·“à¶¸à¶§ à¶‡à¶­.à·„à·à¶šà·’ à¶‰à¶šà·Šà¶¸à¶±à·’à¶±à·Šà¶¸ à¶…à¶¸à¶­à¶±à·Šà¶± ', 'à¶šà·”à¶»à·”à¶«à·‘à¶œà¶½ à¶¯à·’à·ƒà·Šà¶­à·Šâ€à¶»à·’à¶šà·Šà¶šà¶º', 'à·€à·à·€ à¶»à·€à·”à¶¸à·Š à¶´à·à¶» ,à¶šà·”à¶»à·”à¶«à·‘à¶œà¶½ ', 711426222, '2016-01-12 14:23:58'),
(6, 'customer', 'Architect', 'I want to design a 3 storied building.Architect assistance needed', 'Matara', 'godagama,matara', 771211990, '2016-01-12 14:40:15'),
(7, 'customer', 'à·€à¶©à·” à·€à·à¶©', 'à·€à·„à¶½à¶ºà¶šà·Š à·ƒà·™à·€à·’à¶½à·’ à¶šà·’à¶»à·“à¶¸à¶§ à¶‡à¶­.à·„à·à¶šà·’ à¶‰à¶šà·Šà¶¸à¶±à·’à¶±à·Šà¶¸ à¶…à¶¸à¶­à¶±à·Šà¶± ', 'à¶šà·”à¶»à·”à¶«à·‘à¶œà¶½ à¶¯à·’à·ƒà·Šà¶­à·Šâ€à¶»à·’à¶šà·Šà¶šà¶º', 'à·€à·à·€ à¶»à·€à·”à¶¸à·Š à¶´à·à¶» ,à¶šà·”à¶»à·”à¶«à·‘à¶œà¶½ ', 711426222, '2016-01-12 14:47:50'),
(8, 'customer', 'Carpenter', 'à¶‹à¶½à·”à·€à·ƒà·Šà·ƒà¶šà·Š à·ƒà·€à·’ à¶šà·™à¶»à·“à¶¸à¶§ à¶…à·€à·à·Šâ€à¶º à·€à·“ à¶‡à¶­.à¶‰à¶šà·Šà¶¸à¶±à·’à¶±à·Š à¶…à¶¸à¶­à¶±à·Šà¶± ', 'Kurunegala', 'à·€à·à·€ à¶»à·€à·”à¶¸à·Š à¶´à·à¶» ,à¶šà·”à¶»à·”à¶«à·‘à¶œà¶½ ', 711426234, '2016-01-12 14:58:58'),
(9, 'customer', 'Carpenter', 'à¶‹à¶½à·”à·€à·ƒà·Šà·ƒà¶šà·Š à·ƒà·€à·’ à¶šà·™à¶»à·“à¶¸à¶§ à¶…à·€à·à·Šâ€à¶º à·€à·“ à¶‡à¶­.à¶‰à¶šà·Šà¶¸à¶±à·’à¶±à·Š à¶…à¶¸à¶­à¶±à·Šà¶± ', 'Kurunegala', 'à·€à·à·€ à¶»à·€à·”à¶¸à·Š à¶´à·à¶» ', 711426234, '2016-01-12 15:02:30');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data' AUTO_INCREMENT=15 ;

--
-- Dumping data for table `serviceprovider`
--

INSERT INTO `serviceprovider` (`sp_id`, `user_id`, `contactNo`, `opContactNo`, `opEmail`, `category`, `area`, `descr`, `workInfo`, `dob`, `gender`, `address`, `website`, `languages`, `rating`, `ratingCount`) VALUES
(1, 1, 712310111, 0, '', 'Carpenter', 'Kurunegala', '  à¶¸à¶¸ à¶…à·€à·”à¶»à·”à¶¯à·” 37à¶šà·Š à·€à¶©à·” à¶…à¶­à·Šà¶¯à·à¶šà·“à¶¸à·Š  à¶‡à¶­à·’ à¶´à·”à¶¯à·Šà¶œà¶½à¶ºà·™à¶šà·Š à·€à·™à¶¸à·’  .  à¶¸à·š à·€à¶± à·€à·’à¶§ à¶¸à· à¶ºà¶§à¶­à·š à·€à·Šà¶ºà·à¶´à·˜à¶­à·’ 50à¶šà·Š à¶´à¶¸à¶« à·ƒà·’à¶¯à·” à¶šà¶» à¶‡à¶­.  à¶‡à·ƒà·Šà¶­à¶¸à·šà¶±à·Šà¶­à·” à¶†à·à·Šà¶»à·’à¶­ à¶´à·žà¶¯à·Šà¶œà¶½à·’à¶š à·ƒà·šà·€à· à¶½à¶¶à· à¶¯à·š.  ', '   à¶¸à¶¸ à¶´à·ƒà·”à¶œà·’à¶º à·€à·ƒà¶» 20 à¶š à¶šà·à¶½à¶º à¶­à·”à·… à¶¯à·’à¶œà·’à¶±à·Š à¶¯à·’à¶œà¶§à¶¸ à·ƒà·„ à¶¯à·à¶±à¶§ à¶¸à¶§ à¶ºà¶§à¶­à·š à¶­à·€à¶­à·Š 20 à¶¯à·™à¶±à·™à¶šà·”à¶§ à·ƒà·šà·€à¶ºà·š à¶ºà·œà¶¯à·€à· à¶œà·™à¶± à¶‡à¶­. à¶¸à¶¸ , à¶½à·“ à¶´à¶©à·’à¶´à·™à¶½ à¶±à¶©à·” , à¶´à·”à¶§à·”, à¶½à·“ à¶¸à·à·ƒà·Šà¶­à¶» à¶†à¶¯à·’à¶º à¶±à·’à¶»à·Šà¶¸à·à¶«à¶º à¶…à¶­à·Šà¶¯à·à¶šà·“à¶¸à·Š à¶‡à¶­   ', '1989/January/1', 'M', ' No. 6/21, ,à·ƒà¶¸à¶±à¶½ à¶¸à·à·€à¶­,Kurunegala', NULL, NULL, 4.5, 56),
(2, 2, 712365489, NULL, NULL, 'à¶´à·™à¶¯à¶»à·šà¶»à·”', 'à¶šà·…à·”à¶­à¶» à¶¯à·’à·ƒà·Šà¶­à·Šâ€à¶»à·’à¶šà·Šà¶šà¶º', ' à¶…à¶±à¶»à·Šà¶ à¶­à¶­à·Šà·€à¶ºà·™à¶±à·Š à·ƒà·’à¶ºà¶½à·” à¶´à·™à¶¯à¶»à·šà¶»à·” à¶šà·à¶»à·Šà¶ºà¶ºà¶±à·Š à¶šà¶»à¶œà¶±à·Šà¶±à¶§ à¶¸à· à¶…à¶¸à¶­à¶±à·Šà¶±.', 'à·€à·ƒà¶» 10 à¶š à¶´à¶½à¶´à·”à¶»à·”à¶¯à·Šà¶¯à¶š à·ƒà·„ à·€à·’à·à·Šà·€à·à·ƒà¶º à¶´à·à¶»à·’à¶·à·œà¶œà·’à¶š à·ƒà¶­à·” à¶º.', '1989/à¶¢à¶±à·€à·à¶»à·’/1', 'M', '622/C, à¶œà·à¶½à·” à¶´à·à¶», à¶šà¶½à·”à¶­à¶»,à¶šà¶½à·”à¶­à¶»,à¶šà·…à·”à¶­à¶» à¶¯à·’à·ƒà·Šà¶­à·Šâ€à¶»à·’à¶šà·Šà¶šà¶º', NULL, NULL, 4, 11),
(3, 3, 789654123, NULL, NULL, 'Electrician', 'Colombo', ' Domestic works i.e. kitchen & bathroom installation, painting & decorating. Audio & video installations, all types of electrical works and plumbing mainly in Colombo district. ', '  I worked in Nawaloka constructions as a site forman for a medium sized building company for 20 years working on private and local authority contracts, due to enforced redundancy my son and I who is also a carpenter have started a company of our own specializing in small building works and maintenance.   ', '1989/January/1', 'M', '47, ,Park Road,,Colombo', NULL, NULL, 4, 3),
(4, 4, 714563697, NULL, NULL, 'HandyMan', 'Colombo', 'I am very experienced, highly skilled and hard working tradesman with excellent tools. When you hire me you can count on me doing all the home repairs you need such as Plumbing, Carpentry, Electric, Locksmith, Metalwork, Furniture repairs, Tiling and  Fence repairs ', 'i have been working for 9 years, worked on various sites , from huge jobs to small ceilings . I set out to please each client with a high standard finish and a friendly service. Will not be beaten on price for a perfect finish every time ', '1989/January/1', 'M', 'No:78,Malwatta Road,Gampaha,Colombo,Colombo,Colombo', NULL, NULL, 4, 1),
(5, 5, 712310111, 0, '', 'Architect', 'Matara', 'I have gained 10 years of experience working on large prestigious buildings in Southern province.  ', 'The last 5 years working solely on domestic projects. I provide a comprehensive architectural service. ', '1989/May/16', 'M', 'No45,,weligama,,Matara', NULL, NULL, 4, 10),
(6, 6, 785236984, NULL, NULL, 'Plumber', 'NuwaraEliya', 'Im the plumber in nuwaraeliya district', 'I worked ABC project', '1979-08-29', 'Male', 'NO56,Nuwaraeliya', NULL, NULL, 1, NULL),
(7, 7, 125487963, NULL, NULL, 'Plumber', 'Galle', 'Im the plumber in galle district', 'I worked Midigama construction', '1978-02-10', 'Male', 'Karapitiya,galle', NULL, NULL, NULL, NULL),
(8, 8, 712310111, 0, '', 'Contractor', 'Colombo', ' A leading road contractor which mainly focuses on constructing roads and gardens but also undertake large scale buildings.', ' We have build many roads in Colombo suburbs and decoration projects. ', '2003/June/14', 'M', '20,Galle Road,,Colombo', 'www.luckylanka.org', NULL, NULL, NULL),
(9, 9, 789655566, NULL, NULL, 'Real Estate Company', 'Colombo', 'We offer best lands in Kandy for you to build your dream home with all the facilities and easy access.', 'We are a new company for this industry but we are hoping to be the market leader within the next  5 years.', '2015/February/4', 'M', 'No.45,Sri Deerananda Mawatha, kandy,Kandy,Colombo', 'www.wijayalankalands.lk', NULL, NULL, NULL),
(10, 10, 715899633, NULL, NULL, 'à®®à®¿à®©à¯à®šà®¾à®°à®ªà¯', 'Colombo', 'à®¨à®¾à®©à¯ à®’à®°à¯ à®¨à®²à¯à®² à®Žà®²à®•à¯à®Ÿà¯à®°à¯€à®·à®¿à®¯à®©à¯ à®‡à®°à¯à®•à¯à®•à®¿à®±à¯‡à®©à¯', 'à®¨à®¾à®©à¯ à®…à®©à¯à®ªà®µà®®à¯ 10 à®†à®£à¯à®Ÿà¯à®•à®³à¯', '1999/July/23', 'M', '2, à®ªà®¿à®°à®¤à®¾à®© à®µà¯€à®¤à®¿,à®•à¯†à®¾à®´à¯à®®à¯à®ªà¯ 8,Colombo', NULL, NULL, NULL, NULL),
(11, 11, 785622456, NULL, NULL, 'Painter', 'Colombo', 'As a painter and decorator I possess many skills including hanging of wide vinyl paper and other types of wall paper. I am a very trustworthy individual who just gets on with the job in hand. ', 'My team and I are very hardworking also punctual and reliable and conscientious with 25 years of experience within the painting and building trade. We can overcome any problems that you may come across within your home or business.', '1989/January/1', 'M', 'No20,galle,Galle,Galle,Galle,Colombo,Colombo,Colombo', NULL, NULL, NULL, NULL),
(12, 12, 774552236, NULL, NULL, 'Real Estate Company', 'Colombo', ' The No. 1 Real Estate Company in Sri Lanka selling lands in Colombo, Gampaha, Kalutara, Galle, Matara and Kandy. ', ' The company is managed by surveyor by profession, who has more than twenty years of experience in surveying, land plotting and developing and other infrastructure development works. ', '1989/January/1', 'M', '106, Pannipitiya Road,Battaramulla,Colombo,Colombo,Colombo', NULL, NULL, NULL, NULL),
(13, 13, 789662232, NULL, NULL, 'Material Supplier', 'Colombo', 'Supplying the highest quality raw materials for all constructions such as sand, cement, paints, tiles, and fittings,etc. ', ' We have a chain of branches and we maintain close relationships with suppliers. This is the success behind the existence of the company for the last two decades.', '1989/January/1', 'M', 'No 23, Highlevel Road,Nugegoda,Colombo,Colombo,Colombo,Colombo,Colombo', NULL, NULL, NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tblbiditems`
--

INSERT INTO `tblbiditems` (`biditemid`, `accountno`, `biditem`, `biddesc`, `town`, `image_path`, `minimumbid`, `closingtime`) VALUES
(1, '1', 'Millenium gardens', '25 blocks of 10 perches lands in Malabe Kahanthota Road.', ' Colombo', 'images (2).jpg', 40000, 'Jan-20-2016 02:24:32 PM'),
(2, '2', 'Savusiri Uyana', 'A valuable land close to the southern express way.', ' Galle', 'images (1).jpg', 200000, 'Jan-29-2016 02:37:48 PM'),
(3, '3', 'Modern city', 'Homagama land situated near the Highlevel Road.', ' Colombo', 'insde photo.jpg', 350000, 'Jan-31-2016 02:39:45 PM');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data' AUTO_INCREMENT=17 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password_hash`, `user_email`, `user_active`, `user_activation_hash`, `user_password_reset_hash`, `user_password_reset_timestamp`, `user_rememberme_token`, `user_failed_logins`, `user_last_failed_login`, `user_registration_datetime`, `user_registration_ip`, `user_firstname`, `user_lastname`, `user_avatar`, `user_catagory`, `login_type`) VALUES
(1, 'janith', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'jankavi85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'à·ƒà·”à¶¸à·’à¶­à·Š ', 'à·€à¶©à·” à¶šà·à¶»à·Šà¶¸à·’à¶šà¶ºà· ', 'Gallery/galleryUploads/janith/0.jpg', 'sp', NULL),
(2, 'kamal', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'kamalamal85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 09:37:26', '127.0.0.1', 'à¶šà¶¸à¶½à·Š ', 'à¶´à·Šâ€à¶»à·’à¶ºà¶¯à¶»à·Šà·à¶±', 'avatar/default.jpg', 'sp', NULL),
(3, 'kevin', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'kevinlevin720@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 09:53:40', '::1', 'Kevin', 'Bernards', 'avatar/default.jpg', 'sp', NULL),
(4, 'kavinda', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'kavindawijerathne85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 09:57:25', '127.0.0.1', 'Sunil', 'Dassanayake', 'avatar/default.jpg', 'sp', NULL),
(5, 'hashini', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'hashinihimasha560@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 10:02:41', '::1', 'Kamal', 'Silva', 'Gallery/galleryUploads/hashini/0.jpg', 'sp', NULL),
(8, 'dinidu', '$2y$10$Ph6U1sIEKbxSKzs0BN1yKOpkUBIWN0KWReqSGpp7rJXtaF59yZ5UO', 'dinidu85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'Roadstar', 'Constructions', 'avatar/default.jpg', 'sp', NULL),
(9, 'kanchana', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'kanchana85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'Prime', 'Properties', 'avatar/default.jpg', 'sp', NULL),
(10, 'dananga', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'dananga85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'à®•à¯à®®à®¾à®°à¯', 'à®°à®¾à®œà®šà¯‡à®•à®°à®©à¯', 'avatar/default.jpg', 'sp', NULL),
(11, 'nipuna', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'nipunavi85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'Unitech', 'Painters', 'avatar/default.jpg', 'sp', NULL),
(12, 'nethviru', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'nethviru85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'Home', 'Lands', 'avatar/default.jpg', 'sp', NULL),
(13, 'padukka', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'padukka85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'Sevana', 'Suppliers', 'avatar/default.jpg', 'sp', NULL),
(14, 'customer', '$2y$10$ySzIdli40/zH0F79v/jHAOwq8nZdqNNO3Emq4n9N/cf9IADxzUaeO', 'customer85@gmail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2015-10-16 18:35:57', '::1', 'Customer', 'Customer', 'avatar/default.jpg', 'customer', NULL),
(16, '10205379873408648', '', 'malith009@ymail.com', 1, NULL, NULL, NULL, NULL, 0, NULL, '2016-01-13 09:23:49', '::1', 'Nirmal', 'Malith', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xap1/v/t1.0-1/c0.0.50.50/p50x50/971089_4976999835133_634578937_n.jpg?oh=170c662b28617550b614fe0fa80b06da&oe=5746625A&__gda__=1463389067_ea24a87586f95092dfdf2341d3517e5e', 'customer', 'fb');

