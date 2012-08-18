<?php

// Create XML header
header('Content-type: text/xml');


// connect to the db 
include_once('db_connect.php');

// grab the xml data from the db
$q = "SELECT * FROM mobile_news_xml ORDER BY news_id DESC LIMIT 4";		
$r = @mysqli_query ($dbc, $q);


$xml = new SimpleXMLElement('<xml/>');


	// Fetch and print all the records:
	while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
	
	$name = $row["name"]; 
	$date = strftime("%b %d, %Y", strtotime($row["timestamp"]));
    $summary = $row["summary"]; 
    $article = $row["article"]; 
    $image = $row["image_url"];
    $source = $row["source"];

    $news = $xml->addChild('News');
    $news->addChild('name', "$name");
    $news->addChild('date', "$date");
    $news->addChild('summary', "$summary");
    $news->addChild('content', "$article");
    $news->addChild('image_url', "$image");
    $news->addChild('source', "$source");
    
}

// output data as XML file
echo ($xml->asXML());

//disconnect from the db
@mysql_close($dbc);

?>