<?php

use Illuminate\Database\Seeder;
use APP\Trabajadores;
use Faker\Factory as Faker;
class TrabajadoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();

        $trabajadores=Trabajadores::create([

            'nombre'=>$faker->names,
            'apellidos'=>$faker->lastName,
            'correo_electronico'=>$faker->email,
            'direccion'=>$faker->direction,
            'perfil_laboral'=>$faker->perfil_laboral,
            'experiencia'=>$faker->experiencia
        ]);

    }
}

