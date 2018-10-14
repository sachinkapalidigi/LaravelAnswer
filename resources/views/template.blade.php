<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LaravelAnswers</title>

        <script src="{{ asset('/js/app.js') }}"></script>
        <link href="{{asset('/css/app.css')}}" rel="stylesheet" type="text/css">

        <!-- Styles -->
        
    </head>
    <body>
            
        
            @include('_includes/nav/topnav')
            
            @yield('content')
            
            

          
        
    </body>
</html>
