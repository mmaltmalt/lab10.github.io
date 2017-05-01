<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ $title or "Taxi fare calculator" }}</title>
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/addmore.css">
    </head>
    <body>
        @include('layouts._navbar')
        <div class="container">
            @yield('content')
        </div>

        <script src="/js/app.js" charset="utf-8"></script>
        @yield('script')
    </body>
</html>
