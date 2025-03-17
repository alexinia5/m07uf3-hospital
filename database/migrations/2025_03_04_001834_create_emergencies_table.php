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
        Schema::create('emergencies', function (Blueprint $table) {
            $table->id('emergency_id');
            $table->date('date');
            $table->string('level', 15);
            $table->string('diagnosis', 50);
            $table->string('floor_num', 20);

            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')
            ->references('patient_id')
            ->on('patients');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emergencies');
    }
};
