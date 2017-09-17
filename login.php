<!DOCTYPE html>
<?php 
	session_start();
?>
<html lang="ltu">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="preload">
      <a href="index.html">
        <div class="logo">
  				<img src="images/logo1.png" style="margin:auto;">
  			</div>
      </a>
      <br><br>
      
      <div class="login" style="width:40%; background-color:azure; margin:auto; min-height:110px;">
        <form method="POST" action="check_login.php">
          <br>
            <div class="form_left"><B>Vartotojo vardas</b></div> <div class="form_right"><input type="text" name="username" required></div>
            <div class="form_left"><b>Vartotojo slaptažodis</b></div> <div class="form_right"><input type="password" name="password" required></div>
            
            <input type="submit" class="listing_button" style="width:100%; margin-top:10px;" value="PRISIJUNGTI">     
        </form>
      </div>
      
      <div class="clear" style="clear:left; opacity:0">
        0
      </div>
      <div class="copyrightas">
				Visos teisės saugomos nežinomos organizacijos, kuri pagal įdėją turėtų saugoti puslapį ❤
			</div>    
		</div>
	</body>
</html>