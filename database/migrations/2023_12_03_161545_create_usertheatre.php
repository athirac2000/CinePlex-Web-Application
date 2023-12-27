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
        Schema::create('usertheatre', function (Blueprint $table) {
            $table->id();
            $table->string('moviename');
            $table->string('image');
            
           
            $table->integer('theatre_id');
            $table->string('time');
            $table->bigInteger('seats');
            $table->string('date');
            $table->bigInteger('price');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usertheatre');
    }
};
