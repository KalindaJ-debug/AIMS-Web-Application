<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Support\Facades\Notification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
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

    private function data()
    {
        return [
            'name' => 'rishi',
            'lastname' => 'nanda',
            'username' => 'rishi',
            'email' => 'rsishi@gmail.com',
            'password' => 'pass',
        ];
    }
    /** @test */
    public function only_logged_in_users_can_access_admin_dash()
    {
        $response =  $this->get('/admindash')->assertRedirect('/login');

    }

    /** @test */
    public function logged_in_admin_can_see_admin_dash()
    {
        $this->actingAs(factory(User::class)->create()); 

        $response = $this->get('/admindash')->assertOk();
    }

    /** @test */
    public function logged_in_user_cannot_access_admin_dash()
    {
        $this->actingAs(factory(User::class)->create([
            'role' => 'AI',
        ]));

        $response = $this->get('/admindash')->assertRedirect('/home');
    }

    /** @test */
    public function unverified_admin_cannot_access_register()
    {
        $this->actingAs(factory(User::class)->create([
            'role' => 'Admin',
            'email_verified_at' => null,
        ]));

        $response = $this->get('/register')->assertRedirect('/email/verify');
    }

    /** @test */
    public function verified_user_can_register_user()
    {
        //$this->withoutExceptionHandling();
        $this->actingAs(factory(User::class)->make());

        $response = $this->post('register',$this->data());

        $this->assertCount(1, User::all() );

    }

    /** @test */
    public function name_is_required_when_registering()
    {
        $this->withoutExceptionHandling();
        $this->actingAs(factory(User::class)->make());

        $response = $this->post('register',array_merge($this->data(),['name' => '']));

        $this->assertCount(0, User::all());

    }

    /** @test */
    public function email_is_required_when_registering()
    {
        $this->withoutExceptionHandling();
        $this->actingAs(factory(User::class)->make());

        $response = $this->post('register',array_merge($this->data(),['email' => '']));

        $this->assertCount(0, User::all());

    }

    /** @test */
    public function username_is_required_when_registering()
    {
        $this->withoutExceptionHandling();
        $this->actingAs(factory(User::class)->make());

        $response = $this->post('register',array_merge($this->data(),['username' => '']));

        $this->assertCount(0, User::all());

    }

    /** @test */
    public function user_can_access_login()
    {
        $response = $this->get('/login');

        $response->assertSuccessful();
        $response->assertViewIs('auth.login');
    }
    
    /** @test */
    public function normal_user_can_login_with_right_credentials()
    {
        
        $user = factory(User::class)->create([
            'password' => bcrypt($password = 'password'),
            'role' => 'AI',
        ]);

        $response = $this->post('/login', [
            'username' => $user->username,
            'password' => $password,
        ]);

        $response->assertRedirect('/home');
        $this->assertAuthenticatedAs($user);
    }

    /** @test */
    public function admin_is_redirected_to_dashboard_after_login()
    {
        
        $user = factory(User::class)->create([
            'password' => bcrypt($password = 'password'),
            'role' => 'Admin',
        ]);

        $response = $this->post('/login', [
            'username' => $user->username,
            'password' => $password,
        ]);

        $response->assertRedirect('/admindash');
        $this->assertAuthenticatedAs($user);
    }

    public function user_receives_an_email_with_a_password_reset_link()
    {
        Notification::fake();
      
        $user = factory(User::class)->create();
      
        $response = $this->post('/password/email', [
            'email' => $user->email,
        ]);

    }
}

