<?php

include 'config.php';

if(isset($_POST['submit']))
{
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $rating = mysqli_real_escape_string($conn, $_POST['rating']);
    $review = mysqli_real_escape_string($conn, $_POST['review']);

    $sql = "INSERT INTO reviews
    (customer_name, rating, review)
    VALUES
    ('$name', '$rating', '$review')";

    if(mysqli_query($conn, $sql))
    {
        header("Location: reviews.php");
        exit();
    }
    else
    {
        echo "Error: " . mysqli_error($conn);
    }
}

?>