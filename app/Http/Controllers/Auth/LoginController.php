<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Validator,Redirect,Response,Session;
use Illuminate\Http\Request;
Use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\DB;
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
    protected $redirectTo = RouteServiceProvider::USER;

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
     * my_account
     * @todo to show the login form
     * @return void
     */
    public function my_account (){
        return view('front.pages.auth.my-account');
    }

    /**
   * dashboard , check if the user allowd to see the dashboard
   *
   * @return void
   */
  public function dashboard()
    {
        if(Auth::check()){
            return view('home');
        }else{
            return redirect()->route('site.my-account')->withSuccess('يجب عليك تسجيل الدخول اولا');
        }

    }
    public function loginAttempt(Request $request)
    {
        request()->validate([
        'identify' => 'required',
        'password' => 'required',
        ]);

        $value = request() ->input('identify'); 

        $field = filter_var($value,FILTER_VALIDATE_EMAIL) ? 'email' : 'mobile'; 

        request() -> merge([$field => $value ]);
    
        $credentials = $request->only($field, 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/user/dashboard');
        }

        return redirect()->route('site.my-account')->withSuccess('خطأ في البريد الالكتروني او كلمة المرور');
    }

    /**
   * logout
   *
   * @return void
   */
  public function logout() 
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('site.my-account')->withSuccess('نعم ! تم تسجيل الخروج بنجاح');
    }
}
