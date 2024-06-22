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
        CompletedEvent::create(['client_users_id'=>'2','events_id'=>'2','completion_date'=>'2024-06-14 13:30:00']);
        CompletedEvent::create(['client_users_id'=>'2','events_id'=>'3','completion_date'=>'2024-06-14 10:30:00']);
        CompletedEvent::create(['client_users_id'=>'3','events_id'=>'22','completion_date'=>'2024-06-14 13:30:00']);
        CompletedEvent::create(['client_users_id'=>'3','events_id'=>'18','completion_date'=>'2024-06-14 10:30:00']);
        CompletedEvent::create(['client_users_id'=>'4','events_id'=>'5','completion_date'=>'2024-06-14 13:30:00']);
        CompletedEvent::create(['client_users_id'=>'4','events_id'=>'6','completion_date'=>'2024-06-15 10:30:00']);
        CompletedEvent::create(['client_users_id'=>'4','events_id'=>'7','completion_date'=>'2024-06-16 13:30:00']);
        CompletedEvent::create(['client_users_id'=>'4','events_id'=>'8','completion_date'=>'2024-06-17 10:30:00']);
    }
}
