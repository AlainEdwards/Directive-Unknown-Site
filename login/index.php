<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
  	<base href="../"
    <title>Login</title>
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
        <!--Login Form-->
        <div id="login">
        <form class="form-signin" name="form" action="login/checklog.php" method="POST">
        <h2 class="form-signin-heading">Member Login: </h2><a style="color:red"><?php if(!empty($_GET["Err"]) && $_GET["Err"] == "wp"){echo "Wrong Username or Password";}?></a>
        <input type="text" class="input-block-level" placeholder="Username" name="myusername" autofocus>
        <input type="password" class="input-block-level" placeholder="Password" name="mypassword">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
      	</form>
      	<a href="register/">Not a member? Register!</a>	
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