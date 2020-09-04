<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <style>
        #page-container {
          position: relative;
          min-height: 100vh;
        }

        #content-wrap {
            padding-bottom: 2.5rem; 
        }

        #footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            
        }
    </style>
</head>
<body>
     <div id="page-container">
        <div id="content-wrap">
        @include('layouts.navbar')
        @yield('header')

        @yield('body')

        @yield('footer')
        </div>
        @include('layouts.footer')
    </div>
</body>
</html>