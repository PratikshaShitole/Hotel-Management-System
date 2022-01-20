<html>
<head>
	<title> USER LOGIN</title>

</head>

</html>
<style>
	body{
		margin: 0;
		padding: 0;
		font-family: sans-serif;
		background-color: #bdc3c7;
	}

	.box{
		width: 500px;
		height: 500;
		padding: 40px;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
		background-image: linear-gradient(to left, #0F2027, #203A43,#2C5364);
		box-shadow: 5px 10px 8px #888888;

	}
	.box h1{
			color: white;
			text-transform: uppercase;
			font-weight: 500;
			text-align: center;
	}
	.box input[type ="text"],.box input[type = "password"]{
		border: 0;
		background: transparent;
		display: block;
		margin: 20px auto;
		text-align: center;
		border: 2px solid #3498db;
		padding: 14px 10px;
		width: 400px;
		outline: none;
		color: white;
		border-radius: 24px;
		transition: 0.25s;
	}

	.box input[type ="text"]:focus, .box input[type = "password"]:focus{
		width :100%;
		border-color: #2ecc71;
	}

	.box input[type = "email"]{
		border: 0;
		background: transparent;
		display: block;
		margin: 20px auto;
		text-align: center;
		border: 2px solid #3498db;
		padding: 14px 10px;
		width: 400px;
		outline: none;
		color: white;
		border-radius: 24px;
		transition: 0.25s;
	}

	.box input[type ="email"]:focus{
		width :100%;
		border-color: #2ecc71;
	}
	.box input[type = "number"]{
		border: 0;
		background: transparent;
		display: block;
		margin: 20px auto;
		text-align: center;
		border: 2px solid #3498db;
		padding: 14px 10px;
		width: 400px;
		outline: none;
		color: white;
		border-radius: 24px;
		transition: 0.25s;
	}
	.box input[type = "number"]:focus{
		width :100%;
		border-color: #2ecc71;
	}

	.box input[type ="submit"]{
		border: 0;
		background: none;
		display: block;
		margin: 20px auto;
		text-align: center;
		border: 2px solid #2ecc71;
		padding: 14px 40px;
		outline: none;
		color: white;
		border-radius: 24px;
		transition: 0.25s;
		cursor: pointer;
	}

	.box input[type ="submit"]:focus{
		background: #2ecc71;
	}
	a{
		margin:0;
		padding: 0;
		color: #3498db;;
		text-align: left;
	}
	.previous {
  background: #2C5364;
	margin: auto;
	padding: 8px 16px;
  color: white;
	margin-left: auto;
	}

	.previous :focus{
		background: #ffffff;
	}


</style>

<body>
	<a href="index.php" class="previous">&#8249;</a>
	<form class="box" action="user_signed_up.php" method="post">
		<h1> USER SIGN UP </h1>

  	<input type="text" id="username" name="username" placeholder="Username" autocomplete="off" required>


  	<input type="password" id="password" name="password" placeholder="Password" required>


		<input type="text" name= "phone" placeholder="Phone Number" maxlength="10"  autocomplete="off" required>

  	<input type="email" id="mail" name="email" placeholder="Email adress" pattern=".+@gmail.com" autocomplete="off" required>

  	<input type="text" id="id" name="idproof" placeholder="Adhaar Id " maxlength="12" autocomplete="off" required>

		<input class="button" type="submit" name= "" placeholder="Sign up">




	</form>
</body>
</html>
