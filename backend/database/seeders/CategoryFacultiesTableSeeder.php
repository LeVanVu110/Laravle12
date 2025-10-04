<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryFacultiesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('category_faculties')->insert([
            ['faculty_code' => 'CNTT', 'faculty_name' => 'Công nghệ thông tin'],
            ['faculty_code' => 'KT', 'faculty_name' => 'Kinh tế'],
            ['faculty_code' => 'NN', 'faculty_name' => 'Ngoại ngữ'],
        ]);
    }
}
