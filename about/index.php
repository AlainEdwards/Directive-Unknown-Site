<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
  	<base href="../"
    <title>About Us</title>
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
        <!--About Us-->
        <div id="about">
        <h2><u>About Us</u></h2>
        <p>Our aim at Directive Unknown Productions is provide outstanding consulting services to our valued customers that are unparalleled in the industry. Our knowledgeable team who are adept and proficient software engineers will create software solutions that are precise and fast.
Excellence is our goal as we strive to create a software solution that emulates your vision both internally and externally. Your software will be as exceptional and exclusive as you are. The uniqueness of your product determines the fact that you will no longer be a square peg trying to fit into round holes. 
Our exceptional staff will work with you on a one to one basis to assist you in finding the perfect solution to your problems; even if it means utilizing a napkin to create a few notes. Our goal is to provide extraordinary and transparent services to our clientele in a clear and concise manner that exhibits our proficiency in communication. This means that you will not be inundated with technical glitches or surprises. Remember that our aim is please even if you are just a novice at making software we will guide you successfully through the process.
</p>
		<div id="specialize" class="clearfix:after">
		<h3><u>We Specialize In:</u></h3>
		<h4>web applications</p>
		<p>tablet apps</p>
		<p>mobile apps</p>
		<p>software-as-a-service (SaaS)</p>
		<p>cloud applications</p>
		<p>rich internet applications</p>
		<p>business process automation</p>
		<p>desktop applications</p>
		<p>systems integrations</p>
		<p>web services / api</p>
		<p>databases</p>
		<p>analytics / reporting</p>
		<p>ui / ux</p>
		</h4>
		</div>
        
        <div id="rabout" class="clearfix:after">
        <p>Our highly trained and skillful team is proficient in utilizing any form of modern programming language. We are versed in the art of building software solutions in up to 40% less time within 100% of precision. This is due to the fact that we utilize a detailed illustrated design method along with the fact that we have a pre-built code library. Our highly motivated team and vast technological resources along with dexterity in applying and creating design methodology gives us the opportunity to create software that solutions supersedes your expectations.</p>
        
        <p>We have the ability to design products that are creative, iterative, detailed and fast. We will work closely with you to develop and emulate your vision so that it is mirrored and copied in every way shape or form that you expect it to be. We will pay close attention to details in order to circumnavigate any flaws that we might encounter so as to provide a more heightened experience while introducing new and innovative features which will certainly enhance the outcome while providing an improved experience. We are a result oriented team that utilizes an amazing mix of common user interface elements, usability testing and last but not least experienced software analysts and designers to accomplish your goals.</p>
        
        <p>We strive for excellence which means that our development team is first rate and exceptional in all that they do. Our expertise is centered in the use of first rate technology such as  jQuery, JavaScript, HTML 5, JSON, PHP, MYSQL, .NET, and Java. Our tablets and mobile devices are developed through the use of iOS and Android. I encourage you to visit or capabilities page to view our areas of expertise.</p>
        
        <p>We utilize a remarkable Quality Assurance (QA) Team whose goal is maintain our delivery "pixel perfect" software through the use of continuous testing. Industry-standard testing tools are also utilized to influence established methodologies in order to provide our organization with extra ordinary quality and integrity.</p>
        <p>We also provide sharing data between disparate systems which is accomplished through our use of well-written data interfaces and web sources. We have worked tirelessly at developing a broad range of interfaces between various software devices and platforms. Advanced and newfangled technological ideas are utilized to connect system, share data, simplify and automate interoperability and standardize data across our corporation. Our experienced consultants can assist you with just about anything whether it is to integrate web-based applications or internal systems.</p>
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
        <!--Footer Copyright Tag-->
  		<div id="fcopyright">
  		<p> &copy 2013 by Alain Edwards.</p>
  		</div>
  	</div>
  </footer>
  
  </body>
</html>