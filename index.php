<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/styles.css">
	<meta name="description" content="Nfitness is an elite fitness center dedicated to helping clients achieve their fitness and nutrition goals.">
	<link href="https://fonts.googleapis.com/css2?family=Francois+One&family=Roboto+Slab&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="icon" type="images/png" sizes="32x32" href="images/favicon-32.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
	<link rel="icon" sizes="192x192" href="images/android-chrome-192.png">
</head>

<body>
			
		<div style="background: black; position: fixed;top: 0;width: 100%;">
		<header id="ffc-logo">
			<a href="index.html"><img src="images/Nfitnesslogo.png" alt="Nfitness Logo" width='60%' height='100%'></a>
			
		</header>
		
		<nav class="tablet-desktop" >
			<ul>
				&nbsp;&nbsp;<li><a href="index.html">Home</a></li> 
				<li><a href="about.html">About Us</a></li> 
				<li><a href="classes.html">Classes</a></li> 	
				<li><a href="nutrition.html">Nutrition</a></li> 
				<li><a href="contact.html">Contact Us</a></li>
				<li><a href="Trainers.html"> Trainers</a></li>
				<li><a href="cart2.html"> Cart</a></li>
				<li><a href="login.html">Log-in</a></li>
				
				
				  </div>
			</ul>
			
		</nav>
	</div>
	
		<div id="hero" class="tablet-desktop">
			<img src="images/hero-image.jpg" alt="left arm extended holding a weight" style="    margin-top: 150px;">
		</div>
		
		
		<main>
		
		<div class="tablet-desktop">
		
			<p>Welcome to Nfitness. Our mission is to help our clients meet their fitness and nutrition goals.</p>
			
			<p>If you have struggled with getting healthy and need the motivation and resources to make a healthy lifestyle change, contact us today. Our facility includes state-of-the-art equipment, convenient group training classes, and nutrition tips and information to keep you healthy.</p>
			
			<p>We provide a FREE one-week membership so you can experience the benefits of our equipment and facility. This one-week trial gives you complete access to our equipment, training classes, and nutrition planning. Contact us today to <span class="action">start your free trial!</span></p>
		
		</div>
		
		<div class="grid">
		
		<figure class="frame">
			<a href="classes.html"><img src="images/fitness-group.jpg" alt="group of fitness people"></a>
			<figcaption class="pic-text">Group Fitness</figcaption>
		</figure>
		
		<figure class="frame">
			<a href="nutrition.html"><img src="images/food-heart.jpg" alt="healthy food in the shape of a heart"></a>
			<figcaption class="pic-text">Meal Plans</figcaption>
		</figure>
		
		<figure class="frame">
			<a href="contact.html"><img src="images/personal-trainer.jpg" alt="personal trainer with a clipboard"></a>
			<figcaption class="pic-text">Start Today</figcaption>
		</figure>
		
		</div>
        
		<div id="form">
		
	
		<form action="weight.php" id="get" class="form-grid"> 
		
			<fieldset>
				<legend> KNOW YOUR DESIRED WEIGHT!!</legend>
				<label for="weight">Weight:</label>
				<input type="text" name="weight" id="fName" >
				
				<label for="height">Height:</label>
				<input type="text" name="height" id="lName" >
                <?php include 'weight.php';?>
             
			</fieldset>
			
			
			
			<input type="submit" id="submit" value="submit" class="btn">
		
		</main>
		
		
		<footer style="padding:10px;">

			<div style="width: 20%; float: left; padding: 2%;">
				<a  href="index.html"><img src="images/Nfitnesslogo.png" alt="Nfitness Logo" width='200px' height='200px' ></a>
			</div>
			
					<div class="copyright" ><p>
				
						<a style="color: rgb(255, 255, 255);font-size: large;"href="index.html">Home</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<a style="color: rgb(255, 255, 255);font-size: large;"href="about.html">About Us</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<a style="color: rgb(255, 255, 255);font-size: large;"href="classes.html">Classes</a> 	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					    <a style="color: rgb(255, 255, 255);font-size: large;"href="nutrition.html">Nutrition</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<a style="color: rgb(255, 255, 255);font-size: large;"href="contact.html">Contact Us</a>
						<p style="font-size: medium;"><a href="mailto:nfitness2020@gmail.com">nfitness2020@gmail.com</a></p>
						
						
					</p>	
						
				</div>
<div style=" float: right; padding: 2%;">
			
	<p><a  href= target="_blank"><img src="images/facebook-logo.png" alt="black and white Facebook logo"></a></p>
		<p>	<a href= target="_blank"><img src="images/twitter-logo.png" alt="black and white Twitter logo"></a></p>
		</div>
		
			
		
			
		</footer>
		

	
	<script src="scripts/script.js"></script>
	
</body>
</html>

