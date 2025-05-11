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
<section id="aboutus" class="section-padding">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
        <div class="about-img">
          <img src="images/aboutus.jpg" alt="About Car Repair" class="img-fluid" style="max-height: 450px; width: 100%; object-fit: cover;">
        </div>
      </div>
      <div class="col-lg-6 col-md-12 d-flex align-items-center">
        <div class="about-text">
          <h1>About Us</h1>
          <p class="mb-4">Welcome to Car Repair! We are specialists in the field of automotive mechanics. Our experienced team and the latest technologies allow us to deliver the highest quality services that meet even the most demanding expectations. Join our family of customers who value excellence and professionalism!</p>
          <div class="row g-4 mb-4">
            <div class="col-md-6 col-sm-6">
              <div class="d-flex align-items-center">
                <i class="fas fa-check-circle text-primary me-2"></i>
                <span>Professional Service</span>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="d-flex align-items-center">
                <i class="fas fa-check-circle text-primary me-2"></i>
                <span>Expert Team</span>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="d-flex align-items-center">
                <i class="fas fa-check-circle text-primary me-2"></i>
                <span>Modern Equipment</span>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="d-flex align-items-center">
                <i class="fas fa-check-circle text-primary me-2"></i>
                <span>Quality Guarantee</span>
              </div>
            </div>
          </div>
          <a href="<?php echo url('aboutus'); ?>" class="btn btn-primary">Learn More</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="services" class="services section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="section-title">Our Services</h1>
            <p class="text-muted">We offer a wide range of automotive services to keep your vehicle in perfect condition</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <i class="fas fa-tools fa-3x text-primary mb-3"></i>
                            <h3 class="card-title">Mechanical Repairs</h3>
                        </div>
                        <div class="square-img-container mb-4">
                            <img src="images/test1.jpg" alt="Mechanical Repairs" class="img-cover">
                        </div>
                        <p class="card-text">Fault diagnosis, engine repairs, gearbox repairs, suspension, brake systems, steering systems.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <i class="fas fa-car fa-3x text-primary mb-3"></i>
                            <h3 class="card-title">Maintenance and Servicing</h3>
                        </div>
                        <div class="square-img-container mb-4">
                            <img src="images/test1.jpg" alt="Maintenance and Servicing" class="img-cover">
                        </div>
                        <p class="card-text">Regular maintenance and servicing of vehicles and machinery, including oil changes, filter replacements, checking and adjusting mechanical systems.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <i class="fas fa-wrench fa-3x text-primary mb-3"></i>
                            <h3 class="card-title">Technical Advice</h3>
                        </div>
                        <div class="square-img-container mb-4">
                            <img src="images/test1.jpg" alt="Technical Advice" class="img-cover">
                        </div>
                        <p class="card-text">Providing customers with technical advice on maintenance, repairs, upgrades, and optimizing the operation of their vehicles and machinery.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="gallery" class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="section-title">Our Gallery</h1>
            <p class="text-muted">Take a look at our workshop and the quality of our work</p>
        </div>
    </div>
    <div class="container-fluid px-0">
        <div class="row g-0" id="gallery-row">
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 p-0">
                <div style="position: relative; padding-bottom: 100%; overflow: hidden;">
                    <img src="images/test1.jpg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;" alt="Gallery workshop">
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 p-0">
                <div style="position: relative; padding-bottom: 100%; overflow: hidden;">
                    <img src="images/test1.jpg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;" alt="Gallery workshop">
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 p-0">
                <div style="position: relative; padding-bottom: 100%; overflow: hidden;">
                    <img src="images/test1.jpg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;" alt="Gallery workshop">
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 p-0">
                <div style="position: relative; padding-bottom: 100%; overflow: hidden;">
                    <img src="images/test1.jpg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;" alt="Gallery workshop">
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 p-0">
                <div style="position: relative; padding-bottom: 100%; overflow: hidden;">
                    <img src="images/test1.jpg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;" alt="Gallery workshop">
                </div>
            </div>
            <div class="col-6 col-sm-4 col-md-4 col-lg-2 p-0">
                <div style="position: relative; padding-bottom: 100%; overflow: hidden;">
                    <img src="images/test1.jpg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;" alt="Gallery workshop">
                </div>
            </div>
        </div>
    </div>
