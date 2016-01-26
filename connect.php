<?php

$db_hostname = "localhost";		//database server (use localhost or 127.0.0.1 if this is the same machine the web server runs on)
$db_name = "eamuser54";		// database
$db_user = "root";			// database username
$db_pass = "";			// database password
$link=mysqli_connect($db_hostname, $db_user, $db_pass, $db_name) or die ("Unable to connect to database");
mysqli_set_charset($link,"utf8");

?>
