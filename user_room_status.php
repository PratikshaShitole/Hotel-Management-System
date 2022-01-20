<!DOCTYPE html>
<html>
<head>
	<title>User Room Status</title>
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
		<li><a href="user_room_status.php" class="active" >Show Booking Status</a></li>
		<li><a href="user_payment.php">Payment</a></li>
		<li><a href="user_booking_history.php">Booking History</a></li>
		<li><a href="index.php">Logout</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:1000px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 28px;"></p>
		<div class="box">
			<table class="basic_box">
				<tr>
					<td colspan="7"><p style="font-size: 28px; text-align: center; text-decoration: underline;"><b>Room Booking Status</b></p>
				</td>
				<tr>
					<th>Booking ID</th>
					<th>Name</th>
					<th>Room Type</th>
					<th>Check-in Date</th>
					<th>Check-out Date</th>
					<th>Room Status</th>
					<th>Price</th>
				</tr>
				<tr>
				<?php
					$conn = new mysqli("localhost","root","", "iwp");
					if($conn->connect_error)
					{
						die("Connection failed: ".$conn->connect_error);
					}
					$sql = "SELECT * from temp_session";
					$result=mysqli_query($conn,$sql);
					$row=mysqli_fetch_row($result);
					$phone = $row[2];
					$idproof = $row[4];
					$sql1 = "SELECT * from user_room_book";

					if ($result=mysqli_query($conn,$sql1))
				  	{
				  		while ($row=mysqli_fetch_row($result))
				    	{
				    		if($phone==$row[2] && $idproof==$row[1])
				    		{
				    			?>
				    			<td><?php echo $row[15]; ?></td>
				    			<td><?php echo $row[0]; ?></td>
				    			<td><?php echo $row[3]; ?></td>
				    			<td><?php echo $row[4]; ?></td>
				    			<td><?php echo $row[5]; ?></td>
				    			<td><?php echo $row[13]; ?></td>
				    			<td><?php echo $row[14]; ?></td>
				    		</tr><?php
				    		}
				    	}
				  		mysqli_free_result($result);
					}
				?>
			</table></div>
			<br><br>

			<table class="basic_box">
				<tr>
					<td></td>
					<td colspan="1">Enter Booking ID:</td>
					<td colspan="2">
						<form action="user_cancel_room.php" method="post">
							<input type="number" name="book_id">
					</td>
					<td style="text-align: center;"><button type="submit">Cancel Booking</button></td></form>
				</tr>
			</table>
	</div>
</body>
</html>
