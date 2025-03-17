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
        
        Schema::create('doctor_emergency', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('doctor_id');
		    $table->unsignedBigInteger('emergency_id');

		    $table->foreign('doctor_id')->references('doctor_id')->on('doctors')->onDelete('cascade');
		    $table->foreign('emergency_id')->references('emergency_id')->on('emergencies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_emergency');
    }
};
