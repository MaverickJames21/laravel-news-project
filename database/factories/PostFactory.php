<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'title' => $this->faker->title(),
                'date' => $this->faker->date(),
                'img' => $this->faker->img(),
                'content' => $this->faker->content(),

        ];
    }
}
