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
        Schema::create('films_personnes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('film');
            $table->unsignedBigInteger('personne');
            $table->string('role',100);
            $table->timestamps();
            $table->foreign('film')->references('id')->on('films');
            $table->foreign('personne')->references('id')->on('personnes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films_personnes');
    }
};
