<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use App\Http\Requests\BrandsRequest;
use DB;
use App\Models\Brands;
use Illuminate\Support\Str;
use App\Models\MainCategory;
use App\Models\SubCategory;
class BrandsController extends Controller
{
    public function index()

    {
        // selection() deze methode is gemaakt in de Models 
        $default_lang = get_default_lang();
        $brands = Brands::where('translation_lang', $default_lang)
            ->selection()
            ->orderBy('id','DESC') -> paginate(PAGINATION_COUNT);
        // return $brands;
        return view('admin.brands.index', compact('brands'));
    }

    public function create()
    {
        $default_lang = get_default_lang();
        return view('admin.brands.create'   );
    }


    public function store(BrandsRequest $request)
    {

        try {

            //  veranderen van object(array) naar collection with deze regel
            $brands = collect($request->brand);

            // return $brands;


            /*
            1 - ik haal alle talen
            2- taal splitsen op de basis van de (defult language)
            3 - slaa eerste de (defult languag op)
            4 - slaa de rest van de talen op
            translation_lang (ar -en-nl-uk) enz..
            translation_of : de vertalen van de eeste toegoegd items
            
            Bijvoorbeeld : in de form voeg ik de foto daarna de name in bepalde taal 
            en de tweede naam is de vertaling van de eerste naam.
            */
            $filter = $brands->filter(function ($value, $key) {
                return $value['abbr'] == get_default_lang();
            });

            // veranderen van object naar array
            $default_brand = array_values($filter->all()) [0];


            $filePath = "";
            if ($request->has('photo')) {

                $filePath = uploadImage('brands', $request->photo);
            }

            DB::beginTransaction(); 
            
            //Deze gemaakt omdat meer dan insert proces heb in hier
            ### try {
            ### DB::beginTransaction();
            ### code hier
            ### DB::commit();
            ### } catch (\Exception $ex) {
            ### DB::rollback();
            ### }


            $default_brand_id = Brands::insertGetId([
                'translation_lang' => $default_brand['abbr'],
                'translation_of' => 0,
                'name' => $default_brand['name'],
                'slug' => $default_brand['slug'],
                'photo' => $filePath
            ]);
            
            // here is the second insert for the second lang
            $brandsLng = $brands->filter(function ($value, $key) {
                return $value['abbr'] != get_default_lang();
            });


            if (isset($brandsLng) && $brandsLng->count()) {

                $brandsLng_arr = [];
                foreach ($brandsLng as $brandLng) {
                    $brandsLng_arr[] = [
                        'translation_lang' => $brandLng['abbr'],
                        'translation_of' => $default_brand_id,
                        'name' => $brandLng['name'],
                        'slug' => $brandLng['slug'],
                        'photo' => $filePath
                    ];
                }

                Brands::insert($brandsLng_arr);
            }

            DB::commit();

            return redirect()->route('admin.brands')->with(['success' => 'تم الحفظ بنجاح']);

        } catch (\Exception $ex) {
            return $ex;
            DB::rollback();
            return redirect()->route('admin.brands')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }


    public function edit($id)
    {
        //get specific categories and its translations
        $brands = Brands::Selection()->find($id);

        if (!$brands)
            return redirect()->route('admin.brands')->with(['error' => 'هذا القسم غير موجود ']);

        return view('admin.brands.edit', compact('brands'));
    }


    public function update($id, BrandsRequest $request)
    {
            //validation => BrandsRequest



        try {
            //find main
            $brands = Brands::find($id);

            if (!$brands)
                return redirect()->route('admin.brands')->with(['error' => 'هذا القسم غير موجود ']);

            // update date
            $allBrands = array_values($request->brand) [0];
            // return $allBrands;
            // return $request->category_id;

            if (!$request->has('brand.0.active'))
                $request->request->add(['active' => 0]);
            else
                $request->request->add(['active' => 1]);


            Brands::where('id', $id)
                ->update([
                    'name' => $allBrands['name'],
                    'slug' => $allBrands['slug'],
                    'active' => $request->active,
                ]);

            // save image

            if ($request->has('photo')) {
                $filePath = uploadImage('brands', $request->photo);
                Brands::where('id', $id)
                    ->update([
                        'photo' => $filePath,
                    ]);
            }


            return redirect()->route('admin.brands')->with(['success' => 'تم ألتحديث بنجاح']);

        } catch (\Exception $ex) {
            // return $ex;
            return redirect()->route('admin.brands')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }


    public function destroy($id)
    {

        try {
            $brands = Brands::find($id);
            if (!$brands)
                return redirect()->route('admin.brands')->with(['error' => 'هذا القسم غير موجود ']);


            ## Delet image
            ##Srt is cutting helper method
            $image = Str::after($brands->photo, 'assets/');
            $image = public_path('assets/' . $image);
            unlink($image); //delete from folder

            #Delet all translation of the categories
            $brands -> brands() -> delete();
        
            #delet section
            $brands->delete();

            return redirect()->route('admin.brands')->with(['success' => 'تم حذف القسم بنجاح']);

        } catch (\Exception $ex) {
            // return $ex;
            return redirect()->route('admin.brands')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    public function changeStatus($id)
    {
        try {
            $brands = Brands::find($id);
            if (!$brands)
                return redirect()->route('admin.brands')->with(['error' => 'هذا القسم غير موجود ']);

           $status =  $brands -> active  == 0 ? 1 : 0;

           $brands -> update(['active' =>$status ]);

            return redirect()->route('admin.brands')->with(['success' => ' تم تغيير الحالة بنجاح ']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.brands')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

}