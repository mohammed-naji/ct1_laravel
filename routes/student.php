<?php

use Illuminate\Support\Facades\Route;

Route::get('student', function () {
    return "Student Page";
})->name('student.index');
Route::get('student/marks', function () {
    return "Student marks Page";
})->name('student.posts');
Route::get('student/avg', function () {
    return "Student avg Page";
})->name('student.avg');
