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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->date('date_hour');
            $table->string('motive', 50);
            $table->string('floor_num', 20);

            $table->string('observations', 20)->nullable();

            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('nurse_id');
		    $table->unsignedBigInteger('patient_id');

            $table->foreign('doctor_id')
            ->references('id')
            ->on('doctors')
            ->onDelete('cascade');

            $table->foreign('nurse_id')
            ->references('id')
            ->on('nurses')
            ->onDelete('cascade');

            $table->foreign('patient_id')
            ->references('id')
            ->on('patients')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
