<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Profile;
use App\Models\Product;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'mobile',
        'active',
        'provider',
        'provider_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    #################### Begin Scop ###########################
    /**
     * scopeActive
     * this a global scope to show an active user on the store with Method (where ('active', 1))
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
     * scopeSelection
     *
     * @param  mixed $query
     * @return void
     */
    public function scopeSelection($query)
    {

        return $query->select('id','name', 'email','mobile','provider','created_at', 'active');
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
    #################### End Scopp  ###########################
    /**
     * avatar
     *
     * @return void
     */
    public function avatar()
    {
        return $this -> hasOne(Profile::class,'user_id','id');
    }

    /**
     * avatar
     *
     * @return void
     */
    public function products()
    {
        return $this -> hasMany(Product::class,'user_id','id');
    }

}
