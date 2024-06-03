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
        Schema::create('galerie_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('galerie_id');
            $table->string('path');
            $table->timestamps();
            $table->foreign('galerie_id')->references('id')->on('galeries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galerie_images');
    }
};
