<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreate()
    {
        $response = $this->call('POST', 'api/users', array(
            'name' => 'thomas',
            'email' => 'emasfdail@email.com',
            'password' => 'pass',
            'profile_name' => 'name info',
            'bio' => 'bio', 
            'prefs' => '{}',
            'subscriptions' => '{}',
            'confirm_code' => 123
        ));

        $this->assertEquals(200, $response->getStatusCode());

    }

    public function testIndex(){
        $response = $this->call('GET', 'api/users');
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testShow(){
        $response = $this->call('GET', 'api/users/1');
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testEdit(){
        $response = $this->call('PUT', 'api/users/1');
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testDelete(){
        $response = $this->call('DELETE', 'api/users/1');
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testLogin(){
        $response = $this->call('POST', 'api/users/login', [
            'name' => 'goon',
            'password' => 'pass'
        ]);

        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testLogout(){

    }
}
