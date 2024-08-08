@extends('layouts.profile')

@section('title')
    Edit Profile
@endsection

@section('content')
    <div>
        <a class="btn btn-dark" href="{{ route('profile') }}">
            Back to Profile
        </a>
    </div>
    <div class="row mt-3">
        <div class="col-md-6 pb-4">
            <div class="text-uppercase fw-bold" style="font-size: 26px">
                Edit Profile
            </div>
            <div class="container mt-3" style="font-size: 18px">
                <form action="{{ route('update-profile') }}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required
                               value="{{  $user->name }}">
                        @if ($errors->has('name'))
                            <div class="text-danger text-decoration-underline" id="error-message-update-name-profile">
                                {{ $errors->first('name') }}
                            </div>

                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    var statusMessage = document.getElementById('error-message-update-name-profile');
                                    if (statusMessage) {
                                        setTimeout(function () {
                                            statusMessage.style.display = 'none';
                                        }, 5000);
                                    }
                                });
                            </script>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required
                               value="{{ $user->email }}">
                        @if ($errors->has('email'))
                            <div class="text-danger text-decoration-underline" id="error-message-update-email-profile">
                                {{ $errors->first('email') }}
                            </div>

                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    var statusMessage = document.getElementById('error-message-update-email-profile');
                                    if (statusMessage) {
                                        setTimeout(function () {
                                            statusMessage.style.display = 'none';
                                        }, 5000);
                                    }
                                });
                            </script>
                        @endif
                    </div>
                    <div class="d-flex justify-content-between mt-4">
                        <div class="align-content-center">
                            @if (session('status') === 'profile-updated')
                                <div class="mb-0 alert alert-success alert-dismissible fade show py-1" role="alert"
                                     id="statusMessage" style="font-size: 14px">
                                    Data Saved
                                </div>

                                <script>
                                    document.addEventListener('DOMContentLoaded', function () {
                                        var statusMessage = document.getElementById('statusMessage');
                                        if (statusMessage) {
                                            setTimeout(function () {
                                                statusMessage.style.display = 'none';
                                            }, 2000);
                                        }
                                    });

                                    alert('Profile\'s Data has been Updated')
                                </script>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="text-uppercase fw-bold" style="font-size: 26px">
                Update Password
            </div>
            <div class="container mt-3" style="font-size: 18px">
                <form action="{{ route('password.update') }}" method="POST">
                    @csrf
                    @method('put')

                    <div class="mb-3">
                        <label for="update_password_current_password" class="form-label">Current Password</label>
                        <input type="password" class="form-control" id="update_password_current_password"
                               name="current_password" required>
                        @if ($errors->has('email'))
                            <div class="text-danger text-decoration-underline" id="error-message-update-email-profile">
                                {{ $errors->first('email') }}
                            </div>

                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    var statusMessage = document.getElementById('error-message-update-email-profile');
                                    if (statusMessage) {
                                        setTimeout(function () {
                                            statusMessage.style.display = 'none';
                                        }, 5000);
                                    }
                                });
                            </script>
                        @endif
                        @if ($errors->updatePassword->has('current_password'))
                            <div class="text-danger text-decoration-underline" id="error-message-current-password-profile">
                                {{ $errors->updatePassword->first('current_password') }}
                            </div>

                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    var statusMessage = document.getElementById('error-message-current-password-profile');
                                    if (statusMessage) {
                                        setTimeout(function () {
                                            statusMessage.style.display = 'none';
                                        }, 5000);
                                    }
                                });
                            </script>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="update_password_password" class="form-label">New Password</label>
                        <input type="password" class="form-control" id="update_password_password" name="password" required>
                        @if ($errors->updatePassword->has('password'))
                            <div class="text-danger text-decoration-underline" id="error-message-password-profile">
                                {{ $errors->updatePassword->first('password') }}
                            </div>

                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    var statusMessage = document.getElementById('error-message-password-profile');
                                    if (statusMessage) {
                                        setTimeout(function () {
                                            statusMessage.style.display = 'none';
                                        }, 5000);
                                    }
                                });
                            </script>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="update_password_password_confirmation" class="form-label">Confirm New Password</label>
                        <input type="password" class="form-control" id="update_password_password_confirmation" name="password_confirmation" required>
                        @if ($errors->updatePassword->has('password_confirmation'))
                            <div class="text-danger text-decoration-underline" id="error-message-confirmation-password-profile">
                                {{ $errors->updatePassword->first('password_confirmation') }}
                            </div>

                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    var statusMessage = document.getElementById('error-message-confirmation-password-profile');
                                    if (statusMessage) {
                                        setTimeout(function () {
                                            statusMessage.style.display = 'none';
                                        }, 5000);
                                    }
                                });
                            </script>
                        @endif
                    </div>
                    <div class="d-flex justify-content-between mt-4">
                        <div class="align-content-center">
                            @if (session('status') === 'password-updated')
                                <div class="mb-0 alert alert-success alert-dismissible fade show py-1" role="alert"
                                     id="statusMessagePassword" style="font-size: 14px">
                                    Password Updated
                                </div>

                                <script>
                                    document.addEventListener('DOMContentLoaded', function () {
                                        var statusMessage = document.getElementById('statusMessagePassword');
                                        if (statusMessage) {
                                            setTimeout(function () {
                                                statusMessage.style.display = 'none';
                                            }, 2000);
                                        }
                                    });

                                    alert('Password has been Updated')
                                </script>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')

@endpush