</section>
<section id="testimonials" class="section-padding bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="section-title">Customer Testimonials</h1>
            <p class="text-muted">What our clients say about us</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="testimonial-item text-center">
                                <div class="testimonial-img mb-4">
                                    <img src="images/person1.jpg" alt="Client" class="rounded-circle" width="100" height="100">
                                </div>
                                <div class="testimonial-text">
                                    <h5>John Smith</h5>
                                    <p class="text-muted">Audi A4 Owner</p>
                                    <p class="mb-0"><i class="fas fa-quote-left me-2"></i>Professional service and quick repair. My car works like new. I will definitely return for my next inspection.<i class="fas fa-quote-right ms-2"></i></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonial-item text-center">
                                <div class="testimonial-img mb-4">
                                    <img src="images/person2.jpg" alt="Client" class="rounded-circle" width="100" height="100">
                                </div>
                                <div class="testimonial-text">
                                    <h5>Anna Johnson</h5>
                                    <p class="text-muted">Volkswagen Golf Owner</p>
                                    <p class="mb-0"><i class="fas fa-quote-left me-2"></i>Highly recommended! Fair prices and honest information about the condition of my car. No pressure for unnecessary repairs.<i class="fas fa-quote-right ms-2"></i></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonial-item text-center">
                                <div class="testimonial-img mb-4">
                                    <img src="images/person3.jpg" alt="Client" class="rounded-circle" width="100" height="100">
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
            <h1 class="section-title">Why Choose Us</h1>
            <p class="text-muted">Benefits of working with our workshop</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="why-us-item text-center p-4 h-100">
                    <div class="icon-box mb-3">
                        <i class="fas fa-tools fa-3x text-primary"></i>
                    </div>
                    <h4>Modern Equipment</h4>
                    <p>We use the latest technologies and diagnostic tools to ensure the highest quality of services.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="why-us-item text-center p-4 h-100">
                    <div class="icon-box mb-3">
                        <i class="fas fa-user-tie fa-3x text-primary"></i>
                    </div>
                    <h4>Experienced Mechanics</h4>
                    <p>Our team consists of qualified specialists with many years of experience in the industry.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="why-us-item text-center p-4 h-100">
                    <div class="icon-box mb-3">
                        <i class="fas fa-thumbs-up fa-3x text-primary"></i>
                    </div>
                    <h4>Quality Guarantee</h4>
                    <p>We provide a warranty on all services performed and parts replaced.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="why-us-item text-center p-4 h-100">
                    <div class="icon-box mb-3">
                        <i class="fas fa-money-bill-wave fa-3x text-primary"></i>
                    </div>
                    <h4>Competitive Prices</h4>
                    <p>We offer fair and transparent pricing with no hidden costs.</p>
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
<section id="contact" class="section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="section-title">Contact Us</h1>
            <p class="text-muted">Get in touch with us for any questions or to schedule a service</p>
        </div>
        <div class="contact-wrapper bg-light p-4 rounded shadow">
            <div class="row g-4">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="map-container h-100">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d163734.68467048665!2d19.817882087392037!3d50.046633151414955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471644c0354e18d1%3A0xb46bb6b576478abf!2zS3Jha8Ozdw!5e0!3m2!1spl!2spl!4v1715225104694!5m2!1spl!2spl" width="100%" height="100%" style="border:0; min-height: 350px;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form h-100">
                        <form action="<?php echo url('send_form'); ?>" method="post">
                            <div class="mb-3">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Your Message</label>
                                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

