<?php

include 'connect.php';

//Eggrafh enos xrhsth
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
      //$row=mysqli_fetch_object($results);
       $_SESSION['email'] = $email;
       $tmp="SELECT idUsers FROM Users WHERE username='$username'";
       $res=mysqli_query($link,$tmp) or die ("Query failed");
       if(mysqli_num_rows($res) > 0)
       {
          $row=mysqli_fetch_object($res);
          $_SESSION['id']=$row->idUsers;
       }
       $res->close();
       //$_SESSION['id'] = $row->idUsers;
       echo "OK";
    }
    else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
      echo "Invalid SignUp Credentials";
     }
     mysqli_close($link);
     exit();
}

//Elegxos login
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

//Elegxos name
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

//Elegxos email
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

//Eisagwgh vivliou
if (isset($_POST['book_title']) && isset($_POST['book_type']) && isset($_POST['book_author']) && isset($_POST['book_pubdate']) && isset($_POST['book_library']))
{
  session_start();

  $title=$_POST['book_title'];
  $type=$_POST['book_type'];
  $author=$_POST['book_author'];
  $pubdate=$_POST['book_pubdate'];
  $library=$_POST['book_library'];


  $checkdata=" INSERT INTO Documents (title,type,author,publicationDate,libName,isLended) VALUES ('$title','$type','$author','$pubdate','$library',0)";
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
     mysqli_close($link);
     exit();
}


//Daneismos vivliou
if (isset($_POST['user_id']) && isset($_POST['documents_id'])){

  include 'connect.php';

  $idUser=$_POST['user_id'];
  $idDocuments=$_POST['documents_id'];
  $date = strtotime("+1 months");
  $date=date('Y-m-d', $date);

  $checkdata=" UPDATE Documents SET isLended=1,useridLended=$idUser,returnDate='$date' WHERE idDocuments=$idDocuments ";
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
     mysqli_close($link);
     exit();
}

//Aksiologisi vivliou
if(isset($_POST['book_rating']) && isset($_POST['book_name'])){

  include 'connect.php';

  $rating=$_POST['book_rating'];
  $name=$_POST['book_name'];

  $query="SELECT points,voters FROM Documents WHERE title='$name'";

  $results = mysqli_query($link,$query) or die ("Query failed");

  if(mysqli_num_rows($results) > 0)
  {
    $row = mysqli_fetch_object($results);

    if($row->points != NULL && $row->voters != NULL)
    {
      $points=$row->points;
      $points=$points+$rating;
      $voters=$row->voters;
      $voters=$voters+1;

      $checkdata=" UPDATE Documents SET voters=$voters,points=$points WHERE title='$name'";

      $results1 = mysqli_query($link,$checkdata) or die ("Query failed");

      if($results1 == TRUE){
         echo "OK";
      }
      else{
        echo "Invalid";
      }

      $results->close();
      mysqli_close($link);
      exit();

    }
    else {
      echo 'Error!';
      $results->close();
      mysqli_close($link);
      exit();
    }
  }
  else{
    echo 'Error';
    $results->close();
    mysqli_close($link);
    exit();
  }
}

//Paratash daneismou
if(isset($_POST['book_id'])){

    include 'connect.php';

    $idDocuments=$_POST['book_id'];

    $query="SELECT returnDate FROM Documents WHERE idDocuments=$idDocuments";

    $results = mysqli_query($link,$query) or die ("Query failed");
    $row=mysqli_fetch_object($results);

    $date = strtotime("+1 weeks", strtotime($row->returnDate));
    $date=date('Y-m-d', $date);

    $checkdata=" UPDATE Documents SET returnDate='$date',extension=1 WHERE idDocuments=$idDocuments ";
    //$checkdata=" SELECT * FROM Users WHERE username='$name' ";

  $results->close();

    $results = mysqli_query($link,$checkdata) or die ("Query failed");

      if($results == TRUE){
         echo "OK";
      }
      else{
        echo "Invalid";
       }
       mysqli_close($link);
       exit();
  }


 ?>
