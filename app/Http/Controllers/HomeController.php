<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $name = "Ali";
        $age = "20";

        // resources/views/index.{php,html}
        return view('index');
    }

    function about()
    {
        return 'about page';
    }

    function contact()
    {
        return 'contact page';
    }

    function team()
    {
        return 'team page';
    }

    function blog()
    {
        return 'blog page';
    }

    function courses($name = null)
    {
        return $name . ' course page';
    }
}
