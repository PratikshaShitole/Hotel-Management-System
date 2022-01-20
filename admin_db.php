<html>
<body><?php
	$conn = new mysqli("localhost","root","", "iwp");
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
	$user = $_POST["username"];
	$pwd = base64_encode($_POST["password"]);
	$sql = "SELECT * from admin";
	$flag=0;
	if ($result=mysqli_query($conn,$sql))
  {
  		while ($row=mysqli_fetch_row($result))
    	{
    		if($user==$row[0] && $pwd==$row[1])
    		{
				//$sql = "DELETE from temp_session";
				mysqli_query($conn, $sql);
    			header("Location: admin_view.php");
    			break;
    		}
				else
				{
					$flag=1;
				}

    	}
			mysqli_free_result($result);
	}
	if($flag==1)
	{
		echo" <h2> INVALID USER </h2>";
	}


?>
</body>
</html>
