<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\MainCategory;
use App\Models\SubCategory;
class Kilometer_vehicle extends Model
{
    use HasFactory;


    
    protected $table = 'kilometer_vehicles';

    protected $fillable = [
        'id ','product_id','sub_categories_id', 'kilometer','active','created_at','updated_at'
    ];

    public $timestamps = true;

    // deze een globaal scope om een active product of winkel te laat zien with Methode(where('active',1)) 
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
        
    /**
     * scopeSelection
     *
     * @param  mixed $query
     * @return void
     */
    public function scopeSelection($query)
    {

        return $query->select('id', 'product_id', 'sub_categories_id', 'kilometer', 'active');
    }
        
    /**
     * getActive
     *
     * @return void
     */
    public function getActive()
    {
        $inactive = __('admin/index.inactive');
        $active = __('admin/index.active');
        return $this->active == 1 ? $active  : $inactive;
    }

    public  function subCategories(){
        return $this -> hasMany(SubCategory::class,'sub_categories_id','id');
    }

    public  function products(){
        return $this -> hasMany(Product::class,'product_id','id');
    }
}
