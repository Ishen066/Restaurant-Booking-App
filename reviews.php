<?php

include 'config.php';

$result = mysqli_query(
$conn,
"SELECT * FROM reviews ORDER BY id DESC"
);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Customer Reviews</title>

    <style>

    body{
        font-family:Arial,sans-serif;
        margin:0;
        background:#f4f4f4;
    }

    .header{
        background:#1e3c72;
        color:white;
        text-align:center;
        padding:30px;
    }

    .reviews{
        width:90%;
        max-width:1000px;
        margin:30px auto;
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
        gap:20px;
    }

    .review-card{
        background:white;
        padding:20px;
        border-radius:15px;
        box-shadow:0 5px 15px rgba(0,0,0,0.1);
        transition:0.3s;
    }

    .review-card:hover{
        transform:translateY(-5px);
    }

    .stars{
        font-size:22px;
        margin-bottom:10px;
    }

    .customer{
        font-weight:bold;
        color:#1e3c72;
        margin-top:15px;
    }

    .back-btn{
        display:block;
        width:200px;
        margin:20px auto;
        text-align:center;
        background:#667eea;
        color:white;
        text-decoration:none;
        padding:12px;
        border-radius:8px;
    }

    form{
    width:500px;
    margin:30px auto;
    background:white;
    padding:20px;
    border-radius:15px;
    box-shadow:0 5px 15px rgba(0,0,0,0.2);
}

input,
select,
textarea{
    width:100%;
    padding:12px;
    margin-top:10px;
    border:1px solid #ddd;
    border-radius:8px;
    box-sizing:border-box;
}

button{
    background:#667eea;
    color:white;
    border:none;
    padding:12px 20px;
    border-radius:8px;
    cursor:pointer;
}

button:hover{
    background:#5a67d8;
}

    </style>
</head>
<body>

<div class="header">
    <h1>⭐ Customer Reviews</h1>
    <p>What our customers say about us</p>
</div>
>

<form action="add_review.php" method="POST">

<input
type="text"
name="name"
placeholder="Your Name"
required>

<br><br>

<select name="rating" required>
<option value="">Select Rating</option>
<option value="5">⭐⭐⭐⭐⭐</option>
<option value="4">⭐⭐⭐⭐</option>
<option value="3">⭐⭐⭐</option>
<option value="2">⭐⭐</option>
<option value="1">⭐</option>
</select>

<br><br>

<textarea
name="review"
placeholder="Write your review"
required></textarea>

<br><br>

<button type="submit" name="submit">
⭐ Submit Review
</button>

</form>

<div class="reviews">

<?php

while($row = mysqli_fetch_assoc($result))
{

?>

<div class="review-card">

    <div class="stars">

    <?php

    for($i=1; $i<=$row['rating']; $i++)
    {
        echo "⭐";
    }

    ?>

    </div>

    <p><?php echo $row['review']; ?></p>

    <div class="customer">
        - <?php echo $row['customer_name']; ?>
    </div>

</div>

<?php

}

?>

</div>

<a href="index.php" class="back-btn">
🏠 Back to Home
</a>

</body>
</html>