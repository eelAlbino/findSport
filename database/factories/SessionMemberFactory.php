<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SessionMember>
 */
class SessionMemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'session_id' => function () {
                return factory(\App\Models\Session::class)->create()->id;
            },
            'client_id' => function () {
                return factory(\App\Models\Client::class)->create()->id;
            },
        ];
    }
}
