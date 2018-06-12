<?php
include("db.php");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$name=$conn->real_escape_string($_POST['name']);
$phone=$conn->real_escape_string($_POST['phone']);
$email=$conn->real_escape_string($_POST['email']);
$password=$conn->real_escape_string($_POST['password']);
$message=$conn->real_escape_string($_POST['message']);
if(strlen($name)>0 && strlen($email)>0 && strlen($message)>0)
{
$time=time();
$conn->query("INSERT INTO contact (name,phone,email,password,message,created_date) VALUES('$name','$phone','$email','$password','$message','$time')");
echo "<h1>Thank You ! <a href='index.php'>REFRESH</a></h1>";
}
}
?>
<!-- 
CREATE TABLE contact(
id INT(10) AUTO_INCREMENT PRIMARY KEY,
    name varchar(20),
    email varchar(20),
    message varchar(255),
    created_date date
) -->