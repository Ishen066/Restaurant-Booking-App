<?php

include 'config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$time = $_POST['time'];
$guests = $_POST['guests'];
$table_no = $_POST['table_no'];

$sql = "INSERT INTO bookings
(customer_name,email,phone,booking_date,booking_time,guests,table_no)

VALUES

('$name','$email','$phone',
'$date','$time','$guests','$table_no')";

if(mysqli_query($conn,$sql))
{
    $booking_id = mysqli_insert_id($conn);

    header('Location: success.php?id=' . $booking_id);
    exit();
}
else
{
    echo 'Error: ' . mysqli_error($conn);
}

?>
