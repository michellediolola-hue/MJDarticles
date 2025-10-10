@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 800px; margin: 40px auto; background-color: #f9f9f6; padding: 30px; border-radius: 12px; box-shadow: 0 0 20px rgba(0,0,0,0.05); font-family: 'Helvetica Neue', sans-serif;">

    <h1 style="text-align: center; color: #333; margin-bottom: 40px;">Articles on Life & Faith</h1>

    @foreach($articles as $article)
        <div style="margin-bottom: 50px;">
            <h2 style="color: #444;">{{ $article->title }}</h2>
            <p><strong>Author:</strong> {{ $article->author->name ?? 'Unknown' }}</p>
            <p style="color: #555; line-height: 1.6;">{{ $article->content }}</p>

            <div style="margin-top: 20px;">
                <h4 style="margin-bottom: 10px;">Comments</h4>
                @forelse($article->comments as $comment)
                    <p style="color: #666;">💬 <strong>{{ $comment->author_name }}</strong>: {{ $comment->content }}</p>
                @empty
                    <p style="color: #999;">No comments yet.</p>
                @endforelse
            </div>
        </div>
    @endforeach

</div>
@endsection
