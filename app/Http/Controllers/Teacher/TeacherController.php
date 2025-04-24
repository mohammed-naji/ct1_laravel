<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    function index(): string
    {
        return 'index page';
    }

    function marks(): string
    {
        return 'marks page';
    }

    function avg(): string
    {
        return 'avg page';
    }
}
