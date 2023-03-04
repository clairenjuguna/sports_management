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
        Schema::create('points', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('team_id');
            $table->unsignedBigInteger('game_id');
            $table->unsignedBigInteger('student_athlete_id');
            $table->integer('points_scored');
            $table->timestamps();

            $table->foreign('team_id')->references('id')->on('team');
            $table->foreign('game_id')->references('id')->on('game');
            $table->foreign('student_athlete_id')->references('user_id')->on('student_athlete');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('points');
    }
};
