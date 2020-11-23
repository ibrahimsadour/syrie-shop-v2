<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';

    protected $fillable = [
        'id ','user_id ','birthday','avatar','gender','location','type','active','created_at','updated_at'
    ];

    /**
     * users
     *
     * @return void
     */
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id ', 'id');
    } 
}
