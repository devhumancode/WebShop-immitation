<!DOCTYPE html>
<?php 
  $selected = $_POST['selected'];
	session_start();
  include ('StoreThatData.php');
	$mysql=mysql_query("SELECT * FROM `Listings` WHERE `categorie` = $selected AND `availability` = 0");
?>
<html lang="ltu">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="preload">
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
        <a href="main.html">
            <form method="post" action="main.html">
            <input type="image" src="images/back.png" style="width:6%; margin-left:47%;">
            <input type="sumbit" hidden>

          </form>
        </a>
      <br>
   <?php 
   while($row=mysql_fetch_array($mysql))
  	{
      $id=$row['id'];
  	  $pavadinimas=$row['name'];
      $busena=$row['availability'];
      $ram=$row['ram'];
      $hdd=$row['hdd'];
      $gpu=$row['gpu'];
      $cpu=$row['cpu'];
      $size=$row['size'];
      $comments=$row['comments'];
      $price=$row['price'];
      $lastsold=$row['last sold'];
      $discount=$row['discount'];
      $foto=$row['foto'];
  	
?>  <form method="POST" action="confirmpayment.php">
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
            <input type="submit" class="listing_button"  style="width:100%;" value="PIRKTI">   
            <input type="text" name="id" value="<?php echo $id;?>" hidden>
            <input type="text" name="selected" value="<?php echo $selected;?>" hidden>
            
					</div>
				</div>
       </div>
      </div> 
      </form>
<?php } ?>    
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