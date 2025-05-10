<?php
/**
 * File containing helper functions for the application
 */

/**
 * Loads the appropriate page based on the GET parameter
 * 
 * @return string Page content
 */
function loadPage() {
    // Get the GET 'page' parameter or use the default value
    $page = isset($_GET['page']) ? $_GET['page'] : DEFAULT_PAGE;
    
    // Path to the page file
    $pagePath = PAGES_PATH . $page . '.php';
    
    // Check if the file exists
    if (file_exists($pagePath)) {
        // Output buffering
        ob_start();
        include($pagePath);
        $content = ob_get_contents();
        ob_end_clean();
        
        return $content;
    } else {
        // Return the 404 error page
        header("HTTP/1.1 404 Not Found");
        ob_start();
        include(PAGES_PATH . ERROR_PAGE . '.php');
        $content = ob_get_contents();
        ob_end_clean();
        
        return $content;
    }
}

/**
 * Generates a secure URL
 * 
 * @param string $page Page name
 * @param array $params Additional parameters
 * @return string Full URL
 */
function url($page, $params = []) {
    $url = 'index.php?page=' . urlencode($page);
    
    foreach ($params as $key => $value) {
        $url .= '&' . urlencode($key) . '=' . urlencode($value);
    }
    
    return $url;
}

/**
 * Secures input data against XSS
 * 
 * @param string $data Data to secure
 * @return string Secured data
 */
function escape($data) {
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

/**
 * Checks if the page is active (for highlighting in the menu)
 * 
 * @param string $page Page name to check
 * @return bool True if the page is active
 */
function isActivePage($page) {
    $currentPage = isset($_GET['page']) ? $_GET['page'] : DEFAULT_PAGE;
    return $currentPage === $page;
}

/**
 * Redirects to another page
 * 
 * @param string $page Page name
 * @param array $params Additional parameters
 */
function redirect($page, $params = []) {
    header('Location: ' . url($page, $params));
    exit;
}

/**
 * Displays the 'active' class for the active page in the menu
 * 
 * @param string $page Page name
 * @return string CSS class 'active' if the page is active
 */
function activeClass($page) {
    return isActivePage($page) ? ' active' : '';
} 