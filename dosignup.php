<?php

include 'connect.php';

if (isset($_POST['user_username']) && isset($_POST['user_email']) && isset($_POST['user_name']) && isset($_POST['user_surname']) && isset($_POST['user_department']))
{
  session_start();

  $email=$_POST['user_email'];
  $username=$_POST['user_username'];
  $name=$_POST['user_name'];
  $surname=$_POST['user_surname'];
  $department=$_POST['user_department'];


  $checkdata=" INSERT INTO Users (username,surname,email,department,name) VALUES ('$username','$surname','$email','$department','$name')";
  //$checkdata=" SELECT * FROM Users WHERE username='$name' ";

  $results = mysqli_query($link,$checkdata) or die ("Query failed");

//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
    if($results == TRUE){
      $row=mysqli_fetch_object($results);
       $_SESSION['email'] = $email;
       $_SESSION['id'] = $row->idUsers;
       echo "OK";
    }
    else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
      echo "Invalid SignUp Credentials";
     }
     $results->close();
     mysqli_close($link);
     exit();
}
?>
