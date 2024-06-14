<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\UserProfile;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        UserProfile::create(['client_users_id'=>'2','sleep_hours'=>'8','physical_activity'=>'1','health_issues'=>'No','stress'=>'5','specific_diet'=>'No','aditional_info'=>'No']);
    }
}
