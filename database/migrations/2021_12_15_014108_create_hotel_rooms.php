<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelRooms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_rooms', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_hotel')->unsigned();
            $table->bigInteger('id_room_size')->unsigned();
            $table->integer('price');
            $table->integer('rating');
            $table->timestamps();

            $table->foreign('id_hotel')->references('id')->on('hotels');
            $table->foreign('id_room_size')->references('id')->on('room_size');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_rooms');
    }
}
