<?php

use Illuminate\Database\Seeder;
use App\Models\Event;
use Faker\Factory as Faker;

class EventSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Eventos de ejemplo
        Event::create([
            'categories_id' => '1',
            'courses_id' => '1',
            'name' => 'Event number one',
            'image' => 'https://picsum.photos/seed/picsum/200/300',
            'date' => '2023-07-26',
            'time' => '10:00:00',
            'description' => 'Event example number one description',
            'status' => '1'
        ]);
        Event::create([
            'categories_id' => '2',
            'courses_id' => '2',
            'name' => 'Event number two',
            'image' => 'https://picsum.photos/seed/picsum/200/300',
            'date' => '2023-07-24',
            'time' => '12:00:00',
            'description' => 'Event example number two description',
            'status' => '2'
        ]);
        Event::create([
            'categories_id' => '3',
            'courses_id' => '3',
            'name' => 'Event number three',
            'image' => 'https://picsum.photos/seed/picsum/200/300',
            'date' => '2023-08-21',
            'time' => '13:30:00',
            'description' => 'Event example number three description',
            'status' => '1'
        ]);
        Event::create([
            'categories_id' => '1',
            'courses_id' => '4',
            'name' => 'Event number four',
            'image' => 'https://picsum.photos/seed/picsum/200/300',
            'date' => '2023-08-21',
            'time' => '13:30:00',
            'description' => 'Event example number three description',
            'status' => '1'
        ]);

        // Eventos generados automáticamente
        for ($i = 0; $i < 20; $i++) {
            $categoryId = $faker->numberBetween(1, 4);
            $courseId = $faker->numberBetween(1, 4);
            $eventName = $faker->sentence(3);
            $eventDescription = "Description for " . $eventName;
            $eventDate = $faker->dateTimeBetween('2024-01-01', '2024-12-31')->format('Y-m-d');
            $eventTime = $faker->time('H:i:s');
            $eventStatus = $faker->numberBetween(0, 1);

            Event::create([
                'categories_id' => $categoryId,
                'courses_id' => $courseId,
                'name' => $eventName,
                'image' => 'https://picsum.photos/seed/picsum/200/300',
                'date' => $eventDate,
                'time' => $eventTime,
                'description' => $eventDescription,
                'status' => $eventStatus
            ]);
        }
    }
}