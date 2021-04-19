<!DOCTYPE html>
<html lang="en">
<head>
    <title>AmaeRini</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav>
        <div class="title">
            <h4>AmaeRini</h4>
        </div>
        <ul class="nav-links">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="store.html">Store</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    <main>
        <h2>Contact</h2>
        <div class="wrapper">
            <form id="contact-form" method="post" action="contactForm.php">
                <input name="name" type="text" class="form-control" placeholder="Your Name" required>
                <br>
                <input name="email" type="email" class="form-control" placeholder="Your Email" required>
                <br>
                <textarea name="message" class="form-control" placeholder="Message" required></textarea><br>
                <button type="submit" name="submit" class="form-control submit">Send Message</button>
            </form>
        </div>
    </main>
<footer>
    <div class="footer-content">
        <ul class="socials">
            <li><a href="https://twitter.com/AmaeRini"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.twitch.tv/amaerini"><i class="fa fa-twitch"></i></a></li>
            <li><a href="https://www.instagram.com/amaerini/"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UCBD3tBumtE-4qa68rww0rkw"><i class="fa fa-youtube"></i></a></li>
        </ul>
    </div>
    <div class="footer-bottom">
        <p>copyright &copy;2021 AmaeRini. Developed by <span>Nibble15</span></p>
    </div>    
</footer>
    <script src="app.js"></script>
</body>
</html>