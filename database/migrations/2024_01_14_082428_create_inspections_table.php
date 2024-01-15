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
        Schema::create('inspections', function (Blueprint $table) {
            $table->id();
            $table->string('hiveSN');
            $table->string('temperature');
            $table->string('humidity');
            $table->string('soundIntensity');
            $table->string('weight');
            $table->enum('healthStatus', ['healthy', 'good', 'moderate', 'bad', 'creitical']);
            $table->string('deseases');
            $table->string('summary');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspections');
    }
};