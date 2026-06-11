<?php

include 'config.php';

$id = $_GET['id'];

$sql = "SELECT * FROM bookings WHERE id=$id";
$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Booking</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="booking-card">

<h2>📝 Edit Booking</h2>

<form action="update_booking.php" method="POST">

<input type="hidden"
name="id"
value="<?php echo $row['id']; ?>">

<input type="text"
name="name"
value="<?php echo $row['customer_name']; ?>"
required>

<input type="email"
name="email"
value="<?php echo $row['email']; ?>"
required>

<input type="text"
name="phone"
value="<?php echo $row['phone']; ?>"
required>

<input type="date"
name="date"
value="<?php echo $row['booking_date']; ?>"
required>

<input type="time"
name="time"
value="<?php echo $row['booking_time']; ?>"
required>

<input type="number"
name="guests"
value="<?php echo $row['guests']; ?>"
required>

<button type="submit">
💾 Update Booking
</button>

</form>

</div>

</body>
</html>