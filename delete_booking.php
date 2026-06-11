<?php

include 'config.php';

$id = (int)$_GET['id'];

$sql = "DELETE FROM bookings WHERE id = $id";

if(mysqli_query($conn,$sql))
{
    header("Location: admin.php");
}
else
{
    echo "Delete Failed";
}

?>