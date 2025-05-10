/**
 * AJAX page loader for Car Repair site
 * Handles loading pages without full browser refresh
 */

document.addEventListener('DOMContentLoaded', function() {
    initAjaxNavigation();
    initAjaxForms();
});

/**
 * Initialize AJAX navigation for all internal links
 */
function initAjaxNavigation() {
    // Get content container
    const contentContainer = document.querySelector('.container-fluid.align-items-center');
    if (!contentContainer) return;
    
    // Get all navigation links
    const navLinks = document.querySelectorAll('a[href^="index.php?page="]');
    
    // Add click event listener to each link
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Get the URL from the link
            const url = this.getAttribute('href');
            
            // Extract page name for updating active state
            const pageName = url.split('page=')[1].split('&')[0];
            
            // Load the page content
            loadPageContent(url, contentContainer, pageName);
            
            // Update URL in browser without reloading
            window.history.pushState({page: pageName}, '', url);
        });
    });
    
    // Handle browser back/forward buttons
    window.addEventListener('popstate', function(e) {
        if (e.state && e.state.page) {
            loadPageContent(`index.php?page=${e.state.page}`, contentContainer, e.state.page);
        }
    });
}

/**
 * Initialize AJAX form submissions
 */
function initAjaxForms() {
    // This will be called after each page load to handle forms
    document.addEventListener('click', function(e) {
        // Check if the click was on a submit button within a form
        if (e.target.type === 'submit' && e.target.closest('form')) {
            handleFormSubmit(e);
        }
    });
}

/**
 * Handle form submission with AJAX
 * 
 * @param {Event} e - Click event
 */
function handleFormSubmit(e) {
    // Get the form
    const form = e.target.closest('form');
    
    // Check if this is a contact form
    if (form && form.getAttribute('action') && form.getAttribute('action').includes('send_form')) {
        e.preventDefault();
        
        // Show loading state
        const submitButton = e.target;
        const originalText = submitButton.textContent;
        submitButton.disabled = true;
        submitButton.textContent = 'Sending...';
        
        // Remove any existing alerts
        const existingAlerts = form.parentNode.querySelectorAll('.alert');
        existingAlerts.forEach(alert => alert.remove());
        
        // Collect form data
        const formData = new FormData(form);
        
        // Send AJAX request
        fetch(form.getAttribute('action'), {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.json())
        .then(data => {
            // Reset button state
            submitButton.disabled = false;
            submitButton.textContent = originalText;
            
            if (data.success) {
                // Success message
                showFormMessage(form, 'success', data.message);
                form.reset(); // Clear the form
            } else {
                // Error messages
                if (data.errors && data.errors.length > 0) {
                    showFormMessage(form, 'danger', 'Please correct the following errors:', data.errors);
                } else {
                    showFormMessage(form, 'danger', 'An error occurred. Please try again.');
                }
            }
        })
        .catch(error => {
            console.error('Error submitting form:', error);
            submitButton.disabled = false;
            submitButton.textContent = originalText;
            showFormMessage(form, 'danger', 'An error occurred. Please try again.');
        });
    }
}

/**
 * Show form success or error messages
 * 
 * @param {Element} form - The form element
 * @param {string} type - Message type (success/danger)
 * @param {string} message - The message to display
 * @param {Array} errors - Optional array of error messages
 */
function showFormMessage(form, type, message, errors = []) {
    // Create alert div
    const alertDiv = document.createElement('div');
    alertDiv.className = `alert alert-${type} alert-dismissible fade show mt-3`;
    alertDiv.setAttribute('role', 'alert');
    
    // Add message
    alertDiv.textContent = message;
    
    // Add list of errors if provided
    if (errors.length > 0) {
        const ul = document.createElement('ul');
        ul.className = 'mt-2 mb-0';
        
        errors.forEach(error => {
            const li = document.createElement('li');
            li.textContent = error;
            ul.appendChild(li);
        });
        
        alertDiv.appendChild(ul);
    }
    
    // Add close button
    const closeButton = document.createElement('button');
    closeButton.type = 'button';
    closeButton.className = 'btn-close';
    closeButton.setAttribute('data-bs-dismiss', 'alert');
    closeButton.setAttribute('aria-label', 'Close');
    alertDiv.appendChild(closeButton);
    
    // Insert alert before the form
    form.parentNode.insertBefore(alertDiv, form);
    
    // Auto-hide success messages after 5 seconds
    if (type === 'success') {
        setTimeout(() => {
            if (alertDiv.parentNode) {
                const bsAlert = new bootstrap.Alert(alertDiv);
                bsAlert.close();
            }
        }, 5000);
    }
}

/**
 * Load page content via AJAX
 * 
 * @param {string} url - URL to load
 * @param {Element} container - Container to update with new content
 * @param {string} pageName - Name of the page being loaded
 */
function loadPageContent(url, container, pageName) {
    // Show loading indicator
    showLoading(container);
    
    // Add AJAX parameter to tell server this is an AJAX request
    const ajaxUrl = url + (url.includes('?') ? '&' : '?') + 'ajax=1';
    
    // Fetch the page content
    fetch(ajaxUrl)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.text();
        })
        .then(html => {
            // Update the page content
            container.innerHTML = html;
            
            // Update active state in navigation
            updateActiveNavLink(pageName);
            
            // Reinitialize any scripts needed for the new content
            reinitializeScripts();
            
            // Initialize forms for AJAX submission
            initAjaxForms();
            
            // Scroll to top
            window.scrollTo(0, 0);
        })
        .catch(error => {
            console.error('Error loading page:', error);
            container.innerHTML = '<div class="alert alert-danger">Error loading page. Please try again.</div>';
        });
}

/**
 * Show loading indicator while fetching content
 * 
 * @param {Element} container - Container element
 */
function showLoading(container) {
    container.innerHTML = `
        <div class="text-center my-5 py-5">
            <div class="spinner-border text-secondary" role="status" style="width: 3rem; height: 3rem;">
                <span class="visually-hidden">Loading...</span>
            </div>
            <p class="mt-3">Loading page...</p>
        </div>
    `;
}

/**
 * Update the active state in navigation
 * 
 * @param {string} pageName - Current page name
 */
function updateActiveNavLink(pageName) {
    // Remove active class from all links
    document.querySelectorAll('.nav-link').forEach(link => {
        link.classList.remove('active');
    });
    
    // Add active class to current page link
    const activeLinks = document.querySelectorAll(`.nav-link[href*="page=${pageName}"]`);
    activeLinks.forEach(link => {
        link.classList.add('active');
    });
}

/**
 * Reinitialize scripts for newly loaded content
 */
function reinitializeScripts() {
    // Reinitialize Bootstrap components
    if (typeof bootstrap !== 'undefined') {
        // Tooltips
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
        
        // Popovers
        const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
        popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl);
        });
    }
    
    // Reinitialize Lightbox
    if (typeof lightbox !== 'undefined') {
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true,
            'albumLabel': "Image %1 of %2"
        });
    }
} 