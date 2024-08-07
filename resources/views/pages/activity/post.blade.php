@extends('layouts.activity')

@section('title')
    Activity
@endsection

@section('content')
    <div class="container border rounded p-3">
        <div class="mb-3">
            <label for="titlePost" class="form-label">Title</label>
            <input type="text" class="form-control" id="titlePost" name="titlePost" required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Content</label>
            <textarea class="form-control" id="address" name="address" rows="5"></textarea>
        </div>

        <div class="d-grid">
            <a class="btn btn-primary" type="button" href="" style="">Post</a>
        </div>
    </div>

@endsection

@push('addon-script')
    <script>
    </script>
@endpush

@push('addon-style')
    <style>
    </style>
@endpush
