<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;
 
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Curso::factory(1)->create([
            'nombre' => 'ESO',
            'curso'  => '1'
        ]);
        Curso::factory(1)->create([
            'nombre' => 'ESO',
            'curso'  => '2'
        ]);
        Curso::factory(1)->create([
            'nombre' => 'ESO',
            'curso'  => '3'
        ]);
        Curso::factory(1)->create([
            'nombre' => 'ESO',
            'curso'  => '4'
        ]);
        Curso::factory(1)->create([
            'nombre' => 'Bachillerato',
            'curso'  => '1',
        ]);
        
        Curso::factory(1)->create([
            'nombre' => 'Bachillerato',
            'curso'  => '2',
        ]);
        Curso::factory(1)->create([
            'nombre' => 'Formacion Profesional Medio',
            'curso'  => '1',
        ]);

        Curso::factory(1)->create([
            'nombre' => 'Formacion Profesional Medio',
            'curso'  => '2',
        ]);
        Curso::factory(1)->create([
            'nombre' => 'Formacion Profesional Superior',
            'curso'  => '1',
        ]);
        Curso::factory(1)->create([
            'nombre' => 'Formacion Profesional Superior',
            'curso'  => '2',
        ]);

        \App\Models\Alumno::factory(1000)->create();
        \App\Models\Profesore::factory(100)->create();
        \App\Models\Matricula::factory()->count(1000)->create();

    }
}
