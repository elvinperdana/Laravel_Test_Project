<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @include('includes.style')
    @stack('addon-style')
</head>
<body>
    @include('includes.navbar')

    <div class="container container-content">
        <div class="row content-field">
            <div class="col-9 pe-4">
                @yield('content')
            </div>
            <div class="col-3 border-start">
                @include('includes.sidebar')
            </div>
        </div>
    </div>

    @include('includes.footer')

    @include('includes.script')
    @stack('addon-script')
</body>
</html>
