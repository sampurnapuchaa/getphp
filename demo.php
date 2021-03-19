<?php
$dbemail="email";
$dbpassword="newpassword";
$email=$_GET["email"];
$newpassword=$_GET["newpassword"];
 
 if($dbemail==$email)
 {
	echo "email is present in our database";
 }
 else
 {
	echo "email is not present"; 
	exit();
 }
 if($password==$password)
 {
	 echo"password is present in database";
 }
 else{
	 echo "password is not correct";
 }
?>