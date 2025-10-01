<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil semua data dari model Classroom
        $classrooms = Classroom::all();

        // Mengirim data ke view 'classroom'
        return view('classroom', [
            'classrooms' => $classrooms,
            'title' => 'Classrooms'
        ]);
    }
}
