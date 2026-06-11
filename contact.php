<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>

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

    .container{
        width:90%;
        max-width:1000px;
        margin:30px auto;
        display:grid;
        grid-template-columns:1fr 1fr;
        gap:20px;
    }

    .card{
        background:white;
        padding:25px;
        border-radius:15px;
        box-shadow:0 5px 15px rgba(0,0,0,0.1);
    }

    .card h2{
        margin-top:0;
        color:#1e3c72;
    }

    iframe{
        width:100%;
        height:300px;
        border:none;
        border-radius:10px;
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

    @media(max-width:768px){
        .container{
            grid-template-columns:1fr;
        }
    }

    </style>
</head>
<body>

<div class="header">
    <h1>📞 Contact Us</h1>
    <p>We'd love to hear from you</p>
</div>

<div class="container">

    <div class="card">
        <h2>Restaurant Information</h2>

        <p><strong>📍 Address:</strong> 123 Main Street, Colombo</p>
        <p><strong>📞 Phone:</strong> +94 77 123 4567</p>
        <p><strong>📧 Email:</strong> info@foodiesrestaurant.com</p>
        <p><strong>🕒 Opening Hours:</strong> 10:00 AM - 10:00 PM</p>
    </div>

    <div class="card">
        <h2>📍 Location</h2>

        <iframe
        src="https://maps.google.com/maps?q=Colombo&t=&z=13&ie=UTF8&iwloc=&output=embed">
        </iframe>
    </div>

</div>

<a href="index.php" class="back-btn">
🏠 Back to Home
</a>

</body>
</html>