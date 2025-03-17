<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Emergency;
use App\Models\MedicalHistory;
use App\Models\Nurse;
use App\Models\Patient;
use App\Models\Room;
use App\Models\Specialty;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Doctor::factory(10)->create();
        // Specialty::factory(10)->create();
        Nurse::factory(10)->create();
        Patient::factory(10)->create();
        MedicalHistory::factory(10)->create();
        Appointment::factory(10)->create();
        Emergency::factory(10)->create();
        Room::factory(10)->create();
    }
}
