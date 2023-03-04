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
        Schema::create('attendance', function (Blueprint $table) {
            $table->id('attendance_id');
            $table->unsignedBigInteger('team_id');
            $table->unsignedBigInteger('student_athlete_id');
            $table->unsignedBigInteger('coach_id');
            $table->date('date');
            $table->time('time');
            $table->boolean('present');
            $table->unsignedBigInteger('user_id');

            $table->foreign('team_id')->references('id')->on('team')->onDelete('cascade');
            $table->foreign('student_athlete_id')->references('id')->on('student_athlete')->onDelete('cascade');
            $table->foreign('coach_id')->references('id')->on('coach')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendance');
    }
};
