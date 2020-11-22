<?php

include("../../config.php");
$result = mysql_query("SELECT sname FROM subject");
while ($row = mysql_fetch_assoc($result)) {
   		$colors[]=$row['sname'];
}
mysql_free_result($result);
mysql_close($link);

// check the parameter
if(isset($_GET['part']) and $_GET['part'] != '')
{
	// initialize the results array
	$results = array();

	// search colors
	foreach($colors as $color)
	{
		// if it starts with 'part' add to results
		if( strpos($color, $_GET['part']) === 0 ){
			$results[] = $color;
		}
	}

	// return the array as json with PHP 5.2
	echo json_encode($results);
}