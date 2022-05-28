<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(100)->create();
        // User::insert([
        //     'name'=>'Admin',
        //     'email'=>'admin@admin.com',
        //     'password'=>Hash::make('admin@admin.com'),
        // ]);
    }
}
