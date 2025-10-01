<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Classroom;

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
            
            'name' => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            'date_of_birth' => $this->faker->date(),
            'classroom_id' => Classroom::factory(),    
            'email' => $this->faker->unique()->safeEmail(),
            'address' => $this->faker->address(),
            
        ];
    }
}