<html>
<head>
	<title>Registration</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="style.css" >
	<script src="script_regValidation.js"></script>
</head>

<body>
<div id="myDiv">
  <h3 align="center">Registration</h3>
  <form onsubmit="return validation()" method="post" name="regForm" action="register_handler.php">
		<label>First Name: *</label>
		<input type="text" name="firstName" placeholder="Your First Name" size="25" />
		<label>Last Name: *</label>
		<input type="text" name="lastName" placeholder="Your Last Name" size="25" />
		<label>Email: *</label>
		<input type="text" name="email" size="25" placeholder="Your Email" />
		<label>Password: *</label>
		<input type="password" name="password" placeholder="Your Password" size="25" />
		<label>Age:</label>
		<input type="text" name="age" size="25" placeholder="Your Age" />
		<label>Mobile:</label>
		<input type="text" name="mobile" size="25" placeholder="Your Mobile" />

		<div align="center">
		<input type="submit" value="Register" />
		<input type="reset" value="Clear" onclick="clear2();" />
		<div>
  </form>
</div>
</body>

</html>