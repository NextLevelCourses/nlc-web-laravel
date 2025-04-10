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
        Schema::create('course_certificate', function (Blueprint $table) {
            $table->id();
            $table->enum('orientation', ['landscape', 'potrait']); 
            $table->string('file', 45);
            $table->foreignId('courses_id')->constrained('courses'); // Assuming the parent table is 'courses'
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_certificate');
    }
};