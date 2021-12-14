@extends('layouts.main')

@section('container')

{{-- slogan --}}
<div class="flex">
    <div class="block mt-20 w-1/2">
        <span class="font-semibold text-6xl">Make yourself feel </span>
        <span class="font-semibold text-6xl flex mt-4">comfy on holiday</span>
    </div>
    {{-- foto objek wisata --}}
    <div class="w-1/2 mt-8 ml-4">
        <img src="img/jogja123.png" alt="banner" style="height: 430px" class="rounded-xl">
    </div>
</div>
{{-- end of slogan --}}

{{-- search bar --}}
<div class="h-32 w-1/2 bg-white -mt-52 rounded-xl shadow-xl absolute">
    <div class="flex space-x-8 py-10 px-8">
        <div class="block">
            <label for="lokasi">
                <div class="flex items-center mb-2 space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span class="font-semibold text-lg cursor-pointer">Location</span>
                </div>
            </label>
            <div>
                <input type="text" id="lokasi" name="lokasi" class="ml-7 w-full focus:outline-none" autocomplete="off" placeholder="Your destination?" onfocus="lokasi()">
            </div>
        </div>
        <div class="block">
            <label for="check-in">
                <div class="flex items-center mb-2 space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span class="font-semibold text-lg cursor-pointer">Check in</span>
                </div>
            </label>
            <div class="relative">
                <input datepicker type="text" class="ml-7 w-full focus:outline-none cursor-text" id="check-in" placeholder="--Select date--">
            </div>
        </div>
        <div class="block">
            <label for="check-out">
                <div class="flex items-center mb-2 space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span class="font-semibold text-lg cursor-pointer">Check out</span>
                </div>
            </label>
            <div class="relative">
                <input datepicker type="text" class="ml-7 w-full focus:outline-none cursor-text" id="check-out" placeholder="--Select date--">
            </div>
        </div>
        <button class="bg-blue-500 w-14 h-14 rounded-lg ring-1 hover:bg-blue-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 m-3 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </button>
    </div>
</div>
{{-- end of search bar --}}

{{-- cities name box --}}
<div class="absolute w-1/3 hidden" id="location">
    <div class="h-40 overflow-auto bg-white shadow-md border rounded-md relative -mt-24">
        @foreach ($city as $item)
            <button class="flex h-auto w-full py-2 items-center pl-6 border cursor-pointer hover:bg-blue-50" onclick="chooseCity()">
                <span class="id-city{{ $item->id }} hidden">{{ $item->id }}</span>
                <span class="kota">{{ $item->city }},</span>
                <span>&nbsp;</span>
                <span class="negara">{{ $item->country }}</span>
            </button>
        @endforeach
    </div>
</div>
{{-- end of cities name box --}}

{{-- form login popup --}}
<div class="-mt-20 popup-login mb-32 hidden">
    <div class="absolute bg-white h-auto w-1/3 -mt-96 mx-auto rounded-md shadow-lg" style="margin-left: 30%">
        <div class="flex justify-end mr-4 mt-4">
            <svg xmlns="http://www.w3.org/2000/svg" id="close-login-btn" class="h-5 w-5 cursor-pointer hover:text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </div>
        <div class="mx-auto grid place-items-center py-2">
            <strong class="text-3xl block">Login</strong>
            <form action="/login" method="post" class="mt-8 space-y-4 w-full px-10">
                @csrf
                <div class="space-y-1">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="w-full border border-gray-500 rounded-md px-3 py-2 @error('email') is-invalid @enderror" id="email">
                    @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="space-y-1">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="w-full border border-gray-500 rounded-md px-3 py-2 @error('password') is-invalid @enderror" id="password">
                    @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <input type="checkbox" name="show" id="show">
                    <label for="show">Tampilkan sandi</label>
                </div>
                <div>
                    <span class="text-blue-500 hover:text-blue-600"><a href="">Forget password?</a></span>
                </div>
                <div>
                    <button type="submit" class="w-full h-10 -mt-1 font-semibold bg-blue-500 text-white rounded-md hover:bg-blue-700">
                        Login
                    </button>
                </div>
            </form>
            <div class="flex space-x-2 mt-2 mb-4">
                <span>No Account? </span>
                <button class="text-blue-500 hover:text-blue-600" id="register-btn">Create one here</button>
            </div>
        </div>
    </div>
</div>
{{-- end of form login popup --}}

