<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tourist_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch user details
$sql = "SELECT name, email, phone FROM users WHERE id = 1"; // Assuming user with ID 1
$result = $conn->query($sql);

$user = array();

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $user = $row;
    }
} else {
    echo "0 results";
}
$conn->close();

// Return user data as JSON
echo json_encode($user);
?>
