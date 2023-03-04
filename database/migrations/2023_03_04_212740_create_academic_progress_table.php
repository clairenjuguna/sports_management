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
        Schema::create('academic_progress', function (Blueprint $table) {
            $table->id('progress_id');
            $table->unsignedBigInteger('student_athlete_id');
            $table->string('term');
            $table->text('courses_taken')->nullable();
            $table->text('grades')->nullable();

            $table->foreign('student_athlete_id')->references('id')->on('student_athlete')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academic_progress');
    }
};
