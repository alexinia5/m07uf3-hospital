<?php

namespace Database\Factories;

use App\Models\Nurse;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nurse>
 */
class NurseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Nurse::class;

    public function definition(): array
    {
        return [
            'dni' => $this->faker->numerify('########'),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'name' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(9),
        ];
    }

}
