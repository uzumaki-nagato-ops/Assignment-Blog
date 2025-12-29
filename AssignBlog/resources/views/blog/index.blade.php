@php use Illuminate\Support\Str; @endphp

<!DOCTYPE html>
<html>
<head>
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark px-4">
    <span class="navbar-brand">My Blog</span>
</nav>

<div class="container mt-4">

    <h2 class="mb-4">Latest Posts</h2>

    @foreach($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <h4>
                    <a href="/blog/{{ $post->slug }}" class="text-decoration-none">
                        {{ $post->title }}
                    </a>
                </h4>

                <p class="text-muted">
                    {{ Str::limit($post->content, 150) }}
                </p>
            </div>
        </div>
    @endforeach

</div>

</body>
</html>
