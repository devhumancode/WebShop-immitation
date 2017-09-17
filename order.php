<?php 
session_start();
  include ("StoreThatData.php");
 $orderid=$_POST['orderid'];
 $name=$_POST['name'];
 $sirname=$_POST['sirname'];
 $email=$_POST['email'];
 $number=$_POST['number'];
 $adress=$_POST['adress'];
 $paymentmethod=$_POST['paymentmethod'];
 $date=date("Y-m-d");

 if($email !="" && $name!="")
 {
 	$mysql=mysql_query("INSERT INTO `webman_nfq`.`Orders` (`id`, `name`, `sirname`, `email`, `number`, `adress`, `paymentmethod`, `orderid`, `date`) VALUES (NULL, '$name', '$sirname', '$email', '$number', '$adress', '$paymentmethod', '$orderid', '$date');");
  $mysql2=mysql_query("UPDATE `webman_nfq`.`Listings` SET `availability` = '1' WHERE `Listings`.`id` = $orderid;");
 ?>
 
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
	</head>
	<body style="animation: fadeout 1.5s linear 3; animation-delay:1.8s;">
		<div class="preload">
			<div class="logo">
				<img src="images/logo.png" style="margin:auto;"> <br>
        
			</div>
      <div class="logo" style="width:100%;">   <Br>  <br>
          Jūsų užsakymas sėkmingai atliktas !!!
			</div>

			<div class="loader-frame">
				<div class="loader1" id="loarder1"> 
				
				</div>
				<div class="loader2" id="loarder2"> 
				
				</div>
				<div class="loader3" id="loarder3"> 
				
				</div>
				<img src="images/cart.png" style="width:100px; height:100px; top:50px; left:50px; position:absolute;">
			<div>
		</div>
		
		<script src="preloader.js"></script>
	</body>
</html>
<?php 
 }
 else {
 header('Location: https://www.youtube.com/watch?v=djlot1_Eots/');
 }
?>
