<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\member>
 */
class memberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'member_role' => fake()->randomElement(['coach','member']),
            'member_name' => fake()->name(),
            'member_school' => fake()->word(),
            'member_gender' => fake()->randomElement(['male', 'female']),
            'member_medal' => fake()->randomElement(['gold', 'silver', 'bronze']),
            'member_belt' => fake()->randomElement(['white', 'yellow', 'orange', 'green', 'blue', 'purple', 'brown', 'black']),
        ];
    }
}
