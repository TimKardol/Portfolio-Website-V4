<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

{{--  JS and CSS  --}}
    <link rel="stylesheet" type="text/css" href="/css/app.css">
{{--    <script source="public/js/app.js"></script>--}}

</head>
<body>
{{--  NavBar  --}}
    <!-- Navigation Bar -->
    <div class="center-nav">
        <div class="topnav" id="myTopnav">
            <a href="/" class="{{ Request::path() === '/' ? 'active' : '' }}">Home</a>
            <a href="/about" class="{{ Request::path() === 'about' ? 'active' : '' }}">About</a>
            <a href="/articles" class="{{ Request::path() === 'articles' ? 'active' : '' }}">Articles</a>
            <a href="/dashboard" class="{{ Request::path() === 'dashboard' ? 'active' : '' }}">Dashboard</a>
            <div class="dropdown">
                <button class="dropbtn">Events
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="#">HBO-ICT Job Event</a>
                    <a href="#">Bedrijvensafari</a>
                </div>
            </div>
            <a href="javascript:void(0);" class="icon" onclick="toggleResponsive()">&#9776;</a>
        </div>
    </div>
    @yield('content')
</body>
</html>
