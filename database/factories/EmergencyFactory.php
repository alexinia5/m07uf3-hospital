<?php

namespace Database\Factories;

use App\Models\Emergency;
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
        $floor = $this->faker->numberBetween(1, 10);
        $num = $this->faker->numberBetween(1, 50);

        $floor_number = "$floor-$num";

        return [
            'date' => $this->faker->date(),
            'level' => $this->faker->randomElement('', '', '', ''),
            'diagnosis' => $this->faker->text(50),
            'floor_num' => $this->faker->$floor_number,
        ];
    }

    public function run(): void
    {
        Emergency::factory(50)->create();
    }
}
