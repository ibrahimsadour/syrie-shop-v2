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
use App\Http\Requests\Front\EditProfileControllerRequest;

class EditProfileController extends Controller
{

    use AuthenticatesUsers;


    /**
     * Create a new controller instance.
     * @todo If user is not logged in then he can't access this page
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    

    /**
     * edit
     * @todo to show the edit form profile
     * @return void
     */
    public function edit(){
        $users = User::find(Auth::user()->id);
        if (!$users){
            return redirect()->route('site.index')->with(['error' => 'هذا المستخدم غير موجود']);
        }

        return view('front.pages.auth.edit_profile',compact('users'));
    }

    public function updateProfile($id, Request $request)
    {
        try {
            $this->validate($request,[
                'name' => 'required',
                'mobile' => 'required',
            ]);
            
            // return $request ;
            $user = User::find($id);
            // check the current user
            if (!$user)
            return redirect()->route('site.index')->with(['error' => 'هذا المستخدم غير موجود']);


            $user->name = $request->get('name');
            $user->mobile = $request->get('mobile');
            $user->save();
    
            return redirect()->back()->with("success"," تم التحديث بنجاح!");



        } catch (\Exception $ex) {
            // return $ex;
            DB::rollback();
            return redirect()->route('site.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    /**
     * edit
     * @todo to show the edit form profile
     * @return void
     */
    public function editPassword(){
        $users = User::find(Auth::user()->id);
        if (!$users){
            return redirect()->route('site.index')->with(['error' => 'هذا المستخدم غير موجود']);
        }

        return view('front.pages.auth.edit_password',compact('users'));
    }
    

    public function updatePassword($id, EditProfileControllerRequest $request)
    {
        try {

            $user = User::find($id);
            // check the current user
            if (!$user)
            return redirect()->route('site.index')->with(['error' => 'هذا المستخدم غير موجود']);


            // upate password
            if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
                // The passwords matches
                return redirect()->back()->with("error","كلمة المرور الحالية لا تتطابق مع كلمة المرور التي قدمتها. حاول مرة اخرى.");
            }
    
            if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
                //Current password and new password are same
                return redirect()->back()->with("error","لا يمكن أن تكون كلمة المرور الجديدة هي نفسها كلمة مرورك الحالية. الرجاء اختيار كلمة مرور مختلفة.");
            }
    
            //Change Password
            $user = Auth::user();
            $user->password = bcrypt($request->get('new-password'));
            $user->save();
    
            return redirect()->back()->with("success"," تم التحديث بنجاح!");



        } catch (\Exception $ex) {
            // return $ex;
            DB::rollback();
            return redirect()->route('site.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

}
