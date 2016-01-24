<?php

include 'connect.php';

if (isset($_POST['user_name']) && isset($_POST['user_email'])){
  session_start();

  $emailId=$_POST['user_email'];
  $name=$_POST['user_name'];

  $checkdata=" SELECT * FROM Users WHERE email='$emailId' AND username='$name' ";
  //$checkdata=" SELECT * FROM Users WHERE username='$name' ";

  $results = mysqli_query($link,$checkdata) or die ("Query failed");

  $count=mysqli_num_rows($results);

//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
    if($count == 1){
      $row=mysqli_fetch_object($results);
       $_SESSION['email'] = $emailId;
       $_SESSION['id'] = $row->idUsers;
       echo "OK";
    }
    else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
      echo "Invalid Login Credentials";
     }
     $results->close();
     mysqli_close($link);
     exit();
}

if(isset($_POST['user_name']))
{
	$name=$_POST['user_name'];

	$checkdata=" SELECT username FROM Users WHERE username='$name' ";

  $results = mysqli_query($link,$checkdata) or die ("Query failed");

	if(mysqli_num_rows($results)>0)
	{
	echo "Το Username χρησιμοποιείται ήδη!";
	}
	else
	{
	echo "OK";
	}
  $results->close();
  mysqli_close($link);
exit();
}

if(isset($_POST['user_email']))
{
	$emailId=$_POST['user_email'];

	$checkdata=" SELECT email FROM Users WHERE email='$emailId' ";

  $results = mysqli_query($link,$checkdata) or die ("Query failed");

	if(mysqli_num_rows($results)>0)
	{
	echo "Η διεύθυνση Email χρησιμοποιείται ήδη!";
	}
	else
	{
	echo "OK";
	}
  $results->close();
  mysqli_close($link);
exit();
}

 ?>
