<?php

include 'config.php';

session_start();

if(!isset($_SESSION['admin']))
{
    header("Location: login.php");
    exit();
}



if(isset($_GET['search']))
{
    $search = $_GET['search'];

    $sql = "SELECT * FROM bookings
            WHERE customer_name LIKE '%$search%'";
}
else
{
    $sql = "SELECT * FROM bookings";
}

$result = mysqli_query($conn, $sql);

$totalBookings = mysqli_num_rows($result);
$today = date('Y-m-d');

$todayQuery = mysqli_query($conn,
"SELECT COUNT(*) as total FROM bookings WHERE booking_date='$today'");
$todayBookings = mysqli_fetch_assoc($todayQuery)['total'];

$guestQuery = mysqli_query($conn,
"SELECT SUM(guests) as total_guests FROM bookings");
$guestData = mysqli_fetch_assoc($guestQuery);

$totalGuests = $guestData['total_guests'] ?? 0;

?>

<!DOCTYPE html>

<html>
<head>
    <title>Admin Dashboard</title>


<link rel="stylesheet" href="style.css">

<style>

 body{
    font-family: Arial, sans-serif;
    margin:0;
    padding:20px;

    background: linear-gradient(
        135deg,
        #1e3c72,
        #2a5298
    );

    min-height:100vh;
}

    h1{
        text-align:center;
        color:white;
    }

    .stats{
        width:300px;
        margin:20px auto;
        background:white;
        padding:20px;
        border-radius:15px;
        text-align:center;
        box-shadow:0 5px 20px rgba(0,0,0,0.2);
    }
    .card,
.stats,
table{
    background:rgba(255,255,255,0.95);
    backdrop-filter:blur(10px);
}

    table{
        width:95%;
        margin:auto;
        background:rgba(255,255,255,0.95);
         backdrop-filter:blur(10px);
        border-collapse:collapse;
        border-radius:20px;
        overflow:hidden;
        box-shadow:0 5px 20px rgba(0,0,0,0.2);
    }

    th{
        background:#667eea;
        color:white;
        padding:18px;
    }

    td{
        padding:12px;
        text-align:center;
        border-bottom:1px solid #eee;
    }

    tr:hover{
        background:#f5f5f5;
    }

    .delete-btn{
        background:#e53e3e;
        color:white;
        padding:8px 12px;
        border-radius:6px;
        text-decoration:none;
    }

    .delete-btn:hover{
        background:#c53030;
    }

    .home-btn{
        display:block;
        width:200px;
        margin:20px auto;
        text-align:center;
        background:white;
        padding:12px;
        border-radius:8px;
        text-decoration:none;
        color:black;
        font-weight:bold;
    }

    .search-box{
    text-align:center;
    width:450px;
    margin:auto;
}

.search-box input{
     width:100%;
    padding:10px;
    border-radius:8px;
    border:none;
}

.search-box button{
    padding:10px 20px;
    margin-left:10px;
    background:#667eea;
    color:white;
    border:none;
    border-radius:8px;
    cursor:pointer;
}

.search-box button:hover{
    background:#5a67d8;
}

.edit-btn{
    background:#28a745;
    color:white;
    padding:8px 12px;
    border-radius:6px;
    text-decoration:none;
}

.edit-btn:hover{
    background:#218838;
}

.dashboard-header{
    text-align:center;
    color:white;
    margin-bottom:30px;
}

.dashboard-header h1{
    margin:0;
    font-size:40px;
}

.dashboard-header p{
    margin-top:10px;
    font-size:18px;
    opacity:0.9;
}

.stats{
    width:250px;
    margin:20px auto;
    background:white;
    padding:20px;
    border-radius:20px;
    text-align:center;
    box-shadow:0 10px 25px rgba(0,0,0,0.2);
}

.stats h3{
    color:#666;
    margin-bottom:10px;
}

.stats h1{
    color:#667eea;
    font-size:45px;
}

.action-buttons{
    display:flex;
    justify-content:center;
    gap:15px;
    margin-bottom:20px;
}

.home-btn{
    display:block;
    width:180px;
    text-align:center;
    background:#667eea;
    color:white;
    padding:12px;
    border-radius:8px;
    text-decoration:none;
    font-weight:bold;
    transition:0.3s;
}

.home-btn:hover{
    background:#5a67d8;
    transform:translateY(-2px);
}

table{
    width:95%;
    margin:auto;
    background:rgba(255,255,255,0.97);
    border-collapse:collapse;
     border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 25px rgba(0,0,0,0.2);
}

th{
    background:#667eea;
    color:white;
    padding:15px;
}

td{
    padding:15px;
    text-align:center;
}

