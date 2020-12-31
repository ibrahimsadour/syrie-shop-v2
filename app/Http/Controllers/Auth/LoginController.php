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
use App\Http\Requests\Front\LoginRequest;
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
    public function login (){
        return view('front.pages.auth.login');
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
            return redirect()->route('user.login')->with('error','يجب عليك تسجيل الدخول اولا');
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
            return redirect()->route('site.index')->with('success','نعم ! تم تسجيل الدخول بنجاح');
        }

        return redirect()->route('user.login')->with('error','خطأ في البريد الالكتروني او كلمة المرور');
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
        return redirect()->route('user.login')->with('success','نعم ! تم تسجيل الخروج بنجاح');
    }

    #################################################################
    ######### Login With Facebook - Google - Twitter -instegram #####
    /**
   * Redirect the user to the GitHub authentication page.
   *
   * @return \Illuminate\Http\Response
   */
  public function redirectToProvider($provider)
  {
      return Socialite::driver($provider)->redirect();
  }


  /**
   * Obtain the user information from Google.
   *
   * @return \Illuminate\Http\Response
   */
  public function handleProviderCallback($provider)

    {
        try{
            if($provider == 'google'){

                $user = Socialite::driver($provider)->stateless()->user();
                $userEmail  = $user->email;
                $userName = explode("@", $userEmail);
                $name=$userName[0];

            }else{
                $user = Socialite::driver($provider)->user();
                $name = $user->getName();
            }
            // dd($user);
            /**
             * If a user has registered before using social auth, return the user
             * else, create a new user object.
             * @param  $user Socialite user object
             * @param $provider Social auth provider
             * @return  User
             */
            $findUser= User::where('provider_id',$user->id)->first();
            // check if the not blokking
            $checkUser= User::where(['provider_id'=>$user->id])->first();
            if($checkUser){
                if($findUser){
                
                    Auth::login($findUser);
                    return redirect()->route('site.index')->with('success','نعم ! تم تسجيل الدخول بنجاح');
    
                }else{ //if the user not exist => we need to make new user
    
                    //add new user to database
                    $newUser = new User([
                    'email' => $user->getEmail(),
                    'name' => $name,
                    'active' => 1,
                    'provider'=>$provider,
                    'provider_id' => $user->id,
                    'password' => Hash::make('ibrahem810907') //or bcrypt();
                    ]);
    
                    if($newUser->save()){ //check if the crated or not
                        // login the user
                        Auth::login($newUser);
                        return redirect()->route('site.index')->with('success','نعم ! تم تسجيل الدخول بنجاح');
                    }else{
                        return redirect()->route('user.login')->with('error','هناك شئ خاطئ، يرجى المحاولة فى وقت لاحق');
                    }
                }
            }else{
                return redirect()->route('user.login')->with('error','نعتذر منك لقد تم حظر حسابك ');
            }

        } catch (\Exception $ex) {
            DB::rollback();
            // return $ex;
            return redirect()->route('user.login')->with('error','هناك شئ خاطئ، يرجى المحاولة فى وقت لاحق');
        }

    }
}
