<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SessionConfiguration>
 */
class SessionConfigurationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'day_number' => $this->faker->numberBetween(1, 7),
            'start_time' => $this->faker->time('H:i'),
            'duration_minutes' => $this->faker->numberBetween(30, 180),
            'start_date' => $this->faker->dateTimeBetween('-30 days', '+30 days')
        ];
    }
}
