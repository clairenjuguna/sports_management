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
        Schema::create('team', function (Blueprint $table) {
            $table->id();
            $table->string('team_name');
            $table->unsignedBigInteger('coach_id');
            $table->unsignedBigInteger('sport_id');
            $table->timestamps();

            $table->foreign('coach_id')->references('id')->on('coach')->onDelete('cascade');
            $table->foreign('sport_id')->references('id')->on('sport')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team');
    }
};
