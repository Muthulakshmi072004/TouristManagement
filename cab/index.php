<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cab Booking Dashboard - Tourist Management</title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- External CSS for styling -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .dashboard {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        h1, h2 {
            text-align: center;
            color: #333;
        }
        .card {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin: 20px 0;
        }
        .card-item {
            background: white;
            width: 30%;
            padding: 20px;
            margin: 10px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .card-item:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .card-item i {
            font-size: 40px;
            margin-bottom: 10px;
            color: #007BFF;
        }
        .card-item h3 {
            margin: 10px 0;
            color: #333;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        footer {
            margin-top: 40px;
            text-align: center;
            color: #666;
            font-size: 14px;
        }
        .services-section, .faq-section, .testimonial-section, .contact-section {
            background-color: #fff;
            padding: 40px 20px;
            margin-top: 20px;
        }
        .faq-section ul {
            list-style-type: none;
            padding-left: 0;
        }
        .faq-section li {
            margin-bottom: 10px;
        }
        .contact-section form {
            display: flex;
            flex-direction: column;
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }
        .contact-section input, .contact-section textarea {
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        .contact-section button {
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .contact-section button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="dashboard">
        <h1>Cab Booking Dashboard</h1>

        <div class="card">
            <!-- Cab Booking Option 1 -->
            <div class="card-item">
                <i class="fas fa-taxi"></i>
                <h3>Book a City Tour</h3>
                <p>Explore the city with our comfortable cabs.</p>
                <a href="#" class="btn">Book Now</a>
            </div>

            <!-- Cab Booking Option 2 -->
            <div class="card-item">
                <i class="fas fa-road"></i>
                <h3>Airport Pickup</h3>
                <p>We provide reliable airport pickup services.</p>
                <a href="#" class="btn">Book Now</a>
            </div>

            <!-- Cab Booking Option 3 -->
            <div class="card-item">
                <i class="fas fa-map-marked-alt"></i>
                <h3>Outstation Trip</h3>
                <p>Plan your outstation trip with our safe cabs.</p>
                <a href="#" class="btn">Book Now</a>
            </div>
        </div>

        <div class="card">
            <!-- Cab Availability -->
            <div class="card-item">
                <i class="fas fa-car"></i>
                <h3>Available Cabs</h3>
                <p>Check cab availability in your location.</p>
                <a href="#" class="btn">Check Availability</a>
            </div>

            <!-- Jeep Booking Option -->
            <div class="card-item">
                <i class="fas fa-car-side"></i>
                <h3>Book a Jeep</h3>
                <p>Explore off-road destinations with our jeep service.</p>
                <a href="#" class="btn">Book Now</a>
            </div>

            <!-- Bus Booking Option -->
            <div class="card-item">
                <i class="fas fa-bus"></i>
                <h3>Book a Bus</h3>
                <p>Travel in groups with our comfortable buses.</p>
                <a href="#" class="btn">Book Now</a>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div class="services-section">
        <h2>Our Services</h2>
        <p>We offer a range of vehicle services to meet all your travel needs, whether you're exploring the city, heading to the airport, or planning an outstation trip.</p>
        <ul>
            <li>Comfortable city tours with cabs</li>
            <li>Jeep for off-road trips</li>
            <li>Bus for group travel</li>
            <li>Reliable airport pickups and drop-offs</li>
            <li>Long-distance outstation trips</li>
            <li>24/7 customer support and driver assistance</li>
        </ul>
    </div>

    <!-- FAQ Section -->
    <div class="faq-section">
        <h2>Frequently Asked Questions</h2>
        <ul>
            <li><strong>Q: Can I book a cab for multiple destinations?</strong><br>A: Yes, you can customize your trip and add multiple stops to your booking.</li>
            <li><strong>Q: Are your drivers experienced?</strong><br>A: All of our drivers are well-trained, experienced, and have been thoroughly vetted for safety.</li>
            <li><strong>Q: How can I modify or cancel my booking?</strong><br>A: You can modify or cancel your booking through your profile or by contacting our support team.</li>
        </ul>
    </div>

    <!-- Testimonial Section -->
    <div class="testimonial-section">
        <h2>What Our Customers Say</h2>
        <p><i class="fas fa-quote-left"></i> Excellent service! The cab was clean, the driver was courteous, and the booking process was very simple. Highly recommend this service! <i class="fas fa-quote-right"></i></p>
        <p>- Sarah M., Customer</p>

        <p><i class="fas fa-quote-left"></i> Reliable and on time. I always use their service for airport pickups and have never been disappointed. <i class="fas fa-quote-right"></i></p>
        <p>- John D., Customer</p>
    </div>

    <!-- Contact Section -->
    <div class="contact-section">
        <h2>Contact Us</h2>
        <form action="#" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>

    <footer>
        &copy; 2024 Tourist Management. All rights reserved.
    </footer>

</body>
</html>