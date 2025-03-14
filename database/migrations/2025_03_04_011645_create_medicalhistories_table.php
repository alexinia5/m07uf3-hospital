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
        Schema::create('medicalhistories', function (Blueprint $table) {
            $table->id('history_id');
            $table->date('date');
            $table->string('diagnosis', 50);
            $table->string('treatment', 50);

            $table->unsignedBigInteger('patient_id')->unique();
            $table->foreign('patient_id')
			->references('patient_id')
			->on('patients');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicalhistories');
    }
};
