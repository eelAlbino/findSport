<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sessions')->insert([
            [
                'id' => 1,
                'start_time' => '2023-08-21 17:00:00',
                'session_configuration_id' => 1
            ], [
                'id' => 2,
                'start_time' => '2023-08-28 17:00:00',
                'session_configuration_id' => 1
            ], [
                'id' => 3,
                'start_time' => '2023-08-22 17:00:00',
                'session_configuration_id' => 2
            ], [
                'id' => 4,
                'start_time' => '2023-08-29 17:00:00',
                'session_configuration_id' => 2
            ]
        ]);
    }
}
