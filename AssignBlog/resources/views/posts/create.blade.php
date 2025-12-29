<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
</head>
<body>

<h2>Create Blog Post</h2>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li style="color:red">{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="/posts">
    @csrf

    <div>
        <label>Title</label><br>
        <input type="text" name="title" required>
    </div><br>

    <div>
        <label>Content</label><br>
        <textarea name="content" rows="6" required></textarea>
    </div><br>

    <div>
        <label>
            <input type="checkbox" name="publish">
            Publish now
        </label>

    </div><br>

    <button type="submit">Save Post</button>
</form>

<br>
<a href="/dashboard">⬅ Back to Dashboard</a>

</body>
</html>
