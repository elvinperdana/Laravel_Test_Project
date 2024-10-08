@extends('layouts.activity')

@section('title')
    Create Post
@endsection

@section('content')
    <form action="{{ route('create-post-activity') }}" method="POST">
        @csrf
        <div class="container border rounded p-3">
            <div class="mb-3">
                <label for="titlePost" class="form-label">Title</label>
                <input type="text" class="form-control" id="titlePost" name="title" required>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5"></textarea>
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
