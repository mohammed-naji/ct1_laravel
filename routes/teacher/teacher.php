<?php

use Illuminate\Support\Facades\Route;

Route::get('teacher', function () {
    return "Teacher Page";
})->name('teacher.index');
Route::get('teacher/marks', function () {
    return "Teacher marks Page";
})->name('teacher.posts');
Route::get('teacher/avg', function () {
    return "Teacher avg Page";
})->name('teacher.avg');
