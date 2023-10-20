<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clients')->insert([
            [
                'id' => 1,
                'first_name' => 'Иван',
                'last_name' => 'Иванов'
            ], [
                'id' => 2,
                'first_name' => 'Василиса',
                'last_name' => 'Краснова'
            ]
        ]);
    }
}
