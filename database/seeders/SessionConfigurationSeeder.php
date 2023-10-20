<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SessionConfigurationSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('session_configurations')->insert([
            [
                'id' => 1,
                'day_number' => 1,
                'start_time' => '17:00:00',
                'duration_minutes' => 60,
                'start_date' => '2023-08-21'
            ], [
                'id' => 2,
                'day_number' => 2,
                'start_time' => '17:00:00',
                'duration_minutes' => 60,
                'start_date' => '2023-08-22'
            ]
        ]);
    }
}
