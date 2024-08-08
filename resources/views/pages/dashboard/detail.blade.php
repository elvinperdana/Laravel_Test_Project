@extends('layouts.dashboard')

@section('title')
    Detail
@endsection

@section('content')
    <div class="mb-3">
        <a class="btn btn-dark" href="{{ route('dashboard') }}">
            Back to Dashboard
        </a>
    </div>

    <div class="d-flex">
        <div class="flex-grow-1">
            <div class="fw-bold" style="font-size: 26px">
                {{ $post->title }}
            </div>
            <div class="d-flex align-items-center">
                <i class="fa-solid fa-user me-2" style="font-size: 14px"></i>
                <div style="font-size: 14px">
                    {{ $post->user_id }}
                </div>
            </div>

        </div>
        <div class="d-flex align-items-center text-secondary" style="font-size: 12px">
            {{ $post->created_at->format('F j, Y, g:i a') }}
        </div>
    </div>

    <div class="mt-4">
        {{ $post->content }}
    </div>

    <hr class="mt-4 mb-3">

    @auth
        <div>
            <div class="d-grid mb-2">
                <a class="btn btn-dark" type="button" id="button-comment-detail-dashboard" onclick="showCommentBox()">Comment</a>
            </div>
            <div id="container-form-comment-dashboard" class="d-none">
                <form action="{{ route('comment-detail-dashboard', $post->id) }}" method="POST">
                    @csrf
                    @method('POST')
                    <textarea class="form-control" rows="3" name="comment" placeholder="Write your comment here..."></textarea>
                    <div class="d-flex gap-1 mt-2 justify-content-end">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button class="btn btn-secondary" type="button" onclick="cancelComment()">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    @else
        <div class="d-grid mb-2">
            <a class="btn btn-dark" type="button" href="{{ route('login') }}">Login to Comment</a>
        </div>
    @endauth

    <div class="card p-3 mb-2 mt-3">
        <div class="container-comment">
            <div class="child-container-comment-1">
                <div class="fw-bold">
                    { Name }
                </div>
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-clock me-1 text-secondary" style="font-size: 12px"></i>
                    <div style="font-size: 12px" class="text-secondary">
                        { Date }
                    </div>
                </div>
                <div style="font-size: 14px">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, quos!
                </div>
                <a style="font-size: 14px" class="link-primary text-decoration-none" href="">
                    reply
                </a>
            </div>
            <div class="child-container-comment-2 ms-5">
                <div class="child-container-comment-3">
                    <div class="fw-bold">
                        { Name }
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-clock me-1 text-secondary" style="font-size: 12px"></i>
                        <div style="font-size: 12px" class="text-secondary">
                            { Date }
                        </div>
                    </div>
                    <div style="font-size: 14px">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, quos!
                    </div>
                    <a style="font-size: 14px" class="link-primary text-decoration-none" href="">
                        reply
                    </a>
                </div>
                <div class="child-container-comment-4 ms-5">
                    <div class="fw-bold">
                        { Name }
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-clock me-1 text-secondary" style="font-size: 12px"></i>
                        <div style="font-size: 12px" class="text-secondary">
                            { Date }
                        </div>
                    </div>
                    <div style="font-size: 14px">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, quos!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-style')

@endpush

@push('addon-script')
    <script>
        function showCommentBox() {
            document.getElementById('button-comment-detail-dashboard').classList.add('d-none');
            document.getElementById('container-form-comment-dashboard').classList.remove('d-none');
        }

        function cancelComment() {
            document.getElementById('button-comment-detail-dashboard').classList.remove('d-none');
            document.getElementById('container-form-comment-dashboard').classList.add('d-none');
            document.getElementById('container-form-comment-dashboard').value = '';
        }
    </script>
@endpush
