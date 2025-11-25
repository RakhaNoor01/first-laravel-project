<?php

namespace App\Http\Controllers;

use App\Models\Guardian;
use Illuminate\Http\Request;

class GuardianController extends Controller
{
    public function index()
    {
        $guardians = Guardian::all();
        return view('guardians', [
            'guardians' => $guardians,
            'title' => 'Data Wali Murid'
        ]);
    }
}