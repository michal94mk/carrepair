<?php
/**
 * Initialization file for the application
 * Contains initial settings that must be executed before starting the page
 */

// Start session
session_start();

// Set timezone
date_default_timezone_set('Europe/Warsaw');

// Error settings (disable in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Load configuration files
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/functions.php';

// Function for automatic class loading (if classes are added in the future)
spl_autoload_register(function ($class) {
    $class_path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $file = __DIR__ . '/../' . $class_path . '.php';
    
    if (file_exists($file)) {
        require_once $file;
        return true;
    }
    
    return false;
});

// Helper functions for sessions
/**
 * Sets a flash message to be displayed once
 * 
 * @param string $type Message type (success, error, warning, info)
 * @param string $message Message content
 */
function setFlashMessage($type, $message) {
    $_SESSION['flash_messages'][$type][] = $message;
}

/**
 * Gets flash messages and removes them from the session
 * 
 * @return array Array of messages
 */
function getFlashMessages() {
    $messages = isset($_SESSION['flash_messages']) ? $_SESSION['flash_messages'] : [];
    unset($_SESSION['flash_messages']);
    
    return $messages;
}

// Set default security headers
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN'); 