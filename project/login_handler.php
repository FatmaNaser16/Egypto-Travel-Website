<?php
$email = $_POST["email"];
$password = $_POST["password"];

include "config.php";

$login = "SELECT email,password FROM users WHERE email=?";
$stmt = mysqli_prepare($con,$login);
mysqli_stmt_bind_param($stmt,"s",$email,);
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);

$count = mysqli_stmt_num_rows($stmt);

if($count == 1){ 
   mysqli_stmt_bind_result($stmt,$rowEmail,$rowpassword);
   mysqli_stmt_fetch($stmt);
   if(password_verify($password,$rowpassword)){
   session_start();
	$_SESSION["loggedUser"] = $email;
	header('Location: index.html');
}
}

	echo "Invalid Email and Password";
 
?>