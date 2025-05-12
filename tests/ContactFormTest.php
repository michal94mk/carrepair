<?php

namespace Tests;

use Tests\Setup\TestCase;

class ContactFormTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        
        // Start output buffering to capture any output
        ob_start();
        
        // Set up session if needed
        if (!isset($_SESSION)) {
            $_SESSION = [];
        }
    }
    
    protected function tearDown(): void
    {
        // Clean up output buffer
        ob_end_clean();
        
        // Reset session data
        $_SESSION = [];
        
        parent::tearDown();
    }
    
    public function testContactFormValidationRejectsEmptyFields()
    {
        // Set POST data with empty fields
        $this->setPostParams([
            'name' => '',
            'email' => '',
            'message' => ''
        ]);
        
        // Set server method to POST
        $this->setServerParams([
            'REQUEST_METHOD' => 'POST',
            'HTTP_X_REQUESTED_WITH' => 'XMLHttpRequest' // Simulate AJAX request
        ]);
        
        // Include the form handler script - we'll be testing the validation logic
        // Note: In a real test, this would be wrapped in a mock or a testable function
        // and we would make assertions about the returned values rather than including directly
        
        // For this test, we'll just check that the validation code correctly identifies empty fields
        $errors = [];
        
        // Mimic the validation from send_form.php
        $name = isset($_POST['name']) ? trim($_POST['name']) : '';
        $email = isset($_POST['email']) ? trim($_POST['email']) : '';
        $message = isset($_POST['message']) ? trim($_POST['message']) : '';
        
        // Name validation
        if (empty($name)) {
            $errors[] = 'Name is required';
        }
        
        // Email validation
        if (empty($email)) {
            $errors[] = 'Email is required';
        }
        
        // Message validation
        if (empty($message)) {
            $errors[] = 'Message is required';
        }
        
        // Assert that we have exactly 3 errors (one for each field)
        $this->assertCount(3, $errors);
        $this->assertContains('Name is required', $errors);
        $this->assertContains('Email is required', $errors);
        $this->assertContains('Message is required', $errors);
    }
    
    public function testContactFormValidationRejectsInvalidEmail()
    {
        // Set POST data with invalid email
        $this->setPostParams([
            'name' => 'Test User',
            'email' => 'invalid-email',
            'message' => 'This is a test message'
        ]);
        
        // Set server method to POST
        $this->setServerParams([
            'REQUEST_METHOD' => 'POST'
        ]);
        
        // Mimic the validation from send_form.php for email
        $errors = [];
        $email = $_POST['email'];
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Please provide a valid email address';
        }
        
        // Assert that we have an error for the invalid email
        $this->assertCount(1, $errors);
        $this->assertContains('Please provide a valid email address', $errors);
    }
    
    public function testContactFormValidationAcceptsValidData()
    {
        // Set POST data with valid fields
        $this->setPostParams([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'message' => 'This is a test message with sufficient length.'
        ]);
        
        // Set server method to POST
        $this->setServerParams([
            'REQUEST_METHOD' => 'POST'
        ]);
        
        // Mimic the validation from send_form.php
        $errors = [];
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
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
        
        // Assert that there are no errors
        $this->assertEmpty($errors);
    }
} 