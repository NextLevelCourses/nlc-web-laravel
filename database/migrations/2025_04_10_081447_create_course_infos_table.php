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
        Schema::create('course_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained();
            $table->string('title', 45);
            $table->string('slug', 45);
            $table->text('about')->nullable();
            $table->integer('quota')->nullable();
            $table->string('level', 120)->nullable();
            $table->enum('visibility', ['public', 'private'])->nullable(); // asumsi nilai enum
            $table->enum('question_answer', ['1', '0'])->default('0');
            $table->string('regular_price', 120)->nullable();
            $table->string('discount_price', 120)->nullable();
            $table->enum('status_price', ['paid', 'free'])->default('free');
            $table->string('thumbnail', 45)->nullable();
            $table->foreignId('categories_id')->references('id')->on('categories');
            $table->timestamps();

            // Optional: Tambahkan foreign key jika tabel courses dan categories ada
            // $table->foreign('courses_id')->references('id')->on('courses')->onDelete('cascade');
            // $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_infos');
    }
};
