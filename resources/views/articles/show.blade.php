<!DOCTYPE html>
<html>
<head>
    <title>{{ $article->title }}</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: 
#f7f7f7; }
        .article { background: white; padding: 20px; border-radius: 10px; 
}
        .comments { margin-top: 30px; }
        .comment { background: #fafafa; border-left: 4px solid #007bff; 
padding: 10px; margin-bottom: 10px; border-radius: 5px; }
        a { color: #007bff; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="article">
        <h1>{{ $article->title }}</h1>
        <p><strong>By:</strong> {{ $article->author->name ?? 'Unknown 
Author' }}</p>
        <p>{{ $article->content }}</p>
        <a href="{{ url('/articles') }}">← Back to all articles</a>
    </div>

    <div class="comments">
        <h3>Comments ({{ $article->comments->count() }})</h3>
        @forelse ($article->comments as $comment)
            <div class="comment">
                <strong>{{ $comment->author_name }}</strong>
                <p>{{ $comment->content }}</p>
            </div>
        @empty
            <p>No comments yet.</p>
        @endforelse
    </div>
</body>
</html>

