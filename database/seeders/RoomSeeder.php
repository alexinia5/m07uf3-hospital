<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rooms')->insert([
            'rooms_id' => '342342',
            'availability' => 'No',
            'date_admission' => '2025-11-02 18:20:32',
            'floor_num' => '1-2',
            'patient_id' => null,
        ]);
    }
}
