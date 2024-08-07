@extends('layouts.activity')

@section('title')
    Activity
@endsection

@section('content')
    <div class="d-grid mb-4">
        <a class="btn btn-primary" type="button" href="{{ route('view-create-post-activity') }}" style="">Create New Post</a>
    </div>

    <div class="container border rounded p-3">
        <div class="d-flex mb-3 ">
            <div class="flex-grow-1">
                <a class="item-click-detail fw-semibold" href="{{ route('detail') }}">
                    Title Post
                </a>
                <div class="text-secondary" style="font-size: 12px">
                    By Person
                </div>
            </div>
            <div class="d-flex align-items-center text-secondary">
                <div>
                    date
                </div>
                <i class="fa-solid fa-clock ms-2"></i>
            </div>
        </div>

        <div>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab cupiditate dolor ducimus, eaque, et eum eveniet
            facere fuga fugit iste iure modi mollitia necessitatibus nisi numquam officiis pariatur perspiciatis
            praesentium, quam quasi quia quibusdam repellat similique soluta veritatis! Assumenda atque blanditiis
            commodi cum dignissimos, eius ipsam nesciunt nobis numquam quis.
        </div>
    </div>
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
    </style>
@endpush
