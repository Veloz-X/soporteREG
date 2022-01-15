<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\SocialAccount;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = "/my_account";

    protected function authenticated(Request $request, $user)
    {

        if ( $user->isEmployee() ) {
            return redirect(route('dashboard'));
        }

        return redirect(route('my_account'));
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function loggedOut(Request $request) {
        return redirect('/login');
    }

    /**
     * Redirect the user to the provider authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from provider.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {
        
        Socialite::driver($provider)->stateless();
        
        try{
            $socialAccount = Socialite::driver($provider)->user();
        }catch(\Exception $e){
            return redirect()->to('/login')->withErrors([__('auth.social_login_failed'), 'Details : '. $e->getMessage()]);
        }
        
        $socialAccountId = $socialAccount->getId();
        $socialAccountEmail = $socialAccount->getEmail();
        $socialAccountName = $socialAccount->getName() ? $socialAccount->getName() : $socialAccount->getNickname();
        $socialAccountAvatar = $socialAccount->getAvatar();
        
        // check user social account exists
        $userSocialAccount = SocialAccount::where('provider_user_id', $socialAccountId)->where('email', $socialAccountEmail)->first();
        
        if(!$userSocialAccount){
            
            // Is User already exists redirect to login page with error
            if (User::where('email', $socialAccountEmail)->exists()) {
                return redirect()->to('/login')->withErrors([__('auth.user_already_exists', ['email' => $socialAccountEmail])]);
            }

            // Create new user account
            $user = new User;
            $user->name = $socialAccountName;
            $user->email = $socialAccountEmail;

            // upload User avatar if exists
            // if($socialAccountAvatar){
            //     $contents = file_get_contents($socialAccountAvatar);
            //     $filename = md5(uniqid()).'_'.substr($socialAccountAvatar, strrpos($socialAccountAvatar, '/') + 1);
            //     $uploadedFile = Storage::disk("avatar")->put($filename, $contents);
            //     $user->avatar = Storage::disk("avatar")->url($filename); 
            // }
            
            $user->avatar = $socialAccountAvatar; 

            $user->email_verified_at = date('d-m-Y H:i:s');

            // Temporary password
            $user->password = Hash::make(uniqid());
            $user->save();
            $user->assignRole('customer');

            // Attached the social account to the user acccount 
            $userSocialAccount = new SocialAccount;
            $userSocialAccount->provider = $provider;
            $userSocialAccount->provider_user_id  = $socialAccountId;
            $userSocialAccount->name = $socialAccountName;
            $userSocialAccount->email = $socialAccountEmail;
            $userSocialAccount->avatar = $socialAccountAvatar;
            $userSocialAccount->access_token = $socialAccount->token;
            $userSocialAccount->refresh_token = $socialAccount->refreshToken;
            $userSocialAccount->expires_in = $socialAccount->expiresIn;
            $userSocialAccount->provider_username = $socialAccount->getNickname();

            $user->SocialAccounts()->save($userSocialAccount);

        }else{

            // update social account
            $userSocialAccount->name = $socialAccountName;
            $userSocialAccount->email = $socialAccountEmail;
            $userSocialAccount->avatar = $socialAccountAvatar;
            $userSocialAccount->access_token = $socialAccount->token;
            $userSocialAccount->refresh_token = $socialAccount->refreshToken;
            $userSocialAccount->expires_in = $socialAccount->expiresIn;
            $userSocialAccount->provider_username = $socialAccount->getNickname();
            
            $userSocialAccount->save();

            $user = $userSocialAccount->user;
        }

        $this->guard('web')->login($user, true);
  
        if ( $user->isEmployee() ) {
            return redirect(route('dashboard'));
        }

        return redirect(route('my_account'));

    }
}
