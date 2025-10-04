<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'user_code' => 'AD001',
                'user_name' => 'admin',
                'user_email' => 'admin@example.com',
                'user_password' => Hash::make('123456'),
                'user_is_activated' => 1,
                'user_is_banned' => 0,
                'user_activate_at' => now(),
            ],
            [
                'user_code' => 'GV001',
                'user_name' => 'teacher1',
                'user_email' => 'teacher1@example.com',
                'user_password' => Hash::make('123456'),
                'user_is_activated' => 1,
                'user_is_banned' => 0,
                'user_activate_at' => now(),
            ],
            [
                'user_code' => 'SV001',
                'user_name' => 'student1',
                'user_email' => 'student1@example.com',
                'user_password' => Hash::make('123456'),
                'user_is_activated' => 1,
                'user_is_banned' => 0,
                'user_activate_at' => now(),
            ],
        ]);
    }
}
