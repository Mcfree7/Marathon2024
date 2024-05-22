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
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->text('Nom');
            $table->text('Prenom');
            $table->string('Email');
            $table->text('Telephone');
            $table->text('Nationalite');
            $table->text('Genre');
            $table->text('Categorie');
            $table->string('Photo');
            $table->string('Passport');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscriptions');
    }
};
