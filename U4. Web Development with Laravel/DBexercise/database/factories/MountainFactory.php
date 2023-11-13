<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mountain>
 */
class MountainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'height' => $this->faker->numberBetween(1000, 8000),
            'belongsToRange' => $this->faker->boolean,
            'firstClimbDate' => $this->faker->date,
            'continent' => $this->faker->randomElement(['Afrika', 'Asia', 'Europe', 'America', 'Oceania']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
