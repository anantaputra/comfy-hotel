<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="icon" href="img/single-bed.png">
    <title>Comfy</title>
</head>
<body class="bg-blue-50">

    @include('partials.navbar')

    <div class="min-w-full px-20">

        @yield('container')

    </div>

</body>
</html>