<?php

include 'config.php';

$id = $_GET['id'];

$result = mysqli_query($conn,
"SELECT * FROM bookings WHERE id='$id'");

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
<title>Booking Successful</title>

<style>

body{
    font-family:Arial,sans-serif;
    background:linear-gradient(135deg,#1e3c72,#2a5298);
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
    margin:0;
}

.success-box{
    background:white;
    padding:40px;
    border-radius:20px;
    width:500px;
    text-align:center;
    box-shadow:0 10px 30px rgba(0,0,0,0.3);
}

.success-box h1{
    color:#28a745;
}

.details{
    text-align:left;
    margin-top:25px;
    line-height:2;
}

.btn{
    display:inline-block;
    margin-top:20px;
    padding:12px 20px;
    background:#667eea;
    color:white;
    text-decoration:none;
    border-radius:8px;
    margin-right:10px;
}

.btn:hover{
    background:#5a67d8;
}

</style>

</head>

<body>

<div class="success-box">

<h1>✅ Booking Successful!</h1>

<p>
Thank you for choosing Foodies Restaurant.
Your reservation has been received successfully.
</p>

<div class="details">

<b>Booking ID:</b> #<?php echo $row['id']; ?><br>

<b>Customer:</b>
<?php echo $row['customer_name']; ?><br>

<b>Date:</b>
<?php echo $row['booking_date']; ?><br>

<b>Time:</b>
<?php echo $row['booking_time']; ?><br>

<b>Guests:</b>
<?php echo $row['guests']; ?><br>

</div>

<a href="index.php" class="btn">
🏠 Back to Home
</a>

<a href="booking.php" class="btn">
🍽 New Booking
</a>

</div>

</body>
</html>