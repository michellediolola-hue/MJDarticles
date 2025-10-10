<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['author_id', 'title', 'content'];

    // ✅ Each article belongs to one author
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    // ✅ Each article has many comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
