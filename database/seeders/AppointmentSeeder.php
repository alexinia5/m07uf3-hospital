<?php

namespace Database\Seeders;

use App\Models\Appointment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('appointments')->insert([
            'date_hour' => '2025-10-05 13:00:00',
            'motive' => 'Revision',
            'floor_num' => '2-3',
            'observations' => 'Check surgery',
            'doctor_id' => '5',
            'nurse_id' => '6',
            'patient_id' => '4',
        ]);

        Appointment::factory(10)->create();
    }
}
