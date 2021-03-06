<?php

namespace Database\Factories;

use App\Models\Matricula;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Profesore;
use App\Models\Alumno;

class MatriculaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Matricula::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'alumno_id'            => Alumno::all()->random()->id,
            'profesor_id'         => Profesore::all()->random()->id,
        ];
    }
}
