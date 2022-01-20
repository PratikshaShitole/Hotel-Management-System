<html>
<body><?php
	$conn = new mysqli("localhost","root","", "iwp");
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}

	$username = $_POST["username"];
	$password = base64_encode($_POST["password"]);
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	$idproof = $_POST["idproof"];

	$sql = "INSERT INTO user_login(username, password, phone, email, idproof) VALUES('$username', '$password', '$phone' , '$email', '$idproof')";
	if($conn->query($sql)==TRUE)
	{
		header("Location: user_created.php");
	}
	else
	{
		header("Location: user_not_created.php");
	}
?>
</body>
</html>
