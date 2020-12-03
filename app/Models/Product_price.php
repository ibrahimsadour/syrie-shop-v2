<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Product_price extends Model
{
    use HasFactory;

    protected $table = 'product_price';

    protected $fillable = [
        'id ','product_id ','type_price',
        'price','sale_price','active','created_at','updated_at'
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

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    ######################### End relationship  ########################

}
