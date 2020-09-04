<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</head>
<body>

    @include('layouts.navbar')
    @yield('header')

    @yield('body')

    @yield('footer')

    
</body>
</html>