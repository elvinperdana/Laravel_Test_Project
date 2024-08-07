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
                <p class="text-muted mb-0">Johnatan Smith</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3">
                <p class="mb-0">Email</p>
            </div>
            <div class="col-sm-9">
                <p class="text-muted mb-0">example@example.com</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3">
                <p class="mb-0">Phone</p>
            </div>
            <div class="col-sm-9">
                <p class="text-muted mb-0">(097) 234-5678</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3">
                <p class="mb-0">Mobile</p>
            </div>
            <div class="col-sm-9">
                <p class="text-muted mb-0">(098) 765-4321</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-3">
                <p class="mb-0">Address</p>
            </div>
            <div class="col-sm-9">
                <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
            </div>
        </div>
        <hr>
    </div>
    <div class="text-end mt-4">
        <button type="button" class="btn btn-outline-dark" onclick="redirectToEditProfile()">Edit</button>
    </div>

    <div class="text-center d-grid mt-5">
        <button type="button" class="btn btn-outline-dark" onclick="logout()">LOGOUT</button>
    </div>
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
