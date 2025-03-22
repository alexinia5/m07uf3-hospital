<?php

namespace Database\Seeders;

use App\Models\MedicalHistory;
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
            'date' => '2025:02:02 12:03:03',
            'diagnosis' => 'Gastroenteritis',
            'treatment' => 'Fluids, bland diet and rest',
            'patient_id' => '4',
        ]);

        MedicalHistory::factory(10)->create();
    }
}
