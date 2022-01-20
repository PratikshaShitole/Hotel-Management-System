<html>
<body><?php
	$conn = new mysqli("localhost","root","", "iwp");
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
	$username = $_POST["username"];
	$pwd = base64_encode($_POST["password"]);
	$sql = "SELECT * from user_login";
	$flag=0;
	if ($result=mysqli_query($conn,$sql))
  	{
  		while ($row=mysqli_fetch_row($result))
    	{
    		if($username==$row[0] && $pwd==$row[1])
    		{
				$sql = "DELETE from temp_session";
				mysqli_query($conn, $sql);
    			$sql1 = "INSERT INTO temp_session VALUES('$row[0]','$row[1]','$row[2]','$row[3]','$row[4]')";
				mysqli_query($conn, $sql1);
    			header("Location: user_view.php");
    			break;
    		}
			else
			{
				$flag=1;
			}
    	}
  		mysqli_free_result($result);
		if($flag==1)
			echo"<h2>INVALID USER</h2>";
	}
?>
</body>
</html>
