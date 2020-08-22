<?php

use Illuminate\Database\Seeder;
use APP\Experiencia_laboral;
use Faker\Factory as Faker;
class Experiencia_laboralTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    $faker=Faker::create();

    $experiencia_laboral=Experiencia_laboral::create([

        'empresa'=>$faker->empresa,
        'actividad'=>$faker->lastName,
        'fecha_inicio'=>$faker->fecha_inicio,
        'fecha_fin'=>$faker->fecha_fin
    ]);
    }
}
