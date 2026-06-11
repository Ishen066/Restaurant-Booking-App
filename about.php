<!DOCTYPE html>
<html>
<head>
    <title>About Us - Foodies Restaurant</title>
    <link rel="stylesheet" href="style.css">

    <style>
   .about-container{
    width:100%;
    min-height:100vh;
    margin:0;
    padding:140px 50px 50px;
    text-align:center;
    box-sizing:border-box;
}

.about-container h1{
    color:#FFD700;
    font-size:55px;
    margin-bottom:25px;
    text-shadow:2px 2px 10px rgba(0,0,0,0.5);
}

.about-container p{
    color:white;
    font-size:20px;
    line-height:1.8;
    max-width:900px;
    margin:20px auto;
    text-shadow:1px 1px 5px rgba(0,0,0,0.5);
}

.about-features{
    display:flex;
    justify-content:center;
    gap:25px;
    flex-wrap:wrap;
    margin-top:50px;
}

.feature-box{
    background:rgba(255,255,255,0.15);
    backdrop-filter:blur(10px);
    color:white;
    padding:25px;
    border-radius:20px;
    width:220px;
    font-size:18px;
    font-weight:bold;
    box-shadow:0 5px 20px rgba(0,0,0,0.2);
    transition:0.3s;
}

.feature-box:hover{
    transform:translateY(-8px);
}
    </style>

</head>
<body>

<nav>
    <div class="logo">🍽 Foodies Restaurant</div>

    <div class="menu">
        <a href="index.php">Home</a>
        <a href="booking.php">Book Table</a>
        <a href="menu.php">Menu</a>
        <a href="reviews.php">Reviews</a>
        <a href="contact.php">Contact</a>
    </div>
</nav>

<div class="about-container">

    <h1>🍽 About Foodies Restaurant</h1>

   <p>
Welcome to Foodies Restaurant, where great food meets unforgettable moments.
We are dedicated to providing exceptional dining experiences through delicious meals,
friendly service, and a warm atmosphere for every guest.
</p>

<p>
Our chefs prepare every dish using fresh ingredients and authentic recipes to ensure
the highest quality and taste. Whether you're celebrating a special occasion or enjoying
a casual meal with family and friends, Foodies Restaurant is the perfect place to create lasting memories.
</p>

    <div class="about-features">

        <div class="feature-box">
            🍽 Fresh Food
        </div>

        <div class="feature-box">
            ⭐ Excellent Service
        </div>

        <div class="feature-box">
            ❤️ Friendly Atmosphere
        </div>

    </div>

</div>

</body>
</html>