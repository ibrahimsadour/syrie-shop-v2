<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Observers\MainCategoryObserver;
use App\Models\SubCategory;
use App\Models\Brands;
use App\Models\Vendor;
class MainCategory extends Model
{
    use HasFactory;


    
    protected $table = 'main_categories';

    protected $fillable = [
        'id ', 'translation_lang','translation_of','name','slug','photo','active','created_at','updated_at'
    ];

    // deze is gemaakt om het alle verkoper uit te zitten wannner is de afdeling uitgezet

    protected static function boot()
    {
        parent::boot();
        MainCategory::observe(MainCategoryObserver::class);
    }

    // deze een globaal scope om een active product of winkel te laat zien with Methode(where('active',1)) 
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeSelection($query)
    {

        return $query->select('id', 'translation_lang', 'name', 'slug', 'photo', 'active', 'translation_of');
    }

    //whene you get Photo from database (automacly added http://dominName/ecommerce/assets/)
    //that is made with standard method (asset)
    public function getPhotoAttribute($val)
    {
        return ($val !== null) ? asset('assets/' . $val) : "";

    }

    public function getActive()
    {
        $inactive = __('admin/index.inactive');
        $active = __('admin/index.active');
        return $this->active == 1 ? $active  : $inactive;

    }

    public function scopeDefaultCategory($query){
        return  $query -> where('translation_of',0);
    }


    // get all translation categories
    public function categories()
    {
        return $this->hasMany(self::class, 'translation_of');
    }


    ######################### Begin relationship ########################
    /**
     * subCategories
     * @todo get all subCategories
     * @return void
     */
    public  function subCategories(){
        return $this -> hasMany(SubCategory::class,'category_id','id');
    }
    /**
     * vendors
     * @todo get all vendors 
     * @return void
     */
    public function vendors(){
        return $this -> hasMany(Vendor::class,'category_id','id');
    }
    /**
     * brands
     * @todo get all Brands 
     * @return void
     */
    public  function brands(){
        return $this -> hasMany(Brands::class,'category_id','id');
    }
    ######################### End relationship  ########################

}
