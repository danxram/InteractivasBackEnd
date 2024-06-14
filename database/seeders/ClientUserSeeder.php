<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\ClientUser;

class ClientUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ClientUser::create(['privileges_id'=>'1','first_name'=>'admin','last_name'=>'admin','email'=>'admin@admin.com','password'=>'admin']);
        ClientUser::create(['privileges_id'=>'2','first_name'=>'student','last_name'=>'student','email'=>'student@student.com','password'=>'student']);
    }
}
