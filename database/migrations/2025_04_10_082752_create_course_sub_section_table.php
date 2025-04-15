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
        Schema::create('course_sub_sections', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45);
            $table->string('summary', 45);
            $table->string('image', 45)->nullable();
            $table->string('source', 45)->nullable();
            $table->string('playback_source_hour', 45)->nullable();
            $table->string('playback_source_minute', 45)->nullable();
            $table->string('playback_source_second', 45)->nullable();
            $table->string('attachment', 45)->nullable();
            $table->tinyInteger('status_course_preview')->default(0);
            $table->foreignId('course_sections_id')->references('id')->on('course_sections');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_sub_sections');
    }
};
