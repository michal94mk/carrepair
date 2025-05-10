/**
 * Main JavaScript file for Car Repair site
 */

document.addEventListener('DOMContentLoaded', function() {
    // Bootstrap elements initialization
    
    // Tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
    
    // Popovers (for larger tooltips)
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl);
    });
    
    // Automatic alert hiding after 5 seconds
    setTimeout(function() {
        var alerts = document.querySelectorAll('.alert.alert-success, .alert.alert-info');
        alerts.forEach(function(alert) {
            var bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
        });
    }, 5000);
    
    // Lightbox gallery activation
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true,
        'albumLabel': "Image %1 of %2"
    });
    
    // Smooth scrolling effect for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            var targetId = this.getAttribute('href');
            
            if (targetId === '#') return;
            
            var targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                var headerOffset = 80;
                var targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
                var offsetPosition = targetPosition - headerOffset;
                
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Additional contact form validation
    var contactForm = document.querySelector('form[action*="send_form"]');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            var nameField = document.getElementById('name');
            var emailField = document.getElementById('email');
            var messageField = document.getElementById('message');
            var isValid = true;
            
            // Basic validation
            if (nameField && nameField.value.trim().length < 2) {
                isValid = false;
                nameField.classList.add('is-invalid');
            } else if (nameField) {
                nameField.classList.remove('is-invalid');
            }
            
            if (emailField && !validateEmail(emailField.value)) {
                isValid = false;
                emailField.classList.add('is-invalid');
            } else if (emailField) {
                emailField.classList.remove('is-invalid');
            }
            
            if (messageField && messageField.value.trim().length < 10) {
                isValid = false;
                messageField.classList.add('is-invalid');
            } else if (messageField) {
                messageField.classList.remove('is-invalid');
            }
            
            if (!isValid) {
                e.preventDefault();
            }
        });
    }
    
    // Helper function - email validation
    function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }
});
