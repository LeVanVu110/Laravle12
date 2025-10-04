<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'role_name' => 'Admin',
                'role_description' => 'Quản trị hệ thống',
                'role_is_active' => 1,
            ],
            [
                'role_name' => 'Teacher',
                'role_description' => 'Giảng viên',
                'role_is_active' => 1,
            ],
            [
                'role_name' => 'Student',
                'role_description' => 'Sinh viên',
                'role_is_active' => 1,
            ],
        ]);
    }
}
