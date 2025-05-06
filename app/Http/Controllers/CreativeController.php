<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreativeController extends Controller
{
    function index()
    {
        $title = "Our Services - new";
        $features = [
            [
                'id' => 1,
                'title' => "Open SSL",
                'price' => "Free"
            ],
            [
                'id' => 2,
                'title' => "Shared Hosting",
                'price' => "10$"
            ],
            [
                'id' => 3,
                'title' => "VPS Hosting",
                'price' => "50$"
            ],
            [
                'id' => 4,
                'title' => "Dedicated Server",
                'price' => "1200$"
            ],
            [
                'id' => 5,
                'title' => "Free Emails",
                'price' => "Free"
            ],
        ];
        return view('creative.index', compact('title', 'features'));
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
