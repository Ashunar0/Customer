<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ClassroomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classrooms')->insert([
            ['name' => '東京'],
            ['name' => '関西'],
            ['name' => '名古屋'],
            ['name' => '仙台'],
            ['name' => '札幌'],
            ['name' => '九州'],
        ]);
    }
}
