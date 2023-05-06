<?php
 
namespace Tests\Browser;
 
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Laravel\Dusk\Chrome;
use Tests\DuskTestCase;
 
class LoginTest extends DuskTestCase
{
    use DatabaseMigrations;
 
    /**
     * Unit Test for Login with 2FA
     * @group login
     */

    // public function test_success_login_with_2fa()
    // {
    //     $user = User::factory()->create([
    //         'google2fa_secret' => app('pragmarx.google2fa')->generateSecretKey(),
    //     ]);

    //     $this->browse(function (Browser $browser) use ($user) {
    //         $browser->visit('/login')
    //             ->type('email', $user->email)
    //             ->type('password', 'password')
    //             ->press('Login')
    //             ->waitForLocation('/home')
    //             ->type('one_time_password', app('pragmarx.google2fa')->getCurrentOtp($user->google2fa_secret))
    //             ->press('Login')
    //             ->assertPathIs('/home')
    //             ->pause(3000);

    //         $browser->logout();
    //     });
    // }

    // public function test_login_with_wrong_password()
    // {
    //     $user = User::factory()->create([
    //         'google2fa_secret' => app('pragmarx.google2fa')->generateSecretKey(),
    //     ]);

    //     $this->browse(function (Browser $browser) use ($user) {
    //         $browser->visit('/login')
    //             ->type('email', $user->email)
    //             ->type('password', 'pass')
    //             ->press('Login')
    //             ->assertPathIs('/login')
    //             ->assertSee('These credentials do not match our records.')
    //             ->pause(3000);
    //     });
    // }

    // public function test_login_with_wrong_user_and_password()
    // {
    //     $user = User::factory()->make([
    //         'google2fa_secret' => app('pragmarx.google2fa')->generateSecretKey(),
    //     ]);

    //     $this->browse(function (Browser $browser) use ($user) {
    //         $browser->visit('/login')
    //             ->type('email', $user->email)
    //             ->type('password', 'password')
    //             ->press('Login')
    //             ->assertPathIs('/login')
    //             ->assertSee('These credentials do not match our records.')
    //             ->pause(3000);
    //     });
    // }
}