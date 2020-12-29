<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MainCategory;
use App\Models\SubCategory;
use App\Models\Tag;
use App\Models\User;
use App\Models\Brands;
use App\Models\Vendor;
use App\Models\ProductImages;
use App\Models\Product_price;
use App\Models\ProductStatus;
use App\Models\ProductInfo;
use App\Models\ProductAttribut;
class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'id ','translation_lang','translation_of','user_id',
        'vendor_id','brand_id','category_id','sub_category_id',
        'active','created_at','updated_at'
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
     * getSold
     * @todo this just to display on the website instead of the number text set
     * @return void
     */
    public function getSold()
    {
        $not_slod = __('admin/index.not slod');
        $slod = __('admin/index.slod');
        $value=  $this->product_status->sales_status ?? '';
        return $value === 1 ? $not_slod  : $slod;

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
        'id','translation_lang','translation_of','user_id','active',
        'vendor_id','brand_id','category_id','sub_category_id','created_at','updated_at');
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
     * sub_categories
     *
     * @return void
     */
    public function sub_categories()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id', 'id');
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
     * user
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    /**
     * images
     *
     * @return void
     */
    public function images()
    {
        return $this -> hasMany(ProductImages::class,'product_id','id');
    } 
    /**
     * price
     *
     * @return void
     */
    public function product_price()
    {
        return $this -> hasOne(Product_price::class,'product_id','id');
    } 
    /**
     * status
     *
     * @return void
     */
    public function product_status()
    {
        return $this -> hasOne(ProductStatus::class,'product_id','id');
    }  
    /**
     * info
     *
     * @return void
     */
    public function product_info()
    {
        return $this -> hasOne(ProductInfo::class,'product_id','id');
    }
    /**
     * Attribut
     *
     * @return void
     */
    public function product_attribut()
    {
        return $this -> hasOne(ProductAttribut::class,'product_id','id');
    }  
    ######################### End relationship  ########################

}
