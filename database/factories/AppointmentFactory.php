<?php

namespace Database\Factories;

use App\Models\Appointment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Appointment::class;

    public function definition(): array
    {
        $floor = $this->faker->numberBetween(1, 10);
        $num = $this->faker->numberBetween(1, 50);

        $floor_number = "$floor-$num";

        return [
            'date_hour' => $this->faker->dateTimeBetween('-1 year', '+1 year')->format('Y-m-d H:i:s'),
            'motive' => $this->faker->randomElement(['Consultation', 'Revision', 'Emergency']),
            'floor_num' => $this->faker->$floor_number,
            'observations' => $this->faker->text(20),
        ];
    }

    public function run(): void
    {
        Appointment::factory(50)->create();
    }

}
