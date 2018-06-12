<?php
$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "contact";
$prefix = "";
// $bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
// mysqli_select_db($mysql_database, $bd) or die("Opps some thing went wrong");

$conn = new mysqli($db_server,$db_user,$db_password,$db_name);

	if($conn->connect_error){
		die ($conn->connect_error);
	}

?>