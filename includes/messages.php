<?php
/**
 * File for displaying flash messages
 */

// Get flash messages
$flash_messages = getFlashMessages();

// Mapping message types to Bootstrap classes
$alertClasses = [
    'success' => 'alert-success',
    'error' => 'alert-danger',
    'warning' => 'alert-warning',
    'info' => 'alert-info'
];

// Display messages if they exist
if (!empty($flash_messages)) {
    foreach ($flash_messages as $type => $messages) {
        $alertClass = isset($alertClasses[$type]) ? $alertClasses[$type] : 'alert-info';
        foreach ($messages as $message) {
            echo '<div class="alert ' . $alertClass . ' alert-dismissible fade show" role="alert">';
            echo escape($message);
            echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
            echo '</div>';
        }
    }
}

// Handle contact form errors
if (isset($_GET['error']) && $_GET['error'] == 1 && isset($_SESSION['form_errors'])) {
    echo '<div class="alert alert-danger" role="alert">';
    echo '<h4 class="alert-heading">Form errors:</h4>';
    echo '<ul>';
    foreach ($_SESSION['form_errors'] as $error) {
        echo '<li>' . escape($error) . '</li>';
    }
    echo '</ul>';
    echo '</div>';
    
    // Remove errors from session
    unset($_SESSION['form_errors']);
}

// Handle contact form success
if (isset($_GET['success']) && $_GET['success'] == 1) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
    echo 'Thank you for contacting us! Your message has been sent.';
    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
    echo '</div>';
} 