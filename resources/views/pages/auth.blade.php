@extends('layouts.auth')

@section('title')
    Login
@endsection

@section('content')
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                        <input class="checkbox-auth-form" type="checkbox" id="reg-log" name="reg-log"/>
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Log In</h4>
                                            <div class="form-group d-flex align-items-center">
                                                <i class="input-icon fa-regular fa-envelope"></i>
                                                <input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">
                                            </div>
                                            <div class="form-group mt-4 d-flex align-items-center">
                                                <i class="input-icon fa-solid fa-key"></i>
                                                <input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
                                            </div>
                                            <a href="#" class="btn mt-4">submit</a>
                                            <p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-back">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Sign Up</h4>

                                            <div class="form-group d-flex align-items-center">
                                                <i class="input-icon fa-regular fa-user" style="padding-right: 13.8px"></i>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <input type="text" name="logfirstname" class="form-style" placeholder="First Name" id="logfirstname" autocomplete="off">
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" name="loglastname" class="form-style" placeholder="Last Name" id="loglastname" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex mt-4 align-items-center">
                                                <i class="input-icon fa-regular fa-envelope"></i>
                                                <input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">
                                            </div>
                                            <div class="form-group d-flex mt-4 align-items-center">
                                                <i class="input-icon fa-solid fa-key"></i>
                                                <input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
                                            </div>
                                            <a href="#" class="btn mt-4">submit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@push('addon-style')
    <style>
        body{
            font-family: 'Poppins', sans-serif;
            font-weight: 300;
            font-size: 15px;
            line-height: 1.7;
            color: #ffffff;
            background-color: #201E43;
            overflow-x: hidden;
        }
        a {
            cursor: pointer;
            transition: all 200ms linear;
        }
        a:hover {
            text-decoration: none;
        }
        .link {
            color: #ffffff;
        }
        .link:hover {
            color: #ffeba7;
        }
        p {
            font-weight: 500;
            font-size: 14px;
            line-height: 1.7;
        }
        h4 {
            font-weight: 600;
        }
        h6 span{
            padding: 0 20px;
            text-transform: uppercase;
            font-weight: 700;
        }
        .section{
            position: relative;
            width: 100%;
            display: block;
        }
        .full-height{
            min-height: 100vh;
        }
        [type="checkbox"]:checked,
        [type="checkbox"]:not(:checked){
            position: absolute;
            left: -9999px;
        }
        .checkbox-auth-form:checked + label,
        .checkbox-auth-form:not(:checked) + label{
            position: relative;
            display: block;
            text-align: center;
            width: 60px;
            height: 16px;
            border-radius: 8px;
            padding: 0;
            margin: 10px auto;
            cursor: pointer;
            background-color: #ffeba7;
        }
        .checkbox-auth-form:checked + label:before,
        .checkbox-auth-form:not(:checked) + label:before{
            position: absolute;
            display: block;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            color: #ffeba7;
            background-color: #102770;
            content: '\2196';
            z-index: 20;
            top: -10px;
            left: -10px;
            line-height: 36px;
            text-align: center;
            font-size: 24px;
            transition: all 0.5s ease;
        }
        .checkbox-auth-form:checked + label:before {
            transform: translateX(44px) rotate(-290deg);
        }

        .card-3d-wrap {
            position: relative;
            width: 550px;
            max-width: 100%;
            height: 400px;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            perspective: 800px;
            margin-top: 60px;
        }
        .card-3d-wrapper {
            width: 100%;
            height: 100%;
            position:absolute;
            top: 0;
            left: 0;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            transition: all 600ms ease-out;
        }
        .card-front, .card-back {
            width: 100%;
            height: 100%;
            background-color: #508C9B;
            background-position: bottom center;
            background-repeat: no-repeat;
            background-size: 300%;
            position: absolute;
            border-radius: 6px;
            left: 0;
            top: 0;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -o-backface-visibility: hidden;
            backface-visibility: hidden;
        }
        .card-back {
            transform: rotateY(180deg);
        }
        .checkbox-auth-form:checked ~ .card-3d-wrap .card-3d-wrapper {
            transform: rotateY(180deg);
        }
        .center-wrap{
            position: absolute;
            width: 100%;
            padding: 0 35px;
            top: 50%;
            left: 0;
            transform: translate3d(0, -50%, 35px) perspective(100px);
            z-index: 20;
            display: block;
        }
        .form-style {
            padding: 13px 20px;
            height: 48px;
            width: 100%;
            font-weight: 500;
            border-radius: 4px;
            font-size: 14px;
            line-height: 22px;
            letter-spacing: 0.5px;
            outline: none;
            color: #ffffff;
            background-color: #134B70;
            border: none;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
            box-shadow: 0 4px 8px 0 rgba(21,21,21,.2);
        }
        .form-style:focus,
        .form-style:active {
            border: none;
            outline: none;
            box-shadow: 0 4px 8px 0 rgba(21,21,21,.2);
        }
        .input-icon {
            top: 0;
            left: 18px;
            padding-right: 10px;
            font-size: 30px;
            text-align: left;
            color: #ffffff;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
        }

        .form-group input:-ms-input-placeholder  {
            color: #ffffff;
            opacity: 0.7;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
        }
        .form-group input::-moz-placeholder  {
            color: #ffffff;
            opacity: 0.7;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
        }
        .form-group input:-moz-placeholder  {
            color: #ffffff;
            opacity: 0.7;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
        }
        .form-group input::-webkit-input-placeholder  {
            color: #ffffff;
            opacity: 0.7;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
        }
        .form-group input:focus:-ms-input-placeholder  {
            opacity: 0;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
        }
        .form-group input:focus::-moz-placeholder  {
            opacity: 0;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
        }
        .form-group input:focus:-moz-placeholder  {
            opacity: 0;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
        }
        .form-group input:focus::-webkit-input-placeholder  {
            opacity: 0;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
        }

        .btn{
            border-radius: 4px;
            height: 44px;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            -webkit-transition : all 200ms linear;
            transition: all 200ms linear;
            padding: 0 30px;
            letter-spacing: 1px;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -moz-align-items: center;
            -ms-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            -moz-justify-content: center;
            -ms-justify-content: center;
            justify-content: center;
            -ms-flex-pack: center;
            text-align: center;
            border: none;
            background-color: #EEEEEE;
            color: #201E43;
            box-shadow: 0 8px 24px 0 rgb(238, 238, 238, .2);
        }
        .btn:active,
        .btn:focus{
            background-color: #ffffff;
            color: #134B70;
            box-shadow: 0 8px 24px 0 rgba(16,39,112,.2);
        }
        .btn:hover{
            background-color: #201E43;
            color: #EEEEEE;
            box-shadow: 0 8px 24px 0 rgb(32, 30, 67,.2);
        }
    </style>
@endpush

@push('addon-script')
    <script>

    </script>
@endpush





