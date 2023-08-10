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
        Schema::create('type_courriers', function (Blueprint $table) {
            $table->id();
            $table->string('libelle_t');
            $table->unsignedBigInteger('id_courrR');
            $table->foreign('id_courrR')->references('id')->on('courrier_recus')->onDelete('cascade');
            $table->unsignedBigInteger('id_courrE');
            $table->foreign('id_courrE')->references('id')->on('courrier_envs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_courriers');
    }
};
