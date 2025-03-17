<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('doctors')->insert([
            'doctor_id' => '23423',
            'dni' => '83935802',
            'gender' => 'Female',
            'name' => 'Selena Herrera Marín',
            'phone' => '690358201',
            'position' => 'Pediatric',
            'specialty_id' => 'Pediatrics',
        ]);
    }
}
