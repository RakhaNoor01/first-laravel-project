<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Http\Request;

class AdminStudentController extends Controller
{
    public function index()
    {
        $students = Student::with('classroom')->paginate(10);
        $classrooms = Classroom::all();

        return view('admin.student.admin-students', [
            'students' => $students,
            'classrooms' => $classrooms,
            'title' => 'Data Siswa'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'classroom_id' => 'required|exists:classrooms,id',
            'email' => 'required|email|unique:students,email',
            'address' => 'nullable|string',
        ]);

        Student::create($validated);
        return redirect()->route('admin.student.index')->with('success', 'Data berhasil disimpan!');
    }

    public function update(Request $request, string $id)
    {
        $student = Student::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'email' => 'required|email|unique:students,email,' . $student->id,
            'classroom_id' => 'required|exists:classrooms,id',
            'address' => 'nullable|string',
        ]);

        $student->update($validated);
        return redirect()->route('admin.student.index')->with('success', 'Student berhasil di update!');
    }

    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('admin.student.index')->with('success', 'Data berhasil dihapus!');
    }
}