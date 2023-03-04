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
        Schema::create('awards', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['student-athlete', 'team', 'coach']);
            $table->unsignedBigInteger('recipient_id');
            $table->string('recipient_name');
            $table->date('date');
            $table->time('time');
            $table->timestamps();

            $table->foreign('recipient_id')->references('id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('awards');
    }
};
