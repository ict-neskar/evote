<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    @stack('prepend-style')
    @include('includes.styles')
    
</head>

<body>
    @yield('content')
    
    @stack('addon-script')
    @include('includes.scripts')
    
</body>
    
</html>