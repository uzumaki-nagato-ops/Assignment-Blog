<!DOCTYPE html>
<html>
<head>
    <title>{{ $post->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark px-4">
    <a href="/blog" class="navbar-brand">⬅ Back to Blog</a>
</nav>

<div class="container mt-4">

    <h1>{{ $post->title }}</h1>

    <p class="text-muted">
        Published on {{ $post->published_at->format('F d, Y') }}
    </p>

    <hr>

    <p>{{ $post->content }}</p>
    <hr>

<h3>Comments</h3>

@if ($post->comments->count() > 0)
    @foreach ($post->comments as $comment)
        <div style="margin-bottom: 15px; padding: 10px; border: 1px solid #ddd;">
            <strong>{{ $comment->author_name }}</strong>
            <br>
            <small>{{ $comment->created_at->format('M d, Y') }}</small>
            <p>{{ $comment->content }}</p>
        </div>
    @endforeach
@else
    <p>No comments yet.</p>
@endif

<hr>

<h3>Leave a Comment</h3>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li style="color:red">{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="/api/posts/{{ $post->slug }}/comments">
    @csrf

    <div>
        <label>Name</label><br>
        <input type="text" name="author_name" required>
    </div><br>

    <div>
        <label>Email</label><br>
        <input type="email" name="author_email" required>
    </div><br>

    <div>
        <label>Comment</label><br>
        <textarea name="content" rows="4" required></textarea>
    </div><br>

    <button type="submit">Submit Comment</button>
</form>


</div>

</body>
</html>
