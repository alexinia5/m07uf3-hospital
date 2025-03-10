<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmergencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('emergencies')->insert([
            'date' => '2025-01-04',
            'level' => 'Low',
            'diagnosis' => 'Gastroenteritis',
            'floor_num' => '3-2',
        ]);
    }
}
