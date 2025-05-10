<?php
// Loading the initialization file
require_once 'includes/init.php';

// Loading the selected page
$content = loadPage();

// Check if this is an AJAX request
if (isset($_GET['ajax']) && $_GET['ajax'] == 1) {
    // Return only the page content without the layout
    echo $content;
    exit;
} else {
    // Load the full layout with page content
    include(LAYOUTS_PATH . 'layout.php');
}