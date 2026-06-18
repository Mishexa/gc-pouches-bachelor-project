<?php

include 'config.php';

$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO messages (fullname, email, message)
            VALUES ('$fullname', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        $success = "Message sent successfully!";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - GC Pouches</title>

    <link rel="stylesheet" href="css/variables.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>

    <header class="header">
        <div class="container navbar">
            <div class="logo">GC Pouches</div>

            <nav class="nav">
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="products.php">Products</a>
                <a href="contact.php">Contact</a>
            </nav>
        </div>
    </header>

    <section class="page-banner">
        <div class="container">
            <h1>Contact</h1>
        </div>
    </section>

    <section class="contact-section">
        <div class="container contact-wrapper">


            <?php if($success): ?>
                <div class="success-message">
                    <?php echo $success; ?>
                </div>
            <?php endif; ?>

            <!-- <div class="contact-info">

    <div class="info-card">
        <h3>Email</h3>
        <p>info@gcpouches.com</p>
    </div>

    <div class="info-card">
        <h3>Instagram</h3>
        <p>@gcpouches</p>
    </div>

    <div class="info-card">
        <h3>Location</h3>
        <p>Tbilisi, Georgia</p>
    </div>

    </div> -->

   




            <form class="contact-form" method="POST">
            <input
                type="text"
                name="fullname"
                placeholder="Full Name"
                required
            >
            <input
                type="email"
                name="email"
                placeholder="Email Address"
                required
            >
            <textarea
                name="message"
                placeholder="Message"
                required
            ></textarea>
                <button type="submit">Send Message</button>
            </form>

            <div class="map-container">
                <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d264.92361817448517!2d44.78636195802243!3d41.70510000627197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40440d001c899125%3A0xe0138be9927718bc!2sSnus%20Club%20GC%20Pouches!5e1!3m2!1sen!2sus!4v1781760967504!5m2!1sen!2sus"
                width="100%"
                height="350"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
                </iframe>
            </div>

        </div>
    </section>

    <footer class="footer">

                <div class="info-card">
    <i class="fas fa-envelope"></i>
    <h3>Email</h3>
    <p>info@gcpouches.com</p>
</div>

<div class="info-card">
    <i class="fab fa-instagram"></i>
    <h3>Instagram</h3>
    <p>@gcpouches</p>
</div>

<div class="info-card">
    <i class="fas fa-location-dot"></i>
    <h3>Location</h3>
    <p>Tbilisi, Georgia</p>
</div>


        <div class="container">
            <p>© 2026 GC Pouches. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>