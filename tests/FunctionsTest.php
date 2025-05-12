<?php

namespace Tests;

use Tests\Setup\TestCase;

class FunctionsTest extends TestCase
{
    public function testEscapeFunctionEscapesHtmlSpecialChars()
    {
        // Test HTML escaping with various inputs
        $testString = '<script>alert("XSS attack");</script>';
        $expectedResult = '&lt;script&gt;alert(&quot;XSS attack&quot;);&lt;/script&gt;';
        
        $this->assertEquals($expectedResult, escape($testString));
        
        // Test with ampersands
        $this->assertEquals('Tom &amp; Jerry', escape('Tom & Jerry'));
    }
    
    public function testUrlFunctionGeneratesCorrectUrls()
    {
        // Test basic URL generation
        $this->assertEquals('index.php?page=home', url('home'));
        
        // Test with additional parameters
        $params = [
            'id' => 123,
            'action' => 'view'
        ];
        $this->assertEquals('index.php?page=services&id=123&action=view', url('services', $params));
        
        // Test with special characters that need encoding
        $params = [
            'name' => 'John & Jane',
            'query' => 'search term with spaces'
        ];
        $this->assertEquals(
            'index.php?page=search&name=John+%26+Jane&query=search+term+with+spaces',
            url('search', $params)
        );
    }
    
    public function testIsActivePageDetectsCurrentPage()
    {
        // Test when the page is active
        $this->setGetParams(['page' => 'about']);
        $this->assertTrue(isActivePage('about'));
        
        // Test when the page is not active
        $this->assertFalse(isActivePage('contact'));
        
        // Test with default page when no page parameter is set
        $this->setGetParams([]);
        $this->assertTrue(isActivePage(DEFAULT_PAGE));
        $this->assertFalse(isActivePage('non-default-page'));
    }
    
    public function testActiveClassReturnsCorrectClass()
    {
        // Test when the page is active
        $this->setGetParams(['page' => 'services']);
        $this->assertEquals(' active', activeClass('services'));
        
        // Test when the page is not active
        $this->assertEquals('', activeClass('gallery'));
    }
} 