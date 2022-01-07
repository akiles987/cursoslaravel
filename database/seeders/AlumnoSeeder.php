<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alumno;
use Faker\Generator;


class AlumnoSeeder extends Seeder
{

    protected $faker;

    public function run()
    {
        Alumno::factory(1000)->create();
    }
}
