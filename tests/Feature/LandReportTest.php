<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Land;
use App\User;

class LandReportTest extends TestCase
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
    } //end of test example

    /**@test */
    public function view_farmer_land_details_to_export_land_data_to_pdf(){

        $this->actingAs(factory(User::class)->create()); //logged in user

        $response = $this->get('exportAllLandRecordsPDF'); //no farmer id passed
        $response->assertStatus(404);

    }//end of test methods

    /**@test */
    public function view_single_land_record_to_export_a_single_land_record_to_pdf(){
        
        $this->actingAs(factory(User::class)->create()); //logged in user

        $response = $this->get('exportLandPDF');
        $response->assertStatus(404); //no land id passed

    }//end of test method

    /**@test */
    public function land_details_are_accessed_when_exporting_all_land_records_to_pdf(){
        
        $this->actingAs(factory(User::class)->create()); //logged in user
        $land = $this->land_data;
        $response = $this->get('exportAllLandRecordsPDF', $land->fid);
        $response->assertStatus(200);

    }//end of test method

    /**@test */
    public function single_land_records_exported_after_accessing_land_record(){
        $this->actingAs(factory(User::class)->create());
        $land = $this->land_data();
        $response = $this->get('exportLandPDF', $land);
        $response->assertStatus(200);

    } //end of method

     //dummy land data
     public function land_data(){

        return([ 
            'id' => '1',
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

} //end of test class
