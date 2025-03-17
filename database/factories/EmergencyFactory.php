<?php

namespace Database\Factories;

use App\Models\Emergency;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Emergency>
 */
class EmergencyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Emergency::class;

    public function definition(): array
    {
        $patientId = Patient::inRandomOrder()->first()->patient_id;

        return [
            // 'emergency_id' => $this->faker->unique()->numerify(),
            'date' => $this->faker->date(),
            'level' => $this->faker->randomElement(['Low', 'Mild', 'Moderate', 'Sever']),
            'diagnosis' => $this->faker->text(50),
            'floor_num' => $this->faker->numerify('##-##'),
            'patient_id' => $patientId,
        ];
    }
}
