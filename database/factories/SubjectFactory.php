<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $subjects = [
            ['name' => 'Mathematics', 'description' => 'The study of numbers, quantities, shapes, and patterns.'],
            ['name' => 'English', 'description' => 'The study of the English language, literature, and communication.'],
            ['name' => 'Science', 'description' => 'The study of the natural world through observation and experimentation.'],
            ['name' => 'History', 'description' => 'The study of past events, societies, and human development.'],
            ['name' => 'Geography', 'description' => 'The study of the Earth\'s landscapes, environments, and human populations.'],
        ];

        return fake()->unique()->randomElement($subjects);
    }
}
