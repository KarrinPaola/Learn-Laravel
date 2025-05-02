<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class course extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("course")->insert([
            "courseName"=> "Course Sample",
            "courseDescription"=> "This is a sample course",
        ]);
        DB::table("course")->insert([
            "courseName"=> "Course Sample 2",
            "courseDescription"=> "This is a sample course 2",
        ]);
    }
}