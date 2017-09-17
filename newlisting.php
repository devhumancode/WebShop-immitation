<!DOCTYPE php>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
    <style>
      table, th, td {
          border: 2px solid darkturquoise;
          text-align:center;
          position:relative;
      }
      tr:nth-child(even){
        background-color: #333;
        color:azure;
      }
      th {
        background-color: darkturquoise;
      }
    </style>
	</head>
<?php 
	session_start();
  if($_SESSION['logged']==1)
  {
?>
	<body>
		<div class="preload">
      <a href="index.html">
        <div class="logo">
  				<img src="images/logo1.png" style="margin:auto;">
  			</div>
      </a>
      <a href="../newlisting.php">
         <div class="new_listing">
           <h2><b>Nauja prekė</b></h2>
         </div>
      </a>  
      <div class="login" style="width:98%; background-color:azure; margin:auto; min-height:110px; position:relative;">
              <form method="POST" action="photoupload.php" enctype="multipart/form-data">
              <b>
                 <div class="form_left">Kategorija </div> <div class="form_right"><select name="category" style="width:173px; height:21px; border:2px solid darkturquoise;"><option value="0">Kompiuteris</option> <option value="1">Telefonas</option> <option value="2">Konsolė</option> <option value="3">Navigacija </option> </select></div>
                 <div class="form_left">Pavadinimas </div> <div class="form_right"><input type="text" name="name" style="border:2px solid darkturquoise;" required></div>
                 <div class="form_left">RAM </div> <div class="form_right"><input type="text" name="ram" style="border:2px solid darkturquoise;" required></div>
                 <div class="form_left">HDD </div> <div class="form_right"><input type="text" name="hdd" style="border:2px solid darkturquoise;" required></div>
                 <div class="form_left">GPU</div> <div class="form_right"><input type="text" name="gpu" style="border:2px solid darkturquoise;" required></div>
                 <div class="form_left">CPU </div> <div class="form_right"><input type="text" name="cpu" style="border:2px solid darkturquoise;" required></div>
                 <div class="form_left">Dydis </div> <div class="form_right"><input type="text" name="size" style="border:2px solid darkturquoise;" required></div>
                 <div class="form_left">Komentarai </div> <div class="form_right"><input type="text" name="comments" style="border:2px solid darkturquoise;" required></div>
                 <div class="form_left">Kaina </div> <div class="form_right"><input type="number" name="price" style="border:2px solid darkturquoise;" required></div>
                 <div class="form_left">Nuotrauka </div> <div class="form_right">
                 <label for="file-upload" class="custom-file-upload">
                            <i class="fa fa-cloud-upload"></i> Pasirinkite nuotrauką
                        </label>
                        <input id="file-upload" name="fileToUpload" type="file">
                            <div style='clear:left;'>
                            </div>
                      <input type='hidden' name='fotoid' value='<?php echo $fotoid; ?>'>
                      </div>
                      <input type="submit" class="listing_button"  style="width:30%; margin-left:35%; background-color:darkturquoise; color:azure; margin-bottom:30px" value="ĮKELTI"> <br><Br>  
              </b>
              </form>
              <div class='randomas' style='position:relative; clear: left; opacity:1; margin-top:150px; '> </div>
      </div>
      <div class="copyrightas">
				Visos teisės saugomos nežinomos organizacijos, kuri pagal įdėją turėtų saugoti puslapį ❤ 
			</div>
     </div>
     <div class='randomas' style='position:relative; clear: left; opacity:0; margin-top:30px; '>  
     </div>
	</body>
<?php } ?>
</html>