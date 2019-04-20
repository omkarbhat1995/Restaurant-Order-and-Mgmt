<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" width="device-width, initial-scale=1.0">
	<title>The Indian Cuisine - Contact</title>
	<link rel="icon" href="img/favicon.png" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
</head>
<body>
	<div class="container-fluid">
		<div class="col-md-12 contact">
			<nav>
				<div class="row">
					<div class="col-md-3 brand">
						<img src="img/logo.png" alt="img" class="img-fluid">
					</div>
					<div class="col-md-9 list">
						<ul>
							<li><a href="index.php">HOME</a></li>
							<li><a href="menu.php">MENU</a></li>
							<li><a href="gallery.php">GALLERY</a></li><li><a href="login.php">ORDER</a></li>
							<li><a href="contact.php">CONTACT</a></li>
						</ul>
					</div>
				</div>
			</nav>
		 	<div class="main-part" align="center">
		 		<h3 class="text-center">Register</h3>
			 	<hr>
						<form method="post" align="center"> 
							First Name:<br /> 
								<input type="text" name="fname" />        
							<br /><br /> 
							Last Name:<br /> 
								<input type="text" name="lname" />        
							<br /><br /> 
							Contact:<br /> 
								<input type="text" name="Contact_No" />        
							<br /><br /> 
							Email ID:<br /> 
								<input type="email" name="username" />        
							<br /><br /> 
							Street No:<br /> 
								<input type="text" name="Street_No" />        
							<br /><br />
							Street Address:<br /> 
								<input type="text" name="Street_Address" />        
							<br /><br /> 
							City:<br /> 
								<input type="text" name="City" />        
							<br /><br /> 
							State:<br /> 
								<select name="State">
									<option value="AL">Alabama</option>
									<option value="AK">Alaska</option>
									<option value="AZ">Arizona</option>
									<option value="AR">Arkansas</option>
									<option value="CA">California</option>
									<option value="CO">Colorado</option>
									<option value="CT">Connecticut</option>
									<option value="DE">Delaware</option>
									<option value="DC">District Of Columbia</option>
									<option value="FL">Florida</option>
									<option value="GA">Georgia</option>
									<option value="HI">Hawaii</option>
									<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select>				
								        
							<br /><br /> 
							Country:<br /> 								<input type="text" name="Country" />        

							<br /><br /> 
							ZIP:<br /> 
								<input type="text" name="zip" />        
							<br /><br /> 					
							Password:<br /> 
								<input type="password" name="password"/> 
							<br /><br /> 
								<input type="submit" value="Submit" /> 
						
					<br><br><br><br><br><br><br><br>
<a href="register.php">Register</a><br><br><br><br><br><br><br><br>
						</form> 
						
					</div>

		 	</div>
		</div>
	</div>
</body>
</html>


<?php
			define ('DB_Name','og7ut_khana_khazana');
			define ('DB_User','og7ut');
			define ('DB_Pass','bXnQZS1k');
			define ('DB_Host','mysql.cs.virginia.edu');
			$link= mysqli_connect(DB_Host,DB_User,DB_Pass,DB_Name);
	if (!$link){
		die('Coundnt connect'.mysqli_error($link));
	}
	$db_selected=mysqli_select_db($link,DB_Name);
	if (!$db_selected){
		die('Cant use DB'.mysqli_error($link));
	}
	$u=(string)$_POST['username'];
	$p=(string)hash('sha256',$_POST['password']);
	$f=$_POST['fname'];
	$l=$_POST['lname'];
	$c=$_POST['Contact_No'];
	$s1=$_POST['Street_No'];
	$s2=$_POST['Street_Address'];
	$s3=$_POST['City'];
	$s4=$_POST['State'];
	$s5=$_POST['Country'];
	$z=$_POST['zip'];
	
$sql2="INSERT INTO Customer (`Cust_id`,`F_Name`,`L_Name`,`Contact_No`,`Email_id`,`Street_No`,`Street_Address`,`City`,`State`,`Country`,`ZIP`,`Password`) VALUES (NULL,'$f','$l','$c','$u','$s1','$s2','$s3','$s4','$s5','$z','$p')";
if (!mysqli_query($link,$sql2)){die('Error'.mysqli_error($link));}

header("refresh:1;url=login.php");
mysqli_close($link);
?>