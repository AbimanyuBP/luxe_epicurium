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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id('reservation_id');
            $table->foreignId('user_id');
            $table->foreignId('table_id');
            $table->foreignId('restaurant_id');
            $table->dateTime('reservation_date');
            $table->integer('party_size');
            $table->text('request');
            $table->integer('status'); // 0 for confirmed, 1 for cancelled reservation
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
