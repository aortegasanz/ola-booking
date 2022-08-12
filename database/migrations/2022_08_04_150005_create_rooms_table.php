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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('services')->nullable();
            $table->string('room_number');
            $table->unsignedBigInteger('room_type_id');
            $table->unsignedBigInteger('status_room_id');
            $table->timestamps();
            $table->foreign('room_type_id')->references('id')->on('room_types');
            $table->foreign('status_room_id')->references('id')->on('status_rooms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Delete Foreign Keys
        /*
        Schema::table('rooms', function($table)
        {
            $table->dropForeign('room_type_id');
            $table->dropForeign('status_room_id');
        });
        */
        Schema::dropIfExists('rooms');

    }
};
