<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {
    Route::get('/', function () {
        return "Admin Page";
    })->name('index');

    Route::get('/posts', function () {
        return "Admin Posts Page";
    })->name('posts');

    Route::get('/products', function () {
        return "Admin Products Page";
    })->name('products');
});

// Route::get('/post/{post}', function(Post $post) {
//     // $post = Post::where('id', $id)->get();
//     return $post;
// });

// Route::resource();
