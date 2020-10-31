<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;


    
    protected $table = 'tags';

    protected $fillable = [
        'id ', 'translation_lang','translation_of','name','slug','active','created_at','updated_at'
    ];

 

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
    // get all translation tags
    public function tags()
    {
        return $this->hasMany(self::class, 'translation_of');
    }

    ######################### End relationship  ########################
}
