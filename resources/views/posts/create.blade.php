<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create new Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>

<body>
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Create new Post</h1>
            <a href="{{ route('posts.index') }}" class="btn btn-dark"> <i class="fas fa-arrow-left"></i> All Posts</a>
        </div>

        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <x-form.input name="title" label="Title" placeholder="Post title.." />
            <x-form.input name="image" type="file" label="Image" />
            <x-form.textarea name="content" label="Content" placeholder="Post content.." />
            <button class="btn btn-success px-4"><i class="fas fa-save"></i> Save</button>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
