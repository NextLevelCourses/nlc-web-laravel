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
        Schema::create('course_additional_informations', function (Blueprint $table) {
            $table->id();
            $table->date('start_date')->nullable();
            $table->string('language', 45)->nullable();
            $table->string('requirement', 45)->nullable();
            $table->string('description', 45)->nullable();
            $table->string('total_course_duration_hour', 45)->nullable();
            $table->string('total_course_duration_minute', 45)->nullable();
            $table->text('tags')->nullable();
            $table->text('target_audience')->nullable();
            $table->foreignId('courses_id')->references('id')->on('courses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_additional_informations');
    }
};
