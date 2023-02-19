<?php
	session_start();
	if( !isset($_SESSION["loggedUser"])){
		header('Location: login.php');
	}
?>

<html>
<head>
	<title>User Profile</title>
	<meta charset="UTF-8" />
	<style>
		label {
				font-weight: bold;
		}
	</style>
</head>

<body>

<?php
	include "config.php";
	$email = $_SESSION["loggedUser"];
	$viewUser = "SELECT * FROM users WHERE email = '$email'";
	$result = mysqli_query($con,$viewUser);
	if(!$result){
		echo "Error:".mysqli_error($con);
	}
	$row = mysqli_fetch_array($result);
	$firstName = $row["firstName"];
	$lastName = $row["lastName"];
	$age = $row["age"];
	$mobile = $row["mobile"];
?>

<h1>User Profile</h1>

<label>First Name:</label>
<p><?php echo $firstName?></p>
<label>Last Name:</label>
<p><?php echo $lastName?></p>
<label>Email:</label>
<p><?php echo $email?></p>
<label>Age:</label>
<p><?php echo $age?></p>
<label>Mobile:</label>
<p><?php echo $mobile?></p>

<a href="logout.php">Click here to logout</a>

</body>

</html>