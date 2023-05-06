<?php

namespace Tests\Browser;
 
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Laravel\Dusk\Chrome;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    use DatabaseMigrations;
 
    /**
     * Unit Test for Register with 2FA
     * @group login
     */

    public function test_register_new_user_with_2fa()
    {
        $user = User::factory()->make();


        $this->browse(function (Browser $browser) use ($user) {
            $browser->visit('/register')
                ->type('name', $user->name)
                ->type('email', $user->email)
                ->type('password', 'password')
                ->type('password_confirmation', 'password')
                ->press('Register')
                ->waitForLocation('/register')
                ->clickLink('Complete Registration')
                ->waitForLocation('/home')
                ->type('one_time_password', app('pragmarx.google2fa')->getCurrentOtp($user->google2fa_secret))
                ->press('Login')
		        ->assertPathIs('/email/verify')
                ->pause(3000);

            $browser->logout();
        });
        
        dump($user->google2fa_secret);
    }
}
