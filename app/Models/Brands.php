<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MainCategory;
class Brands extends Model
{
    use HasFactory;


    
    protected $table = 'brands';

    protected $fillable = [
        'id ', 'translation_lang','translation_of','name','slug','photo','active','created_at','updated_at'
    ];

    public $timestamps = true;


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

    public function scopeDefaultBrands($query){
        return  $query -> where('translation_of',0);
    }

    ######################### Begin relationship ########################
    // get all translation brands
    public function brands()
    {
        return $this->hasMany(self::class, 'translation_of');
    }
    /**
     * Product
     * @todo get all products 
     * @return void
     */
    public  function products(){
        return $this -> hasMany(Product::class,'brand_id','id');
    }

    ######################### End relationship  ########################

 
}
