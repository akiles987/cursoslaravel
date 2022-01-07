<?php

namespace Database\Factories;

use App\Models\Profesore;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Curso;

class ProfesoreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profesore::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'            => $this->faker->firstname(),
            'apellidos'         => $this->faker->lastname(),
            'email'             => $this->faker->email(),
            'f_nacimiento'      => $this->faker->date($format = 'd-m-Y', $min = '-45 years' , $max = '-24 years'),
            'telefono'          => $this->faker->mobileNumber(),
            'dni'               => $this->faker->dni(),
            'curso'             => Curso::all()->random()->nombre,
        ];
    }
}
