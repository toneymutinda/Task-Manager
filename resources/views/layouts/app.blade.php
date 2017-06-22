<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

       <!-- CSS And JavaScript -->
        <!-- Font awesome -->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <!-- Laravel app css -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Custom css -->
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        @stack('stylesheet')
</head>
<body>
    
    @include('partials.navbar')
    @yield('content')

        <!-- Bootstrap js -->
        <script src="{{ asset('plugins/jquery-3.2.0.min.js') }}"></script>
        <!-- Bootstrap js -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        @stack('script')
</body>
</html>
