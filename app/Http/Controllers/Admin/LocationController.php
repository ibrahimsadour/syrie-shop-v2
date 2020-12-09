<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;
use App\Http\Requests\Admin\LocationRequest;
use DB;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::selection()->get();
        return view('admin.location.index', compact('locations'));
    }

    public function create()
    {
        return view('admin.location.create');
    }


    public function store(LocationRequest $request)
    {
        try {
            // return $request;
            $locations = Location::create([
                'name' => $request->name,
                'slug' => $request->slug,
                'active' => $request->active
            ]);
            if($locations){
                return redirect()->route('admin.location')->with(['success' => 'تم الحفظ بنجاح']);
            }
        } catch (\Exception $ex) {
            // return $ex;
            DB::rollback();
            return redirect()->route('admin.location')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }


    public function edit($location_id)
    {
        $locations = Location::selection()->find($location_id);
        if (!$locations){
            return redirect()->route('admin.location')->with(['error' => 'هذا المدينة غير موجود ']);
        }
        return view('admin.location.edit', compact('locations'));
    }


    public function update( LocationRequest $request , $location_id)
    {
        try {

            if (!$request->has('active'))
                $request->request->add(['active' => 0]);
            else
                $request->request->add(['active' => 1]);
            
            Location::where('id', $location_id)
            ->update([
                'name' => $request->name,
                'slug' => $request->slug,
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
            $locations = Location::find($id);
            if (!$locations)
                return redirect()->route('admin.location')->with(['error' => 'هذه المدينة غير موجود ']);


            #delet location
            $locations->delete();

            return redirect()->route('admin.location')->with(['success' => 'تم حذف المدينة بنجاح']);

        } catch (\Exception $ex) {
            // return $ex;
            return redirect()->route('admin.location')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    public function changeStatus($id)
    {
        try {
            $locations = Location::find($id);
            // return $locations;
            if (!$locations)
                return redirect()->route('admin.location')->with(['error' => 'هذا القسم غير موجود ']);

           $status =  $locations -> active  == 0 ? 1 : 0;
           Location::where('id', $id)->update(['active' =>$status]);
           

            return redirect()->route('admin.location')->with(['success' => ' تم تغيير الحالة بنجاح ']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.location')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

}

