<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Contact</title>
		<meta name="description" content="Contact paage" />
		<meta name="author" content="Prashakar Prabagaran" />
		<link rel="icon" href="favicon.ico">

		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/nav-bar.css" />
		<link rel="stylesheet" type="text/css" href="css/default_form.css" />
		<link rel="stylesheet" type="text/css" href="css/component_form.css" />


		<link href='http://fonts.googleapis.com/css?family=Raleway:200,400,800' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,900,300' rel='stylesheet' type='text/css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script src="js/nav-bar.js"></script>

		<script>
			$(document).ready(function(){
				$('a[href^="#"]').on('click',function (e) {
				    e.preventDefault();

				    var target = this.hash;
				    var $target = $(target);

					$('html, body').stop().animate({
					     'scrollTop': $target.offset().top
					}, 350, 'swing');
				});
			});
		</script>

		<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="nav-scroll" style="position:fixed; top:42px; z-index: 6;"></div>

				<div id="page-start"></div>
				<nav id="menu">
				<div id='cssmenu'>
				<ul>
				   <li style="float: left;" class='logo'><a href="#page-start" style="top:-3px;"><img class="nav-logo" src="img/prash_logo_sm.png"></a></li>
				   <li style="display: inline-block;"><a href='index.html'>Back to home</a></li>
   				   <li style="display: inline-block;" class="logo"><a></a></li>
                                   <li style="float: right;"><a href='#'>Resume</a></li>
				   <li style="float: right;"><a href='http://www.linkedin.com/in/prashakar'>LinkedIn</a></li>
				   <li style="float: right;"><a href='http://www.youtube.com/playinfinite'>Youtube</a></li>
				   <li style="float: right;"><a href='http://www.instagram.com/viewsfromthe_/'>Instagram</a></li>

				</ul>
				</div>
				<span class="line"></span>
				</nav>
				<div id="space"></div> 

			<div class="main">
				<form class="cbp-mc-form">
					<div class="cbp-mc-column">
						<label for="name">Name</label>
	  					<input type="text" id="name" name="name" placeholder="Jon Snow">
	  					<label for="email">Email Address</label>
	  					<input type="text" id="email" name="email" placeholder="jon@thrones.com">
	  					<label for="phone">Phone Number<small><b> (optional)</b></small></label>
	  					<input type="text" id="phone" name="phone" placeholder="416 999 9999">

	  				</div>
	  				<div class="cbp-mc-column">
	  					<label>Contact Reason?</label>
	  					<select id="subject" name="subject">
	  						<option>Choose a reason</option>
	  						<option>Learn more about me</option>
	  						<option>Resume request</option>
	  						<option>Development opportunities</option>
	  						<option>YouTube related inquiry</option>
	  						<option>Tips/advice for me</option>
	  						<option>Other</option>
	  					</select>
	  					<label for="message">Message</label>
	  					<textarea id="message" name="message" placeholder="Enter message here"></textarea>	
	  				</div>
	  				<div class="cbp-mc-submit-wrap"><input class="cbp-mc-submit" name="submit" type="submit" value="Send message" /></div>
				</form>
			</div>
		<?php
		alert("hi"); 
		if(isset($_POST['submit'])){
		    $to = "prashakarp@gmail.com"; // this is your Email address
		    $from = $_POST['email']; // this is the sender's Email address
		    $name = $_POST['name'];
		    $subject = "Form submission " . $_POST['subject'];
		    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];

		    $headers = "From:" . $from;
		    $headers2 = "From:" . $to;
		    mail($to,$subject,$message,$headers);
		    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
		    // You can also use header('Location: thank_you.php'); to redirect to another page.
		    }
		?>
			<h1><center>Page in development :) Come back soon!</center></h1>


			<div class="ref">
			<p style="padding: 0; margin: 0;">Back to home</p>
			<a id="nav" style="font-family: Lato; font-weight: 700;" href="index.html">Click me!</a>
			<p>- Prashakar Prabagaran 2016 -</p>
			</div>
		</div><!-- /container -->
		<script src="js/TweenLite.min.js"></script>
		<script src="js/EasePack.min.js"></script>
		<script src="js/rAF.js"></script>
		<script src="js/demo-1.js"></script>
		<script>
		var p = $( '#page-start' );
		var position = p.position();
		var pos = position.top;
		$(document).ready(function() {
		 $(window).scroll(function () {
		      //if you hard code, then use console
		      //.log to determine when you want the 
		      //nav bar to stick.  
		      console.log($(window).scrollTop())
		    if ($(window).scrollTop() > position.top) {
		      $('#menu').addClass('navbar-fixed');
		      $('.navbar-space').css({"top":pos,"background-color":"#223348"});
		      $('#space').addClass('navbar-space');

		    }
		    if ($(window).scrollTop() < position.top+1) {
		      $('#menu').removeClass('navbar-fixed');
		      $('#space').removeClass('navbar-space');
		    }

		  });
		});
	
		</script>
		<script>
  		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  		ga('create', 'UA-78438467-2', 'auto');
  		ga('send', 'pageview');

		</script>
	</body>
</html>
