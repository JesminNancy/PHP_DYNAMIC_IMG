<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "fileupload";

$conn = mysqli_connect($server,$user,$password,$db);

if($conn){
  echo "Connection Successfully";
}else{
  echo "No Connection";
}

// header('location:index.php');

?>