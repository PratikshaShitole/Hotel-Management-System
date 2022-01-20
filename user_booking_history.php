<!DOCTYPE html>
<html>
<head>
	<title>User Signed In</title>
	<link rel="stylesheet" href="user.css">
</head>

<body>
	<?php
		$conn = new mysqli("localhost","root","", "iwp");
		if($conn->connect_error)
		{
			die("Connection failed: ".$conn->connect_error);
		}
		$sql = "SELECT * from temp_session";
		$result=mysqli_query($conn, $sql);
		$row=mysqli_fetch_row($result); ?>
	<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px;">THE <p style="color: #e6b800; display: inline;">DELUXE</p> HOTEL</td>
			<td id="td1" style="font-size: 25px; text-align: right;">Hello, <?php echo $row[0]; ?></td>
		</tr>
	</table>
	<ul>
		<li><a href="user_view.php">My Info</a></li>
		<li><a href="bookroom.php">Book A Room</a></li>
		<li><a href="user_room_status.php">Show Booking Status</a></li>
		<li><a href="user_payment.php">Payment</a></li>
		<li><a href="user_booking_history.php" class="active">Booking History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
		<div  class="box">
			<table class="basic_box">
				<tr>
					<td colspan="6"><p style="font-size: 28px; text-align: center; text-decoration: underline;"><b>Booking History</b></p>
				</td>
				<tr>
					<th>Booking ID</th>
					<th>Name</th>
					<th>Room Type</th>
					<th>Check-in Date</th>
					<th>Check-out Date</th>
					<th>Price</th>
				</tr>
				<tr>
				<?php
					$username = $row[0];
					$id = $row[4];
					$sql1 = "SELECT * from booked_hist";
					if ($result=mysqli_query($conn,$sql1))
				  	{
				  		while ($row=mysqli_fetch_row($result))
				    	{
				    		if($row[0]==$username && $row[1]==$id)
				    		{
				    		?>
				    		<td><?php echo $row[14]; ?></td>
				   			<td><?php echo $row[0]; ?></td>
				   			<td><?php echo $row[3]; ?></td>
				   			<td><?php echo $row[4]; ?></td>
				    		<td><?php echo $row[5]; ?></td>
				    		<td><?php echo $row[13]; } ?></td>
				</tr><?php
				    	}
				    	mysqli_free_result($result);
				    }?>
			</table><br><br>
		</div>

			<table class="basic_box">
				<tr>
					<td colspan="1">Enter Booking ID:</td>
					<td colspan="2">
						<form action="user_room_history.php" method="post">
							<input type="number" name="book_id">
					</td>

					<td></td>
					<td style="text-align: center;"><button type="submit">View Details</button></td></form>
				</tr>
			</table>
	</div>
</body>
</html>
