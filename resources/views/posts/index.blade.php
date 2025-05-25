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
        {{-- @dump(session('msg')) --}}
        @if (session('msg'))
            <div class="alert alert-{{ session('type') ?? 'success' }}">
                {{ session('msg') }}
            </div>
        @endif

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
                {{-- <tr onclick="window.location.href='{{ route('posts.show', $post->id) }}'"> --}}
                <tr>
                    <td>{{ $post->id }}</td>
                    <td><img width="100" src="{{ $post->path_image }}" alt=""></td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at->format('M d, Y') }}</td>
                    <td>{{ $post->updated_at->diffForHumans() }}</td>
                    <td>
                        <a class="btn btn-sm btn-success" href="{{ route('posts.show', $post->id) }}"><i
                                class="fas fa-eye"></i></a>
                        <a class="btn btn-sm btn-info" href="{{ route('posts.edit', $post->id) }}"><i
                                class="fas fa-edit"></i></a>
                        <form class="d-inline" action="{{ route('posts.destroy', $post->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>

                            {{-- <button onclick="return confirm('Are you sure?!')" class="btn btn-sm btn-danger"><i
                                    class="fas fa-trash"></i></button> --}}
                        </form>
                        {{-- <a class="btn btn-sm btn-danger" href="{{ route('posts.destroy', $post->id) }}"><i
                                class="fas fa-trash"></i></a> --}}
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $posts->appends($_GET)->links() }}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        let delete_forms = document.querySelectorAll('tr form')
        delete_forms.forEach(form => {
            form.onsubmit = (e) => {
                e.preventDefault();
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            }
        });
        // for (let i = 0; i < delete_forms.length; i++) {
        //     console.log(delete_forms[i]);
        // }
    </script>
</body>

</html>
