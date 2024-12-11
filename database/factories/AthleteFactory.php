<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Athlete>
 */
class AthleteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'event_id' => fake()->numberBetween(1,25),
            'athlete_name' => fake()->name(),
            'athlete_school' => fake()->word(),
            'athlete_gender' => fake()->randomElement(['male','female']),
            'athlete_medal' => fake()->randomElement(['gold','silver','bronze']),
        ];
    }
}
