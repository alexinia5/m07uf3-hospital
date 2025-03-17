<?php

namespace Database\Factories;

use App\Models\Patient;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Room::class;

    public function definition(): array
    {
        $availability = $this->faker->randomElement(['Yes', 'No']);
        $patient_id = Patient::inRandomOrder()->first()->patient_id;

        if ($availability === 'Yes') {
            $patient_id;
        } else {
            $patient_id = null;
        }

        return [
            // 'rooms_id' => $this->faker->unique()->numerify(),
            'availability' => $availability,
            'date_admission' => $this->faker->date(),
            'floor_num' => $this->faker->numerify('##-##'),
            'patient_id' => $patient_id,
        ];
    }
}
