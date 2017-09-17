<?php 
session_start();
  include ("StoreThatData.php");
 $username=$_POST['username'];
 $password=$_POST['password'];


 if($username !="" && $password!="")
 {
 	$mysql=mysql_query("SELECT * FROM `Login` WHERE `username` = '$username' AND `password`= '$password'");
  $rows = mysql_num_rows($mysql);
  if($rows==1)
  {
  $_SESSION["logged"] = 1;
  header('Location: admin.php/');
  }
  else
  {
  header('Location: https://www.youtube.com/watch?v=djlot1_Eots/');
  }
 }
 else {
 header('Location: https://www.youtube.com/watch?v=djlot1_Eots/');
 }
?>