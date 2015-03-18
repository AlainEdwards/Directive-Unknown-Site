<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="html, css, php, server, register">
	<meta name="description" content="Error...Error...must find directive">
	<meta name="author" content="Alain Edwards">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!-- Bootstrap -->
	<link href="../bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <!--<link href="../bootstrap/css/bootstrap-responsive.css" rel="stylesheet">-->
</head>
<body>
<div class="container">
      <form class="form-signin" name="form" action="checklog.php" method="POST">
        <h2 class="form-signin-heading">Member Login: </h2><a style="color:red"><?php if(!empty($_GET["Err"]) && $_GET["Err"] == "wp"){echo "Wrong Username or Password";}?></a>
        <input type="text" class="input-block-level" placeholder="Username" name="myusername">
        <input type="password" class="input-block-level" placeholder="Password" name="mypassword">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
      </form>
      <a href="../register/register.php">Not a member? Register!</a>
</div>
</body>
</html>