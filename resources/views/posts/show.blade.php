<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Post Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>

<body>
    <div class="container my-5 text-center">

        <h2>{{ $post->title }}</h2>

        <img class="w-50" src="{{ asset($post->image) }}" alt="">

        <div class="my-3">
            {{ $post->content }}
        </div>

        <hr>
        <div class="text-start w-75 mx-auto">
            <h3>Comments ({{ $post->comments->count() }})</h3>
            @foreach ($post->comments as $comment)
                <b>{{ $comment->user->name }}</b> - <small>{{ $comment->created_at->diffForHumans() }}</small>
                <p>{{ $comment->comment }}</p>
            @endforeach

            <br>
            <br>
            <h4>Add new Comment</h4>
            <form action="{{ route('posts.comment', $post) }}" method="post">
                @csrf
                <x-form.textarea name="comment" placeholder="Comment here.." rows="3" />
                <button class="btn btn-success">Place Comment</button>
            </form>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
