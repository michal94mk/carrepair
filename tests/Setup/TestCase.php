<?php

namespace Tests\Setup;

use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        
        // Set up necessary environment for testing
        if (!defined('ROOT_PATH')) {
            define('ROOT_PATH', dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR);
        }
        if (!defined('INCLUDES_PATH')) {
            define('INCLUDES_PATH', ROOT_PATH . 'includes' . DIRECTORY_SEPARATOR);
        }
        if (!defined('PAGES_PATH')) {
            define('PAGES_PATH', ROOT_PATH . 'pages' . DIRECTORY_SEPARATOR);
        }
        if (!defined('DEFAULT_PAGE')) {
            define('DEFAULT_PAGE', 'home');
        }
        if (!defined('ERROR_PAGE')) {
            define('ERROR_PAGE', '404');
        }
    }
    
    /**
     * Helper method to set up $_GET parameters for testing
     *
     * @param array $params Array of parameters to set in $_GET
     * @return void
     */
    protected function setGetParams(array $params): void
    {
        $_GET = $params;
    }
    
    /**
     * Helper method to set up $_POST parameters for testing
     *
     * @param array $params Array of parameters to set in $_POST
     * @return void
     */
    protected function setPostParams(array $params): void
    {
        $_POST = $params;
    }
    
    /**
     * Helper method to set up $_SERVER parameters for testing
     *
     * @param array $params Array of parameters to set in $_SERVER
     * @return void
     */
    protected function setServerParams(array $params): void
    {
        foreach ($params as $key => $value) {
            $_SERVER[$key] = $value;
        }
    }
    
    /**
     * Helper method to clean up global variables after tests
     */
    protected function tearDown(): void
    {
        $_GET = [];
        $_POST = [];
        // Reset only the specific server params we might have changed
        // but not all of $_SERVER to avoid breaking PHPUnit
        
        parent::tearDown();
    }
} 