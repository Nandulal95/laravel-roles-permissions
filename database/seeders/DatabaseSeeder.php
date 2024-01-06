<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         Admin::factory()->create([
             'username' => 'admin',
             'first_name' => 'super',
             'last_name' => 'Admin',
             'email' => 'admin@gmail.com',
             'password'=> Hash::make("12345678")
         ]);
    }
}
