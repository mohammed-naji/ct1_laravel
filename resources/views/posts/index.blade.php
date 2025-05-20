<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>

<body>
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>All Posts</h1>
            <a href="{{ route('posts.create') }}" class="btn btn-dark"> <i class="fas fa-plus"></i> Add new Post</a>
        </div>
        <div class="mb-3">
            <form action="{{ route('posts.index') }}">
                <div class="row">
                    <div class="col-10">
                        <x-form.input name="search" placeholder="Search here.." value="{{ request()->search }}" />
                    </div>
                    <div class="col-2">
                        <button class="btn btn-success w-100"><i class="fas fa-search"></i> Search</button>
                    </div>
                </div>
            </form>
        </div>
        <table class="table table-hover table-striped">
            <tr class="table-dark">
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td><img width="100" src="{{ asset($post->image) }}" alt=""></td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                    <td>
                        <a class="btn btn-sm btn-success" href="{{ route('posts.show', $post->id) }}"><i
                                class="fas fa-eye"></i></a>
                        <a class="btn btn-sm btn-info" href=""><i class="fas fa-edit"></i></a>
                        <a class="btn btn-sm btn-danger" href=""><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $posts->appends($_GET)->links() }}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
