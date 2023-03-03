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
            $table->foreignId('student_id')->constrained('student_athletes');
            $table->string('term');
            $table->json('courses_taken')->nullable();
            $table->json('grades')->nullable();
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
