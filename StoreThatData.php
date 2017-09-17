<?php
$user = "webman_nfq";
$host = "localhost";
$password = "Drugs4life";
$database = "webman_nfq";


$connection = mysql_connect($host,$user,$password)
or die ("Negalima prisijungti prie serverio");
$db = mysql_select_db($database,$connection)
or die ("Nera duomenu bazes");

 mysql_set_charset ('utf8');


?>