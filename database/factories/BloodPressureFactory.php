<?php

namespace Database\Factories;

use App\Models\BloodPressure;
use Illuminate\Database\Eloquent\Factories\Factory;

class BloodPressureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BloodPressure::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'systolic' => $this->faker->numberBetween(0,300),
            'diastolic' => $this->faker->numberBetween(0,300),
        ];
    }
}
