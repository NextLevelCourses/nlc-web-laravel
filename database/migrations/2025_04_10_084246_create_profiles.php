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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 45)->nullable();
            $table->string('place', 45)->nullable();
            $table->date('birthday')->nullable();
            $table->string('photo', 45)->nullable();
            $table->string('provinsi', 45)->nullable();
            $table->string('city', 45)->nullable();
            $table->unsignedBigInteger('users_id');
            $table->timestamps();

            // Foreign key ke tabel users
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
