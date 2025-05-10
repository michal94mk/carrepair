<?php
// Loading the initialization file
require_once 'includes/init.php';

// Loading the selected page
$content = loadPage();

// Loading the layout with page content
include(LAYOUTS_PATH . 'layout.php');