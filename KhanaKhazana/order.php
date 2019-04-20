<!DOCTYPE html>
<?php $delicyrasgullah=0;
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
			<form method="post" align="center"> 
				<div class="row">
					<div class="col-md-6 soups">
						<h2>SOUPS</h2>
						<hr class="hr2">
						<div class="row">
							<div class="col-md-5 mx-auto soup-1 wow animated fadeInUp">
								<div class="soup-text">
									<h4>$ 10.00</h4>
									<h3>Tomato Soup</h3>
									<p>
										Tomatos, onion, carrot, celery, olive oil, tomato puree, sugar, vegetable soup
									</p>
								</div>
							</div>
							<div class="col-md-5 mx-auto soup-2 wow animated fadeInUp" style="animation-delay: 0.3s;">
								<div class="soup-text">
									<h4>$ 15.00</h4>
									<h3>Mushroom Soup</h3>
									<p>
										Mushrooms, olive oil, garlic, onion, sea salt, black pepper, persley, cheese
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 salads">
						<h2>SALADS</h2>
						<hr class="hr3">
						<div class="row">
							<div class="col-md-5 mx-auto salad-1 wow animated fadeInUp" style="animation-delay: 0.6s;">
								<div class="salad-text">
									<h4>$ 13.00</h4>
									<h3>Cracking cobb salad</h3>
									<p>
										Chicken thighs, pepper, olive oil, salt, pancetta, avocado, tomato, cheese, buttermilk
									</p>
								</div>
							</div>
							<div class="col-md-5 mx-auto salad-2 wow animated fadeInUp" style="animation-delay: 0.9s;">
								<div class="salad-text">
									<h4>$ 12.70</h4>
									<h3>Waldorf Salad</h3>
									<p>
										Grapes, lemon, olive oil, sea salt, black pepper, walnuts, yoghurt, celery	
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="main-dish">
				<div class="col-md-6 mx-auto">
					<h3>More Concrete</h3>
					<h1>Main Dishes</h1>
					<hr class="hr4">
				</div>

				<div class="row">
					<div class="col-md-4 mx-auto box-1 wow animated fadeInUp">
						<div class="box-1-text">
							<h4>$ 9.99</h4>
							<h3>Chicken 65</h3>
							<p>Chicken Deep Fried and Sauteed with Spicy Indian Herbs</p><input type="number" name="md1" value="0"/>
						</div>
					</div>
					<div class="col-md-4 mx-auto box-2 wow animated fadeInUp" style="animation-delay: 0.3s;">
						<div class="box-2-text">
							<h4>$ 23.50</h4>
							<h3>Barbaque Beef</h3>
							<p>
								Short ribs, olive oil, caraway seeds, yoghurt, carrots, onions, white cabbage
							</p><input type="number" name="md2" value="0"/>
						</div>
					</div>
					<div class="col-md-4 mx-auto box-3 wow animated fadeInUp" style="animation-delay: 0.6s;">
						<div class="box-3-text">
							<h4>$ 22.80</h4>
							<h3>Southern Fried Chicken</h3>
							<p>
								Chicken thighs, chicken drumsticks, potatoes, ayenne pepper
							</p><input type="number" name="md3" value="0"/>
						</div>
					</div>
					<div class="col-md-4 mx-auto box-4 wow animated fadeInUp">
						<div class="box-4-text">
							<h4>$ 14.50</h4>
							<h3>Paneer Bhurji	</h3>
							<p>
crumbled paneer simmered in spicy tomato gravy								</p><input type="number" name="md4" value="0"/>
						</div>
					</div>
					<div class="col-md-4 mx-auto box-5 wow animated fadeInUp" style="animation-delay: 0.3s;">
						<div class="box-1-text">
							<h4>$ 14.50</h4>
							<h3>Murg Handi</h3>
							<p>Chicken cooked in handi with whole garam masala</p><input type="number" name="md5" value="0"/>
						</div>
					</div>
					<div class="col-md-4 mx-auto box-6 wow animated fadeInUp" style="animation-delay: 0.6s;">
						<div class="box-2-text">
							<h4>$ 9.50</h4>
							<h3>Puri Sabzi</h3>
							<p>
