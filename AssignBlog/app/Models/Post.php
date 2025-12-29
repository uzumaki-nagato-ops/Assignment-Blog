<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'content',
        'published_at',
    ];
    
    protected $casts = [
        'published_at' => 'datetime',
    ];

        public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
