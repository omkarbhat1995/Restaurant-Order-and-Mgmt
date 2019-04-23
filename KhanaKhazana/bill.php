<?php 
    require("common.php"); 
			if (isset($_POST['Con'])){
			$sett=$_POST['Con'];}
			define ('DB_Name','og7ut_khana_khazana');
			define ('DB_User','og7ut');
			define ('DB_Pass','bXnQZS1k');
			define ('DB_Host','mysql.cs.virginia.edu');
			$link= mysqli_connect(DB_Host,DB_User,DB_Pass,DB_Name);
			if (isset($_GET['username']))
			{			$u=$_GET['username'];}
			#echo($u);
			$u1=$u;
			        $query = " SELECT Cust_id FROM Customer WHERE Email_id = :username"; 
        $query_params = array( ':username' => $u);      
		$stmt=$db->prepare($query);
		$result=$stmt->execute($query_params);
		$row=$stmt->fetch();
		#echo($row['Cust_id']);
		$query1="SELECT `O_id` FROM `Food_order` WHERE Date=(SELECT max(Date) FROM `Food_order`)";
		$stmt1=$db->prepare($query1);
		$result1=$stmt1->execute();
		$row1=$stmt1->fetch();
		$id=$row1['O_id'];
		if ($sett=='Confirm'){

		$bilcrt="INSERT INTO Bill (`Bill_ID`,`Bill_date`,`O_id`) VALUES(NULL,CURRENT_TIMESTAMP,'$id')";
		if (!mysqli_query($link,$bilcrt)){die('Error'.mysqli_error($link));}

		$url="track.php?username=".$u;
		header("Location: ".$url);}
		// function heder(){
		// $url="track.php?username=".$u;
		// header("Location: ".$url);
		// echo("U have been Hacked ! ! ! ");#}}
		// }
		
?> 
<html>
<style> 
input[type=number] {
  width: 10%;
  padding: 5px 2px;
  margin: 8px 0;
  box-sizing: border-box;
}
</style>
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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/demo.css">
	
	
	
	
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
				<div class="col-md-5 text-center text-part">
					<h3>Discover</h3>
					<h1>Restaurant Menu</h1>
					<a href="#">Discover Menu</a>
					<p class="star">*****</p>
					<p>Discover all our perfect dishes, crafted with love! </p>
				</div>
				<div class="col-md-7 wow animated fadeInRight img-part">
					<img src="img/menu-background1.jpg" alt="img" class="img-fluid" style="width: 100%; min-height: 100%;">
				</div>
			</div>
		</div>

			<div class="creditCardForm">
            <div class="heading">
                <h1>Confirm Order</h1>
            </div>
            <div class="payment">
                <form method="post">
                    <div class="form-group owner">
                        <label for="owner">Owner</label>
                        <input type="text" class="form-control" id="owner">
                    </div>
                    <div class="form-group CVV">
                        <label for="cvv">CVV</label>
                        <input type="tel" class="form-control" id="cvv" maxlength="3">
                    </div>
                    <div class="form-group" id="card-number-field">
                        <label for="cardNumber">Card Number</label>
                        <input type="tel" class="form-control" id="cardNumber" maxlength="16">
                    </div>
                    <div class="form-group" id="expiration-date">
                        <label>Expiration Date</label>
                        <select>
                            <option value="01">January</option>
                            <option value="02">February </option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <select>
                            <option value="19"> 2019</option>
                            <option value="20"> 2020</option>
                            <option value="21"> 2021</option>
                            <option value="22"> 2022</option>
                            <option value="23"> 2023</option>
                            <option value="24"> 2024</option>
                        </select>
                    </div>
                    <div class="form-group" id="credit_cards">
                        <img src="img/visa.jpg" id="visa">
                        <img src="img/mastercard.jpg" id="mastercard">
                        <img src="img/amex.jpg" id="amex">
                    </div>
                    <div class="form-group" id="pay-now">
                        <input type="submit" class="btn btn-default"  name="Con" value="Confirm">
                    </div>
                </form>
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
</html>
