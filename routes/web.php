<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AddStudentController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\TeacherController;



// Admin Login
Auth::routes();

// Home Route
Route::get('/', [HomeController::class, 'index'])->middleware('auth')->name('home');

// Student Routes
Route::prefix('student')->group(function () {
    Route::get('/add', [AddStudentController::class, 'addStudent'])->name('student.add');
    Route::post('/store', [AddStudentController::class, 'storeStudent'])->name('student.store');
    Route::get('/all', [AddStudentController::class, 'allStudents'])->name('student.all');
    Route::get('/view/{id}', [AddStudentController::class, 'viewStudent'])->name('student.view');
    Route::get('/edit/{id}', [AddStudentController::class, 'editStudent'])->name('student.edit');
    Route::post('/update/{id}', [AddStudentController::class, 'updateStudent'])->name('student.update');
    Route::get('/delete/{id}', [AddStudentController::class, 'deleteStudent'])->name('student.delete');
});

// Department Routes
Route::prefix('department')->group(function () {
    Route::get('/cse', [DepartmentController::class, 'cse'])->name('department.cse');
    Route::get('/eee', [DepartmentController::class, 'eee'])->name('department.eee');
    Route::get('/bba', [DepartmentController::class, 'bba'])->name('department.bba');
    Route::get('/civil', [DepartmentController::class, 'civil'])->name('department.civil');
    Route::get('/english', [DepartmentController::class, 'english'])->name('department.english');
    Route::get('/digital-marketing', [DepartmentController::class, 'digitalMarketing'])->name('department.digitalMarketing');
});

// Teacher Routes
Route::prefix('teacher')->group(function () {
    Route::get('/add', [TeacherController::class, 'addTeacher'])->name('teacher.add');
    Route::post('/store', [TeacherController::class, 'storeTeacher'])->name('teacher.store');
    Route::get('/all', [TeacherController::class, 'allTeacher'])->name('teacher.all');
    Route::get('/view/{id}', [TeacherController::class, 'viewTeacher'])->name('teacher.view');
    Route::get('/edit/{id}', [TeacherController::class, 'editTeacher'])->name('teacher.edit');
    Route::post('/update/{id}', [TeacherController::class, 'updateTeacher'])->name('teacher.update');
    Route::get('/delete/{id}', [TeacherController::class, 'deleteTeacher'])->name('teacher.delete');
});
