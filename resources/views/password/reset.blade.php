<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="https://docs.google.com/uc?id=1et2FvhVrTwsFk0qzDcPnsG3WFKbvyacl">
    <title>Reset Password</title>
</head>
<body class="bg-blue-50">
    <div class="min-w-full absolute flex bg-white h-24 justify-between container px-20 py-6">
        <div class="flex">
            <a href="/">
                <div class="flex items-center space-x-4 cursor-pointer" id="icon">
                    <img src="https://docs.google.com/uc?id=1et2FvhVrTwsFk0qzDcPnsG3WFKbvyacl" alt="icon" style="width: 30px; height: 30px">
                    <span class="text-gray-500 text-2xl font-semibold">Comfy</span>
                </div>
            </a>
        </div>
    </div>
    <div class="h-28">

    </div>
    <div class="min-w-full h-full px-20 py-2 flex justify-center">
        <div class="w-1/3 bg-white h-auto mx-auto rounded-md shadow-md border py-8">
            <div class="mx-auto grid place-items-center py-2 mt-6">
                <strong class="text-3xl block -mt-2">Change Your Password</strong>
                <form action="/reset-password" method="post" class="space-y-4 w-full px-10 mt-8">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    @error('token')    
                        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                            <span class="font-medium">{{ $message }}</span>
                        </div>
                    @enderror
                    @if (Session::has('message'))
                        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                            <span class="font-medium">{{ Session::get('message') }}</span>
                        </div>
                    @endif
                    <div>
                        <input type="text" name="email" class="w-full border border-blue-400 rounded-md px-3 py-2 focus:outline-none @error('email') is-invalid @enderror" id="email" placeholder="Email address">
                        @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <input type="password" name="password" class="w-full border border-blue-400 rounded-md px-3 py-2 focus:outline-none @error('password') is-invalid @enderror" id="password" placeholder="Password">
                        @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <input type="password" name="confirmpassword" class="w-full border border-blue-400 rounded-md px-3 py-2 focus:outline-none @error('confirmpassword') is-invalid @enderror" id="confirmpassword" placeholder="Confirm password">
                        @error('confirmpassword')
                                <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <input type="checkbox" name="show" id="show">
                        <label for="show">Tampilkan sandi</label>
                    </div>
                    <div>
                        <button type="submit" class="w-full h-12 mt-2 font-semibold bg-blue-500 text-white rounded-md hover:bg-blue-700">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        var show = false
        document.getElementById('show').addEventListener("click",function(){
            if(show){
                document.getElementById('password').setAttribute("type", "password")
                document.getElementById('confirmpassword').setAttribute("type", "password")
                show = false
            } else {
                document.getElementById('password').setAttribute("type", "text")
                document.getElementById('confirmpassword').setAttribute("type", "text")
                show = true
            }
        })
    </script>
</body>
</html>