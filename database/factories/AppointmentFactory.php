<?php

namespace Database\Factories;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Nurse;
use App\Models\Patient;
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
        $doctorId = Doctor::inRandomOrder()->first()->id;
        $nurseId = Nurse::inRandomOrder()->first()->id;
        $patientId = Patient::inRandomOrder()->first()->id;

        return [
            'date_hour' => $this->faker->dateTimeBetween('-1 year', '+1 year')->format('Y-m-d H:i:s'),
            'motive' => $this->faker->randomElement(['Consultation', 'Revision', 'Emergency']),
            'floor_num' => $this->faker->numerify('##-##'),
            'observations' => $this->faker->text(20),
            'doctor_id' => $doctorId,
            'nurse_id' => $nurseId,
            'patient_id' => $patientId,
        ];
    }

}
