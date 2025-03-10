<?php

namespace Database\Factories;

use App\Models\MedicalHistory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MedicalHistory>
 */
class MedicalHistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = MedicalHistory::class;

    public function definition(): array
    {
        return [
            'date' => $this->faker->date(),
            'diagnosis' => $this->faker->text(50),
            'treatment' => $this->faker->text(50),
        ];
    }

    public function run(): void
    {
        MedicalHistory::factory(50)->create();
    }
}
