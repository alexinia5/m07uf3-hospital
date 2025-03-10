<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NurseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nurses')->insert([
            'dni' => '59302029',
            'gender' => 'Female',
            'name' => 'Clara Sánchez Molina',
            'phone' => '694382942',
        ]);
    }
}