deep-fried rounds of flour and aloo (potato) bhaji, a spiced potato dish which may be dry or curried							</p>    <input type="number" name="md6" value="0"/>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-9 mx-auto coffee-top wow animated fadeIn">
				<img src="img/dessert-top.png" alt="img" class="img-fluid">
			</div>
			
			<div class="coffees">
				<div class="col-md-6 mx-auto">
					<h3>Powerful</h3>
					<h1>Coffee</h1>
					<hr class="hr5">
				</div>
				<div class="row">
					<div class="col-md-4 mx-auto coffee-1 wow animated fadeInUp">
						<div class="coffee-1-text">
							<h4>$ 5.89</h4>
							<h3>Cappuccino</h3>
							<p>
								Tangerine, vanilla sticks, milk, brown sugar, double cream
							</p>  <input type="number" name="cof1q" value="0"/>
						</div>
					</div>
					<div class="col-md-4 mx-auto coffee-2 wow animated fadeInUp" style="animation-delay: 0.3s;">
						<div class="coffee-2-text">
							<h4>$ 11.50</h4>
							<h3>Affogato</h3>
							<p>A scoop of vanilla gelato drowned with a shot of hot espresso.</p>  <input type="number" name="cof2q" value="0"/>
						</div>
					</div>
					<div class="col-md-4 mx-auto coffee-3 wow animated fadeInUp" style="animation-delay: 0.6s;">
						<div class="coffee-3-text">
							<h4>$ 5.84</h4>
							<h3>Coffee</h3>
							<p>Plain Coffee</p> <input type="number" name="cof3q" value="0"/>
						</div>
					</div>
				</div>
			</div>

			
			
			<div class="desserts">
				<div class="col-md-6 mx-auto">
					<h3>Tasty</h3>
					<h1>Desserts</h1>
					<hr class="hr5">
				</div>
				<div class="row">
					<div class="col-md-4 mx-auto dessert-1 wow animated fadeInUp">
						<div class="dessert-1-text">
							<h4>$ 13.50</h4>
							<h3>Kheer</h3>
							<p>Made by boiling with milk and sugar one of the following: rice, broken wheat, tapioca, vermicelli, sweet corn, etc.</p>
							<input type="number" name="des1q" value="0"/>
						</div>
					</div>
					<div class="col-md-4 mx-auto dessert-2 wow animated fadeInUp" style="animation-delay: 0.3s;">
						<div class="dessert-2-text">
							<h4>$ 15.00</h4>
							<h3>Panna Cotta</h3>
							<p>
								Milk, powdered gelatin, whipping cream, honey, sugar, salt, fresh berries
							</p>								<input type="number" name="des2q" value="0"/>

						</div>
					</div>
					<div class="col-md-4 mx-auto dessert-3 wow animated fadeInUp" style="animation-delay: 0.6s;">
						<div class="dessert-3-text" style="cursor: pointer;" onclick=<?php $delicyrasgullah+=1; ?>>
							<h4>$ 12.00</h4>
							<h3>Delicy Rasgullah</h3>
							<p>
								Strawberry, golden syrup, brown sugar, cream cheese, cinnamon
							</p>								<input type="number" name="des3q" value="0"/>					
						</div>
					</div>
				</div>
			</div>
		</div>
		<div align="center">
			<input type="submit" name="quantity" value="Order"/>
		</div></form>

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
<?php 
    require("common.php"); 
			
			define ('DB_Name','og7ut_khana_khazana');
			define ('DB_User','og7ut');
			define ('DB_Pass','bXnQZS1k');
			define ('DB_Host','mysql.cs.virginia.edu');
			$link= mysqli_connect(DB_Host,DB_User,DB_Pass,DB_Name);
			$u=$_GET['username'];
			        $query = " SELECT Cust_id FROM Customer WHERE Email_id = :username"; 
         
        $query_params = array( 
            ':username' => $u 
        );          
			 $des3q=$_POST['des3q'];
			 $des2q=$_POST['des2q'];
			 $des1q=$_POST['des1q'];
			 $cof1q=$_POST['cof1q'];
			 $cof2q=$_POST['cof2q'];
			 $cof3q=$_POST['cof3q'];
			 $md1=$_POST['md1'];
			 $md2=$_POST['md2'];
			 $md3=$_POST['md3'];
			 $md4=$_POST['md4'];
			 $md5=$_POST['md5'];
			 $md6=$_POST['md6'];
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
	        $row = $stmt->fetch(); 
			$cid=$row['Cust_id'];
			$fo_crt="INSERT INTO Food_order(`O_id`,`Date`,`Quantity`,`Total_amount`,`Cust_id`) VALUES (NULL,CURRENT_TIMESTAMP,'5','5252','$cid')";
			$foid="SELECT max(O_id) FROM Food_order";
			if (!mysqli_query($link,$fo_crt)){die('Error'.mysqli_error($link));}
			$stmt1= $db->prepare($foid);
			$result1=$stmt1->execute();
			$row1=$stmt1->fetch();
			$id=$row1['max(O_id)'];
				if($des3q>0){$it="INSERT INTO Item(`Item_ID`,`Item_qty`,`F_id`) VALUES (NULL,'$des3q','328')";if (!mysqli_query($link,$it)){die('Error'.mysqli_error($link));}$itmax="SELECT max(Item_ID) FROM Item";$stmt2= $db->prepare($itmax);$result2=$stmt2->execute();$row2=$stmt2->fetch();$itid=$row2['max(Item_ID)'];$fooditem="INSERT INTO F_item (`O_id`,`Item_ID`) VALUES ('$id','$itid')";if (!mysqli_query($link,$fooditem)){die('Error'.mysqli_error($link));}}
				if($des2q>0){$it="INSERT INTO Item(`Item_ID`,`Item_qty`,`F_id`) VALUES (NULL,'$des2q','323')";if (!mysqli_query($link,$it)){die('Error'.mysqli_error($link));}$itmax="SELECT max(Item_ID) FROM Item";$stmt2= $db->prepare($itmax);$result2=$stmt2->execute();$row2=$stmt2->fetch();$itid=$row2['max(Item_ID)'];$fooditem="INSERT INTO F_item (`O_id`,`Item_ID`) VALUES ('$id','$itid')";if (!mysqli_query($link,$fooditem)){die('Error'.mysqli_error($link));}}
				if($des1q>0){$it="INSERT INTO Item(`Item_ID`,`Item_qty`,`F_id`) VALUES (NULL,'$des1q','326')";if (!mysqli_query($link,$it)){die('Error'.mysqli_error($link));}$itmax="SELECT max(Item_ID) FROM Item";$stmt2= $db->prepare($itmax);$result2=$stmt2->execute();$row2=$stmt2->fetch();$itid=$row2['max(Item_ID)'];$fooditem="INSERT INTO F_item (`O_id`,`Item_ID`) VALUES ('$id','$itid')";if (!mysqli_query($link,$fooditem)){die('Error'.mysqli_error($link));}}
				if($cof1q>0){$it="INSERT INTO Item(`Item_ID`,`Item_qty`,`F_id`) VALUES (NULL,'$cof1q','200')";if (!mysqli_query($link,$it)){die('Error'.mysqli_error($link));}$itmax="SELECT max(Item_ID) FROM Item";$stmt2= $db->prepare($itmax);$result2=$stmt2->execute();$row2=$stmt2->fetch();$itid=$row2['max(Item_ID)'];$fooditem="INSERT INTO F_item (`O_id`,`Item_ID`) VALUES ('$id','$itid')";if (!mysqli_query($link,$fooditem)){die('Error'.mysqli_error($link));}}
				if($cof2q>0){$it="INSERT INTO Item(`Item_ID`,`Item_qty`,`F_id`) VALUES (NULL,'$cof2q','201')";if (!mysqli_query($link,$it)){die('Error'.mysqli_error($link));}$itmax="SELECT max(Item_ID) FROM Item";$stmt2= $db->prepare($itmax);$result2=$stmt2->execute();$row2=$stmt2->fetch();$itid=$row2['max(Item_ID)'];$fooditem="INSERT INTO F_item (`O_id`,`Item_ID`) VALUES ('$id','$itid')";if (!mysqli_query($link,$fooditem)){die('Error'.mysqli_error($link));}}
				if($cof3q>0){$it="INSERT INTO Item(`Item_ID`,`Item_qty`,`F_id`) VALUES (NULL,'$cof3q','215')";if (!mysqli_query($link,$it)){die('Error'.mysqli_error($link));}$itmax="SELECT max(Item_ID) FROM Item";$stmt2= $db->prepare($itmax);$result2=$stmt2->execute();$row2=$stmt2->fetch();$itid=$row2['max(Item_ID)'];$fooditem="INSERT INTO F_item (`O_id`,`Item_ID`) VALUES ('$id','$itid')";if (!mysqli_query($link,$fooditem)){die('Error'.mysqli_error($link));}}
				#if($md1>0){$it="INSERT INTO Item(`Item_ID`,`Item_qty`,`F_id`) VALUES (NULL,'$md1','200')";if (!mysqli_query($link,$it)){die('Error'.mysqli_error($link));}$itmax="SELECT max(Item_ID) FROM Item";$stmt2= $db->prepare($itmax);$result2=$stmt2->execute();$row2=$stmt2->fetch();$itid=$row2['max(Item_ID)'];$fooditem="INSERT INTO F_item (`O_id`,`Item_ID`) VALUES ('$id','$itid')";if (!mysqli_query($link,$fooditem)){die('Error'.mysqli_error($link));}}
				#if($md2>0){$it="INSERT INTO Item(`Item_ID`,`Item_qty`,`F_id`) VALUES (NULL,'$md2','200')";if (!mysqli_query($link,$it)){die('Error'.mysqli_error($link));}$itmax="SELECT max(Item_ID) FROM Item";$stmt2= $db->prepare($itmax);$result2=$stmt2->execute();$row2=$stmt2->fetch();$itid=$row2['max(Item_ID)'];$fooditem="INSERT INTO F_item (`O_id`,`Item_ID`) VALUES ('$id','$itid')";if (!mysqli_query($link,$fooditem)){die('Error'.mysqli_error($link));}}

			#if (!mysqli_query($link,$it)){die('Error'.mysqli_error($link));}
			// $itmax="SELECT max(Item_ID) FROM Item";
			// $stmt2= $db->prepare($itmax);
			// $result2=$stmt2->execute();
			// $row2=$stmt2->fetch();
			// $itid=$row2['max(Item_ID)'];
			// echo($id);
			echo($itid);
			#$fooditem="INSERT INTO F_item (`O_id`,`Item_ID`) VALUES ('$id','$itid')";if (!mysqli_query($link,$fooditem)){die('Error'.mysqli_error($link));}
			

?> 