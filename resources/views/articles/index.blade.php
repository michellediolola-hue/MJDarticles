@extends('layouts.app')

@section('title', 'Articles')

@section('content')
    <h1>📰 Articles</h1>

    @foreach($articles as $article)
        <div style="margin-bottom: 30px; border-bottom: 1px solid #ddd; padding-bottom: 20px;">
            <h2>{{ $article->title }}</h2>
            <p><strong>Author:</strong> {{ $article->author->name ?? 'Unknown' }}</p>
            <p>{{ $article->content }}</p>

            <h4>Comments:</h4>
            @forelse($article->comments as $comment)
                <p>💬 <strong>{{ $comment->author_name }}</strong>: {{ $comment->content }}</p>
            @empty
                <p><em>No comments yet.</em></p>
            @endforelse
        </div>
    @endforeach
@endsection


