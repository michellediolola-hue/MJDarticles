<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Articles</title>
</head>
<body>
    <h1>Articles</h1>

    @foreach($articles as $article)
        <div style="margin-bottom: 30px;">
            <h2>{{ $article->title }}</h2>
            <p><strong>Author:</strong> {{ $article->author->name ?? 'Unknown' }}</p>
            <p>{{ $article->content }}</p>

            <h4>Comments:</h4>
            @forelse($article->comments as $comment)
                <p>💬 {{ $comment->author_name }}: {{ $comment->content }}</p>
            @empty
                <p>No comments yet.</p>
            @endforelse
        </div>
    @endforeach

</body>
</html>

