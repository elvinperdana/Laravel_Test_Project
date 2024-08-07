@extends('layouts.dashboard')

@section('title')
    Detail Post
@endsection

@section('content')
    <div class="d-flex">
        <div class="flex-grow-1">
            <div class="fw-bold" style="font-size: 26px">
                Title
            </div>
            <div class="d-flex align-items-center">
                <i class="fa-solid fa-user me-2" style="font-size: 14px"></i>
                <div style="font-size: 14px">
                    By Person
                </div>
            </div>

        </div>
        <div class="d-flex align-items-center text-secondary">
            <div>
                date
            </div>
            <i class="fa-solid fa-clock ms-2"></i>
        </div>
    </div>



    <div class="mt-4">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dignissimos dolorum maxime sint. Adipisci
        aliquam cupiditate dolor ex incidunt nesciunt nulla rerum totam, voluptas! Aperiam cum ea eos nemo pariatur.
        Aliquid, architecto aspernatur dolores ducimus eaque eius esse eum exercitationem, expedita harum illo in minus
        mollitia natus numquam officia pariatur perspiciatis ratione, recusandae reprehenderit sed similique sunt
        tenetur vel vitae voluptates voluptatibus. Consectetur consequuntur debitis dignissimos dolore doloremque ea
        harum inventore labore natus quae! Accusamus aperiam aspernatur assumenda deleniti deserunt doloribus eaque eos
        expedita fuga ipsa odio, omnis possimus, quia temporibus velit? Aliquid consectetur iusto, laudantium quibusdam
        repellat suscipit velit!
    </div>

    <hr class="my-4">

    <div class="card p-3 mb-2">
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
    <script src=""></script>
@endpush
