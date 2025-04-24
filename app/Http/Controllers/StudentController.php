<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index()
    {
        return 'index page';
    }

    function marks()
    {
        return 'marks page';
    }

    function avg()
    {
        return 'avg page';
    }
}
