<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('classroom')->get();
        return view('student', [
            'students' => $students,
            'title' => 'Data Siswa'
        ]);
    }
}