<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TagTest extends TestCase
{
    public function testCreate(){
    	$response = $this->call('POST', 'api/tags', array());
    	$this->assertEquals(200, $response->getStatusCode());
    }
    public function testIndex(){
    	$response = $this->call('GET', 'api/tags');
    	$this->assertEquals(200, $response->getStatusCode());
    }
    public function testShow(){
    	$response = $this->call('GET', 'api/tags/1');
    	$this->assertEquals(200, $response->getStatusCode());
    }
}
