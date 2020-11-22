<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>HMS-Sign Up Form</title>
      <link rel="stylesheet" href="res/css/style.css">
</head>

<body>
<form action="register_code.php" method="post">
  <h2>Sign Up</h2>
		<p>
			<label for="Email" class="floatLabel">Name</label>
			<input id="Email" name="name" type="text">
		</p>
		<p>
			<label for="Email" class="floatLabel">Email</label>
			<input id="Email" name="email" type="text">
		</p>
		<p>
			<label for="Email" class="floatLabel">Phone Number</label>
			<input id="Email" name="phonenumber" type="text">
		</p>
		<p>
			<label for="password" class="floatLabel">Password</label>
			<input id="password" name="password" type="password">
		</p>
		<p>
			<label for="confirm_password" class="floatLabel">Confirm Password</label>
			<input id="confirm_password" name="confirm_password" type="password">
		</p>
		<p>
			<input type="submit" value="Create My Account" id="submit">
		</p><br>
			<center><h3><span><a href="login.php"> Click Here To LOGIN</a></span></h3></center>
	</form>
    <script  src="res/js/index.js"></script>

</body>
</html>
