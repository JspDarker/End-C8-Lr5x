<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{asset('images/sf.png')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <style type="text/css">
        body{
            margin-top: 60px;
        }
    </style>
    @yield('styles')
</head>
<body>
<header>
    @include('includes.nav-bar')
</header>
@yield('content')




<script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
@yield('styles')
</body>
</html>