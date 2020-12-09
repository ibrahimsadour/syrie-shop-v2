<?php

namespace App\Models;
use App\Models\Product;
use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductInfo extends Model
{
    use HasFactory;

    protected $table = 'product_infos';

    protected $fillable = [
        'id ','product_id ','location_id','name','slug','description','created_at','updated_at'
    ];
    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    public function location()
    {
        return $this->hasOne(Location::class, 'location_id', 'id');
    }
}
