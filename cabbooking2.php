<?php
include'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $car_number = htmlspecialchars($_POST['car_number']);
    $date_of_booking = htmlspecialchars($_POST['booking-date']);
    $date_of_return = htmlspecialchars($_POST['return-date']);
    $location = htmlspecialchars($_POST['location']);
   // $stmt = $conn->prepare("INSERT INTO company_details (Company_name,Contact_person,account_email,PhoneNum) VALUES (?,?,?,?)");
        // $stmt->bind_param("ssss",$companyname,$contactperson,$email,$phonenum);
        // $inst=$conn->prepare("INSERT INTO account_login (account_email,account_password,account_type) VALUES(?,?,?)");
        // $inst->bind_param("sss",$email,$hashed_password,$account_type);

    $stmt = $conn->prepare("INSERT INTO bookings(name, car_number, booking-date, return-date, location) 
    VALUES (?,?,?,?,?)");
      $stmt->bind_param( "sssss",$name, $car_number, $date_of_booking, $date_of_return, $location);

    
    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }


    // You can process the data here, for example, save it to a database or send an email

    echo "<h1>Booking Details</h1>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Car Number:</strong> $car_number</p>";
    echo "<p><strong>Date of Booking:</strong> $date_of_booking</p>";
    echo "<p><strong>Date of Return:</strong> $date_of_return</p>";
    echo "<p><strong>Deliver and Pickup Location:</strong> $location</p>";
}else {
    echo "Invalid Request";
}
$conn->close();

?>