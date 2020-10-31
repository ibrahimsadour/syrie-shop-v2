<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use App\Http\Requests\TagsRequest;
use DB;
use App\Models\Tag;
use Illuminate\Support\Str;

class TagsController extends Controller
{
    public function index()

    {
        // selection() deze methode is gemaakt in de Models 
        $default_lang = get_default_lang();
        $tags = Tag::where('translation_lang', $default_lang)
            ->selection()
            ->orderBy('id','DESC') -> paginate(PAGINATION_COUNT);
        // return $tags;
        return view('admin.tags.index', compact('tags'));
    }
    
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('admin.tags.create');
    }

    
    /**
     * store
     * @todo 1 - ik haal alle talen
     * @todo 2- taal splitsen op de basis van de (defult language)
     * @todo 3 - slaa eerste de (defult languag op
     * @todo 4 - slaa de rest van de talen op
     * @todo translation_lang (ar -en-nl-uk) enz..
     * @todo translation_of : de vertalen van de eeste toegoegd items
     * @example Bijvoorbeeld : in de form voeg ik de foto daarna de name in bepalde taal 
     * @example en de tweede naam is de vertaling van de eerste naam. 
     * 
     * @param  mixed $request
     * @return void
     */
    public function insert(TagsRequest $request)
    {

        try {

            /** @todo veranderen van object(array) naar collection with deze regel */
            $tags = collect($request->tag);

            // return 'hallo';

            $filter = $tags->filter(function ($value, $key) {
                return $value['abbr'] == get_default_lang();
            });

            /** @todo veranderen van object naar array */
            $default_tag = array_values($filter->all()) [0];

            DB::beginTransaction(); 
            
            /** 
            *@todo Deze gemaakt omdat meer dan insert proces heb in hier
            *@todo try {
            *@todo DB::beginTransaction();
            *@todo code hier
            *@todo DB::commit();
            *@todo } catch (\Exception $ex) {
            *@todo DB::rollback();
            *@todo }
            */

            $default_tag_id = Tag::insertGetId([
                'translation_lang' => $default_tag['abbr'],
                'translation_of' => 0,
                'name' => $default_tag['name'],
                'slug' => $default_tag['slug'],
            ]);
            
            // here is the second insert for the second lang
            $tagsLng = $tags->filter(function ($value, $key) {
                return $value['abbr'] != get_default_lang();
            });


            if (isset($tagsLng) && $tagsLng->count()) {

                $tagsLng_arr = [];
                foreach ($tagsLng as $tagLng) {
                    $tagsLng_arr[] = [
                        'translation_lang' => $tagLng['abbr'],
                        'translation_of' => $default_tag_id,
                        'name' => $tagLng['name'],
                        'slug' => $tagLng['slug'],
                    ];
                }

                Tag::insert($tagsLng_arr);
            }

            DB::commit();

            return redirect()->route('admin.tags')->with(['success' => 'تم الحفظ بنجاح']);

        } catch (\Exception $ex) {
            // return $ex;
            DB::rollback();
            return redirect()->route('admin.tags')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }


    public function edit($id)
    {
        //get specific categories and its translations
        $tags = Tag::Selection()->find($id);

        if (!$tags)
            return redirect()->route('admin.tags')->with(['error' => 'هذا القسم غير موجود ']);

        return view('admin.tags.edit', compact('tags'));
    }

    
    /**
     * update
     * @todo validation => TagsRequest
     * @param  mixed $id
     * @param  mixed $request
     * @return void
     */
    public function update($id, TagsRequest $request)
    {
            
        try {
            /** @todo find tags*/
            $tags = Tag::find($id);

            if (!$tags)
                return redirect()->route('admin.tags')->with(['error' => 'هذا القسم غير موجود ']);

            // update date
            $alltags = array_values($request->tag) [0];
            // return $alltags;
            // return $request->category_id;

            if (!$request->has('tag.0.active'))
                $request->request->add(['active' => 0]);
            else
                $request->request->add(['active' => 1]);


            Tag::where('id', $id)
                ->update([
                    'name' => $alltags['name'],
                    'slug' => $alltags['slug'],
                    'active' => $request->active,
                ]);

            // save image

            if ($request->has('photo')) {
                $filePath = uploadImage('tags', $request->photo);
                Tag::where('id', $id)
                    ->update([
                        'photo' => $filePath,
                    ]);
            }


            return redirect()->route('admin.tags')->with(['success' => 'تم ألتحديث بنجاح']);

        } catch (\Exception $ex) {
            // return $ex;
            return redirect()->route('admin.tags')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }


    public function destroy($id)
    {

        try {
            $tags = Tag::find($id);
            if (!$tags)
                return redirect()->route('admin.tags')->with(['error' => 'هذا القسم غير موجود ']);

            #Delet all translation of the categories
            $tags -> tags() -> delete();
        
            #delet section
            $tags->delete();

            return redirect()->route('admin.tags')->with(['success' => 'تم حذف القسم بنجاح']);

        } catch (\Exception $ex) {
            // return $ex;
            return redirect()->route('admin.tags')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    public function changeStatus($id)
    {
        try {
            $tags = Tag::find($id);
            if (!$tags)
                return redirect()->route('admin.tags')->with(['error' => 'هذا القسم غير موجود ']);

           $status =  $tags -> active  == 0 ? 1 : 0;

           $tags -> update(['active' =>$status ]);

            return redirect()->route('admin.tags')->with(['success' => ' تم تغيير الحالة بنجاح ']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.tags')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

}