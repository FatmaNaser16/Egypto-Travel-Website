<?php
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$password = $_POST["password"];
$passwordHashed = password_hash($password,PASSWORD_DEFAULT);
$age = $_POST["age"];
$mobile = $_POST["mobile"];

include "config.php";

$insertUser = "INSERT INTO users(firstName,lastName,email,password,age,mobile)
values(?,?,?,?,?,?)";
$stmt = mysqli_prepare($con,$insertUser);
mysqli_stmt_bind_param($stmt,"ssssss",$firstName,$lastName,$email,$passwordHashed,$age,$mobile);

$result = mysqli_stmt_execute($stmt);
if($result){
	header("location: login.php");
}
else {
	echo "Error:".mysqli_stmt_error($stmt);
}

?>