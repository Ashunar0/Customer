<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert([
            ['name' => 'Web'],
            ['name' => 'Game'],
            ['name' => 'Python'],
            ['name' => 'iPhone'],
            ['name' => 'WebEx'],
            ['name' => 'AI'],
            ['name' => 'UIUX'],
            ['name' => 'VE'],
        ]);
    }
}
