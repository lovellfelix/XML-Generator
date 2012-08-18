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




###Setup Database db-connect.php;

	// Set the database access information as constants:
	DEFINE ('DB_USER', 'root');
	DEFINE ('DB_PASSWORD', 'root');
	DEFINE ('DB_HOST', 'localhost');
	DEFINE ('DB_NAME', 'gbuzz');


You are free to use, and modify code as needed. 
