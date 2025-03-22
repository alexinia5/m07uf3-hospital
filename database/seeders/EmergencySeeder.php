<?php

namespace Database\Seeders;

use App\Models\Emergency;
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
            'date' => '2025-01-03 11:40:39',
            'level' => 'Low',
            'diagnosis' => 'Gastroenteritis',
            'floor_num' => '3-2',
            'doctor_id' => '1',
            'nurse_id' => '2',
            'patient_id' => '3',
        ]);

        Emergency::factory(10)->create();
    }
}
