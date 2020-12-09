<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\LoginRequest;
use DB;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::selection()->orderBy('id', 'DESC')->get();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }


    public function store(LoginRequest $request)
    {
        try {
            // return $request;

            $users = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'password' =>Hash::make($request->password),
                'active' => 1
            ]);
            if($users){
                return redirect()->route('admin.users')->with(['success' => 'تم انشاء الحساب بنجاح']);
            }
        } catch (\Exception $ex) {
            // return $ex;
            DB::rollback();
            return redirect()->route('admin.users')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function edit($user_id)
    {
        $users = User::selection()->find($user_id);
        if (!$users){
            return redirect()->route('admin.users')->with(['error' => 'هذا المدينة غير موجود ']);
        }
        return view('admin.users.edit', compact('users'));
    }


    public function update( LoginRequest $request , $user_id)
    {
        try {

            if (!$request->has('active'))
                $request->request->add(['active' => 0]);
            else
                $request->request->add(['active' => 1]);
            
            Location::where('id', $user_id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'active' => $request->active,
            ]);

            return redirect()->route('admin.location')->with(['success' => 'تم ألتحديث بنجاح']);
        }catch (\Exception $ex){

            return redirect()->route('admin.location')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }


    public function destroy($id)
    {

        try {
            
            $users = User::find($id);
            if (!$users)
                return redirect()->route('admin.users')->with(['error' => 'هذه المستخدم غير موجود ']);

            #delet user
            $users->delete();

            return redirect()->route('admin.users')->with(['success' => 'تم حذف المستخدم بنجاح']);

        } catch (\Exception $ex) {
            // return $ex;
            return redirect()->route('admin.user')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    public function changeStatus($id)
    {
        try {
            $users = User::find($id);
            // return $locations;
            if (!$users)
                return redirect()->route('admin.users')->with(['error' => 'هذا المستخدم غير موجود ']);

           $status =  $users -> active  == 0 ? 1 : 0;
           User::where('id', $id)->update(['active' =>$status]);
           

            return redirect()->route('admin.users')->with(['success' => ' تم تغيير الحالة بنجاح ']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.users')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }
}
