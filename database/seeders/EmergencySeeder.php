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
            // 'emergency_id' => '424325',
            'date' => '2025-01-03 11:40:39',
            'level' => 'Low',
            'diagnosis' => 'Gastroenteritis',
            'floor_num' => '3-2',
            // 'doctor_id' => '23423',
            // 'nurse_id' => '34555	',
            'patient_id' => '45645',
        ]);

        Emergency::factory(10)->create();
    }
}
