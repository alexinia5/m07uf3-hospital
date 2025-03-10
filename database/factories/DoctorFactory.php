<?php

namespace Database\Factories;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Doctor::class;
    
    public function definition(): array
    {
        return [
            'dni' => $this->faker->numerify('########'),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'name' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'position' => $this->faker->randomElement(['General Practitioner (GP)', 'Specialist Doctor', 'Primary Care Physician (PCP)',
            'Emergency Physician', 'Family Medicine Doctor', 'Surgeon', 'Pediatrician']),
        ];
    }

    public function run(): void
    {
        Doctor::factory(50)->create();
    }
}
