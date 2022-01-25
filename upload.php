<?php

include 'dbconn.php';

if(isset($_POST['submit'])){
      
      $username = $_POST['username']; 
      $email = $_POST['email']; 
      $degree = $_POST['degree']; 
      $lang = $_POST['lang']; 
      $file = $_FILES['photo'];
      
      
      // move_uploaded_file($tmpname, "upload/".$filename);
      
      // print_r($filename);
      
        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];
      
       if($fileerror == 0){
       
          $destfile = "upload/" . $filename;
          move_uploaded_file($filepath, $destfile);
          
          $inserquery = " INSERT INTO registration(username,	email,	degree,	lang,	photo) VALUES ('$username','$email','$degree','$lang','$destfile')";
          
          $query = mysqli_query($conn, $inserquery);
          if($query){
            echo "Inserted";
          }else{
            echo "Not Inserted";
          }
       } 
    
}

?>