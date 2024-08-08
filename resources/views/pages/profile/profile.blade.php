@extends('layouts.profile')

@section('title')
    Profile
@endsection

@section('content')
    <div class="text-uppercase fw-bold" style="font-size: 26px">
        Profile
    </div>
    <div class="container mt-5" style="font-size: 18px">
        <div class="row">
            <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
            </div>
            <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $user->name }}</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3">
                <p class="mb-0">Email</p>
            </div>
            <div class="col-sm-9">
                <p class="text-muted mb-0">{{ $user->email }}</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3">
                <p class="mb-0">Member Since</p>
            </div>
            <div class="col-sm-9">
                <p class="text-muted mb-0">{{ date_format($user->created_at, 'M d, Y') }}</p>
            </div>
        </div>
        <hr>
    </div>
    <div class="text-end mt-4">
        <button type="button" class="btn btn-dark" onclick="redirectToEditProfile()">Edit</button>
    </div>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <div class="text-center d-grid mt-5">
            <a class="btn btn-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">LOGOUT</a>
        </div>
    </form>
@endsection

@push('addon-script')
    <script>
        function redirectToEditProfile() {
            window.location.href = "{{ route('view-edit-profile') }}";
        }

        function logout() {
            alert('logout')
        }
    </script>
@endpush
