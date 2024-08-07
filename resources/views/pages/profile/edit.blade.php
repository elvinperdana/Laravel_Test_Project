@extends('layouts.profile')

@section('title')
    Edit Profile
@endsection

@section('content')
    <div class="text-uppercase fw-bold" style="font-size: 26px">
        Edit Profile
    </div>
    <div class="container mt-5" style="font-size: 18px">
        <form action="" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" required>
                </div>
                <div class="col-md-6">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName">
                </div>
            </div>

            <div class="mb-3">
                <label for="birthDate" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" id="birthDate" name="birthDate" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="tel" class="form-control" id="mobile" name="mobile">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control" id="address" name="address" rows="3"></textarea>
            </div>

            <div class="text-end mt-4">
                <button type="submit" class="btn btn-outline-dark">Submit</button>
            </div>
        </form>
    </div>
@endsection

@push('addon-script')
    <script>
        function validate(val) {
            v1 = document.getElementById("fname");
            v2 = document.getElementById("lname");
            v3 = document.getElementById("email");
            v4 = document.getElementById("mob");
            v5 = document.getElementById("job");
            v6 = document.getElementById("ans");

            flag1 = true;
            flag2 = true;
            flag3 = true;
            flag4 = true;
            flag5 = true;
            flag6 = true;

            if(val>=1 || val==0) {
                if(v1.value == "") {
                    v1.style.borderColor = "red";
                    flag1 = false;
                }
                else {
                    v1.style.borderColor = "green";
                    flag1 = true;
                }
            }

            if(val>=2 || val==0) {
                if(v2.value == "") {
                    v2.style.borderColor = "red";
                    flag2 = false;
                }
                else {
                    v2.style.borderColor = "green";
                    flag2 = true;
                }
            }
            if(val>=3 || val==0) {
                if(v3.value == "") {
                    v3.style.borderColor = "red";
                    flag3 = false;
                }
                else {
                    v3.style.borderColor = "green";
                    flag3 = true;
                }
            }
            if(val>=4 || val==0) {
                if(v4.value == "") {
                    v4.style.borderColor = "red";
                    flag4 = false;
                }
                else {
                    v4.style.borderColor = "green";
                    flag4 = true;
                }
            }
            if(val>=5 || val==0) {
                if(v5.value == "") {
                    v5.style.borderColor = "red";
                    flag5 = false;
                }
                else {
                    v5.style.borderColor = "green";
                    flag5 = true;
                }
            }
            if(val>=6 || val==0) {
                if(v6.value == "") {
                    v6.style.borderColor = "red";
                    flag6 = false;
                }
                else {
                    v6.style.borderColor = "green";
                    flag6 = true;
                }
            }

            flag = flag1 && flag2 && flag3 && flag4 && flag5 && flag6;

            return flag;
        }
    </script>
@endpush



