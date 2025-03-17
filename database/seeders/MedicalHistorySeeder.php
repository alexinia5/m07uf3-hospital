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
            'history_id' => '202',
            'date' => '2025-01-04 2025:02:02 12:03:03',
            'diagnosis' => 'Gastroenteritis',
            'treatment' => 'Fluids, bland diet and rest',
            'patientId' => '4',
        ]);
    }
}
