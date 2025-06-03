<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo SITE_DESCRIPTION; ?>">
    <title><?php echo SITE_TITLE; ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="images/favicon-simple.svg">
    <link rel="alternate icon" href="images/favicon.svg">
    <link rel="mask-icon" href="images/favicon-simple.svg" color="#007bff">
    <meta name="theme-color" content="#007bff">
    <meta name="msapplication-TileColor" content="#007bff">
    <meta name="application-name" content="Car Repair">
    <meta name="apple-mobile-web-app-title" content="Car Repair">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Lightbox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <!-- Include header -->
    <header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?php echo url('home'); ?>">
                <i class="fas fa-car-side me-2"></i>Car Repair
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link<?php echo activeClass('home'); ?>" href="<?php echo url('home'); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php echo activeClass('aboutus'); ?>" href="<?php echo url('aboutus'); ?>">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php echo activeClass('services'); ?>" href="<?php echo url('services'); ?>">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php echo activeClass('gallery'); ?>" href="<?php echo url('gallery'); ?>">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php echo activeClass('contact'); ?>" href="<?php echo url('contact'); ?>">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

    <!-- Flash messages -->
    <div class="container">
        <?php include(INCLUDES_PATH . 'messages.php'); ?>
    </div>
    
    <main class="fade-in">
        <?php echo $content; ?>
    </main>

<!-- Footer -->
<footer class="footer">
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="widget">
                        <h4 class="widget-title">ADDRESS</h4>
                        <address class="mb-4"><?php echo CONTACT_ADDRESS; ?></address>
                        <h4 class="widget-title">CONTACT</h4>
                        <p class="mb-1">
                            <a class="link-secondary text-decoration-none" href="tel:+<?php echo CONTACT_PHONE; ?>">
                                <i class="fas fa-phone me-2"></i><?php echo CONTACT_PHONE; ?>
                            </a>
                        </p>
                        <p class="mb-0">
                            <a class="link-secondary text-decoration-none" href="mailto:<?php echo CONTACT_EMAIL; ?>">
                                <i class="fas fa-envelope me-2"></i><?php echo CONTACT_EMAIL; ?>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget">
                        <h4 class="widget-title">MENU</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <a href="<?php echo url('home'); ?>" class="link-secondary text-decoration-none">
                                    <i class="fas fa-chevron-right me-2"></i>Home
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="<?php echo url('aboutus'); ?>" class="link-secondary text-decoration-none">
                                    <i class="fas fa-chevron-right me-2"></i>About Us
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="<?php echo url('services'); ?>" class="link-secondary text-decoration-none">
                                    <i class="fas fa-chevron-right me-2"></i>Services
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="<?php echo url('gallery'); ?>" class="link-secondary text-decoration-none">
                                    <i class="fas fa-chevron-right me-2"></i>Gallery
                                </a>
                            </li>
                            <li class="mb-0">
                                <a href="<?php echo url('contact'); ?>" class="link-secondary text-decoration-none">
                                    <i class="fas fa-chevron-right me-2"></i>Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget">
                        <h4 class="widget-title">ABOUT US</h4>
                        <p class="mb-4">Car Repair is a professional auto repair workshop specializing in vehicle repairs and maintenance.</p>
                        <a href="<?php echo url('aboutus'); ?>" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="py-4 border-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; <?php echo date('Y'); ?> Car Repair. All Rights Reserved.</p>
                </div>
                <div class="col-md-6">
                    <ul class="nav justify-content-center justify-content-md-end">
                        <li class="nav-item">
                            <a class="nav-link" href="https://facebook.com" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://youtube.com" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://twitter.com" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://instagram.com" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/ajax-loader.js"></script>
</body>
</html>
