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
// Route::get('/', function () {
//     $name = "Ahmed";
//     $age = "20";
//     return "Home page - Welcome $name, your age is $age";
// });

// Route::get('/about', function () {
//     return "About Us Page";
// });

// Route::get('/contact', function () {
//     return "Contact Us Page";
// });

// Route::post('/contact', function () {
//     return "Contact Us Page - Form Data";
// });

// Route::get, post, put, patch, delete (url, action)
// Route::get('/home', function () {
//     return 'First Route';
// });

// Route::get('', function () {
//     return "Homeeee";
// });

// Route::get('/contact', function () {
//     return 'Contact Page';
// });

// Route::get('about', function () {
//     return 'About Page';
// });

// Route::get('/', function () {
//     return 'Home Page';
// });


// Route::get('/test', function () {
//     return 'Test Page';
// });

// Route::put('/test', function () {
//     return 'Test Page';
// });


Route::match(['patch', 'put'], '/test', function () {
    return 'Test Page';
});

Route::any('welcome', function () {
    return 'Welcome Page';
});


Route::redirect('/old', '/new');
// http://127.0.0.1:8000/new

// Route::get('/privacy', function () {
//     $text = "fdskjhbfdskjfs kkjfdsf
//     ds'fds4
//     f4
//     Log::useDailyFiles('
//     forward_static_callf
//     useDailyFilesds
//     forward_static_callfds
//     fclosedsa
//     forward_static_callfdsaf
//  days, 'level');";
//     return $text;
// });
// Route::view('/privacy', 'privacy');
// Route::get('/privacy', function () {
//     return view('privacy');
// });

Route::get('/user/{username}/{age?}/abc/eee/rrr', function ($username, $age = null) {
    if ($age) {
        return 'Welcomed ' . $username . ', your age ' . $age;
    }
    return 'Welcomed ' . $username;
})->whereAlpha('username')->whereNumber('age')->name('user');

Route::get('/', function () {
    // $url = '/user/ali/18/welcome';
    $url = route('user', ['ali', 20]);
    return "<a href='$url'>Go to Page</a>";
});

Route::get('/post/{id}', function ($id) {
    return "Show Post Number #$id";
})->whereNumber('id')->name('post.show');

Route::get('/', function () {
    return 'Welcome to the homepage!';
})->name('home.index');
