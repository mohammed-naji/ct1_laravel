<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentController extends Controller
{
    function index()
    {
        return view('test_components');
    }
}
