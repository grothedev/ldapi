<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FileTest extends TestCase
{
    public function testCreate(){
    	$response = $this->call('POST', 'api/files', array());
    	$this->assertEquals(200, $response->getStatusCode());
    }
    public function testIndex(){
    	$response = $this->call('GET', 'api/files');
    	$this->assertEquals(200, $response->getStatusCode());
    }
    public function testShow(){
    	$response = $this->call('GET', 'api/files/2');
    	$this->assertEquals(200, $response->getStatusCode());
    }
}
