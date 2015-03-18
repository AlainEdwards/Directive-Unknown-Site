<?php 
session_start();
session_destroy();
?>
<html>
<head>
</head>
<body>
<center>
<h1>You have successfully logged out!</h1>
<p>You will be redirected in 5 seconds...</p>
<img src="../images/loading.gif" width=100px height=100px></center>
<?php header("Refresh: 5; url=../index.php");?>
</center>
</body>