<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => $this->faker->name(),
            'age' => $this->faker->numberBetween(18, 25),
            'roll_no' => $this->faker->unique()->numberBetween(100000, 999999),
            'phone_no' => $this->faker->numerify('##########'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
