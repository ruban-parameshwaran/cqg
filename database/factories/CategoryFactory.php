<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Psy\Util\Str;

class CategoryFactory extends Factory
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
            "description" => $this->faker->text(100),
            "slug" => \Illuminate\Support\Str::random(10),
            "img_url" => $this->faker->text(15).'.jpg',
        ];
    }
}
