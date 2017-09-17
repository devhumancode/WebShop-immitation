<?php 
session_start();
$id=$_POST['id'];
$orderid=$_POST['orderid'];

include ("StoreThatData.php");
$mysql=mysql_query("DELETE FROM `webman_nfq`.`Orders` WHERE `Orders`.`id` = $id");
$mysql2=mysql_query("DELETE FROM `webman_nfq`.`Listings` WHERE `Listings`.`id` = $orderid");
header('Location: admin.php/');
?>