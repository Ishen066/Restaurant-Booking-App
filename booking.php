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

        

<h3>Select Your Table</h3>

<div class="table-layout">

    <label>
        <input type="radio" name="table_no" value="Table 1" required>
        <div class="table-card">🍽 Table 1<br>2 Seats</div>
    </label>

    <label>
        <input type="radio" name="table_no" value="Table 2">
        <div class="table-card">🍽 Table 2<br>4 Seats</div>
    </label>

    <label>
        <input type="radio" name="table_no" value="Table 3">
        <div class="table-card">🍽 Table 3<br>6 Seats</div>
    </label>

    <label>
        <input type="radio" name="table_no" value="Table 4">
        <div class="table-card">🍽 Table 4<br>8 Seats</div>
    </label>

</div>

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
