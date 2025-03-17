<?php

namespace Database\Factories;

use App\Models\Doctor;
use App\Models\Specialty;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Specialty>
 */
class SpecialtyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Specialty::class;

    public function definition(): array
    {
        $headDepartament = Doctor::inRandomOrder()->first()->doctor_id;

        return [
            // 'specialty_id' => $this->faker->unique()->numerify(),
            'name' => $this->faker->randomElement('Cardiology', 'Dermatology', 'Endocrinology', 'Gastroenterology', 'Gynecology', 'Hematology', 'Infectious Diseases',
            'Internal Medicine', 'Neurology', 'Pulmonology', 'Pediatrics', 'Urology', 'Otolaryngology (ENT)', 'Oncology', 'Emergency Medicine', 'Family Medicine'),
            'head_departament' => $headDepartament,
            'location_departament' => $this->faker->randomElement('Emergency Department (ED) / ER', 'Family Medicine Department', 'Cardiology Department', 'Dermatology Department', 
            'Endocrinology Department', 'Gastroenterology Department', 'Hematology Department', 'Infectious Diseases Department', 'Neurology Department', 'Pulmonology Department', 
            'Pediatrics Department', 'Urology Department', '🔹 Gynecology Department'),
        ];
    }
}
