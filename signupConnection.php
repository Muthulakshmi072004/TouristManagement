<?php
include 'welcome.php';
// Process the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $role=$_POST['role'];
    echo $role;
    // Validate form data
    if ($password !== $confirm_password) {
        die("Passwords do not match.");
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Prepare and bind
    if($role=='user'){
        
        $stmt=$conn->prepare("INSERT INTO login ( account_email, account_password, account_type) VALUES (?,?,?)");
        $stmt->bind_param("sss", $email, $hashed_password,$role);
        if($stmt->execute()){
            $stmt = $conn->prepare("INSERT INTO user_details (first_name, last_name, account_email	, phoneNum) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $first_name, $last_name, $email, $phone); 
            if($stmt->execute()){
                header("location:login.php");
            }
        }
        else{
            echo "Something wrong:sign up";
        }
    }
    elseif($role=='cab'){
            $place="parunthumpara";
            $stmt=$conn->prepare("INSERT INTO login ( account_email, account_password, account_type) VALUES (?,?,?)");
            $stmt->bind_param("sss", $email, $hashed_password,$role);
            if($stmt->execute()){

                $stmt = $conn->prepare("INSERT INTO cab_details (first_name, last_name,place, account_email, phoneNum) VALUES (?, ?, ?, ?, ?)");
                $stmt->bind_param("sssss", $first_name, $last_name,$place, $email, $phone); 
                if($stmt->execute()){
                    header("location:login.php");
                }
            }
            else{
                echo "Something wrong:sign up";
            }
    }
    else{
            echo "Something wrong:role";
    }
            
    

}