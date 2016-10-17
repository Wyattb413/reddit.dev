<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reddit</title>
    @include('layout.partials.header')
</head>
<body>
    @include('layout.partials.navBar')

    @if(session()->has('SUCCESS_MESSAGE'))
        <div class="alert alert-success">
            <p>{{ session('SUCCESS_MESSAGE') }}</p>
        </div>
    @endif
    @if(session()->has('ERROR_MESSAGE'))
        <div class="alert alert-danger">
            <p>{{ session('ERROR_MESSAGE') }}</p>
        </div>
    @endif

    @yield('content')
    @include('layout.partials.footer')
</body>
</html>
