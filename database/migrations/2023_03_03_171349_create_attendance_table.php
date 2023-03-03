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
            $table->foreignId('team_id')->constrained('teams');
            $table->foreignId('student_id')->constrained('student_athletes');
            $table->foreignId('coach_id')->constrained('coaches');
            $table->date('date');
            $table->time('time');
            $table->boolean('present')->default(false);
            $table->foreignId('name')->constrained('users');
            $table->timestamps();
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
