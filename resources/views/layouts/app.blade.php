<!DOCTYPE html>

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resource/css/app.css')
</head>
<body>
    @include('partials.header')


    @yield('content')

    @include('partials.footer')

</body>
</html>
