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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('titre',100);
            $table->text('resume',100);
            $table->string('pochette',200);
            $table->string('durée',25);
            $table->integer('année');
            $table->string('lienVideo',100);
            $table->string('type',50);
            $table->string('brand',100);
            $table->integer('cote');
            $table->integer('rating');
            $table->text('langues',400);
            $table->text('sousTitres',400);
            //ADD TO SEEDER
            $table->timestamps();
            $table->foreignId('realisateur_id')->constrained('personnes');
            $table->foreignId('producteur_id')->constrained('personnes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
