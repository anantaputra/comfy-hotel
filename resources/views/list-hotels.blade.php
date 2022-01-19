@extends('layouts.main')

@section('container')

@foreach ($hotels as $hotel)
    
    <div class="w-full h-auto p-6 bg-white rounded-md shadow-sm mt-2 mb-4">
        <form action="/pesan" method="post">
            @csrf
            <input type="text" name="hotel" class="hidden" value="{{ $hotel->nama_hotel }}">
            <input type="text" name="room" class="hidden" value="{{ $hotel->room_name }}">
            <input type="text" name="city" class="hidden" value="{{ $hotel->city }}">
            <input type="text" name="price" class="hidden" value="{{ $hotel->price }}">
            <input type="text" name="in" class="hidden" value="{{ $checkin }}">
            <input type="text" name="out" class="hidden" value="{{ $checkout }}">
            <div class="flex px-4 space-x-10">
                <img src="https://source.unsplash.com/400x300?hotel-room" alt="" 
                class="rounded-md shadow-sm">
                <div class="w-full h-full grid grid-cols-1">
                    <strong class="text-3xl">{{ $hotel->nama_hotel }}</strong>
                    <span>{{ $hotel->room_name }}</span>
                    <span>{{ $hotel->rating }}</span>
                    <span>{{ $hotel->city }}</span>
                    <span>Rp. {{ $hotel->price }}</span>
                </div>
            </div>
            <div class="w-full ml-20">
                <button class="w-1/2 h-14 relative bottom-14 ml-96 bg-blue-400 text-white rounded-md
                ">Pesan</button>
            </div>
        </form>
    </div>

@endforeach

{{ $hotels->links() }}
    
@endsection