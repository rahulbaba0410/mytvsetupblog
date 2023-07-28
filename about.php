<!DOCTYPE html>
<html>
<head>
    <title>Tanny Blogs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
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
    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-image">
                        <img src="img/cc12.jpg" alt="About Image">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-content">
                        <h2>About us</h2>
                        <p>Explore the world of entertainment with us as we dive into the fascinating realms of Amazon, Amazon Prime, Netflix, and more.</p>
                        <p>Discover the latest releases, exclusive shows, and blockbuster movies available on these platforms. From thrilling action to heartwarming dramas, we cover it all.</p>
                        <p>Stay updated with insightful articles, reviews, and behind-the-scenes stories. Join our community and indulge in a captivating world of streaming entertainment.</p>
                        <a href="#" class="btn">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="feature">
                        <img src="img/cc11.png" alt="Amazon Prime Logo" class="custom-logo">
                        <h3>Amazon Prime</h3>
                        <p>Experience the benefits of Amazon Prime, including fast delivery, exclusive deals, and access to Prime Video's extensive library of movies, TV shows, and original content.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature">
                        <img src="img/cc10.png" alt="Netflix Logo" class="custom-logo">
                        <h3>Netflix</h3>
                        <p>Immerse yourself in the world of on-demand streaming with Netflix. Explore a wide range of TV series, documentaries, and movies, spanning various genres and languages.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature">
                        <i class="fab fa-amazon"></i>
                        <h3>Amazon.com</h3>
                        <p>Discover a vast collection of products, from electronics to fashion and more, on Amazon.com. Explore deals, find customer reviews, and shop with convenience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
