<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SliderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText(),
            'status' => 0,
            'img_url' => Str::random().'.jpg',
            'slug' => Str::slug(Str::random(10))
        ];
    }
}
