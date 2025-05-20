<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PostController extends Controller
{
    function index(): View
    {
        $posts = DB::table('my_posts')->get();

        return view('posts.index', compact('posts'));
    }

    function create(): View
    {
        return view('posts.create');
    }

    function store(PostRequest $request)
    {
        // dd($request->all());
        // 1. validation => Done

        // 2. save file
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('uploads', 'custom');
        }

        // 3. store in date
        // INSERT INTO my_posts (title, image, content) VALUES ()
        DB::table('my_posts')->insert([
            'title' => $request->title,
            'image' => $path,
            'content' => $request->content,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // 4. redirect
        return redirect()->route('posts.index');
    }
}
