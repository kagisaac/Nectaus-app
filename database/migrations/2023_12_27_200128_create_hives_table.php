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
        Schema::create('hives', function (Blueprint $table) {
            $table->id();
            $table->string('hiveSN')->unique();
            $table->string('deviceSIN')->unique();
            $table->string('hiveOwner');
            $table->string('dimensions');
            $table->string('weight');
            $table->enum('status', ['active', 'inactive', 'meantainence']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hives');
    }
};