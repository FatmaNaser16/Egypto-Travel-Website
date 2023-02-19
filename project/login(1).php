<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="style.css" >
	<script src="script_loginValidation.js"></script>
</head>

<body>
<div id="myDiv">
  <h3 align="center">Login</h3>
  <form onsubmit="return validation()" method="post" name="regForm" action="login_handler.php">
		<label>Email: *</label>
		<input type="text" name="email" size="25" placeholder="Your Email" />
		<label>Password: *</label>
		<input type="password" name="password" placeholder="Your Password" size="25" />

		<div align="center">
		<input type="submit" value="Login" />
		<input type="reset" value="Clear" onclick="clear2();" />
		<div>
  </form>
</div>
</body>

</html>