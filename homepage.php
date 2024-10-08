<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore the World - Tourism</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            color: #fff;
            background-image: url("image\\Nature.jpeg");
            background-size: cover;
            background-position: center;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
        }

        header img {
            height: 50px;
        }

        header .search-box {
            display: flex;
            align-items: center;
        }

        header .search-box input[type="text"] {
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 10px;
            margin-right: 10px;
        }

        header .search-box input[type="submit"] {
            padding: 10px 10px;
            background-color: #ff6600;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        .welcome-section {
            text-align: center;
            padding: 100px 20px;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .welcome-section h1 {
            font-size: 50px;
            margin-bottom: 20px;
        }

        .welcome-section p {
            font-size: 24px;
            max-width: 800px;
            margin: 0 auto;
        }


        .about-us, .contact-us {
            padding: 50px 20px;
            background-color: rgba(0, 0, 0, 0.7);
            text-align: center;
        }

        .about-us h2, .contact-us h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .about-us p, .contact-us p {
            font-size: 20px;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
        }
        .contact-us,.about-us{
            margin: 20px ;
            padding: 60px;
        }
        .contact-us form {
            margin-top: 10px;
        }

        .contact-us form input, .contact-us form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .contact-us form input[type="submit"] {
            background-color: #ff6600;
            color: white;
            cursor: pointer;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            font-size: 18px;
        }
        .div {
          display: block;
          unicode-bidi: isolate;
       }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .gallery-item {
            width: 500px;
            text-align: center;
            background-color: #fff;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .gallery-item img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .gallery-item h3 {
            margin: 10px 0;
            font-size: 20px;
            color: #333;
        }
        .gallery-item a {
            text-decoration: none;
            color: #0066cc;
            font-weight: bold;
        }
        .gallery-item a:hover {
            text-decoration: underline;
        }
        .account{
            position: relative;
            display: flex;
        }
        .button{
            background-color: #111214;
            margin: 10px;
            padding: 5px;
            border-radius: 10px;
            box-shadow: 1px 0px 2px #fbfbfb inset;
        }
        .button a{
            text-decoration: none;
            color: #fff;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <header>
        <img src="image/logooo.png" alt="Website Logo">
        <div class="account">
            <div class="button login">
                <a href="login.php">Login</a>
            </div>

            <div class="button signup">
            <a href="signup.php" class="signup">Sign Up</a><br>
            </div>
        </div>
    </header>

    <section class="welcome-section">
        <h1>Welcome to Your Next Adventure</h1>
        <p>Discover breathtaking destinations, vibrant cultures, and unforgettable experiences. Let us be your guide to the world's most beautiful places.</p>

</section>
<body>
    <h1>Explore Beautiful Tourist Places</h1>
    <div class="gallery">
        <div class="gallery-item">
            <img src="image/thekkady1.jpg" alt="Idukki">
            <h3>Thekkady, Idukki</h3>
            <a href="https://en.wikipedia.org/wiki/Thekkady" target="_blank">Learn More</a>
        </div>
        <div class="gallery-item">
            <img src="image/parunthupara2.jpg" alt="Idukki">
            <h3>Parunthumpara, Idukki</h3>
            <a href="https://en.wikipedia.org/wiki/Parunthumpara" target="_blank">Learn More</a>
        </div>
        <div class="gallery-item">
            <img src="image/panjali2.jpg" alt=Iukki>
            <h3>Panjalymadu, Idukki</h3>
            <a href="https://en.wikipedia.org/wiki/Machu_Picchu" target="_blank">Learn More</a>
        </div>
        <div class="gallery-item">
            <img src="image/water.jpg" alt="Santorini">
            <h3>Valanjanganam Falls,idukki</h3>
            <a href="https://en.wikipedia.org/wiki/Valanjanganam_falls" target="_blank">Learn More</a>
        </div>
        <div class="gallery-item">
            <img src="image/pattumala.jpg"alt="Grand Canyon">
            <h3>pattumala, Idukki</h3>
            <a href=https://en.wikipedia.org/wiki/Our_Lady_of_Good_Health_Church,_Pattumala target="_blank">Learn More</a>
        </div>
        
    </div>
</body>

    <section class="about-us">
        <h2>About Us</h2>
        <p>We are a team of travel enthusiasts dedicated to bringing you the best travel experiences from around the globe. Our mission is to inspire and guide you to explore the world, one adventure at a time. With our expert recommendations, curated travel tips, and insider knowledge, we aim to make your journey as seamless and enjoyable as possible.</p>
    </section>

    <section class="contact-us">
        <h2>Contact Us</h2>
        <p>If you have any questions, suggestions, or just want to share your travel experiences with us, feel free to reach out! We would love to hear from you.</p>
        <form action="#" method="post">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
            <input type="submit" value="Send Message">
        </form>
    </section>

    <footer>
        &copy; 2024 Explore the World | All Rights Reserved
    </footer>

</body>
</html>
