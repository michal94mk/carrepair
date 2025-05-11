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
    // Sprawdź czy jesteśmy na stronie kontaktowej
    const isContactPage = window.location.href.includes('contact');
    
    if (isContactPage) {
        // Na stronie kontaktowej używamy kontenera fixed-position
        let alertContainer = document.getElementById('floatingAlerts');
        
        // Jeśli kontener nie istnieje, utwórz go
        if (!alertContainer) {
            alertContainer = document.createElement('div');
            alertContainer.id = 'floatingAlerts';
            alertContainer.className = 'position-fixed top-0 start-50 translate-middle-x pt-4 mt-4';
            alertContainer.style.zIndex = '1200';
            alertContainer.style.width = '90%';
            alertContainer.style.maxWidth = '500px';
            document.body.appendChild(alertContainer);
        }
        
        // Utwórz nowy alert
        const alertDiv = document.createElement('div');
        alertDiv.className = `alert alert-${type} alert-dismissible fade show shadow-sm`;
        alertDiv.setAttribute('role', 'alert');
        
        // Dodaj style zwiększające nieprzezroczystość i poprawiające widoczność
        alertDiv.style.opacity = '1';
        alertDiv.style.backgroundColor = type === 'success' ? '#d4edda' : '#f8d7da';
        alertDiv.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.15)';
        alertDiv.style.border = '1px solid ' + (type === 'success' ? '#c3e6cb' : '#f5c6cb');
        
        // Dodaj zawartość alertu
        let content = `<strong>${type === 'success' ? 'Thank you!' : 'Error!'}</strong> ${message}`;
        
        // Dodaj listę błędów, jeśli istnieją
        if (errors.length > 0) {
            content += '<ul class="mb-0 mt-2">';
            errors.forEach(error => {
                content += `<li>${error}</li>`;
            });
            content += '</ul>';
        }
        
        // Dodaj przycisk zamykania
        content += '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
        
        alertDiv.innerHTML = content;
        
        // Dodaj alert do kontenera
        alertContainer.appendChild(alertDiv);
        
        // Auto-ukrywanie po 5 sekundach (tylko dla sukcesu)
        if (type === 'success') {
            setTimeout(() => {
                const bsAlert = new bootstrap.Alert(alertDiv);
                bsAlert.close();
            }, 5000);
        }
    } else {
        // Na innych stronach używamy standardowego kontenera alertów w formularzu
        // Create alert div - z mniejszymi odstępami
        const alertDiv = document.createElement('div');
        alertDiv.className = `alert alert-${type} alert-dismissible fade show mt-1`;
        alertDiv.setAttribute('role', 'alert');
        
        // Dodaj zwarte style - nieco większa czcionka
        alertDiv.style.padding = '5px 10px';
        alertDiv.style.fontSize = '0.8rem';
        alertDiv.style.lineHeight = '1.2';
        alertDiv.style.width = '100%'; // Pełna szerokość
        alertDiv.style.position = 'relative';
        alertDiv.style.zIndex = '10';
        
        // Dodatkowy padding na dole dla komunikatu sukcesu
        if (type === 'success') {
            alertDiv.style.paddingBottom = '8px';
        }
        
        // Create flex container - bez odstępów
        const container = document.createElement('div');
        container.className = 'd-flex align-items-start';
        
        // Add appropriate icon based on type - mniejsza
        const icon = document.createElement('i');
        
        switch(type) {
            case 'success':
                icon.className = 'bi bi-check-circle-fill me-1';
                break;
            case 'danger':
                icon.className = 'bi bi-exclamation-circle-fill me-1';
                break;
            case 'warning':
                icon.className = 'bi bi-exclamation-triangle-fill me-1';
                break;
            case 'info':
                icon.className = 'bi bi-info-circle-fill me-1';
                break;
            default:
                icon.className = 'bi bi-info-circle-fill me-1';
        }
        
        // Mniejsza ikona - nieco większa niż wcześniej
        icon.style.fontSize = '0.8rem';
        
        // Create content container
        const content = document.createElement('div');
        content.className = 'flex-grow-1';
        
        // Add message - mniejszy
        const messageP = document.createElement('p');
        messageP.className = 'mb-0';
        messageP.style.fontSize = '0.8rem';
        messageP.style.fontWeight = 'normal';
        messageP.textContent = message;
        
        // Dodatkowy margines na dole dla komunikatu sukcesu
        if (type === 'success') {
            messageP.style.marginBottom = '6px';
        }
        
        content.appendChild(messageP);
        
        // Add list of errors if provided - zwarta lista
        if (errors.length > 0) {
            const ul = document.createElement('ul');
            ul.className = 'mb-0 ps-3 mt-0';
            ul.style.fontSize = '0.75rem';
            ul.style.lineHeight = '1.2';
            ul.style.paddingBottom = '8px'; // Większy padding na dole listy
            
            errors.forEach((error, index) => {
                const li = document.createElement('li');
                li.textContent = error;
                // Jeśli to ostatni element, dodajemy więcej miejsca na dole
                li.style.marginBottom = (index === errors.length - 1) ? '6px' : '2px';
                ul.appendChild(li);
            });
            
            content.appendChild(ul);
        }
        
        // Assemble the alert contents
        container.appendChild(icon);
        container.appendChild(content);
        alertDiv.appendChild(container);
        
        // Add close button - mniejszy
        const closeButton = document.createElement('button');
        closeButton.type = 'button';
        closeButton.className = 'btn-close';
        closeButton.style.fontSize = '0.7rem';
        closeButton.style.padding = '3px';
        closeButton.setAttribute('data-bs-dismiss', 'alert');
        closeButton.setAttribute('aria-label', 'Close');
        
        // Add onclick event to adjust layout when alert is closed
        closeButton.addEventListener('click', function() {
            adjustFormLayout();
        });
        
        alertDiv.appendChild(closeButton);
        
        // Find or create the message container
        let messageContainer = form.querySelector('#messageContainer');
        if (!messageContainer) {
            messageContainer = document.createElement('div');
            messageContainer.id = 'messageContainer';
            form.insertBefore(messageContainer, form.firstChild);
        }
        
        // Insert alert into the message container
        messageContainer.appendChild(alertDiv);
        
        // Auto-hide success messages after 5 seconds
        if (type === 'success') {
            setTimeout(() => {
                if (alertDiv.parentNode) {
                    const bsAlert = new bootstrap.Alert(alertDiv);
                    bsAlert.close();
                    
                    // Adjust layout after alert is closed
                    setTimeout(adjustFormLayout, 200);
                }
            }, 5000);
        }
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

/**
 * Function to fix form layout after alert dismissal
 * This ensures the button returns to its proper position
 */
function adjustFormLayout() {
    // Small delay to let the alert removal finish
    setTimeout(() => {
        const form = document.getElementById('contactForm');
        if (form) {
            // Force a layout recalculation by toggling a class
            form.classList.add('layout-fix');
            
            // Remove the class after a tiny delay to trigger reflow
            setTimeout(() => {
                form.classList.remove('layout-fix');
                
                // Make sure the button is properly aligned
                const buttonContainer = form.querySelector('.form-group.mt-auto');
                if (buttonContainer) {
                    buttonContainer.style.marginTop = 'auto !important';
                }
            }, 50);
        }
    }, 100);
} 