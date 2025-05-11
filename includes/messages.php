<?php
/**
 * File for displaying flash messages
 */

// Get flash messages
$flash_messages = getFlashMessages();

// Mapping message types to Bootstrap classes and icons
$alertClasses = [
    'success' => 'alert-success',
    'error' => 'alert-danger',
    'warning' => 'alert-warning',
    'info' => 'alert-info'
];

$alertIcons = [
    'success' => 'bi bi-check-circle-fill',
    'error' => 'bi bi-exclamation-circle-fill',
    'warning' => 'bi bi-exclamation-triangle-fill',
    'info' => 'bi bi-info-circle-fill'
];

// Display messages if they exist
if (!empty($flash_messages)) {
    foreach ($flash_messages as $type => $messages) {
        $alertClass = isset($alertClasses[$type]) ? $alertClasses[$type] : 'alert-info';
        $alertIcon = isset($alertIcons[$type]) ? $alertIcons[$type] : 'bi bi-info-circle-fill';
        
        foreach ($messages as $message) {
            echo '<div class="alert ' . $alertClass . ' alert-dismissible fade show" role="alert">';
            echo '<div class="d-flex align-items-start">';
            echo '<i class="' . $alertIcon . ' me-2"></i>';
            echo '<div class="flex-grow-1">';
            echo '<p class="mb-0 fw-medium">' . escape($message) . '</p>';
            echo '</div>';
            echo '</div>';
            echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
            echo '</div>';
        }
    }
}

// Check if we're on the contact page
$isContactPage = (isset($_GET['page']) && $_GET['page'] == 'contact') || basename($_SERVER['PHP_SELF']) == 'contact.php';

// Only process these messages if we're NOT on the contact page
// (since contact.php now handles form messages directly)
if (!$isContactPage) {
    // Handle contact form errors
    if (isset($_GET['error']) && $_GET['error'] == 1 && isset($_SESSION['form_errors'])) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
        echo '<div class="d-flex align-items-start">';
        echo '<i class="bi bi-exclamation-circle-fill me-2"></i>';
        echo '<div class="flex-grow-1">';
        echo '<p class="mb-0 fw-medium">Form errors:</p>';
        echo '<ul class="mt-2 mb-0">';
        foreach ($_SESSION['form_errors'] as $error) {
            echo '<li>' . escape($error) . '</li>';
        }
        echo '</ul>';
        echo '</div>';
        echo '</div>';
        echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
        echo '</div>';
        
        // Remove errors from session
        unset($_SESSION['form_errors']);
    }

    // Handle contact form success
    if (isset($_GET['success']) && $_GET['success'] == 1) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
        echo '<div class="d-flex align-items-start">';
        echo '<i class="bi bi-check-circle-fill me-2"></i>';
        echo '<div class="flex-grow-1">';
        echo '<p class="mb-0 fw-medium">Thank you for contacting us! Your message has been sent.</p>';
        echo '</div>';
        echo '</div>';
        echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
        echo '</div>';
    }
} 