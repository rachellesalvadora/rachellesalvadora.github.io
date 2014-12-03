<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0">

	<title>Rachelle Salvadora</title>
	<link href='http://fonts.googleapis.com/css?family=Lato:100,400,900,100italic,300italic,700italic' rel='stylesheet' type='text/css'>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jphotogrid.js"></script>
</head>
<body>
	<div class="grid">

		<div class="grid__item one-whole bg-1">
			<div class="wrap top-30">
				<img class="logo" src="img/logo.png" alt="manak" />
				<ul class="nav nav--banner nav-top">
					<li><a href="#cs50">CS50</a></li>
					<li><a href="#mypartner">My Partner</a></li>
					<li><a href="#philippines">Philippines Holiday</a></li>
					<li><a href="#singapore">Singapore Holiday</a></li>
					<li><a href="#contact">Contact</a></li>
					<li><em><a href="http://blog.rachellesalvadora.com" target="_blank">My Blog</a></em></li>
				</ul>
			</div>
		</div>

		<div class="grid__item one-whole bg-2">

			<div class="container top-100">
				<h1>Hi, I'm Rachelle Salvadora.</h1>
				<p>
					I'm from Taguig, Philippines, Not too long ago I was studying a Bachelor of Arts.<br/>
					Web Development was <strong>completely foreign</strong> to me 10 months ago.
					Since then I've completed Harvard's CS50 Intro to Computer Science, <strong>I'm aspiring to become a Web Developer</strong>.<br/>
					I'll be leaning towards front end development.<br/>
				</a><strong>It's just a matter of time until I am.</strong>
				<br/><br/>
				<span class="blog-link"><a href="http://blog.rachellesalvadora.com">Please checkout <em>my blog</em> ! A lot of content on there !</a></span>
			</p>
		</div>

	</div>

	<div class="grid__item one-whole bg-3">
		<div id="cs50" class="container top-60 cs50">
			<h1>CS50 - Introduction to Computer Science | edX </h1>
			<h2>'Demanding, but definitely doable. Social, but educational. A focused topic, but broadly applicable skills. CS50 is the quintessential Harvard course'</h2>
			<p class="grid__item two-thirds">CS50 Was an Introduction to Computer Science MOOC offered through Harvard University through edX. The course was designed to teach studnets how to think algorithmically and solve problems efficiently. <br/><br/>
				There were multiple ways to take the course, it was either free from edX, CS50x with certificate for $50 or a Certified Certificate from Harvard University for $350. <br/>
				I chose the $350 Harvard CS50 Certificate.<br/>
				<br/> I came from not knowing any coding language, never touching a code editor in my life, to creating for loops, if statements, variables in C, PHP, JavaScript and even making web pages using SQL / CSS and HTML. <br/><br/>
				CS50 is being offered again late 2014 and 2015 as far as I know. It's a great stepping stone for anyone who wants to get serious with Computer Science.
			</p>
			<p class="grid__item one-quarter">
				You can view my certified certificate here:
				<img  src="img/cs50-certificate.png" alt="CS50 Certificate" />
				<a href="https://os.dce.harvard.edu/dce-public/certificate/verify/4c12a86a-341c-4d0b-bba4-db6385551aef">Verified link</a>
			</p>
		</div>
	</div>

	<div class="grid__item one-whole bg-4">
		<div id="mypartner" class="container top-60">
			<div class="grid__item one-quarter">
				<img src="img/gandr2.png" alt="g and r"/>
			</div>
			<div class="grid__item two-thirds">
				<h1>My Partner</h2>
					<p><span>His name is <a href="http://giolliano.com">Giolliano Sulit</a>, he's my other half.</span><br/>
						He's works as a Web Developer full time working in Melbourne, Australia. <br/><br/>
						We're doing it long distance right now, but it's only <strong>temporary.</strong><br/>
						We've got a <a href="http://giollianoandrachelle.com">blog</a> together, you can read more about us there.<br/>
						He's taught and guided me through <em>a lot</em> and has <strong>always been there.</strong><br/><br/>
						<strong>He really loves me.</strong>
					</p>
				</div>
			</div>
		</div>
		<div class="grid__item one-whole bg-3">
			<div id="philippines" class="container top-60 cs50">
				<h1 class="text--center"><strong> Our Trip to Philippines ! June / July 2014</strong> </h1>
				<h2 class="text--center">Here are some pictures of Giolliano's recent trip here to Philippines</h2>
				<p class="grid__item grid--center ">
					<h4 class="text--center">Click images to open them up ! </h4>
					<div id="container">			
						<ul id="pg">
							<?php for ($i = 1; $i <= 20; $i++){ ?>
							<li>
								<img src="philippines/<?php echo $i; ?>.jpg" alt="DSC_0660">
							</li>
							<?php } ?>
						</ul>

					</div>
				</p>
			</div>
		</div>
		<div class="grid__item one-whole bg-4">
			<div id="singapore" class="container top-60 cs50">
				<h1 class="text--center"><strong> Our Trip to Singapore ! November 2013</strong> </h1>
				<h2 class="text--center">We went to Singapore November 2013 ! It was awesome !</h2>
				<p class="grid__item grid--center ">
					<h4 class="text--center">Hover over the images to flip them ! </h4>
					<div id="ri-grid" class="ri-grid ri-grid-size-1 ri-shadow">
						<img class="ri-loading-image" src="img/loader.gif"/>
						<ul>
							<?php for ($i = 1; $i <=45; $i ++) { ?>
							<li class="orchard-li-1"><a class="orchard-a-1" href="#"><img src="singapore/<?php echo $i ?>.jpg"/></a></li>
							<?php } ?>						
						</ul>

					</div>
				</p>
			</div>
		</div>
		<div class="grid__item one-whole bg-5">
			<div id="contact" class="container top-60">
				<h1>Get in contact ! </h1>
				<p>I'll be updating my website very soon, as well as blogging about the CS50 exprience, be sure to come back to check it all out ! <br/>
					In the mean time you can contact me here: <a href="mailto:rachellesalvadora@gmail.com"/>rachellesalvadora@gmail.com</a></p>

				</div>
			</div>

		</div>
		<script>
		$(document).ready(function(){

			$('#pg').jphotogrid({
				baseCSS: {
					width: '175px',
					height: '117px',
					padding: '0px'
				},
				selectedCSS: {
					top: '50px',
					left: '100px',
					width: '500px',
					height: '360px',
					padding: '10px'
				}
			});

			$(function() {
				
				$( '#ri-grid' ).gridrotator( {
					animSpeed : 300,
					animType : 'rotateBottom',
					w320 : {
						rows : 3,
						columns : 4
					},
					w240 : {
						rows : 3,
						columns : 3
					},
					slideshow : false,
					onhover : true
				} );
				
			});

		});
		
		</script>
		<script type="text/javascript" src="js/modernizr.custom.26633.js"></script> 
		<script type="text/javascript" src="js/jquery.gridrotator.js"></script>
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-51698370-1', 'auto');
		ga('send', 'pageview');

		</script>
	</body>
	</html>