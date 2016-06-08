<?php  
	$conn = mysql_connect('localhost', 'root', '');
	 if (!$conn)
    {
	 die('Could not connect: ' . mysql_error());
	}
	//echo 'Connected successfully' . 'iancuello';
	mysql_select_db("scheduling", $conn);
	//echo a;
?>