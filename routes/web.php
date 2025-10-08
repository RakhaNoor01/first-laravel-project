<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\ClassroomController;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/profil', [App\Http\Controllers\ProfileController::class, 'index']);
Route::get('/kontak', [App\Http\Controllers\ContactController::class, 'index']);
Route::get('/students', [App\Http\Controllers\StudentController::class, 'index']);
Route::get('/guardians', [App\Http\Controllers\GuardianController::class, 'index']);
Route::get('/classrooms', [App\Http\Controllers\ClassroomController::class, 'index']);
Route::get('/teacher', [App\Http\Controllers\TeacherController::class, 'index']);
Route::get('/subject', [App\Http\Controllers\SubjectController::class, 'index']);
