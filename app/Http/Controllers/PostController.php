<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PostController extends Controller
{
    function index(Request $request): View
    {
        // $posts = DB::table('my_posts')->get();
        // $posts = Post::all(); // select * from posts
        // dd($posts);

        // $posts = Post::orderBy('id', 'DESC')->get(); // select * from my_posts order by id desc
        // $posts = Post::latest('id')->get(); // select * from my_posts order by id desc

        // $posts = Post::select('id', 'title')->orderBy('id', 'desc')->get();

        // $name != $NAME
        // simplepaginage == simplePaginate
        // $posts = Post::latest()->paginate(env('PAGINATION_COUNT'));
        // $posts = Post::latest()->simplePaginate(env('PAGINATION_COUNT'));

        // dd($posts);

        // $posts = Post::query();
        // if ($request->search) {
        //     // dd('Search logic');
        //     $posts = $posts->where('title', 'like', '%' . $request->search . '%');
        // }
        // // dd('All posts');
        // $posts = $posts->latest()->paginate(env('PAGINATION_COUNT'));

        $searchTerm = $request->input('search');
        $posts = Post::query()
            ->when($searchTerm, function ($query, $searchTerm) {
                $query->where('title', 'like', '%' . $searchTerm . '%');
                $query->orWhere('content', 'like', '%' . $searchTerm . '%');
            })
            ->latest()
            ->paginate(env('PAGINATION_COUNT', 10));
        // ->withQueryString();

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

    function show(Post $post)
    {
        // id = 30
        // select * from my_posts where id = 6
        // $post = Post::findOrFail($id);
        // dd($post);
        // if (!$post) {
        //     abort(404);
        // }
        return view('posts.show', compact('post'));
    }
}
