<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard - Cab Service</title>
    <style>
        /* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
}

/* Container */
.container {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
}

/* Header */
header {
    background-color: #444;
    padding: 20px 0;
    color: white;
}

header h1 {
    margin: 0;
    text-align: center;
}

nav {
    text-align: center;
    margin-top: 10px;
}

nav ul {
    list-style: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin: 0 10px;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-size: 18px;
}

nav ul li a:hover {
    text-decoration: underline;
}

/* Hero Section */
.hero {
    background-color: #226;
    color: white;
    padding: 60px 0;
    text-align: center;
}

.hero h2 {
    font-size: 36px;
    margin-bottom: 20px;
}

.hero p {
    font-size: 18px;
    margin-bottom: 20px;
}

.hero .btn {
    background-color: #5cb85c;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 18px;
}

.hero .btn:hover {
    background-color: #4cae4c;
}

/* My Rides Section */
.my-rides {
    padding: 60px 0;
    background-color: #fff;
}

.my-rides h2 {
    text-align: center;
    margin-bottom: 40px;
}

.ride-list {
    list-style: none;
    padding: 0;
}

.ride-list li {
    background-color: #f4f4f4;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

/* Book Ride Section */
.book-ride {
    padding: 60px 0;
    background-color: #f9f9f9;
    text-align: center;
}

.book-ride h2 {
    margin-bottom: 20px;
}

.book-ride form {
    max-width: 600px;
    margin: 0 auto;
    text-align: left;
}

.book-ride label {
    font-size: 18px;
    margin-bottom: 5px;
    display: block;
}

.book-ride input {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.book-ride button {
    padding: 10px 20px;
    font-size: 18px;
    color: white;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.book-ride button:hover {
    background-color: #0056b3;
}

/* Profile Section */
.profile {
    padding: 60px 0;
    background-color: #fff;
    text-align: center;
}

.profile h2 {
    margin-bottom: 20px;
}

.profile p {
    font-size: 18px;
    margin-bottom: 10px;
}

.profile .btn {
    background-color: #5cb85c;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 18px;
}

.profile .btn:hover {
    background-color: #4cae4c;
}

/* Footer */
footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 20px 0;
}

footer p {
    margin: 0;
}
</style>
</head>
<body>
    <header>
        <div class="container">
            <h1>User Dashboard</h1>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#my-rides">My Rides</a></li>
                    <li><a href="#book-ride">Book a Ride</a></li>
                    <li><a href="#profile">Profile</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero" id="home">
        <div class="container">
            <h2>Welcome Back, [Username]!</h2>
            <p>Your trusted cab service, always ready for you.</p>
            <a href="#book-ride" class="btn">Book a Ride Now</a>
        </div>
    </section>

    <section class="my-rides" id="my-rides">
        <div class="container">
            <h2>My Rides</h2>
            <ul class="ride-list">
                <li>
                    <h3>Ride to [Destination]</h3>
                    <p>Date: [Date]</p>
                    <p>Status: [Status]</p>
                </li>
                <!-- Repeat for each ride -->
            </ul>
        </div>
    </section>

    <section class="book-ride" id="book-ride">
        <div class="container">
            <h2>Book a Ride</h2>
            <form action="book_ride.php" method="POST">
                <label for="pickup">Pickup Location:</label>
                <input type="text" id="pickup" name="pickup" required>
                
                <label for="destination">Destination:</label>
                <input type="text" id="destination" name="destination" required>
                
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
                
                <button type="submit" class="btn">Book Now</button>
            </form>
        </div>
    </section>

    <section class="profile" id="profile">
        <div class="container">
            <h2>My Profile</h2>
            <p>Name: [Username]</p>
            <p>Email: [User Email]</p>
            <p>Phone: [User Phone]</p>
            <a href="edit_profile.php" class="btn">Edit Profile</a>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Cab Service. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
