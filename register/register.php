<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="html, css, php, server, register">
	<meta name="description" content="Error...Error...must find directive">
	<meta name="author" content="Alain Edwards">

<!--My Javascript-->
<link type="text/javascript" href="../js/validation.js" />
</head>

<body>
<form name="register" method="post" onsubmit="return validate('register')" action="cregister.php">
<p>First Name: <br />
<input type="text" name="firstname" placeholder="Bob" required/></p>

<p>Last Name: <br />
<input type="text" name="lastname" placeholder="Green" required/></p>

<p>Email: <br  />
<input type="email" name="email" placeholder="bobgreen@example.com" required/></p>

<p>Username: <br />
<input type="text" name="username" placeholder="BobGreen49" required/></p>

<p>Password: <br />
<input type="password" name="password" placeholder="5 - 30 characters" required/></p>

<p>Retype Password: <br />
<input type="password" name="repassword" required/></p>

<!--Captcha-->
<img src="../captcha/captcha_code_file.php?rand=<?php echo rand(); ?>"
id="captchaimg" ></br>
<label for="message">Enter the code above here :</label></br>
<input id="6_letters_code" name="6_letters_code" type="text">
<!------------>

<p>
<input type="submit" name="submit" value="Register" /></p>
</form>
</body>
</html>