<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

{{--  JS and CSS  --}}
    <link rel="stylesheet" type="text/css" href="/css/layout.css">
{{--    <script source="public/js/app.js"></script>--}}

</head>
<body>
{{--  NavBar  --}}
    <!-- Navigation Bar -->
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/events">Events</a>
        @auth
            <a href="/dashboard">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</a>
        @endauth
        @guest
            <a href="/register">Register</a>
            <a href="/login">Login</a>
        @endguest

    </nav>
    @yield('content')
</body>
</html>
