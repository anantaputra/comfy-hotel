@extends('layouts.main')

@section('container')

<div class="grid grid-cols-1 place-items-center">
    <div class="w-2/3 h-auto py-10 px-8">
        <div class="w-full h-20 bg-white flex place-items-center justify-between px-8 border rounded-t-md cursor-pointer" id="detail">
            <p class="text-xl font-bold">Detail</p>
            <div class="rounded-full bg-gray-300 h-8 w-8 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white hidden expand-detail" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white show-detail" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </div>
        </div>        
        <div class="w-full px-4 py-4 bg-white border rounded-b-md" id="detail_info">
            <p class="text-lg font-semibold text-blue-400">{{ $title }}</p>
            <div class="w-full py-4 inline-grid grid-cols-2">
                <p>Check-in</p>
                <p>{{ $in }}</p>
                <p>Check-out</p>
                <p>{{ $out }}</p>
                <p>Room type</p>
                <p>{{ $room }}</p>
                <p>Qty</p>
                <p>1 Room</p>
                <p>Price</p>
                <p>Rp {{ $price }}</p>
            </div>
            <div class="flex justify-end">
                <button type="button" class="w-32 h-10 text-white bg-blue-700 shadow-md hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-5 text-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="nextInfo()">Next</button>
            </div>
        </div>
    </div>
    <div class="w-2/3 h-auto py-10 px-8 -mt-16">
        <div class="w-full h-20 bg-white flex place-items-center justify-between px-8 border rounded-t-md cursor-pointer" id="your_info">
            <p class="text-xl font-bold">Your Information</p>
            <div class="rounded-full bg-gray-300 h-8 w-8 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white expand-your" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white show-your hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </div>
        </div>        
        <div class="w-full px-4 py-4 bg-white border rounded-b-md hidden" id="detail_your_info">
            <form action="/payment" method="post">
                <div class="mb-2">
                    <label for="name" class="font-semibold">Contact's Name</label>
                    <input type="text" id="name" name="name" class="w-full mt-1 border border-gray-400 rounded-md px-3 py-2 focus:outline-none">
                </div>
                <div class="grid grid-cols-2 space-x-6 mb-2">
                    <div class="space-y-1">
                        <label for="phone" class="font-semibold">Phone Number</label>
                        <div class="flex relative">
                            <input type="text" name="phone" class="w-full border border-gray-400 rounded-md pl-12 pr-3 py-2 focus:outline-none" id="phone">
                            <label class="h-full absolute py-2 px-2 bg-gray-200 border border-gray-400 rounded-l-md">+62</label>
                        </div>
                    </div>
                    <div>
                        <label for="email" class="font-semibold">Contact's Email</label>
                        <input type="email" id="email" name="email" class="w-full mt-1 border border-gray-400 rounded-md px-3 py-2 focus:outline-none">
                    </div>
                </div>
                <div class="grid grid-cols-2 px-2 mt-2">
                    <div class="flex items-center">
                        <input type="radio" name="myself" id="myself" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" checked>
                        <label for="myself" class="ml-2 text-lg font-semibold">I'm the guest</label>
                    </div>
                    <div class="flex items-center">
                        <input type="radio" name="myself" id="myself" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                        <label for="myself" class="ml-2 text-lg font-semibold">I'm book for another person</label>
                    </div>
                </div>
                <div class="flex justify-end mt-4">
                    <button type="submit" class="w-auto h-10 text-white bg-blue-700 shadow-md hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-5 text-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Continue Booking</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection