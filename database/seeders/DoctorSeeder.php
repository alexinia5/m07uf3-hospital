<?php

namespace Database\Seeders;

use App\Models\Doctor;
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
            'dni' => '83935802',
            'gender' => 'Female',
            'name' => 'Selena Herrera Marín',
            'phone' => '690358201',
            'position' => 'Pediatric',
            'specialty_id' => '2',
        ]);

        Doctor::factory(10)->create();
    }
}
