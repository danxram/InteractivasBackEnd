<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\UserEvent;

class UserEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        UserEvent::create(['client_users_id'=>'2','events_id'=>'1']);
        UserEvent::create(['client_users_id'=>'2','events_id'=>'2']);
        UserEvent::create(['client_users_id'=>'2','events_id'=>'3']);
    }
}
