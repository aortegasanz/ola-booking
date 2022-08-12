<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->date('start_date');
            $table->date('end_date');
            $table->smallInteger('pax')->unsigned();            
            $table->string('room_number');
            $table->double('booking_amount', 8, 2);
            $table->unsignedBigInteger('status_booking_id');
            $table->unsignedBigInteger('contact_id');
            $table->unsignedBigInteger('room_type_id');
            $table->unsignedBigInteger('room_id');
            $table->timestamps();

            // Foreign Keys
            $table->foreign('status_booking_id')->references('id')->on('status_bookings');
            $table->foreign('room_type_id')->references('id')->on('room_types');
            $table->foreign('contact_id')->references('id')->on('contacts');
            $table->foreign('room_id')->references('id')->on('rooms');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*
        Schema::table('rooms', function($table)
        {
            $table->dropForeign('status_booking_id');
            $table->dropForeign('room_type_id');
            $table->dropForeign('contact_id');
            $table->dropForeign('room_id');
        });
        */
        Schema::dropIfExists('bookings');

    }
};
