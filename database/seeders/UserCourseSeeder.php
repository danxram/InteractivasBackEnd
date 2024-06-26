<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\UserCourse;

class UserCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        UserCourse::create(['users_id'=>'2','courses_id'=>'1']);
        UserCourse::create(['users_id'=>'2','courses_id'=>'3']);
        UserCourse::create(['users_id'=>'3','courses_id'=>'1']);
        UserCourse::create(['users_id'=>'3','courses_id'=>'4']);
        UserCourse::create(['users_id'=>'3','courses_id'=>'2']);
        UserCourse::create(['users_id'=>'3','courses_id'=>'3']);
        UserCourse::create(['users_id'=>'4','courses_id'=>'2']);
        UserCourse::create(['users_id'=>'4','courses_id'=>'3']);
        UserCourse::create(['users_id'=>'4','courses_id'=>'4']);
    }
}
