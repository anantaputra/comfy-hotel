<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="img/single-bed.png">
    <title>{{$title}}</title>
</head>
<body class="bg-blue-50" onload="today()">

    <div class="min-w-full px-20">

        @yield('container')

    </div>

    {{-- datepicker tailwind --}}
    <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/datepicker.bundle.js"></script>

    {{-- midtrans js --}}
    <script id="midtrans-script" type="text/javascript"src="https://api.midtrans.com/v2/assets/js/midtrans-new-3ds.min.js"data-environment="sandbox"data-client-key="SB-Mid-client-kg7ESatio1iCaYc_"></script>


    <script>
        function today(){
            const today = new Date()
            let date = today.getDate()
            let month = today.getMonth() + 1
            let year = today.getFullYear()

            document.querySelector('#check-in').value = date+"/"+month+"/"+year
            document.querySelector('#check-out').value = date + 1+"/"+month+"/"+year

        }
    </script>

</body>
</html>