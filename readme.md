## Dynamically create xml file using PHP and MySQL

Create Database

###MySql Database;
	
CREATE TABLE `mobile_news_xml` (
  `news_id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `article` longtext NOT NULL,
  `source` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`news_id`),
  UNIQUE KEY `news_id` (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mobile_news_xml`
--

INSERT INTO `mobile_news_xml` VALUES(1, 'Test', 'http://example.com/mobile/images/p1.jpg', 'Hello World', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n', 'http://example.com/', '2012-08-18 15:06:05');
INSERT INTO `mobile_news_xml` VALUES(2, 'test2', 'http://example.com/mobile/images/p2.jpg', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n', '', '2012-08-18 15:06:05');
INSERT INTO `mobile_news_xml` VALUES(3, 'Mobile - Title', 'http://example.com/mobile/images/p3.jpg', 'Mobile is awesome', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n', 'http://example.com/', '2012-08-18 15:08:01');


###Setup Database db-connect.php;

// Set the database access information as constants:
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', 'root');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'gbuzz');


You are free to use, and modify code as needed. 
