<?php
include ('StoreThatData.php');
session_start ();   
$category=$_POST['category'];
$name=$_POST['name'];
$ram=$_POST['ram'];
$hdd=$_POST['hdd'];
$cpu=$_POST['cpu'];
$gpu=$_POST['gpu'];
$size=$_POST['size'];
$comments=$_POST['comments'];
$price=$_POST['price'];
$target_dir = "listings/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


// Tikrina failo dydi.
if ($_FILES["fileToUpload"]["size"] > 5000000000000) {
    echo "Jūsų failas per didelis.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Iškilo nesklandumų.";
    header('location: profilis.php');
// if everything is ok, try to upload file
} 
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $reikiamas = basename( $_FILES['fileToUpload']['name']);
        $foto = basename( $_FILES['fileToUpload']['name']);
        $mysql=mysql_query("INSERT INTO `webman_nfq`.`Listings` (`id`, `categorie`, `foto`, `name`, `availability`, `ram`, `hdd`, `gpu`, `cpu`, `size`, `comments`, `price`, `last sold`, `discount`) VALUES (NULL, '$category', '$foto', '$name', '0', '$ram', '$hdd', '$gpu', '$cpu', '$size', '$comments', '$price', '2016-09-16', '0');"); 
        header('Location: admin.php/');
    } else {
         header('Location: https://www.youtube.com/watch?v=djlot1_Eots/');
    }


?>