{{-- form register popup --}}
<div class="popup-signup -mt-32 mb-44 hidden">
    <div class="absolute bg-white h-auto w-1/3 -mt-96 mx-auto rounded-md shadow-lg" style="margin-left: 30%">
        <div class="flex justify-end mr-4 mt-4">
            <svg xmlns="http://www.w3.org/2000/svg" id="close-register-btn" class="h-5 w-5 cursor-pointer hover:text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </div>
        <div class="mx-auto grid place-items-center py-2">
            <strong class="text-3xl block -mt-2">Register</strong>
            <form action="/register" method="post" class=" space-y-2 w-full px-10">
                @csrf
                <div class="flex space-x-3">
                    <div class="w-1/2 space-y-1">
                        <label for="firstname">Firstname</label>
                        <input type="text" name="firstname" class="w-full border border-blue-400 rounded-md px-3 py-2 focus:outline-none @error('firstname') is-invalid @enderror" id="firstname">
                        @error('firstname')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="w-1/2 space-y-1">
                        <label for="lastname">Lastname</label>
                        <input type="text" name="lastname" class="w-full border border-blue-400 rounded-md px-3 py-2 focus:outline-none @error('lastname') is-invalid @enderror" id="lastname">
                        @error('lastname')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="space-y-1">
                    <label for="email_register">Email address</label>
                    <input type="text" name="email_register" class="w-full border border-blue-400 rounded-md px-3 py-2 focus:outline-none @error('email_register') is-invalid @enderror" id="email_register">
                    @error('email_register')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="space-y-1">
                    <label for="password-register">Choose password</label>
                    <input type="password" name="password_register" class="w-full border border-blue-400 rounded-md px-3 py-2 focus:outline-none @error('password_register') is-invalid @enderror" id="password-register">
                    @error('password_register')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="space-y-1">
                    <label for="confirmpassword">Confirm password</label>
                    <input type="password" name="confirmpassword" class="w-full border border-blue-400 rounded-md px-3 py-2 focus:outline-none @error('confirmpassword') is-invalid @enderror" id="confirmpassword">
                    @error('confirmpassword')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="space-y-1">
                    <label for="phone">Phone number</label>
                    <div class="flex relative">
                        <input type="text" name="phone_number" class="w-full border border-blue-400 rounded-md pl-12 pr-3 py-2 focus:outline-none @error('phone_number') is-invalid @enderror" id="phone">
                        <label class="h-full absolute py-2 px-2 bg-gray-200 border border-blue-400">+62</label>
                    </div>
                    @error('phone_number')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <input type="checkbox" name="show-register" id="show-register">
                    <label for="show-register">Tampilkan sandi</label>
                </div>
                <div>
                    <button type="submit" class="w-full h-10 mt-2 font-semibold bg-blue-500 text-white rounded-md hover:bg-blue-700">
                        Register
                    </button>
                </div>
            </form>
            <div class="flex space-x-2 mt-2 mb-4">
                <span>Already have account? </span>
                <button class="text-blue-500 hover:text-blue-600">Sign in</button>
            </div>
        </div>
    </div>
</div>
{{-- end of form register popup --}}

{{-- error validation form --}}
@if (Session::has('errors'))
    @if ($errors->has('email') || $errors->has('password'))
        <script>
            document.querySelector('.popup-login').style.display = 'block'
        </script>
    @else
        <script>
            document.querySelector('.popup-signup').style.display = 'block'
        </script>
    @endif
@endif
{{-- end of error validation form --}}

