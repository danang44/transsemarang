<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Carbon\Carbon;
use App\User;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

   

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
{
    // dd($user);
    if ($user->role =='99') {
       return redirect()->route('home');
   } elseif ($user->role=='2'){
       return redirect()->route('/');
   }else{
       return redirect()->route('/');
   }
   
    $user->forceFill([
        'last_login_at' => Carbon::now()->toDateTimeString(),
        'last_login_ip' => $request->getClientIp()
    ])->save();

}

public function redirectToProvider()
{
    return Socialite::driver('google')->redirect();
}


//tambahkan script di bawah ini 
public function handleProviderCallback(Request $request)
{
    try {
        $user_google    = Socialite::driver('google')->user();
        $user           = User::where('email', $user_google->getEmail())->first();

        //jika user ada maka langsung di redirect ke halaman home
        //jika user tidak ada maka simpan ke database
        //$user_google menyimpan data google account seperti email, foto, dsb

        if($user != null){
            \auth()->login($user, true);
            return redirect()->route('home');
        }else{
            $create = User::Create([
                'email'             => $user_google->getEmail(),
                'name'              => $user_google->getName(),
                'password'          => 0,
                'email_verified_at' => now()
            ]);
    
            
            \auth()->login($create, true);
            dd($create);
            return redirect()->route('welcome');
        }

    } catch (\Exception $e) {
        return redirect()->route('login');
    }


}


}
