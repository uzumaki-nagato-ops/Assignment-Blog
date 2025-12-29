<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background: #007bff;
            padding: 15px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .container {
            padding: 30px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 6px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 15px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }

        .btn:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-dark bg-primary px-4">
    <span class="navbar-brand mb-0 h1">Admin Dashboard</span>

    <form method="POST" action="/logout">
        @csrf
        <button class="btn btn-light btn-sm">Logout</button>
    </form>
</nav>

<div class="container mt-4">

    <div class="alert alert-success">
        Welcome 👋 You are logged in as <strong>{{ auth()->user()->email }}</strong>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>Your Blog Posts</h4>
                <a href="/posts/create" class="btn btn-primary">
                    ➕ Create Post
                </a>
            </div>

            @if($posts->count() === 0)
                <p>No posts yet.</p>
            @else
                <table class="table table-bordered">
                    <thead>
    <tr>
        <th>Title</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
                    </thead>
                        <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>
                                <span class="badge {{ $post->published_at ? 'bg-success' : 'bg-secondary' }}">
                                    {{ $post->published_at ? 'Published' : 'Draft' }}
                                </span>
                            </td>
                            <td>
                                <a href="/posts/{{ $post->id }}/edit" class="btn btn-warning btn-sm px-2">
    ✏️
                                </a>

                                <form action="/posts/{{ $post->id }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm px-2"
                                        onclick="return confirm('Delete this post?')">
                                        🗑️
                                    </button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            @endif

        </div>
    </div>

</div>

</body>
</html>
