<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_rooms', function (Blueprint $table) {
            $table->increments('room_id');
            $table->integer('property_id')->unsigned();
            $table->string('room_type');
            $table->float('price');
            $table->integer('beds');
            $table->integer('count');
            $table->timestamps();

            $table->foreign('property_id')->references('property_id')->on('properties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('property_rooms');
    }
}
