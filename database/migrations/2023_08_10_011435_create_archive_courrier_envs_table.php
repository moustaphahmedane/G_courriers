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
        Schema::create('archive_courrier_envs', function (Blueprint $table) {
            $table->id();
            $table->date('date_archivage');
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
        Schema::dropIfExists('archive_courrier_envs');
    }
};
