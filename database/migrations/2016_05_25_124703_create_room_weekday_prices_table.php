<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomWeekdayPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_weekday_prices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('room_id')->unsigned()->unique();
            $table->integer('sunday');
            $table->integer('monday');
            $table->integer('tuesday');
            $table->integer('wednesday');
            $table->integer('thursday');
            $table->integer('friday');
            $table->integer('saturday');
            $table->timestamps();

            $table->foreign('room_id')->references('room_id')->on('property_rooms')->onDelete('cascade');
            // $table->primary(['room_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign('room_weekday_prices_room_id_foreign');
        Schema::drop('room_weekday_prices');
    }
}
