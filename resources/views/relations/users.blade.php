<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All Users</title>
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
            <h1>All Users</h1>
        </div>
        <table class="table table-hover table-striped">
            <tr class="table-dark">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Facebook</th>
                <th>Twitter</th>
                <th>LinkedIn</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->profile->fb }}</td>
                    <td>{{ $user->profile->tw }}</td>
                    <td>{{ $user->profile->li }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
