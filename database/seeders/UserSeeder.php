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
        User::create(['privileges_id'=>'1','first_name'=>'admin','last_name'=>'admin','email'=>'admin@admin.com','password'=>'admin']);
        User::create(['privileges_id'=>'2','first_name'=>'student','last_name'=>'student','email'=>'student@student.com','password'=>'student']);
        User::create(['privileges_id'=>'2','first_name'=>'Daniel','last_name'=>'Ramirez','email'=>'Daniel@student.com','password'=>'student']);
        User::create(['privileges_id'=>'2','first_name'=>'Jorge','last_name'=>'Miranda','email'=>'Jorge@profesor.com','password'=>'profesor']);
    }
}
