<?php

namespace Database\Factories;

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
        $floor = $this->faker->numberBetween(1, 10);
        $num = $this->faker->numberBetween(1, 50);

        $floor_number = "$floor-$num";

        return [
            'availability' => $this->faker->randomElement(['Yes', 'No']),
            'date_admission' => $this->faker->date(),
            'floor_number' => $this->faker->$floor_number,
        ];
    }

    public function run(): void
    {
        Room::factory(50)->create();
    }
}
