<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings',function(Blueprint $table){
            $table->string('id');
            $table->string('name');
            $table->string('photo');
            $table->dateTime('check_in');
            $table->dateTime('check_out');
            $table->integer('room');
            $table->foreign('room')->references('room_number')->on('rooms')->onDelete('cascade');
            $table->string('requests');
            $table->dateTime('booking_date');
            $table->integer('price');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
