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




