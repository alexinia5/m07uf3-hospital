<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Patient::class;

    public function definition(): array
    {
        return [
            'dni' => $this->faker->numerify('########'),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'name' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'cp' => $this->faker->postcode(),
        ];
    }

    public function run(): void
    {
        Patient::factory(50)->create();
    }
}
