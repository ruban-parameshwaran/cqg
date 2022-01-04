<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Http\Response;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create();
       //\App\Models\Slider::factory(10)->create();
        //\App\Models\Category::factory(10)->create();


       // \App\Models\Product::factory(5)->create();
    }
}
