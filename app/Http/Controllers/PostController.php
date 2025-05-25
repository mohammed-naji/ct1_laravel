<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Contracts\View\View as ViewView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
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

        $searchTerm = $request->search;
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
        $data = $request->except('_token', 'image');
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('uploads', 'custom');
            $data['image'] = $path;
        }


        // 3. store in date
        // INSERT INTO my_posts (title, image, content) VALUES ()
        // DB::table('my_posts')->insert([
        //     'title' => $request->title,
        //     'image' => $path,
        //     'content' => $request->content,
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);

        // 1. using new object
        // $post = new Post();
        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->image = $path;
        // $post->save();
        // dd($post);

        // 2. using create method
        Post::create($data);

        // 4. redirect
        // return redirect()->route('posts.index')->with('msg', 'Post added successfully')->with('type', 'success');
        return redirect()
            ->route('posts.index')
            ->with('msg', 'Post added successfully');
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

    function destroy(Post $post)
    {
        // delete all related data
        File::delete(public_path($post->image));
        // delete from my_posts where id = 10
        $post->delete();

        return redirect()
            ->route('posts.index')
            ->with('msg', 'Post deleted successfully')
            ->with('type', 'danger');
    }

    function edit(Post $post): View
    {
        return view('posts.edit', compact('post'));
    }

    function update(PostRequest $request, Post $post)
    {
        // 1. validation

        // 2. store files
        // $path = $post->image;
        $data = $request->except('_token', '_method', 'image');
        if ($request->hasFile('image')) {
            File::delete(public_path($post->image));
            $path = $request->file('image')->store('uploads', 'custom');
            $data['image'] = $path;
        }

        // 3. store in database
        // update my_posts set col=val where id = 10;
        // $post->update([
        //     'title' => $request->title,
        //     'content' => $request->content,
        //     'image' => $path
        // ]);
        $post->update($data);

        return redirect()
            ->route('posts.index')
            ->with('msg', 'Post updated successfully')
            ->with('type', 'warning');
    }
}
