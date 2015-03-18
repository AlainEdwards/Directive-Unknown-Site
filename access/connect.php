<?php

$con=mysql_connect("localhost","","");

if (!$con)
	{
		die('Database connection error: ' . mysql_error());
	}
else if ($con)
	{ /*echo "success";*/}

?>