<!DOCTYPE html>
<html>
<head>
    <title>Restaurant Gallery</title>

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

    .gallery{
        display:grid;
        grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
        gap:20px;
        padding:30px;
    }

    .gallery img{
        width:100%;
        height:250px;
        object-fit:cover;
        border-radius:15px;
        box-shadow:0 5px 15px rgba(0,0,0,0.2);
        transition:0.3s;
    }

    .gallery img:hover{
        transform:scale(1.05);
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

    </style>

</head>
<body>

<div class="header">
    <h1>🍽 Restaurant Gallery</h1>
    <p>Take a look at our restaurant and delicious dishes</p>
</div>

<div class="gallery">

    <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4">
    <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5">
    <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0">
    <img src="https://images.unsplash.com/photo-1514933651103-005eec06c04b">
    <img src="https://images.unsplash.com/photo-1552566626-52f8b828add9">
    <img src="https://images.unsplash.com/photo-1515669097368-22e68427d265">

</div>

<a href="index.php" class="back-btn">
🏠 Back to Home
</a>

</body>
</html>