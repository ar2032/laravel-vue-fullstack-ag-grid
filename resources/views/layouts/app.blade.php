<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>All Info</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('fontawesome')
</head>
<body class=antialiased>
    <div id="app">
        
            @yield('content')
       
    </div>
    <script src="{{mix('js/app.js')}}"></script>

</body>
</html>