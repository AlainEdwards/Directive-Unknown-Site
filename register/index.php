<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
  	<base href="../"
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="html, css, php, server, applications, android, ios, web, development">
	<meta name="description" content="Error...Error...must find directive">
	<meta name="author" content="Alain Edwards">
	
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
 	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
 	<!--My CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    
    <!--My JavaScripts-->
	<link type="text/javascript" href="../js/validation.js" />
    <!--My Favicon-->
    <link rel="favicon" href="images/favicon.ico">
    
  </head>
  
  <body>
    
    
  	<header>
  		<div id="top">
  			<div id="tlogo">
            	<!--Logo Banner-->
    			<!--<a href="index.php"><h1>Directive Unknown Productions</h1></a>-->
                <a href="index.php"><img src="images/Logo.jpg" alt="Directive Unknown Productions" width="1332" height="90"></a>
    		</div>
    		<div class="navbar-wrapper">
      			<div class="containerx">
					<!--Top Nav Bar-->
        			<div class="navbar navbar-inverse">
          				<div class="navbar-inner">
            				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              					<span class="icon-bar"></span>
              					<span class="icon-bar"></span>
              					<span class="icon-bar"></span>
            				</button>
            				<div class="nav-collapse collapse">
              					<ul class="nav">
                					<li class="active"><a href="index.php">Home</a></li>
                					<li><a href="about/">About</a></li>
                					<li><a href="contactus/">Contact</a></li>
                					<li class="dropdown">
                  					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Members<b class="caret"></b></a>
                  					<ul class="dropdown-menu">
                    					<li><a href="login/">Login</a></li>
                    					<li><a href="register/">Register</a></li>
                    					<?php if(!empty($_SESSION['LoggedIn']) && ($_SESSION['LoggedIn']) == 1){echo "<li><a href=\"login/logout.php\">Logout</a></li>";} ?>
                  					</ul>
                				</li>
              				</ul>
            			</div>
          			</div>
        		</div>
      		</div>
    	</div>
    	</div>
    </header>
    
    <section id="smain">
    <div class="container">
    	<div id="main">
        <!--Registration Form-->
        <div id="register">
        <h2><u>Register</u></h2>
        <form name="register" method="post" onsubmit="return validate('register')" action="register/cregister.php" >
        <p>First Name: <br />
        <input type="text" name="firstname" placeholder="Bob" required autofocus/></p>

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
        <img src="captcha/captcha_code_file.php?rand=<?php echo rand(); ?>"
        id="captchaimg" ></br>
        <label for="message">Enter the code above here :</label></br>
        <input id="6_letters_code" name="6_letters_code" type="text">
        <!------------>

        <p>
        <input type="submit" name="submit" value="Register" /></p>
        </form>	
    	</div>
        </div>
    </div>
    </section>
  
  
  <footer>
  	<div id="bottom">
    <!--Footer Widgets (1-5)-->
  		<div id="fwidgets">
  			<div class="clearfix" id="fw1">
  				<h3>Mission Statement</h3>
  				<blockquote><b>Anything can be accomplished, with software.</b></blockquote>
  			</div>
  			<div class="clearfix" id="fw2">
  				<h3>Technology</h3>
  				<ul>
                <li><a href="#">Java</a></li>
                <li><a href="#">.Net</a></li>
                <li><a href="#">PHP</a></li>
                <li><a href="#">IOS</a></li>
                <li><a href="#">Android</a></li>
                </ul>
  			</div>
  			<div class="clearfix" id="fw3">
  				<h3>Services</h3>
  				<ul>
                <li><a href="#">IOS Development</a></li>
                <li><a href="#">Android Development</a></li>
                <li><a href="#">Website Develpment</a></li>
                <li><a href="#">IT Solutions</a></li>
                <li><a href="#">Network Infostructures</a></li>
                </ul>
  			</div>
            <div class="clearfix" id="fw4">
            	<h3>Help</h3>
  				<ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="about/">About Us</a></li>
                <li><a href="contactus/">Contact Us</a></li>
                </ul>
  			</div>
            <div class="clearfix" id="fw5">
  				<h3>Company Info</h3>
  				<p id="companyinfo">
				2458 S . 124 St.Suite 47 <br />
				Pembroke Pines 33029 <br />
				Phone: (305) 209-6132<br />
				Fax: (305) 209-6132<br /></p>
  			</div>
  		</div>
        <!--Footer Copyright Tag-->
  		<div id="fcopyright">
  		<p> &copy 2013 by Alain Edwards.</p>
  		</div>
  	</div>
  </footer>
  
  </body>
</html>