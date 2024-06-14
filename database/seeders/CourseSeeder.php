<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Course::create(['name'=>'Interactivas I','description'=>'Interactivas I es un curso de programacion web','image'=>'https://picsum.photos/id/1/200/300',]);
        Course::create(['name'=>'Interactivas II','description'=>'Interactivas II es un curso de programacion web continuacion de Interactivas I','image'=>'https://picsum.photos/id/1/200/300',]);
        Course::create(['name'=>'Igenieria de aplicaciones Interactivas','description'=>'Ingenieria de aplicaciones es un curso de QA de programacion web','image'=>'https://picsum.photos/id/1/200/300',]);
        Course::create(['name'=>'Diseño Web','description'=>'Diseño Web es un curso de hacer diseños que le gusten a finki','image'=>'https://picsum.photos/id/1/200/300',]);
    }
}
