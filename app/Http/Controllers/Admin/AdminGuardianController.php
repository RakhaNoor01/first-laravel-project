<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guardian;
use Illuminate\Http\Request;

class AdminGuardianController extends Controller
{
    public function index()
    {
        $guardians = Guardian::paginate(10);

        return view('admin.guardian.admin-guardian', [
            'guardians' => $guardians,
            'title' => 'Data Wali Murid'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'job' => 'nullable|string|max:255',
            'phone' => 'required|string|max:20|unique:guardians,phone',
            'email' => 'required|email|unique:guardians,email',
            'address' => 'nullable|string',
        ]);

        Guardian::create($validated);
        return redirect()->route('admin.guardian.index')->with('success', 'Guardian created successfully!');
    }

    public function update(Request $request, string $id)
    {
        $guardian = Guardian::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'job' => 'nullable|string|max:255',
            'phone' => 'required|string|max:20|unique:guardians,phone,' . $guardian->id,
            'email' => 'required|email|unique:guardians,email,' . $guardian->id,
            'address' => 'nullable|string',
        ]);

        $guardian->update($validated);
        return redirect()->route('admin.guardian.index')->with('success', 'Guardian updated successfully!');
    }

    public function destroy(string $id)
    {
        $guardian = Guardian::findOrFail($id);
        $guardian->delete();

        return redirect()->route('admin.guardian.index')->with('success', 'Guardian deleted successfully!');
    }
}