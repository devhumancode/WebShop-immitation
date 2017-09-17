<!DOCTYPE php>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../style.css">
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
      <a href="../main.html">
        <div class="logo">
  				<img src="../images/logo1.png" style="margin:auto;">
  			</div>
      </a>
      <a href="../newlisting.php">
         <div class="new_listing">
           <h2><b>Nauja prekė</b></h2>
         </div>
      </a>
      <br><br>
      
      <div class="login" style="width:98%; background-color:azure; margin:auto; min-height:110px; position:relative;">
        <table style="width:100%">
          <tr> <b>
            <th>Užsakymas</th>
            <th>Vardas</th> 
            <th>Pavardė</th>
            <th>Telefonas</th>
            <th>Paštas</th>
            <th>Adresas</th>
            <th>Atsiskaitė</th>
            <th>Data</th> 
            <th>Ištrynti</th> </b>
          </tr>
        <?php 
        include ("StoreThatData.php");
        $mysql=mysql_query("SELECT * FROM `Orders` WHERE 1");
        while($row=mysql_fetch_array($mysql))
      	{
          $id=$row['id'];
      	  $name=$row['name'];
          $sirname=$row['sirname'];
          $email=$row['email'];
          $number=$row['number'];
          $adress=$row['adress'];
          $payment=$row['paymentmethod'];
          $orderid=$row['orderid'];
          $date=$row['date'];
      	$mysql2=mysql_query("SELECT * FROM `Listings` WHERE `id` = $orderid") ;
        while($row2=mysql_fetch_array($mysql2))
      	{
        $item=$row2['name'];
        }
        ?>
          <tr>
            <td><?php echo $item; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $sirname; ?></td>
            <td><?php echo $number; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $adress; ?></td>
            <td><?php echo $payment; ?></td>
            <td><?php echo $date; ?></td>
            <td>
              <form method="POST" action="../confirmlisting.php">
                 <input type="image" src="../images/check.png" style="height:50px; float:left; margin-top:10px; margin-left:10px;">
                 <input type="submit" hidden>
                 <input type="text" name="id" value="<?php echo $id; ?>" hidden>
                 <input type="text" name="orderid" value="<?php echo $orderid; ?>" hidden>
              </form>
              <form method="POST" action="../deletelisting.php">
                 <input type="image" src="../images/cancel.png" style="height:50px; float:right; margin-right:10px;">
                 <input type="submit" hidden>
                 <input type="text" name="id" value="<?php echo $id; ?>" hidden>
                 <input type="text" name="orderid" value="<?php echo $orderid; ?>" hidden>
              </form>
            </td>

          </tr>
          <?php }?>   
        </table>
      </div>
      <div class="copyrightas">
				Visos teisės saugomos nežinomos organizacijos, kuri pagal įdėją turėtų saugoti puslapį ❤ 
			</div>

     <div class='randomas' style='position:relative; clear: left; opacity:0; margin-top:30px; '>  
     </div>
	</body>
<?php }
else {
  header('Location: https://www.youtube.com/watch?v=djlot1_Eots/');
}
?>

</html>