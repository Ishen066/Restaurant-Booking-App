<!DOCTYPE html>
<html>
<head>
<title>Food Menu</title>

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

.menu-container{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:20px;
    padding:30px;
}

.card{
    background:white;
    border-radius:15px;
    overflow:hidden;
    box-shadow:0 5px 15px rgba(0,0,0,0.2);
}

.card img{
    width:100%;
    height:200px;
    object-fit:cover;
}

.card-content{
    padding:15px;
}

.price{
    color:#28a745;
    font-weight:bold;
    font-size:20px;
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
    <h1>🍽 Our Menu</h1>
    <p>Explore our delicious dishes</p>
</div>

<div class="menu-container">

    <div class="card">
        <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38">
        <div class="card-content">
            <h3>Pizza</h3>
            <p>Cheesy and delicious pizza.</p>
            <div class="price">Rs. 2500</div>
        </div>
    </div>

    <div class="card">
        <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd">
        <div class="card-content">
            <h3>Burger</h3>
            <p>Juicy beef burger with fries.</p>
            <div class="price">Rs. 1800</div>
        </div>
    </div>

    <div class="card">
        <img src="https://images.unsplash.com/photo-1512058564366-18510be2db19">
        <div class="card-content">
            <h3>Fried Rice</h3>
            <p>Special chicken fried rice.</p>
            <div class="price">Rs. 2200</div>
        </div>
    </div>

    <div class="card">
        <img src="https://images.unsplash.com/photo-1544025162-d76694265947">
        <div class="card-content">
            <h3>Grilled Chicken</h3>
            <p>Served with vegetables.</p>
            <div class="price">Rs. 3000</div>
        </div>
    </div>

</div>

<a href="index.php" class="back-btn">
🏠 Back to Home
</a>

</body>
</html>