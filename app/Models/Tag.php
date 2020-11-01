<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Tag extends Model
{
    use HasFactory;


    
    protected $table = 'tags';

    protected $fillable = [
        'id ', 'translation_lang','translation_of','name','slug','active','created_at','updated_at'
    ];

    public $timestamps = true;


    // deze een globaal scope om een active product of winkel te laat zien with Methode(where('active',1)) 
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeSelection($query)
    {

        return $query->select('id', 'translation_lang', 'name', 'slug', 'active', 'translation_of');
    }

    public function getActive()
    {
        $inactive = __('admin/index.inactive');
        $active = __('admin/index.active');
        return $this->active == 1 ? $active  : $inactive;

    }

    public function scopeDefaultTags($query){
        return  $query -> where('translation_of',0);
    }

    ######################### Begin relationship ########################
    /**
     * tags
     * get all translation tags 
     * @return void
     */
    public function tags()
    {
        return $this->hasMany(self::class, 'translation_of');
    }
    /**
     * Product
     * @todo get all products 
     * @return void
     */
    public function products(){
        return $this -> hasMany(Product::class,'product_tag');
    }
    ######################### End relationship  ########################
}
