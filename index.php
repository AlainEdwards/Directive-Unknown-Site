<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
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
        <!--Slider-->
    		<div id="slider" class="carousel slide">
            	<div class="carousel-inner">
                	<div class="item active">
                    	<img src="images/Slides/ios.png">
                    	<div class="carousel-caption">
                        <h4>New IOS 7</h4>
                        <p>Whats going on with the new iPhone operating system, IOS 7</p>
                        </div>
                    </div>
                    <div class="item">
                    	<img src="images/Slides/lab.jpg">
                    	<div class="carousel-caption">
                        <h4>Our Testing Facilities</h4>
                        <p>We are always cooking up innovating ideas in our labs.</p>
                        </div>
                    </div>
                    <div class="item">
                    	<img src="images/Slides/business.jpg">
                    	<div class="carousel-caption">
                        <h4>Business Done Properly</h4>
                        <p>Here at Directive Unknown Productions, we take business seriously.</p>
                        </div>
                    </div>
                 </div>
                 <a class="left carousel-control" href="#slider" data-slide="prev">&lsaquo;</a>
                 <a class="right carousel-control" href="#slider" data-slide="next">&rsaquo;</a>
              </div>
    		<div id="mbottom">   	
            <!--Main Page Tabs-->	
            <hr class="featurette-divider">
            <div class="row featurette">
            	<div class="col-md-5">
          			<img class="featurette-image img-responsive" src="images/elements/ios7.png" alt="IOS 7" width="300" height="300">
        		</div>
        		<div class="col-md-7">
          			<h4 class="featurette-heading">IOS Applicantion Development</h4>
          			<p class="lead">Reach over 25% of the American population with your next big idea. IOS applications have been developed in house since ground zero. Directive Unknown Productions has what it takes to build any IOS app of any nature. Because of our many years in developing IOS applications you can be assured that your application will be done properly and on time.</p>
        		</div>
      		</div>
            
            <hr class="featurette-divider">
            <div class="row featurette">
            	<div class="col-md-5">
          			<img class="featurette-image img-responsive" src="images/elements/android.png" alt="Android" width="300" height="300">
        		</div>
        		<div class="col-md-7">
          			<h4 class="featurette-heading">Android Applicantion Development</h4>
          			<p class="lead">As the android market grew over the years, Directive Unknown Productions has grown as well. By building our own top notch in house Android applications development team, we were able to divide and conquer the Android market. Our developers have what it takes to build the world's next best app on your command.</p>
        		</div>
      		</div>
            
            <hr class="featurette-divider">
            <div class="row featurette">
            	<div class="col-md-5">
          			<img class="featurette-image img-responsive" src="images/elements/web.png" alt="Web" width="300" height="300">
        		</div>
        		<div class="col-md-7">
          			<h4 class="featurette-heading">Web Development</h4>
          			<p class="lead">If you're not particularly interested in an IOS or Android mobile application, we have good news for you. Directive Unknown Productions also develops web OS applications. What this means is you can reach any targeted audience wheatear it be IOS, Android, or both.</p>
        		</div>
        		
      		</div>
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
  		<div id="fcopyright">
        <!--Footer Copyright Tag-->
  		<p> &copy 2013 by Alain Edwards.</p>
  		</div>
  	</div>
  </footer>
  
  </body>
</html>