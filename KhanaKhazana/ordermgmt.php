<?php
require("common.php"); 
			if (isset($_POST["StC"])){
			$sett=$_POST["StC"];}
			if (isset($_POST["StD"])){
				$sett21=$_POST["StD"];
			}
			if (isset($_POST["DDD"])){
				$sett22=$_POST["DDD"];
			}
			define ('DB_Name','og7ut_khana_khazana');
			define ('DB_User','og7ut');
			define ('DB_Pass','bXnQZS1k');
			define ('DB_Host','mysql.cs.virginia.edu');
			$link= mysqli_connect(DB_Host,DB_User,DB_Pass,DB_Name);
			#$conn=mysql_connect(DB_Host,DB_User,DB_Pass);
			#$db=mysql_select_db(DB_Name,$conn);
			$query = " SELECT O_id FROM Food_order WHERE Complete_status='N'"; 
            $res=mysqli_query($link,$query) or die(mysql_error());
			$i=0;
			while($row=mysqli_fetch_array($res))
			{
				$w[$i]=$row['O_id'];
				$i++;
			}
			$wi=$i;
			$j=0;
			$query2="Select O_id from OrderHandledBy WHERE Emp_id='100001'";
			$res1=mysqli_query($link,$query2) or die(mysql_error());
			$i=0;
			while($row1=mysqli_fetch_array($res1))
			{
				$w2[$i]=$row1['O_id'];
				$i++;
			}
			$w2i=$i;
			
			$query4="Select O_id from OrderHandledBy WHERE Emp_id='100002'";
			$res2=mysqli_query($link,$query4) or die(mysql_error());
			$i=0;
			while($row4=mysqli_fetch_array($res2))
			{
				$w3[$i]=$row4['O_id'];
				$i++;
			}
			$w3i=$i;
			$query4="Select O_id from OrderHandledBy WHERE Emp_id='100003'";
			$res2=mysqli_query($link,$query4) or die(mysql_error());
			$i=0;
			while($row4=mysqli_fetch_array($res2))
			{
				$w4[$i]=$row4['O_id'];
				$i++;
			}
			$w4i=$i;
			
			
			if (isset($_POST["ytbc"])){
				$sett1=$_POST["ytbc"];
				#echo($sett1);
			if ($sett=='Send for Cooking'){
				$query1="UPDATE OrderHandledBy SET Emp_id='100002' where O_id='$sett1'";
				$res1=mysqli_query($link,$query1) or die(mysql_error());
			}
			}
			if (isset($_POST["ytbd"])){
				$sett1=$_POST["ytbd"];
				#echo($sett1);
			if ($sett21=='Send for Delivery'){
				$query1="UPDATE OrderHandledBy SET Emp_id='100003' where O_id='$sett1'";
				$res1=mysqli_query($link,$query1) or die(mysql_error());
			}
			}
			if (isset($_POST["ytbcc"])){
				$sett1=$_POST["ytbcc"];
				#echo($sett1);
			if ($sett22=='Delivered'){
				$query1="DELETE  FROM OrderHandledBy where O_id='$sett1'";
				$res1=mysqli_query($link,$query1) or die(mysql_error());
				$query1="UPDATE Food_order SET Complete_status='C' where O_id='$sett1'";
				$res1=mysqli_query($link,$query1) or die(mysql_error());
			}
			}
			$c="C";
			$query5="SELECT O_id FROM Food_order WHERE `Complete_status`='$c' order by O_id desc limit 10";
			$res5=mysqli_query($link,$query5)or die(mysql_error());
			$i=0;
			while($row5=mysqli_fetch_array($res5))
			{
				$w5[$i]=$row5['O_id'];
				$i++;
				
			}
			$w5i=$i;
			while ($i<$w5i){echo($w5[$i]);$i++;}
			
			
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
		</div><br/><br/>

		<div class="creditCardForm">
		<div  class="form-group" align="center">
		<form method="post">
		Order No:
		<select name="ytbc">
		<option value="000">000</option>
		<?php for ($i=0;$i<$w2i;$i+=1) {echo("<option value={$w2[$i]}>{$w2[$i]}</option>");}?>
		</select>
		<input type="submit" value="Send for Cooking" name="StC" ></input></form><br/>
		<form method="post">
		Order No:
		<select name="ytbd">
		<option value="000">000</option>
		<?php for ($i=0;$i<$w3i;$i+=1) {echo("<option value={$w3[$i]}>{$w3[$i]}</option>");}?>
		</select>
		<input type="submit" value="Send for Delivery" name="StD" ></input></form>
		<br/>
		<form method="post">
		Order No:
		<select name="ytbcc">
		<option value="000">000</option>
		<?php for ($i=0;$i<$w4i;$i+=1) {echo("<option value={$w4[$i]}>{$w4[$i]}</option>");}?>
		</select>
		<input type="submit" value="Delivered" name="DDD" ></input></form><br/><br/> Last 10 Orders:
		<table border align="center" width="15%">
		<?php 
		for ($i=0;$i<10;$i++){$j=$i+1;echo("<tr><td>$j</td><td>$w5[$i]</td></tr>");}
	#	echo("</tr>");
		?>
		</table>
		
		
		
		
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
