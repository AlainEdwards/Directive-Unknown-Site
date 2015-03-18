<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Your Logged In!</title>
</head>

<body>
<h1 style="color:green"> Success!</h1>
<?php
echo "You are now registered " . $_GET["name"] . "</br>";
echo "Please wait while we redirect you to the site </br>";
header("Refresh: 5; url=../index.php");
?>
<img style="margin:auto;" src="../images/loading.gif" width=100px height=100px>
</body>
</html>