<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
</head>
<body>
    <h2>Login Form</h2>
    <form action="login.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <label for="role">Role:</label><br>
        <select id="role" name="role">
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
<?php
session_start();
include 'Connection.php';
// Dummy credentials for demonstration purposes
$admin_username = "admin";
$admin_password = "admin123";
$user_username = "user";
$user_password = "user123";

// Get the input data from the form
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

// Check login credentials
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {
    // Get the input data from the form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Check login credentials
    if ($role == 'admin' && $username == $admin_username && $password == $admin_password) {
        $_SESSION['role'] = 'admin';
        echo "<h2>Welcome, Admin!</h2>";
        echo "<p>You have successfully logged in as an Admin.</p>";
    } elseif ($role == 'user' && $username == $user_username && $password == $user_password) {
        $_SESSION['role'] = 'user';
        echo "<h2>Welcome, User!</h2>";
        echo "<p>You have successfully logged in as a User.</p>";
    } else {
        echo "<h2>Login Failed!</h2>";
        echo "<p>Invalid username, password, or role.</p>";
    }
} else {
    echo "<h2>Login Failed!</h2>";
    echo "<p>Form data is missing. Please fill out the form and submit it correctly.</p>";
}
?>

