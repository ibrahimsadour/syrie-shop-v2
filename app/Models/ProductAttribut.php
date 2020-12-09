<?php

namespace App\Models;
use App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttribut extends Model
{
    use HasFactory;
    protected $table = 'product_attributs';

    protected $fillable = [
        'id ','product_id ','kilometers','age','color','size','created_at','updated_at'
    ];    
    /**
     * products
     *
     * @return void
     */
    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
