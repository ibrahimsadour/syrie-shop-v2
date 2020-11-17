<?php

namespace App\Models;
use Astrotomic\Translatable\Translatable;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;

    protected $table = 'images';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['product_id','photo','created_at','updated_at'];

    /**
     * kilometer_vehicles
     *
     * @return void
     */
    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    } 

}