{{-- destination nearby --}}
<span class="flex font-bold text-lg mt-12">Explore Nearby</span>
<div class="grid grid-cols-4 gap-4 mt-4">
    <div class="flex h-24 w-50 mb-10 items-center">
        <img src="https://source.unsplash.com/80x80?yogyakarta" alt="yogya" class="rounded-md cursor-pointer">
        <div class="mx-4">
            <strong class="block font-bold text-lg cursor-pointer">Yogyakarta</strong>
            <span class="font-light cursor-pointer">1 Hour drive</span>
        </div>
    </div>
    <div class="flex h-24 w-50 mb-10 items-center">
        <img src="https://source.unsplash.com/80x80?solo" alt="solo" class="rounded-md cursor-pointer">
        <div class="mx-4">
            <strong class="block font-bold text-lg cursor-pointer">Solo</strong>
            <span class="font-light cursor-pointer">1 Hour drive</span>
        </div>
    </div>
    <div class="flex h-24 w-50 mb-10 items-center">
        <img src="https://source.unsplash.com/80x80?semarang" alt="semarang" class="rounded-md cursor-pointer">
        <div class="mx-4">
            <strong class="block font-bold text-lg cursor-pointer">Semarang</strong>
            <span class="font-light cursor-pointer">3 Hour drive</span>
        </div>
    </div>
    <div class="flex h-24 w-50 mb-10 items-center">
        <img src="https://source.unsplash.com/80x80?surabaya" alt="surabaya" class="rounded-md cursor-pointer">
        <div class="mx-4">
            <strong class="block font-bold text-lg cursor-pointer">Surabaya</strong>
            <span class="font-light cursor-pointer">5 Hour drive</span>
        </div>
    </div>
    <div class="flex h-24 w-50 mb-10 items-center">
        <img src="https://source.unsplash.com/80x80?malang" alt="malang" class="rounded-md cursor-pointer">
        <div class="mx-4">
            <strong class="block font-bold text-lg cursor-pointer">Malang</strong>
            <span class="font-light cursor-pointer">4 Hour drive</span>
        </div>
    </div>
    <div class="flex h-24 w-50 mb-10 items-center">
        <img src="https://source.unsplash.com/80x80?bandung" alt="bandung" class="rounded-md cursor-pointer">
        <div class="mx-4">
            <strong class="block font-bold text-lg cursor-pointer">Bandung</strong>
            <span class="font-light cursor-pointer">7 Hour drive</span>
        </div>
    </div>
    <div class="flex h-24 w-50 mb-10 items-center">
        <img src="https://source.unsplash.com/80x80?jakarta" alt="jakarta" class="rounded-md cursor-pointer">
        <div class="mx-4">
            <strong class="block font-bold text-lg cursor-pointer">Jakarta</strong>
            <span class="font-light cursor-pointer">8 Hour drive</span>
        </div>
    </div>
    <div class="flex h-24 w-50 mb-10 items-center">
        <img src="https://source.unsplash.com/80x80?bali" alt="bali" class="rounded-md cursor-pointer">
        <div class="mx-4">
            <strong class="block font-bold text-lg cursor-pointer">Bali</strong>
            <span class="font-light cursor-pointer">5 Day drive</span>
        </div>
    </div>
</div>
{{-- end of destination nearby --}}

{{-- partnership --}}
<div class="h-80 w-full mt-32 rounded-t-lg bg-blue-100">
    <div class="pt-32">
        <div class="w-72 h-auto mx-auto grid place-items-center">
            <strong class="font-semibold text-4xl block mb-2">Become a Host</strong>
            <span class="text-md font-medium">Earn extra income and unlock</span> 
            <span class="text-md font-medium -mt-1">new opportunities by sharing </span> 
            <span class="text-md font-medium -mt-1">your space</span>
        </div>
        <button class="rounded-sm shadow-sm ring-1 bg-blue-500 text-white w-28 h-10 mx-auto grid place-items-center mt-4 hover:bg-blue-600">Learn more</button>
    </div>
</div>
<div class="absolute grid grid-cols-2 gap-96">
    <div>
        <img src="https://source.unsplash.com/200x240?female" alt="wanita" class="rounded-md -mt-96 ml-20">
        <img src="https://source.unsplash.com/100x100?female-workout" alt="wanita" class="rounded-md mt-8 ml-8">
        <img src="https://source.unsplash.com/80x100?female-barista" alt="wanita" class="rounded-md -mt-40 ml-80">
    </div>
    <div class="-mt-8 mr-4">
        <img src="https://source.unsplash.com/200x240?male" alt="wanita" class="rounded-md -mt-96 ml-20">
        <img src="https://source.unsplash.com/100x100?male-workout" alt="wanita" class="rounded-md mt-8 ml-8">
        <img src="https://source.unsplash.com/80x100?male-barista" alt="wanita" class="rounded-md -mt-40 ml-80">
    </div>
</div>
{{-- end of partnership --}}

<script>
    $(document).ready(function(){
        $('#lokasi').on('keyup', function(){
            var query = $(this).val();
            console.log(query)
            $.ajax({
                url:'city',
                type:'GET',
                data:{'lokasi':query},
                success:function(data){
                    $('#location').html(data)
                }
            })
            document.querySelector('#location').style.display = 'block'
        })
    })
</script>

@endsection