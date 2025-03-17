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
        Schema::create('emergency_nurse', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('nurse_id');
		    $table->unsignedBigInteger('emergency_id');

		    $table->foreign('nurse_id')->references('nurse_id')->on('nurses')->onDelete('cascade');
		    $table->foreign('emergency_id')->references('emergency_id')->on('emergencies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emergency_nurse');
    }
};
