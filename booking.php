<!DOCTYPE html>

<html>
<head>
    <title>Book Table</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="booking-card">


<h2>📅 Book Your Table</h2>

<form action="submit_booking.php" method="POST">

    <input
        type="text"
        name="name"
        placeholder="👤 Enter Your Name"
        required>

    <input
        type="email"
        name="email"
        placeholder="📧 Enter Your Email"
        required>

    <input
        type="text"
        name="phone"
        placeholder="📱 Enter Phone Number"
        required>

    <input
        type="date"
        name="date"
        required>

    <input
        type="time"
        name="time"
        required>

    <input
        type="number"
        name="guests"
        placeholder="👥 Number of Guests"
        min="1"
        required>

    <button type="submit">
        🍽 Book Now
    </button>

</form>

<br>

<a href="index.php">
    <button type="button">
        ⬅ Back to Home
    </button>
</a>


</div>

</body>
</html>
