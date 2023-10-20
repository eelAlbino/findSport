<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SessionMemberSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('session_members')->insert([
            ['id' => 1, 'session_id' => 1, 'client_id' => 1],
            ['id' => 2, 'session_id' => 1, 'client_id' => 2],
            ['id' => 3, 'session_id' => 2, 'client_id' => 1],
            ['id' => 4, 'session_id' => 2, 'client_id' => 2],
            ['id' => 5, 'session_id' => 3, 'client_id' => 1],
            ['id' => 6, 'session_id' => 3, 'client_id' => 2]
        ]);
    }
}
