<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ConferenceFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'description' => fake()->paragraph(),
            'speakers' => fake()->name(),
            'date' => fake()->date(),
            'time' => fake()->time(),
            'location' => fake()->city(),
            'address' => fake()->address(),
        ];
    }
}