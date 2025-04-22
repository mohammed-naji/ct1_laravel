<?php

use Illuminate\Support\Facades\Route;

Route::get('admin', function () {
    return "Admin Page";
})->name('admin.index');
Route::get('admin/posts', function () {
    return "Admin Posts Page";
})->name('admin.posts');
Route::get('admin/products', function () {
    return "Admin Products Page";
})->name('admin.products');
