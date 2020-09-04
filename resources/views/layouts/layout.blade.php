<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>
    @include('layouts.navbar')
    @yield('header')

    @yield('body')

    @include('layouts.footer')
    @yield('footer')

</body>
</html>