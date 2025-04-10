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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // student, teacher, admin
            $table->timestamps();
        });

        // Optional: Seed default roles langsung dari migration (atau bisa pakai seeder nanti)
        // DB::table('roles')->insert([
        //     ['name' => 'student'],
        //     ['name' => 'teacher'],
        //     ['name' => 'admin'],
        // ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
