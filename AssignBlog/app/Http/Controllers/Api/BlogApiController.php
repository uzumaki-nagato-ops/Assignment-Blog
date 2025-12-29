<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class BlogApiController extends Controller
{
    // Fetch all published posts
    public function posts()
    {
        return Post::whereNotNull('published_at')
            ->latest()
            ->get();
    }

    // Fetch single published post by slug
    public function show($slug)
    {
        return Post::where('slug', $slug)
            ->whereNotNull('published_at')
            ->firstOrFail();
    }

    // Fetch comments for a published post
    public function comments($slug)
    {
        $post = Post::where('slug', $slug)
            ->whereNotNull('published_at')
            ->firstOrFail();

        return $post->comments()->latest()->get();
    }

    // Submit comment for a published post
    public function storeComment(Request $request, $slug)
    {
        $request->validate([
            'author_name' => 'required|string',
            'author_email' => 'required|email',
            'content' => 'required|string',
        ]);

        $post = Post::where('slug', $slug)
            ->whereNotNull('published_at')
            ->firstOrFail();

        return Comment::create([
            'post_id' => $post->id,
            'author_name' => $request->author_name,
            'author_email' => $request->author_email,
            'content' => $request->content,
        ]);

        return back(); 
    }
}
