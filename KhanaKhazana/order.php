<?php 
    require("common.php"); 
			if (isset($_POST['Ord'])){
			$sett=$_POST['Ord'];echo($sett);}
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
			if (isset($_POST['des3q'])or isset($_POST['des1q']) or isset($_POST['des2q']) or isset($_POST['cof1q'])or isset($_POST['cof2q'])or isset($_POST['cof3q'])or isset($_POST['md1'])or isset($_POST['md2'])or isset($_POST['md3'])or isset($_POST['md4'])or isset($_POST['md5'])or isset($_POST['md6'])or isset($_POST['md7'])or isset($_POST['md8'])or isset($_POST['sa1'])or isset($_POST['sa2'])or isset($_POST['so1'])or isset($_POST['so2'])){
			 $des3q=$_POST['des3q'];$des2q=$_POST['des2q'];$des1q=$_POST['des1q'];
			 $cof1q=$_POST['cof1q'];$cof2q=$_POST['cof2q'];$cof3q=$_POST['cof3q'];
			 $md1=$_POST['md1'];$md2=$_POST['md2'];$md3=$_POST['md3'];$md4=$_POST['md4'];$md5=$_POST['md5'];$md6=$_POST['md6'];$md7=$_POST['md7'];$md8=$_POST['md8'];
			 $sa1=$_POST['sa1'];$sa2=$_POST['sa2'];$so1=$_POST['so1'];$so2=$_POST['so2'];}
			$stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
	        $row = $stmt->fetch(); 
			$cid=$row['Cust_id'];
			$fo_crt="INSERT INTO Food_order(`O_id`,`Date`,`Quantity`,`Total_amount`,`Cust_id`,`Complete_status`) VALUES (NULL,CURRENT_TIMESTAMP,'0','0','$cid','N')";
			$foid="SELECT max(O_id) FROM Food_order";
			if (!mysqli_query($link,$fo_crt)){die('Error'.mysqli_error($link));}
			$stmt1= $db->prepare($foid);
			$result1=$stmt1->execute();
			$row1=$stmt1->fetch();
			$id=$row1['max(O_id)'];
			$orhan=""INSERT INTO OrderHandledBy(`Emp_id`,`O_id`) VALUES ('100004','$id')";";
			if (!mysqli_query($link,$orhan)){die('Error'.mysqli_error($link));}
				if (isset($des3q)){
				if($des3q>0){$set=328;
					$it="INSERT INTO Item(`Item_ID`,`Item_qty`,`F_id`) VALUES (NULL,'$des3q',328)";if (!mysqli_query($link,$it)){die('Error'.mysqli_error($link));}
					$itmax="SELECT max(Item_ID) FROM Item";$stmt2= $db->prepare($itmax);$result2=$stmt2->execute();$row2=$stmt2->fetch();$itid=$row2['max(Item_ID)'];
					$query2="SELECT Price FROM Food WHERE `F_id`=:foid";$query_params = array( ':foid' => $set); $stmt3=$db->prepare($query2);$result3=$stmt3->execute($query_params);$row3=$stmt3->fetch();$price=$row3['Price'];
					$query3="SELECT Quantity, Total_amount FROM Food_order WHERE O_id=$id";$stmt4=$db->prepare($query3);$result4=$stmt4->execute();$row4=$stmt4->fetch();$tot=$row4['Total_amount'];$tot=$tot+($price*$des3q);$quant=$row4['Quantity']+$des3q;
					$fo_up="UPDATE `Food_order` SET `Quantity`=$quant, `Total_amount`=$tot WHERE `O_id`=$id";if (!mysqli_query($link,$fo_up)){die('Error'.mysqli_error($link));}
					$fooditem="INSERT INTO F_item (`O_id`,`Item_ID`) VALUES ('$id','$itid')";if (!mysqli_query($link,$fooditem)){die('Error'.mysqli_error($link));} 
				}}
				if (isset($des2q)){
				if($des2q>0){$set=323;
					$it="INSERT INTO Item(`Item_ID`,`Item_qty`,`F_id`) VALUES (NULL,'$des2q','$set')";if (!mysqli_query($link,$it)){die('Error'.mysqli_error($link));}
					$itmax="SELECT max(Item_ID) FROM Item";$stmt2= $db->prepare($itmax);$result2=$stmt2->execute();$row2=$stmt2->fetch();$itid=$row2['max(Item_ID)'];			
					$query2="SELECT Price FROM Food WHERE `F_id`=:foid";$query_params = array( ':foid' => $set);$stmt3=$db->prepare($query2);$result3=$stmt3->execute($query_params);$row3=$stmt3->fetch();$price=$row3['Price'];
					$query3="SELECT Quantity, Total_amount FROM Food_order WHERE O_id=$id";$stmt4=$db->prepare($query3);$result4=$stmt4->execute();$row4=$stmt4->fetch();$tot=$row4['Total_amount'];$tot=$tot+($price*$des2q);$quant=$row4['Quantity']+$des2q;
					$fo_up="UPDATE `Food_order` SET `Quantity`=$quant, `Total_amount`=$tot WHERE `O_id`=$id";if (!mysqli_query($link,$fo_up)){die('Error'.mysqli_error($link));}
					$fooditem="INSERT INTO F_item (`O_id`,`Item_ID`) VALUES ('$id','$itid')";if (!mysqli_query($link,$fooditem)){die('Error'.mysqli_error($link));}
				}}
				if (isset($des1q)){	
				if($des1q>0){$set=326;
					$it="INSERT INTO Item(`Item_ID`,`Item_qty`,`F_id`) VALUES (NULL,'$des1q','$set')";if (!mysqli_query($link,$it)){die('Error'.mysqli_error($link));}
					$itmax="SELECT max(Item_ID) FROM Item";$stmt2= $db->prepare($itmax);$result2=$stmt2->execute();$row2=$stmt2->fetch();$itid=$row2['max(Item_ID)'];			
					$query2="SELECT Price FROM Food WHERE `F_id`=:foid";$query_params = array( ':foid' => $set);$stmt3=$db->prepare($query2);$result3=$stmt3->execute($query_params);$row3=$stmt3->fetch();$price=$row3['Price'];
					$query3="SELECT Quantity, Total_amount FROM Food_order WHERE O_id=$id";$stmt4=$db->prepare($query3);$result4=$stmt4->execute();$row4=$stmt4->fetch();$tot=$row4['Total_amount'];$tot=$tot+($price*$des1q);$quant=$row4['Quantity']+$des1q;
					$fo_up="UPDATE `Food_order` SET `Quantity`=$quant, `Total_amount`=$tot WHERE `O_id`=$id";if (!mysqli_query($link,$fo_up)){die('Error'.mysqli_error($link));}
					$fooditem="INSERT INTO F_item (`O_id`,`Item_ID`) VALUES ('$id','$itid')";if (!mysqli_query($link,$fooditem)){die('Error'.mysqli_error($link));}
				}			}	
				if (isset($cof1q)){	
				if($cof1q>0){$set=200;
					$it="INSERT INTO Item(`Item_ID`,`Item_qty`,`F_id`) VALUES (NULL,'$cof1q','$set')";if (!mysqli_query($link,$it)){die('Error'.mysqli_error($link));}
					$itmax="SELECT max(Item_ID) FROM Item";$stmt2= $db->prepare($itmax);$result2=$stmt2->execute();$row2=$stmt2->fetch();$itid=$row2['max(Item_ID)'];			
					$query2="SELECT Price FROM Food WHERE `F_id`=:foid";$query_params = array( ':foid' => $set);$stmt3=$db->prepare($query2);$result3=$stmt3->execute($query_params);$row3=$stmt3->fetch();$price=$row3['Price'];
					$query3="SELECT Quantity, Total_amount FROM Food_order WHERE O_id=$id";$stmt4=$db->prepare($query3);$result4=$stmt4->execute();$row4=$stmt4->fetch();$tot=$row4['Total_amount'];$tot=$tot+($price*$cof1q);$quant=$row4['Quantity']+$cof1q;
					$fo_up="UPDATE `Food_order` SET `Quantity`=$quant, `Total_amount`=$tot WHERE `O_id`=$id";if (!mysqli_query($link,$fo_up)){die('Error'.mysqli_error($link));}
					$fooditem="INSERT INTO F_item (`O_id`,`Item_ID`) VALUES ('$id','$itid')";if (!mysqli_query($link,$fooditem)){die('Error'.mysqli_error($link));}
				}			}	
				if (isset($cof2q)){
				if($cof2q>0){$set=201;
					$it="INSERT INTO Item(`Item_ID`,`Item_qty`,`F_id`) VALUES (NULL,'$cof2q','$set')";if (!mysqli_query($link,$it)){die('Error'.mysqli_error($link));}
					$itmax="SELECT max(Item_ID) FROM Item";$stmt2= $db->prepare($itmax);$result2=$stmt2->execute();$row2=$stmt2->fetch();$itid=$row2['max(Item_ID)'];			
					$query2="SELECT Price FROM Food WHERE `F_id`=:foid";$query_params = array( ':foid' => $set);$stmt3=$db->prepare($query2);$result3=$stmt3->execute($query_params);$row3=$stmt3->fetch();$price=$row3['Price'];
					$query3="SELECT Quantity, Total_amount FROM Food_order WHERE O_id=$id";$stmt4=$db->prepare($query3);$result4=$stmt4->execute();$row4=$stmt4->fetch();$tot=$row4['Total_amount'];$tot=$tot+($price*$cof2q);$quant=$row4['Quantity']+$cof2q;
					$fo_up="UPDATE `Food_order` SET `Quantity`=$quant, `Total_amount`=$tot WHERE `O_id`=$id";if (!mysqli_query($link,$fo_up)){die('Error'.mysqli_error($link));}
					$fooditem="INSERT INTO F_item (`O_id`,`Item_ID`) VALUES ('$id','$itid')";if (!mysqli_query($link,$fooditem)){die('Error'.mysqli_error($link));}
				}}
				if (isset($cof3q)){
				if($cof3q>0){$set=215;
					$it="INSERT INTO Item(`Item_ID`,`Item_qty`,`F_id`) VALUES (NULL,'$cof3q','$set')";if (!mysqli_query($link,$it)){die('Error'.mysqli_error($link));}
					$itmax="SELECT max(Item_ID) FROM Item";$stmt2= $db->prepare($itmax);$result2=$stmt2->execute();$row2=$stmt2->fetch();$itid=$row2['max(Item_ID)'];			
					$query2="SELECT Price FROM Food WHERE `F_id`=:foid";$query_params = array( ':foid' => $set);$stmt3=$db->prepare($query2);$result3=$stmt3->execute($query_params);$row3=$stmt3->fetch();$price=$row3['Price'];
					$query3="SELECT Quantity, Total_amount FROM Food_order WHERE O_id=$id";$stmt4=$db->prepare($query3);$result4=$stmt4->execute();$row4=$stmt4->fetch();$tot=$row4['Total_amount'];$tot=$tot+($price*$cof3q);$quant=$row4['Quantity']+$cof3q;
					$fo_up="UPDATE `Food_order` SET `Quantity`=$quant, `Total_amount`=$tot WHERE `O_id`=$id";if (!mysqli_query($link,$fo_up)){die('Error'.mysqli_error($link));}
					$fooditem="INSERT INTO F_item (`O_id`,`Item_ID`) VALUES ('$id','$itid')";if (!mysqli_query($link,$fooditem)){die('Error'.mysqli_error($link));}
				}}
				if (isset($md1)){
				if($md1>0){$set=314;
					$it="INSERT INTO Item(`Item_ID`,`Item_qty`,`F_id`) VALUES (NULL,'$md1','$set')";if (!mysqli_query($link,$it)){die('Error'.mysqli_error($link));}
					$itmax="SELECT max(Item_ID) FROM Item";$stmt2= $db->prepare($itmax);$result2=$stmt2->execute();$row2=$stmt2->fetch();$itid=$row2['max(Item_ID)'];			
					$query2="SELECT Price FROM Food WHERE `F_id`=:foid";$query_params = array( ':foid' => $set);$stmt3=$db->prepare($query2);$result3=$stmt3->execute($query_params);$row3=$stmt3->fetch();$price=$row3['Price'];
					$query3="SELECT Quantity, Total_amount FROM Food_order WHERE O_id=$id";$stmt4=$db->prepare($query3);$result4=$stmt4->execute();$row4=$stmt4->fetch();$tot=$row4['Total_amount'];$tot=$tot+($price*$md1);$quant=$row4['Quantity']+$md1;
					$fo_up="UPDATE `Food_order` SET `Quantity`=$quant, `Total_amount`=$tot WHERE `O_id`=$id";if (!mysqli_query($link,$fo_up)){die('Error'.mysqli_error($link));}
					$fooditem="INSERT INTO F_item (`O_id`,`Item_ID`) VALUES ('$id','$itid')";if (!mysqli_query($link,$fooditem)){die('Error'.mysqli_error($link));}
				}		}
				if (isset($md2)){
				if($md2>0){$set=313;
					$it="INSERT INTO Item(`Item_ID`,`Item_qty`,`F_id`) VALUES (NULL,'$md2','$set')";if (!mysqli_query($link,$it)){die('Error'.mysqli_error($link));}
					$itmax="SELECT max(Item_ID) FROM Item";$stmt2= $db->prepare($itmax);$result2=$stmt2->execute();$row2=$stmt2->fetch();$itid=$row2['max(Item_ID)'];			
					$query2="SELECT Price FROM Food WHERE `F_id`=:foid";$query_params = array( ':foid' => $set);$stmt3=$db->prepare($query2);$result3=$stmt3->execute($query_params);$row3=$stmt3->fetch();$price=$row3['Price'];
					$query3="SELECT Quantity, Total_amount FROM Food_order WHERE O_id=$id";$stmt4=$db->prepare($query3);$result4=$stmt4->execute();$row4=$stmt4->fetch();$tot=$row4['Total_amount'];$tot=$tot+($price*$md2);$quant=$row4['Quantity']+$md2;
					$fo_up="UPDATE `Food_order` SET `Quantity`=$quant, `Total_amount`=$tot WHERE `O_id`=$id";if (!mysqli_query($link,$fo_up)){die('Error'.mysqli_error($link));}
					$fooditem="INSERT INTO F_item (`O_id`,`Item_ID`) VALUES ('$id','$itid')";if (!mysqli_query($link,$fooditem)){die('Error'.mysqli_error($link));}
				}}
				if (isset($md3)){
				if($md3>0){$set=319;
					$it="INSERT INTO Item(`Item_ID`,`Item_qty`,`F_id`) VALUES (NULL,'$md3','$set')";if (!mysqli_query($link,$it)){die('Error'.mysqli_error($link));}
					$itmax="SELECT max(Item_ID) FROM Item";$stmt2= $db->prepare($itmax);$result2=$stmt2->execute();$row2=$stmt2->fetch();$itid=$row2['max(Item_ID)'];			
					$query2="SELECT Price FROM Food WHERE `F_id`=:foid";$query_params = array( ':foid' => $set);$stmt3=$db->prepare($query2);$result3=$stmt3->execute($query_params);$row3=$stmt3->fetch();$price=$row3['Price'];
					$query3="SELECT Quantity, Total_amount FROM Food_order WHERE O_id=$id";$stmt4=$db->prepare($query3);$result4=$stmt4->execute();$row4=$stmt4->fetch();$tot=$row4['Total_amount'];$tot=$tot+($price*$md3);$quant=$row4['Quantity']+$md3;
					$fo_up="UPDATE `Food_order` SET `Quantity`=$quant, `Total_amount`=$tot WHERE `O_id`=$id";if (!mysqli_query($link,$fo_up)){die('Error'.mysqli_error($link));}
					$fooditem="INSERT INTO F_item (`O_id`,`Item_ID`) VALUES ('$id','$itid')";if (!mysqli_query($link,$fooditem)){die('Error'.mysqli_error($link));}
				}}
				if (isset($md4)){
				if($md4>0){$set=300;
					$it="INSERT INTO Item(`Item_ID`,`Item_qty`,`F_id`) VALUES (NULL,'$md4','$set')";if (!mysqli_query($link,$it)){die('Error'.mysqli_error($link));}
					$itmax="SELECT max(Item_ID) FROM Item";$stmt2= $db->prepare($itmax);$result2=$stmt2->execute();$row2=$stmt2->fetch();$itid=$row2['max(Item_ID)'];			
					$query2="SELECT Price FROM Food WHERE `F_id`=:foid";$query_params = array( ':foid' => $set);$stmt3=$db->prepare($query2);$result3=$stmt3->execute($query_params);$row3=$stmt3->fetch();$price=$row3['Price'];
					$query3="SELECT Quantity, Total_amount FROM Food_order WHERE O_id=$id";$stmt4=$db->prepare($query3);$result4=$stmt4->execute();$row4=$stmt4->fetch();$tot=$row4['Total_amount'];$tot=$tot+($price*$md4);$quant=$row4['Quantity']+$md4;
					$fo_up="UPDATE `Food_order` SET `Quantity`=$quant, `Total_amount`=$tot WHERE `O_id`=$id";if (!mysqli_query($link,$fo_up)){die('Error'.mysqli_error($link));}
					$fooditem="INSERT INTO F_item (`O_id`,`Item_ID`) VALUES ('$id','$itid')";if (!mysqli_query($link,$fooditem)){die('Error'.mysqli_error($link));}
				}}
				if (isset($md5)){
				if($md5>0){$set=304;
					$it="INSERT INTO Item(`Item_ID`,`Item_qty`,`F_id`) VALUES (NULL,'$md5','$set')";if (!mysqli_query($link,$it)){die('Error'.mysqli_error($link));}
					$itmax="SELECT max(Item_ID) FROM Item";$stmt2= $db->prepare($itmax);$result2=$stmt2->execute();$row2=$stmt2->fetch();$itid=$row2['max(Item_ID)'];			
					$query2="SELECT Price FROM Food WHERE `F_id`=:foid";$query_params = array( ':foid' => $set);$stmt3=$db->prepare($query2);$result3=$stmt3->execute($query_params);$row3=$stmt3->fetch();$price=$row3['Price'];
					$query3="SELECT Quantity, Total_amount FROM Food_order WHERE O_id=$id";$stmt4=$db->prepare($query3);$result4=$stmt4->execute();$row4=$stmt4->fetch();$tot=$row4['Total_amount'];$tot=$tot+($price*$md5);$quant=$row4['Quantity']+$md5;
					$fo_up="UPDATE `Food_order` SET `Quantity`=$quant, `Total_amount`=$tot WHERE `O_id`=$id";if (!mysqli_query($link,$fo_up)){die('Error'.mysqli_error($link));}
					$fooditem="INSERT INTO F_item (`O_id`,`Item_ID`) VALUES ('$id','$itid')";if (!mysqli_query($link,$fooditem)){die('Error'.mysqli_error($link));}
				}}
				if (isset($md6)){
				if($md6>0){$set=317;
					$it="INSERT INTO Item(`Item_ID`,`Item_qty`,`F_id`) VALUES (NULL,'$md6','$set')";if (!mysqli_query($link,$it)){die('Error'.mysqli_error($link));}
					$itmax="SELECT max(Item_ID) FROM Item";$stmt2= $db->prepare($itmax);$result2=$stmt2->execute();$row2=$stmt2->fetch();$itid=$row2['max(Item_ID)'];			
					$query2="SELECT Price FROM Food WHERE `F_id`=:foid";$query_params = array( ':foid' => $set);$stmt3=$db->prepare($query2);$result3=$stmt3->execute($query_params);$row3=$stmt3->fetch();$price=$row3['Price'];
					$query3="SELECT Quantity, Total_amount FROM Food_order WHERE O_id=$id";$stmt4=$db->prepare($query3);$result4=$stmt4->execute();$row4=$stmt4->fetch();$tot=$row4['Total_amount'];$tot=$tot+($price*$md6);$quant=$row4['Quantity']+$md6;
					$fo_up="UPDATE `Food_order` SET `Quantity`=$quant, `Total_amount`=$tot WHERE `O_id`=$id";if (!mysqli_query($link,$fo_up)){die('Error'.mysqli_error($link));}
					$fooditem="INSERT INTO F_item (`O_id`,`Item_ID`) VALUES ('$id','$itid')";if (!mysqli_query($link,$fooditem)){die('Error'.mysqli_error($link));}
				}}
				if (isset($md7)){
				if($md7>0){$set=310;
					$it="INSERT INTO Item(`Item_ID`,`Item_qty`,`F_id`) VALUES (NULL,'$md7','$set')";if (!mysqli_query($link,$it)){die('Error'.mysqli_error($link));}
					$itmax="SELECT max(Item_ID) FROM Item";$stmt2= $db->prepare($itmax);$result2=$stmt2->execute();$row2=$stmt2->fetch();$itid=$row2['max(Item_ID)'];			
					$query2="SELECT Price FROM Food WHERE `F_id`=:foid";$query_params = array( ':foid' => $set);$stmt3=$db->prepare($query2);$result3=$stmt3->execute($query_params);$row3=$stmt3->fetch();$price=$row3['Price'];
					$query3="SELECT Quantity, Total_amount FROM Food_order WHERE O_id=$id";$stmt4=$db->prepare($query3);$result4=$stmt4->execute();$row4=$stmt4->fetch();$tot=$row4['Total_amount'];$tot=$tot+($price*$md7);$quant=$row4['Quantity']+$md7;
					$fo_up="UPDATE `Food_order` SET `Quantity`=$quant, `Total_amount`=$tot WHERE `O_id`=$id";if (!mysqli_query($link,$fo_up)){die('Error'.mysqli_error($link));}
					$fooditem="INSERT INTO F_item (`O_id`,`Item_ID`) VALUES ('$id','$itid')";if (!mysqli_query($link,$fooditem)){die('Error'.mysqli_error($link));}
				}}
				if (isset($md8)){
				if($md8>0){$set=316;
					$it="INSERT INTO Item(`Item_ID`,`Item_qty`,`F_id`) VALUES (NULL,'$md8','$set')";if (!mysqli_query($link,$it)){die('Error'.mysqli_error($link));}
					$itmax="SELECT max(Item_ID) FROM Item";$stmt2= $db->prepare($itmax);$result2=$stmt2->execute();$row2=$stmt2->fetch();$itid=$row2['max(Item_ID)'];			
					$query2="SELECT Price FROM Food WHERE `F_id`=:foid";$query_params = array( ':foid' => $set);$stmt3=$db->prepare($query2);$result3=$stmt3->execute($query_params);$row3=$stmt3->fetch();$price=$row3['Price'];
					$query3="SELECT Quantity, Total_amount FROM Food_order WHERE O_id=$id";$stmt4=$db->prepare($query3);$result4=$stmt4->execute();$row4=$stmt4->fetch();$tot=$row4['Total_amount'];$tot=$tot+($price*$md8);$quant=$row4['Quantity']+$md8;
					$fo_up="UPDATE `Food_order` SET `Quantity`=$quant, `Total_amount`=$tot WHERE `O_id`=$id";if (!mysqli_query($link,$fo_up)){die('Error'.mysqli_error($link));}
					$fooditem="INSERT INTO F_item (`O_id`,`Item_ID`) VALUES ('$id','$itid')";if (!mysqli_query($link,$fooditem)){die('Error'.mysqli_error($link));}
				}}
				if (isset($sa1)){
				if($sa1>0){$set=115;
					$it="INSERT INTO Item(`Item_ID`,`Item_qty`,`F_id`) VALUES (NULL,'$sa1','$set')";if (!mysqli_query($link,$it)){die('Error'.mysqli_error($link));}
					$itmax="SELECT max(Item_ID) FROM Item";$stmt2= $db->prepare($itmax);$result2=$stmt2->execute();$row2=$stmt2->fetch();$itid=$row2['max(Item_ID)'];			
					$query2="SELECT Price FROM Food WHERE `F_id`=:foid";$query_params = array( ':foid' => $set);$stmt3=$db->prepare($query2);$result3=$stmt3->execute($query_params);$row3=$stmt3->fetch();$price=$row3['Price'];
					$query3="SELECT Quantity, Total_amount FROM Food_order WHERE O_id=$id";$stmt4=$db->prepare($query3);$result4=$stmt4->execute();$row4=$stmt4->fetch();$tot=$row4['Total_amount'];$tot=$tot+($price*$sa1);$quant=$row4['Quantity']+$sa1;
					$fo_up="UPDATE `Food_order` SET `Quantity`=$quant, `Total_amount`=$tot WHERE `O_id`=$id";if (!mysqli_query($link,$fo_up)){die('Error'.mysqli_error($link));}
					$fooditem="INSERT INTO F_item (`O_id`,`Item_ID`) VALUES ('$id','$itid')";if (!mysqli_query($link,$fooditem)){die('Error'.mysqli_error($link));}
				}}
				if (isset($sa2)){
				if($sa2>0){$set=116;
					$it="INSERT INTO Item(`Item_ID`,`Item_qty`,`F_id`) VALUES (NULL,'$sa2','$set')";if (!mysqli_query($link,$it)){die('Error'.mysqli_error($link));}
					$itmax="SELECT max(Item_ID) FROM Item";$stmt2= $db->prepare($itmax);$result2=$stmt2->execute();$row2=$stmt2->fetch();$itid=$row2['max(Item_ID)'];			
					$query2="SELECT Price FROM Food WHERE `F_id`=:foid";$query_params = array( ':foid' => $set);$stmt3=$db->prepare($query2);$result3=$stmt3->execute($query_params);$row3=$stmt3->fetch();$price=$row3['Price'];
					$query3="SELECT Quantity, Total_amount FROM Food_order WHERE O_id=$id";$stmt4=$db->prepare($query3);$result4=$stmt4->execute();$row4=$stmt4->fetch();$tot=$row4['Total_amount'];$tot=$tot+($price*$sa2);$quant=$row4['Quantity']+$sa2;
					$fo_up="UPDATE `Food_order` SET `Quantity`=$quant, `Total_amount`=$tot WHERE `O_id`=$id";if (!mysqli_query($link,$fo_up)){die('Error'.mysqli_error($link));}
					$fooditem="INSERT INTO F_item (`O_id`,`Item_ID`) VALUES ('$id','$itid')";if (!mysqli_query($link,$fooditem)){die('Error'.mysqli_error($link));}
				}}
				if (isset($so1)){
				if($so1>0){$set=101;
					$it="INSERT INTO Item(`Item_ID`,`Item_qty`,`F_id`) VALUES (NULL,'$so1','$set')";if (!mysqli_query($link,$it)){die('Error'.mysqli_error($link));}
					$itmax="SELECT max(Item_ID) FROM Item";$stmt2= $db->prepare($itmax);$result2=$stmt2->execute();$row2=$stmt2->fetch();$itid=$row2['max(Item_ID)'];			
					$query2="SELECT Price FROM Food WHERE `F_id`=:foid";$query_params = array( ':foid' => $set);$stmt3=$db->prepare($query2);$result3=$stmt3->execute($query_params);$row3=$stmt3->fetch();$price=$row3['Price'];
					$query3="SELECT Quantity, Total_amount FROM Food_order WHERE O_id=$id";$stmt4=$db->prepare($query3);$result4=$stmt4->execute();$row4=$stmt4->fetch();$tot=$row4['Total_amount'];$tot=$tot+($price*$so1);$quant=$row4['Quantity']+$so1;
					$fo_up="UPDATE `Food_order` SET `Quantity`=$quant, `Total_amount`=$tot WHERE `O_id`=$id";if (!mysqli_query($link,$fo_up)){die('Error'.mysqli_error($link));}
					$fooditem="INSERT INTO F_item (`O_id`,`Item_ID`) VALUES ('$id','$itid')";if (!mysqli_query($link,$fooditem)){die('Error'.mysqli_error($link));}
				}}
				if (isset($so2)){
				if($so2>0){$set=102;
				$it="INSERT INTO Item(`Item_ID`,`Item_qty`,`F_id`) VALUES (NULL,'$so2','$set')";if (!mysqli_query($link,$it)){die('Error'.mysqli_error($link));}
				$itmax="SELECT max(Item_ID) FROM Item";$stmt2= $db->prepare($itmax);$result2=$stmt2->execute();$row2=$stmt2->fetch();$itid=$row2['max(Item_ID)'];			
					$query2="SELECT Price FROM Food WHERE `F_id`=:foid";$query_params = array( ':foid' => $set);$stmt3=$db->prepare($query2);$result3=$stmt3->execute($query_params);$row3=$stmt3->fetch();$price=$row3['Price'];
					$query3="SELECT Quantity, Total_amount FROM Food_order WHERE O_id=$id";$stmt4=$db->prepare($query3);$result4=$stmt4->execute();$row4=$stmt4->fetch();$tot=$row4['Total_amount'];$tot=$tot+($price*$so2);$quant=$row4['Quantity']+$so2;
					$fo_up="UPDATE `Food_order` SET `Quantity`=$quant, `Total_amount`=$tot WHERE `O_id`=$id";if (!mysqli_query($link,$fo_up)){die('Error'.mysqli_error($link));}
					$fooditem="INSERT INTO F_item (`O_id`,`Item_ID`) VALUES ('$id','$itid')";if (!mysqli_query($link,$fooditem)){die('Error'.mysqli_error($link));}
				}}
					if($sett=='Order'){
					$url="bill.php?username=".$u;
				header("Location: ".$url);} 
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
									</p><input type="number" name="so1" value="0"/>
								</div>
							</div>
							<div class="col-md-5 mx-auto soup-2 wow animated fadeInUp" style="animation-delay: 0.3s;">
								<div class="soup-text">
									<h4>$ 15.00</h4>
									<h3>Mushroom Soup</h3>
									<p>
										Mushrooms, olive oil, garlic, onion, sea salt, black pepper, persley, cheese
									</p><input type="number" name="so2" value="0"/>
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
									</p><input type="number" name="sa1" value="0"/>
								</div>
							</div>
							<div class="col-md-5 mx-auto salad-2 wow animated fadeInUp" style="animation-delay: 0.9s;">
								<div class="salad-text">
									<h4>$ 12.70</h4>
									<h3>Waldorf Salad</h3>
									<p>
										Grapes, lemon, olive oil, sea salt, black pepper, walnuts, yoghurt, celery	
									</p><input type="number" name="sa2" value="0"/>
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
							<h4>$ 18.50</h4>
							<h3>Mutton Biryani	</h3>
							<p>Long-grained rice (like basmati) flavored with exotic spices, such as saffron, is layered with lamb and a thick gravy	</p><input type="number" name="md2" value="0"/>
						</div>
					</div>
					<div class="col-md-4 mx-auto box-3 wow animated fadeInUp" style="animation-delay: 0.6s;">
						<div class="box-3-text">
							<h4>$ 12.25</h4>
							<h3>Rogani Pomfret</h3>
							<p>Pomfret Fish Covered and Fried with Indian Marinated Herbs 	</p><input type="number" name="md3" value="0"/>
						</div>
					</div>
					<div class="col-md-4 mx-auto box-4 wow animated fadeInUp">
						<div class="box-4-text">
							<h4>$ 14.50</h4>
							<h3>Paneer Bhurji	</h3>
							<p>crumbled paneer simmered in spicy tomato gravy		</p><input type="number" name="md4" value="0"/>
						</div>
					</div>
					<div class="col-md-4 mx-auto box-5 wow animated fadeInUp" style="animation-delay: 0.3s;">
						<div class="box-5-text">
							<h4>$ 14.50</h4>
							<h3>Murg Handi</h3>
							<p>Chicken cooked in handi with whole garam masala</p><input type="number" name="md5" value="0"/>
						</div>
					</div>
					<div class="col-md-4 mx-auto box-6 wow animated fadeInUp" style="animation-delay: 0.6s;">
						<div class="box-6-text">
							<h4>$ 9.50</h4>
							<h3>Puri Sabzi</h3>
							<p>Deep-fried Rounds of flour and aloo (potato) bhaji, a spiced potato dish which may be dry or curried	</p>    <input type="number" name="md6" value="0"/>
						</div>
					</div>
					<div class="col-md-4 mx-auto box-7 wow animated fadeInUp" style="animation-delay: 0.6s;">
						<div class="box-7-text">
							<h4>$ 4.25</h4>
							<h3>Tandoori Roti</h3>
							<p>Tandoori Roti is made of both wheat flour and maida or just wheat flour</p>    <input type="number" name="md7" value="0"/>
						</div>
					</div>
					<div class="col-md-4 mx-auto box-8 wow animated fadeInUp" style="animation-delay: 0.6s;">
						<div class="box-8-text">
							<h4>$ 9.50</h4>
							<h3>Jeera Rice</h3>
							<p>Rice saute in fried cumin.</p>    <input type="number" name="md8" value="0"
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
						<div class="dessert-3-text">
							<h4>$ 13.50</h4>
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
			<input type="submit" name="Ord" value="Order">
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
