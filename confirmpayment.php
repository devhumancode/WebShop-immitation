<!DOCTYPE html>
<?php 
  $id = $_POST['id'];
  $selected = $_POST['selected'];
	session_start();
  include ('StoreThatData.php');
	$mysql=mysql_query("SELECT * FROM `Listings` WHERE id = $id");
?>
<html lang="ltu">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="preload"  style="overflow-y:scroll;">
      <a href="main.html">
        <div class="logo">
  				<img src="images/logo1.png" style="margin:auto;">
  			</div>
      </a>
      <a href="login.php">
         <div class="new_listing">
           <h2><b>Administratoriui</b></h2>
         </div>
      </a>
      <br>
          <form method="post" action="listing.php">
            <input type="image" src="images/back.png" style="width:6%; margin-left:47%;">
            <input type="sumbit" hidden>
            <input type="text" name="selected" value="<?php echo $selected?>" hidden>
          </form>
      <br>
   <?php 
   while($row=mysql_fetch_array($mysql))
  	{
  	  $pavadinimas=$row['name'];
      $busena=$row['availability'];
      $ram=$row['ram'];
      $hdd=$row['hdd'];
      $gpu=$row['gpu'];
      $cpu=$row['cpu'];
      $size=$row['size'];
      $comments=$row['comments'];
      $price=$row['price'];
      $discount=$row['discount'];
      $foto=$row['foto'];
  	}
?> 
    <div class="listings_holder;">
			<div class="listing_body">
       <div class="listing">
					<div class="listing_picture">
					<div class="listing_price">
							<h1 style="padding:7px; padding-left:15px;"><?php echo "$price";?> € <br>
						</h1>
						</div>
						<img src="listings/<?php echo $foto; ?>" style="width:100%;">
						
					</div>
					<div class="listing_info">
						<b><h2 style="font-size:20px;"><?php echo $pavadinimas; ?></h2></b>
						<p><b>Būsena :</b> <?php if($busena == 0){ echo "prekę turime"; }else{echo "prekės nebeturime";}?>
						<p><b>RAM :</b> <?php echo $ram;?>
						<p><b>HDD :</b> <?php echo $hdd;?>
						<p><b>GPU :</b> <?php echo $gpu;?>
						<p><b>CPU :</b> <?php echo $cpu;?>
            <p><b>Dydis :</b> <?php echo $size;?>
            <p><b>Komentarai :</b><br> <?php echo "$comments <br>";?> <br>
					</div>
					<div class="listing_buttons">
						<h1 style="margin-top:0px;"><font size="3"><b>
            <input type="submit" class="listing_button" style="width:100%;" value="Užpildykite informaciją →">          
					</div>
				</div>
       </div>
       
       <div class="form_body">
       <form method="POST" action="order.php">
          <div class="form_top">
            <h2>Įveskite duomenis, reikiamus patvirtinti užsakymui </h2>
          </div>
          <div class="form_text">
          <br><br>
            <div class="form_left">Vardas </div> <div class="form_right"><input type="text" name="name" required></div>
            <div class="form_left">Pavardė </div> <div class="form_right"><input type="text" name="sirname" required></div>
            <div class="form_left">Telefono numeris </div> <div class="form_right"><input type="number" name="number" required></div>
            <div class="form_left">Elektroninis paštas </div> <div class="form_right"><input type="email" name="email" required></div>
            <div class="form_left">Adresas </div> <div class="form_right"><input type="text" name="adress" required></div>
            <input type="text" name="orderid" value="<?php echo $id;?>" hidden>
            
            <div class="vertical-table-contact">
					  <input type="radio" id="radio01" name="paymentmethod" value="Internetinis pavedimas" checked="checked"/>
					  <label for="radio01"><span>
						<br><b><img src="images/onlineshopping.png" style="width:40px; height:40px;"><br><h2> Atsiskaitymas internetu</h2> </b> 
						Priimame visų bankų pervedimus, taip pat paypal ir paysera !
					  </span></label>
					</div>

					<div class="vertical-table-contact">
					 <input type="radio" id="radio02" name="paymentmethod" value="Atsiskaitymas atsiimant"/>
					 <label for="radio02"><span>
						<br><b><img src="images/money.png" style="width:40px; height:40px;"><br><h2> Grynaisiais mūsų būstinėje</h2> </b>
						Sumokėkite atvykę atsiimti prekės adresu : <br>
            už 6 jūrų, už 12 miškų, 24 namas
					</span> 
          </div>
          <br><br>
          <input type="submit" class="listing_button" style="width:100%; margin-top:20px;" value="PATVIRTINTI UŽSAKYMĄ">     
      </form>  
       </div>
      </div> 
      <div class="clear" style="clear:left; opacity:0">
        0
      </div>
      <div class='randomas' style='position:relative; clear: left; opacity:1; margin-top:150px; '> </div>
      <div class="copyrightas">
				Visos teisės saugomos nežinomos organizacijos, kuri pagal įdėją turėtų saugoti puslapį ❤
			</div>    
		</div>
	</body>
</html>