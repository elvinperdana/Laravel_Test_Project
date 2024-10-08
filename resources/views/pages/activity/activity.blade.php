@extends('layouts.activity')

@section('title')
    Activity
@endsection

@section('content')
    <div class="d-grid mb-4">
        <a class="btn btn-dark" type="button" href="{{ route('view-create-post-activity') }}" style="">Create New
            Post</a>
    </div>
    @if($posts->isEmpty())
        <div class="fw-bolder text-center mb-4" style="font-size: 20px">
            You don't have any posts yet
        </div>
    @else
        @foreach($posts as $post)
            <div class="container border rounded p-3 mb-4">
                <div class="d-flex mb-3 ">
                    <div class="flex-grow-1">
                        <a class="item-click-detail fw-semibold" href="{{ route('view-detail-activity', $post->id) }}">
                            {{ $post->title }}
                        </a>
                        <div class="text-secondary" style="font-size: 12px">
                            {{ $post }}
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-end text-secondary">
                        <div class="d-flex gap-1">
                            <form action="{{ route('destroy-post-activity', $post->id) }}" method="POST"
                                  onsubmit="return confirm('Are you sure you want to delete this post?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-dark btn-xs" type="submit">
                                    <x-tabler-trash class="icon-xs"/>
                                </button>
                            </form>
                            <form action="{{ route('view-edit-post-activity', $post->id) }}" method="GET">
                                @csrf
                                <button class="btn btn-dark btn-xs" type="submit">
                                    <x-tabler-edit class="icon-xs"/>
                                </button>
                            </form>
                        </div>

                        <div style="font-size: 12px" class="text-secondary">
                            {{ $post->created_at->format('F j, Y, g:i a') }}
                        </div>
                    </div>
                </div>

                <div style="font-size: 14px">
                    {{ $post->content }}
                </div>
            </div>
        @endforeach
    @endif
@endsection

@push('addon-script')
    <script>
        $(document).ready(function () {
            $('.item-post-list').click(function () {
                var itemData = $(this).data('item');
                alert('Item clicked! Data: ' + JSON.stringify(itemData));
            });
        });

        @if (session('status') === 'post-deleted')
        alert('Post has been Deleted')
        @endif

        @if (session('status') === 'post-updated')
        alert('Post has been Updated')
        @endif
    </script>
@endpush

@push('addon-style')
    <style>
        .item-click-detail {
            color: black;
            text-decoration: none;
            position: relative;
            overflow: hidden;
            display: inline-block;
        }

        .item-click-detail::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: 0;
            height: 2px;
            width: 0;
            background: blue;
            transform: translateX(-50%);
            transition: width 0.3s;
        }

        .item-click-detail:hover {
            color: blue;
        }

        .item-click-detail:hover::after {
            width: 100%;
        }

        .btn-xs {
            padding: 3px;
            display: flex;
        }
    </style>
@endpush
