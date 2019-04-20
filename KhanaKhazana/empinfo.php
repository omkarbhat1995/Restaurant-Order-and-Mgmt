<?php 

    // First we execute our common code to connection to the database and start the session 
    require("common.php"); 
	$u=$_GET['username'];
	$id=$_GET['id'];
    $submitted_username = ''; 
     
        $query = " SELECT * FROM Employee WHERE Email_id = :username"; 
         
        // The parameter values 
        $query_params = array( 
            ':username' => $u
        ); 
         
        try 
        { 
            // Execute the query against the database 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex) 
        { 
            // Note: On a production website, you should not output $ex->getMessage(). 
            // It may provide an attacker with helpful information about your code.  
            die("Failed to run query: " . $ex->getMessage()); 
        } 
         
        $row = $stmt->fetch(); 
        if($row) 
        { 
           // echo($row['Street_No']);
		} 
			define ('DB_Name','og7ut_khana_khazana');
			define ('DB_User','og7ut');
			define ('DB_Pass','bXnQZS1k');
			define ('DB_Host','mysql.cs.virginia.edu');
			$link= mysqli_connect(DB_Host,DB_User,DB_Pass,DB_Name);
	       

?> 
<script language="javascript">
function myfun(){
	a=document.getElementById("update").value;
if (a==="Cn"){
	document.getElementById("Contact_No").removeattribute("readonly");}
	if (a==="Ei"){
		window.alert("Vooo");
	document.getElementById("username").removeattribute("readonly");}
}
</script>
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
		 	<div class="main-part">
		 		<h3 class="text-center">EMPLOYEE</h3>
			 	<h1 class="text-center">INFORMATION</h1>
			 	<hr>
			 	<div class="row">
			 		<div class="col-md-3 mx-auto text-center box1 wow animated fadeInUp">
			 			<i class="fas fa-map-marker-alt"></i>
			 			<h2>Update</h2>
			 			<p><select id="update" onchange="myfun()">
									<option value="">Select One</option>
									<option value="Ad">Address</option>
									<option value="Cn">Contact Number</option>
									<option value="Ei">Email ID</option>									
									<option value="Ty">Type</option>
									<option value="Al">Whole Account</option>
									</select></p>
			 			<p></p>
			 			<p></p>
			 		</div>
			 		<div class="col-md-3 mx-auto text-center box2 wow animated fadeInUp" style="animation-delay: 0.3s;">
			 			<i class="fas fa-phone"></i>
			 			<h2>View</h2>
			 			<p><select name="view">
									<option value="">Select One</option>
									<option value="Ad">Address</option>
									<option value="Cn">Contact Number</option>
									<option value="Ei">Email ID</option>									
									<option value="Ty">Type</option>
									<option value="Al">Whole Account</option>
									</select></p>
			 			<p></p>
			 			<p></p>
			 		</div>
			 		<div class="col-md-3 mx-auto text-center box3 wow animated fadeInUp" style="animation-delay: 0.6s;">
			 			<i class="fas fa-clock"></i>
			 			<h2>Delete</h2>
			 			<p><select name="delete">
									<option value="">Select One</option>
									<option value="Ad">Address</option>
									<option value="Cn">Contact Number</option>
									<option value="Al">Whole Account</option>
									</select></p>
	    				<p></p>
	    				<p></p>
			 		</div>
			 	</div><br><br><br>
				<div align="center">
				<form><h2><p align="center">Info:</p></h2>
							Name:<br /> 
								<input type="text" name="lname" value=<?php echo($row['Emp_Name']);?> readonly></input>        
							<br /><br /> 
							Type:<br /> 
								<input type="text" name="Type" value=<?php echo($row['Type']); ?>  readonly></input>        
							<br /><br /> 	
							Contact:<br /> 
								<input type="text" id="Contact_No" readonly value=<?php echo($row['Contact_No']); ?>></input>        
							<br /><br /> 
							Email ID:<br /> 
								<input type="email" id="username" value=<?php echo($row['Email_id']); ?> readonly></input>        
							<br /><br /> 
							Street No:<br /> 
								<input type="text" name="Street_No" value=<?php echo($row['Street_No']); ?> readonly></input>        
							<br /><br />
							Street Address:<br /> 
								<input type="text" name="Street_Address" value=<?php echo($row['Street_Address']); ?> readonly></input>        
							<br /><br /> 
							City:<br /> 
								<input type="text" name="City" value=<?php echo($row['City']); ?> readonly></input>        
							<br /><br /> 
							State:<br /></form>
								<input type="text" name="State" value=<?php echo($row['State']); ?> readonly></input>    <br><br>    							
							Country:<br /> 
								<input type="text" name="Country" value=<?php echo($row['Country']); ?> readonly></input>        
							<br /><br /> 
							ZIP:<br /> 
								<input type="text" name="zip" value=<?php echo($row['ZIP']); ?> readonly></input>       
							<br /><br /> 
				</div><br><br><br>
		 	</div>
		</div>
	</div>
</body>
</html>