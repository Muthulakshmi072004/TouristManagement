<?php
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
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {
    // Get the input data from the form
    $form_username = $_POST['username'];
    $form_password = $_POST['password'];
    $form_role = $_POST['role'];
  include 'concatenet.php'
    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("SELECT * FROM login WHERE user_name = ? AND password = ?");
    $stmt->bind_param("ss", $form_username, $form_password);
    
    // Execute the statement
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a user was found
    if ($result->num_rows > 0) {
        // Start session and store role
        $_SESSION['role'] = $form_role;

        if ($form_role == 'admin') {
            echo "<h2>Welcome, Admin!</h2>";
            echo "<p>You have successfully logged in as an Admin.</p>";
            // Redirect to admin dashboard (uncomment the following line)
            // header("Location: admin_dashboard.php");
        } elseif ($form_role == 'user') {
            echo "<h2>Welcome, User!</h2>";
            echo "<p>You have successfully logged in as a User.</p>";
            // Redirect to user dashboard (uncomment the following line)
            // header("Location:homepage.php");
        }
    } else {
        echo "<h2>Login Failed!</h2>";
        echo "<p>Invalid username, password, or role.</p>";
    }

    // Close the statement
    $stmt->close();
} else {
    echo "<h2>Login Failed!</h2>";
    echo "<p>Form data is missing. Please fill out the form and submit it correctly.</p>";
}

// Close the connection
$conn->close();
?>

