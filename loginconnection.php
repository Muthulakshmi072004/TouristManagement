<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "projects";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $login_email = $_POST['email'];
    $login_password = $_POST['password'];
   
    // Prepare and bind the SQL statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM `login` WHERE `account_email` = ?");
    $stmt->bind_param("s", $login_email);

    // Execute the statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Check if a user is found
    if ($result->num_rows > 0) {
        // Fetch the user data
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($login_password, $user['account_password']) || $login_password=== $user['account_password'] ) {
            // Set session variables
            $_SESSION['username'] = $user['first_name'];
            $_SESSION['role'] = $user['account_type'];

            // Redirect to the appropriate dashboard
            if ($user['account_type'] == 'admin') {
                header("Location: Admin/admindashboard.php");
            } elseif ($user['account_type']=='user'){
                header("Location: User/index.php ");
            }elseif ($user['account_type']=='cab'){
                header("Location:cab/index.php");
            }
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with this username and role.";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
