<html>
<head>
	<title> USER LOGIN</title>
	<link rel="stylesheet" href="login.css">
</head>

</html>

<body>
	<a href="index.php" class="previous">&#8249;</a>
	<form class="box" action="user_logged_in.php" method="post">
		<h1> USER LOGIN </h1>
		<input type="text" name= "username" placeholder="Username" autocomplete="off" required>
		<input type="password" name= "password" placeholder="Password" required>
		<input class="button" type="submit" name= "" placeholder="Login">

		<p>
			<a href="user_signup.php" >Sign up </a>
		</p>

	</form>
</body>
</html>
