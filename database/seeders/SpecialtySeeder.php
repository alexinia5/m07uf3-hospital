<?php

namespace Database\Seeders;

use App\Models\Specialty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('specialties')->insert([
            'specialty_id' => '0',
            'name' => 'Cardiology',
            'location_departament' => 'Cardiology Departament',
        ]);

        Specialty::factory(10)->create();
    }
}
