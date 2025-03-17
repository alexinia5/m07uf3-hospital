<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('patients')->insert([
            'patient_id' => '45645',
            'dni' => '83934583',
            'gender' => 'Female',
            'name' => 'Aroa García López',
            'phone' => '683058929',
            'address' => 'Av. Josep Roura, 2-1',
            'cp' => '09021',
        ]);

        Patient::factory(10)->create();
    }
}
