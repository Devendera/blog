@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $post->title }}</h1>
    @if($post->image)
        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" style="width: 100px; height: 100px;">
    @endif
    <p>By {{ $post->user->name }} | {{ $post->created_at->diffForHumans() }}</p>
    <p>{{ $post->content }}</p>

    @auth
        @if(auth()->id() == $post->user_id)
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit Post</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete Post</button>
            </form>
        @endif
    @endauth

    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to Posts</a>
</div>
@endsection
