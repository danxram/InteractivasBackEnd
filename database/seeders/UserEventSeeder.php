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
        UserEvent::create(['users_id'=>'2','events_id'=>'1']);
        UserEvent::create(['users_id'=>'2','events_id'=>'2']);
        UserEvent::create(['users_id'=>'2','events_id'=>'3']);
        UserEvent::create(['users_id'=>'3','events_id'=>'17']);
        UserEvent::create(['users_id'=>'3','events_id'=>'21']);
        UserEvent::create(['users_id'=>'3','events_id'=>'22']);
        UserEvent::create(['users_id'=>'3','events_id'=>'18']);
        UserEvent::create(['users_id'=>'3','events_id'=>'19']);
        UserEvent::create(['users_id'=>'3','events_id'=>'20']);
        UserEvent::create(['users_id'=>'4','events_id'=>'5']);
        UserEvent::create(['users_id'=>'4','events_id'=>'6']);
        UserEvent::create(['users_id'=>'4','events_id'=>'7']);
        UserEvent::create(['users_id'=>'4','events_id'=>'8']);
        UserEvent::create(['users_id'=>'4','events_id'=>'9']);
        UserEvent::create(['users_id'=>'4','events_id'=>'10']);
        UserEvent::create(['users_id'=>'4','events_id'=>'11']);
        UserEvent::create(['users_id'=>'4','events_id'=>'12']);
        UserEvent::create(['users_id'=>'4','events_id'=>'13']);
        UserEvent::create(['users_id'=>'4','events_id'=>'14']);
    }
}
