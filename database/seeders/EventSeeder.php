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
        Event::create(['categories_id'=>'1','courses_id'=>'1','name'=>'Event number one','image'=>'https://picsum.photos/seed/picsum/200/300','date'=>'2024-07-26','time'=>'10:00:00','description'=>'Event example number one description','status'=>'1']);
        Event::create(['categories_id'=>'2','courses_id'=>'1','name'=>'Event number two','image'=>'https://picsum.photos/seed/picsum/200/300','date'=>'2024-07-24','time'=>'12:00:00','description'=>'Event example number two description','status'=>'0']);
        Event::create(['categories_id'=>'3','courses_id'=>'3','name'=>'Event number three','image'=>'https://picsum.photos/seed/picsum/200/300','date'=>'2024-08-21','time'=>'13:30:00','description'=>'Event example number three description','status'=>'1']);
        Event::create(['categories_id'=>'1','courses_id'=>'4','name'=>'Event number four','image'=>'https://picsum.photos/seed/picsum/200/300','date'=>'2024-09-21','time'=>'17:30:00','description'=>'Event example number four description','status'=>'1']);
        Event::create(['categories_id'=>'1','courses_id'=>'2','name'=>'Event number five','image'=>'https://picsum.photos/seed/picsum/200/300','date'=>'2024-06-26','time'=>'10:00:00','description'=>'Event example number five description','status'=>'1']);
        Event::create(['categories_id'=>'2','courses_id'=>'2','name'=>'Event number six','image'=>'https://picsum.photos/seed/picsum/200/300','date'=>'2024-06-24','time'=>'12:00:00','description'=>'Event example number six description','status'=>'0']);
        Event::create(['categories_id'=>'3','courses_id'=>'3','name'=>'Event number seven','image'=>'https://picsum.photos/seed/picsum/200/300','date'=>'2024-06-12','time'=>'13:30:00','description'=>'Event example number seven description','status'=>'0']);
        Event::create(['categories_id'=>'3','courses_id'=>'4','name'=>'Event number eight','image'=>'https://picsum.photos/seed/picsum/200/300','date'=>'2024-06-01','time'=>'17:30:00','description'=>'Event example number eight description','status'=>'0']);
        Event::create(['categories_id'=>'1','courses_id'=>'2','name'=>'Event number nine','image'=>'https://picsum.photos/seed/picsum/200/300','date'=>'2024-06-29','time'=>'10:00:00','description'=>'Event example number one description','status'=>'1']);
        Event::create(['categories_id'=>'2','courses_id'=>'2','name'=>'Event number ten','image'=>'https://picsum.photos/seed/picsum/200/300','date'=>'2024-06-27','time'=>'12:00:00','description'=>'Event example number two description','status'=>'0']);
        Event::create(['categories_id'=>'3','courses_id'=>'3','name'=>'Event number eleven','image'=>'https://picsum.photos/seed/picsum/200/300','date'=>'2024-08-21','time'=>'13:30:00','description'=>'Event example number three description','status'=>'1']);
        Event::create(['categories_id'=>'1','courses_id'=>'4','name'=>'Event number twelve','image'=>'https://picsum.photos/seed/picsum/200/300','date'=>'2024-09-21','time'=>'17:30:00','description'=>'Event example number four description','status'=>'1']);
        Event::create(['categories_id'=>'1','courses_id'=>'4','name'=>'Event number thirteen','image'=>'https://picsum.photos/seed/picsum/200/300','date'=>'2024-06-11','time'=>'10:00:00','description'=>'Event example number five description','status'=>'1']);
        Event::create(['categories_id'=>'2','courses_id'=>'2','name'=>'Event number fourteen','image'=>'https://picsum.photos/seed/picsum/200/300','date'=>'2024-06-07','time'=>'12:00:00','description'=>'Event example number six description','status'=>'0']);
        Event::create(['categories_id'=>'3','courses_id'=>'4','name'=>'Event number fifteen','image'=>'https://picsum.photos/seed/picsum/200/300','date'=>'2024-06-12','time'=>'13:30:00','description'=>'Event example number seven description','status'=>'0']);
        Event::create(['categories_id'=>'3','courses_id'=>'4','name'=>'Event number sixteen','image'=>'https://picsum.photos/seed/picsum/200/300','date'=>'2024-06-01','time'=>'17:30:00','description'=>'Event example number eight description','status'=>'0']);
        Event::create(['categories_id'=>'1','courses_id'=>'1','name'=>'React','image'=>'https://picsum.photos/seed/picsum/200/300','date'=>'2024-07-26','time'=>'10:00:00','description'=>'Event example number one description','status'=>'1']);
        Event::create(['categories_id'=>'2','courses_id'=>'2','name'=>'Tailwind','image'=>'https://picsum.photos/seed/picsum/200/300','date'=>'2024-07-24','time'=>'12:00:00','description'=>'Event example number two description','status'=>'0']);
        Event::create(['categories_id'=>'3','courses_id'=>'3','name'=>'Java','image'=>'https://picsum.photos/seed/picsum/200/300','date'=>'2024-06-21','time'=>'13:30:00','description'=>'Event example number three description','status'=>'1']);
        Event::create(['categories_id'=>'1','courses_id'=>'1','name'=>'PHP','image'=>'https://picsum.photos/seed/picsum/200/300','date'=>'2024-06-21','time'=>'13:30:00','description'=>'Event example number three description','status'=>'0']);
        Event::create(['categories_id'=>'2','courses_id'=>'4','name'=>'Front-End','image'=>'https://picsum.photos/seed/picsum/200/300','date'=>'2024-06-21','time'=>'17:30:00','description'=>'Event example number x description','status'=>'1']);
        Event::create(['categories_id'=>'3','courses_id'=>'2','name'=>'Back-End','image'=>'https://picsum.photos/seed/picsum/200/300','date'=>'2024-06-29','time'=>'18:30:00','description'=>'Event example number x description','status'=>'0']);

    }
}
