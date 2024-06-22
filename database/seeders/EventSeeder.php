<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Event::create(['categories_id'=>'1','courses_id'=>'1','name'=>'Event number one','image'=>'https://picsum.photos/seed/picsum/200/300','date'=>'2023-07-26','time'=>'10:00:00','description'=>'Event example number one description','status'=>'1']);
        Event::create(['categories_id'=>'2','courses_id'=>'2','name'=>'Event number two','image'=>'https://picsum.photos/seed/picsum/200/300','date'=>'2023-07-24','time'=>'12:00:00','description'=>'Event example number two description','status'=>'2']);
        Event::create(['categories_id'=>'3','courses_id'=>'3','name'=>'Event number three','image'=>'https://picsum.photos/seed/picsum/200/300','date'=>'2023-08-21','time'=>'13:30:00','description'=>'Event example number three description','status'=>'1']);
        Event::create(['categories_id'=>'1','courses_id'=>'4','name'=>'Event number four','image'=>'https://picsum.photos/seed/picsum/200/300','date'=>'2023-08-21','time'=>'13:30:00','description'=>'Event example number three description','status'=>'1']);
        Event::create(['categories_id'=>'2','courses_id'=>'2','name'=>'Event number five','image'=>'https://picsum.photos/seed/picsum/200/300','date'=>'2023-08-21','time'=>'13:30:00','description'=>'Event example number three description','status'=>'1']);
        Event::create(['categories_id'=>'3','courses_id'=>'4','name'=>'Event number six','image'=>'https://picsum.photos/seed/picsum/200/300','date'=>'2023-09-21','time'=>'13:30:00','description'=>'Event example number three description','status'=>'1']);
        Event::create(['categories_id'=>'1','courses_id'=>'4','name'=>'Event number seven','image'=>'https://picsum.photos/seed/picsum/200/300','date'=>'2023-11-21','time'=>'13:30:00','description'=>'Event example number three description','status'=>'1']);
        Event::create(['categories_id'=>'2','courses_id'=>'1','name'=>'Event number eight','image'=>'https://picsum.photos/seed/picsum/200/300','date'=>'2023-06-21','time'=>'13:30:00','description'=>'Event example number three description','status'=>'1']);
        Event::create(['categories_id'=>'3','courses_id'=>'2','name'=>'Event number nine','image'=>'https://picsum.photos/seed/picsum/200/300','date'=>'2023-07-21','time'=>'13:30:00','description'=>'Event example number three description','status'=>'1']);
    }
}
