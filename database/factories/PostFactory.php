<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //fake()->title()
            'title'=>fake()->sentence(),
            'description'=>fake()->paragraph(),
            'status'=>rand(0,1),
            'publish_date'=>fake()->date(),
            'views'=>rand(1,1000)
        ];
    }
}
