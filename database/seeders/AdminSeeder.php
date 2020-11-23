<?php

namespace Database\Seeders;
use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin;
        $admin ->name ="Ibrahim Sadour";
        $admin ->email ="i.m.s.1995@hotmail.com";
        $admin ->password = Hash::make('ibrahem810907');
        $admin -> save();
    }
}
