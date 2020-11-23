<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User;
        $admin ->name ="Ibrahim Sadour";
        $admin ->email ="i.m.s.1995@hotmail.com";
        $admin ->password = Hash::make('ibrahem810907');
        $admin -> save();
    }
}
