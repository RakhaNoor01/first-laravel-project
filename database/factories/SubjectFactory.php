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
        return [
            'name' => fake()->unique()->randomElement([
                'Mobile Development', 
                'Web Development', 
                'Informatika', 
                'Internet of Things', 
                'Game Development'
            ]),
            'description' => fake()->unique()->randomElement([
                'Pengembangan aplikasi mobile untuk berbagai platform seperti Android dan iOS.',
                'Pengembangan aplikasi web modern menggunakan HTML, CSS, JavaScript, dan framework.',
                'Ilmu komputer, algoritma, pemrograman, dan teknologi informasi.',
                'Internet of Things (IoT), sensor, microcontroller, dan sistem embedded.',
                'Pengembangan game, game design, dan programming untuk berbagai platform.'
            ])
        ];
    }
}