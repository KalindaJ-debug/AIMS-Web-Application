<?php

namespace Tests\Feature;

use App\Land;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Util\Test;
use Tests\TestCase;

class LandManagementTest extends TestCase
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

    //dummy land data
    private function land_data(){

        return([
            'fid' => '2',
            'addressNumber' => '113',
            'street' => '2nd Cross Street',
            'lane' => 'Abeyrathne Mawatha',
            'town' => 'Papiliyana',
            'city' => 'Kollonnawa',
            'grama' => '31',
            'district' => '4',
            'province' => '1',
            'postal' => '10290',
            'planNo' => '12345678',
            'hectares' => '223',

        ]); //return data array

    } //end of land_data function

    /**@test */
    public function only_registered_farmers_can_register_land_records(){

        $this->actingAs(factory(Land::class)->create());
        
        $response = $this->post('registration')->assertOk();

    }//end of test
    
}//end of class
