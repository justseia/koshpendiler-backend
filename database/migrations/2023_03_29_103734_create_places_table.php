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
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('image');
            $table->text('location_short');
            $table->text('body');
            $table->text('duration');
            $table->text('distance');
            $table->text('level');
            $table->integer('cost');
            $table->text('to_destination');
            $table->text('with_you');
            $table->text('location');
            $table->json('filter');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('places');
    }
};
