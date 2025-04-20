<?php

use Illuminate\Support\Facades\Route;

// Route::post('/', function () {
//     return "Home Page";
// });

// Route::get('/', function () {
//     return "Home Page - Get Method";
// });

// Route::put('/', function () {
//     return "Home Page";
// });

// Route::patch('/', function () {
//     return "Home Page";
// });

// Route::delete('/', function () {
//     return "Home Page";
// });

// Route::get('/about-us', function () {
//     return "About Us Page";
// });

// Route::type('url', 'action');

// use // using class
// namespace // define new class


// Route::get('/', function () {});
// Route::post('/', function () {});
// Route::put('/', function () {});
// Route::patch('/', function () {});
// Route::delete('/', function () {});

// home , about , contact
Route::get('/', function () {
    $name = "Ahmed";
    $age = "20";
    return "Home page - Welcome $name, your age is $age";
});

Route::get('/about', function () {
    return "About Us Page";
});

Route::get('/contact', function () {
    return "Contact Us Page";
});

Route::post('/contact', function () {
    return "Contact Us Page - Form Data";
});
