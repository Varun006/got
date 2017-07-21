<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function redirectToProviderTwitter()
    {
        return Socialite::driver('twitter')->redirect();
    }

    public function handleProviderCallbackTwitter()
    {
        $user = Socialite::driver('twitter')->user();

        $userDetails = User::where(['provider_id' => $user->id , 'provider' => 'twitter'])->first();

        if(! $userDetails) {
            $newUser = User::create(['name' => $user->name,
                'email' => $user->email,
                'provider' => 'twitter',
                'provider_id' => $user->id]);

            Auth::loginUsingId($newUser->id);
        } else {
            Auth::loginUsingId($userDetails->id);
        }

        return redirect()->intended('/twist');

    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();

        $userDetails = User::where(['provider_id' => $user->id , 'provider' => 'facebook'])->first();

        if(! $userDetails) {
            $newUser = User::create(['name' => $user->name,
                'email' => $user->email,
                'provider' => 'facebook',
                'provider_id' => $user->id]);

            Auth::loginUsingId($newUser->id);
        } else {
            Auth::loginUsingId($userDetails->id);
        }

        return redirect()->intended('/twist');
    }
}
