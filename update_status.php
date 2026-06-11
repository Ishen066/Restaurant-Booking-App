<?php

include 'config.php';

$id = $_GET['id'];
$status = $_GET['status'];

$sql = "UPDATE bookings
SET status='$status'
WHERE id=$id";

if(mysqli_query($conn,$sql))
{
    header("Location: admin.php");
}
else
{
    echo "Status Update Failed";
}

?>