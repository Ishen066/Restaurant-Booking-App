<?php

include 'config.php';

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$time=$_POST['time'];
$guests=$_POST['guests'];

$sql="INSERT INTO bookings
(customer_name,email,phone,
booking_date,booking_time,guests)

VALUES

('$name','$email','$phone',
'$date','$time','$guests')";

if(mysqli_query($conn,$sql)){
echo "<h2>Booking Successful!</h2>";
}else{
echo "Error";
}

?>