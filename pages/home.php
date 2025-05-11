<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active c-item">
    <img src="images/car1.jpg" class="d-block w-100 c-img" alt="Car Repair Shop">
      <div class="carousel-caption">
        <h5>Professional Car Repair Shop</h5>
        <p>The highest quality services in vehicle repair and servicing.</p>
        <a href="<?php echo url('services'); ?>" class="btn btn-primary btn-lg">Our Services</a>
      </div>
    </div>
    <div class="carousel-item c-item">
      <img src="images/car1.jpg" class="d-block w-100 c-img" alt="Car Repair">
      <div class="carousel-caption">
        <h5>Experienced Mechanics</h5>
        <p>Our specialists have many years of experience in repairing various vehicle brands.</p>
        <a href="<?php echo url('aboutus'); ?>" class="btn btn-primary btn-lg">About Us</a>
      </div>
    </div>
    <div class="carousel-item c-item">
    <img src="images/car1.jpg" class="d-block w-100 c-img" alt="Car Service">
      <div class="carousel-caption">
        <h5>Modern Equipment</h5>
        <p>We use the latest technologies and diagnostic equipment.</p>
        <a href="<?php echo url('gallery'); ?>" class="btn btn-primary btn-lg">View Gallery</a>
      </div>
    </div>
    <button class="carousel-control-prev h-100 c-item" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next h-100 c-item" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
</div>
<section id="aboutus" class="py-5">
  <div class="container">
    <div class="row mb-4">
      <div class="col-12 text-center">
        <h2 class="display-4">About Us</h2>
        <p class="text-muted">Learn more about our professional car repair service</p>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
        <img src="images/aboutus.jpg" alt="About Car Repair" class="img-fluid rounded shadow">
      </div>
      <div class="col-lg-6 col-md-12">
        <p class="lead">Welcome to Car Repair! We are specialists in the field of automotive mechanics with years of experience.</p>
        <div class="row g-2 mb-4">
          <div class="col-6">
            <div class="d-flex align-items-center">
              <i class="fas fa-check-circle text-primary me-2"></i>
              <span>Professional Service</span>
            </div>
          </div>
          <div class="col-6">
            <div class="d-flex align-items-center">
              <i class="fas fa-check-circle text-primary me-2"></i>
              <span>Expert Team</span>
            </div>
          </div>
          <div class="col-6">
            <div class="d-flex align-items-center">
              <i class="fas fa-check-circle text-primary me-2"></i>
              <span>Modern Equipment</span>
            </div>
          </div>
          <div class="col-6">
            <div class="d-flex align-items-center">
              <i class="fas fa-check-circle text-primary me-2"></i>
              <span>Quality Guarantee</span>
            </div>
          </div>
        </div>
        <a href="<?php echo url('aboutus'); ?>" class="btn btn-primary">Learn More About Us</a>
      </div>
    </div>
  </div>
</section>
<section id="services" class="py-5 bg-light">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="display-4">Our Services</h2>
                <p class="text-muted">We offer a wide range of automotive services</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="images/test1.jpg" class="card-img-top" alt="Mechanical Repairs">
                    <div class="card-body text-center">
                        <h4 class="card-title">Mechanical Repairs</h4>
                        <p class="card-text">Fault diagnosis, engine repairs, gearbox repairs, suspension, brake systems, steering systems.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="images/test1.jpg" class="card-img-top" alt="Maintenance and Servicing">
                    <div class="card-body text-center">
                        <h4 class="card-title">Maintenance and Servicing</h4>
                        <p class="card-text">Regular maintenance and servicing of vehicles and machinery, including oil changes, filter replacements.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="images/test1.jpg" class="card-img-top" alt="Technical Advice">
                    <div class="card-body text-center">
                        <h4 class="card-title">Technical Advice</h4>
                        <p class="card-text">Providing customers with technical advice on maintenance, repairs, upgrades, and optimization.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="<?php echo url('services'); ?>" class="btn btn-primary btn-lg">View All Services</a>
        </div>
    </div>
</section>
<section id="gallery" class="py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="display-4">Our Gallery</h2>
                <p class="text-muted">Take a look at our workshop and the quality of our work</p>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-6 col-md-4">
                <div class="card border-0 overflow-hidden">
                    <img src="images/test1.jpg" class="img-fluid" alt="Gallery image 1">
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="card border-0 overflow-hidden">
                    <img src="images/test1.jpg" class="img-fluid" alt="Gallery image 2">
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="card border-0 overflow-hidden">
                    <img src="images/test1.jpg" class="img-fluid" alt="Gallery image 3">
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="<?php echo url('gallery'); ?>" class="btn btn-primary btn-lg">View Full Gallery</a>
        </div>
    </div>
