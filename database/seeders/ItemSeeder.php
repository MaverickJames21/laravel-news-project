<?php

namespace Database\Seeders;

use App\Models\Item;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();


        for($i = 0; $i < 30; $i++)
            Item::create([
                'img' => $faker->imageUrl(),
                'title' => $faker->sentence(),
                'subtitle' => $faker->sentence(),
                'content'=>  $faker->text(),
            ]);
    }
}
