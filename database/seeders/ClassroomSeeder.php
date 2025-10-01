<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classrooms = [
            ['name' => '10 PPLG 1'],
            ['name' => '10 PPLG 2'],
            ['name' => '11 PPLG 1'],
            ['name' => '11 PPLG 2'],
        ];

        foreach ($classrooms as $classroom) {
            \App\Models\Classroom::create($classroom);
        }
    }
}
