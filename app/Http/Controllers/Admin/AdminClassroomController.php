<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use Illuminate\Http\Request;

class AdminClassroomController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $classrooms = Classroom::withCount('students')
            ->with('students')
            ->when($search, function ($query) use ($search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->get();
        
        return view('admin.classroom.admin-classroom', [
            'classrooms' => $classrooms,
            'title' => 'Data Kelas'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:classrooms,name',
        ]);

        Classroom::create($validated);

        return redirect()->route('admin.classroom.index')->with('success', 'Classroom created successfully!');
    }

    public function update(Request $request, string $id)
    {
        $classroom = Classroom::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:classrooms,name,' . $classroom->id,
        ]);

        $classroom->update($validated);

        return redirect()->route('admin.classroom.index')->with('success', 'Classroom updated successfully!');
    }
}