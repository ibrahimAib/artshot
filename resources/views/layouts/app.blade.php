<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','ART SHOT || فن اللقطة')</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/food.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blade.css') }}">

</head>
<body class="bg-light" style="color: rgb(90, 90, 90)">

@include('layouts.navbar')
@yield('content')
@include('layouts.footer')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

    var hidden = false;
    function action() {
        hidden = !hidden;
        if(hidden) {
            document.getElementById('food').style.visibility = 'hidden';
        } else {
            document.getElementById('food').style.visibility = 'visible';
        }
    };
    function left(div){
        var leftPos = $(div).scrollLeft();
        console.log(leftPos);    
        $(div).animate({
            scrollLeft: leftPos - 300
        }, 400);
    };


    function right(div) {
        var leftPos = $(div).scrollLeft();
        console.log(leftPos); 
        $(div).animate({
            scrollLeft: leftPos + 300
        }, 400);
    };

    function show(ddd) {

        document.getElementById(ddd).style.visibility = "visible";
    }
    function hide(ddd) {

        document.getElementById(ddd).style.visibility = "hidden";
    }

</script>



</body>
</html>
