<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Session>
 */
class SessionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $configuration = factory(\App\Models\SessionConfiguration::class)->create();
        return [
            'start_time' => $configuration->start_time,
            'session_configuration_id' => $configuration->id,
        ];
    }
}
