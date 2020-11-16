<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MainCategory;
use App\Models\Tag;
use App\Models\Brands;
use App\Models\Vendor;
use App\Models\Kilometer_vehicle;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'id ','translation_lang','translation_of',
        'vendor_id','brand_id','category_id','name','slug',
        'photo','description','active','price',
        'viewed','sales_status','created_at','updated_at'
    ];

    public $timestamps = true;

    /**
     * scopeActive
     * this a global scope to show an active product or store with Method (where ('active', 1))
     * @todo 1 => it is active
     * @todo 0 => it is not active
     * @param  mixed $query
     * @return void
     */
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
    /**
     * getActive
     * @todo this just to display on the website instead of the number text set
     * @return void
     */
    public function getActive()
    {
        $inactive = __('admin/index.inactive');
        $active = __('admin/index.active');
        return $this->active === 1 ? $active  : $inactive;

    }

    /**
     * scopeSales_status
     * this a global scope to show all product that not sold on store with Method (where ('sales_status', 1))
     * @todo 1 => it is not sold
     * @todo 0 => it is sold
     * @param  mixed $query
     * @return void
     */
    public function scopeSales_status($query)
    {
        return $query->where('sales_status', 1);
    }
    /**
     * getSold
     * @todo this just to display on the website instead of the number text set
     * @return void
     */
    public function getSold()
    {
        $not_slod = __('admin/index.not slod');
        $slod = __('admin/index.slod');
        return $this->sales_status === 1 ? $not_slod  : $slod;

    }

    /**
     * scopeSelection
     * select all items of the table products with this method
     * @param  mixed $query
     * @return void
     */
    public function scopeSelection($query)
    {
        return $query->select(
        'id','translation_lang','translation_of',
        'vendor_id','brand_id','category_id','name','slug',
        'photo','description','active','price',
        'viewed','sales_status','created_at','updated_at');
    }

    /**
     * @todo getPhotoAttribute
     * @todo that is made with standard method (asset)
     * @todo whene you get Photo from database (automacly added http://dominName/ecommerce/assets/)
     * @param  mixed $val
     * @return void
     */
    public function getPhotoAttribute($val)
    {
        return ($val !== null) ? asset('assets/' . $val) : "";

    }

    /**
     * scopeDefaultCategory
     * with this function get just the default Lang
     * @param  mixed $query
     * @return void
     */
    public function scopeDefaultProducts($query){
        return  $query -> where('translation_of',0);
    }

    ######################### Begin relationship ########################  
    /**
     * products
     *  get all translation products
     * @return void
     */
    public function products()
    {
        return $this->hasMany(self::class, 'translation_of');
    }    
    /**
     * category
     *
     * @return void
     */
    public function categories()
    {
        return $this->belongsTo(MainCategory::class, 'category_id', 'id');
    }
    /**
     * Brands
     *
     * @return void
     */
    public function brands()
    {
        return $this->belongsTo(Brands::class, 'brand_id', 'id');
    }
    /**
     * vendors
     *
     * @return void
     */
    public function vendors()
    {
        return $this->belongsTo(Vendor::class, 'vendor_id', 'id');
    }
    /**
     * tags
     *
     * @return void
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'product_tag');
    }

    /**
     * kilometer_vehicles
     *
     * @return void
     */
    public function kilometer_vehicles()
    {
        return $this->belongsTo(Kilometer_vehicle::class, 'product_id', 'id');
    } 
    ######################### End relationship  ########################

}
