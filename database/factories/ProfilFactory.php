<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
            return [
                'avatar' => $this->faker->avatar(),
                'pseudo' => $this->faker->pseudo(),
                'ville' => $this->faker->ville(),
            ];
    }
}
