<?php

namespace App\Http\Controllers;

use App\Models\Guardian;
use Illuminate\Http\Request;

class GuardianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('guardians', [
            'title' => 'Guardians',
            'guardians' => Guardian::all()
        ]);
    }
}