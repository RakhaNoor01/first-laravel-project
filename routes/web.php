<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminStudentController;
use App\Http\Controllers\Admin\AdminClassroomController;
use App\Http\Controllers\Admin\AdminGuardianController;
use App\Http\Controllers\Admin\AdminTeacherController;
use App\Http\Controllers\Admin\AdminSubjectController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [ProfilController::class, 'index'])->name('beranda');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profil', [ProfilController::class, 'profil'])->name('profil');
Route::get('/kontak', [ContactController::class, 'index'])->name('kontak');

Route::get('/students', [StudentController::class, 'index'])->name('students.public');
Route::get('/guardians', [GuardianController::class, 'index'])->name('guardians.public');
Route::get('/classrooms', [ClassroomController::class, 'index'])->name('classrooms.public');
Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.public');
Route::get('/subjects', [SubjectController::class, 'index'])->name('subjects.public');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->group(function () {
    
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Student Management
    Route::prefix('student')->name('student.')->group(function () {
        Route::get('/', [AdminStudentController::class, 'index'])->name('index');
        Route::post('/', [AdminStudentController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [AdminStudentController::class, 'edit'])->name('edit');
        Route::put('/{id}', [AdminStudentController::class, 'update'])->name('update');
        Route::delete('/{id}', [AdminStudentController::class, 'destroy'])->name('destroy');
    });
    
    // Classroom Management
    Route::prefix('classroom')->name('classroom.')->group(function () {
        Route::get('/', [AdminClassroomController::class, 'index'])->name('index');
        Route::post('/', [AdminClassroomController::class, 'store'])->name('store');
        Route::put('/{id}', [AdminClassroomController::class, 'update'])->name('update');
    });

    // Guardian Management
    Route::prefix('guardian')->name('guardian.')->group(function () {
        Route::get('/', [AdminGuardianController::class, 'index'])->name('index');
        Route::post('/', [AdminGuardianController::class, 'store'])->name('store');
        Route::put('/{id}', [AdminGuardianController::class, 'update'])->name('update');
        Route::delete('/{id}', [AdminGuardianController::class, 'destroy'])->name('destroy');
    });

    // Teacher Management
    Route::prefix('teacher')->name('teacher.')->group(function () {
        Route::get('/', [AdminTeacherController::class, 'index'])->name('index');
        Route::post('/', [AdminTeacherController::class, 'store'])->name('store');
        Route::put('/{id}', [AdminTeacherController::class, 'update'])->name('update');
        Route::delete('/{id}', [AdminTeacherController::class, 'destroy'])->name('destroy');
    });

    // Subject Management
    Route::prefix('subject')->name('subject.')->group(function () {
        Route::get('/', [AdminSubjectController::class, 'index'])->name('index');
        Route::post('/', [AdminSubjectController::class, 'store'])->name('store');
        Route::put('/{id}', [AdminSubjectController::class, 'update'])->name('update');
    });
});