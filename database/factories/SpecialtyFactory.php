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
        $name = $this->faker->unique()->randomElement(['Immunology', 'Dermatology', 'Endocrinology', 'Gastroenterology', 'Gynecology', 'Hematology', 'Infectious Diseases',
        'Internal Medicine', 'Neurology', 'Pulmonology', 'Pediatrics', 'Urology', 'Emergency Medicine', 'Family Medicine']);
        
        $location_departament = '';

        if ($name == 'Immunology') {
            $location_departament = 'Immunology Department';

        } elseif ($name == 'Dermatology') {
            $location_departament = 'Dermatology Department';

        } elseif ($name == 'Endocrinology') {
            $location_departament = 'Endocrinology Department';

        } elseif ($name == 'Gastroenterology') {
            $location_departament = 'Gastroenterology Department';

        } elseif ($name == 'Gynecology') {
            $location_departament = 'Gynecology Department';

        } elseif ($name == 'Hematology') {
            $location_departament = 'Hematology Department';

        } elseif ($name == 'Infectious Diseases') {
            $location_departament = 'Infectious Diseases Department';

        } elseif ($name == 'Neurology') {
            $location_departament = 'Neurology Department';

        } elseif ($name == 'Pulmonology') {
            $location_departament = 'Pulmonology Department';

        } elseif ($name == 'Pediatrics') {
            $location_departament = 'Pediatrics Department';

        } elseif ($name == 'Urology') {
            $location_departament = 'Urology Department';

        } elseif ($name == 'Emergency Medicine') {
            $location_departament = 'Emergency Department (ED) / ER';

        } elseif ($name == 'Family Medicine') {
            $location_departament = 'Family Medicine Department';
        }

        return [
            'name' => $name,
            'location_departament' => $location_departament,
        ];
    }
}
