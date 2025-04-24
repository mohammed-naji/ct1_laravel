<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::prefix('student')->name('student.')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('index');
    Route::get('/marks', [StudentController::class, 'marks'])->name('marks');
    Route::get('/avg', [StudentController::class, 'avg'])->name('avg');
});
