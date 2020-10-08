<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use PDF;

class ReportTest extends TestCase
{
    /** @test */
    public function check_if_user_report_is_printed()
    {
        PDF::fake();
        $this->get('/userRep');
        PDF::assertViewIs('Reports.users');
    }

    /** @test */
    public function check_if_farmer_report_is_printed()
    {
        PDF::fake();
        $this->get('/farmerRep');
        PDF::assertViewIs('Reports.farmers');
    }

    /** @test */
    public function check_if_crop_report_is_printed()
    {
        PDF::fake();
        $this->get('/cropRep');
        PDF::assertViewIs('Reports.crops');
    }
}
