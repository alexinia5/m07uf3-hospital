<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicalHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('medical_histories')->insert([
            'date' => '2025-01-04',
            'diagnosis' => 'Gastroenteritis',
            'treatment' => 'Fluids, bland diet and rest'
        ]);
    }
}
