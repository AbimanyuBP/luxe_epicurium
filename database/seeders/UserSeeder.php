<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'user_type' => '0',
                'password' => bcrypt('12345678'),
                'first_name' =>"admin",
                'last_name' =>"admin",
                'phone_number'=>"08765749",
            ],
            [
                'name' => 'Staff',
                'email' => 'staff@staff.com',
                'user_type' => '1',
                'password' => bcrypt('12345678'),
                'first_name' =>"Helen",
                'last_name' =>"Mira",
                'phone_number'=>"08765749",
            ],
            [
                'name' => 'Joe Lmao',
                'email' => 'joelmao23@gmail.com',
                'user_type' => '3',
                'password' => bcrypt('12345678'),
                'first_name' =>"Joe",
                'last_name' =>"Lmao",
                'phone_number'=>"08765749",
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
