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
        //course private for private class
        Schema::create('course_privates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->references('id')->on('users');
            $table->string('title', 45);
            $table->text('description');
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('status', ['general', 'project']); //status private class if mentoring project or private mentoring
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_privates');
    }
};
