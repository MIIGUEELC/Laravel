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
        Schema::create('rooms',function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('photo');
            $table->string('bed_type');
            $table->integer('room_number')->unique();
            $table->string('facilities');
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
