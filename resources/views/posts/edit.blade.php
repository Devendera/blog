@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Post</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $post->title) }}" required>
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control" required>{{ old('content', $post->content) }}</textarea>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            @if($post->image) <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" style="width: 100px; height: 100px;"> @endif 
                <input type="file" name="image" id="image" class="form-control"> </div>
              <button type="submit" class="btn btn-primary">Update Post</button>
        </form>    
        </div> 
        @endsection
