@extends('layouts.dashboard')

@section('title')
    Dashboard
@endsection

@section('content')
    @if($posts->isEmpty())
        <div class="fw-bolder text-center mb-4" style="font-size: 20px">
            No posts yet
        </div>
    @else
        @foreach($posts as $post)
            <div class="container border rounded p-3 mb-4">
                <div class="d-flex mb-3 ">
                    <div class="flex-grow-1">
                        <a class="item-click-detail fw-semibold" href="{{ route('view-detail-dashboard', $post->id) }}">
                            {{ $post->title }}
                        </a>
                        <div class="text-secondary" style="font-size: 12px">
                            {{ $post->author_name }}
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-end text-secondary">
                        <div style="font-size: 12px">
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
        $(document).ready(function() {
            $('.item-post-list').click(function() {
                var itemData = $(this).data('item');
                alert('Item clicked! Data: ' + JSON.stringify(itemData));
            });
        });
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
