<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Customer;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('Admin123**!')
        ]);


        User::create([
            'name' => 'Kelly',
            'email' => 'kelly@admin.com',
            'password' => Hash::make('12345678')
        ]);

       // Customer::factory()->count(100)->create();
    }
}
