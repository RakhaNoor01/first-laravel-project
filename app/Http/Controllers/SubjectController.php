<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::all();
        return view('subject', [
            'subjects' => $subjects,
            'title' => 'Subject Data'
        ]);
    }
}