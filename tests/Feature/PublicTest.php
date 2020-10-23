<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PublicTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
    * @test
    */
    public function unregistered_user_can_access_the_all_main_crops_public_page(){
        $response = $this->get('cropInformation');
        $response->assertOk();
    }//end of test

    /**
    * @test
    */
    public function unregistered_users_can_access_the_main_crops_page(){
        $response = $this->get('/');
        $response->assertOk();
    }//end of test

} //end of class
