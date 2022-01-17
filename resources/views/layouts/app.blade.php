<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Real estate @yield('page-title', 'Welcome')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Script -->
    <script src="{{asset('js/app.js')}}" defer></script>

</head>

<body>
    @include('partials.header')

    <main id="site_main">@yield('content')</main>

    @include('partials.footer')


</body>

</html>
