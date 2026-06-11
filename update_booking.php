<?php

include 'config.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$time = $_POST['time'];
$guests = $_POST['guests'];

$sql = "UPDATE bookings SET
customer_name='$name',
email='$email',
phone='$phone',
booking_date='$date',
booking_time='$time',
guests='$guests'
WHERE id=$id";

if(mysqli_query($conn,$sql))
{
    header("Location: admin.php");
}
else
{
    echo "Update Failed";
}

?>