<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="icon" href="img/single-bed.png">
    <title>{{$title}}</title>
</head>
<body class="bg-blue-50">

    @include('partials.navbar')

    <div class="min-w-full px-20">

        @yield('container')

    </div>

    <script src="js/home.js"></script>

    {{-- datepicker tailwind --}}
    <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/datepicker.bundle.js"></script>

</body>
</html>