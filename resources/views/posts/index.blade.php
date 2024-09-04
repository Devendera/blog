@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Your Posts</h1>

    @if($posts->count())
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-4">
                    <div class="card mb-4">
                        @if($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}" style="width: 100px; height: 100px; object-fit: cover;">
                        @endif
                        <div class="card-body">
                            <!-- Link to the edit page -->
                            <h5 class="card-title">
                                <a href="{{ route('posts.edit', $post->id) }}" class="text-decoration-none">
                                    {{ $post->title }}
                                </a>
                            </h5>
                            <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Read More</a>

                            <!-- Edit and Delete buttons -->
                            <div class="d-flex justify-content-between mt-3">
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning me-2">Edit Post</a>

                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete Post</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    @else
        <p>You haven't created any posts yet.</p>
    @endif
</div>
@endsection
