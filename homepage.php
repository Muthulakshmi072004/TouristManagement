<?php
// Define email address to receive messages
$recipient_email = 'your-email@example.com'; // Replace with your email address

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form inputs
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message']));

    // Basic validation
    $errors = [];
    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }
    if (empty($message)) {
        $errors[] = "Message is required.";
    }

    // If no errors, send email
    if (empty($errors)) {
        $subject = "Contact Form Submission from $name";
        $email_message = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        if (mail($recipient_email, $subject, $email_message, $headers)) {
            echo "<p>Your message has been sent successfully!</p>";
        } else {
            echo "<p>There was a problem sending your message. Please try again later.</p>";
        }
    } else {
        // Display errors
        foreach ($errors as $error) {
            echo "<p class='error'>$error</p>";
        }
    }
} else {
    echo "<p>Please submit the form.</p>";
}
?>
