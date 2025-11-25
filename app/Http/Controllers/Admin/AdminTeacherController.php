<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\Subject;
use Illuminate\Http\Request;

class AdminTeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::with('subject')->paginate(10);
        $subjects = Subject::all();

        return view('admin.teacher.admin-teacher', [
            'teachers' => $teachers,
            'subjects' => $subjects,
            'title' => 'Data Guru'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'subject_id' => 'required|exists:subjects,id',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|unique:teachers,email',
            'address' => 'nullable|string',
        ]);

        Teacher::create($validated);
        return redirect()->route('admin.teacher.index')->with('success', 'Teacher created successfully!');
    }

    public function update(Request $request, string $id)
    {
        $teacher = Teacher::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'subject_id' => 'required|exists:subjects,id',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|unique:teachers,email,' . $teacher->id,
            'address' => 'nullable|string',
        ]);

        $teacher->update($validated);
        return redirect()->route('admin.teacher.index')->with('success', 'Teacher updated successfully!');
    }

    public function destroy(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return redirect()->route('admin.teacher.index')->with('success', 'Teacher deleted successfully!');
    }
}