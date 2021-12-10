@extends('layouts.main')

@section('container')
    
<div class="flex">
    <div class="block mt-20 w-1/2">
        <span class="font-semibold text-6xl">Make yourself feel </span>
        <span class="font-semibold text-6xl flex mt-4">comfy on holiday</span>
    </div>
    <div class="w-1/2 mt-8 ml-4">
        <img src="img/jogja123.png" alt="banner" style="height: 430px" class="rounded-xl">
    </div>
</div>
<div class="h-32 w-1/2 bg-white -mt-52 rounded-xl shadow-xl absolute">
    <div class="flex space-x-8 py-10 px-8">
        <div class="block">
            <div class="flex items-center mb-2 space-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span class="font-semibold text-lg">Location</span>
            </div>
            <span class="text-gray-500 font-light ml-7">Your destination?</span>
        </div>
        <div class="block">
            <div class="flex items-center mb-2 space-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <span class="font-semibold text-lg">Check in</span>
            </div>
            <span class="text-gray-500 font-light ml-7">09 Desember 2021</span>
        </div>
        <div class="block">
            <div class="flex items-center mb-2 space-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <span class="font-semibold text-lg">Check out</span>
            </div>
            <span class="text-gray-500 font-light ml-7">09 Desember 2021</span>
        </div>
        <button class="bg-blue-500 w-14 h-14 rounded-lg ring-1 hover:bg-blue-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 ml-3 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </button>
    </div>
</div>
<span class="flex font-bold text-lg mt-12">Explore Nearby</span>
<div class="grid grid-cols-4 gap-4 mt-4">
    <div class="flex h-24 w-50 mb-10 items-center cursor-pointer">
        <img src="https://source.unsplash.com/80x80?yogyakarta" alt="yogya" class="rounded-md">
        <div class="mx-4">
            <strong class="block font-bold text-lg">Yogyakarta</strong>
            <span class="font-light">1 Hour drive</span>
        </div>
    </div>
    <div class="flex h-24 w-50 mb-10 items-center cursor-pointer">
        <img src="https://source.unsplash.com/80x80?solo" alt="solo" class="rounded-md">
        <div class="mx-4">
            <strong class="block font-bold text-lg">Solo</strong>
            <span class="font-light">1 Hour drive</span>
        </div>
    </div>
    <div class="flex h-24 w-50 mb-10 items-center cursor-pointer">
        <img src="https://source.unsplash.com/80x80?semarang" alt="semarang" class="rounded-md">
        <div class="mx-4">
            <strong class="block font-bold text-lg">Semarang</strong>
            <span class="font-light">3 Hour drive</span>
        </div>
    </div>
    <div class="flex h-24 w-50 mb-10 items-center cursor-pointer">
        <img src="https://source.unsplash.com/80x80?surabaya" alt="surabaya" class="rounded-md">
        <div class="mx-4">
            <strong class="block font-bold text-lg">Surabaya</strong>
            <span class="font-light">5 Hour drive</span>
        </div>
    </div>
    <div class="flex h-24 w-50 mb-10 items-center cursor-pointer">
        <img src="https://source.unsplash.com/80x80?malang" alt="malang" class="rounded-md">
        <div class="mx-4">
            <strong class="block font-bold text-lg">Malang</strong>
            <span class="font-light">4 Hour drive</span>
        </div>
    </div>
    <div class="flex h-24 w-50 mb-10 items-center cursor-pointer">
        <img src="https://source.unsplash.com/80x80?bandung" alt="bandung" class="rounded-md">
        <div class="mx-4">
            <strong class="block font-bold text-lg">Bandung</strong>
            <span class="font-light">7 Hour drive</span>
        </div>
    </div>
    <div class="flex h-24 w-50 mb-10 items-center cursor-pointer">
        <img src="https://source.unsplash.com/80x80?jakarta" alt="jakarta" class="rounded-md">
        <div class="mx-4">
            <strong class="block font-bold text-lg">Jakarta</strong>
            <span class="font-light">8 Hour drive</span>
        </div>
    </div>
    <div class="flex h-24 w-50 mb-10 items-center cursor-pointer">
        <img src="https://source.unsplash.com/80x80?bali" alt="bali" class="rounded-md">
        <div class="mx-4">
            <strong class="block font-bold text-lg">Bali</strong>
            <span class="font-light">5 Day drive</span>
        </div>
    </div>
</div>
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
{{-- <div class="w-full mt-20 mb-2">
<svg viewBox="0 0 1440 550" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 20.7774C0 9.43276 9.42592 0.359553 20.7623 0.791982L668.5 25.5H806.5H958L1418.94 1.11399C1430.39 0.508508 1440 9.62525 1440 21.0861V430C1440 441.046 1431.05 550 1420 550H20C8.95431 550 0 441.046 0 430V20.7774Z" fill="#F9D0D0"/>
</svg>    
</div> --}}

@endsection