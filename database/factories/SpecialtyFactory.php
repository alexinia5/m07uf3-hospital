<?php

namespace Database\Factories;

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
        return [
            'name' => $this->faker->randomElement('Cardiology', 'Dermatology', 'Endocrinology', 'Gastroenterology', 'Gynecology', 'Hematology', 'Infectious Diseases',
            'Internal Medicine', 'Neurology', 'Pulmonology', 'Pediatrics', 'Urology', 'Otolaryngology (ENT)', 'Oncology', 'Emergency Medicine', 'Family Medicine'),
            
            'location_departament' => $this->faker->randomElement('Emergency Department (ED) / ER', 'Family Medicine Department', 'Cardiology Department', 'Dermatology Department', 
            'Endocrinology Department', 'Gastroenterology Department', 'Hematology Department', 'Infectious Diseases Department', 'Neurology Department', 'Pulmonology Department', 
            'Pediatrics Department', 'Urology Department', '🔹 Gynecology Department'),
        ];
    }

    public function run(): void
    {
        Specialty::factory(50)->create();
    }
}
