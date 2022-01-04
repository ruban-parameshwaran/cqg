<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->text(10),
            "description" => $this->faker->text,
            "slug" => $this->faker->realTextBetween(1, 10),
            "img_url" => $this->faker->text(15) . '.jph',
            "category_id" => 5
        ];
    }
}
