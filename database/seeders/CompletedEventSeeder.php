<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\CompletedEvent;

class CompletedEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        CompletedEvent::create(['client_users_id'=>'2','events_id'=>'2','completion_date'=>'2023-06-14 13:30:00']);
        CompletedEvent::create(['client_users_id'=>'2','events_id'=>'3','completion_date'=>'2023-07-14 10:30:00']);
    }
}
