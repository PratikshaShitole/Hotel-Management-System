<!DOCTYPE html>
<html>
<head>
	<title>User Room Status</title>
	<link rel="stylesheet" href="user.css">
</head>
<style>


</style>
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
				<?php
			$conn = new mysqli("localhost","root","", "iwp");
			if($conn->connect_error)
			{
				die("Connection failed: ".$conn->connect_error);
			}
			$bid = $_POST["book_id"];
			$sql = "SELECT * FROM booked_hist WHERE book_id='$bid'";
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_row($result);
		?>
			<table class="basic_box">
				<tr>
					<th colspan="2">Booking History</th>
				</tr>
				<tr>
					<td>Booking ID: </td>
					<td><?php echo $row[14]; ?></td>
				</tr>
				<tr>
					<td>Name: </td>
					<td><?php echo $row[0]; ?></td>
				</tr>
				<tr>
					<td>Room Type: </td>
					<td><?php echo $row[3]; ?></td>
				</tr>
				<tr>
					<td>Check In Date: </td>
					<td><?php echo $row[4]; ?></td>
				</tr>
				<tr>
					<td>Check Out Date: </td>
					<td><?php echo $row[5]; ?></td>
				</tr>
				<tr>
					<td>Days of Stay: </td>
					<td><?php echo $row[6]; ?></td>
				</tr>

				<tr>
					<td>AC: </td>
					<td><?php if(strcmp($row[7], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>
				</tr>
				<tr>
					<td>Breakfast: </td>
					<td><?php if(strcmp($row[8], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>
				</tr>
				<tr>
					<td>Lunch: </td>
					<td><?php if(strcmp($row[9], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>
				</tr>
				<tr>
					<td>Snacks: </td>
					<td><?php if(strcmp($row[10], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>
				</tr>
				<tr>
					<td>Dinner: </td>
					<td><?php if(strcmp($row[11], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>
				</tr>
				<tr>
					<td>Swimming: </td>
					<td><?php if(strcmp($row[12], "true")==0)
					{
						echo "YES";
					}
					else
					{
						echo "NO";
					} ?></td>
				</tr>

				<tr>
					<td>Total Bill Amount: </td>
					<td><?php echo $row[13]; ?></td>
				</tr>

				<tr>
					<td colspan="2"><a href="user_booking_history.php">Back</a></td>
				</tr>
			</table>
	</div>
</body>
</html>
