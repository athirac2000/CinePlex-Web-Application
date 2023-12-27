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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('theatre_id');
            $table->integer('movie_id');
            $table->integer('user_id');
            $table->string('image');
            $table->string('movie_name');
            $table->string('theatre_name');

            $table->bigInteger('price');
            $table->string('time');
            $table->string('date');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
