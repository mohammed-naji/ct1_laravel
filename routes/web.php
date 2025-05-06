<?php

use App\Http\Controllers\AgencyController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\CreativeController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\Site1Controller;
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

// Route::get('/', function () {
//     // $url = '/user/ali/18/welcome';
//     $url = route('user', ['ali', 20]);
//     return "<a href='$url'>Go to Page</a>";
// });

// Route::get('/post/{id}', function ($id) {
//     return "Show Post Number #$id";
// })->whereNumber('id')->name('post.show');

// Route::get('/', function () {
//     return 'Welcome to the homepage!';
// })->name('home.index');


// Final Route
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/courses/{name?}', [HomeController::class, 'courses'])->name('courses')->whereAlphaNumeric('name');

// $name = "ali";
// echo $name;

// site1
// site1/about
// site1/contact
Route::prefix('site1')->name('site1.')->group(function () {
    Route::get('/', [Site1Controller::class, 'index'])->name('index');
    Route::get('/about', [Site1Controller::class, 'about'])->name('about');
    Route::get('/contact', [Site1Controller::class, 'contact'])->name('contact');
    Route::post('/contact', [Site1Controller::class, 'contact_data']);
    Route::get('{teacher}/students/', [Site1Controller::class, 'students'])->name('students');
    Route::get('/{name}/{age?}', [Site1Controller::class, 'user'])->name('user');
});


Route::prefix('creative')->name('creative.')->group(function () {
    Route::get('/', [CreativeController::class, 'index'])->name('index');
    Route::get('/about', [CreativeController::class, 'about'])->name('about');
    Route::get('/services', [CreativeController::class, 'services'])->name('services');
    Route::get('/portfolio', [CreativeController::class, 'portfolio'])->name('portfolio');
    Route::get('/contact', [CreativeController::class, 'contact'])->name('contact');
});


Route::prefix('personal')->name('personal.')->group(function () {
    Route::get('/', [PersonalController::class, 'index'])->name('index');
    Route::get('/contact', [PersonalController::class, 'contact'])->name('contact');
    Route::get('/projects', [PersonalController::class, 'projects'])->name('projects');
    Route::get('/resume', [PersonalController::class, 'resume'])->name('resume');
});

Route::get('component', [ComponentController::class, 'index']);
Route::get('agency', [AgencyController::class, 'index']);

// Forms Route
Route::get('/form1', [FormsController::class, 'form1'])->name('forms.form1');
Route::post('/form1', [FormsController::class, 'form1_data']);

Route::get('/form2', [FormsController::class, 'form2'])->name('forms.form2');
Route::post('/form2', [FormsController::class, 'form2_data']);
