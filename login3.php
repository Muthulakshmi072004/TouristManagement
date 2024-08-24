<?php
// Start the session
session_start();

// Database connection details
$servername = "localhost";
$username = "root";  // Default username for XAMPP
$password = "";      // Default password for XAMPP is empty
$dbname = "projects";  // Name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is set
if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['password'])) {
    // Get the input data from the form
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $user_password = $_POST['password'];

    // Concatenate first name and last name to create a username
    $username = $first_name . " " . $last_name;

    // Optionally, hash the password for security
    $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);

    // Prepare and bind the SQL statement to insert the data into the login table
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $hashed_password);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<h2>Sign Up Successful!</h2>";
        echo "<p>Your account has been created. You can now <a href='login.php'>login</a>.</p>";
    } else {
        echo "<h2>Sign Up Failed!</h2>";
        echo "<p>There was an error creating your account. Please try again.</p>";
    }

    // Close the statement
    $stmt->close();
} else {
    echo "<h2>Sign Up Failed!</h2>";
    echo "<p>Form data is missing. Please fill out the form and submit it correctly.</p>";
}

// Close the connection
$conn->close();
?>
