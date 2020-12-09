<?php

namespace App\Models;
use App\Models\ProductInfo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $table = 'locations';

    protected $fillable = [
        'id','name','slug','created_at','updated_at'
    ];


    // deze een globaal scope om een active product of winkel te laat zien with Methode(where('active',1)) 
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeSelection($query)
    {

        return $query->select('id','name', 'slug', 'active');
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
    public function productsInfo()
    {
        return $this->belongsTo(ProductInfo::class, 'location_id', 'id');
    }
}
