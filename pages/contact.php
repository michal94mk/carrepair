<section class="py-5">
  <div class="container">
    <!-- Floating message container for alerts - fixed position at the top of the viewport -->
    <div id="floatingAlerts" class="position-fixed top-0 start-50 translate-middle-x pt-4 mt-4" style="z-index: 1050; width: 90%; max-width: 500px;">
      <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert" style="opacity: 1; background-color: #d4edda; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15); border: 1px solid #c3e6cb;">
          <strong>Thank you!</strong> Your message has been sent successfully. We'll get back to you soon.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>
      
      <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
        <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert" style="opacity: 1; background-color: #f8d7da; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15); border: 1px solid #f5c6cb;">
          <strong>Error!</strong> There was a problem sending your message.
          <?php if (isset($_SESSION['form_errors']) && !empty($_SESSION['form_errors'])): ?>
            <ul class="mb-0 mt-2">
              <?php foreach ($_SESSION['form_errors'] as $error): ?>
                <li><?php echo $error; ?></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>
    </div>

    <div class="row mb-4">
      <div class="col-12 text-center">
        <h2 class="display-4">Contact Us</h2>
        <p class="lead text-muted">We're here to help you. Please use the form below to get in touch with us.</p>
      </div>
    </div>
    
    <!-- Contact Info Section -->
    <div class="row mb-5 g-4">
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
          <div class="card-body text-center py-4">
            <div class="rounded-circle bg-light d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 80px; height: 80px;">
              <i class="fas fa-map-marker-alt fa-2x text-primary"></i>
            </div>
            <h4>Our Location</h4>
            <p class="mb-0">123 Main Street</p>
            <p class="mb-2">Kraków, Poland 30-001</p>
            <p class="text-muted small mb-0">Monday - Friday: 8:00 - 18:00</p>
            <p class="text-muted small">Saturday: 9:00 - 14:00</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
          <div class="card-body text-center py-4">
            <div class="rounded-circle bg-light d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 80px; height: 80px;">
              <i class="fas fa-phone-alt fa-2x text-primary"></i>
            </div>
            <h4>Phone Numbers</h4>
            <p class="mb-1">Reception: <a href="tel:+48123456789" class="text-decoration-none">+48 123 456 789</a></p>
            <p class="mb-1">Service: <a href="tel:+48123456788" class="text-decoration-none">+48 123 456 788</a></p>
            <p class="mb-3">Emergency: <a href="tel:+48123456787" class="text-decoration-none">+48 123 456 787</a></p>
            <p class="text-muted small">We respond to calls during business hours</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
          <div class="card-body text-center py-4">
            <div class="rounded-circle bg-light d-flex align-items-center justify-content-center mx-auto mb-4" style="width: 80px; height: 80px;">
              <i class="fas fa-envelope fa-2x text-primary"></i>
            </div>
            <h4>Email Addresses</h4>
            <p class="mb-1">General: <a href="mailto:info@carrepair.com" class="text-decoration-none">info@carrepair.com</a></p>
            <p class="mb-1">Service: <a href="mailto:service@carrepair.com" class="text-decoration-none">service@carrepair.com</a></p>
            <p class="mb-3">Support: <a href="mailto:support@carrepair.com" class="text-decoration-none">support@carrepair.com</a></p>
            <p class="text-muted small">We usually respond within 24 hours</p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row mb-4">
      <div class="col-12 text-center">
        <h3 class="h4">Send Us a Message</h3>
        <p class="text-muted">Please fill out the form below and we'll get back to you as soon as possible.</p>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-6 mb-4 mb-md-0">
        <div class="card shadow-sm h-100">
          <div class="card-body p-0">
            <div style="height: 500px; position: relative;">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d163974.24345779445!2d19.83998676984981!3d50.04700380468911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471644c0354e18d1%3A0xb46bb6b576478abf!2zS3Jha8Ozdw!5e0!3m2!1spl!2spl!4v1746983381663!5m2!1spl!2spl" style="border:0; width: 100%; height: 100%; position: absolute;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card shadow-sm h-100">
          <div class="card-body" style="height: 500px; overflow-y: auto; display: flex; flex-direction: column;">
            <!-- Simple contact form without custom JavaScript -->
            <form id="contactForm" action="<?php echo url('send_form'); ?>" method="post" class="d-flex flex-column" style="height: 100%;">
              <div style="margin-bottom: 15px;">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Your name" value="<?php echo isset($_SESSION['form_data']['name']) ? $_SESSION['form_data']['name'] : ''; ?>" required>
              </div>
              <div style="margin-bottom: 15px;">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Your email" value="<?php echo isset($_SESSION['form_data']['email']) ? $_SESSION['form_data']['email'] : ''; ?>" required>
              </div>
              <div style="margin-bottom: 25px; flex: 1;">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" style="height: calc(100% - 30px); min-height: 120px; resize: none;" placeholder="Your message" required><?php echo isset($_SESSION['form_data']['message']) ? $_SESSION['form_data']['message'] : ''; ?></textarea>
              </div>
              <div style="margin-top: 15px; margin-bottom: 5px;">
                <button type="submit" class="btn btn-primary w-100">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
// Clear session data after displaying form
if (isset($_SESSION['form_data'])) {
  unset($_SESSION['form_data']);
}
if (isset($_SESSION['form_errors'])) {
  unset($_SESSION['form_errors']);
}
?>

<!-- No custom JavaScript here - rely on the existing ajax-loader.js -->