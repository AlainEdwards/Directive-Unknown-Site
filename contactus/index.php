<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
  	<base href="../"
    <title>Contact Us</title>
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
        <!--Contact Us Form-->
        <div id="contact">
        <h2><u>Contact Us</u></h2>
        <h3>Directive Unknown Productions</h3>
    	<p id="companyinfo">
		2458 S . 124 St.Suite 47 <br />
		Pembroke Pines 33029 <br />
		Phone: (305) 209-6132<br />
		Fax: (305) 209-6132<br /></p>
        <?php if(isset($_Get['errors'])){echo "<p>$error";}?>
		<form name="contact" method="post" onsubmit="return validate('contact')" action="contactus/confirmation.php">
		<p>Your Name: (required)<br/>
		<input type="text" name="name" placeholder="Bob Green" required autofocus/></p>

		<p> Your Phone Number: (optional)<br />
		<input type="tel" name="phone" placeholder="(954) 123-5241" /></p>

		<p> Your Email: (required)<br  />
		<input type="email" name="email" placeholder="bobgreen@gmail.com" required /></p>

		<p>Subject: <br />
		<input type="text" name="subject" /></p>

		<p>Your Message: <br />
		<textarea name="message" rows="5" cols="100" placeholder="Please due leave us a breif message."></textarea></p><br />

		<!--Captcha-->
		<img src="captcha/captcha_code_file.php?rand=<?php echo rand(); ?>"
		id="captchaimg" ><br /><br />
		<label for="message">Enter the code above here :</label><br />
		<input id="6_letters_code" name="6_letters_code" type="text" required>
		<!------------>
		<p>
		<input type="submit" name="submit" value="Send" /></p>
		</form>
		<?php echo "</br><center>Your IP address for security purposes: " . $_SERVER['REMOTE_ADDR'] . "</center>"; ?>	
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