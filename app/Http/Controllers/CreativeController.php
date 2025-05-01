<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreativeController extends Controller
{
    function index()
    {
        return view('creative.index');
    }

    function about()
    {
        return view('creative.about');
    }

    function services()
    {
        return view('creative.services');
    }

    function portfolio()
    {
        return view('creative.portfolio');
    }

    function contact()
    {
        return view('creative.contact');
    }
}
