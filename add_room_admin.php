<!DOCTYPE html>
<html>
<head>
	<title>Admin Add Rooms</title>
	<link rel="stylesheet" href="admin.css">
</head>

<body>
	<table style="width: 100%;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px;">THE <p style="color: #e6b800; display: inline;">DELUXE</p> HOTEL</td>
		</tr>
	</table>
	<ul>
		<li><a href="admin_view.php" >Rooms Info</a></li>
		<li><a href="add_room_admin.php" class="active" >Add Room</a></li>
		<li><a href="remove_room_admin.php">Remove Rooms</a></li>
		<li><a href="admin_room_status.php">Booking Requests</a></li>
		<li><a href="confirmed_bookings.php">Confirmed Bookings</a></li>
		<li><a href="booking_history.php">Booking History</a></li>
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
			$sql = "SELECT * from rooms_count";
			$result=mysqli_query($conn,$sql); ?>
			<div class="box">
		  	<table class="basic_box">
				<tr>
					<th colspan="4"><p style="font-size: 28px; text-align: center; text-decoration: underline;">Add Rooms</p></th>
				</tr>
				<tr>
					<th>Room Type</th>
					<th>Available Rooms</th>
					<th>Occupied Rooms</th>
					<th>Price</th>
				</tr>
			<?php
			while ($row=mysqli_fetch_row($result))
    		{	?>
				<tr>
					<td><?php echo $row[0]; ?></td>
					<td><?php echo $row[1]; ?></td>
					<td><?php echo $row[2]; ?></td>
					<td><?php echo $row[3];
			} ?></td>
				</tr>
			</table>
		</div>
			<br><br><br>
			<table class="basic_box">
			<form action="admin_room_added.php" method="post">

				<tr>
					<td style="text-align: left;"><b>Select room type:</td>
					<td style="text-align: left;">
						<select name="rooms" required>
							<option value="">Select</option>
							<option value="Single bed">Single bedded</option>
							<option value="Double bed">Double bedded</option>
							<option value="Four bed">Four bedded</option>
						</select>
					</td>
				</tr>
				<tr>
					<td style="text-align: left;">Enter number of rooms to add:</td>
					<td style="text-align: left;"><input type="number" min="0" name="noofrooms" id="rooms" required></td>
				</tr>
				<tr><td></td></tr><tr><td></td></tr>
				<td style="text-align: right;"><button type="submit">Add room</button>

			</form></table>

			<br><br>
		</div>
	</div>
</body>
</html>
