<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class AdminSubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::withCount('teachers')->paginate(10);

        return view('admin.subject.admin-subject', [
            'subjects' => $subjects,
            'title' => 'Data Mata Pelajaran'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:subjects,name',
            'description' => 'required|string|max:2000',
        ]);

        Subject::create($validated);
        return redirect()->route('admin.subject.index')->with('success', 'Subject created successfully!');
    }

    public function update(Request $request, string $id)
    {
        $subject = Subject::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:subjects,name,' . $subject->id,
            'description' => 'required|string|max:2000',
        ]);

        $subject->update($validated);
        return redirect()->route('admin.subject.index')->with('success', 'Subject updated successfully!');
    }
}