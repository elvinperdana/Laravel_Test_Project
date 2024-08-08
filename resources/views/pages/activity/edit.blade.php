@extends('layouts.activity')

@section('title')
    Edit Post
@endsection

@section('content')
    <div class="mb-3">
        <a class="btn btn-dark" href="{{ route('activity') }}">
            Back to Activity
        </a>
    </div>
    <form action="{{ route('edit-post-activity', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="container border rounded p-3">
            <div class="mb-3">
                <label for="titlePost" class="form-label">Title</label>
                <input type="text" class="form-control" id="titlePost" name="title" required value="{{ $post->title }}">
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5">{{ $post->content }}</textarea>
            </div>

            <div class="d-grid">
                <button class="btn btn-dark" type="submit">Post</button>
            </div>
        </div>
    </form>
@endsection

@push('addon-script')
    <script>
    </script>
@endpush

@push('addon-style')
    <style>
    </style>
@endpush
