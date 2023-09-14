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
        Schema::create('tables', function (Blueprint $table) {
            $table->id('table_id');
            $table->foreignId('restaurant_id');
            $table->integer('capacity');
            $table->string('table_number');
            $table->text('description'); // describe the table in short detail
            $table->string('accessibility'); // define how the table can accomodate specific client needs, wheel chair accessible, for big groups, sunlit, near a window, etc
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tables');
    }
};
