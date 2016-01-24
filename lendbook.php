<?php

if (isset($_POST['user_id']) && isset($_POST['documents_id'])){

  include 'connect.php';

  $idUser=$_POST['user_id'];
  $idDocuments=$_POST['documents_id'];

  $checkdata=" UPDATE Documents SET isLended=1,useridLended=$idUser,returnDate='2016-01-24 00:00:00' WHERE idDocuments=$idDocuments ";
  //$checkdata=" SELECT * FROM Users WHERE username='$name' ";

  $results = mysqli_query($link,$checkdata) or die ("Query failed");


//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
    if($results == TRUE){
       echo "OK";
    }
    else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
      echo "Invalid";
     }
}
?>
