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
        //
        Schema::create('pechay_diseases', function (Blueprint $table) {
            $table->id();
            $table->string('disease_name');
            $table->string('scientific_name');
            $table->text('description')->nullable();
            $table->text('symptoms');
            $table->text('control_measure');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Drop if exist
        Schema::dropIfExists('pechay_diseases');
    }
};
