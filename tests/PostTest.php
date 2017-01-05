<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\User;

class PostTest extends TestCase
{
    public function testCreate(){
    	
        $u = User::first();

        $postData = array(
            'title' => 'title',
            'body' => '{text: text}',
            'user_id' => 2,
            'lat' => 40.1,
            'lon' => 32.33
        );

        //$response = $u->posts()->create();

        $response = $this->call('POST', 'api/posts', $postData);

    	$this->assertEquals(200, $response->getStatusCode());
    }
    public function testIndex(){
    	$response = $this->call('GET', 'api/posts');
    	$this->assertEquals(200, $response->getStatusCode());
    }
    public function testShow(){
    	$response = $this->call('GET', 'api/posts/2');
    	$this->assertEquals(200, $response->getStatusCode());
    }
    public function testEdit(){
    	$response = $this->call('PUT', 'api/posts/2');
    	$this->assertEquals(200, $response->getStatusCode());
    }
}