tr:nth-child(even){
    background:#f8f9fa;
}

tr:hover{
    background:#eef2ff;
}

.dashboard-cards{
    display:flex;
    justify-content:center;
    gap:20px;
    flex-wrap:wrap;
    margin-bottom:30px;
}

.card{
    background:white;
    width:280px;
    padding:25px;
    border-radius:20px;
    text-align:center;
    box-shadow:0 10px 25px rgba(0,0,0,0.2);
    transition:0.3s;
}

.card h1{
    font-size:50px;
}

.card:hover{
    transform:translateY(-5px);
}

.card h3{
    color:#666;
    margin-bottom:10px;
}

.card h1{
    color:#667eea;
    font-size:42px;
    margin:0;
}

.search-container{
    display:flex;
    justify-content:center;
    margin-bottom:25px;
}

.pending{
    background:#f6ad55;
    color:white;
    padding:6px 12px;
    border-radius:20px;
}

.confirmed{
    background:#48bb78;
    color:white;
    padding:6px 12px;
    border-radius:20px;
}

.confirm-btn:hover{
    background:#218838;
}


.cancelled{
    background:#f56565;
    color:white;
    padding:6px 12px;
    border-radius:20px;
}

th:last-child,
td:last-child{
    width:180px;
}

.action-cell{
    display:flex;
    justify-content:center;
    gap:8px;
    align-items:center;
}

.action-cell a{
    padding:8px 12px;
    border-radius:8px;
}

.edit-btn,
.delete-btn{
    display:inline-block;
    padding:8px 12px;
    border-radius:8px;
    font-weight:bold;
}

.status-actions{
    display:flex;
    flex-direction:column;
    gap:8px;
    align-items:center;
}

.confirm-btn{
    background:#28a745;
    color:white;
    padding:8px 15px;
    border-radius:8px;
    text-decoration:none;
    font-weight:bold;
}

.cancel-btn{
    background:#dc3545;
    color:white;
    padding:8px 15px;
    border-radius:8px;
    text-decoration:none;
    font-weight:bold;
}

.cancel-btn:hover{
    background:#c82333;
}

</style>


</head>

<body>

<div class="dashboard-header">
    <h1>📊 Reservation Dashboard</h1>
    <p>Manage all restaurant reservations in one place</p>
</div>


<div class="dashboard-cards">

    <div class="card">
        <h3>📅 Today's Bookings</h3>
        <h1><?php echo $todayBookings; ?></h1>
    </div>

    <div class="card">
        <h3>🍽 Total Reservations</h3>
        <h1><?php echo $totalBookings; ?></h1>
    </div>

    <div class="card">
        <h3>👥 Total Guests</h3>
        <h1><?php echo $totalGuests; ?></h1>
    </div>

</div>
<div class="action-buttons">

<a href="logout.php" class="home-btn">
    🚪 Logout
</a>

<a href="index.php" class="home-btn">
    ⬅ Back to Home
</a>

</div>
 <div class="search-container">

<form method="GET" class="search-box">

    <input
    type="text"
    name="search"
    placeholder="🔍 Search by Customer Name"
    value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">

    <button type="submit">
        Search
    </button>

</form>

</div>

<table>
   
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Date</th>
    <th>Time</th>
    <th>Guests</th>
    <th>Status</th>
    <th>Update</th>
    <th>Action</th>
</tr>

<?php

while($row = mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['customer_name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['booking_date']; ?></td>
<td><?php echo $row['booking_time']; ?></td>
<td><?php echo $row['guests']; ?></td>

<!-- Status -->
<td>
<?php
if($row['status'] == 'Confirmed')
{
    echo "<span class='confirmed'>Confirmed</span>";
}
elseif($row['status'] == 'Cancelled')
{
    echo "<span class='cancelled'>Cancelled</span>";
}
else
{
    echo "<span class='pending'>Pending</span>";
}
?>
</td>

<!-- Update Status -->
<td>

<div class="status-actions">

<a href="update_status.php?id=<?php echo $row['id']; ?>&status=Confirmed"
class="confirm-btn">
✅ Confirm
</a>

<a href="update_status.php?id=<?php echo $row['id']; ?>&status=Cancelled"
class="cancel-btn">
❌ Cancel
</a>

</div>

</td>

<!-- Action -->
<td class="action-cell">

<a class="edit-btn"
href="edit_booking.php?id=<?php echo $row['id']; ?>">
📝 Edit
</a>

<a class="delete-btn"
href="delete_booking.php?id=<?php echo $row['id']; ?>"
onclick="return confirm('Are you sure?')">
🗑 Delete
</a>

</td>

</tr>

<?php

}

?>

</table>

</body>
</html>
