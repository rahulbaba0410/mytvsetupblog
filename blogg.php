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
</div> 
    <section class="blog-section">
    <div class="blog-content" style="text-align: center;">
    <h2>Blogg Version </h2>
</div>                    
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="blog-sidebar">
                        <div class="search-bar">
                            <input type="text" placeholder="Search">
                            <i class="fas fa-search"></i>
                        </div>
                        <div class="recent-posts">
                            <h3>Recent Posts</h3>
                            <ul>
                                <li>
                                    <img src="img/cc3.png" alt="Post Image">
                                    <a href="#"><i class="fas fa-angle-right"></i> Post Title 1</a>
                                </li>
                                <li>
                                    <img src="img/cc4.jpg" alt="Post Image">
                                    <a href="#"><i class="fas fa-angle-right"></i> Post Title 2</a>
                                </li>
                                <li>
                                    <img src="img/cc5.png" alt="Post Image">
                                    <a href="#"><i class="fas fa-angle-right"></i> Post Title 3</a>
                                </li>
                                <li>
                                    <img src="img/cc9.jpg" alt="Post Image">
                                    <a href="#"><i class="fas fa-angle-right"></i> Post Title 4</a>
                                </li>
                                <li>
                                    <img src="img/cc7.jpg" alt="Post Image">
                                    <a href="#"><i class="fas fa-angle-right"></i> Post Title 5</a>
                                </li>
                                <li>
                                    <img src="img/cc8.jpg" alt="Post Image">
                                    <a href="#"><i class="fas fa-angle-right"></i> Post Title 5</a>
                                </li>
                                <li>
                                    <img src="img/cc8.jpg" alt="Post Image">
                                    <a href="#"><i class="fas fa-angle-right"></i> Post Title 5</a>
                                </li>
                                
                            </ul>
                        </div>
                        <!-- Add any other sidebar content or widgets here -->
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="post-grid">
                        <div class="post">
                            <div class="post-image">
                                <img src="img/cc3.png" alt="Post Image">
                            </div>
                            <div class="post-content">
                                <h3>Post Title 1</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                                <div class="read-more">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="post">
                            <div class="post-image">
                                <img src="img/cc4.jpg" alt="Post Image">
                            </div>
                            <div class="post-content">
                                <h3>Post Title 2</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                                <div class="read-more">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="post">
                            <div class="post-image">
                                <img src="img/cc6.jpg" alt="Post Image">
                            </div>
                            <div class="post-content">
                                <h3>Post Title 3</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                                <div class="read-more">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="post">
                            <div class="post-image">
                                <img src="img/cc7.jpg" alt="Post Image">
                            </div>
                            <div class="post-content">
                                <h3>Post Title 4</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                                <div class="read-more">
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rest of your HTML code -->
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
