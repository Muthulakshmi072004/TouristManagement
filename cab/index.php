<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cab Service</title>
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

/* Services Section */
.services {
    padding: 60px 0;
    background-color: #fff;
}

.services h2 {
    text-align: center;
    margin-bottom: 40px;
}

.service-cards {
    display: flex;
    justify-content: space-around;
}

.service-cards .card {
    background-color: #f4f4f4;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 30%;
}

.service-cards .card h3 {
    margin-bottom: 15px;
    font-size: 22px;
}

.service-cards .card p {
    font-size: 16px;
    margin-bottom: 10px;
}

/* About Section */
.about {
    padding: 60px 0;
    background-color: #f9f9f9;
    text-align: center;
}

.about h2 {
    margin-bottom: 20px;
}

.about p {
    font-size: 18px;
    max-width: 800px;
    margin: 0 auto;
}

/* Contact Section */
.contact {
    padding: 60px 0;
    background-color: #444;
    color: white;
    text-align: center;
}

.contact h2 {
    margin-bottom: 20px;
}

.contact p {
    font-size: 18px;
    margin-bottom: 20px;
}

.contact .btn {
    background-color: #5cb85c;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 18px;
}

.contact .btn:hover {
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
            <h1>Welcome to Cab Service</h1>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero" id="home">
        <div class="container">
            <h2>Your Ride, Your Way</h2>
            <p>Reliable cab services at your fingertips.</p>
            <a href="#services" class="btn">Book a Ride</a>
        </div>
    </section>

    <section class="services" id="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="service-cards">
                <div class="card">
                    <h3>City Rides</h3>
                    <p>Quick and affordable rides within the city.</p>
                </div>
                <div class="card">
                    <h3>Airport Transfers</h3>
                    <p>Hassle-free transfers to and from the airport.</p>
                </div>
                <div class="card">
                    <h3>Outstation Trips</h3>
                    <p>Comfortable rides for outstation trips.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="container">
            <h2>About Us</h2>
            <p>We are committed to providing the best cab services with a focus on safety, comfort, and customer satisfaction.</p>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Get in touch with us for any queries or support.</p>
            <a href="contact.php" class="btn">Contact Now</a>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Cab Service. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
