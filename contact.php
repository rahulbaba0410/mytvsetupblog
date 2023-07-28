<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tanny Blogs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 30px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .contact-form {
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        .form-group textarea {
            height: 150px;
        }

        .btn-submit {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-submit:hover {
            background-color: #555;
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            padding: 20px 0;
            background-color: #333;
            color: #fff;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<!--

TemplateMo 552 Video Catalog

https://templatemo.com/tm-552-video-catalog

-->

<body>
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="banner">
            <div class="container">
                <!-- Brand -->
                <a class="navbar-brand" href="#"><span>Jimmy Blogg</span></a>

                <!-- Toggler/collapsible Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blogg.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <form class="form-inline my-2 my-lg-0">
                <div class="search-bar">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary my-2 my-sm-0" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </nav>
    </div>
    <div class="container">
        <img src="img/cc2.jpg" alt="Featured Image" class="featured-image">
    </div>
    <div class="container">
        <h1>Contact Us</h1>
        <div class="contact-form">
            <form id="contact-form" action="#" method="POST">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" id="subject" name="subject" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn-submit">Send Message</button>
                </div>
            </form>
        </div>
    </div>

    <div class="container-fluid tm-content-container mx-auto pt-4">
        <!-- Subscribe form and footer links -->
        <div class="row pt-3">
            <div class="col-xl-6 col-lg-12 mb-4">
                <div class="tm-bg-gray p-5 h-100">
                    <h3 class="tm-text-primary mb-3">Do you want to get our latest updates?</h3>
                    <p class="mb-5">Please subscribe to our newsletter for upcoming new videos and the latest information about our work. Thank you.</p>
                    <form action="" method="GET" class="tm-subscribe-form">
                        <input type="text" name="email" placeholder="Your Email..." required>
                        <button type="submit" class="btn rounded-0 btn-primary tm-btn-small">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-4">
                <div class="p-5 tm-bg-gray">
                    <h3 class="tm-text-primary mb-4">Quick Links</h3>
                    <ul class="list-unstyled tm-footer-links">
                        <li><a href="#">Duis bibendum</a></li>
                        <li><a href="#">Purus non dignissim</a></li>
                        <li><a href="#">Sapien metus gravida</a></li>
                        <li><a href="#">Eget consequat</a></li>
                        <li><a href="#">Praesent eu pulvinar</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-4">
                <div class="p-5 tm-bg-gray h-100">
                    <h3 class="tm-text-primary mb-4">Our Pages</h3>
                    <ul class="list-unstyled tm-footer-links">
                        <li><a href="#">Our Videos</a></li>
                        <li><a href="#">License Terms</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Privacy Policies</a></li>
                    </ul>
                </div>
            </div>
        </div> <!-- row -->

        <footer class="row pt-5">
            <div class="col-12">
                <p class="text-right">Copyright 2020 The Video Catalog Company 
                    - Designed by <a href="https://templatemo.com" rel="nofollow" target="_parent">TemplateMo</a></p>
            </div>
        </footer>
    </div>
    <footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h4>About Us</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
            </div>
            <div class="footer-section">
                <h4>Categories</h4>
                <a href="#">Amazon </a>
                <a href="#">Amazon prime</a>
                <a href="#">Netflix</a>
                <a href="#">Amazon com code</a>
            </div>
            <div class="footer-section">
                <h4>Contact Us</h4>
                <p>123 Street, New York, USA</p>
                <p>+1 123 456789</p>
                <a href="mailto:info@example.com">info@example.com</a>
            </div>
        </div>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </div>
</footer>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script>
    // Add shrink class to navbar when scrolling
    $(window).scroll(function() {
        if ($(window).scrollTop() > 20) {
            $("#banner").addClass("shrink");
        } else {
            $("#banner").removeClass("shrink");
        }
    });

    // Toggle menu on click
    $(".navbar-toggler").on("click", function() {
        $(".navbar-collapse").toggleClass("show");
    });
</script>
</body>

</html>
