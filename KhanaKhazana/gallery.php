<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" width="device-width, initial-scale=1.0">
	<title>The Indian Cuisine - Menu</title>
	<link rel="icon" href="img/favicon.png" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
</head>
<body>
	<div class="container-fluid">
		<div class="col-md-12 background">
			<nav class="fixed-top">
				<div class="row">
					<div class="col-md-3 text-center brand">
						<img src="img/logo.png" alt="img" class="img-fluid">
					</div>
					<div class="col-md-9 list">
						<ul>
							<li><a href="index.php">HOME</a></li>
							<li><a href="menu.php">MENU</a></li>
							<li><a href="gallery.php">GALLERY</a></li>
							<li><a href="login.php">ORDER</a></li>
							<li><a href="contact.php">CONTACT</a></li>
						</ul>
					</div>
				</div>
			</nav>
			<div class="row upper-part">
				<div></div>
			</div>
		</div>

		<div class="col-md-12 menu text-center">
			<div class="starter">
				<div class="col-md-6 mx-auto">
					<h3>For Start</h3>
					<h1>Starters</h1>
					<hr class="hr1">
					<p>
						Sanjeev Kappor, chef of The Indian Cuisine has prepared some delicious starters for every taste. Try some of our home made soups made from fresh ingredients or some of our refreshing salads. Bon appetit!
					</p>
				</div>

				<div class="row">
					<div class="col-md-6 soups">
						<h2>SOUPS</h2>
						<hr class="hr2">
						<div class="row">
										<div class="col-md-7 wow animated fadeInRight img-part">
					<img src="img/tomato-soup.jpg" alt="img" class="img-fluid" style="width: 100%; min-height: 100%;">
				</div>
							
						</div>
					</div>
					<div class="col-md-6 salads">
						<h2>SALADS</h2>
						<hr class="hr3">
						<div class="row">
										<div class="col-md-7 wow animated fadeInRight img-part">
					<img src="img/tomato-soup.jpg" alt="img" class="img-fluid" style="width: 100%; min-height: 100%;">
				</div>			<div class="col-md-7 wow animated fadeInRight img-part">
					<img src="img/tomato-soup.jpg" alt="img" class="img-fluid" style="width: 100%; min-height: 100%;">
				</div>
						</div>
					</div>
				</div>
			</div>

			<div class="main-dish">
				<div class="col-md-6 mx-auto">
					<h3></h3>
					<h1>Main Dishes</h1>
					<hr class="hr4">
				</div>

				<div class="row">
								<div class="col-md-7 wow animated fadeInRight img-part">
					<img src="img/tomato-soup.jpg" alt="img" class="img-fluid" style="width: 100%; min-height: 100%;">
				</div>
				</div>
			</div>


			<div class="desserts">
				<div class="col-md-6 mx-auto">
					<h3></h3>
					<h1>Desserts</h1>
					<hr class="hr5">
				</div>
				<div class="row">
									<div class="col-md-7 wow animated fadeInRight img-part">
					<img src="img/tomato-soup.jpg" alt="img" class="img-fluid" style="width: 100%; min-height: 100%;">
				</div>
				</div>
			</div>
		</div>

		<div class="col-md-11 mx-auto reservation">
    		<div class="row">

    		</div>
    	</div>

		<div class="col-md-12 footer">
    		<div class="row">
    			<div class="col-md-6 mx-auto text-center upper-part">
    				<img src="img/logo.png" alt="img" class="img-fluid">
    				<p>324 Peyton Court, Charlottesville</p>
    				<p class="change-color">WORKING HOURS:</p>
    				<p>MON- FRI: 08:00 AM - 10:00 PM</p>
    				<p>SAT - SUN: 10:00 AM - 11:00 PM</p>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-md-6 mx-auto text-center middle-part">
    				<a href="#"><i class="fab fa-facebook-f"></i></a>
    				<a href="#"><i class="fab fa-instagram"></i></a>
    				<a href="#"><i class="fab fa-youtube"></i></a>
    				<a href="#"><i class="fab fa-twitter"></i></a>
    			</div>
    		</div>
    		<div class="row">
    			<hr class="hr10">
    		</div>
    		<div class="row">
    			<div class="col-md-4 text-center copyright">
    				<p>&copy; The Indian Cuisine 2019. All rights reserved.</p>
    			</div>
    			<div class="col-md-8 bottom-list">
    				<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="menu.php">Menu</a></li>
						<li><a href="gallery.php">Gallery</a></li>
						<li><a href="login.php">Order</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
    			</div>
    		</div>
    	</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="js/wow.min.js" type="text/javascript"></script>
	<script type="text/javascript">
	 	new WOW().init();
	</script>
	<script type="text/javascript">
		$(window).on('scroll', function(){
			if($(window).scrollTop()){
				$('nav').addClass('black');
			}
			else{
				$('nav').removeClass('black');
			}
		})
	</script>
</body>
</html>>