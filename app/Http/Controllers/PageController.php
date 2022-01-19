<?php

namespace App\Http\Controllers;

use App\Models\Cities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PageController extends Controller
{
    public function home()
    {

        $cities = Cities::all();

        return view('home', [
            'title' => 'Comfy',
            'cities' => $cities,
        ]);
    }

    public function hotel(Request $request)
    {

        $request->validate([
            'lokasi' => 'required'
        ]);

        $lokasi = $request->lokasi;
        $checkin = $request->checkin;
        $checkout = $request->checkout;

        $hotel = DB::table('hotel_rooms')
                ->join('room_size', 'id_room_size', '=', 'room_size.id')
                ->join('hotels', 'id_hotel', '=', 'hotels.id')
                ->join('cities', 'id_city', '=', 'cities.id')
                ->select('hotels.nama_hotel', 'room_size.room_name', 'cities.city', 
                'hotel_rooms.price', 'hotel_rooms.rating')
                ->where('cities.city', '=', $lokasi)
                ->paginate(5);
        $hotel->appends(['lokasi' => $lokasi]);

        return view('list-hotels', [
            'title' => 'Hotels in '.$lokasi,
            'hotels' => $hotel,
            'lokasi' => $lokasi,
            'checkin' => $checkin,
            'checkout' => $checkout
        ]);
    }

    public function pesan(Request $request)
    {
        $hotel = $request->hotel;
        $room = $request->room;
        $city = $request->city;
        $price = $request->price;
        $in = $request->in;
        $out = $request->out;

        return view('summary', [
            'title' => $hotel,
            'room' => $room,
            'price' => $price,
            'in' => $in,
            'out' => $out
        ]);

    }
}
