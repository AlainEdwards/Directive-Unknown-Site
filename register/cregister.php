<?php
/* 	Created by Alain Edwards
	

*/

include '../access/connect.php';

$date = date("Y-m-d");
$db = "aedwar50";
$table = "users";
$name = $_POST["firstname"] . " " . $_POST["lastname"];
$username=$_POST["username"];

//Selecting database to manipulate
mysql_select_db($db, $con);

//Encrypting and Securing password
$password = md5($_POST["password"]);

//Passing information to SQL for Query
$sql = "INSERT INTO " . $table . " (user_firstname, user_lastname, user_login, user_pass, user_access, user_email, user_status, date_registered, user_ip) VALUES ('" . $_POST["firstname"] . "', '" . $_POST["lastname"] . "', '" . $username . "', '" . $password . "', 'registered', '" . $_POST["email"] . "', 'active', '" . $date . "', '" . $_SERVER["REMOTE_ADDR"] . "')";

//Querying the server	
mysql_query($sql,$con);

mysql_close($con);

header( 'Location:confirmation.php?$name=' . $name );
?>