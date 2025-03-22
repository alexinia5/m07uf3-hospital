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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('dni', 8);
            $table->string('gender', 10);
            $table->string('name', 50);
            $table->string('phone');
            $table->string('position', 30);

            $table->unsignedBigInteger('specialty_id');
			$table->foreign('specialty_id')
            ->references('id')
            ->on('specialties')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
