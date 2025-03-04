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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id('rooms_id');
            $table->string('availability', 2);
            $table->date('date_admission');
            $table->string('floor_num', 20);

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
        Schema::dropIfExists('rooms');
    }
};
