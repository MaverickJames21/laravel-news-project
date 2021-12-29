<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

            $item = $this->faker->item;
            return [
                'img' => $this->faker->imageUrl(),
                'title' => $this->faker->word,
                'subtitle' => $this->faker->word,
                'content' => $this->faker->text,
            ];
    }
}
