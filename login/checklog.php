<html>
<head>
<script>
function wp(){
alert("Wrong Username or Password");
}
</script>
</head>

<body>
<?php 
include '../access/connect.php';

ob_start();
$table ="users";
$ip = $_SERVER['REMOTE_ADDR'];
mysql_select_db("aedwar50",$con);

// username and password sent from form
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect from MySQL injection
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$mypassword = md5($mypassword);

$sql="SELECT * FROM $table WHERE user_login='$myusername' and user_pass='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
// Register $myusername, and redirect to file "UI.php"
session_start();
$_SESSION['Username']= $myusername;
$_SESSION['LoggedIn']=1;

// Updating database with new ip address
$sql = "UPDATE $table SET user_ip='$ip' WHERE user_login='$myusername'";
mysql_query($sql);

header("location:UI.php");
}
else {
header("location:index.php?Err=wp");
}

?>
</body>
</html>