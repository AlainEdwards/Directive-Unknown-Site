<?php
session_start();
if(empty($_SESSION['LoggedIn']) || empty($_SESSION['Username'])){
//header("location:login.php");
}
else{
include '../access/connect.php';

$table ="users";
$id = $_SESSION['Username'];
$ip = $_SERVER['REMOTE_ADDR'];
$fn = ""; $ln = ""; $status = "";
mysql_select_db("aedwar50",$con);

	
//Retreaving user info
$result = mysql_query("SELECT * FROM $table WHERE user_login=$id",$con);

while($row = mysql_fetch_array($result))
  {
  	$fn = $row['user_firstname']; $ln = $row['user_lastname']; $status = $row['user_status'];
  }
if (!empty($fn) && !empty($ln) && !empty($status)){
$_SESSION['firstname']=$fn;
$_SESSION['lastname']=$ln;
$_SESSION['u_status']=$status;}
mysql_close($con);
}
?>

<html>
<body>
<h1 style="color:green; text-align:center;">Login Successful</h1></br>
<p style="text-align:center;">Welcome back <?php echo $fp . " " . $lp; ?><p></br>
<p style="text-align:center;">Please wait while we redirect you to the site</p>
<center><img style="margin:auto;" src="../images/loading.gif" width=100px height=100px></center>

<?php header("Refresh: 5; url=../index.php");?>
</body>
</html>