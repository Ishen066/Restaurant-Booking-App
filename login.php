<?php
session_start();

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "admin" && $password == "1234")
    {
        $_SESSION['admin'] = $username;
        header("Location: admin.php");
        exit();
    }
    else
    {
        $error = "Invalid Username or Password";
    }
}
?>

<!DOCTYPE html>

<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="booking-card">

```
<h2>🔐 Admin Login</h2>

<?php
if(isset($error))
{
    echo "<p style='color:red;text-align:center;'>$error</p>";
}
?>

<form method="POST">

    <input
        type="text"
        name="username"
        placeholder="Enter Username"
        required>

    <input
        type="password"
        name="password"
        placeholder="Enter Password"
        required>

    <button type="submit" name="login">
        Login
    </button>

</form>
```

</div>

</body>
</html>
