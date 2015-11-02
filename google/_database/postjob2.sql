-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2015 at 06:22 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bass1`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

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
(38, 'Fengshui', ' skokfokofokoskpkfokosksvl\r\nskpvokpovk\r\nsc]lopksock\r\nscskjig\r\nelvkedjv0ke0vke', '', ' slpopks\r\nsv\r\nl[vl\r\n\r\nvl\r\ndlbp[kd[b\r\ndlb', 2147483647, '2015-10-12 07:20:00'),
(39, 'Draftsman', ' zzzzzzzzzzzzzz', 'Matara', ' czzzzzzzzzzzzz\r\nzzzzzz\r\nzzzzzzz', 2147483647, '2015-10-31 05:06:19'),
(40, 'Draftsman', ' zzzzzzzzzzzzzz', 'Mullaitivu', ' zzzzzzzzzzzzz', 41253698, '2015-10-12 12:09:49'),
(41, 'Astrology', ' I want to meet Astrology men to take advices before built a house. Please Contact me.', 'Badulla', ' No:12/56,\r\nPahathadumbara,\r\nDabulla.', 478965423, '2015-11-01 06:10:15'),
(42, 'Architect', ' kokpokokoijoi', 'Colombo', ' ', 0, '2015-11-01 06:15:53'),
(43, 'Architect', ' ', 'Colombo', ' ', 0, '2015-11-01 06:31:33');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
