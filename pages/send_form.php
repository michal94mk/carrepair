<?php
// Loading configuration
require_once 'config/config.php';
require_once 'includes/functions.php';

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    
    // Get and validate data
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';
    
    // Name validation
    if (empty($name)) {
        $errors[] = 'Name is required';
    } elseif (strlen($name) < 2) {
        $errors[] = 'Name must contain at least 2 characters';
    }
    
    // Email validation
    if (empty($email)) {
        $errors[] = 'Email is required';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please provide a valid email address';
    }
    
    // Message validation
    if (empty($message)) {
        $errors[] = 'Message is required';
    } elseif (strlen($message) < 10) {
        $errors[] = 'Message must contain at least 10 characters';
    }
    
    // If there are no errors, send the message
    if (empty($errors)) {
        // In a real application, here would be email sending, e.g. using mail() or PHPMailer
        // Example (commented out because it requires proper server configuration):
        /*
        $to = CONTACT_EMAIL;
        $subject = 'New message from contact form from ' . escape($name);
        $messageBody = "Name: " . escape($name) . "\r\n";
        $messageBody .= "Email: " . escape($email) . "\r\n\r\n";
        $messageBody .= "Message:\r\n" . escape($message);
        $headers = 'From: ' . escape($email) . "\r\n" .
            'Reply-To: ' . escape($email) . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        
        mail($to, $subject, $messageBody, $headers);
        */
        
        // Redirect to confirmation page
        $_SESSION['form_success'] = true;
        redirect('contact', ['success' => 1]);
    } else {
        // Redirect with error message
        $_SESSION['form_errors'] = $errors;
        $_SESSION['form_data'] = [
            'name' => $name,
            'email' => $email,
            'message' => $message
        ];
        redirect('contact', ['error' => 1]);
    }
} else {
    // If someone tries to access this page without submitting the form
    redirect('contact');
}
?>
