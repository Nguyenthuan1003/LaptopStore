<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        // insert admin user
        DB::table('users')->insert([
            'name' => 'adminDZ',
            'password' => Hash::make('password'),
            'email' => 'tuannvph19078@fpt.edu.vn',
            'image' => 'admin_avt.jpg',
            'phone_number' =>  '0342 737 862',
            'address' => Str::limit($faker->address, 200),
            'role' => true,
            'status' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        // insert random normal user
        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'name' => Str::limit($faker->name, 50),
                'password' => Hash::make('password'),
                'email' => Str::limit($faker->unique()->safeEmail, 64),
                'image' => 'user_avatar.jpg',
                'phone_number' =>  $faker->numerify('09########'),
                'address' => Str::limit($faker->address, 200),
                'role' => false,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
