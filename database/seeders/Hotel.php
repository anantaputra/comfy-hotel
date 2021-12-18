<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Hotel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 5; $i++){

            DB::table('cities')->insert([
                'city' => $faker->city,
                'country' => 'Indonesia',
            ]);
        }

        for($i = 1; $i <= 20; $i++){
            DB::table('hotels')->insert([
                'nama_hotel' => 'Hotel'.' '.$faker->name,
                'id_city' => mt_rand(1,5),
                'address' => $faker->address,
                'phone' => $faker->phoneNumber
            ]);
        }

        $rooms = ['Standard Room', 'Twin Room', 'Deluxe Room', 'Suite Room'];
        for($i = 0; $i <= 3; $i++){
            DB::table('room_size')->insert([
                'room_name' => $rooms[$i],
            ]);
        }

        $prices = ['','180000', '230000','200000','210000','180000', '230000','200000','210000'
        ,'180000', '230000','200000','210000','180000', '230000','200000','210000'
        ,'180000', '230000','200000','210000','180000', '230000','200000','210000'
        ,'180000', '230000','200000','210000','200000','210000'];
        for($i = 1; $i <= 30; $i++){
            DB::table('hotel_rooms')->insert([
                'id_hotel' => mt_rand(1,20),
                'id_room_size' => mt_rand(1,4),
                'price' => $prices[$i],
                'rating' => mt_rand(1,5)
            ]);
        }
    }
}