</section>
<section id="testimonials" class="py-5 bg-light">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="display-4">Customer Testimonials</h2>
                <p class="text-muted">What our clients say about us</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div id="testimonialCarousel" class="carousel slide shadow-sm rounded overflow-hidden" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="testimonial-item text-center p-5">
                                <div class="testimonial-img mb-4">
                                    <img src="images/person1.jpg" alt="Client" class="rounded-circle shadow-sm" width="100" height="100">
                                </div>
                                <div class="testimonial-text">
                                    <h5>John Smith</h5>
                                    <p class="text-muted">Audi A4 Owner</p>
                                    <p class="mb-0"><i class="fas fa-quote-left me-2"></i>Professional service and quick repair. My car works like new. I will definitely return for my next inspection.<i class="fas fa-quote-right ms-2"></i></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonial-item text-center p-5">
                                <div class="testimonial-img mb-4">
                                    <img src="images/person2.jpg" alt="Client" class="rounded-circle shadow-sm" width="100" height="100">
                                </div>
                                <div class="testimonial-text">
                                    <h5>Anna Johnson</h5>
                                    <p class="text-muted">Volkswagen Golf Owner</p>
                                    <p class="mb-0"><i class="fas fa-quote-left me-2"></i>Highly recommended! Fair prices and honest information about the condition of my car. No pressure for unnecessary repairs.<i class="fas fa-quote-right ms-2"></i></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonial-item text-center p-5">
                                <div class="testimonial-img mb-4">
                                    <img src="images/person3.jpg" alt="Client" class="rounded-circle shadow-sm" width="100" height="100">
                                </div>
                                <div class="testimonial-text">
                                    <h5>Peter Williams</h5>
                                    <p class="text-muted">Opel Astra Owner</p>
                                    <p class="mb-0"><i class="fas fa-quote-left me-2"></i>The best service in the area. They fixed an issue that other mechanics couldn't diagnose. I recommend them to everyone.<i class="fas fa-quote-right ms-2"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    <div class="carousel-indicators position-relative mt-4">
                        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active bg-primary" aria-current="true"></button>
                        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1" class="bg-primary"></button>
                        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2" class="bg-primary"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="why-us" class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4">Why Choose Us</h2>
            <p class="text-muted">Benefits of working with our workshop</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="card text-center h-100 border-0 shadow-sm p-4">
                    <div class="card-body">
                        <i class="fas fa-tools fa-3x text-primary mb-3"></i>
                        <h4>Modern Equipment</h4>
                        <p>We use the latest technologies and diagnostic tools to ensure the highest quality of services.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card text-center h-100 border-0 shadow-sm p-4">
                    <div class="card-body">
                        <i class="fas fa-user-tie fa-3x text-primary mb-3"></i>
                        <h4>Experienced Mechanics</h4>
                        <p>Our team consists of qualified specialists with many years of experience in the industry.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card text-center h-100 border-0 shadow-sm p-4">
                    <div class="card-body">
                        <i class="fas fa-thumbs-up fa-3x text-primary mb-3"></i>
                        <h4>Quality Guarantee</h4>
                        <p>We provide a warranty on all services performed and parts replaced.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card text-center h-100 border-0 shadow-sm p-4">
                    <div class="card-body">
                        <i class="fas fa-money-bill-wave fa-3x text-primary mb-3"></i>
                        <h4>Competitive Prices</h4>
                        <p>We offer fair and transparent pricing with no hidden costs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="cta" class="section-padding bg-primary text-white">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-lg-8 col-md-7">
                <h2 class="mb-2 fs-1 fw-bold">Need professional car repair?</h2>
                <p class="mb-0 fs-5">Contact us today and schedule an appointment at our workshop!</p>
            </div>
            <div class="col-lg-4 col-md-5 text-center text-md-end">
                <div class="d-flex flex-column flex-sm-row justify-content-center justify-content-md-end gap-3">
                    <a href="tel:+48123456789" class="btn btn-light btn-lg fw-bold px-4 py-3">
                        <i class="fas fa-phone me-2"></i>+48 123 456 789
                    </a>
                    <a href="<?php echo url('contact'); ?>" class="btn btn-outline-light btn-lg fw-bold px-4 py-3">
                        <i class="fas fa-envelope me-2"></i>Contact
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="quick-contact" class="section-padding">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="display-4">Contact Us</h2>
      <p class="text-muted">Get in touch with us for any questions</p>
    </div>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card text-center h-100 border-0 shadow-sm p-4">
          <div class="card-body">
            <i class="fas fa-map-marker-alt fa-3x text-primary mb-3"></i>
            <h4>Our Location</h4>
            <p>123 Main Street, Kraków, Poland</p>
            <a href="https://goo.gl/maps/1JKxFsT8Kz9uDD5B9" class="btn btn-outline-primary mt-2" target="_blank">View on Map</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-center h-100 border-0 shadow-sm p-4">
          <div class="card-body">
            <i class="fas fa-phone fa-3x text-primary mb-3"></i>
            <h4>Phone Number</h4>
            <p>+48 123 456 789</p>
            <p class="text-muted">Mon-Fri: 8:00-18:00</p>
            <a href="tel:+48123456789" class="btn btn-outline-primary mt-2">Call Us</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-center h-100 border-0 shadow-sm p-4">
          <div class="card-body">
            <i class="fas fa-envelope fa-3x text-primary mb-3"></i>
            <h4>Email Address</h4>
            <p>info@carrepair.com</p>
            <a href="<?php echo url('contact'); ?>" class="btn btn-primary mt-2">Contact Form</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


